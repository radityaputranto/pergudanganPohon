<?php

$connection = new mysqli("localhost", "root", "", "belajar");

if (!$connection) {
    echo "<h1>Whoops! Koneksi database gagal</h1>";
}

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = "home";
}

switch ($page) {
    case 'home': 
        $page = "home";
    break;
    case 'formAdd': 
        $page = "formAdd";
    break;
    case 'formEdit': 
        $page = "formEdit";
    break;
    case 'login': 
        $page = "login";
    break;
    case 'register': 
        $page = "register";
    break;
    case 'logout': 
        $page = "logout";
    break;
    default:
        $page = "home";
    break;
}