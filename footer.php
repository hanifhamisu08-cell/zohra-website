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

    <!-- Shared interactions and scroll transitions -->
    <script src="script.js" defer></script>
</body>
</html>