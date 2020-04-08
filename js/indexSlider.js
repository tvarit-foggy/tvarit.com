var slideIndex = 0;
showSlides();
function showSlides() {
  var imgUrls = ['../img/bg-cable-manufacturing.jpg','../img/bg-die-casting-machineg.jpg','../img/bg-steel-coil.jpg'];
  var headerBgSlide = document.getElementById("headerBgSlide");
  slideIndex++;
  if (slideIndex > imgUrls.length) {slideIndex = 1}
  var url = "url(" + imgUrls[slideIndex-1] +")";
  headerBgSlide.style.backgroundImage = url;
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}