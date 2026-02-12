<?php
include 'db.php';
include_once 'config.php';
$page_title = "Home";
?>

<?php include 'header.php'; ?>

<main>
    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Zohra Tourism</h2>
                <p>We provide exceptional travel experiences with our premium services</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Professional Service</h3>
                    <p>Expert team with over 15 years of industry experience</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Trusted Partnerships</h3>
                    <p>Global network of reliable hospitality partners</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>24/7 Support</h3>
                    <p>Round-the-clock assistance for all our clients</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Travel Protection</h3>
                    <p>Comprehensive insurance and safety measures</p>
                </div>
            </div>
        </div>
    </section>

  <!-- Popular Destinations -->
<section class="destinations-section">
    <div class="container">
        <div class="section-header">
            <h2>Popular Destinations</h2>
            <p>Discover our most requested travel destinations</p>
        </div>
        
        <!-- SINGLE destinations-grid wrapper for ALL cards -->
        <div class="destinations-grid">
            <div class="destination-card">
                <img src="Assets/Jos_museum.jpg" alt="Jos Museum">
                <div class="destination-overlay">
                    <h3>Jos Museum</h3>
                    <p>Historical exhibits</p>
                    <span class="price">From $1,899</span>
                </div>
            </div>
            
            <div class="destination-card">
                <img src="Assets/Jos_Wildlife_Park.jpg" alt="Jos Wildlife Park">
                <div class="destination-overlay">
                    <h3>Jos Wildlife Park</h3>
                    <p>Wildlife conservation</p>
                    <span class="price">From $1,899</span>
                </div>
            </div>

            <div class="destination-card">
                <img src="Assets/hawan_Kibo.jpg" alt="hawan_kido">
                <div class="destination-overlay">
                    <h3>Hawan Kido</h3>
                    <p>Nature Heritage Preservation</p>
                    <span class="price">From $1,899</span>
                </div>
            </div>
        </div> <!-- CLOSE the SINGLE destinations-grid -->
    </div>
</section>
    <!-- Testimonials -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-header">
                <h2>What Our Clients Say</h2>
                <p>Trusted by thousands of satisfied travelers</p>
            </div>
            
            <div class="testimonials-slider">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <i class="fas fa-quote-left"></i>
                        <p>"Zohra Tourism made our honeymoon unforgettable. Every detail was perfect!"</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="https://i.pravatar.cc/150?img=1" alt="Sarah Johnson">
                        <div>
                            <h4>Sarah Johnson</h4>
                            <span>Honeymoon Traveler</span>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <i class="fas fa-quote-left"></i>
                        <p>"Professional service from start to finish. Our corporate retreat was perfectly organized."</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="https://i.pravatar.cc/150?img=2" alt="Michael Chen">
                        <div>
                            <h4>Michael Chen</h4>
                            <span>Corporate Client</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready for Your Next Adventure?</h2>
                <p>Contact us today to plan your dream vacation</p>
                <a href="contact.php" class="btn-primary btn-large">Get Free Consultation</a>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>