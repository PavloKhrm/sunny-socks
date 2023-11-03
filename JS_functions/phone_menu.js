let currentPage;
function resetMenu() {
    if (currentPage = "backUp") document.getElementById("header").style["display"] = "none"

    if (window.innerWidth >= 1200) {
        if (currentPage != "backUp") {
            document.getElementById("header").style["display"] = "flex";
            document.getElementById("footer").style["display"] = "flex";
            document.getElementById("menuDiv").style["display"] = "none";
            document.getElementById("menuRect").style["display"] = "none";
            document.getElementById("phoneMenu").style["display"] = "none";
        }
        else {
            document.getElementById("footer").style["display"] = "flex";
            document.getElementById("menuDiv").style["display"] = "none";
            document.getElementById("menuRect").style["display"] = "none";
            document.getElementById("phoneMenu").style["display"] = "none";
        }
    }else {
        if (currentPage != "backUp") {
            document.getElementById("menuDiv").style["display"] = "flex";
            document.getElementById("menuRect").style["display"] = "block";
            document.getElementById("phoneMenu").style["display"] = "flex";
            document.getElementById("header").style["display"] = "none";
            document.getElementById("footer").style["display"] = "none";
        } else {
            document.getElementById("menuDiv").style["display"] = "flex";
            document.getElementById("menuRect").style["display"] = "block";
            document.getElementById("phoneMenu").style["display"] = "flex";
            document.getElementById("footer").style["display"] = "none";
        }
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