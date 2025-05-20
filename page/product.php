<?php 
require_once '../components/header.component.php';
require_once '../handlers/categories.handler.php';
require_once '../handlers/products.handler.php';
require_once '../handlers/display.handler.php';

$categories = getCategories();
$allProducts = getProducts();


?>
<section class="products">
      <h2>All Products</h2>

      <?php echo renderCategoryLinks($categories); ?>

      <div class="filter-results">
        <?php echo renderProducts($allProducts); ?>
      </div>
</section>

<script src="../assets/js/script.js"></script>

<?php include '../components/footer.component.php'; ?>
