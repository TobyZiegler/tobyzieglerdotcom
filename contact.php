<?php
/**
 * contact.php — Contact form handler for tobyziegler.com
 *
 * Expects POST from the contact form with fields:
 *   name     — sender's name
 *   email    — sender's email address
 *   message  — message body
 *   website  — honeypot field (must be empty)
 *
 * Returns HTTP 200 on success, 4xx/5xx on failure.
 * Response body is plain text — read by the JS fetch handler.
 *
 * DEPLOYMENT CHECKLIST:
 *   [ ] Set TO_EMAIL below to your real address
 *   [ ] Confirm server has mail() enabled (Namecheap shared hosting does)
 *   [ ] Upload alongside index.php / index.html — same document root
 *   [ ] Test with a real submission before going live
 */

// ── Configuration ────────────────────────────────────────────────────
define('TO_EMAIL',   'toby@tobyziegler.com');   // ← your address
define('TO_NAME',    'Toby Ziegler');
define('SUBJECT',    'New message from tobyziegler.com');
define('RATE_LIMIT', 3);     // max submissions per session
define('MIN_DELAY',  10);    // minimum seconds between submissions

// ── Only accept POST ─────────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method not allowed.');
}

// ── Start session for rate limiting ──────────────────────────────────
session_start();

// ── Honeypot check — bots fill hidden fields, humans don't ───────────
// Add a hidden input named "website" to the form with display:none via CSS
// (not via type="hidden" — bots skip those; CSS-hidden fields catch more)
$honeypot = isset($_POST['website']) ? trim($_POST['website']) : '';
if ($honeypot !== '') {
    // Silently succeed — don't let bots know they were caught
    http_response_code(200);
    exit('Message sent.');
}

// ── Rate limiting ─────────────────────────────────────────────────────
if (!isset($_SESSION['contact_count'])) {
    $_SESSION['contact_count']    = 0;
    $_SESSION['contact_last_time'] = 0;
}

$now = time();

if ($_SESSION['contact_count'] >= RATE_LIMIT) {
    http_response_code(429);
    exit('Too many submissions. Please try again later.');
}

if (($now - $_SESSION['contact_last_time']) < MIN_DELAY) {
    http_response_code(429);
    exit('Please wait a moment before submitting again.');
}

// ── Collect and sanitize inputs ───────────────────────────────────────
$name    = isset($_POST['name'])    ? trim(strip_tags($_POST['name']))    : '';
$email   = isset($_POST['email'])   ? trim(strip_tags($_POST['email']))   : '';
$message = isset($_POST['message']) ? trim(strip_tags($_POST['message'])) : '';

// ── Validate ──────────────────────────────────────────────────────────
$errors = [];

if ($name === '') {
    $errors[] = 'Name is required.';
} elseif (strlen($name) > 100) {
    $errors[] = 'Name is too long.';
}

if ($email === '') {
    $errors[] = 'Email address is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
} elseif (strlen($email) > 254) {
    $errors[] = 'Email address is too long.';
}

if ($message === '') {
    $errors[] = 'Message is required.';
} elseif (strlen($message) < 10) {
    $errors[] = 'Message is too short.';
} elseif (strlen($message) > 5000) {
    $errors[] = 'Message is too long (5000 character limit).';
}

if (!empty($errors)) {
    http_response_code(422);
    exit(implode(' ', $errors));
}

// ── Header injection guard ────────────────────────────────────────────
// Reject any field containing newlines (classic header injection vector)
foreach ([$name, $email] as $field) {
    if (preg_match('/[\r\n]/', $field)) {
        http_response_code(400);
        exit('Invalid input.');
    }
}

// ── Build the email ───────────────────────────────────────────────────
$safe_name    = htmlspecialchars($name,    ENT_QUOTES, 'UTF-8');
$safe_email   = htmlspecialchars($email,   ENT_QUOTES, 'UTF-8');
$safe_message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

$body  = "New message from tobyziegler.com\n";
$body .= str_repeat('-', 40) . "\n\n";
$body .= "Name:    {$name}\n";
$body .= "Email:   {$email}\n";
$body .= "Time:    " . date('Y-m-d H:i:s T') . "\n";
$body .= "IP:      " . ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . "\n\n";
$body .= "Message:\n{$message}\n";

$headers  = "From: {$name} <{$email}>\r\n";
$headers .= "Reply-To: {$email}\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// ── Send ──────────────────────────────────────────────────────────────
$sent = mail(TO_EMAIL, SUBJECT, $body, $headers);

if ($sent) {
    // Update rate limiting counters
    $_SESSION['contact_count']++;
    $_SESSION['contact_last_time'] = $now;

    http_response_code(200);
    exit('Message sent.');
} else {
    http_response_code(500);
    exit('Mail could not be sent. Please try emailing directly.');
}