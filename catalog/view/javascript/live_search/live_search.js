class LiveSearch {
    constructor(options) {
        this.options = {
            selector: "#search input[name='search']",
            module_live_search_min_length: 1,
            module_live_search_show_image: true,
            module_live_search_show_price: true,
            module_live_search_show_description: 0,
            module_live_search_show_add_button: 0,
            all_search_href: 'index.php?route=product/search',
            ...options
        };

        Object.entries(this.options).forEach(([key, value]) => {
            if (!isNaN(Number(value))) {
                this.options[key] = Boolean(Number(value));
            }
        })
        console.log(this.options);
        
        
        this.input = document.querySelector(this.options.selector);

        if (!this.input) {
            console.warn('LiveSearch: Input field not found');
            return;
        }

        this.form = this.input.closest('.search-form');

        if (!this.form) {
            console.warn('LiveSearch: Container not found');
            return;
        }
        this.liveSearchContainer = this.form.querySelector('.live-search');

        if (!this.liveSearchContainer) {
            console.warn('LiveSearch: live search was not found');
            return;
        }
        this.closeButtons = this.form.querySelectorAll('.search-form__close');
        this.resultText = this.form.querySelector('.search-products__view-all');
        this.productList =  this.form.querySelector('.search-products__products');
        this.textItemsList = this.form.querySelector('.live-search__text-items');
        this.productsBlock = this.form.querySelector('.live-search__products');

        this.states = {
            history: this.form.querySelector('.live-search__history'),
            searching: this.form.querySelector('.live-search__searching'),
            noResults: this.form.querySelector('.live-search__no-results'),
            results: this.form.querySelector('.live-search__results'),
        };

        this.ACTIVE_CLASS = 'active';
        this.D_NONE_CLASS = 'd-none';
        this.SEARCH_DELAY = 400;

        this.bindEvents();
    }

    bindEvents() {
        const debouncedInput = this.debounce(this.handleInput.bind(this), this.SEARCH_DELAY);
        
        this.input.addEventListener('input', debouncedInput);
        this.input.addEventListener('focus', () => this.activate());

        // close buttons
        this.closeButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                this.deactivate();
            });
        });

        // handle click outside
        if (window.matchMedia('(min-width: 960px)').matches) {
            document.addEventListener('mouseup', (e) => this.handleClickOutside(e));
            
        } else {
            document.addEventListener('touchend', (e) => this.handleClickOutside(e));
        }

        window.matchMedia('(min-width: 960px)').addEventListener("change", e => {
            if (e.target.matches) {
                document.addEventListener('mouseup', (e) => this.handleClickOutside(e));
                document.removeEventListener('touchend', (e) => this.handleClickOutside(e));
            } else {
                document.addEventListener('touchend', (e) => this.handleClickOutside(e));
                document.removeEventListener('mouseup', (e) => this.handleClickOutside(e));
            }
        })

        // close escape
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && this.form.classList.contains(this.ACTIVE_CLASS)) {
                this.deactivate();
            }
        });
        
    }

    // RESET CONTENT FOR ALL STATES
    _resetContent() {
        Object.values(this.states).forEach(el => {
            if (el) el.classList.add(this.D_NONE_CLASS);
        });
    }
    
    // activate block
    activate(e) {
        console.log('activate LiveSearch');
        
        if (!this.form.classList.contains(this.ACTIVE_CLASS)) {
            this.form.classList.add(this.ACTIVE_CLASS);
            enableScroll(false);
            this.showLiveSearchContainer(true);
        }
    }

    
    // deactivate block
    deactivate() {
        console.log('deactivate LiveSearch');

        if (this.form.classList.contains(this.ACTIVE_CLASS)) {
           this.form.classList.remove(this.ACTIVE_CLASS);
            enableScroll(true);
            this.showLiveSearchContainer(false);     
        }
    }

    // TEST FUNCTION TO RENDER SEARCH PRODUCT
    renderSearchProduct = (data) => {
        const clone = document.getElementById('searchProductItem').content.cloneNode(true);

        if (data.image && this.options.module_live_search_show_image) {
            clone.querySelector('.cart-item__img img').src = data.image;
            clone.querySelector('.cart-item__img img').alt = data.name;
            clone.querySelector('.cart-item__link').href = data.url.replaceAll('&amp;', "&");
        } else clone.querySelector('.cart-item__img').remove();


        clone.querySelector('.cart-item__availability').textContent = data.stock_status;
        clone.querySelector('.cart-item__title').href = data.url.replaceAll('&amp;', "&");
        clone.querySelector('.cart-item__title').textContent = data.name;

        if (data.type) {
            clone.querySelector('.cart-item__type').textContent = data.type;
        } else clone.querySelector('.cart-item__type').remove();

        if (this.options.module_live_search_show_price) {
            if (data.special) {
                clone.querySelector('.product-price__sale').textContent = data.special;
                clone.querySelector('.product-price__full').textContent = data.price;
            } else {
                clone.querySelector('.product-price__sale').remove();
                clone.querySelector('.product-price__full').textContent = data.price;
                clone.querySelector('.product-price').classList.remove('product-price--sale');
            }
        } else {
            clone.querySelector('.product-price').remove();
        }

        return clone;
    }

    // Find coincidences in text
    createHighlightedTextElement(text, keyword) {
        const escapedKeyword = keyword.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
        const regex = new RegExp(`(${escapedKeyword})`, 'gi');
        const parts = text.split(regex); 
        return parts;
    }

    // render text search item
    renderSearchTextItem = (data, searchText) => {
        const clone = document.getElementById('searchTextItem').content.cloneNode(true);
        clone.querySelector('.live-search__item').href = data.url.replaceAll('&amp;', "&");
        const parts = this.createHighlightedTextElement(data.name, searchText);
        const textContainer = clone.querySelector('.search-text-item__text');

        if (parts.length > 0) {
            parts.forEach(part => {
                if (part.toLowerCase() === searchText.toLowerCase()) {
                    const strong = document.createElement('strong');
                    strong.textContent = part;
                    textContainer.appendChild(strong);
                } else {
                    const textNode = document.createTextNode(part);
                    textContainer.appendChild(textNode);
                }
            })
        } else {
            clone.querySelector('.search-text-item__text').textContent = data.name;
        }

        return clone;
    }

    // Input listener
    handleInput() {
        const filter_name = this.input.value;
        const minLength = parseInt(this.options.module_live_search_min_length, 10);

        if (filter_name.length < minLength) {
            this.showLiveSearchContainer(false);
            return;
        }

        this.performSearch(filter_name);
    }

    // fetch listener
    performSearch(filter_name) {
        const cat_id = 0; 
        
        let live_search_href = 'index.php?route=extension/module/live_search&filter_name=';
        let all_search_href = `${this.options.all_search_href}&search=`;

        const encodedFilter = encodeURIComponent(filter_name);
        
        if (cat_id > 0) {
            live_search_href += `${encodedFilter}&cat_id=${Math.abs(cat_id)}`;
            all_search_href += `${encodedFilter}&category_id=${Math.abs(cat_id)}`;
        } else {
            live_search_href += encodedFilter;
            all_search_href += encodedFilter;
        }

        this.showLoading(true);

        // Запрос
        fetch(live_search_href)
            .then(res => res.json())
            .then(json => {
                this.renderResults(json, all_search_href, filter_name);
            })
            .catch(err => {
                console.error('LiveSearch Error:', err);
                this.showResultsContainer(false);
            }).finally(() => {
                this.showLoading(false);
            })
    }

    // reset dynamic containers
    resetDynamicContent = () => {
        this.productList.innerHTML = "";
        this.textItemsList.innerHTML = "";
    }

    // RENDER RESULTS
    renderResults(result, all_search_href, filter_name) {
        const {products, manufacturers, categories} = result;
        this.resetDynamicContent();
        
        const hasProducts = Array.isArray(products) ? products.length > 0 : Object.keys(products).length > 0;
        const hasManufacturers = Array.isArray(manufacturers) ? manufacturers.length > 0 : Object.keys(manufacturers).length > 0;
        const hasCats = Array.isArray(categories) ? categories.length > 0 : Object.keys(categories).length > 0;

        if (hasProducts || hasManufacturers || hasCats) {
            // RENDER PRODUCTS
            if (hasProducts) {
                this.resultText.href = all_search_href;
                const productList = Array.isArray(products) ? products : Object.values(products);

                productList.forEach(product => {
                    this.productList.appendChild(this.renderSearchProduct(product));
                });
                this.toggleResultContainer(this.productsBlock, true);
            } else {
                this.toggleResultContainer(this.productsBlock, false);
            }
            
            // RENDER MANUFACTURERS
            if (hasManufacturers) {
                manufacturers.forEach(manufacturer => {
                    this.textItemsList.appendChild(this.renderSearchTextItem(manufacturer, filter_name));
                })
            }

            // RENDER CATS
            if (hasCats) {
                categories.forEach(cat => {
                    this.textItemsList.appendChild(this.renderSearchTextItem(cat, filter_name));
                })
            }

            if (hasManufacturers || hasCats) {
                this.toggleResultContainer(this.textItemsList, true);
            } else this.toggleResultContainer(this.textItemsList, false);

            this.showResultsContainer(true);
        } else {
            this.showResultsContainer(false);
        }
    }

    // toggler no results
    showResultsContainer(hasResults = true) {
        if (hasResults) {
            this.states.results.classList.remove(this.D_NONE_CLASS);
            if (this.states.noResults) this.states.noResults.classList.add(this.D_NONE_CLASS);
        } else {
            this.states.results.classList.add(this.D_NONE_CLASS);
            if (this.states.noResults) this.states.noResults.classList.remove(this.D_NONE_CLASS);
        }
    }

    // loader
    showLoading(isLoading = true) {
        if (isLoading) {
            this._resetContent();
            if (this.states.searching) this.states.searching.classList.remove(this.D_NONE_CLASS);
        } else {
            if (this.states.searching) this.states.searching.classList.add(this.D_NONE_CLASS);
        }
    }

    // show lIVE SEARCH CONTAINER
    showLiveSearchContainer(show = true) {
        if (show) {
            this.liveSearchContainer.classList.add(this.D_NONE_CLASS);
        } else this.liveSearchContainer.classList.remove(this.D_NONE_CLASS);
    }

    // click outside close
    handleClickOutside(e) {
        e.stopPropagation();

        if (this.liveSearchContainer && !this.liveSearchContainer.classList.contains(this.D_NONE_CLASS) && !e.target.closest('.search-form__header') && !this.input.contains(e.target)) {
            const isClickInside = this.liveSearchContainer.contains(e.target) || this.input.contains(e.target);

            if (!isClickInside) {
                this.deactivate();
            }
        }
    }

    // toggle block
    toggleResultContainer = (state, isShown) => {
        if (isShown) {
            state.classList.remove(this.D_NONE_CLASS)
        } else state.classList.add(this.D_NONE_CLASS);
    }

    debounce(func, wait) {
        let timeout;
        return function(...args) {
            const context = this;
            clearTimeout(timeout);
            timeout = setTimeout(() => func.apply(context, args), wait);
        };
    }
}
