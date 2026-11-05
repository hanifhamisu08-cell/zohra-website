<?php
// Site Configuration
define("SITE_NAME", getenv('SITE_NAME') ?: "Zohra Tourism and Hospitality Services");
define("SITE_URL", rtrim(getenv('SITE_URL') ?: '', '/'));
define("CONTACT_EMAIL", "mambayya@gmail.com");
define("CONTACT_PHONE", "+2348060959777, +2348029461777");
define("ADDRESS", "Nigeria");
// Social Media Links
$social_links = [
    'facebook' => 'https://facebook.com/zohratourism',
    'twitter' => 'https://twitter.com/zohratourism',
    'instagram' => 'https://instagram.com/zohratourism',
    'linkedin' => 'https://linkedin.com/company/zohratourism'
];

// Services Data
$services = [
    [
        'title' => 'Tour Planning & Management',
        'description' => 'Customized tour packages for individuals and groups',
        'image' => 'Assets/travel-planning.jpg',
        'alt' => 'Travel map and passport ready for planning a trip'
    ],
    [
        'title' => 'Hospitality Consulting',
        'description' => 'Expert advice for hotel and resort management',
        'image' => 'Assets/hotel-lobby.jpg',
        'alt' => 'Sunlight falling across a modern hotel lobby'
    ],
    [
        'title' => 'Travel Support Services',
        'description' => '24/7 customer support during your travels',
        'image' => 'Assets/airline-transport.jpg',
        'alt' => 'Passenger aircraft at an airport'
    ],
    [
        'title' => 'Corporate Travel',
        'description' => 'Business travel solutions for companies',
        'image' => 'Assets/airline-transport.jpg',
        'alt' => 'Passenger aircraft on the runway'
    ],
    [
        'title' => 'Luxury Getaways',
        'description' => 'Premium vacation experiences worldwide',
        'image' => 'Assets/hotel-lobby.jpg',
        'alt' => 'Quiet, elegant hotel lounge'
    ],
    [
        'title' => 'Adventure Tourism',
        'description' => 'Thrilling experiences for adventure seekers',
        'image' => 'Assets/mountain-adventure.jpg',
        'alt' => 'Hikers following a trail beside a mountain lake'
    ]
];

// Partners Data
$partners = [
    ['name' => 'Global Airlines', 'image' => 'Assets/airline-transport.jpg', 'alt' => 'Passenger aircraft at an airport', 'category' => 'Transportation'],
    ['name' => 'Luxury Hotels Group', 'image' => 'Assets/hotel-lobby.jpg', 'alt' => 'Contemporary hotel lounge', 'category' => 'Accommodation'],
    ['name' => 'Travel Insurance Co.', 'image' => 'Assets/travel-planning.jpg', 'alt' => 'Travel planning map and passport', 'category' => 'Insurance'],
    ['name' => 'Local Guides Network', 'image' => 'Assets/local-guides.jpg', 'alt' => 'A guide leading a group of visitors', 'category' => 'Guides'],
    ['name' => 'Car Rental Service', 'image' => 'Assets/car-rental.jpg', 'alt' => 'Car on a scenic open road', 'category' => 'Transportation'],
    ['name' => 'Event Management Co.', 'image' => 'Assets/event-management.jpg', 'alt' => 'Guests at a formal event', 'category' => 'Entertainment']
];
?>
