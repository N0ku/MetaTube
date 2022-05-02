const menu = document.getElementsByClassName("hamburger-menu-container");
const menuShort = document.getElementsByClassName('short-menu');
const root = document.documentElement;
const burgerButton = document.getElementsByClassName("hamburger-button-home");

function closeMenu() {
    burgerButton[0].setAttribute("onclick", "openMenu()");
    menu[0].style.transform = "translateX(var(--menu-width-close))";
    menu[0].style.transition = "transform 500ms ease-out";
    menuShort[0].style.display = "flex";
    menu[0].style.display = "none"
    root.style.setProperty('--video-content-width', '20%');
    root.style.setProperty('--video-content-padding', '30px');
}

function openMenu() {
    burgerButton[0].setAttribute("onclick", "closeMenu()");
    menu[0].style.transform = "translateX(var(--menu-width))";
    menu[0].style.transition = "transform 500ms ease-out";
    menuShort[0].style.display = "none";
    menu[0].style.display = "flex";
    root.style.setProperty('--video-content-width', '15%');
    root.style.setProperty('--video-content-padding', '20px');
}
