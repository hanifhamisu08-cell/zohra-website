<?php
include 'db.php';
include_once 'config.php';
$page_title = "Book Now";
?>

<?php include 'header.php'; ?>

<main>
    <!-- Booking Hero -->
    <section class="page-hero">
        <div class="container">
            <h1>Book Your Dream Vacation</h1>
            <p>Fill out the form below and our travel experts will contact you within 24 hours</p>
        </div>
    </section>

    <!-- Booking Form -->
    <section class="booking-section">
        <div class="container">
            <div class="booking-form-container">
                <h2>Travel Request Form</h2>
                
                <form method="post" action="process_booking.php" class="advanced-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="fullname"><i class="fas fa-user"></i> Full Name *</label>
                            <input type="text" id="fullname" name="fullname" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email"><i class="fas fa-envelope"></i> Email Address *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone"><i class="fas fa-phone"></i> Phone Number *</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="country"><i class="fas fa-globe"></i> Country *</label>
                            <input type="text" id="country" name="country" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="destination"><i class="fas fa-map-marker-alt"></i> Destination Interest</label>
                            <select id="destination" name="destination">
                                <option value="">Select Destination</option>
                                <option value="maldives">Maldives</option>
                                <option value="swiss-alps">Swiss Alps</option>
                                <option value="japan">Japan</option>
                                <option value="bali">Bali</option>
                                <option value="greece">Greece</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="travel_type"><i class="fas fa-suitcase"></i> Travel Type</label>
                            <select id="travel_type" name="travel_type">
                                <option value="">Select Type</option>
                                <option value="leisure">Leisure/Vacation</option>
                                <option value="honeymoon">Honeymoon</option>
                                <option value="family">Family Holiday</option>
                                <option value="corporate">Corporate/Business</option>
                                <option value="adventure">Adventure</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="departure_date"><i class="fas fa-calendar"></i> Departure Date *</label>
                            <input type="date" id="departure_date" name="departure_date" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="duration"><i class="fas fa-clock"></i> Duration (Days)</label>
                            <input type="number" id="duration" name="duration" min="1" value="7">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="travelers"><i class="fas fa-users"></i> Number of Travelers *</label>
                            <input type="number" id="travelers" name="travelers" min="1" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="budget"><i class="fas fa-money-bill-wave"></i> Approximate Budget (per person)</label>
                            <select id="budget" name="budget">
                                <option value="">Select Budget Range</option>
                                <option value="1000-2000">$1,000 - $2,000</option>
                                <option value="2000-5000">$2,000 - $5,000</option>
                                <option value="5000-10000">$5,000 - $10,000</option>
                                <option value="10000+">$10,000+</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="special_requests"><i class="fas fa-comment"></i> Special Requests / Requirements</label>
                        <textarea id="special_requests" name="special_requests" rows="4" placeholder="Any specific hotels, activities, dietary requirements, or accessibility needs..."></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="newsletter" checked>
                            <span>Subscribe to our newsletter for travel tips and exclusive offers</span>
                        </label>
                    </div>
                    
                    <div class="form-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="terms" required>
                            <span>I agree to the <a href="terms.php" target="_blank">Terms & Conditions</a> and <a href="privacy.php" target="_blank">Privacy Policy</a> *</span>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn-primary btn-block btn-large">
                        <i class="fas fa-paper-plane"></i> Submit Booking Request
                    </button>
                    
                    <p class="form-note">* One of our travel experts will contact you within 24 hours to discuss your requirements and provide a customized itinerary.</p>
                </form>
            </div>
            
            <div class="booking-benefits">
                <h3>Why Book With Us?</h3>
                <div class="benefits-list">
                    <div class="benefit">
                        <i class="fas fa-check-circle"></i>
                        <span>Best Price Guarantee</span>
                    </div>
                    <div class="benefit">
                        <i class="fas fa-check-circle"></i>
                        <span>24/7 Customer Support</span>
                    </div>
                    <div class="benefit">
                        <i class="fas fa-check-circle"></i>
                        <span>Flexible Booking Options</span>
                    </div>
                    <div class="benefit">
                        <i class="fas fa-check-circle"></i>
                        <span>No Hidden Fees</span>
                    </div>
                    <div class="benefit">
                        <i class="fas fa-check-circle"></i>
                        <span>Travel Insurance Available</span>
                    </div>
                </div>
                
                <div class="contact-promo">
                    <h4>Need Immediate Assistance?</h4>
                    <p>Call us now: <strong><?php echo CONTACT_PHONE; ?></strong></p>
                    <p>Email: <strong><?php echo CONTACT_EMAIL; ?></strong></p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>