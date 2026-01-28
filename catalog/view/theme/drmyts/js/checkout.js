

// TEXTAREA COUNTER
class CountableTextarea {
    constructor(container) {
        this.container = typeof container === 'string' ? document.querySelector(container) : container;

        if (!this.container) {
            console.error('Textarea was not found');
            return;
        }

        this.textarea = this.container.querySelector('textarea');
        this.counter = this.container.querySelector('.custom-input__count');
        this.maxLength = this.textarea.getAttribute('maxlength') ?? 150;

        this.textarea.addEventListener("input", this.updateCounter.bind(this))
    }

    updateCounter = (e) => {
        const currentLength = this.textarea.value.length;
        this.counter.textContent = `${currentLength}/${this.maxLength}`;
    }
}

// // CHECKOUT TABS
// class CheckoutTabs {
//     constructor() {
//         this.tabButtons = document.querySelectorAll('.checkout-form__tab-btn');
//         this.tabContents = document.querySelectorAll('.checkout-form__tab');
//         this.activeClass = 'active';
//         this.hiddenClass = 'd-none';

//         this.init();
//     }

//     init() {
//         this.tabButtons.forEach(btn => {
//             btn.addEventListener('click', () => {
//                 const targetTab = btn.dataset.tab;
//                 this.switchTab(targetTab);
//             });
//         });
//     } 

//     switchTab(tabId) {
//         this.tabButtons.forEach(btn => {
//             btn.classList.toggle(this.activeClass, btn.dataset.tab === tabId);
//         });


//         this.tabContents.forEach(content => {
//             content.dataset.tab === tabId ? content.classList.remove(this.hiddenClass) : content.classList.add(this.hiddenClass);
//         });
//     }
// }

// checkout validation
class CheckoutValidation {
    constructor(containerSelector) {
        this.checkoutSection = typeof containerSelector === 'string' ? document.querySelector(containerSelector) : containerSelector;
        if (!this.checkoutSection) {
            console.error('No checkout section found');
            return;
        }
        this.submitBtn = document.querySelector('.checkout-page__submit');
        this.invalidClass = 'invalid';
        this.errorMsgClass = 'd-none';

        this.init();
    }

  init() {
        // Clean errors
        this.checkoutSection.addEventListener('input', (e) => {
          if (e.target.required && e.target.value.trim() !== '') {
            this.toggleError(e.target, false);
          }
        });


        this.submitBtn.addEventListener('click', (e) => {
            if (!this.validateCurrentTab()) {
                e.preventDefault();
                console.log("Form has errors");
            } else {
                console.log("Form is valid, proceeding...");
            }
        });
    }

    validateCurrentTab() {
        let isValid = true;

        const activeTab = document.querySelector('.checkout-form__tab:not(.d-none)');
        const requiredFields = activeTab.querySelectorAll('[required]');
        const agreementCheckbox = document.getElementById('agreement');

        // Validate Input Fields
        requiredFields.forEach(field => {
            if (!this.checkField(field)) {
                isValid = false;
            }
        });

        // Validate Main Agreement Checkbox
        if (agreementCheckbox && !agreementCheckbox.checked) {
            this.toggleError(agreementCheckbox, true);
            isValid = false;
        } else if (agreementCheckbox) {
            this.toggleError(agreementCheckbox, false);
        }

        return isValid;
    }

    checkField(field) {
        const value = field.value.trim();
        let isFieldValid = true;

        if (field.type === 'email') {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            isFieldValid = emailRegex.test(value);
        } else {
            isFieldValid = value !== "";
        }

        if (!isFieldValid) {
            this.toggleError(field, true);
            return false;
        } else {
            this.toggleError(field, false);
            return true;
        }
    }

    toggleError(field, isError = true) {
        const wrapper = field.closest('.custom-input') || field.closest('.custom-checkbox') || field.closest('.custom-select');
        if (wrapper) wrapper.classList.toggle(this.invalidClass, isError);
    }
}



document.addEventListener("DOMContentLoaded", () => {
        // START CHECKOUT
    if (document.querySelector('.coupon-block')) {
        toggleDropdowns('.coupon-block', '.coupon-block__heading');
    }
    if (document.querySelector('.checkout-comment')) {
        toggleDropdowns('.checkout-comment', '.checkout-comment__toggler');
    }

    if (document.querySelector('.custom-input--type_textarea-count')) {
        Array.from(document.querySelectorAll('.custom-input--type_textarea-count')).forEach(textarea => new CountableTextarea(textarea))     
    }

    if (document.querySelector('.checkout-page')) {
        // new CheckoutTabs();
        new CheckoutValidation('.checkout-page');
    }
    // END CHECKOUT
})