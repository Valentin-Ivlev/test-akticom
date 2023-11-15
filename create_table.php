<?php
require 'include/database_config.php';

$sql = file_get_contents('create_table.sql');

if ($pdo->exec($sql) !== false) {
    echo "Таблица 'products' успешно создана.";
} else {
    echo "Ошибка при создании таблицы 'products': " . $pdo->errorInfo()[2];
}