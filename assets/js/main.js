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
    let autoScroll;

    const showSlide = (index) => {
        currentSlide = (index + dots.length) % dots.length;
        track.style.transform = `translateX(-${currentSlide * 100}%)`;
        dots.forEach((dot, dotIndex) => dot.setAttribute('aria-selected', String(dotIndex === currentSlide)));
    };

    carousel.querySelector('[data-carousel-previous]').addEventListener('click', () => showSlide(currentSlide - 1));
    carousel.querySelector('[data-carousel-next]').addEventListener('click', () => showSlide(currentSlide + 1));
    dots.forEach((dot, index) => dot.addEventListener('click', () => showSlide(index)));

    const stopAutoScroll = () => clearInterval(autoScroll);
    const startAutoScroll = () => {
        stopAutoScroll();
        autoScroll = setInterval(() => showSlide(currentSlide + 1), 7000);
    };

    carousel.addEventListener('mouseenter', stopAutoScroll);
    carousel.addEventListener('mouseleave', startAutoScroll);
    carousel.addEventListener('focusin', stopAutoScroll);
    carousel.addEventListener('focusout', (event) => {
        if (!carousel.contains(event.relatedTarget)) startAutoScroll();
    });
    startAutoScroll();
});

document.querySelectorAll('[data-video-play]').forEach((trigger) => {
    trigger.addEventListener('click', () => {
        const stage = document.querySelector('[data-video-stage]');
        const videoId = trigger.dataset.videoId;
        if (!stage || !videoId) return;

        stage.innerHTML = `<iframe src="https://www.youtube-nocookie.com/embed/${videoId}?autoplay=1&start=25&rel=0" title="Mediation Benefits video" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>`;
        document.querySelectorAll('[data-video-play]').forEach((item) => item.classList.remove('is-active'));
        trigger.classList.add('is-active');
    });
});

document.querySelectorAll('[data-typing-text]').forEach((element) => {
    const text = element.dataset.typingText;
    const output = element.querySelector('span');
    let index = 0;
    let deleting = false;

    const type = () => {
        output.textContent = text.slice(0, index);
        if (!deleting && index < text.length) {
            index += 1;
            setTimeout(type, 26);
        } else if (!deleting) {
            deleting = true;
            setTimeout(type, 1800);
        } else if (index > 0) {
            index -= 1;
            setTimeout(type, 12);
        } else {
            deleting = false;
            setTimeout(type, 500);
        }
    };

    type();
});

const videoModal = document.querySelector('[data-video-modal]');
const videoModalFrame = document.querySelector('[data-video-modal-frame]');
const closeVideoModal = () => {
    if (!videoModal || !videoModalFrame) return;
    videoModal.hidden = true;
    videoModalFrame.innerHTML = '';
    document.body.classList.remove('video-modal-open');
};

document.querySelectorAll('[data-accreditation-video]').forEach((trigger) => {
    trigger.addEventListener('click', () => {
        if (!videoModal || !videoModalFrame) return;
        videoModalFrame.innerHTML = '<iframe src="https://www.youtube-nocookie.com/embed/NRxW9BQtZR0?autoplay=1&start=25&rel=0" title="Mediation Company video" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>';
        videoModal.hidden = false;
        document.body.classList.add('video-modal-open');
        videoModal.querySelector('.video-modal-close').focus();
    });
});

document.querySelectorAll('[data-video-modal-close]').forEach((control) => control.addEventListener('click', closeVideoModal));
document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && videoModal && !videoModal.hidden) closeVideoModal();
});
