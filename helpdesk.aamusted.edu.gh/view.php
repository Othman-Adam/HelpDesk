<?php
session_start();

if (!isset($_SESSION['index_number'])) {
    header("Location: viewTicket.php");
    exit();
}
?>