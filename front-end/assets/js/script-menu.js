function closeMenu() {
    const menu = document.getElementsByClassName("hamburger-menu-container");
    menu[0].style.transform = "translateX(var(--menu-width-close))";
    menu[0].style.transition = "transform 280ms ease-out";
}

function openMenu() {
    const menu = document.getElementsByClassName("hamburger-menu-container");
    menu[0].style.transform = "translateX(var(--menu-width))";
    menu[0].style.transition = "transform 280ms ease-out";
}