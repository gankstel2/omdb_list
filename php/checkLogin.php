<?php
session_start();
if (isset($_SESSION['sessuser'])) {
    // header("Location: login/login_page.php");
} else {
    header("Location: login/login_page.php");
}
