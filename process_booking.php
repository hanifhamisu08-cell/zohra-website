<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: booking.php');
    exit;
}

$fullname = trim($_POST['fullname'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$country = trim($_POST['country'] ?? '');
$departureDate = trim($_POST['departure_date'] ?? '');
$travelers = filter_var($_POST['travelers'] ?? null, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]);
$date = DateTime::createFromFormat('Y-m-d', $departureDate);
$validDate = $date && $date->format('Y-m-d') === $departureDate;

if (
    $fullname === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || $phone === '' ||
    $country === '' || !$validDate || !$travelers || !isset($_POST['terms'])
) {
    $_SESSION['error_message'] = 'Please complete all required fields with valid information and accept the terms.';
    header('Location: booking.php');
    exit;
}

try {
    $stmt = $conn->prepare(
        'INSERT INTO bookings (fullname, email, phone, country, destination, travel_type, departure_date, duration, travelers, budget, special_requests, newsletter) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)'
    );
    $stmt->execute([
        $fullname,
        $email,
        $phone,
        $country,
        $_POST['destination'] ?: null,
        $_POST['travel_type'] ?: null,
        $departureDate,
        ($_POST['duration'] ?? '') !== '' ? (int) $_POST['duration'] : null,
        $travelers,
        $_POST['budget'] ?: null,
        trim($_POST['special_requests'] ?? '') ?: null,
        isset($_POST['newsletter']) ? 1 : 0,
    ]);
    $_SESSION['success_message'] = 'Your travel request has been received. Our team will be in touch soon.';
} catch (PDOException $exception) {
    error_log('Booking submission failed: ' . $exception->getMessage());
    $_SESSION['error_message'] = 'We could not submit your request right now. Please try again shortly.';
}

header('Location: booking.php');
exit;
