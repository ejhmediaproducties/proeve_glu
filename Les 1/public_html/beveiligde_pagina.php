<?php
session_start();

// controleer of de gebruiker is ingelogd
if(!isset($_SESSION['gebruikersnaam']) && $_GET['ingelogd'] != 1){
    header('Location: index.php');
    exit;
}

// welkomstbericht voor ingelogde gebruiker
echo 'Welkom, ' . $_SESSION['gebruikersnaam'] . '!';
?>
