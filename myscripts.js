/* slideshow js */

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

/* products slider js */

var slider_img = document.querySelector('.slider-img');
var images =['product-1.jpg','product-2.jpg','product-3.jpg','product-4.jpg','product-5.jpg'];
var i=0; //current image index

function perv(){
    if(i <=0) i = images.length;
    i--;
    return setImg();

}



function next(){

    if(i <=0) i = images.length;
    i++;
    return setImg();
    
}




function setImg(){
    return slider_img.setAttribute('src', 'images/' + images[i]);
}






