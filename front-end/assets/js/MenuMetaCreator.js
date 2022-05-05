const menu = document.getElementsByClassName("hamburger-menu-metacreator");
const menuShort = document.getElementsByClassName('short-menu-metacreator');

function closeMenuMeta() {
    burgerButton[0].setAttribute("onclick", "openMenuMeta()");
    menu[0].style.transform = "translateX(var(--menu-width-close))";
    menu[0].style.transition = "transform 500ms ease-out";
    menuShort[0].style.display = "flex";
    menu[0].style.display = "none"
    root.style.setProperty('--video-content-width', '20%');
}

function openMenuMeta() {
    burgerButton[0].setAttribute("onclick", "closeMenuMeta()");
    menu[0].style.transform = "translateX(var(--menu-width))";
    menu[0].style.transition = "transform 500ms ease-out";
    menuShort[0].style.display = "none";
    menu[0].style.display = "flex";
    root.style.setProperty('--video-content-width', '10%');
}