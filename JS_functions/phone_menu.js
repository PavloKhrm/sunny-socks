let currentPage; // sets a variable for currentPage. It is used only for backup.php

function resetMenu() {
    if (window.innerWidth >= 1200) {
        //if size of the screen >1200 -> shows computer footer and header. Hides phone header
        document.getElementById("footer").style["display"] = "flex";
        document.getElementById("menuDiv").style["display"] = "none";
        document.getElementById("menuRect").style["display"] = "none";
        document.getElementById("phoneMenu").style["display"] = "none";
        if (currentPage == "catalogue") document.getElementById("rightColumn").style["display"] = "flex"; // displays feet picture on catalogue.php
        if (currentPage != "backUp") document.getElementById("header").style["display"] = "flex"; // shows header on every page excluding backup,php
    }else {
        //if size of the screen >1200 -> shows phone header. Hides computer footer and header
        document.getElementById("menuDiv").style["display"] = "flex";
        document.getElementById("menuRect").style["display"] = "block";
        document.getElementById("phoneMenu").style["display"] = "flex";
        document.getElementById("footer").style["display"] = "none"; // hides computer footer

        if (currentPage == "catalogue") document.getElementById("rightColumn").style["display"] = "none"; // hides feet picture on catalogue.php
        if (currentPage != "backUp") document.getElementById("header").style["display"] = "none"; //  header on every page excluding backup,php as it is already hidden
    }
}
resetMenu(); // calls function on script load to show correct header and footer
window.addEventListener("resize", resetMenu); // adds event to the window, If window is resized, calls function that changes footer and header accordingly to the screen size
let menuIsDisplayed = false; // display of the phone menu is false by default
function changeMenuDisplay() {
    if (menuIsDisplayed) {
        //if menu is currently on the screen -> hide it
        document.getElementById("phoneMenu").style["width"] = "0";
        menuIsDisplayed = false;
        document.body.style["overflow"] = "scroll";
    } else {
        //if menu is currently on the screen -> show it
        document.getElementById("phoneMenu").style["width"] = "100%";
        menuIsDisplayed = true;
        document.body.style["overflow"] = "hidden";
    }
}
document.getElementById("menuRect").addEventListener("click", changeMenuDisplay); // add event listener to the menu icon in phone header