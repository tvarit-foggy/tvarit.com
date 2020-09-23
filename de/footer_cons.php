 <html>

 <head>
     <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>

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
         if ($("#name").val() !== "" && $("#email").val() !== "" && $("#phone").val() !== "" && IsEmail($(
                 "#email").val()) == true) {
             var name = $("#name").val();
             var email = $("#email").val();
             var sub = $("#sub").val();
             var phone = $("#phone").val();
             var msg = $("#msg").val();
             var x = document.getElementById("snackbar");
             $.ajax({
                 type: "POST",
                 url: "/mail",
                 data: "name=" + name + '&email=' + email + '&sub=' + sub + '&phone=' + phone +
                     '&msg=' + msg,
                 success: function(data) {
                     x.className = "show";
                     setTimeout(function() {
                         x.className = x.className.replace("show", "");
                     }, 3000);
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
         bottom: 30px;
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
         bottom: 30px;
         font-size: 17px;
     }

     #validation.show {
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
         bottom: 30px;
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
         bottom: 30px;
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
     </style>
 </head>

 <body>
     <script type="text/javascript" src="https://secure.perk0mean.com/js/173652.js"></script>
     <noscript><img alt="" src="https://secure.perk0mean.com/173652.png" style="display:none;" /></noscript>
     <!------------------------try demo start --------------------->
     <div class="tryDemobg">
         <div class="container text-center">
             <div class="centerTitle text-white text-big60">
             free teaser for one day
             </div>
             <br>
         </div>
     </div>
     <!------------------------try demo end --------------------->
     <footer>


         <div class="container">

             <div class="row" style="flex-wrap: wrap-reverse;">
                 <div class="col-md-4 section-padding">
                     <div class="ft-about">
                         <h3>We are working for you!</h3>
                         <div class="ftaboutmore">
                             <p class="text-p">
                                 The measure of growth is the ability to change. Industry 4.0 is more than just a flashy
                                 catchphrase. A confluence of trends and technologies promises to reshape the way things
                                 are made. It means machines using self-optimization, self-configuration, and even
                                 artificial intelligence to complete complex tasks. For most, however, these concepts
                                 feel quite distant from today’s reality where many plants have yet to fully adopt the
                                 automation technologies of Industry 3.0.
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
                             <a href="https://www.xing.com/xbp/pages/tvarit-gmbh" target="blank"><i
                                     class="fab fa-xing"></i></a>
                             <a href="https://twitter.com/TvaritAI" target="blank"><i class="fab fa-twitter"></i></a>
                             <a href="https://www.linkedin.com/company/tvarit/" target="blank"><i
                                     class="fab fa-linkedin-in"></i></a>
                             <a href="https://www.youtube.com/playlist?list=PLqOwcayv0lYbbyKLjn6-A0w3Es4CKZpGr"
                                 target="blank"><i class="fab fa-youtube"></i></a>
                         </div>
                     </div>

                     <br>

                     <div class="ft-social">
                         <h3>Disclaimer</h3>
                         <div class="ft-links">
                             <a href="impressum">Impressum</a>
                             <a href="datenschutz">Datenschutz</a>
                         </div>
                     </div>

                     <div class="copyright text-normal pt-5">
                         &copy;2019 Tvarit GmbH
                     </div>

                 </div>
                 <div class="col-md-8">
                     <form method="post">
                         <div class="contactBox">
                             <div class="text-contact">
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
                                             <input type="number" class="form-control" name="phone" id="phone"
                                                 placeholder="Phone *">
                                         </div>
                                     </div>
                                 </div>

                                 <div class="form-group">
                                     <textarea class="form-control" rows="3" name="msg" id="msg"
                                         placeholder="Message"></textarea>
                                 </div>
                                 <br>
                                 <div class="form-group">
                                     <input type="button" value="Submit" id="btn" class="btn btn-round btn-red-grd">

                                     <!-- <button type="button"   name="submit" class="btn btn-round btn-red-grd">send </button> -->
                                 </div>
                                 <div id="snackbar">We Will Contact You Shortly</div>

                                 <div class="validationDemoIfEmpty" id="validation">Fill all the mandatory fields</div>
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


 </body>

 </html>