<?php 
$shoeCategories = [
    'running' => 'Running Shoes',
    'sneakers' => 'Casual Sneakers',
    'formal' => 'Formal Shoes',
    'sports' => 'Sports Shoes'
];

function displayCategories($categories) {
    echo "<div class='categories-list'>";
    foreach ($categories as $key => $value) {
        echo "<a href='#' class='category-link' data-category='$key'>$value</a>";
    }
    echo "</div>";
}
$featuredShoes = [
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
        'category'=> 'sneakers'
    ],
    [
        'name' => 'Black Classics',
        'price' => 149.99,
        'image' => 'black-classic.jpg',
        'category' => 'formal'
    ],
    [
        'name' => 'LeBron 20',
        'price' => 199.99,
        'image' => 'lebron.jpg',
        'category' => 'sports'
    ],
    [
        'name' => 'Converse Chuck 70',
        'price' => 75.00,
        'image' => 'chuck.jpg',
        'category' => 'sneakers'
    ]
];

function displayShoes($shoes) {
    echo "<div class='shoe-grid'>";
    foreach($shoes as $shoe){
        echo "<div class='shoe-card'>";
        echo "<img src='./assets/img/{$shoe['image']}' alt='{$shoe['name']}'>";
        echo "<h3>{$shoe['name']}</h3>";
        echo "<p>\${$shoe['price']}</p>";
        echo "</div>";
    }
    echo "</div>";
}

require_once __DIR__ . '../components/header.component.php';
?>
<div class="hero-container">
<section class="hero">
    <h2>Welcome to Style Shoe Store</h2>
    <p>Find your perfect shoe!</p>
</section>
</div>

<section class="featured">
    <h2>Featured Shoes</h2>
    <?php displayShoes($featuredShoes); ?>
</section>


<?php include __DIR__ . '../components/footer.component.php'; ?>