    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="container">
                <div class="footer-grid">
                    <div class="footer-column">
                        <div class="footer-logo">
                            <i class="fas fa-plane"></i>
                            <h3>Zohra Tourism</h3>
                        </div>
                        <p>Delivering professional tourism and hospitality services that connect clients with quality travel experiences.</p>
                        <div class="footer-social">
                            <?php foreach($social_links as $platform => $url): ?>
                                <a href="<?php echo $url; ?>" target="_blank"><i class="fab fa-<?php echo $platform; ?>"></i></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    
                    <div class="footer-column">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="partners.php">Partners</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-column">
                        <h4>Our Services</h4>
                        <ul>
                            <li><a href="services.php#tours">Tour Planning</a></li>
                            <li><a href="services.php#hospitality">Hospitality Consulting</a></li>
                            <li><a href="services.php#travel">Travel Support</a></li>
                            <li><a href="services.php#corporate">Corporate Travel</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-column">
                        <h4>Contact Info</h4>
                        <div class="contact-info-footer">
                            <p><i class="fas fa-map-marker-alt"></i> <?php echo ADDRESS; ?></p>
                            <p><i class="fas fa-phone"></i> <?php echo CONTACT_PHONE; ?></p>
                            <p><i class="fas fa-envelope"></i> <?php echo CONTACT_EMAIL; ?></p>
                        </div>
                    </div>
                </div>
                
                <div class="footer-bottom">
                    <div class="container">
                      <p>&copy; <span class="current-year"><?php echo date('Y'); ?></span> <?php echo SITE_NAME; ?>. All rights reserved. Made with <i class="fas fa-heart"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop" class="back-to-top">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- Main JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function () {

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
        });

        navMenu.addEventListener('click', e => e.stopPropagation());

        document.addEventListener('click', function () {
            if (navMenu.classList.contains('active')) {
                navMenu.classList.remove('active');
                mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
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
</script>
</body>
</html>