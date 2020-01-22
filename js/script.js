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

        var containerEl = document.querySelector('.filter-container');
        var checkboxGroup = document.querySelector('.checkbox-filter');
        var checkboxes = checkboxGroup.querySelectorAll('input[type="checkbox"]');

        var mixer = mixitup(containerEl);

        checkboxGroup.addEventListener('change', function() {
            var selectors = [];

            // Iterate through all checkboxes, pushing the
            // values of those that are checked into an array

            for (var i = 0; i < checkboxes.length; i++) {
                var checkbox = checkboxes[i];

                if (checkbox.checked) selectors.push(checkbox.value);
            }

            // If there are values in the array, join it into a string
            // using your desired logic, and send to the mixer's .filter()
            // method, otherwise filter by 'all'

            var selectorString = selectors.length > 0 ?
                selectors.join(',') : // or '.' for AND logic
                'all';

            mixer.filter(selectorString);
        });

     
$('[data-fancybox]').fancybox({
        youtube : {
          controls : 0,
          showinfo : 0
        },
        vimeo : {
          color : 'f00'
        }
      });

});

var tvarit = new Typed('#typed-tvarit', {
    stringsElement: '#tvarit-strings',
     typeSpeed: 20,
    backSpeed: 0,
    startDelay: 400,
    fadeOut: true,
    showCursor: false,
    loop: false
  });

  var industrial = new Typed('#typed-industrial', {
    stringsElement: '#industrial-strings',
    typeSpeed: 40,
    backSpeed: 0,
    startDelay: 1000,
    fadeOut: true,
    showCursor: false,
    loop: false
  });
  var prgf = new Typed('#typed-prgf', {
    stringsElement: '#prgf-strings',
    typeSpeed: 40,
    backSpeed: 0,
    startDelay: 1000,
    fadeOut: true,
    showCursor: false,
    loop: false
  });
  
  var germany = new Typed('#typed-germany', {
    stringsElement: '#germany-strings',
    typeSpeed: 40,
    backSpeed: 40,
    startDelay: 2000,
    fadeOut: true,
    showCursor: false,
    loop: false,
    backDelay:500,
    smartBackspace: true,
  });

  var germanyPrgf = new Typed('#typed-prgf2r', {
    stringsElement: '#prgf2r-strings',
    typeSpeed: 40,
    backSpeed: 40,
    startDelay: 2000,
    fadeOut: true,
    showCursor: false,
    loop: true,
    backDelay:500,
    smartBackspace: true,
  });


var typed1 = new Typed('#typed1', {
    stringsElement: '#typed-strings1',
     typeSpeed: 40,
    backSpeed: 0,
    startDelay: 400,
    fadeOut: true,
    showCursor: false,
    loop: false
  });

var typed2 = new Typed('#typed2', {
  stringsElement: '#typed-strings2',
  typeSpeed: 60,
  backSpeed: 0,
  startDelay: 1000,
  fadeOut: true,
  showCursor: false,
  loop: false
});

var typed2 = new Typed('#typed3', {
  stringsElement: '#typed-strings3',
  typeSpeed: 40,
  backSpeed: 40,
  startDelay: 2000,
  fadeOut: true,
  showCursor: false,
  loop: true,
  backDelay:500
});



