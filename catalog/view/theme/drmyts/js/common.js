function getURLVar(key) {
	var value = [];

	var query = String(document.location).split('?');

	if (query[1]) {
		var part = query[1].split('&');

		for (i = 0; i < part.length; i++) {
			var data = part[i].split('=');

			if (data[0] && data[1]) {
				value[data[0]] = data[1];
			}
		}

		if (value[key]) {
			return value[key];
		} else {
			return '';
		}
	}
}

$(document).ready(function() {
	// Highlight any found errors
	$('.text-danger').each(function() {
		var element = $(this).parent().parent();

		if (element.hasClass('form-group')) {
			element.addClass('has-error');
		}
	});

	// Currency
	$('#form-currency .currency-select').on('click', function(e) {
		e.preventDefault();

		$('#form-currency input[name=\'code\']').val($(this).attr('name'));

		$('#form-currency').submit();
	});

	// Language
	$('#form-language .language-select').on('click', function(e) {
		e.preventDefault();

		$('#form-language input[name=\'code\']').val($(this).attr('name'));

		$('#form-language').submit();
	});

	/* Search */
	$('#search input[name=\'search\']').parent().find('button').on('click', function() {
		var url = $('base').attr('href') + 'index.php?route=product/search';

		var value = $('header #search input[name=\'search\']').val();

		if (value) {
			url += '&search=' + encodeURIComponent(value);
		}

		location = url;
	});

	$('#search input[name=\'search\']').on('keydown', function(e) {
		if (e.keyCode == 13) {
			$('header #search input[name=\'search\']').parent().find('button').trigger('click');
		}
	});

	// Menu
	$('#menu .dropdown-menu').each(function() {
		var menu = $('#menu').offset();
		var dropdown = $(this).parent().offset();

		var i = (dropdown.left + $(this).outerWidth()) - (menu.left + $('#menu').outerWidth());

		if (i > 0) {
			$(this).css('margin-left', '-' + (i + 10) + 'px');
		}
	});

	// Product List
	$('#list-view').click(function() {
		$('#content .product-grid > .clearfix').remove();

		$('#content .row > .product-grid').attr('class', 'product-layout product-list col-xs-12');
		$('#grid-view').removeClass('active');
		$('#list-view').addClass('active');

		localStorage.setItem('display', 'list');
	});

	// Product Grid
	$('#grid-view').click(function() {
		// What a shame bootstrap does not take into account dynamically loaded columns
		var cols = $('#column-right, #column-left').length;

		if (cols == 2) {
			$('#content .product-list').attr('class', 'product-layout product-grid col-lg-6 col-md-6 col-sm-12 col-xs-12');
		} else if (cols == 1) {
			$('#content .product-list').attr('class', 'product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');
		} else {
			$('#content .product-list').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');
		}

		$('#list-view').removeClass('active');
		$('#grid-view').addClass('active');

		localStorage.setItem('display', 'grid');
	});

	if (localStorage.getItem('display') == 'list') {
		$('#list-view').trigger('click');
		$('#list-view').addClass('active');
	} else {
		$('#grid-view').trigger('click');
		$('#grid-view').addClass('active');
	}

	// Checkout
	$(document).on('keydown', '#collapse-checkout-option input[name=\'email\'], #collapse-checkout-option input[name=\'password\']', function(e) {
		if (e.keyCode == 13) {
			$('#collapse-checkout-option #button-login').trigger('click');
		}
	});

	// // tooltips on hover
	// $('[data-toggle=\'tooltip\']').tooltip({container: 'body'});

	// // Makes tooltips work on ajax generated content
	// $(document).ajaxStop(function() {
	// 	$('[data-toggle=\'tooltip\']').tooltip({container: 'body'});
	// });
});

const updateCartMarkup = () => {
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

// Cart add remove functions
var cart = {
	'add': function(product_id, quantity) {
		$.ajax({
			url: 'index.php?route=checkout/cart/add',
			type: 'post',
			data: 'product_id=' + product_id + '&quantity=' + (typeof(quantity) != 'undefined' ? quantity : 1),
			dataType: 'json',
            beforeSend: function() {
                if (document.querySelector('.backdrop--cart')) document.querySelector('.backdrop--cart').classList.add('loading');
            },
            complete: function() {
                if (document.querySelector('.backdrop--cart')) document.querySelector('.backdrop--cart').classList.remove('loading');  
            },
			success: function(json) {
				document.querySelectorAll('.alert-dismissible, .text-danger, .alert--error, .product-page__error').forEach(e => e.remove());

				if (json['redirect']) {
					location = json['redirect'];
				}

				if (json['success']) {
					$('#content').parent().before('<div class="alert alert--success alert--fixed alert-dismissible"><button type="button" class="btn btn--icon alert__close" data-dismiss="alert">&times;</button> ' + json['success'] + '</div>');

					updateCartMarkup();
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	},
    'update': function(key, quantity) {
        var qtyData = {};
        qtyData[key] = (typeof(quantity) != 'undefined' ? quantity : 1);

        $.ajax({
            url: 'index.php?route=checkout/cart/edit',
            type: 'post',
            beforeSend: function() {
                if (document.querySelector('.backdrop--cart')) document.querySelector('.backdrop--cart').classList.add('loading');
            },
            complete: function() {
                if (document.querySelector('.backdrop--cart')) document.querySelector('.backdrop--cart').classList.remove('loading');  
            },
            data: { quantity: qtyData }, 
            dataType: 'json',
            success: function(json) {
                updateCartMarkup();
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    },
	'remove': function(key) {
		$.ajax({
			url: 'index.php?route=checkout/cart/remove',
			type: 'post',
			data: 'key=' + key,
			dataType: 'json',
            beforeSend: function() {
                if (document.querySelector('.backdrop--cart')) document.querySelector('.backdrop--cart').classList.add('loading');
            },
            complete: function() {
                if (document.querySelector('.backdrop--cart')) document.querySelector('.backdrop--cart').classList.remove('loading');  
            },
			success: function(json) {
                updateCartMarkup();
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	}
}

var voucher = {
	'add': function() {

	},
	'remove': function(key) {
		$.ajax({
			url: 'index.php?route=checkout/cart/remove',
			type: 'post',
			data: 'key=' + key,
			dataType: 'json',
			beforeSend: function() {
				$('#cart > button').button('loading');
			},
			complete: function() {
				$('#cart > button').button('reset');
			},
			success: function(json) {
				// Need to set timeout otherwise it wont update the total
				setTimeout(function () {
					$('#cart > button').html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> ' + json['total'] + '</span>');
				}, 100);

				if (getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') {
					location = 'index.php?route=checkout/cart';
				} else {
					$('#cart > ul').load('index.php?route=common/cart/info ul li');
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	}
}

var wishlist = {
	'add': function(product_id) {
		$.ajax({
			url: 'index.php?route=account/wishlist/add',
			type: 'post',
			data: 'product_id=' + product_id,
			dataType: 'json',
			success: function(json) {
				$('.alert-dismissible').remove();

				if (json['redirect']) {
					location = json['redirect'];
				}

				if (json['success']) {
                    $('[onclick="wishlist.add(\'' + product_id + '\');"]').addClass('liked');
					$('#content').before('<div class="alert alert--info alert--fixed alert-dismissible">  <button type="button" class="btn btn--icon alert__close" data-dismiss="alert">&times;</button>' + json['success'] + '</div>');
				}

				$('#wishlist-total').html(json['total']);
				$('#wishlist-total').attr('title', json['total']);

				$('html, body').animate({ scrollTop: 0 }, 'slow');
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	},
	'remove': function() {

	}
}

var compare = {
	'add': function(product_id) {
		$.ajax({
			url: 'index.php?route=product/compare/add',
			type: 'post',
			data: 'product_id=' + product_id,
			dataType: 'json',
			success: function(json) {
				$('.alert-dismissible').remove();

				if (json['success']) {
					$('#content').parent().before('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');

					$('#compare-total').html(json['total']);

					$('html, body').animate({ scrollTop: 0 }, 'slow');
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	},
	'remove': function() {

	}
}

/* Agree to Terms */
$(document).delegate('.agree', 'click', function(e) {
	e.preventDefault();

	$('#modal-agree').remove();

	var element = this;

	$.ajax({
		url: $(element).attr('href'),
		type: 'get',
		dataType: 'html',
		success: function(data) {
			html  = '<div id="modal-agree" class="modal">';
			html += '  <div class="modal-dialog">';
			html += '    <div class="modal-content">';
			html += '      <div class="modal-header">';
			html += '        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
			html += '        <h4 class="modal-title">' + $(element).text() + '</h4>';
			html += '      </div>';
			html += '      <div class="modal-body">' + data + '</div>';
			html += '    </div>';
			html += '  </div>';
			html += '</div>';

			$('body').append(html);

			$('#modal-agree').modal('show');
		}
	});
});

// Autocomplete */
(function($) {
	$.fn.autocomplete = function(option) {
		return this.each(function() {
			this.timer = null;
			this.items = new Array();

			$.extend(this, option);

			$(this).attr('autocomplete', 'off');

			// Focus
			$(this).on('focus', function() {
				this.request();
			});

			// Blur
			$(this).on('blur', function() {
				setTimeout(function(object) {
					object.hide();
				}, 200, this);
			});

			// Keydown
			$(this).on('keydown', function(event) {
				switch(event.keyCode) {
					case 27: // escape
						this.hide();
						break;
					default:
						this.request();
						break;
				}
			});

			// Click
			this.click = function(event) {
				event.preventDefault();

				value = $(event.target).parent().attr('data-value');

				if (value && this.items[value]) {
					this.select(this.items[value]);
				}
			}

			// Show
			this.show = function() {
				var pos = $(this).position();

				$(this).siblings('ul.dropdown-menu').css({
					top: pos.top + $(this).outerHeight(),
					left: pos.left
				});

				$(this).siblings('ul.dropdown-menu').show();
			}

			// Hide
			this.hide = function() {
				$(this).siblings('ul.dropdown-menu').hide();
			}

			// Request
			this.request = function() {
				clearTimeout(this.timer);

				this.timer = setTimeout(function(object) {
					object.source($(object).val(), $.proxy(object.response, object));
				}, 200, this);
			}

			// Response
			this.response = function(json) {
				html = '';

				if (json.length) {
					for (i = 0; i < json.length; i++) {
						this.items[json[i]['value']] = json[i];
					}

					for (i = 0; i < json.length; i++) {
						if (!json[i]['category']) {
							html += '<li data-value="' + json[i]['value'] + '"><a href="#">' + json[i]['label'] + '</a></li>';
						}
					}

					// Get all the ones with a categories
					var category = new Array();

					for (i = 0; i < json.length; i++) {
						if (json[i]['category']) {
							if (!category[json[i]['category']]) {
								category[json[i]['category']] = new Array();
								category[json[i]['category']]['name'] = json[i]['category'];
								category[json[i]['category']]['item'] = new Array();
							}

							category[json[i]['category']]['item'].push(json[i]);
						}
					}

					for (i in category) {
						html += '<li class="dropdown-header">' + category[i]['name'] + '</li>';

						for (j = 0; j < category[i]['item'].length; j++) {
							html += '<li data-value="' + category[i]['item'][j]['value'] + '"><a href="#">&nbsp;&nbsp;&nbsp;' + category[i]['item'][j]['label'] + '</a></li>';
						}
					}
				}

				if (html) {
					this.show();
				} else {
					this.hide();
				}

				$(this).siblings('ul.dropdown-menu').html(html);
			}

			$(this).after('<ul class="dropdown-menu"></ul>');
			$(this).siblings('ul.dropdown-menu').delegate('a', 'click', $.proxy(this.click, this));

		});
	}
})(window.jQuery);

const enableScroll = (enable = true) => enable ? document.body.classList.remove('lock') : document.body.classList.add('lock');

/**
 *
 *
 * @class MobileMenu
 */
class MobileMenu {
    /**
     * Creates an instance of MobileMenu.
     * @param {string} mobMenuClass
     * @param {string} activeClass
     * @param {string} openButtonClass
     * @param {string} closeButtonClass
     * @memberof MobileMenu
     */
    constructor(mobMenuClass, activeClass, openButtonClass, closeButtonClass) {
        this.mobMenuClass = mobMenuClass;
        this.mobMenu = document.querySelector(mobMenuClass);
        this.activeClass = activeClass;
        this.openButtonClass = openButtonClass;
        this.openButton = document.querySelector(openButtonClass);
        this.closeButton = document.querySelector(closeButtonClass);

        this.init();
    }
    

    closeOnBackdropClick = e => {
        if (e.target === this.mobMenu) this.closeMenu();
    }

    openMenu = () => {
        this.mobMenu.classList.add(this.activeClass);
        enableScroll(false);
        document.addEventListener("click", this.closeOnBackdropClick);
    }

    closeMenu = () => {
        this.mobMenu.classList.remove(this.activeClass);
        enableScroll(true);
        document.removeEventListener("click", this.closeOnBackdropClick);
    }

    init = () => {
        this.openButton.addEventListener("click", this.openMenu);
        this.closeButton.addEventListener("click", this.closeMenu);   
        
        window.matchMedia('(max-width: 1199px').addEventListener('change', e => {
            if (!e.matches) return;
            if (this.openButton) {
                this.openButton.addEventListener("click", this.toggleMenu);
            }
        })
    
        window.matchMedia('(min-width: 1200px)').addEventListener('change', (e) => {
            if (!e.matches) return;
            if (this.openButton) {
                this.openButton.removeEventListener("click", this.toggleMenu);
                // this.openMenu();
                enableScroll();
            }
        })
    }
}

// PHOTO HANDLER
class PhotoUploadHandler {
    constructor(selector, maxFileSizeMb = 10) {
        this.container = typeof selector === 'string' ? document.querySelector(selector) : selector;
        if (!this.container) {
            console.error(`PhotoUploadHandler: Container element not found for selector "${selector}"`);
            return;
        }

        // DOM elements
        this.fileInput = this.container.querySelector('input[type="file"]');
        this.uploadButton = this.container.querySelector('.photo-upload__btn');
        this.previewList = this.container.querySelector('.photo-upload__list');
        this.disclaimer = this.container.querySelector('.photo-upload__disclaimer');
        
        // Constants
        this.MAX_FILE_SIZE_BYTES = maxFileSizeMb * 1024 * 1024; // Convert MB to Bytes
        this.MAX_FILE_COUNT = 5; 

        this.filesMap = new Map();
        this.nextFileId = 0;

        this.initEventListeners();
    }

    // INIT
    initEventListeners() {
        if (this.uploadButton) this.uploadButton.addEventListener('click', this.handleButtonClick.bind(this));
        if (this.fileInput) this.fileInput.addEventListener('change', this.handleFileSelection.bind(this));
        if (this.previewList) this.previewList.addEventListener('click', this.handleRemoveClick.bind(this));
    }

    handleButtonClick() {
        this.fileInput.click();
    }

    // handle change
    handleFileSelection(event) {
        const files = event.target.files;
        if (!files || files.length === 0) return;
        Array.from(files).forEach(file => {
            if (this.filesMap.size >= this.MAX_FILE_COUNT) {
                this.disclaimer.textContent = 'Максимальна кількість зображень - 5';
                this.uploadButton.disabled = true;
                return;
            } else this.uploadButton.disabled = false;

            if (file.size > this.MAX_FILE_SIZE_BYTES) {
                this.disclaimer.textContent = 'Файл занадто великий. Максимальний розмір файлу 10 мб.'
                return;
            }
            
            const fileId = this.nextFileId++;
            this.filesMap.set(fileId, file);
            this.renderFilePreview(fileId, file);
        });

        this.fileInput.value = '';
        this.updateFormData();
    }

    renderFilePreview(fileId, file) {
        if (!file.type.startsWith('image/')) return;

        const reader = new FileReader();
        reader.onload = (e) => {
            const clone = document.getElementById('photoUploadTemplate').content.cloneNode(true);
            clone.querySelector('.cover-image').src = e.target.result;
            clone.querySelector('.cover-image').alt = file.name;
            clone.querySelector('.photo-upload__file').dataset.fileId = fileId; 

           
            this.previewList.appendChild(clone);
        };
        reader.readAsDataURL(file);
    }

    // REMOVE FILE FROM LIST
    handleRemoveClick(event) {
        const deleteButton = event.target.closest('.photo-upload__delete');
        if (!deleteButton) return;
        const previewItem = deleteButton.closest('.photo-upload__file');
        if (!previewItem) return;

        const fileId = parseInt(previewItem.dataset.fileId, 10);

        if (this.filesMap.has(fileId)) {
            this.filesMap.delete(fileId);
        }

        previewItem.remove();
        this.updateFormData();
    }

    // update input value
    updateFormData() {
        const dataTransfer = new DataTransfer();
        this.filesMap.forEach(file => {
            dataTransfer.items.add(file);
        });
        this.fileInput.files = dataTransfer.files;

    }
}


// FAQ & ELSE DROPDOWNS
const toggleDropdowns = (className, headingClassName) => {
    Array.from(document.querySelectorAll(className)).forEach(acc => {
        acc.querySelector(headingClassName).addEventListener("click", e => {
            if (document.querySelector(`${className}.active`) && document.querySelector(`${className}.active`) != acc) {
                document.querySelector(`${className}.active`).ariaExpanded = false;
                document.querySelector(`${className}.active`).classList.remove('active');
            }
            acc.classList.toggle('active');
            acc.ariaExpanded = acc.classList.contains('active');
        })
    })
}

// MODAL class
class Modal {
    openModal = (modal) => {
        modal.classList.add('active');
        enableScroll(false)
        modal.addEventListener("click", e => {
            this.closeOnBackdrop(e, modal);
        })
    }


    closeModal = (modal) => {
        modal.classList.remove('active');
        enableScroll(true)
        modal.removeEventListener("click", e => {
            this.closeOnBackdrop(e, modal);
        })
    }

    closeAll = () => {
        const activeModals = document.querySelectorAll('.backdrop.active');
        activeModals.forEach(modal => this.closeModal(modal));
    }

    closeOnBackdrop = (e, modal) => {
        if (e.target === e.currentTarget) this.closeModal(modal);
    }
}

// CUSTOM SELECT
class CustomSelect {
    constructor(containerElement) {
        this.container = typeof containerElement === 'string' ? document.querySelector(containerElement) : containerElement;
        if (!this.container) {
            console.error('CustomSelect: Container element not found.');
            return;
        }

        this.heading = this.container.querySelector('.custom-select__heading');
        this.displaySpan = this.heading.querySelector('span');
        this.dropdown = this.container.querySelector('.custom-select__dropdown');
        this.hiddenInput = this.container.querySelector('input[type="hidden"]');
        
        // State
        this.isOpen = false;

        this.toggleDropdownBound = this.toggleDropdown.bind(this);
        this.selectOptionBound = this.selectOption.bind(this);
        this.handleClickOutsideBound = this.handleClickOutside.bind(this);


        this.heading.addEventListener('click', this.toggleDropdownBound);
        this.dropdown.addEventListener("click", this.selectOptionBound);
        this.classes = {
            activeClass: 'active',
            optionClass: 'custom-select__option',
            errorClass: 'invalid'
        }

    }

    toggleDropdown() {
        this.isOpen = !this.isOpen;
        this.container.classList.toggle(this.classes.activeClass, this.isOpen);
        this.isOpen ? document.addEventListener('click', this.handleClickOutsideBound) : document.removeEventListener('click', this.handleClickOutsideBound);
    }

    selectOption(event) {
        if (event.target.closest(`.${this.classes.optionClass}`)) {
            const selectedOption = event.target.closest(`.${this.classes.optionClass}`);
            const newText = selectedOption.textContent.trim();
            const newValue = selectedOption.dataset.value || newText; 
            this.updateSelection(newText, newValue);
            if (this.dropdown.querySelector(`.${this.classes.optionClass}.${this.classes.activeClass}`)) {
                this.dropdown.querySelector(`.${this.classes.optionClass}.${this.classes.activeClass}`).classList.remove(this.classes.activeClass);
            }
            selectedOption.classList.add(this.classes.activeClass);
            this.container.classList.remove(this.classes.errorClass)
            this.toggleDropdown();
        }
    }

    updateSelection(text, value) {
        this.displaySpan.textContent = text;
        if (this.hiddenInput) this.hiddenInput.value = value;
    }

    handleClickOutside(event) {
        if (this.isOpen && !this.container.contains(event.target)) {
            this.toggleDropdown();
        }
    }
}
// QUANTITY BLOCK
class QuantityChanger {
    constructor(container) {
        this.container = typeof container === 'string' ? document.querySelector(container) : container;
        if (!this.container) {
            console.error('Quantity block was not found');
            return;
        }
        this.input = container.querySelector('.quant-block__input');
        this.minusBtn = container.querySelector('[data-operation="minus"]');
        this.plusBtn = container.querySelector('[data-operation="plus"]');
        
        this.min = parseInt(this.input.getAttribute('min')) || 1;
        this.max = parseInt(this.input.getAttribute('max')) || Infinity;

        this.init();
    }

    init() {
        this.minusBtn.addEventListener('click', () => this.changeValue(-1));
        this.plusBtn.addEventListener('click', () => this.changeValue(1));
        if (this.input) this.input.addEventListener('change', () => this.validateInput());
        this.updateButtonStates();
    }

    changeValue(delta) {
        let currentValue = parseInt(this.input.value) || this.min;
        const newValue = currentValue + delta;

        if (newValue >= this.min && newValue <= this.max) {
            this.input.value = newValue;
            // this.input.dispatchEvent(new Event('change', { bubbles: true }));
        }
    
        this.updateButtonStates();
    } 

    validateInput() {
        let val = parseInt(this.input.value);

        if (isNaN(val) || val < this.min) {
            val = this.min;
        } else if (val > this.max) {
            val = this.max;
        }

        this.input.value = val;
        this.updateButtonStates();
    }

    updateButtonStates() {
        const val = parseInt(this.input.value);
        this.minusBtn.disabled = (val <= this.min);
        this.plusBtn.disabled = (val >= this.max);
    }
}

const modalHandler = new Modal();

document.addEventListener("DOMContentLoaded", () => {
    new MobileMenu('.header-menu', 'is-active', '.header__toggler', '.header-menu__close');
    if (document.querySelector('.photo-upload')) {
        Array.from(document.querySelectorAll('.photo-upload:not(.photo-upload--custom-field)')).forEach(photoUpload => {
            new PhotoUploadHandler(photoUpload);
        })
    }

    // PASSWORD INPUTS
    if (document.querySelector('.custom-input--type_password')) {
        document.querySelectorAll('.custom-input--type_password').forEach(passInput => {
            passInput.querySelector('.custom-input__icon').addEventListener("click", e => {
                passInput.querySelector('input').type = passInput.querySelector('input').type === 'text' ? 'password' : 'text';
            })
        })
    }

    if (document.querySelector('.accordion')) {
        toggleDropdowns('.accordion', '.accordion__heading');
    }


    if (document.querySelector('.custom-select')) document.querySelectorAll('.custom-select').forEach(sl => new CustomSelect(sl));
    if (document.querySelector('.quant-block')) document.querySelectorAll('.quant-block').forEach(q => new QuantityChanger(q));


    document.addEventListener("click", e => {
        // OPEN MODAL
        if (e.target.closest('[data-modal-open]')) {
            const target = e.target.closest('[data-modal-open]');
            const modalId = target.dataset.modalOpen;

            if (modalId) {
                if (document.querySelector(`[data-modal="${modalId}"]`)) {
                    e.preventDefault();
                    const modal = document.querySelector(`[data-modal="${modalId}"]`);
                    modalHandler.openModal(modal);
                }
            }
        }

        // CLOSE MODAL
        if (e.target.closest('[data-modal-close]')) {
            const target = e.target.closest('[data-modal-close]');
            const modal = target.closest('.backdrop');
            if (modal) modalHandler.closeModal(modal);
        }

        if (e.target.closest('.alert__close')) {
            e.target.closest('.alert').remove();
        }
    })
    
})