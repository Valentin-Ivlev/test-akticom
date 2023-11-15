<?php
require 'include/database_config.php';
require 'model/ProductModel.php';

$productModel = new ProductModel($pdo);
$products = $productModel->getAllProducts();

require 'include/header.html';
?>
    <h1>Список продуктов</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Код</th>
            <th scope="col">Наименование</th>
            <th scope="col">Уровень1</th>
            <th scope="col">Уровень2</th>
            <th scope="col">Уровень3</th>
            <th scope="col">Цена</th>
            <th scope="col">ЦенаСП</th>
            <th scope="col">Количество</th>
            <th scope="col">Поля свойств</th>
            <th scope="col">Совместные покупки</th>
            <th scope="col">Единица измерения</th>
            <th scope="col">Картинка</th>
            <th scope="col">Выводить на главной</th>
            <th scope="col">Описание</th>
        </tr>
        </thead>
        <tbody>
<?php

foreach ($products as $product) {

    echo "<tr><td>{$product['code']}</td>";
    echo "<td>{$product['name']}</td>";
    echo "<td>{$product['level1']}</td>";
    echo "<td>{$product['level2']}</td>";
    echo "<td>{$product['level3']}</td>";
    echo "<td>{$product['price']}</td>";
    echo "<td>{$product['price_sp']}</td>";
    echo "<td>{$product['quantity']}</td>";
    echo "<td>{$product['properties']}</td>";
    echo "<td>{$product['purchases']}</td>";
    echo "<td>{$product['unit']}</td>";
    echo "<td>{$product['image']}</td>";
    echo "<td>{$product['display_on_main']}</td>";
    echo "<td>{$product['description']}</td></tr>";
}

echo "</tbody>";
echo "</table>";

require 'include/footer.html';