const menuBtn = document.querySelector('.header-menu-btn');
const menuMobile = document.querySelector('.header__menu-navigation-mobile');

menuBtn.addEventListener('click', () => {
    menuMobile.classList.toggle('header__menu-navigation-mobile--open');
});
