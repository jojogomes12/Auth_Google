<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
}

echo 'Olá, ' . $_SESSION['name'];
echo '<br>';
echo '<a href="logout.php">Logout</a>';
?>
