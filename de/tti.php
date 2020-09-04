<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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

$("#btnsubmit").live("click", function() {

    var company_name = $("#company_name").val();
    var person_name = $("#person_name").val();
    var plan = $("#plan").val();
    var phone_number = $("#phone_number").val();
    var email = $("#email").val();
    var about_company = $("#about_company").val();
    var x = document.getElementById("snackbar");
    if (company_name !== '' && person_name !== '' && email !== '') {
        if (IsEmail($("#email").val()) != true) {
            var y = document.getElementById("validationDemoInvalidEmail");
            y.className = "show";
            setTimeout(function() {
                y.className = y.className.replace("show", "");
            }, 3000);
        } else {
            $.ajax({
                type: "POST",
                url: "/ttiAction",
                data: 'company_name=' + company_name + '&person_name=' + person_name + '&plan=' + plan +
                    '&phone_number=' + phone_number + '&email=' + email + '&about_company' + about_company,
                success: function(data) {
                    x.className = "show";
                    setTimeout(function() {
                        x.className = x.className.replace("show", "");
                    }, 3000);
                    $("#company_name").val('');
                    $("#person_name").val('');
                    $("#plan").val('');
                    $("#phone_number").val('');
                    $("#email").val('');
                    $("#about_company").val('');
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    //         x.className = "show";
                    // setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);  
                }
            });
        }
    } else {
        var y = document.getElementById("validation");
        y.className = "show";
        setTimeout(function() {
            y.className = y.className.replace("show", "");
        }, 3000);
    }


});
</script>

<head>
<script src="js/navigationDE.js"></script>

 <!-- Global site tag (gtag.js) - Google Analytics -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143837547-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-143837547-1');
</script>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="site" content="tvarit.com"/>                   
<meta name="keywords" content="SPS – Smart Production Solutions, Nuremberg, NürnbergMesse, Components, Control Technology, Drive Systems, Electromechanical Components, Human-Machine-Interface Devices, Industrial Communication, Industrial Software, Interface Technology, IPCs, Motion Control, Peripheral Equipment, Sensor Technology, "/>
    <meta name="description" content="Tvarit AI is the best solution for smart manufacturing, smart machines and digital transformation"/>
    <meta name="keywords" content="machine learning, free, no credit card, big data, machine learning, ml, machine learning as a service, machine learning API, API, datasets, models, decision trees, predictive models, predictions, fast predictions, evaluation, evaluate predictive models, ensembles, random decision forest, boosted trees, gradient boosted trees, gradient boosting, boosting ensembles, isolation forest, anomaly detector, anomaly score, clustering, k-means, g-means, cluster, centroids, linear regression, regression, logistic regression, lr, topic, topic modeling, topic distributions, PCA, principal component analysis, text analysis, LDA, Latent Dirichlet Allocation, partial dependence plot, scatter plot, time series forecasting, timeseries, forecast, trends, deepnets, deep learning, deep neural networks, neural network, neural networks, automl, automatic optimization, optiml, fusion, easy, model gallery, workflows, flatline, whizzml, dsl, domain-specific language, bindings, library, amazon echo, alexa, mac, desktop"/>
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="./assets/img/kit/free/apple-icon.png">
    <link rel="icon" href="./img/favicon.png">
    <title>Technology Incubation</title>

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

</head>

  <body>
  <script type="text/javascript" src="https://secure.perk0mean.com/js/173652.js" ></script>
<noscript><img alt="" src="https://secure.perk0mean.com/173652.png" style="display:none;" /></noscript>
       <!------------------------ main menu start ---------------------->
       <?php 
     include 'header.php';
     ?>
    <!------------------------ main menu end ------------------------>

    <!------------------------ header start ------------------------->
    <header class="headerBg ttiBg">
        <div class="container">
            <a href="#downClick" class="hdrscrollArrow"><i class="icon ion-ios-arrow-dropdown"></i></a>
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="typography">
                        <div class="text-1">
                            Tvarit
                        </div>
                        <div class="text-2">
                            technology
                        </div>
                        <div class="text-2">
                            Incubation
                        </div>
                    </div>
                    <div class="typography typography-1">
                        <div class="text-3">
                            TTI
                            <div class="short-line mx-auto bg-red"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!------------------------ header end --------------------------->

    <!------------------------ Automotives start --------------------->
    <div class="section-padding" id="downClick">
        <div class="container">
            <!-- <div class="row">
          <div class="col-md-4">
            <div class="ourBox">
              <div class="title">Our Mission</div>
              <div class="short-line bg-grey"></div>

              <div class="more">
                <p class="text-p">
                  Our Mission is to build scalable and sustainable Automated Predictive Analytics (APA)                                                                                                       solutions which are invisible and assistive, allowing manufacturers to do what they love - efficient productions.  We are rooted to give one simple solution to make any work easier, smarter and upgraded.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ourBox rerBg-grd">
              <div class="title">Our Culture</div>
              <div class="short-line bg-white"></div>

              <div class="more">
                <p class="text-p">
                  How do you change the world? Bring people together. Where is the easiest big place to bring people together? In the work environment. Therefore we consistently strive to create the healthiest environment where our team can innovate, learn and grow without any push and pull. We cater to the needs of our employees with utmost affection as they belong with us. We care because you do.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ourBox">
              <div class="title">Our Team</div>
              <div class="short-line bg-grey"></div>

              <div class="more">
                <p class="text-p">
                  Creating something unique to solve someone's problem is a fascinating feeling. Industry 4.0 has always been run by intellectual, enigmatic and dedicated professionals who push their limits to break through the technical walls. Wearing the armor of skill, these knights never fail to impress. Machine learning, time series databases, CI/CD tooling, coding, are a few of their weapons. If the same fire of passion burns inside you, you're welcome onboard. Remember, we've always been waiting for you.

                </p>
              </div>
            </div>
          </div>
        </div> -->
            <div class="white-box-shadow text-center">
                <div class="col-md-12">
                    <div class="col-md-8">
                        <div class="text-big60">
                            Accelerate
                        </div>
                        <div class="plateform-text">
                            your start-up
                        </div>
                        <div class="text-big60">
                            growth
                        </div>
                        <div class="plateform-text">
                            with the power of
                        </div>
                        <div class="text-big60">
                            <span class="red"> Tvarit AI </span> platform
                        </div>

                    </div>

                </div>



            </div>
        </div>
        <!------------------------ Automotives end --------------------->
        <div class="section-padding">
        <div class="container">

            <div class="row align-items-center">
            <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="videoWrapper">
                        <iframe class="videoFrame" src="https://www.youtube.com/embed/9hRdV3rxxhA" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-2"></div>
                
            </div>
        </div>
    </div>
        <!------------------------ Automotives start --------------------->
        <div class="section-padding-both">
            <div class="container">

                <div class="title-grid centerTitle rerBg-grd">
                    What we offer ?
                </div>
                <div class="col-md-12">
                    <img class="offer-img" src="./img/TTI_offer.png">
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="featureBox border-grn">


                            <p class="text-p offer-para">Our AI powered software platform </p>

                            <div class="more">

                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="featureBox border-org">


                            <p class="text-p offer-para">Cloud services credit from AWS, GCP and Microsoft </p>

                            <div class="more">

                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="featureBox border-red">
                            <p class="text-p offer-para">Access to different platform of AWS, Mindsphere to check your
                                solution</p>

                            <div class="more">

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!------------------------ Automotives end --------------------->

        <div class="section-padding-both">
            <div class="container">

                <div class="title-grid centerTitle rerBg-grd">
                    Our Programs
                </div>
                <div class="col-md-12 programe-section-1">

                    <img class="prg-img" src="./img/prog-1.png">

                </div>
                <div class="col-md-12 programe-section-2">

                    <img class="prg-img" src="./img/prog-2.png">

                </div>


            </div>
        </div>

        <!------------------------footer start --------------------->
        <div class="section-padding-both ">
            <div class="container ">
                <div class="col-md-12 row">
                    <div class="col-md-12 tech-form">

                        <input type="button" value="Join Now" onclick="myFunction()"
                            class="btn btn-round join-btn btn-red-grd">
                    </div>
                    <div class="col-md-12 tech-form">
                        <div class="red">By joining you agree to be contacted by us for TTI program</div>

                    </div>
                    <div id="form1" class="back-form">
                        <form action="" name="myform" method="post">

                            <div class="col-md-12 tech-form selectWrapper">
                                <input required type="text" id="company_name" class="selectBox"
                                    placeholder="Name of Company *">
                            </div>
                            <div class="col-md-12 tech-form selectWrapper">
                                <input required type="text" id="person_name" class="selectBox"
                                    placeholder="Name of Person *">
                            </div>
                            <div class="col-md-12 tech-form selectWrapper" style="padding: 10px 10px 0px 24px;">
                                <select class="selectBox" id="plan">
                                    <option disabled selected value="">Select Plan</option>
                                    <option value="Basic" style="">Basic (Remote)</option>
                                    <option value="Professional">Professional (personalized)</option>
                                </select>
                            </div>
                            <div class="col-md-12 tech-form selectWrapper">
                                <input type="number" class="selectBox" id="phone_number" placeholder="Phone Number">
                            </div>
                            <div class="col-md-12 tech-form selectWrapper">
                                <input required type="email" class="selectBox" id="email" placeholder="Email ID *">
                            </div>
                            <div class="col-md-12 selectWrapper area-div" style="padding: 20px 20px 0px 30px;">
                                <textarea class="textArea" id="about_company"
                                    placeholder="About your company"></textarea>
                            </div>
                            <div>
                                <div class="col-md-12 tech-form submit-btn">
                                    <input type="button" value="Submit" id="btnsubmit"
                                        class="btn btn-round join-btn btn-red-grd">

                                </div>
                        </form>
                        <div id="snackbar">We Will Contact You Shortly</div>
                        <div class="validationDemoIfEmpty" id="validation">Fill all the mandatory fields</div>
                        <div class="validationDemoIfEmpty" id="validationDemoIfEmpty">Please enter your email id</div>
                        <div class="validationDemoIfEmpty" id="validationDemoInvalidEmail">Please enter a valid email id
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!------------------------footer end --------------------->
    <!-- script start -->
    <script>
    function myFunction() {
        var x = document.getElementById("form1");

        if (x.style.display === "none" || x.style.display === "") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    //     function setCaretPosition(ctrl, pos) {
    //   // Modern browsers
    //   if (ctrl.setSelectionRange) {
    //     ctrl.focus();
    //     ctrl.setSelectionRange(pos, pos);

    //   // IE8 and below
    //   } else if (ctrl.createTextRange) {
    //     var range = ctrl.createTextRange();
    //     range.collapse(true);
    //     range.moveEnd('character', pos);
    //     range.moveStart('character', pos);
    //     range.select();
    //   }
    // }

    // // Set the cursor position of the "#test-input" element to the end when the page loads
    // var input = document.getElementsById('pos');
    // setCaretPosition(input, input.value.length);
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/SmoothScroll.js"></script>
    <script src="js/flickity.pkgd.min.js"></script>
    <script src="js/readmore.js"></script>
    <script src="js/counting.js"></script>
    <script src="js/script.js"></script>
    <script src="js/parallax.js"></script>

</body>

</html>

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

.back-form {
    background: url('./img/linesbg.png');
    background-size: contain;
    background-repeat: no-repeat;
    background-position: top left;
}

#form1 {
    display: none;
}

.selectWrapper {
    border-radius: 50px;
    display: inline-block;
    height: 65px;
    width: 99%;
    margin-left: 5px;
    overflow: hidden;
    background: #fff;
    border: 2px solid #ed1b4a;
}

.selectBox {
    width: 100%;
    height: 45px;
    border: 0px;
    outline: none;
    background: #fff;
}

.ttiBg {
    background: url('./img/ttibg.jpg')no-repeat top center;
    background-size: 100%;
    height: 90vh;
    width: 100%;
}

.typography .text-1 {
    text-align: center;
    font-size: 60px;
    margin-top: 25px;

}

.typography .text-2 {
    font-size: 60px;
    color: black;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 60px;
    text-align: center;
    margin-top: 25px;

}

.typography {
    background: #ffffffb0;
}

.typography-1 {
    height: 30%;
}

.text-3 {
    font-size: 60px;
    color: black;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 60px;
    text-align: center;
    margin-top: 25px;

}

.short-line {
    margin-top: 0px;
}

.white-box-shadow {
    background: url('./img/AI_art.jpg');
    background-size: contain;
    background-repeat: no-repeat;
    background-position: right;
}

.plateform-text {
    font-size: 50px;
}

.text-big60 {
    text-transform: capitalize;
    font-size: 50px;
}

.title-grid {
    height: auto;
    width: 70%;
    text-align: left;
    color: #fff;
    text-transform: inherit;
    font-size: 5vh;
    font-weight: 400;
    padding: 13px;
    border-top-right-radius: 50px;
    border-bottom-right-radius: 50px;
}

.offer-img {
    width: 100%;
    height: auto;
}

.border-grn {
    border: 2px solid green;
}

.border-org {
    border: 2px solid orange;
}

.border-red {
    border: 2px solid red;
}

.offer-para {
    text-align: center;
    font-size: x-large;
}

.featureBox {
    height: 95%
}

.programe-section-1 {
    background: url('./img/linesbg.png');
    background-size: contain;
    background-repeat: no-repeat;
    background-position: top right;
}

.prg-img {
    width: 100%;
    height: auto;
}

.programe-section-2 {
    background: url('./img/linesbg.png');
    background-size: contain;
    background-repeat: no-repeat;
    background-position: top left;
}

.join-btn {
    width: 30%;
}

.tech-form {
    padding: 10px;
}

.form-fields {
    height: 65px;
    border: 2px solid #ed1b4a;
    border-radius: 50px;
    width: 100%;
}

input::placeholder {
    color: black !important;
    font-weight: 600;
    padding: 20px;
}

.area-text {
    height: 80px !important;
}
select {
    font-weight: 600;
  }
input:focus,
select:focus,
textarea:focus,
button:focus {
    outline: none;
}

.submit-btn {
    text-align: center;
}

.area-form {
    padding: 0px;
}

.area-div {
    padding: 15px;
    height: 70px;
    display: inline-block;
}

.textArea {
    border: none;
    width: 100%;
    height: 30px;
}

textarea::placeholder {
    color: black !important;
    font-weight: 600;
}

@media (max-width:500px) {
    .title-grid {
        width: 85%;
    }

    .text-big60 {
        font-size: 4vh;

    }

    .plateform-text {
        font-size: 4vh;
    }

    .typography .text-2 {
        font-size: 7vh;
    }
}
</style>