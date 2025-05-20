<?php
function getCategories() {
    return [
        'running' => 'Running Shoes',
        'sneakers' => 'Casual Shoes',
        'formal' => 'Formal Shoes',
        'sports' => 'Sports Shoes'
    ];
}

function renderCategoryLinks($categories) {
    $html = "<div class='categories-list'>";
    $html .= "<a href='#' class='category-link active' data-category='all'>All Products</a>";
    
    foreach ($categories as $key => $value) {
        $html .= "<a href='#' class='category-link' data-category='$key'>$value</a>";
    }
    
    $html .= "</div>";
    return $html;
}
?>