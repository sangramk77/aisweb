document.documentElement.classList.add('js-enabled');

document.querySelectorAll('.nav-item--has-menu > .nav-link').forEach((button) => {
    button.addEventListener('click', () => {
        const item = button.parentElement;
        const isOpen = item.classList.contains('is-open');

        document.querySelectorAll('.nav-item--has-menu.is-open').forEach((openItem) => {
            openItem.classList.remove('is-open');
            openItem.querySelector('.nav-link').setAttribute('aria-expanded', 'false');
        });

        if (!isOpen) {
            item.classList.add('is-open');
            button.setAttribute('aria-expanded', 'true');
        }
    });
});

document.addEventListener('click', (event) => {
    if (!event.target.closest('.primary-nav')) {
        document.querySelectorAll('.nav-item--has-menu.is-open').forEach((item) => {
            item.classList.remove('is-open');
            item.querySelector('.nav-link').setAttribute('aria-expanded', 'false');
        });
    }
});

document.querySelectorAll('[data-benefits-carousel]').forEach((carousel) => {
    const track = carousel.querySelector('[data-carousel-track]');
    const dots = [...carousel.querySelectorAll('[data-carousel-dot]')];
    let currentSlide = 0;

    const showSlide = (index) => {
        currentSlide = (index + dots.length) % dots.length;
        track.style.transform = `translateX(-${currentSlide * 100}%)`;
        dots.forEach((dot, dotIndex) => dot.setAttribute('aria-selected', String(dotIndex === currentSlide)));
    };

    carousel.querySelector('[data-carousel-previous]').addEventListener('click', () => showSlide(currentSlide - 1));
    carousel.querySelector('[data-carousel-next]').addEventListener('click', () => showSlide(currentSlide + 1));
    dots.forEach((dot, index) => dot.addEventListener('click', () => showSlide(index)));
});
