var slideIndex = 0;
showSlides();
function showSlides() {
  var imgUrls = ['../img/bg-cable-manufacturing.jpg','../img/bg-steel-coil.jpg','../img/electric-motor.jpg'];
  var headerBgSlide = document.getElementById("headerBgSlide");
  slideIndex++;
  if (slideIndex > imgUrls.length) {slideIndex = 1}
  var url = "url(" + imgUrls[slideIndex-1] +")";
  headerBgSlide.style.backgroundImage = url;
  setTimeout(showSlides, 2500); // Change image every 2 seconds
}