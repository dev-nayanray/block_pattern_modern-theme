document.addEventListener("DOMContentLoaded", function() {
    console.log("Theme loaded successfully!");
});
document.addEventListener("DOMContentLoaded", function () {
    let counters = document.querySelectorAll(".counter");
    counters.forEach(counter => {
        let countTo = parseInt(counter.getAttribute("data-count"));
        let count = 0;
        let increment = countTo / 100;

        let interval = setInterval(() => {
            count += increment;
            counter.textContent = Math.floor(count);
            if (count >= countTo) {
                counter.textContent = countTo;
                clearInterval(interval);
            }
        }, 20);
    });
});
// Slider Functionality
document.addEventListener('DOMContentLoaded', function() {
    // Initialize slider
    const sliderItems = document.querySelectorAll('.slider-item');
    let currentSlide = 0;
    
    function showSlide(index) {
        sliderItems.forEach(item => item.style.opacity = 0);
        sliderItems[index].style.opacity = 1;
    }
    
    setInterval(() => {
        currentSlide = (currentSlide + 1) % sliderItems.length;
        showSlide(currentSlide);
    }, 5000);
});

// Modal Functionality
document.querySelectorAll('.open-modal').forEach(button => {
    button.addEventListener('click', () => {
        document.querySelector('.modal-overlay').style.display = 'flex';
    });
});

document.querySelectorAll('.close-modal').forEach(button => {
    button.addEventListener('click', () => {
        document.querySelector('.modal-overlay').style.display = 'none';
    });
});