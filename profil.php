<?php 
$pageTitle = $pageTitle ?? 'Telkom University - Praktikum Web'; 
$currentPage = basename($_SERVER['PHP_SELF']); 

$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$base_url = $protocol . "://" . $_SERVER['HTTP_HOST'] . "/telkom-company-profile/";
?> 
<!doctype html> 
<html lang="id"> 
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title><?= htmlspecialchars($pageTitle) ?></title> 
    
    <!-- Menggunakan Base URL Dinamis -->
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/style.css"> 
</head> 
<body>