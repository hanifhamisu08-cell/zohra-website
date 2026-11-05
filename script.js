document.addEventListener('DOMContentLoaded', function () {

    /* Reveal key content gently as it enters the viewport. */
    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if ('IntersectionObserver' in window && !reduceMotion) {
        const revealTargets = document.querySelectorAll([
            '.section-header',
            '.features-grid > *',
            '.destinations-grid > *',
            '.testimonials-slider > *',
            '.services-grid > *',
            '.process-steps > *',
            '.partners-grid > *',
            '.story-content',
            '.mv-grid > *',
            '.team-grid > *',
            '.stats-grid > *',
            '.contact-grid > *',
            '.booking-form-container',
            '.booking-benefits',
            '.cta-content',
            '.partnership-content'
        ].join(','));

        if (revealTargets.length) {
            document.body.classList.add('has-scroll-reveal');
            const observer = new IntersectionObserver((entries, currentObserver) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        currentObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.12, rootMargin: '0px 0px -36px 0px' });

            revealTargets.forEach((element, index) => {
                element.classList.add('scroll-reveal');
                element.style.setProperty('--reveal-delay', `${(index % 4) * 70}ms`);
                observer.observe(element);
            });
        }
    }

    /* ========= MOBILE MENU ========= */
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const navMenu = document.querySelector('.nav-menu');

    if (mobileMenuBtn && navMenu) {
        mobileMenuBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            navMenu.classList.toggle('active');

            this.innerHTML = navMenu.classList.contains('active')
                ? '<i class="fas fa-times"></i>'
                : '<i class="fas fa-bars"></i>';
            this.setAttribute('aria-expanded', String(navMenu.classList.contains('active')));
            this.setAttribute('aria-label', navMenu.classList.contains('active') ? 'Close navigation' : 'Open navigation');
        });

        navMenu.addEventListener('click', e => e.stopPropagation());

        navMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
                mobileMenuBtn.setAttribute('aria-expanded', 'false');
                mobileMenuBtn.setAttribute('aria-label', 'Open navigation');
            });
        });

        document.addEventListener('keydown', event => {
            if (event.key === 'Escape' && navMenu.classList.contains('active')) {
                navMenu.classList.remove('active');
                mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
                mobileMenuBtn.setAttribute('aria-expanded', 'false');
                mobileMenuBtn.setAttribute('aria-label', 'Open navigation');
                mobileMenuBtn.focus();
            }
        });

        document.addEventListener('click', function () {
            if (navMenu.classList.contains('active')) {
                navMenu.classList.remove('active');
                mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
                mobileMenuBtn.setAttribute('aria-expanded', 'false');
                mobileMenuBtn.setAttribute('aria-label', 'Open navigation');
            }
        });
    }

    /* ========= BACK TO TOP ========= */
    const backToTopBtn = document.getElementById('backToTop');

    if (backToTopBtn) {
        window.addEventListener('scroll', () => {
            backToTopBtn.classList.toggle('visible', window.scrollY > 300);
        });

        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    /* ========= FORM VALIDATION ========= */
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', function (e) {
            let valid = true;

            this.querySelectorAll('[required]').forEach(field => {
                if (!field.value.trim()) {
                    valid = false;
                    field.style.borderColor = '#C0392B';
                }
            });

            if (!valid) {
                e.preventDefault();
                alert('Please fill in all required fields.');
            }
        });
    });

    /* ========= SMOOTH SCROLL ========= */
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (!target) return;

            e.preventDefault();
            window.scrollTo({
                top: target.offsetTop - 80,
                behavior: 'smooth'
            });

            if (navMenu?.classList.contains('active')) {
                navMenu.classList.remove('active');
                mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
            }
        });
    });

    /* ========= FOOTER YEAR ========= */
    const yearSpan = document.querySelector('.current-year');
    if (yearSpan) yearSpan.textContent = new Date().getFullYear();

});
