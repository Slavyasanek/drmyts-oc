const product_id = document.getElementById('product_id_handle').value;

// STAR RATING FOR REVIEW FORM
class StarRating {

    constructor(containerSelector) {
        this.container = typeof containerSelector === 'string' ? document.querySelector(containerSelector) : containerSelector;
        if (!this.container) {
            console.error(`StarRating Error: Container not found for selector "${containerSelector}"`);
            return;
        }

        this.stars = this.container.querySelectorAll('.form-rating__star');
        this.hiddenInput = this.container.querySelector('#review-rating'); 
        this.selectedRating = 0; 
        
        this.initialize();
    }

    /**
     * Helper function to visually update the stars.
     * @param {number} rating The rating value up to which stars should be filled.
     */
    updateStarDisplay(rating) {
        this.stars.forEach(star => {
            const starValue = parseInt(star.getAttribute('data-rating'));
            const emptyStar = star.querySelector('.form-rating__star-empty');
            const fullStar = star.querySelector('.form-rating__star-full');

            if (starValue <= rating) {
                // Fill 
                emptyStar.classList.add('d-none');
                fullStar.classList.remove('d-none');
            } else {
                // Empty 
                emptyStar.classList.remove('d-none');
                fullStar.classList.add('d-none');
            }
        });
    }

    // SET CHOSEN RATING
    setRating(rating) {
        this.selectedRating = rating;
        if (this.hiddenInput) {
            this.hiddenInput.value = rating;
        }
        this.updateStarDisplay(rating);
    }

    // EVENTS
    initialize() {
        if (this.hiddenInput && this.hiddenInput.value) {
            this.selectedRating = parseInt(this.hiddenInput.value);
            this.updateStarDisplay(this.selectedRating);
        }

        this.stars.forEach(star => {
            const ratingValue = parseInt(star.getAttribute('data-rating'));

            star.addEventListener('click', () => {
                this.setRating(ratingValue);
            });
            star.addEventListener('mouseover', () => {
                this.updateStarDisplay(ratingValue);
            });
            star.addEventListener('mouseout', () => {
                this.updateStarDisplay(this.selectedRating);
            });
        });
    }
}

// PRODUCT GALLERY
const galleryEls = {
    thumbs: document.querySelector('.product-gallery__thumbs'),
    main: document.querySelector('.product-gallery__main-gallery'),
    prevBtn: document.querySelector('.product-gallery__arrow--prev'),
    nextBtn: document.querySelector('.product-gallery__arrow--next')
}

if (galleryEls.main.querySelectorAll('.splide__slide').length > 1 && typeof Splide !== 'undefined') {
    const mainSlider = new Splide(galleryEls.main, {
        rewind: true,
        pagination: false,
        arrows: false,
        gap: 4,
    });

    if (galleryEls.thumbs) {
        const thumbnailsSlider = new Splide(galleryEls.thumbs, {
            perPage: 3,
        	gap       : 4,
        	rewind    : true,
        	pagination: false,
            isNavigation: true,
            arrows: false,
            mediaQuery: 'min',
            breakpoints: {
                640: {
                    direction: 'ttb',
                    height: '18.8rem'
                }
            }
        });
        mainSlider.sync(thumbnailsSlider);
        thumbnailsSlider.mount();
    }

    mainSlider.mount();

    if (galleryEls.prevBtn || galleryEls.nextBtn) {
        if (galleryEls.prevBtn) galleryEls.prevBtn.addEventListener("click", () => mainSlider.go("<"));
        if (galleryEls.nextBtn) galleryEls.nextBtn.addEventListener("click", () => mainSlider.go(">"))
    }

    const lightbox = new PhotoSwipeLightbox({
        gallery: galleryEls.main.querySelector('.splide__list'),
        children: 'a',
        pswpModule: PhotoSwipe 
    });
    lightbox.init();
}

// PRODDUCT REVIEWS
if (document.querySelector('.product-reviews')) {
    // review form els & toggler
    if (document.querySelector('.form-rating')) new StarRating('.form-rating');

    const reviewForm = document.querySelector('.review-form');
    const reviewsList = document.querySelector('.product-reviews__list')
    const openReviewFormButton = document.querySelector('.product-reviews__btn');
    const previewList = document.querySelector('.photo-upload__list');

    const toggleReviewForm = (isOpen = false) => {
        if (isOpen) {
            if (reviewForm) reviewForm.classList.remove('d-none');
            if (reviewsList) reviewsList.classList.add('d-none');
            if (openReviewFormButton) openReviewFormButton.classList.add('d-none');
        } else {
            if (reviewForm) reviewForm.classList.add('d-none');
            if (reviewsList) reviewsList.classList.remove('d-none');
            if (openReviewFormButton) openReviewFormButton.classList.remove('d-none');
        }
    }

    if (openReviewFormButton) openReviewFormButton.addEventListener("click", () => toggleReviewForm(true));
    const closeReviewFormBtn = document.querySelector('.review-form__close');
    if (closeReviewFormBtn) closeReviewFormBtn.addEventListener("click", () => toggleReviewForm(false));

    // INITIALIZE REVIEWS
    const review = document.getElementById('review');

    function loadReviews(url) {
        fetch(url)
            .then(r => r.text())
            .then(html => {
                review.innerHTML = html;

                if (document.querySelector('.product-review__imgs')) {
                    Array.from(document.querySelectorAll('.product-review__imgs')).forEach(gallery => {
                        const lightbox = new PhotoSwipeLightbox({
                            gallery: gallery,
                            children: 'a',
                            pswpModule: PhotoSwipe 
                        });
                        lightbox.init();
                    })
                }
            });
    }

    review?.addEventListener('click', e => {
        const link = e.target.closest('.pagination a');
        if (!link) return;

        e.preventDefault();
        loadReviews(link.href);
    });

    // LOAD REVIEWS
    loadReviews(`index.php?route=product/product/review&product_id=${product_id}`);
    
    // SUBMIT SINGLE REVIEW
    document.getElementById('button-review')?.addEventListener('click', (e) => {
        e.preventDefault(); 

        fetch(`index.php?route=product/product/write&product_id=${product_id}`, {
            method: 'POST',
            body: new FormData(reviewForm)
        })
        .then(r => r.json())
        .then(json => {
            document.querySelectorAll('.alert--error').forEach(e => e.remove());

            if (json.error) {
                reviewForm.before(Object.assign(document.createElement('div'), {
                    className: 'alert alert--error text--center alert--in-txt',
                    innerHTML: `${json.error}`
                }));
            }

            if (json.success) {
                reviewForm.before(Object.assign(document.createElement('div'), {
                    className: 'alert alert--success text--center alert--in-txt',
                    innerHTML: `${json.success}`
                }));

                reviewForm.reset();
                if (previewList) previewList.innerHTML = '';
                toggleReviewForm(false);
            }
        })
        .catch(err => console.error('Помилка відправки:', err));
    });
}

// PRODUCT SLIDERS
if (document.querySelector('#related-slider') && typeof Splide !== 'undefined') {
    Array.from(document.querySelectorAll('#related-slider .splide')).forEach(sl => {
        new Splide(sl, {
            perPage: 2,
            gap: ".8rem",
            pagination: false,
            drag: true,
            mediaQuery: 'min',
            breakpoints: {
                640: { 
                    perPage: 3,
                    gap: ".8rem",
                },
                960: {
                    destroy: true,
                }
            }
        }).mount();
    })
}

// let uploadTimer;

// document.querySelectorAll('button[id^="button-upload"]').forEach(btn => {
//     btn.addEventListener('click', () => {
//         document.getElementById('form-upload')?.remove();

//         const form = document.createElement('form');
//         form.id = 'form-upload';
//         form.enctype = 'multipart/form-data';
//         form.style.display = 'none';
//         form.innerHTML = '<input type="file" name="file">';
//         document.body.prepend(form);

//         const input = form.querySelector('input[type="file"]');
//         input.click();

//         clearInterval(uploadTimer);

//         uploadTimer = setInterval(() => {
//             if (!input.value) return;

//             clearInterval(uploadTimer);

//             fetch('index.php?route=tool/upload', {
//                 method: 'POST',
//                 body: new FormData(form)
//             })
//             .then(r => r.json())
//             .then(json => {
//                 form.remove();

//                 btn.parentElement.querySelector('.text-danger')?.remove();

//                 if (json.error) {
//                     const err = document.createElement('div');
//                     err.className = 'text-danger';
//                     err.innerHTML = json.error;
//                     btn.parentElement.querySelector('input')?.after(err);
//                 }

//                 if (json.success) {
//                     alert(json.success);
//                     btn.parentElement.querySelector('input').value = json.code;
//                 }
//             });
//         }, 500);
//     });
// });

const buttons = {
    cart: document.getElementById('button-cart'),
    fastBuy: document.getElementById('button-quick-buy')
}

const loading = (load = true) => {
    if (load) {
        buttons.cart.classList.add('loading');
        buttons.fastBuy.classList.add('loading');
    } else {
        buttons.cart.classList.remove('loading');
        buttons.fastBuy.classList.remove('loading');
    }
}

const formProductData = () => {
    const container = document.getElementById('product');
    const formData = new FormData();

    container.querySelectorAll('input, select, textarea').forEach(el => {
        if (!el.name) return;
        if ((el.type === 'checkbox' || el.type === 'radio') && !el.checked) return;
        formData.append(el.name, el.value);
    });

    return formData;
}

const removeErrors = () => {
    document.querySelectorAll('.alert-dismissible, .text-danger, .alert--error, .product-page__error').forEach(e => e.remove());
    document.querySelectorAll('.form-group').forEach(e => e.classList.remove('has-error'));
}

const highlighteErrors = (errors) => {
    if (errors.option) {
        Object.keys(errors.option).forEach(i => {
            const el = document.getElementById('input-option' + i.replace('_', '-'));
            if (!el) return;

            const error = document.createElement('div');
            error.className = 'product-page__error text--color_red';
            error.innerHTML = errors.option[i];

            el.parentElement.classList.contains('input-group')
                ? el.parentElement.after(error)
                : el.after(error);
        });
    }

    document.querySelectorAll('.text-danger').forEach(e => e.parentElement.classList.add('has-error'));
}


buttons.cart?.addEventListener('click', () => {
    const formData = formProductData();
    loading(true);

    fetch('index.php?route=checkout/cart/add', {
        method: 'POST',
        body: formData
    })
    .then(r => r.json())
    .then(json => {
        removeErrors();

        if (json.error) highlighteErrors(json.error);
        if (json.success) {
            window.scrollTo({ top: 0, behavior: 'smooth' });

            fetch('index.php?route=common/cart/info')
                .then(r => r.text())
                .then(html => {
                    const temp = document.createElement('div');
                    temp.innerHTML = html;

                    const cart = document.getElementById('cart');
                    if (cart) {
                        cart.innerHTML = temp.querySelector('#cart').innerHTML;
                        modalHandler.openModal(cart.querySelector('.backdrop'));
                    }
                });
        }
    })
    .catch(err => alert(err))
    .finally(() => {
        loading(false);
    })
});

buttons.fastBuy?.addEventListener('click', () => {
    const formData = formProductData();
    loading(true);

    fetch('index.php?route=checkout/cart/add', {
        method: 'POST',
        body: formData
    })
    .then(r => r.json())
    .then(json => {
        removeErrors();

        if (json.error) highlighteErrors(json.error);

        if (json.success) {
            window.location.href = checkoutUrl;
        }
    })
    .catch(err => console.error('Помилка швидкої покупки:', err))
    .finally(() => {
        loading(false);
    });
});

if (document.querySelector('.product-variants__options--color')) {
    Array.from(document.querySelectorAll('.product-variants__options--color')).forEach(colorOptions => {
        const outputSpan = colorOptions.querySelector('.product-variants__chosen');

        colorOptions.addEventListener("click", e => {

            if (e.target.closest('.product-vairants__option')) {
                const content = e.target.closest('.product-vairants__option').dataset.optionName;
                if (content) outputSpan.textContent = content;
            } else if (e.target.closest('.product-variants__color-label')) {
                const content = e.target.closest('.product-variants__color-label').textContent;
                if (content) outputSpan.textContent = content;
            }
        })
    })
}