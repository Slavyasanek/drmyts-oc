// MOVE PROF BADGES ON HERO
if (document.querySelector('.home-hero .prof-badge')) {

    const moveItemsOnMouseMove = (e) => {
        const items = document.querySelectorAll(".prof-badge");
        const x = e.clientX / window.innerWidth - 0.5;
        const y = e.clientY / window.innerHeight - 0.5;

        items.forEach((el, i) => {
            const speed = (i + 1) * 10;
            el.style.transform = `translate(${x * speed}px, ${y * speed}px)`;
        });
    }

    if (window.matchMedia('(min-width: 1200px)').matches) {
        window.addEventListener("mousemove", moveItemsOnMouseMove);
    }   

    window.matchMedia('(max-width: 1199px)').addEventListener("change", e => {
        if (!e.matches) return;
        window.removeEventListener("mousemove", moveItemsOnMouseMove);
    })

    window.matchMedia('(min-width: 1200px)').addEventListener("change", e => {
        if (!e.matches) return;
        window.addEventListener("mousemove", moveItemsOnMouseMove);
    })
}