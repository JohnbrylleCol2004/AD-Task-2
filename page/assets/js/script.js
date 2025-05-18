document.addEventListener('DOMContentLoaded', function(){
    const categoryLinks = document.querySelectorAll('.category-link');
    const allShoes = document.querySelectorAll('.shoe-card');

    categoryLinks.forEach(link => {
        link.addEventListener('click', function(e){
            e.preventDefault();
            const category = this.getAttribute('data-category');

            allShoes.forEach(shoe => {
                const shoeCategory = shoe.getAttribute('data-category');
                if (category === 'all' || shoeCategory === category){
                    shoe.style.display = 'block';
                } else {
                    shoe.style.display = 'none';
                }
            });

            categoryLinks.forEach(l => l.classList.remove('active'));
            this.classList.add('active');

            document.querySelector('product h2').textContent =
                category === 'all' ? 'All Products' : '${this.textContent}';  
        });
    });
});