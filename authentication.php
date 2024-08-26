<?php
session_start();

function checkAuth() {
    // Check if user is logged in and has the right role
    if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] !== 'manager') {
        header('Location: login.php'); // Redirect to login if not authorized
        exit();
    }
}
session_destroy();
// Call this function at the beginning of each admin page
checkAuth();

