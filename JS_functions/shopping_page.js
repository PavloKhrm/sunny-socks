//IMPORTANT NOTE: this script is not supposed to work as all of its functionallity is overlapped by PHP functionallity, but it stays here because nothing works without it

// default color and style and create a global container for storing the these properties
let currentColor = "red"; 
let currentStyle = "uni";

const changingImage = document.getElementById("mainImg"); // get the image to change
function changeImage() {
    changingImage.src = "../src/sunny_socks_photos/packaging/png/catalogus_sokken_" + currentStyle+ "_" + currentColor + ".png" ; // change the image accordingly to user's input
}

function changeColor(selectedColor) {
    selectedColor = selectedColor.charAt(0).toUpperCase() + selectedColor.slice(1); // character on 0 position -> upper case. Example: pink -> Pink
    currentColor = selectedColor; // saves local user's input to storage var
    changeImage();
}
function changeStyle(selectedStyle) {
    currentStyle = selectedStyle; // saves local user's input to storage var
    changeImage();
}

// IMPORTANT NOTE: this partof code is functional

// changes image src on hover
changingImage.addEventListener("mouseover", () => {
    changingImage.src =  "../src/sunny_socks_photos/catalogus/Sunny_socks_" + styleItem + "_" + colorItem + ".jpg";
});
changingImage.addEventListener("mouseleave", () => {
    changingImage.src = "../src/sunny_socks_photos/packaging/png/catalogus_sokken_" + styleItem + "_" +colorItem + ".png"
});