<?php
if (($handle = fopen("excelTOcsv.csv", "r")) !== false) {
    $headers = fgetcsv($handle, 1000, ",");
    fclose($handle);

    echo "<pre>";
    print_r($headers);
    echo "</pre>";
}
