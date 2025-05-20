document.addEventListener('DOMContentLoaded', function() {
    const categoryLinks = document.querySelectorAll('.category-link');
    
    categoryLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const category = this.dataset.category;
            
            // Filter logic
            filterShoes(category);
            
            // Update active state
            categoryLinks.forEach(l => l.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // Separate filter function for reusability
    function filterShoes(category) {
        const shoeCards = document.querySelectorAll('.shoe-card');
        let visibleCount = 0;
        
        shoeCards.forEach(card => {
            const matches = category === 'all' || 
                          card.dataset.category === category;
            
            card.style.display = matches ? 'block' : 'none';
            if (matches) visibleCount++;
        });
        
        // Update heading
        const activeText = category === 'all' 
            ? 'Our Shoe Collection' 
            : `${document.querySelector(`[data-category="${category}"]`).textContent} (${visibleCount})`;
        
        document.querySelector('.products-header h2').textContent = activeText;
    }
}); 