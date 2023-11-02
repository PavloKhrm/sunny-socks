function resetMenu() {
    if (window.innerWidth >= 1200) {
        document.getElementById("header").style["display"] = "flex";
        document.getElementById("footer").style["display"] = "flex";
        document.getElementById("menuRect").style["display"] = "none";
        document.getElementById("phoneMenu").style["display"] = "none";
    }else {
        document.getElementById("menuRect").style["display"] = "block";
        document.getElementById("header").style["display"] = "none";
        document.getElementById("footer").style["display"] = "none";
    }
}
resetMenu();
window.addEventListener("resize", resetMenu);
let menuIsDisplayed = false;
function changeMenuDisplay() {
    if (menuIsDisplayed) {
        document.getElementById("phoneMenu").style["width"] = "0";
        menuIsDisplayed = false;
        document.body.style["overflow"] = "scroll";
    } else {
        document.getElementById("phoneMenu").style["width"] = "100%";
        menuIsDisplayed = true;
        document.body.style["overflow"] = "hidden";
    }
}
document.getElementById("menuRect").addEventListener("click", changeMenuDisplay);