// faq-accordion.js
document.addEventListener('DOMContentLoaded', function () {
    const accordionItems = document.querySelectorAll('.modern-accordion .wp-block-accordion-item');

    accordionItems.forEach(item => {
        const heading = item.querySelector('h3');
        const content = item.querySelector('p');
        const icon = item.querySelector('.accordion-icon');

        heading.addEventListener('click', () => {
            const isOpen = item.classList.contains('is-open');

            // Close all items
            accordionItems.forEach(i => {
                i.classList.remove('is-open');
                i.querySelector('p').style.display = 'none';
                i.querySelector('.accordion-icon').textContent = '+';
            });

            // Open the clicked item
            if (!isOpen) {
                item.classList.add('is-open');
                content.style.display = 'block';
                icon.textContent = '−';
            }
        });
    });
});