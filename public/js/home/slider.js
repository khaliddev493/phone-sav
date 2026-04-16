
(function () {
    const DURATION = 5000;
    const slides = document.querySelectorAll('.hero-slider .slide');
    const dots   = document.querySelectorAll('.slider-dots .dot');
    const fill   = document.getElementById('progressFill');
    let current  = 0;
    let timer    = null;

    function goToSlide(index) {
        slides[current].classList.remove('active');
        slides[current].classList.add('exit');
        setTimeout(() => slides[current].classList.remove('exit'), 800);
        dots[current].classList.remove('active');

        current = index;
        slides[current].classList.add('active');
        dots[current].classList.add('active');

        resetProgress();
    }

    function resetProgress() {
        fill.style.transition = 'none';
        fill.style.width = '0%';
        fill.offsetWidth;
        fill.style.transition = `width ${DURATION}ms linear`;
        fill.style.width = '100%';
    }

    window.goToSlide = function(i) {
        clearInterval(timer);
        goToSlide(i);
        timer = setInterval(() => goToSlide((current + 1) % slides.length), DURATION);
    };

    timer = setInterval(() => goToSlide((current + 1) % slides.length), DURATION);
    resetProgress();
})();