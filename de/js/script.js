var $= jQuery.noConflict();

$(function() {

$('.toggle').click(function(e) {
    e.preventDefault();
  
    var $this = $(this);
  
    if ($this.next().hasClass('show')) {
        $this.next().removeClass('show');
        $this.next().slideUp(350);
    } else {
        $this.parent().parent().find('li .inner').removeClass('show');
        $this.parent().parent().find('li .inner').slideUp(350);
        $this.next().toggleClass('show');
        $this.next().slideToggle(350);
    }
});
  
$('a[href^="#"]').on('click',function (e) {
  e.preventDefault();

  var target = this.hash;
  $target = $(target);

  $('html, body').stop().animate({
      'scrollTop':  $target.offset().top
  }, 900, 'swing', function () {
      window.location.hash = target;
  });
});
    
$('.more').readmore({
  speed: 200,
  collapsedHeight: 80,
  moreLink: '<a href="#" class="readmorebtn">Read more...</a>',
  lessLink: '<a href="#" class="readmorebtn">Read less</a>'
});

$('.whyapamore,.ftaboutmore').readmore({
  speed: 200,
  collapsedHeight: 60,
  moreLink: '<a href="#" class="readmorebtn">Read more...</a>',
  lessLink: '<a href="#" class="readmorebtn">Read less</a>'
});

$('.imgW-more').readmore({
  speed: 200,
  collapsedHeight: 110,
  moreLink: '<a href="#" class="readmorebtn">Read more...</a>',
  lessLink: '<a href="#" class="readmorebtn">Read less</a>'
});

$( ".ul-sub-menu li" ).hover(function() {
    $( ".ul-sub-menu li" ).not($( this )).removeClass( "active" );
    $( this ).toggleClass( "active" );
});

$( ".main-menu .navbar-nav li.nav-item" ).click(function() {
    $( ".main-menu .navbar-nav li.nav-item" ).not($( this )).removeClass( "active" );
    $( this ).toggleClass( "active" );
});

$( ".main-menu .navbar-nav li.nav-item" ).hover(function() {
    $( ".main-menu .navbar-nav li.nav-item" ).not($( this )).removeClass( "show" );
    $( this ).toggleClass( "show" );
});

$( ".main-menu .menu-togglebar" ).click(function() {
    $( "#navbarText" ).toggleClass( "open" );
});

$( ".main-menu .menuclose" ).click(function() {
    $( "#navbarText" ).toggleClass( "open" );
});

$( ".filterBtn" ).click(function() {
    $( ".filterDiv" ).toggleClass( "open" );
});

$( ".closeFilter" ).click(function() {
  $( ".filterDiv" ).toggleClass( "open" );
});

$('.automtv-carousel').flickity({
    // options
    cellAlign: 'center',
    wrapAround: true,
    contain: true,
    autoPlay: true,
    autoPlay: 3000
});

$('.client-carousel').flickity({
    // options
    cellAlign: 'center',
    wrapAround: true,
    contain: true,
    autoPlay: true,
    autoPlay: 2000
});

$( ".closeCookie" ).click(function() {
  $( ".cookieFooter" ).hide();
});

$(".up-event,.past-event").owlCarousel({
  items:3,
  nav:false,
  loop:true,
  autoplay:true,
  margin:4,
  lazyLoad:true,
  autoplayHoverPause:false,
  autoplaySpeed:500,
  dots:false,
  responsiveClass:true,
  responsive:{
      0:{
          items:1
      },
      280:{
          items:1
      },
      768:{
          items:2
      },
      992:{
          items:3
      },
      1400:{
          items:5
      },
      1800:{
          items:6
      }
  }
});
  
var nav = $('.main-menu');
var logoIcn = $('.main-menu .navbar-brand');

$(window).scroll(function() {
  if ($(this).scrollTop() > 50) {
    logoIcn.removeClass("logo-none");
    $(".logo-full").attr("src","images/Logo-white.png");
  } else {
    logoIcn.addClass("logo-none");
    $(".logo-full").attr("src","images/Logo.png");
  }
});

// In this example, we must bind a 'change' event handler to
// our checkboxes, then interact with the mixer via
// its .filter() API methods.
     
// $('[data-fancybox]').fancybox({
//         youtube : {
//           controls : 0,
//           showinfo : 0
//         },
//         vimeo : {
//           color : 'f00'
//         }
//       });
});