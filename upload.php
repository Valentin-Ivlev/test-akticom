<?php
require 'include/database_config.php';
require 'model/ProductModel.php';

$productModel = new ProductModel($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['csv_file']['tmp_name'])) {

    $csvFile = $_FILES['csv_file']['tmp_name'];

    if (($handle = fopen($csvFile, "r")) !== FALSE) {

        $columns = 0;

        while ($line = fgets($handle)) {

            if ($columns === 0) {
                $columns = count(explode(';', $line));
            } else {
                $data = explode(';', $line, $columns);

                $data[5] = cleanDecimalValue($data[5]);
                $data[6] = cleanDecimalValue($data[6]);
                $data[7] = cleanDecimalValue($data[7]);

                $productModel->addProduct($data);
            }
        }
        fclose($handle);
    }

    header("Location: view_data.php");
    exit;
}

function cleanDecimalValue($value) {
    $cleanedValue = str_replace('"', '', $value);
    $cleanedValue = str_replace(',', '.', $cleanedValue);
    if ($cleanedValue === '') $cleanedValue = '0';

    return $cleanedValue;
}