<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        
        $fileTmpPath = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $uploadDir = 'C:\inetpub\wwwroot\vulnapp-master\files/';
        $destPath = $uploadDir . $fileName;

        
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