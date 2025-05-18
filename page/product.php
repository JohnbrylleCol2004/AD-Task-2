<?php 
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
        'image' => 'air-runner.jpg',
        'category' => 'running'
    ],
    [
        'name' => 'Off White',
        'price' => 89.99,
        'image'=> 'classic-white.jpg',
        'category' => 'formal'
    ],
    [
        'name' => 'Black Classics',
        'price' => 149.99,
        'image' => 'black-class.jpg',
        'category'=> 'formal'
    ],
    [
        'name'=> 'LeBron 20',
        'price'=> 129.99,
        'image' => 'basketball-pro.jpg',
        'category' => 'sports'
    ]

    ];
 function displayShoes ($shoes) {
    echo "<div class = 'shoe-grid'>";
     foreach ($shoes as $shoe) {
        echo "<div class = 'shoe-card'>";
        echo "<img src='../assets/img/{$shoe['image']}' alt='{$shoe['name']}'>";
        echo "<h3>{$shoe['name']}</h3>";
        echo "<p>\${$shoe['price']}</p>";
        echo "</div>";
}
echo  "</div>";
 }

 $category = $_GET['category'] ?? '';

require_once '../components/header.component.php';
?>

<section class="products">
    <h2><?php echo isset($shoeCategories[$category]) ? $shoeCategories[$category]
    : 'All Products'; ?></h2>

    <?php 
    if (!empty($category)) {
        $filteredShoes =array_filter($allShoes, function($shoe) use ($category) {
            return $shoe['category'] === $category;
        });
        displayShoes($filteredShoes);
    } else{
        displayShoes($allShoes);
    }
    ?>
</section>

<?php include '../components/footer.component.php'?>
