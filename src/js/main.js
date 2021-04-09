import '../sass/main.scss';

let menuToggler = document.querySelector('.navbar__toggle');
let menuList = document.querySelector('.navbar__list');

menuToggler.addEventListener('click', e => {
    console.log(e.currentTarget);
    menuList.classList.toggle('open');
    menuList.style.clipPath = 'polygon(100% 0, 100% 100%, 0 100%, 0 0)';
});