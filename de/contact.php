<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <script src="js/navigationDE.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143837547-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-143837547-1');
    </script>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="site" content="tvarit.com" />
    <meta name="keywords"
        content="SPS – Smart Production Solutions, Nuremberg, NürnbergMesse, Components, Control Technology, Drive Systems, Electromechanical Components, Human-Machine-Interface Devices, Industrial Communication, Industrial Software, Interface Technology, IPCs, Motion Control, Peripheral Equipment, Sensor Technology, " />
    <meta name="description"
        content="Tvarit AI is the best solution for smart manufacturing, smart machines and digital transformation" />
    <meta name="keywords"
        content="machine learning, free, no credit card, big data, machine learning, ml, machine learning as a service, machine learning API, API, datasets, models, decision trees, predictive models, predictions, fast predictions, evaluation, evaluate predictive models, ensembles, random decision forest, boosted trees, gradient boosted trees, gradient boosting, boosting ensembles, isolation forest, anomaly detector, anomaly score, clustering, k-means, g-means, cluster, centroids, linear regression, regression, logistic regression, lr, topic, topic modeling, topic distributions, PCA, principal component analysis, text analysis, LDA, Latent Dirichlet Allocation, partial dependence plot, scatter plot, time series forecasting, timeseries, forecast, trends, deepnets, deep learning, deep neural networks, neural network, neural networks, automl, automatic optimization, optiml, fusion, easy, model gallery, workflows, flatline, whizzml, dsl, domain-specific language, bindings, library, amazon echo, alexa, mac, desktop" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="./assets/img/kit/free/apple-icon.png">
    <link rel="icon" href="./img/favicon.png">
    <title>Contact</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/flickity.css">
    <link rel="stylesheet" href="css/animate.css">
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300i,400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link href="https://unpkg.com/ionicons@4.5.0/dist/css/ionicons.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <![endif]-->
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>


    <script type="text/javascript" language="javascript">
    $("#btn").live("click", function() {
		if(!(grecaptcha.getResponse(widgetId1)!=null && grecaptcha.getResponse(widgetId1)!=''))
		{
			   document.getElementById('saveloader').style.visibility = 'hidden';
            var y = document.getElementById("validation2");
            y.className = "show";
            setTimeout(function() {
                y.className = y.className.replace("show", "");
            }, 3000);
			return false;
		}
        if ($("#name").val() !== "" && $("#email").val() !== "" && $("#phone").val() !== "") {
            var name = $("#name").val();
            var email = $("#email").val();
            var sub = $("#sub").val();
            var phone = $("#phone").val();
            var msg = $("#msg").val();
            var x = document.getElementById("snackbar");
            document.getElementById('saveloader').style.visibility = 'visible';

            $.ajax({
                type: "POST",
                url: "./mail",
                data: "name=" + name + '&email=' + email + '&sub=' + sub + '&phone=' + phone + '&msg=' +
                    msg,
                success: function(data) {
                    x.className = "show";
                    document.getElementById('saveloader').style.visibility = 'hidden';
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
            document.getElementById('saveloader').style.visibility = 'hidden';
            var y = document.getElementById("validation");
            y.className = "show";
            setTimeout(function() {
                y.className = y.className.replace("show", "");
            }, 3000);
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
        bottom: 30px;
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
        bottom: 30px;
        font-size: 17px;
    }

    #validation2.show {
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
    .g-recaptcha {
    	transform:scale(0.77);
    	transform-origin:0 0;
    }
    @media only screen and (min-width: 990px) {
    .align-flex {
          display: flex;
          justify-content: space-between;
        }
    }
    @media only screen and (max-width: 767px) {
         .col-md-4 {
              text-align: center;
         }
        .social-icon {
        	justify-content: center;
        	padding-left: 70px;
        }	    
        .ft-links{
	        padding-left: 30px;
        }
        .text-contact{
            text-align: center;
        }
    }
    @media only screen and (max-width: 767px) {
        .hdrscrollArrow{
            bottom: auto;
        }
        .media{
            padding-left: 40px;
        }
        .media1{
            padding-left: 30px;
        }
    }
    @media only screen and (max-width: 991px) {
        .text-p{
            width: auto !important;
        }
    }
    @media only screen and (min-width: 767px) and (max-width: 991px) {
        .media{
            font-size: large !important;
        }
        .flex-imp{
            display: flex;
        }
        .media1{
            padding-left: 30px;
        }
    }
    .color{
        color: #ed1b4a;
    }
    a.color:hover {
        color: red;
    }
    </style>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
<script type="text/javascript">

      var widgetId1;
      var onloadCallback = function() {
        // Renders the HTML element with id 'example1' as a reCAPTCHA widget.
        // The id of the reCAPTCHA widget is assigned to 'widgetId1'.
        widgetId1 = grecaptcha.render('g-contact-captcha', {
          'sitekey' : '6Ldh9TAaAAAAAHWvk1HfwNWE0hSYGIzaLRdjLpUJ',
          'theme' : 'light'
        });
        
      };
    </script>

  
</head>

<body>
     
    <!------------------------ main menu start ---------------------->
    <?php
     include 'header.php';
     ?>
    <!------------------------ main menu end ------------------------>

    <!------------------------ header start ------------------------->
    <header class="headerBg contactBg" style="background-size:85%;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="typography">
                        <div class="text-1">
                            Haben <br> Sie Fragen <br>oder Anmerkungen?
                        </div>
                        <div class="text-big40" style="-webkit-text-stroke-width: 2px;-webkit-text-stroke-color: #ffffff;">
                            WIR FREUEN UNS, VON IHNEN ZU HÖREN.
                        </div>
                        <br>
                        <p class="text-p">
                            Rufen Sie uns einfach an oder füllen Sie das untenstehende Formular aus. Wir werden uns
                            innerhalb der nächsten 24 Stunden bei Ihnen melden.
                        </p>
                    </div>
                </div>
            </div>
            <a href="#downClick" class="hdrscrollArrow"><i class="icon ion-ios-arrow-dropdown"></i></a>	
        </div>
    </header>
    <!------------------------ header end --------------------------->
    <!--------------------- Buttons  ------------------->
    <div class="section-padding-both">
        <div class="container white-box-shadow">
            <div class="row align-items-lg-center">
                <div class="col-lg-12">
                    <div class="innr-sec-mainTitle centerTitle">
                        Contact person for questions and partnerships
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="lookingBox brdr-black centerTitle"
                        style="border-color:var(--primary) !important; display:block;">
                        <div class="text">
                            <h3 class="fw-900">Tobias Gundermann</h3>
                            <span class="fs-18  fw-400">Lead Product Sales</span><br><br>
                            <a href="tel:+49 171 2251178" class="color"><span class="fs-18  fw-400">+49 171 2251178</span></a><br><br>
                            <a href="mailto:tobias.gundermann@tvarit.com" class="color"><span class="fs-18  fw-400"
                                    style="text-transform:lowercase">tobias.gundermann@tvarit.com</span></a>

                        </div>

                        <div>
                            <!-- <a href="#form1" class="btn btn-round btn-red-grd">Click Here</a> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--------------------- Buttons  ------------------->
    <div class="section-padding" id="downClick">
        <div class="container">
            <div class="row justify-content-between formContent">
                <div class="col-md-7 mb-4 order-2 order-md-1">
                    <div class="text-contact media1">
                        KONTAKTFORMULAR
                    </div>
                    <br>
                    <div class="white-box-shadow">
                        <div class="formBox w-100">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name *">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" id="email" placeholder="E-Mail *">
                            </div>
                            <div class="form-row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" id="sub"
                                            placeholder="Thema">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone" id="phone"
                                            placeholder="Telefon *" onkeypress='validate(event)'>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" rows="6" name="msg" id="msg"
                                    placeholder="Nachricht"></textarea>
                            </div>
                            <br>
                            <div class="form-group align-flex">
                               <div class="g-recaptcha" id="g-contact-captcha" ></div>
                                <div><input type="button" value="Senden" id="btn" class="btn btn-round btn-red-grd">
                                &nbsp;<i class="fa fa-spinner fa-spin" style="color:#ed1b4a; visibility: hidden" id="saveloader" aria-hidden="true"></i></div>

                            </div>
                            <div id="snackbar">We Will Contact you Shortly</div>
                            <div id="validation">Fill All the Mandatory Fields</div>
							<div id="validation2">Security Captcha Missing</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 order-1 order-md-2 mb-md-0">
                    <div class="text-contact media">
                        KONTAKTINFORMATIONEN
                    </div>
                    <br>
                    <div class="ctnDetailBox">
                        <h4 class="red">Adresse</h4>
                        <p class="text-p">Ludwigstraße 31,<br>  60327 Frankfurt am Main<br> Germany</p>
                    </div>

                    <div class="ctnDetailBox">
                        <h4 class="red">Telefon</h4>
                        <a href="tel:+49 173 835 1380">
                            <p class="text-p">+49 173 835 1380</p>
                        </a>
                    </div>

                    <div class="ctnDetailBox">
                        <h4 class="red">E-mail</h4>
                        <a href="mailto:info@tvarit.com">
                            <p class="text-p">info@tvarit.com</p>
                        </a>
                    </div>

                    <div class="ctnDetailBox">
                        <div class="ft-social">
                            <h3>Haftungsausschluss</h3>
                            <div class="ft-links flex-imp">
                                <a href="impressum">Impressum</a>
                                <a href="datenschutz">Datenschutz</a>
                            </div>
                        </div>
                    </div>
                    <div class="ft-social">
                        <div class="social-icon">
                            <a href="https://www.facebook.com/tvaritAI" target="blank" aria-label="Facebook"><i
                                    class="fab fa-facebook-f"></i></a>
                            <!--<a href="https://www.xing.com/xbp/pages/tvarit-gmbh" target="blank"><i
                                    class="fab fa-xing"></i></a>-->
                            <a href="https://twitter.com/TvaritAI" target="blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/company/tvarit/" target="blank" aria-label="LinkedIn"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.youtube.com/playlist?list=PLqOwcayv0lYbbyKLjn6-A0w3Es4CKZpGr" aria-label="YouTube"
                                target="blank"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>

                    <div class="ctnDetailBox">
                        <p class="text-p">
                            &copy;2019 Tvarit GmbH
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- script start -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/SmoothScroll.js"></script>
    <script src="js/flickity.pkgd.min.js"></script>
    <script src="js/readmore.js"></script>
    <script src="js/script.js"></script>
    <script src="js/parallax.js"></script>
    <script>
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
        if (!regex.test(key)) {
            theEvent.returnValue = false;
            if (theEvent.preventDefault) theEvent.preventDefault();
        }
    }
    </script>

</body>

</html>
