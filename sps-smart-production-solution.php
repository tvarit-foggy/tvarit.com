<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
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
    <meta name="description"
        content="Tvarit AI is the best solution for smart manufacturing, smart machines and digital transformation" />
    <meta name="keywords"
        content="machine learning, free, no credit card, big data, machine learning, ml, machine learning as a service, machine learning API, API, datasets, models, decision trees, predictive models, predictions, fast predictions, evaluation, evaluate predictive models, ensembles, random decision forest, boosted trees, gradient boosted trees, gradient boosting, boosting ensembles, isolation forest, anomaly detector, anomaly score, clustering, k-means, g-means, cluster, centroids, linear regression, regression, logistic regression, lr, topic, topic modeling, topic distributions, PCA, principal component analysis, text analysis, LDA, Latent Dirichlet Allocation, partial dependence plot, scatter plot, time series forecasting, timeseries, forecast, trends, deepnets, deep learning, deep neural networks, neural network, neural networks, automl, automatic optimization, optiml, fusion, easy, model gallery, workflows, flatline, whizzml, dsl, domain-specific language, bindings, library, amazon echo, alexa, mac, desktop" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="./assets/img/kit/free/apple-icon.png">
    <link rel="icon" href="./img/favicon.png">
    <title>SPS 2019</title>

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
    var options = [{
            "text": "10 AM - 11 AM",
            "value": "10",
            "selected": true
        },
        {
            "text": "11 AM - 12 PM",
            "value": "11",
        },
        {
            "text": "12 PM - 01 PM",
            "value": "12"
        },
        {
            "text": "01 PM - 02 PM",
            "value": "1"
        },
        {
            "text": "02 PM - 03 PM",
            "value": "2",
        },
        {
            "text": "03 PM - 04 PM",
            "value": "3"
        },
        {
            "text": "04 PM - 05 PM",
            "value": "4"
        },
        {
            "text": "05 PM - 06 PM",
            "value": "5",
        },
    ];
    var isbookappointment = false;
    $(document).ready(function() {
        $(".appointment-div").hide();
        $(document).on("wheel", "input[type=number]", function(e) {
            $(this).blur();
        });
        changeDate();
    });

    function changeAppointment() {
        if ($('#appointment').is(":checked")) {
            $(".appointment-div").show();
            isbookappointment = true;
        } else {
            $(".appointment-div").hide();
            isbookappointment = false;
        }
    }

    function changeDate() {
        var date = $("#date-time-picker").val();
        if (date) {
            $.ajax({
                type: "POST",
                url: "spsSlots",
                data: "date=" + date,
                success: function(data) {
                    changeOption(data);

                }
            });
        }
    }
    function changeCode() {
        var code = $("#countryCode").val();
        var cntry = $("#countryCode").find(':selected').attr('dataCountryCode');
        var select = document.getElementById("country");

        for (var i = 0; i < select.length; i++){
                var option = select.options[i];
                // now have option.text, option.value
                if(cntry == option.value) {
                    option.selected = true;
                }
            }
 

    }
   
    function changeOption(data) {
        time_slot.options.length = 0;
        for (var i = 0, l = options.length; i < l; i++) {
            var option = options[i];
            time_slot.options.add(new Option(option.text, option.value, option.selected));
        }
        if (data !== 'null' && data !== 'ERROR: Could not able to execute . ') {
            var arr = JSON.parse(data);
            for (var i = 0, l = arr.length; i < l; i++) {
                var option = arr[i];
                if (option.count == 3) {
                    options = options.filter(el => el.value !== option.time_slot);
                }
            }
            time_slot.options.length = 0;
            for (var i = 0, l = options.length; i < l; i++) {
                var option = options[i];
                time_slot.options.add(new Option(option.text, option.value, option.selected));
            }
        }
    }

    function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!regex.test(email)) {
            return false;
        } else {
            return true;
        }
    }
    $("#btn").live("click", function() {

        if ($("#name").val() !== "" && $("#email").val() !== "" && $("#phone").val() !== "" &&
            $("#company").val() !== "" && $("#city").val() !== "" && $("#country").val() !== "" &&
            $("#jobrole").val() !== "" && $("#industry").val() !== "") {
            var name = $("#name").val();
            var email = $("#email").val();
            var phone = $("#countryCode").val() + $("#phone").val();
            var company = $("#company").val();
            var city = $("#city").val();
            var country = $("#country").val();
            var jobrole = $("#jobrole").val();
            var industry = $("#industry").val();
            var address = $("#address").val();
            var date = $("#date-time-picker").val();
            var slot = $("#time_slot").val();
            if(isbookappointment == false) {
                date = '0000-00-00';
                slot = '00';
            }
            var x = document.getElementById("snackbar");
            var ex = document.getElementById("email_exist");
            if (IsEmail($("#email").val()) != true) {
                var y = document.getElementById("validationDemoInvalidEmail");
                y.className = "show";
                setTimeout(function() {
                    y.className = y.className.replace("show", "");
                }, 3000);
            } else {
                $.ajax({
                    type: "POST",
                    url: "spsAction",
                    data: "name=" + name + '&email=' + email + '&phone=' + phone + '&company=' +
                        company + '&city=' + city + '&country=' + country + '&jobrole=' + jobrole +
                        '&industry=' + industry + '&address=' + address + '&date=' + date + '&slot=' +
                        slot,
                    success: function(data) {
                        if (data == '0' || data == '') {
                            x.className = "show";
                            setTimeout(function() {
                                x.className = x.className.replace("show", "");
                            }, 3000);
                            $('#name').val('');
                            $('#email').val('');
                            $('#phone').val('');
                            $("#company").val('');
                            $("#city").val('');
                            $("#country").val('');
                            $("#jobrole").val('');
                            $("#industry").val('');
                            $("#address").val('');
                            changeDate();
                        } else {

                            ex.className = "show";
                            setTimeout(function() {
                                ex.className = x.className.replace("show", "");
                            }, 3000);
                        }
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
    <style>
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        -moz-appearance: none;
        margin: 0;
    }

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

    #email_exist {
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

    #email_exist.show {
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

    .spsBgimg {
        background: url('./img/ImageA_cloud.png')top right no-repeat;
        background-size: contain;
    }

    .heading-form {
        font-size: large;
        text-align: center;
        color: #ed1b4a;
    }

    .footerBg {
        background: url('./img/SPS_event_Banner.jpg')no-repeat center;
        background-size: cover;
        height: 65vh;
    }

    .form-group label {
        position: relative;
        cursor: pointer;
    }

    .form-group input[type=checkbox] {
        padding: 0;
        height: initial;
        width: initial;
        margin-bottom: 0;
        display: none;
        cursor: pointer;
    }

    .form-group label:before {
        content: '';
        -webkit-appearance: none;
        background-color: transparent;
        border: 2px solid #ed1b4a;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
        padding: 10px;
        display: inline-block;
        position: relative;
        vertical-align: middle;
        cursor: pointer;
        margin-right: 5px;
    }

    .form-group input:checked+label:after {
        content: '';
        display: block;
        position: absolute;
        top: 2px;
        left: 9px;
        width: 6px;
        height: 14px;
        border: solid #ed1b4a;
        border-width: 0 2px 2px 0;
        transform: rotate(45deg);
    }
    </style>

</head>

<body>
    <script type="text/javascript" src="https://secure.perk0mean.com/js/173652.js"></script>
    <noscript><img alt="" src="https://secure.perk0mean.com/173652.png" style="display:none;" /></noscript>
    <!------------------------ main menu start ---------------------->
    <div class="main-menu fixed-menu sticky-top sticky">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand bold uppr" href="./">
                <img src="img/logo.png" class="img-fluid">
            </a>

            <a href="javascript://" class="menu-togglebar">
                <span></span>
                <span></span>
                <span></span>
            </a>

            <div class="navbar-collapse" id="navbarText">
                <a href="javascript://" class="menuclose d-block d-md-none">
                    <i class="fas fa-arrow-right"></i>
                </a>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript://">Explore</a>
                        <div class="submenu-div">
                            <div class="row">
                                <div class="col">
                                    <div class="menuQuote">
                                        <div class="textBig">Explore<span class="red">.</span></div>
                                        <p class="text-normal">See for yourself, the potential Industry 4.0 holds and be
                                            a part of the AI revolution with us. Exploration is really the essence of
                                            the human spirit.</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <ul class="ul-sub-menu">
                                        <li>
                                            <a href="use_cases" class="sub-Link">Use Cases</a>
                                            <ul class="ul-deep-menu">
                                                <li>
                                                    <a href="use_cases#Quality_Prediction" class="sub-Link">Quality
                                                        Prediction</a>
                                                </li>
                                                <li>
                                                    <a href="use_cases#Predictive_Maintenance"
                                                        class="sub-Link">Predictive Maintenance</a>
                                                </li>
                                                <li>
                                                    <a href="use_cases#Supply_Chain" class="sub-Link">Supply Chain</a>
                                                </li>
                                                <li>
                                                    <a href="use_cases#Asset_and_Inventory_Management"
                                                        class="sub-Link">Asset and Inventory Management</a>
                                                </li>
                                                <li>
                                                    <a href="use_cases#Intra-plant_Logistics"
                                                        class="sub-Link">Intra-plant Logistics</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="whitepapers" class="sub-Link">White Paper</a>
                                        </li>
                                        <li>
                                            <a href="blogs" class="sub-Link">Blogs</a>
                                        </li>
                                        <li>
                                            <a href="videos" class="sub-Link">Videos</a>
                                        </li>
                                        <li>
                                            <a href="http://cloud.tvarit.com" target="_blank" class="sub-Link">Demo</a>
                                        </li>
                                        <li>
                                            <a href="news" class="sub-Link">News</a>
                                        </li>
                                        <li>
                                            <a href="survey" class="sub-Link">Survey</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript://">Solutions</a>
                        <div class="submenu-div">
                            <div class="row">
                                <div class="col">
                                    <div class="menuQuote">
                                        <div class="textBig">Solutions<span class="red">.</span></div>
                                        <p class="text-normal">Exploration is curiosity put into action. Look at the
                                            transformation we can make and allow us to partner up with you.</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <ul class="ul-sub-menu">
                                        <li>
                                            <a href="products" class="sub-Link">Product</a>
                                            <ul class="ul-deep-menu">
                                                <li>
                                                    <a href="products#APA" class="sub-Link">APA</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="seminar_workshops" class="sub-Link">Seminar & Workshops</a>
                                        </li>
                                        <li>
                                            <a href="training" class="sub-Link">Training</a>
                                        </li>
                                        <li>
                                            <a href="consulting" class="sub-Link">Consulting</a>
                                        </li>
                                        <li>
                                            <a href="tti" class="sub-Link">Technology Incubation</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript://">Industries</a>
                        <div class="submenu-div">
                            <div class="row">
                                <div class="col">
                                    <div class="menuQuote">
                                        <div class="textBig">Industries<span class="red">.</span></div>
                                        <p class="text-normal">Simplicity is about subtracting the obvious and adding
                                            the meaningful. Wander and wonder over the widespread applications of our
                                            solutions.</p>
                                    </div>
                                </div>
                                <div class="col d-flex">
                                    <ul class="ul-sub-menu">
                                        <li>
                                            <a href="automotive" class="sub-Link">Automotive</a>
                                        </li>
                                        <li>
                                            <a href="avionics" class="sub-Link">Avionics</a>
                                        </li>
                                        <li>
                                            <a href="chemicals" class="sub-Link">Chemicals</a>
                                        </li>
                                        <li>
                                            <a href="construction" class="sub-Link">Construction</a>
                                        </li>
                                        <li>
                                            <a href="industrial_machinery" class="sub-Link">Industrial Machinery</a>
                                        </li>
                                    </ul>
                                    <ul class="ul-sub-menu">
                    </li>
                    <li>
                        <a href="oil_gas" class="sub-Link">Oil & Gas</a>
                    </li>
                    <li>
                        <a href="pharmaceuticals" class="sub-Link">Pharmaceuticals</a>
                    </li>
                    <li>
                        <a href="steel" class="sub-Link">Steel</a>
                    </li>
                    <li>
                        <a href="textiles" class="sub-Link">Textiles</a>
                    </li>
                </ul>
            </div>
    </div>
    </div>

    </li>
    <li class="nav-item">
        <a class="nav-link" href="about">About Us</a>
        <div class="submenu-div">
            <div class="row">
                <div class="col">
                    <div class="menuQuote">
                        <div class="textBig">About us<span class="red">.</span></div>
                        <p class="text-normal">We believe in the transfusion of technology & humanity for imperative
                            growth and work invariably to deliver tech-savvy APA products which help make your business
                            simpler and upgraded.</p>
                    </div>
                </div>
                <div class="col">
                    <ul class="ul-sub-menu">
                        <li>
                            <a href="about#Vision" class="sub-Link">Vision</a>
                        </li>
                        <li>
                            <a href="about#Team" class="sub-Link">Team</a>
                        </li>
                        <li>
                            <a href="about#Philanthropy" class="sub-Link">Philanthropy</a>
                        </li>
                        <li>
                            <a href="about#Benefits" class="sub-Link">Benefits</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="career">Careers</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="contact">Contact</a>
    </li>
    </ul>
    </div>
    </nav>
    </div>
    <!------------------------ main menu end ------------------------>


    <!------------------------ header start ------------------------->

    <header class="headerBg spsBgimg">
        <div class="container">
            <a href="#downClick" class="hdrscrollArrow"><i class="icon ion-ios-arrow-dropdown"></i></a>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="typography">
                        <div class="text-big60">
                            SPS 2019
                        </div>
                        <div class="text-1">
                            Smart Production Solutions
                        </div>

                        <br>
                        <p class="text-p">
                            Smart Production Solutions is Europe's number 1 exhibition for automation.<br><br>
                            SPS 2019 will take place from 26 to 28 November at Nurnberg Messe.<br><br>
                            <a href="https://sps.mesago.com/" target="_blank"
                                class="btn btn-round btn-shadow btn-red-grd">Learn more</a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </header>



    <!------------------------ header end --------------------------->

    <div class="section-padding" id="downClick">
        <div class="container">
            <div class="row justify-content-between formContent">
                <div class="col-md-7 mb-4 order-2 order-md-1">
                    <br>
                    <div class="white-box-shadow">
                        <div class="text-contact" style="text-align: center;">
                            <span class="heading-form">SPS 2019</span><br>
                            <span class="heading-form"> Submit the Form and Get Free Voucher</span>
                        </div>
                        <div class="formBox w-100">
                            <div class="form-row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Name *">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" id="email"
                                            placeholder="Email *">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md">
                                    <div class="form-group row" style="margin-left: 0px;">
                                        <select class="form-control countryCode" style="padding: 8px 0; width:30%; "
                                            id="countryCode" data-role="none" onchange="changeCode()">
                                                    <option dataCountryCode="UK" value="44">UK (+44)</option>
                                                    <option dataCountryCode="Algeria" value="213">Algeria (+213)</option>
                                            		<option dataCountryCode="Andorra" value="376">Andorra (+376)</option>
                                            		<option dataCountryCode="Angola" value="244">Angola (+244)</option>
                                            		<option dataCountryCode="Anguilla" value="1264">Anguilla (+1264)</option>
                                            		<option dataCountryCode="Antigua" value="1268">Antigua &amp; Barbuda (+1268)</option>
                                            		<option dataCountryCode="Argentina" value="54">Argentina (+54)</option>
                                            		<option dataCountryCode="Armenia" value="374">Armenia (+374)</option>
                                            		<option dataCountryCode="Aruba" value="297">Aruba (+297)</option>
                                            		<option dataCountryCode="Australia" value="61">Australia (+61)</option>
                                            		<option dataCountryCode="Austria" value="43">Austria (+43)</option>
                                            		<option dataCountryCode="Azerbaijan" value="994">Azerbaijan (+994)</option>
                                            		<option dataCountryCode="Bahamas" value="1242">Bahamas (+1242)</option>
                                            		<option dataCountryCode="Bahrain" value="973">Bahrain (+973)</option>
                                            		<option dataCountryCode="Bangladesh" value="880">Bangladesh (+880)</option>
                                            		<option dataCountryCode="Barbados" value="1246">Barbados (+1246)</option>
                                            		<option dataCountryCode="Belarus" value="375">Belarus (+375)</option>
                                            		<option dataCountryCode="Belgium" value="32">Belgium (+32)</option>
                                            		<option dataCountryCode="Belize" value="501">Belize (+501)</option>
                                            		<option dataCountryCode="Benin" value="229">Benin (+229)</option>
                                            		<option dataCountryCode="Bermuda" value="1441">Bermuda (+1441)</option>
                                            		<option dataCountryCode="Bhutan" value="975">Bhutan (+975)</option>
                                            		<option dataCountryCode="Bolivia" value="591">Bolivia (+591)</option>
                                            		<option dataCountryCode="Bosnia" value="387">Bosnia Herzegovina (+387)</option>
                                            		<option dataCountryCode="Botswana" value="267">Botswana (+267)</option>
                                            		<option dataCountryCode="Brazil" value="55">Brazil (+55)</option>
                                            		<option dataCountryCode="Brunei" value="673">Brunei (+673)</option>
                                            		<option dataCountryCode="Bulgaria" value="359">Bulgaria (+359)</option>
                                            		<option dataCountryCode="Burkina" value="226">Burkina Faso (+226)</option>
                                            		<option dataCountryCode="Burundi" value="257">Burundi (+257)</option>
                                            		<option dataCountryCode="Cambodia" value="855">Cambodia (+855)</option>
                                            		<option dataCountryCode="Cameroon" value="237">Cameroon (+237)</option>
                                            		<option dataCountryCode="Canada" value="1">Canada (+1)</option>
                                            		<option dataCountryCode="Cape_Verde" value="238">Cape Verde Islands (+238)</option>
                                            		<option dataCountryCode="Cayman" value="1345">Cayman Islands (+1345)</option>
                                            		<option dataCountryCode="Central_African" value="236">Central African Republic (+236)</option>
                                            		<option dataCountryCode="Chile" value="56">Chile (+56)</option>
                                            		<option dataCountryCode="China" value="86">China (+86)</option>
                                            		<option dataCountryCode="Colombia" value="57">Colombia (+57)</option>
                                            		<option dataCountryCode="Comoros" value="269">Comoros (+269)</option>
                                            		<option dataCountryCode="Congo" value="242">Congo (+242)</option>
                                            		<option dataCountryCode="Cook" value="682">Cook Islands (+682)</option>
                                            		<option dataCountryCode="Costa" value="506">Costa Rica (+506)</option>
                                            		<option dataCountryCode="Croatia" value="385">Croatia (+385)</option>
                                            		<option dataCountryCode="Cuba" value="53">Cuba (+53)</option>
                                            		<option dataCountryCode="Cyprus(N)" value="90392">Cyprus North (+90392)</option>
                                            		<option dataCountryCode="Cyprus(S)" value="357">Cyprus South (+357)</option>
                                            		<option dataCountryCode="Czech_Republic" value="42">Czech Republic (+42)</option>
                                            		<option dataCountryCode="Denmark" value="45">Denmark (+45)</option>
                                            		<option dataCountryCode="Djibouti" value="253">Djibouti (+253)</option>
                                            		<option dataCountryCode="Dominica" value="1809">Dominica (+1809)</option>
                                            		<option dataCountryCode="Dominican_Republic" value="1809">Dominican Republic (+1809)</option>
                                            		<option dataCountryCode="Ecuador" value="593">Ecuador (+593)</option>
                                            		<option dataCountryCode="Egypt" value="20">Egypt (+20)</option>
                                            		<option dataCountryCode="El_Salvador" value="503">El Salvador (+503)</option>
                                            		<option dataCountryCode="Equatorial" value="240">Equatorial Guinea (+240)</option>
                                            		<option dataCountryCode="Eritrea" value="291">Eritrea (+291)</option>
                                            		<option dataCountryCode="Estonia" value="372">Estonia (+372)</option>
                                            		<option dataCountryCode="Ethiopia" value="251">Ethiopia (+251)</option>
                                            		<option dataCountryCode="Falkland" value="500">Falkland Islands (+500)</option>
                                            		<option dataCountryCode="Faroe" value="298">Faroe Islands (+298)</option>
                                            		<option dataCountryCode="Fiji" value="679">Fiji (+679)</option>
                                            		<option dataCountryCode="Finland" value="358">Finland (+358)</option>
                                            		<option dataCountryCode="France" value="33">France (+33)</option>
                                            		<option dataCountryCode="French_Guiana" value="594">French Guiana (+594)</option>
                                            		<option dataCountryCode="French_Polynesia" value="689">French Polynesia (+689)</option>
                                            		<option dataCountryCode="Gabon" value="241">Gabon (+241)</option>
                                            		<option dataCountryCode="Gambia" value="220">Gambia (+220)</option>
                                            		<option dataCountryCode="Georgia" value="7880">Georgia (+7880)</option>
                                            		<option dataCountryCode="Germany" value="49">Germany (+49)</option>
                                            		<option dataCountryCode="Ghana" value="233">Ghana (+233)</option>
                                            		<option dataCountryCode="Gibraltar" value="350">Gibraltar (+350)</option>
                                            		<option dataCountryCode="Greece" value="30">Greece (+30)</option>
                                            		<option dataCountryCode="Greenland" value="299">Greenland (+299)</option>
                                            		<option dataCountryCode="Grenada" value="1473">Grenada (+1473)</option>
                                            		<option dataCountryCode="Guadeloupe" value="590">Guadeloupe (+590)</option>
                                            		<option dataCountryCode="Guam" value="671">Guam (+671)</option>
                                            		<option dataCountryCode="Guatemala" value="502">Guatemala (+502)</option>
                                            		<option dataCountryCode="Guinea" value="224">Guinea (+224)</option>
                                            		<option dataCountryCode="Guinea" value="245">Guinea - Bissau (+245)</option>
                                            		<option dataCountryCode="Guyana" value="592">Guyana (+592)</option>
                                            		<option dataCountryCode="Haiti" value="509">Haiti (+509)</option>
                                            		<option dataCountryCode="Honduras" value="504">Honduras (+504)</option>
                                            		<option dataCountryCode="HongKong" value="852">Hong Kong (+852)</option>
                                            		<option dataCountryCode="Hungary" value="36">Hungary (+36)</option>
                                            		<option dataCountryCode="Iceland" value="354">Iceland (+354)</option>
                                            		<option dataCountryCode="India" value="91">India (+91)</option>
                                            		<option dataCountryCode="Indonesia" value="62">Indonesia (+62)</option>
                                            		<option dataCountryCode="Iran" value="98">Iran (+98)</option>
                                            		<option dataCountryCode="Iraq" value="964">Iraq (+964)</option>
                                            		<option dataCountryCode="Ireland" value="353">Ireland (+353)</option>
                                            		<option dataCountryCode="Israel" value="972">Israel (+972)</option>
                                            		<option dataCountryCode="Italy" value="39">Italy (+39)</option>
                                            		<option dataCountryCode="Jamaica" value="1876">Jamaica (+1876)</option>
                                            		<option dataCountryCode="Japan" value="81">Japan (+81)</option>
                                            		<option dataCountryCode="Jordan" value="962">Jordan (+962)</option>
                                            		<option dataCountryCode="Kazakhstan" value="7">Kazakhstan (+7)</option>
                                            		<option dataCountryCode="Kenya" value="254">Kenya (+254)</option>
                                            		<option dataCountryCode="Kiribati" value="686">Kiribati (+686)</option>
                                            		<option dataCountryCode="Korea(N)" value="850">Korea North (+850)</option>
                                            		<option dataCountryCode="Korea(S)" value="82">Korea South (+82)</option>
                                            		<option dataCountryCode="Kuwait" value="965">Kuwait (+965)</option>
                                            		<option dataCountryCode="Kyrgyzstan" value="996">Kyrgyzstan (+996)</option>
                                            		<option dataCountryCode="Laos" value="856">Laos (+856)</option>
                                            		<option dataCountryCode="Latvia" value="371">Latvia (+371)</option>
                                            		<option dataCountryCode="Lebanon" value="961">Lebanon (+961)</option>
                                            		<option dataCountryCode="Lesotho" value="266">Lesotho (+266)</option>
                                            		<option dataCountryCode="Liberia" value="231">Liberia (+231)</option>
                                            		<option dataCountryCode="Libya" value="218">Libya (+218)</option>
                                            		<option dataCountryCode="Liechtenstein" value="417">Liechtenstein (+417)</option>
                                            		<option dataCountryCode="Lithuania" value="370">Lithuania (+370)</option>
                                            		<option dataCountryCode="Luxembourg" value="352">Luxembourg (+352)</option>
                                            		<option dataCountryCode="Macao" value="853">Macao (+853)</option>
                                            		<option dataCountryCode="Macedonia" value="389">Macedonia (+389)</option>
                                            		<option dataCountryCode="Madagascar" value="261">Madagascar (+261)</option>
                                            		<option dataCountryCode="Malawi" value="265">Malawi (+265)</option>
                                            		<option dataCountryCode="Malaysia" value="60">Malaysia (+60)</option>
                                            		<option dataCountryCode="Maldives" value="960">Maldives (+960)</option>
                                            		<option dataCountryCode="Mali" value="223">Mali (+223)</option>
                                            		<option dataCountryCode="Malta" value="356">Malta (+356)</option>
                                            		<option dataCountryCode="Marshall" value="692">Marshall Islands (+692)</option>
                                            		<option dataCountryCode="Martinique" value="596">Martinique (+596)</option>
                                            		<option dataCountryCode="Mauritania" value="222">Mauritania (+222)</option>
                                            		<option dataCountryCode="Mayotte" value="269">Mayotte (+269)</option>
                                            		<option dataCountryCode="Mexico" value="52">Mexico (+52)</option>
                                            		<option dataCountryCode="Micronesia" value="691">Micronesia (+691)</option>
                                            		<option dataCountryCode="Moldova" value="373">Moldova (+373)</option>
                                            		<option dataCountryCode="Monaco" value="377">Monaco (+377)</option>
                                            		<option dataCountryCode="Mongolia" value="976">Mongolia (+976)</option>
                                            		<option dataCountryCode="Montserrat" value="1664">Montserrat (+1664)</option>
                                            		<option dataCountryCode="Morocco" value="212">Morocco (+212)</option>
                                            		<option dataCountryCode="Mozambique" value="258">Mozambique (+258)</option>
                                            		<option dataCountryCode="Myanmar" value="95">Myanmar (+95)</option>
                                            		<option dataCountryCode="Namibia" value="264">Namibia (+264)</option>
                                            		<option dataCountryCode="Nauru" value="674">Nauru (+674)</option>
                                            		<option dataCountryCode="Nepal" value="977">Nepal (+977)</option>
                                            		<option dataCountryCode="Netherlands" value="31">Netherlands (+31)</option>
                                            		<option dataCountryCode="New_Caledonia" value="687">New Caledonia (+687)</option>
                                            		<option dataCountryCode="New_Zealand" value="64">New Zealand (+64)</option>
                                            		<option dataCountryCode="Nicaragua" value="505">Nicaragua (+505)</option>
                                            		<option dataCountryCode="Niger" value="227">Niger (+227)</option>
                                            		<option dataCountryCode="Nigeria" value="234">Nigeria (+234)</option>
                                            		<option dataCountryCode="Niue" value="683">Niue (+683)</option>
                                            		<option dataCountryCode="Norfolk_Islands" value="672">Norfolk Islands (+672)</option>
                                            		<option dataCountryCode="Northern_Marianas" value="670">Northern Marianas (+670)</option>
                                            		<option dataCountryCode="Norway" value="47">Norway (+47)</option>
                                            		<option dataCountryCode="Oman" value="968">Oman (+968)</option>
                                            		<option dataCountryCode="Palau" value="680">Palau (+680)</option>
                                            		<option dataCountryCode="Panama" value="507">Panama (+507)</option>
                                            		<option dataCountryCode="Papua" value="675">Papua New Guinea (+675)</option>
                                            		<option dataCountryCode="Paraguay" value="595">Paraguay (+595)</option>
                                            		<option dataCountryCode="Peru" value="51">Peru (+51)</option>
                                            		<option dataCountryCode="Philippines" value="63">Philippines (+63)</option>
                                            		<option dataCountryCode="Poland" value="48">Poland (+48)</option>
                                            		<option dataCountryCode="Portugal" value="351">Portugal (+351)</option>
                                            		<option dataCountryCode="Puerto" value="1787">Puerto Rico (+1787)</option>
                                            		<option dataCountryCode="Qatar" value="974">Qatar (+974)</option>
                                            		<option dataCountryCode="Reunion" value="262">Reunion (+262)</option>
                                            		<option dataCountryCode="Romania" value="40">Romania (+40)</option>
                                            		<option dataCountryCode="Russia" value="7">Russia (+7)</option>
                                            		<option dataCountryCode="Rwanda" value="250">Rwanda (+250)</option>
                                            		<option dataCountryCode="San_Marino" value="378">San Marino (+378)</option>
                                            		<option dataCountryCode="Sao_Tome_Principe" value="239">Sao Tome &amp; Principe (+239)</option>
                                            		<option dataCountryCode="Saudi" value="966">Saudi Arabia (+966)</option>
                                            		<option dataCountryCode="Senegal" value="221">Senegal (+221)</option>
                                            		<option dataCountryCode="Serbia" value="381">Serbia (+381)</option>
                                            		<option dataCountryCode="Seychelles" value="248">Seychelles (+248)</option>
                                            		<option dataCountryCode="Sierra" value="232">Sierra Leone (+232)</option>
                                            		<option dataCountryCode="Singapore" value="65">Singapore (+65)</option>
                                            		<option dataCountryCode="Slovak" value="421">Slovak Republic (+421)</option>
                                            		<option dataCountryCode="Slovenia" value="386">Slovenia (+386)</option>
                                            		<option dataCountryCode="Solomon" value="677">Solomon Islands (+677)</option>
                                            		<option dataCountryCode="Somalia" value="252">Somalia (+252)</option>
                                            		<option dataCountryCode="South_Africa" value="27">South Africa (+27)</option>
                                            		<option dataCountryCode="Spain" value="34">Spain (+34)</option>
                                            		<option dataCountryCode="SriLanka" value="94">Sri Lanka (+94)</option>
                                            		<option dataCountryCode="St_Helena" value="290">St. Helena (+290)</option>
                                            		<option dataCountryCode="St_Kitts" value="1869">St. Kitts (+1869)</option>
                                            		<option dataCountryCode="St_Lucia" value="1758">St. Lucia (+1758)</option>
                                            		<option dataCountryCode="Sudan" value="249">Sudan (+249)</option>
                                            		<option dataCountryCode="Suriname" value="597">Suriname (+597)</option>
                                            		<option dataCountryCode="Swaziland" value="268">Swaziland (+268)</option>
                                            		<option dataCountryCode="Sweden" value="46">Sweden (+46)</option>
                                            		<option dataCountryCode="Switzerland" value="41">Switzerland (+41)</option>
                                            		<option dataCountryCode="Syria" value="963">Syria (+963)</option>
                                            		<option dataCountryCode="Taiwan" value="886">Taiwan (+886)</option>
                                            		<option dataCountryCode="Tajikstan" value="7">Tajikstan (+7)</option>
                                            		<option dataCountryCode="Thailand" value="66">Thailand (+66)</option>
                                            		<option dataCountryCode="Togo" value="228">Togo (+228)</option>
                                            		<option dataCountryCode="Tonga" value="676">Tonga (+676)</option>
                                            		<option dataCountryCode="Trinidad" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                            		<option dataCountryCode="Tunisia" value="216">Tunisia (+216)</option>
                                            		<option dataCountryCode="Turkey" value="90">Turkey (+90)</option>
                                            		<option dataCountryCode="Turkmenistan" value="7">Turkmenistan (+7)</option>
                                            		<option dataCountryCode="Turkmenistan" value="993">Turkmenistan (+993)</option>
                                            		<option dataCountryCode="Turks" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                            		<option dataCountryCode="Tuvalu" value="688">Tuvalu (+688)</option>
                                            		<option dataCountryCode="Uganda" value="256">Uganda (+256)</option>
                                            		
                                            		<option dataCountryCode="Ukraine" value="380">Ukraine (+380)</option>
                                            		<option dataCountryCode="United_Arab_Emirates" value="971">United Arab Emirates (+971)</option>
                                            		<option dataCountryCode="Uruguay" value="598">Uruguay (+598)</option>
                                            		<option dataCountryCode="USA" value="1">USA (+1)</option>
                                            		<option dataCountryCode="Uzbekistan" value="7">Uzbekistan (+7)</option>
                                            		<option dataCountryCode="Vanuatu" value="678">Vanuatu (+678)</option>
                                            		<option dataCountryCode="Vatican" value="379">Vatican City (+379)</option>
                                            		<option dataCountryCode="Venezuela" value="58">Venezuela (+58)</option>
                                            		<option dataCountryCode="Vietnam" value="84">Vietnam (+84)</option>
                                            		<option dataCountryCode="Virgin_Islands_British" value="84">Virgin Islands - British (+1284)</option>
                                            		<option dataCountryCode="Virgin_Islands_US" value="84">Virgin Islands - US (+1340)</option>
                                            		<option dataCountryCode="Wallis" value="681">Wallis &amp; Futuna (+681)</option>
                                            		<option dataCountryCode="Yemen" value="969">Yemen (North)(+969)</option>
                                            		<option dataCountryCode="Yemen" value="967">Yemen (South)(+967)</option>
                                            		<option dataCountryCode="Zambia" value="260">Zambia (+260)</option>
                                            		<option dataCountryCode="Zimbabwe" value="263">Zimbabwe (+263)</option>
                                        </select>
                                        <input type="number" class="form-control" style="width:65%" name="phone"
                                            id="phone" placeholder="Phone *">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="company" id="company"
                                            placeholder="Company *">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="address" id="address"
                                            placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-md">

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="city" id="city"
                                            placeholder="City *">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <select class="form-control" style="padding: 8px 0; margin-top: 11px;"
                                            id="country" data-role="none">
                                            <option value="" disabled selected>Select Country</option>
                                                    <option  value="Algeria">Algeria </option>
                                            		<option  value="Andorra">Andorra </option>
                                            		<option  value="Angola">Angola </option>
                                            		<option  value="Anguilla">Anguilla </option>
                                            		<option  value="Antigua">Antigua &amp; Barbuda </option>
                                            		<option  value="Argentina">Argentina </option>
                                            		<option  value="Armenia">Armenia </option>
                                            		<option  value="Aruba">Aruba </option>
                                            		<option  value="Australia">Australia </option>
                                            		<option  value="Austria">Austria </option>
                                            		<option  value="Azerbaijan">Azerbaijan </option>
                                            		<option  value="Bahamas">Bahamas </option>
                                            		<option  value="Bahrain">Bahrain </option>
                                            		<option  value="Bangladesh">Bangladesh </option>
                                            		<option  value="Barbados">Barbados </option>
                                            		<option  value="Belarus">Belarus </option>
                                            		<option  value="Belgium">Belgium </option>
                                            		<option  value="Belize">Belize </option>
                                            		<option  value="Benin">Benin </option>
                                            		<option  value="Bermuda">Bermuda </option>
                                            		<option  value="Bhutan">Bhutan </option>
                                            		<option  value="Bolivia">Bolivia </option>
                                            		<option  value="Bosnia">Bosnia Herzegovina </option>
                                            		<option  value="Botswana">Botswana </option>
                                            		<option  value="Brazil">Brazil </option>
                                            		<option  value="Brunei">Brunei </option>
                                            		<option  value="Bulgaria">Bulgaria </option>
                                            		<option  value="Burkina">Burkina Faso </option>
                                            		<option  value="Burundi">Burundi </option>
                                            		<option  value="Cambodia">Cambodia </option>
                                            		<option  value="Cameroon">Cameroon </option>
                                            		<option  value="Canada">Canada </option>
                                            		<option  value="Cape_Verde">Cape Verde Islands </option>
                                            		<option  value="Cayman">Cayman Islands </option>
                                            		<option  value="Central_African">Central African Republic </option>
                                            		<option  value="Chile">Chile </option>
                                            		<option  value="China">China </option>
                                            		<option  value="Colombia">Colombia </option>
                                            		<option  value="Comoros">Comoros </option>
                                            		<option  value="Congo">Congo </option>
                                            		<option  value="Cook">Cook Islands </option>
                                            		<option  value="Costa">Costa Rica </option>
                                            		<option  value="Croatia">Croatia </option>
                                            		<option  value="Cuba">Cuba </option>
                                            		<option  value="Cyprus(N)">Cyprus North </option>
                                            		<option  value="Cyprus(S)">Cyprus South </option>
                                            		<option  value="Czech_Republic">Czech Republic </option>
                                            		<option  value="Denmark">Denmark </option>
                                            		<option  value="Djibouti">Djibouti </option>
                                            		<option  value="Dominica">Dominica </option>
                                            		<option  value="Dominican_Republic">Dominican Republic </option>
                                            		<option  value="Ecuador">Ecuador </option>
                                            		<option  value="Egypt">Egypt </option>
                                            		<option  value="El_Salvador">El Salvador </option>
                                            		<option  value="Equatorial">Equatorial Guinea </option>
                                            		<option  value="Eritrea">Eritrea </option>
                                            		<option  value="Estonia">Estonia </option>
                                            		<option  value="Ethiopia">Ethiopia </option>
                                            		<option  value="Falkland">Falkland Islands </option>
                                            		<option  value="Faroe">Faroe Islands </option>
                                            		<option  value="Fiji">Fiji </option>
                                            		<option  value="Finland">Finland </option>
                                            		<option  value="France">France </option>
                                            		<option  value="French_Guiana">French Guiana </option>
                                            		<option  value="French_Polynesia">French Polynesia </option>
                                            		<option  value="Gabon">Gabon </option>
                                            		<option  value="Gambia">Gambia </option>
                                            		<option  value="Georgia">Georgia </option>
                                            		<option  value="Germany">Germany </option>
                                            		<option  value="Ghana">Ghana </option>
                                            		<option  value="Gibraltar">Gibraltar </option>
                                            		<option  value="Greece">Greece </option>
                                            		<option  value="Greenland">Greenland </option>
                                            		<option  value="Grenada">Grenada </option>
                                            		<option  value="Guadeloupe">Guadeloupe </option>
                                            		<option  value="Guam">Guam </option>
                                            		<option  value="Guatemala">Guatemala </option>
                                            		<option  value="Guinea">Guinea </option>
                                            		<option  value="Guinea">Guinea - Bissau </option>
                                            		<option  value="Guyana">Guyana </option>
                                            		<option  value="Haiti">Haiti </option>
                                            		<option  value="Honduras">Honduras </option>
                                            		<option  value="HongKong">Hong Kong </option>
                                            		<option  value="Hungary">Hungary </option>
                                            		<option  value="Iceland">Iceland </option>
                                            		<option  value="India">India </option>
                                            		<option  value="Indonesia">Indonesia </option>
                                            		<option  value="Iran">Iran </option>
                                            		<option  value="Iraq">Iraq </option>
                                            		<option  value="Ireland">Ireland </option>
                                            		<option  value="Israel">Israel </option>
                                            		<option  value="Italy">Italy </option>
                                            		<option  value="Jamaica">Jamaica </option>
                                            		<option  value="Japan">Japan </option>
                                            		<option  value="Jordan">Jordan </option>
                                            		<option  value="Kazakhstan">Kazakhstan </option>
                                            		<option  value="Kenya">Kenya </option>
                                            		<option  value="Kiribati">Kiribati </option>
                                            		<option  value="Korea(N)">Korea North </option>
                                            		<option  value="Korea(S)">Korea South </option>
                                            		<option  value="Kuwait">Kuwait </option>
                                            		<option  value="Kyrgyzstan">Kyrgyzstan </option>
                                            		<option  value="Laos">Laos </option>
                                            		<option  value="Latvia">Latvia </option>
                                            		<option  value="Lebanon">Lebanon </option>
                                            		<option  value="Lesotho">Lesotho </option>
                                            		<option  value="Liberia">Liberia </option>
                                            		<option  value="Libya">Libya </option>
                                            		<option  value="Liechtenstein">Liechtenstein </option>
                                            		<option  value="Lithuania">Lithuania </option>
                                            		<option  value="Luxembourg">Luxembourg </option>
                                            		<option  value="Macao">Macao </option>
                                            		<option  value="Macedonia">Macedonia </option>
                                            		<option  value="Madagascar">Madagascar </option>
                                            		<option  value="Malawi">Malawi </option>
                                            		<option  value="Malaysia">Malaysia </option>
                                            		<option  value="Maldives">Maldives </option>
                                            		<option  value="Mali">Mali </option>
                                            		<option  value="Malta">Malta </option>
                                            		<option  value="Marshall">Marshall Islands </option>
                                            		<option  value="Martinique">Martinique </option>
                                            		<option  value="Mauritania">Mauritania </option>
                                            		<option  value="Mayotte">Mayotte </option>
                                            		<option  value="Mexico">Mexico </option>
                                            		<option  value="Micronesia">Micronesia </option>
                                            		<option  value="Moldova">Moldova </option>
                                            		<option  value="Monaco">Monaco </option>
                                            		<option  value="Mongolia">Mongolia </option>
                                            		<option  value="Montserrat">Montserrat </option>
                                            		<option  value="Morocco">Morocco </option>
                                            		<option  value="Mozambique">Mozambique </option>
                                            		<option  value="Myanmar">Myanmar </option>
                                            		<option  value="Namibia">Namibia </option>
                                            		<option  value="Nauru">Nauru </option>
                                            		<option  value="Nepal">Nepal </option>
                                            		<option  value="Netherlands">Netherlands </option>
                                            		<option  value="New_Caledonia">New Caledonia </option>
                                            		<option  value="New_Zealand">New Zealand </option>
                                            		<option  value="Nicaragua">Nicaragua </option>
                                            		<option  value="Niger">Niger </option>
                                            		<option  value="Nigeria">Nigeria </option>
                                            		<option  value="Niue">Niue </option>
                                            		<option  value="Norfolk_Islands">Norfolk Islands </option>
                                            		<option  value="Northern_Marianas">Northern Marianas </option>
                                            		<option  value="Norway">Norway </option>
                                            		<option  value="Oman">Oman </option>
                                            		<option  value="Palau">Palau </option>
                                            		<option  value="Panama">Panama </option>
                                            		<option  value="Papua">Papua New Guinea </option>
                                            		<option  value="Paraguay">Paraguay </option>
                                            		<option  value="Peru">Peru </option>
                                            		<option  value="Philippines">Philippines </option>
                                            		<option  value="Poland">Poland </option>
                                            		<option  value="Portugal">Portugal </option>
                                            		<option  value="Puerto">Puerto Rico </option>
                                            		<option  value="Qatar">Qatar </option>
                                            		<option  value="Reunion">Reunion </option>
                                            		<option  value="Romania">Romania </option>
                                            		<option  value="Russia">Russia </option>
                                            		<option  value="Rwanda">Rwanda </option>
                                            		<option  value="San_Marino">San Marino </option>
                                            		<option  value="Sao_Tome_Principe">Sao Tome &amp; Principe </option>
                                            		<option  value="Saudi">Saudi Arabia </option>
                                            		<option  value="Senegal">Senegal </option>
                                            		<option  value="Serbia">Serbia </option>
                                            		<option  value="Seychelles">Seychelles </option>
                                            		<option  value="Sierra">Sierra Leone </option>
                                            		<option  value="Singapore">Singapore </option>
                                            		<option  value="Slovak">Slovak Republic </option>
                                            		<option  value="Slovenia">Slovenia </option>
                                            		<option  value="Solomon">Solomon Islands </option>
                                            		<option  value="Somalia">Somalia </option>
                                            		<option  value="South_Africa">South Africa </option>
                                            		<option  value="Spain">Spain </option>
                                            		<option  value="SriLanka">Sri Lanka </option>
                                            		<option  value="St_Helena">St. Helena </option>
                                            		<option  value="St_Kitts">St. Kitts </option>
                                            		<option  value="St_Lucia">St. Lucia </option>
                                            		<option  value="Sudan">Sudan </option>
                                            		<option  value="Suriname">Suriname </option>
                                            		<option  value="Swaziland">Swaziland </option>
                                            		<option  value="Sweden">Sweden </option>
                                            		<option  value="Switzerland">Switzerland </option>
                                            		<option  value="Syria">Syria </option>
                                            		<option  value="Taiwan">Taiwan </option>
                                            		<option  value="Tajikstan">Tajikstan </option>
                                            		<option  value="Thailand">Thailand </option>
                                            		<option  value="Togo">Togo </option>
                                            		<option  value="Tonga">Tonga </option>
                                            		<option  value="Trinidad">Trinidad &amp; Tobago </option>
                                            		<option  value="Tunisia">Tunisia </option>
                                            		<option  value="Turkey">Turkey </option>
                                            		<option  value="Turkmenistan">Turkmenistan </option>
                                            		<option  value="Turkmenistan">Turkmenistan </option>
                                            		<option  value="Turks">Turks &amp; Caicos Islands </option>
                                            		<option  value="Tuvalu">Tuvalu </option>
                                            		<option  value="Uganda">Uganda </option>
                                            		<option  value="UK">UK </option>
                                            		<option  value="Ukraine">Ukraine </option>
                                            		<option  value="United_Arab_Emirates">United Arab Emirates </option>
                                            		<option  value="Uruguay">Uruguay </option>
                                            		<option  value="USA">USA </option>
                                            		<option  value="Uzbekistan">Uzbekistan </option>
                                            		<option  value="Vanuatu">Vanuatu </option>
                                            		<option  value="Vatican">Vatican City </option>
                                            		<option  value="Venezuela">Venezuela </option>
                                            		<option  value="Vietnam">Vietnam </option>
                                            		<option  value="Virgin_Islands_British">Virgin Islands - British </option>
                                            		<option  value="Virgin_Islands_US">Virgin Islands - US </option>
                                            		<option  value="Wallis">Wallis &amp; Futuna </option>
                                            		<option  value="Yemen(N)">Yemen (North)</option>
                                            		<option  value="Yemen(S)">Yemen (South)</option>
                                            		<option  value="Zambia">Zambia </option>
                                            		<option  value="Zimbabwe">Zimbabwe </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <select class="form-control" style="padding: 8px 0; margin-top: 11px;"
                                            id="jobrole" data-role="none">
                                            <option value="" disabled selected>Job Role</option>
                                            <option value="Component_Engineer">Component Engineer</option>
                                            <option value="Design_Engineer">Design Engineer</option>
                                            <option value="Distributor_Purchasing">Distributor - Purchasing</option>
                                            <option value="Distributor_Sales">Distributor - Sales</option>
                                            <option value="Engineering">Engineering</option>
                                            <option value="Inventory_Control">Inventory Control</option>
                                            <option value="Manufacturing_Engineer">Manufacturing Engineer</option>
                                            <option value="Product_Manager">Product Manager</option>
                                            <option value="Purchasing">Purchasing</option>
                                            <option value="Other">Other/Unknown</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <select class="form-control" style="padding: 8px 0;margin-top: 11px;"
                                            id="industry" data-role="none">
                                            <option disabled selected value="">Industry or Area Of Interest</option>
                                            <option value="Aerospace/Defense/Marine">Aerospace/Defense/Marine</option>
                                            <option value="Alternative Energy">Alternative Energy</option>
                                            <option value="Appliance">Appliance</option>
                                            <option value="Automation & Control">Automation & Control</option>
                                            <option value="Automotive">Automotive</option>
                                            <option value="Communications">Communications</option>
                                            <option value="Computer">Computer</option>
                                            <option value="Energy Networks">Energy Networks</option>
                                            <option value="HVAC">HVAC</option>
                                            <option value="Trans-Agriculture">Indutrial Commercial Trans-Agriculture
                                            </option>
                                            <option value="Trans-Construction">Indutrial Commercial Trans-Construction
                                            </option>
                                            <option value="Trans-General">Indutrial Commercial Trans-General</option>
                                            <option value="Trans-Transportation">Indutrial Commercial
                                                Trans-Transportation
                                            </option>
                                            <option value="Indutrial Machinery">Indutrial Machinery</option>
                                            <option value="Instrumentation">Instrumentation</option>
                                            <option value="Lighting">Lighting</option>
                                            <option value="Medical">Medical</option>
                                            <option value="Electronics">Mobile/Consumer Electronics</option>
                                            <option value="Transportation">Railway and Mass Transportation</option>
                                            <option value="Security">Security</option>
                                            <option value="Sensors">Sensors</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group" style="margin-top: 1rem;">
                                        <input type="checkbox" id="appointment" onchange="changeAppointment()">
                                        <label for="appointment">Book Appointment</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row appointment-div">
                                <div class="col-md ">
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="date" id="date-time-picker"
                                            value="2019-11-26" min="2019-11-26" max="2019-11-28"
                                            placeholder="Event Date" onchange="changeDate()">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <select class="form-control timeSlots" style="padding: 8px 0;"
                                            id="time_slot" data-role="none">
                                            <select>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group text-right">
                                    <input type="button" value="Submit" style="margin-top: 10px;" id="btn"
                                        class="btn btn-round btn-red-grd">
                                </div>
                            </div>
                            <div id="snackbar">We Will Contact you Shortly</div>
                            <div id="email_exist">Email Already Exits</div>
                            <div id="validation">Fill All the Mandatory Fields</div>
                            <div class="validation" id="validationDemoInvalidEmail">Please enter a valid email id
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 order-1 order-md-2 mb-md-0 ">
                    <br><br>
                    <div class="white-box-shadow ">
                        <img src="./img/SPS_event_Banner.jpg" style="width:100%; height:auto;">
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



</body>

</html>