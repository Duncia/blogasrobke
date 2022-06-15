/*
Burger menu:
1. Burger (as container), burger_middle the middle line and menu div selected.
2. Events method called (which includes click event listener and calls toggle menu method).
3. Toggle menu adds/removes CSS classes.
*/
class BurgerMenu {
    constructor() {
        this.burgerMenuDiv = document.querySelector("#burger");
        this.burgerMenuIcon = document.querySelector("#burger__middle");
        this.mainMenuClose = document.querySelector("#main-menu");
        this.headerMenu = document.querySelector("#header__menu");
        this.events();
    }

    events(){
        this.burgerMenuDiv.addEventListener('click', () => {
            this.toggleMenu();
        });
    }
    toggleMenu(){
        this.burgerMenuIcon.classList.toggle("header__burger__middle--active");
        this.mainMenuClose.classList.toggle("main-menu--close");
        this.burgerMenuDiv.classList.toggle("pos-fixed");
        this.headerMenu.classList.toggle("visibility-hidden");
    }
}

export default BurgerMenu;