<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include header
require_once __DIR__ . '/../components/header.component.php';

// Define categories and shoes
$shoeCategories = [
    'running' => 'Running Shoes',
    'sneakers' => 'Casual Shoes',
    'formal' => 'Formal Shoes',
    'sports' => 'Sports Shoes'
];

$allShoes = [
    [
        'name' => 'Nike Zoom 1',
        'price' => 120.99,
        'image' => 'nike-zoom.jpg',
        'category' => 'running'
    ],
    [
        'name' => 'Off White',
        'price' => 89.99,
        'image'=> 'off-white.jpg',
        'category' => 'sneakers'
    ],
    [
        'name' => 'Black Classics',
        'price' => 149.99,
        'image' => 'black-classic.jpg',
        'category'=> 'formal'
    ],
    [
        'name'=> 'LeBron 20',
        'price'=> 129.99,
        'image' => 'lebron.jpg',
        'category' => 'sports'
    ],
    [
        'name' => 'Adidas Ultraboost',
        'price' => 180.00,
        'image' => 'adi.jpg',
        'category' => 'running'
    ],
    [
        'name' => 'Converse Chuck 70',
        'price' => 75.00,
        'image' => 'chuck.jpg',
        'category' => 'sneakers'
    ]
    ];
function displayCategories($categories) {
    echo "<div class='categories-list'>";
    // 'All' button will be active by default
    echo "<a href='#' class='category-link active' data-category='all'>All Products</a>";
    
    foreach ($categories as $key => $value) {
        echo "<a href='#' class='category-link' data-category='$key'>$value</a>";
    }
    echo "</div>";
}

function displayShoes($shoes) {
    echo "<div class='shoe-grid'>";
    foreach ($shoes as $shoe) {
        echo "<div class='shoe-card' data-category='{$shoe['category']}'>";
        echo "<img src='../assets/img/{$shoe['image']}' alt='{$shoe['name']}'>";
        echo "<h3>{$shoe['name']}</h3>";
        echo "<p>\${$shoe['price']}</p>";
        echo "</div>";
    }
    echo "</div>";
}
?>

<section class="products">
    <h2>All Products</h2>
    
    <?php displayCategories($shoeCategories); ?>
    
    <div class="filter-results">
        <?php displayShoes($allShoes); ?>
    </div>
</section>




<?php include __DIR__ . '/../components/footer.component.php'; ?>