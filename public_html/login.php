<?php
error_reporting(E_ALL);
ini_set("display_errors", true);

// Lees de inhoud van het .env-bestand
$env_file = file_get_contents('.env');

// Verdeel de inhoud in een array van lijnen
$env_lines = explode("\n", $env_file);

// Maak een array van omgevingsvariabelen
$env_vars = [];
foreach ($env_lines as $line) {
$parts = explode('=', $line, 2);
if (count($parts) === 2) {$env_vars[$parts[0]] = $parts[1];}
}

// Gegevens voor databaseverbinding
$servername = $env_vars['DB_HOST'];
$username = $env_vars['DB_USER'];
$password = $env_vars['DB_PASS'];
$dbname = $env_vars['DB_NAME'];

// Maak verbinding met de database
$conn = new mysqli($servername, $username, $password, $dbname);

// Controleer of de verbinding is geslaagd
if ($conn->connect_error) {
die("Kan geen verbinding maken met de database: " . $conn->connect_error);
}

// Ontvang gebruikersinvoer
$gebruikersnaam = $_POST['gebruikersnaam'];
$wachtwoord = $_POST['wachtwoord'];

// Maak een query om gebruiker te vinden die overeenkomt met de invoer
$sql = "SELECT * FROM gebruikers WHERE gebruikersnaam='$gebruikersnaam' AND wachtwoord='$wachtwoord'";
$result = $conn->query($sql);

// Controleer of de query resultaten heeft opgeleverd
if ($result->num_rows > 0) {
session_start();
$_SESSION['gebruikersnaam'] = $gebruikersnaam;
// Gebruiker is gevonden, doorstuur naar de beveiligde pagina
header("Location: beveiligde_pagina.php");
} else {
// Gebruiker niet gevonden, toon een foutmelding
echo "Fout: Ongeldige gebruikersnaam of wachtwoord.";
}

// Sluit de databaseverbinding
$conn->close();
?>
