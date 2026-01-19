// INSTAGRAM SLIDERS
if (document.querySelector('.follow')) {
    Array.from(document.querySelectorAll('.follow .splide')).forEach(sl => {
        new Splide(sl, {
            perPage: 4,
            perMove: 1,
            gap: "2.4rem",
            pagination: false,
            drag: true,
            breakpoints: {
                640: { 
                    perPage: 1,
                    gap: ".8rem",
                },
                960: {
                    perPage: 2,
                }
            }
        }).mount();
    })
}
