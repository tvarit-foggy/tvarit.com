 <html>

 <head>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
     <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
     <meta name="description"
        content="Tvarit AI is the best solution for smart manufacturing, smart machines and digital transformation" />
     <script type="text/javascript" language="javascript">
     function IsEmail(email) {
         var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
         if (!regex.test(email)) {
             return false;
         } else {
             return true;
         }
     }

     $("#btn").live("click", function() {
    if(!(grecaptcha.getResponse(widgetId1)!=null && grecaptcha.getResponse(widgetId1)!=''))
		{
			   document.getElementById('saveLoading').style.visibility = 'hidden';
            var y = document.getElementById("validation2");
            y.className = "show";
            setTimeout(function() {
                y.className = y.className.replace("show", "");
            }, 3000);
			return false;
		}
         if ($("#name").val() !== "" && $("#email").val() !== "" && $("#phone").val() !== "" && IsEmail($(
                 "#email").val()) == true) {
             var name = $("#name").val();
             var email = $("#email").val();
             var sub = $("#sub").val();
             var phone = $("#phone").val();
             var msg = $("#msg").val();
             var x = document.getElementById("snackbar");
             document.getElementById('saveLoading').style.visibility = 'visible';

             $.ajax({
                 type: "POST",
                 url: "./mail",
                 data: "name=" + name + '&email=' + email + '&sub=' + sub + '&phone=' + phone +
                     '&msg=' + msg,
                 success: function(data) {
                     x.className = "show";
                     setTimeout(function() {
                         x.className = x.className.replace("show", "");
                     }, 3000);
                     document.getElementById('saveLoading').style.visibility = 'hidden';
                     $('#name').val('');
                     $('#email').val('');
                     $('#sub').val('');
                     $('#phone').val('');
                     $('#msg').val('');
                 }
             });
         } else {
             if ($("#email").val() !== "" && IsEmail($("#email").val()) != true) {
                 var y = document.getElementById("validationDemoInvalidEmail");
                 y.className = "show";
                 setTimeout(function() {
                     y.className = y.className.replace("show", "");
                 }, 3000);
             } else {
                 var y = document.getElementById("validation");
                 y.className = "show";
                 setTimeout(function() {
                     y.className = y.className.replace("show", "");
                 }, 3000);
             }
             document.getElementById('saveLoading').style.visibility = 'hidden';
         }

     });
     </script>
     <script type="text/javascript" language="javascript">
     $("#btnDemo").live("click", function() {
         if ($("#emailDemo").val() !== "" && IsEmail($("#emailDemo").val()) == true) {
             var email = $("#emailDemo").val();
             var x = document.getElementById("snackbar");
             $.ajax({
                 type: "POST",
                 url: "/sendDemoMail",
                 data: '&email=' + email,
                 success: function(data) {
                     x.className = "show";
                     setTimeout(function() {
                         x.className = x.className.replace("show", "");
                     }, 3000);
                     $('#emailDemo').val('');
                 }
             });
         } else {
             if ($("#emailDemo").val() == "") {
                 var y = document.getElementById("validationDemoIfEmpty");
                 y.className = "show";
                 setTimeout(function() {
                     y.className = y.className.replace("show", "");
                 }, 3000);
             } else {
                 var y = document.getElementById("validationDemoInvalidEmail");
                 y.className = "show";
                 setTimeout(function() {
                     y.className = y.className.replace("show", "");
                 }, 3000);
             }
         }
     });
     </script>
     <style>
     #snackbar {
         visibility: hidden;
         min-width: 250px;
         margin-left: -125px;
         background-color: #333;
         color: #fff;
         text-align: center;
         border-radius: 2px;
         padding: 16px;
         position: fixed;
         z-index: 1;
         left: 50%;
         bottom: 70px;
         font-size: 17px;
     }

     #snackbar.show {
         visibility: visible;
         -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
         animation: fadein 0.5s, fadeout 0.5s 2.5s;
     }

     #validation {
         visibility: hidden;
         min-width: 250px;
         margin-left: -125px;
         background-color: #333;
         color: #fff;
         text-align: center;
         border-radius: 2px;
         padding: 16px;
         position: fixed;
         z-index: 1;
         left: 50%;
         bottom: 70px;
         font-size: 17px;
     }

     #validation.show {
         visibility: visible;
         -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
         animation: fadein 0.5s, fadeout 0.5s 2.5s;
     }
	  #validation2 {
         visibility: hidden;
         min-width: 250px;
         margin-left: -125px;
         background-color: #333;
         color: #fff;
         text-align: center;
         border-radius: 2px;
         padding: 16px;
         position: fixed;
         z-index: 1;
         left: 50%;
         bottom: 70px;
         font-size: 17px;
     }

     #validation2.show {
         visibility: visible;
         -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
         animation: fadein 0.5s, fadeout 0.5s 2.5s;
     }


	 #validation2 {
         visibility: hidden;
         min-width: 250px;
         margin-left: -125px;
         background-color: #333;
         color: #fff;
         text-align: center;
         border-radius: 2px;
         padding: 16px;
         position: fixed;
         z-index: 1;
         left: 50%;
         bottom: 70px;
         font-size: 17px;
     }

     #validation2.show {
         visibility: visible;
         -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
         animation: fadein 0.5s, fadeout 0.5s 2.5s;
     }

     #validationDemoIfEmpty {
         visibility: hidden;
         min-width: 250px;
         margin-left: -125px;
         background-color: #333;
         color: #fff;
         text-align: center;
         border-radius: 2px;
         padding: 16px;
         position: fixed;
         z-index: 1;
         left: 50%;
         bottom: 70px;
         font-size: 17px;
     }

     #validationDemoIfEmpty.show {
         visibility: visible;
         -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
         animation: fadein 0.5s, fadeout 0.5s 2.5s;

     }

     #validationDemoInvalidEmail {
         visibility: hidden;
         min-width: 250px;
         margin-left: -125px;
         background-color: #333;
         color: #fff;
         text-align: center;
         border-radius: 2px;
         padding: 16px;
         position: fixed;
         z-index: 1;
         left: 50%;
         bottom: 70px;
         font-size: 17px;
     }

     #validationDemoInvalidEmail.show {
         visibility: visible;
         -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
         animation: fadein 0.5s, fadeout 0.5s 2.5s;

     }


     @-webkit-keyframes fadein {
         from {
             bottom: 0;
             opacity: 0;
         }

         to {
             bottom: 30px;
             opacity: 1;
         }
     }

     @keyframes fadein {
         from {
             bottom: 0;
             opacity: 0;
         }

         to {
             bottom: 30px;
             opacity: 1;
         }
     }

     @-webkit-keyframes fadeout {
         from {
             bottom: 30px;
             opacity: 1;
         }

         to {
             bottom: 0;
             opacity: 0;
         }
     }

     @keyframes fadeout {
         from {
             bottom: 30px;
             opacity: 1;
         }

         to {
             bottom: 0;
             opacity: 0;
         }
     }

     @media only screen and (max-width: 990px) {
        .g-recaptcha {
            transform:scale(0.77);
            transform-origin:0 0;
        }
    }   
     </style>
 </head>

 <body>
     <script type="text/javascript" src="https://secure.perk0mean.com/js/173652.js"></script>
     <noscript><img alt="" src="https://secure.perk0mean.com/173652.png" style="display:none;" /></noscript>
     <!------------------------try demo start --------------------->

     <footer class="section-padding-both" id="contact_us">
         <div class="container">
             <div class="row align-items-md-center">
                 <div class="col-lg-4 order-lg-1 order-2">
                     <div class="ft-about">
                         <h3>We are working for you!</h3>
                         <div class="ftaboutmore">
                             <p class="text-p">
                             The key for development is the ability to change. Industry 4.0 is more than just a flashy catchphrase. A confluence of trends and technologies promises to reshape the way things are made. It means machines using self-optimization, self-configuration, and even artificial intelligence to complete complex tasks. For most, however, these concepts feel quite distant from today’s reality where many plants have yet to fully adopt the automation technologies of Industry 3.0.
                             </p>
                             <p class="text-p">
                                 Therefore, we at Tvarit AI relentlessly work to make your business and life simpler and
                                 upgraded. If curiosity is consuming you, we welcome you to have a look. Welcome Tvarit
                                 AI, Welcome Infinite Possibilities!
                             </p>
                         </div>
                     </div>

                     <br>

                     <div class="ft-social">
                         <div class="social-icon">
                             <a href="https://www.facebook.com/tvaritAI" target="blank"><i
                                     class="fab fa-facebook-f"></i></a>
                             <!--<a href="https://www.xing.com/xbp/pages/tvarit-gmbh" target="blank"><i
                                     class="fab fa-xing"></i></a>-->
                             <a href="https://twitter.com/TvaritAI" target="blank"><i class="fab fa-twitter"></i></a>
                             <a href="https://www.linkedin.com/company/tvarit/" target="blank"><i
                                     class="fab fa-linkedin-in"></i></a>
                             <a href="https://www.youtube.com/channel/UCJfogjg3LqSmXMpy6dIOsEw"
                                 target="blank"><i class="fab fa-youtube"></i></a>
                         </div>
                     </div>

                     <br>

                     <div class="ft-social">
                         <h3>Disclaimer</h3>
                         <div class="ft-links">
                             <a href="impressum">Imprint</a>
                             <a href="privacy-and-policy">Privacy Policy</a>
                         </div>
                     </div>

                     <div class="copyright text-normal pt-5">
                         &copy;2019 Tvarit GmbH
                     </div>

                 </div>
                 <div class="col-lg-8 order-lg-2 order-1 mb-lg-0 mb-5">
                     <form method="post">
                         <div class="contactBox">
                             <div class="text-contact" id="contact_us">
                                 Contact Us
                             </div>
                             <div class="formBox">
                                 <div class="form-group">
                                     <input type="text" class="form-control" name="name" id="name" placeholder="Name *">
                                 </div>

                                 <div class="form-group">
                                     <input type="email" class="form-control" name="email" id="email"
                                         placeholder="Email *">
                                 </div>
                                 <div class="form-row">
                                     <div class="col-md">
                                         <div class="form-group">
                                             <input type="text" class="form-control" name="subject" id="sub"
                                                 placeholder="Subject">
                                         </div>
                                     </div>
                                     <div class="col-md">
                                         <div class="form-group">
                                             <input type="text" class="form-control" name="phone" id="phone"
                                                 placeholder="Phone *" onkeypress='validate(event)'>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="form-group">
                                     <textarea class="form-control" rows="6" name="msg" id="msg"
                                         placeholder="Message"></textarea>
                                 </div>
                                 <br>
                                 <div class="form-group">
                                   <div class="g-recaptcha" id="g-contact-captcha" ></div>
								                    <br />
                                     <input type="button" value="Submit" id="btn" class="btn btn-round btn-red-grd">
                                      &nbsp;<i class="fa fa-spinner fa-spin" style="color:#ed1b4a; visibility: hidden" id="saveLoading" aria-hidden="true"></i>
                                 </div>
                                 <div id="snackbar">We Will Contact You Shortly</div>

                                 <div class="validationDemoIfEmpty" id="validation">Fill all the mandatory fields</div>
                                  <div class="validationDemoIfEmpty" id="validation2">Security Captcha Missing</div>
                                 <div class="validationDemoIfEmpty" id="validationDemoIfEmpty">Please enter your email
                                     id</div>
                                 <div class="validationDemoIfEmpty" id="validationDemoInvalidEmail">Please enter a valid
                                     email id</div>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </footer>
     <script>
	//paste this code under head tag or in a seperate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".fadeMe").fadeOut("slow");;
	});

    function validate(evt) {
        var theEvent = evt || window.event;

        // Handle paste
        if (theEvent.type === 'paste') {
            key = event.clipboardData.getData('text/plain');
        } else {
        // Handle key press
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode(key);
        }
        var regex = /[0-9]/;
        if( !regex.test(key) ) {
            theEvent.returnValue = false;
            if(theEvent.preventDefault) theEvent.preventDefault();
        }
     }
     </script>
     <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#edeff5",
      "text": "#838391"
    },
    "button": {
      "background": "#e92247"
    }
  },
  "theme": "classic",
  "content": {
    "message": "This Website uses cookies to ensure you get the best experience on our website.",
    "dismiss": "OK!",
    "href": "https://tvarit.com/datenschutz"
  }
});
/*$(document).ready(function() {
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
});*/
</script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
<script type="text/javascript">

      var widgetId1;
      var onloadCallback = function() {
        widgetId1 = grecaptcha.render('g-contact-captcha', {
          'sitekey' : '6Ldh9TAaAAAAAHWvk1HfwNWE0hSYGIzaLRdjLpUJ',
          'theme' : 'light'
        });

      };
    </script>

 </body>

 </html>
