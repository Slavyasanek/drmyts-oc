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

const galleryEls = {
    thumbs: document.querySelector('.product-gallery__thumbs'),
    main: document.querySelector('.product-gallery__main-gallery'),
    prevBtn: document.querySelector('.product-gallery__arrow--prev'),
    nextBtn: document.querySelector('.product-gallery__arrow--next')
}

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

// PRODDUCT REVIEWS
if (document.querySelector('.product-reviews')) {
    if (document.querySelector('.form-rating')) new StarRating('.form-rating');
    if (document.querySelector('.review-form__photo')) new PhotoUploadHandler('.review-form__photo');

    const reviewForm = document.querySelector('.review-form');
    const reviewsList = document.querySelector('.product-reviews__list')
    const openReviewFormButton = document.querySelector('.product-reviews__btn');

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
}