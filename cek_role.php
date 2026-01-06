<?php
if (!in_array($_SESSION['role'], $role_diizinkan)) {
    echo "Akses ditolak";
    exit;
}
