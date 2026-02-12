<?php
include 'db.php';
include_once 'config.php';
$page_title = "Contact Us";
?>

<?php include 'header.php'; ?>

<main>
    <!-- Contact Hero -->
    <section class="page-hero">
        <div class="container">
            <h1>Get In Touch</h1>
            <p>We're here to help you plan your perfect journey</p>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-grid">
                <!-- Contact Form -->
                <div class="contact-form-container">
                    <h2>Send Us a Message</h2>
                    
                    <?php if(isset($_SESSION['success_message'])): ?>
                        <div class="alert success">
                            <?php echo $_SESSION['success_message']; unset($_SESSION['success_message']); ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php if(isset($_SESSION['error_message'])): ?>
                        <div class="alert error">
                            <?php echo $_SESSION['error_message']; unset($_SESSION['error_message']); ?>
                        </div>
                    <?php endif; ?>
                    
                    <form method="post" action="" class="advanced-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="fullname"><i class="fas fa-user"></i> Full Name</label>
                                <input type="text" id="fullname" name="fullname" required placeholder="Enter your full name">
                            </div>
                            
                            <div class="form-group">
                                <label for="email"><i class="fas fa-envelope"></i> Email Address</label>
                                <input type="email" id="email" name="email" required placeholder="Enter your email">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject"><i class="fas fa-tag"></i> Subject</label>
                            <input type="text" id="subject" name="subject" required placeholder="What is this regarding?">
                        </div>
                        
                        <div class="form-group">
                            <label for="message"><i class="fas fa-comment"></i> Message</label>
                            <textarea id="message" name="message" rows="6" required placeholder="Tell us about your travel needs..."></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="travel_date"><i class="fas fa-calendar"></i> Preferred Travel Date (Optional)</label>
                            <input type="date" id="travel_date" name="travel_date">
                        </div>
                        
                        <div class="form-group">
                            <label for="travelers"><i class="fas fa-users"></i> Number of Travelers</label>
                            <select id="travelers" name="travelers">
                                <option value="1">1 Traveler</option>
                                <option value="2">2 Travelers</option>
                                <option value="3-5">3-5 Travelers</option>
                                <option value="6-10">6-10 Travelers</option>
                                <option value="10+">10+ Travelers</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="btn-primary btn-block">
                            <i class="fas fa-paper-plane"></i> Send Message
                        </button>
                    </form>
                </div>
                
                <!-- Contact Info -->
                <div class="contact-info-container">
                    <h2>Contact Information</h2>
                    
                    <div class="contact-info-card">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4>Visit Us</h4>
                                <p><?php echo ADDRESS; ?></p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h4>Call Us</h4>
                                <p><?php echo CONTACT_PHONE; ?></p>
                                <small>Mon-Fri 9am-6pm, Sat 10am-4pm</small>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4>Email Us</h4>
                                <p><?php echo CONTACT_EMAIL; ?></p>
                                <small>Response within 24 hours</small>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h4>Business Hours</h4>
                                <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
                                <p>Saturday: 10:00 AM - 4:00 PM</p>
                                <p>Sunday: Closed</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Map Placeholder -->
                    <div class="map-container">
                        <div class="map-placeholder">
                            <i class="fas fa-map"></i>
                            <p>Interactive Map Here</p>
                            <small>(Google Maps integration available)</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>