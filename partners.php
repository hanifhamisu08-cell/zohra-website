<?php
include 'db.php';
include_once 'config.php';
$page_title = "Our Partners";
?>

<?php include 'header.php'; ?>

<main>
    <!-- Partners Hero -->
    <section class="page-hero">
        <div class="container">
            <h1>Our Trusted Partners</h1>
            <p>Collaborating with industry leaders to deliver exceptional experiences</p>
        </div>
    </section>

    <!-- Partners Grid -->
    <section class="partners-section">
        <div class="container">
            <div class="partners-grid">
                <?php foreach($partners as $partner): ?>
                <div class="partner-card">
                    <img class="partner-card__image" src="<?php echo htmlspecialchars($partner['image']); ?>" alt="<?php echo htmlspecialchars($partner['alt']); ?>" loading="lazy">
                    <div class="partner-card__content">
                        <h3><?php echo htmlspecialchars($partner['name']); ?></h3>
                        <span class="partner-category"><?php echo htmlspecialchars($partner['category']); ?></span>
                        <p>Trusted partner providing quality services to our clients</p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Partnership Inquiry -->
    <section class="partnership-cta">
        <div class="container">
            <div class="partnership-content">
                <h2>Want to Partner With Us?</h2>
                <p>Join our network of premium service providers</p>
                <a href="contact.php?subject=Partnership%20Inquiry" class="btn-primary">Become a Partner</a>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>
