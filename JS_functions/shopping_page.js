let currentColor = "red";
let currentStyle = "uni";
const changingImage = document.getElementById("mainImg");
function changeImage() {
    changingImage.style["opacity"] = 0;
    
    setTimeout(() => {
        changingImage.src = "../src/sunny_socks_photos/packaging/png/catalogus_sokken_" + currentStyle+ "_" + currentColor + ".png" ;
        changingImage.style["opacity"] = 1;//"Delayed for 0.3 second.";
    }, "300");

    
}

function changeColor(selectedColor) {
    currentColor = selectedColor.toLowerCase();
    changeImage();
}
console.log("changes color: " + currentColor);
function changeStyle(selectedStyle) {
    currentStyle = selectedStyle;
    changeImage();
}