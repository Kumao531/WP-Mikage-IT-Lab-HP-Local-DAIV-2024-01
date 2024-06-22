document.addEventListener('DOMContentLoaded', function() {

    const menuToggleInq = document.querySelector('.menu-toggle-inq');
    const menuCloseInq = document.querySelector('.close-button-inq');
    const menuInq = document.querySelector('.menu-inq');

    menuToggleInq.addEventListener('click', function() {
        menuInq.classList.toggle('show');
    });

    menuCloseInq.addEventListener('click', function() {
        menuInq.classList.remove('show');
    });
});
