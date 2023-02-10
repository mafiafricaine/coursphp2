<?php
session_start();
unset($_SESSION['pseudo']);
unset($_SESSION['connected']);
header('Location: index.php');
?>