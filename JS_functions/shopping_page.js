let currentColor = "red";
let currentStyle = "uni";

const changingImage = document.getElementById("mainImg");
function changeImage() {
    changingImage.src = "../src/sunny_socks_photos/packaging/png/catalogus_sokken_" + currentStyle+ "_" + currentColor + ".png" ;
}
function changeColor(selectedColor) {
    currentColor = selectedColor.toLowerCase();
    changeImage();
}
function changeStyle(selectedStyle) {
    currentStyle = selectedStyle;
    changeImage();
}
