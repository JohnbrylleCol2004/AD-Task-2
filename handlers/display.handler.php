<?php
function renderProducts($products) {
    $html = "<div class='shoe-grid'>";
    
    foreach ($products as $product) {
        $html .= "
        <div class='shoe-card' data-category='{$product['category']}'>
            <img src='../assets/img/{$product['image']}' alt='{$product['name']}'>
            <h3>{$product['name']}</h3>
            <p>\${$product['price']}</p>
        </div>";
    }
    
    $html .= "</div>";
    return $html;
}
?>