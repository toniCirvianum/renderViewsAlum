<?php
/** PHP DOC */
/** @var array $productList */
/** @var string $titol */

echo "<h1>". $titol." del test</h1>";
echo "<pre>";

foreach ($productList as $product) {
    echo "<br>";
    echo htmlspecialchars($product['name']);
}
echo "</pre>";