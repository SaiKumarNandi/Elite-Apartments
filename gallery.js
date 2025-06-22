var mainimage = document.querySelector('.sliderimage');
var images = ["images/gallery1.jpg", "images/gallery2.jpg", "images/gallery3.jpg", "images/gallery4.jpg", "images/gallery5.jpg", "images/gallery6.jpg", "images/gallery7.jpg", "images/gallery8.jpg", "images/gallery9.jpg", "images/gallery10.jpg", "images/gallery11.jpg", "images/gallery12.jpg", "images/gallery13.jpg", "images/gallery14.jpg", "images/gallery15.jpg"];
var num = 0;

function start() {
    document.getElementById("forward").addEventListener("click", next, false);
    document.getElementById("backward").addEventListener("click", previous, false);
}//end start()

//code for forward button click
function next() {
    num++;
    if (num >= images.length) {
        num = 0;
        mainimage.src = images[num];
    } else {
        mainimage.src = images[num];
    }
}//end next()

//code for previous button click
function previous() {
    num--;
    if (num < 0) {
        num = images.length - 1;
        mainimage.src = images[num];
    } else {
        mainimage.src = images[num];
    }
}//end previous()

//window load event
window.addEventListener("load", start, false);