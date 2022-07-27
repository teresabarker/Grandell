window.onload = function () {
    
    // Toggle Mobile Navigation menu open/closed
    const menuButton = document.querySelector('.hamburger');
    const mobileMenu = document.querySelector('.mobile-nav');

    menuButton.addEventListener('click', function () {
        menuButton.classList.toggle("is-active");
        mobileMenu.classList.toggle("is-active");
    });
}