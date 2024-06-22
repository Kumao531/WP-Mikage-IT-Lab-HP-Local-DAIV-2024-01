document.addEventListener('DOMContentLoaded', function() {

    const menuToggleServ = document.querySelector('.menu-toggle-serv-sub');
    const menuCloseServ = document.querySelector('.close-button-serv-sub');
    const menuServ = document.querySelector('.menu-serv-sub');

    menuToggleServ.addEventListener('click', function() {
        menuServ.classList.toggle('show');
    });

    menuCloseServ.addEventListener('click', function() {
        menuServ.classList.remove('show');
    });
});
