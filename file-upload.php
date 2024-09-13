<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Zpracování nahraného souboru
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        // Získání informací o souboru
        $fileTmpPath = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $uploadDir = 'uploads/';
        $destPath = $uploadDir . $fileName;

        // Pokus o přesunutí nahraného souboru do cílové složky
        if (move_uploaded_file($fileTmpPath, $destPath)) {
            echo "soubor byl nahran uspesne";
        } else {
            echo "Nahrani se nezdarilo bohuzel";
        }
    } else {
        echo "zadny soubor nebyl nahran, nebo doslo k chybe";
    }
}
?>