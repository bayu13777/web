<?php if (session_status() == PHP_SESSION_NONE) session_start(); ?>

<nav class="navbar navbar-dark bg-dark px-3">
    <span class="navbar-brand">🎮 Rental PlayStation</span>
    <span class="text-white">
        <?= $_SESSION['username'] ?? '' ?> |
        <a href="logout.php" class="text-warning">Logout</a>
    </span>
</nav>
