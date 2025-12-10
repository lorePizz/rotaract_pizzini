<?php
$percorso = "../JSON/bollettini.json";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $titolo = $_POST["titolo"];
    $data = $_POST["data"];
    $file = $_POST["file"];

    $json = file_get_contents($percorso);
    $dati = json_decode($json, true);

    $dati["bollettini"][] = [
        "titolo" => $titolo,
        "data" => $data,
        "file" => $file
    ];

    file_put_contents($percorso, json_encode($dati, JSON_PRETTY_PRINT));

    header("Location: ../Pagine/modifiche.html");
    exit;
}
?>
