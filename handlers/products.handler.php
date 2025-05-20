<?php 
   function getProducts() {
    return [
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
}

function filterProductByCategory($products, $category) {
    if($category === 'all') return $products;

    return array_filter($products, function($product) use ($category) {
        return $product['category'] === $category;
    });
}

?>