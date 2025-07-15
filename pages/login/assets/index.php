<?php
require_once __DIR__ . '/../../bootstrap.php';
require_once UTILS_PATH . 'auth.util.php';

Auth::init();

// Check if user is authenticated
if (!Auth::check()) {
    header('Location: /index.php');
    exit;
}

$user = Auth::user();

// Set up layout variables
$title = 'Dashboard - Meeting Calendar';
$additional_css = ['/pages/Login/assets/css/style.css'];

// Content for the dashboard
ob_start();
?>
<div class="dashboard-container">
    <div class="welcome-card">
        <h1 class="welcome-title">Welcome to Meeting Calendar!</h1>
        <p class="welcome-message">Hello, <?= htmlspecialchars($user['username'] ?? 'User') ?>!</p>
        <p class="success-message">You have successfully logged in.</p>
    </div>
</div>
<?php
$content = ob_get_clean();
require LAYOUTS_PATH . 'main.layout.php'; // Adjust this path based on your structure
