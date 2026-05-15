<?php
// 1. DATA EXPOZIC (Upraveno pro téma Automobily)
$expozice = [
    ["Historické vozy", "Prohlédněte si unikátní sbírku veteránů z počátku 20. století, včetně vzácných modelů značky Tatra a Škoda.", "auto.jpg", "Hlavní hala"],
    ["Zlatá éra IT", "První palubní počítače a diagnostické přístroje, které změnily svět automobilového průmyslu.", "it.jpg", "Sekce technologie"],
    ["Motory a mechanika", "Detailní pohled pod kapotu. Funkční řezy motorů a vývoj převodovek v průběhu desetiletí.", "technika.jpg", "Technický pavilon"]
];

// 2. ZPRACOVÁNÍ REZERVACE (Rozšířeno o datum, čas, email a počet osob)
$zprava = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jmeno = htmlspecialchars($_POST['jmeno'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $datum = htmlspecialchars($_POST['datum'] ?? '');
    $cas = htmlspecialchars($_POST['cas'] ?? '');
    $osob = htmlspecialchars($_POST['osob'] ?? '');
    $typ = htmlspecialchars($_POST['typ'] ?? '');
    
    // Formátování potvrzovací zprávy
    $zprava = "Rezervace pro $jmeno na $datum v $cas (počet osob: $osob, typ: $typ) byla úspěšně přijata! Potvrzení bylo odesláno na $email.";
}

// 3. NAČTENÍ ŠABLONY
include "sablona.php";
?>