document.addEventListener('DOMContentLoaded', function() {
    const categoryLinks = document.querySelectorAll('.category-link');
    const shoeCards = document.querySelectorAll('.shoe-card');
    const productsHeading = document.querySelector('.products h2');
    
    categoryLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const category = this.dataset.category;
            
            // Update UI
            categoryLinks.forEach(l => l.classList.remove('active'));
            this.classList.add('active');
            
            // Filter products
            let visibleCount = 0;
            shoeCards.forEach(card => {
                if (category === 'all' || card.dataset.category === category) {
                    card.style.display = 'block';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });
            
            // Update heading
            productsHeading.textContent = category === 'all' 
                ? 'All Products' 
                : `${this.textContent} (${visibleCount})`;
        });
    });
});