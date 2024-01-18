document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const navList = document.querySelector('.nav-list');
    const body = document.querySelector('body');
    const overlay = document.createElement('div');




    menuToggle.addEventListener('click', function () {
        navList.classList.toggle('show');
        body.classList.toggle('menu-open');
        overlay.classList.toggle('show');
    });

    overlay.addEventListener('click', function () {
        navList.classList.remove('show');
        body.classList.remove('menu-open');
        overlay.classList.remove('show');
    });
});
