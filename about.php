<?php
include 'db.php';
include_once 'config.php';
$page_title = "About Us";
?>

<?php include 'header.php'; ?>

<main>
    <!-- About Hero -->
    <section class="page-hero">
        <div class="container">
            <h1>About Zohra Tourism</h1>
            <p>Delivering excellence in travel and hospitality since 2008</p>
        </div>
    </section>

    <!-- Our Story -->
    <section class="about-story">
        <div class="container">
            <div class="story-content">
                <div class="story-text">
                    <h2>Our Story</h2>
                    <p>Founded in 2008, Zohra Tourism & Hospitality Ventures began with a simple mission: to connect travelers with authentic, memorable experiences while providing unparalleled hospitality services.</p>
                    <p>Over the years, we've grown from a small local agency to a recognized travel company in our state, serving thousands of satisfied clients.</p>
                    <p>Our commitment to quality, attention to detail, and personalized service has earned us numerous awards and a reputation as one of the most trusted names in the industry.</p>
                </div>
                <div class="story-image">
                    <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828" alt="Our Team">
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="mission-vision">
        <div class="container">
            <div class="mv-grid">
                <div class="mv-card">
                    <div class="mv-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>To provide exceptional travel experiences through innovative solutions, expert guidance, and unwavering commitment to customer satisfaction.</p>
                </div>
                
                <div class="mv-card">
                    <div class="mv-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Our Vision</h3>
                    <p>To become the world's most trusted travel and hospitality partner, transforming how people experience cultures and destinations in Jos.</p>
                </div>
                
                <div class="mv-card">
                    <div class="mv-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Our Values</h3>
                    <p>Integrity, Excellence, Innovation, Sustainability, and Customer-Centric Approach guide every decision we make.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <div class="section-header">
                <h2>Meet Our Leadership</h2>
                <p>The experts behind your perfect journey</p>
            </div>
            
            <div class="team-grid">
                <div class="team-card">
                    <img src="https://i.pravatar.cc/150?img=11" alt="CEO">
                    <h3>Sarah Al-Mansoori</h3>
                    <span class="team-role">CEO & Founder</span>
                    <p>15+ years in hospitality management</p>
                </div>
                
                <div class="team-card">
                    <img src="https://i.pravatar.cc/150?img=8" alt="Operations Director">
                    <h3>David Chen</h3>
                    <span class="team-role">Operations Director</span>
                    <p>Expert in travel logistics</p>
                </div>
                
                <div class="team-card">
                    <img src="https://i.pravatar.cc/150?img=5" alt="Customer Experience">
                    <h3>Maria Rodriguez</h3>
                    <span class="team-role">Customer Experience Manager</span>
                    <p>Dedicated to client satisfaction</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-card">
                    <h3>15+</h3>
                    <p>Years of Experience</p>
                </div>
                
                <div class="stat-card">
                    <h3>10,000+</h3>
                    <p>Satisfied Clients</p>
                </div>
                
                <div class="stat-card">
                    <h3>50+</h3>
                    <p>Across State</p>
                </div>
                
                <div class="stat-card">
                    <h3>100+</h3>
                    <p>Industry Partners</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>