var slideIndex = 0;
showSlides();
function showSlides() {
  var imgUrls = ['../tvarit.com/img/bg-cable-manufacturing.jpg','../tvarit.com/img/bg-steel-coil.jpg','../tvarit.com/img/electric-motor.jpg'];
  var headerBgSlide = document.getElementById("headerBgSlide");
  slideIndex++;
  if (slideIndex > imgUrls.length) {slideIndex = 1}
  var url = "url(" + imgUrls[slideIndex-1] +")";
  headerBgSlide.style.backgroundImage = url;
  setTimeout(showSlides, 2500); // Change image every 2 seconds
}