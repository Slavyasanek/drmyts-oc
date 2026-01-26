// PRODUCT SLIDERS
if (document.querySelector('.products-slider') && typeof Splide !== 'undefined') {
    Array.from(document.querySelectorAll('.products-slider .splide')).forEach(sl => {
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