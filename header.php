<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' | ' : ''; ?><?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="contact-info">
                <span><i class="fas fa-phone"></i> <?php echo CONTACT_PHONE; ?></span>
                <span><i class="fas fa-envelope"></i> <?php echo CONTACT_EMAIL; ?></span>
            </div>
            <div class="social-links">
                <?php foreach($social_links as $platform => $url): ?>
                    <a href="<?php echo $url; ?>" target="_blank"><i class="fab fa-<?php echo $platform; ?>"></i></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header>
        <nav class="navbar">
            <div class="container">
                <div class="nav-brand">
                    <a href="index.php">
                        <div class="logo">
                            <img src="Assets/zohra.png" style="width: 50px; height:45px;">
                            <h1>Zohra Tourism</h1>
                        </div>
                    </a>
                </div>
                
                <button class="mobile-menu-btn" aria-label="Toggle menu">
                    <i class="fas fa-bars"></i>
                </button>
                
                <ul class="nav-menu">
                    <li><a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="about.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>"><i class="fas fa-info-circle"></i> About</a></li>
                    <li><a href="services.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : ''; ?>"><i class="fas fa-concierge-bell"></i> Services</a></li>
                    <li><a href="partners.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'partners.php' ? 'active' : ''; ?>"><i class="fas fa-handshake"></i> Partners</a></li>
                    <li><a href="contact.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>"><i class="fas fa-envelope"></i> Contact</a></li>
                    <li><a href="booking.php" class="btn-book">Book Now</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Hero Banner (only on homepage) -->
    <?php if(basename($_SERVER['PHP_SELF']) == 'index.php'): ?>
    <section class="hero">
        <div class="hero-content">
            <h2>Experience Luxury Travel Like Never Before</h2>
            <p>Your gateway to unforgettable journeys and premium hospitality experiences</p>
            <div class="hero-buttons">
                <a href="services.php" class="btn-primary">Explore Services</a>
                <a href="contact.php" class="btn-secondary">Contact Us</a>
            </div>
        </div>
        <div class="hero-overlay"></div>
    </section>
    <?php endif; ?>