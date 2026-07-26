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
