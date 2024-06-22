document.addEventListener('DOMContentLoaded', function() {

    const menuToggleShow = document.querySelector('.menu-toggle-show');
    const menuCloseShow = document.querySelector('.close-button-show');
    const menuShow = document.querySelector('.menu-show');

    menuToggleShow.addEventListener('click', function() {
        menuShow.classList.toggle('show');
    });

    menuCloseShow.addEventListener('click', function() {
        menuShow.classList.remove('show');
    });
});
