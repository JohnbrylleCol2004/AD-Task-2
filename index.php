<?php
include 'components/header.component.php';
require_once __DIR__ . '../handlers/categories.handler.php';
require_once __DIR__ . '../handlers/products.handler.php';
require_once __DIR__ . '../handlers/display.handler.php';


$categories = getCategories();
$featuredProducts = array_slice(getProducts(), 0, 3); 
?>


<section class="hero">
    <div class="hero-content">
        <h1>Welcome to Style Shoe Store</h1>
        <p>Discover your perfect pair</p>
        <a href="../page/product.php" class="cta-button">Shop Now</a>
    </div>
</section>


<section class="featured">
    <h2>Featured Shoes</h2>
    <?php echo renderProducts($featuredProducts); ?>
    <div class="view-all">
        <a href="../page/product.php" class = "cta-button" >View All Products</a>
    </div>
</section>


<section class="category-preview">
    <h2>Shop By Category</h2>
    <?php echo renderCategoryLinks($categories); ?>
</section>

<script src="./assets/js/script.js"></script>

<?php include __DIR__ . '../components/footer.component.php'; ?>