<?php 
   $shoeCategories = [
    'running' => 'Running Shoes',
    'sneakers' => 'Casual Sneakers',
    'formal' => 'Formal Shoes',
    'sports' => 'Sports Shoes'
   ];

  function displayCategories($categories) {
    echo "<ul class='categories'>";
    foreach($categories as $key => $value){
        echo "<li><a href ='products.php?category=$key'>$value</a></li>";
    }
    echo "</ul>";
}

$featuredShoes =[
[
    'name' => 'Nike Zoom 1',
    'price' => 120.99,
    'image' => 'nike-zoom.jpg',
    'category' => 'running'
],
[
    'name' => 'Classic White',
    'price' => 89.99,
    'image' => 'classic.jpg',
    'category' => 'sneakers'
],
[
    'name'  => 'Black Classics',
    'price' => 149.99,
    'image' => 'black-class.jpg',
    'category' => 'formal'
]
];

function displayShoes($shoes) {
    echo "<div class='shoe-card'>";
    foreach($shoes as $shoe) {
        echo "<div class='shoe-card'>";
        echo "(img src='./assets/img/{$shoe['image']} alt='{shoe['name']}'>";
        echo "<h3?>{$shoe['name']}</h3>";
        echo "<p>\${$shoe['price']}</p>";
        echo "</div>";
    }
    echo "</div>";
}

require_once '../components/header.component.php';
?>

<section class="hero">
    <h2>Welcome to Style Shoe Store</h2>
    <p>Find your Perfect Shoe!</p>
</section>

<section class="featured">
    <h2>Featured Products</h2>
    <?php displayShoes($featuredShoes); ?>
</section>

<section class="categories">
    <h2>Shop By Category</h2>
    <?php displayCategories($shoeCategories); ?>
</section>

<?php include'../components/footer.php'; ?>