<?php
include 'db.php';
include_once 'config.php';
$page_title = "Our Services";
?>

<?php include 'header.php'; ?>

<main>
    <!-- Services Hero -->
    <section class="page-hero">
        <div class="container">
            <h1>Our Premium Services</h1>
            <p>Comprehensive travel and hospitality solutions tailored to your needs</p>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="services-detail">
        <div class="container">
            <div class="services-grid">
                <?php foreach($services as $service): ?>
                <div class="service-card">
                    <div class="service-icon"><?php echo $service['icon']; ?></div>
                    <h3><?php echo $service['title']; ?></h3>
                    <p><?php echo $service['description']; ?></p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Customized Packages</li>
                        <li><i class="fas fa-check"></i> Expert Guidance</li>
                        <li><i class="fas fa-check"></i> 24/7 Support</li>
                    </ul>
                    <a href="contact.php" class="btn-service">Learn More</a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process-section">
        <div class="container">
            <div class="section-header">
                <h2>How We Work</h2>
                <p>Our simple 4-step process for perfect travel planning</p>
            </div>
            
            <div class="process-steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>Consultation</h3>
                    <p>Understand your needs and preferences</p>
                </div>
                
                <div class="step">
                    <div class="step-number">2</div>
                    <h3>Planning</h3>
                    <p>Create customized itinerary options</p>
                </div>
                
                <div class="step">
                    <div class="step-number">3</div>
                    <h3>Booking</h3>
                    <p>Secure all reservations and arrangements</p>
                </div>
                
                <div class="step">
                    <div class="step-number">4</div>
                    <h3>Support</h3>
                    <p>Provide ongoing assistance during travel</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>