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
        <meta name="keywords" content="SPS – Smart Production Solutions, Nuremberg, NürnbergMesse, Components, Control Technology, Drive Systems, Electromechanical Components, Human-Machine-Interface Devices, Industrial Communication, Industrial Software, Interface Technology, IPCs, Motion Control, Peripheral Equipment, Sensor Technology, "/>
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
        changeCode();
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
            $("#industry").val() !== "") {
            var name = $("#name").val();
            var email = $("#email").val();
            var phone = $("#countryCode").val() + $("#phone").val();
            var company = $("#company").val();
            var city = $("#city").val();
            var country = $("#country").val();
            var jobrole = '';
            var industry = $("#industry").val();
            var address = '';
            var date = $("#date-time-picker").val();
            var slot = $("#time_slot").val();
            var msg = $("#msg").val();
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
                        slot + '&msg=' + msg,
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
                            $("#msg").val('');
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
         margin: 0;
    }
    input[type=number] {
    -moz-appearance:textfield;
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
                                                    <option dataCountryCode="Germany" value="49">+49 Germany</option>
                                                    <option dataCountryCode="Algeria" value="213">+213 Algeria</option>
                                            		<option dataCountryCode="Andorra" value="376">+376 Andorra</option>
                                            		<option dataCountryCode="Angola" value="244">+244 Angola</option>
                                            		<option dataCountryCode="Anguilla" value="1264">+1264 Anguilla</option>
                                            		<option dataCountryCode="Antigua" value="1268">+1268 Antigua &amp; Barbuda</option>
                                            		<option dataCountryCode="Argentina" value="54">+54 Argentina</option>
                                            		<option dataCountryCode="Armenia" value="374">+374 Armenia</option>
                                            		<option dataCountryCode="Aruba" value="297">+297 Aruba</option>
                                            		<option dataCountryCode="Australia" value="61">+61 Australia</option>
                                            		<option dataCountryCode="Austria" value="43">+43 Austria</option>
                                            		<option dataCountryCode="Azerbaijan" value="994">+994 Azerbaijan</option>
                                            		<option dataCountryCode="Bahamas" value="1242">+1242 Bahamas</option>
                                            		<option dataCountryCode="Bahrain" value="973">+973 Bahrain</option>
                                            		<option dataCountryCode="Bangladesh" value="880">+880 Bangladesh</option>
                                            		<option dataCountryCode="Barbados" value="1246">+1246 Barbados</option>
                                            		<option dataCountryCode="Belarus" value="375">+375 Belarus</option>
                                            		<option dataCountryCode="Belgium" value="32">+32 Belgium</option>
                                            		<option dataCountryCode="Belize" value="501">+501 Belize</option>
                                            		<option dataCountryCode="Benin" value="229">+229 Benin</option>
                                            		<option dataCountryCode="Bermuda" value="1441">+1441 Bermuda</option>
                                            		<option dataCountryCode="Bhutan" value="975">+975 Bhutan</option>
                                            		<option dataCountryCode="Bolivia" value="591">+591 Bolivia</option>
                                            		<option dataCountryCode="Bosnia" value="387">+387 Bosnia Herzegovina</option>
                                            		<option dataCountryCode="Botswana" value="267">+267 Botswana</option>
                                            		<option dataCountryCode="Brazil" value="55">+55 Brazil</option>
                                            		<option dataCountryCode="Brunei" value="673">+673 Brunei</option>
                                            		<option dataCountryCode="Bulgaria" value="359">+359 Bulgaria</option>
                                            		<option dataCountryCode="Burkina" value="226">+226 Burkina Faso</option>
                                            		<option dataCountryCode="Burundi" value="257">+257 Burundi</option>
                                            		<option dataCountryCode="Cambodia" value="855">+855 Cambodia</option>
                                            		<option dataCountryCode="Cameroon" value="237">+237 Cameroon</option>
                                            		<option dataCountryCode="Canada" value="1">+1 Canada</option>
                                            		<option dataCountryCode="Cape_Verde" value="238">+238 Cape Verde Islands</option>
                                            		<option dataCountryCode="Cayman" value="1345">+1345 Cayman Islands</option>
                                            		<option dataCountryCode="Central_African" value="236">+236 Central African Republic</option>
                                            		<option dataCountryCode="Chile" value="56">+56 Chile</option>
                                            		<option dataCountryCode="China" value="86">+86 China</option>
                                            		<option dataCountryCode="Colombia" value="57">+57 Colombia</option>
                                            		<option dataCountryCode="Comoros" value="269">+269 Comoros</option>
                                            		<option dataCountryCode="Congo" value="242">+242 Congo</option>
                                            		<option dataCountryCode="Cook" value="682">+682 Cook Islands</option>
                                            		<option dataCountryCode="Costa" value="506">+506 Costa Rica</option>
                                            		<option dataCountryCode="Croatia" value="385">+385 Croatia</option>
                                            		<option dataCountryCode="Cuba" value="53">+53 Cuba</option>
                                            		<option dataCountryCode="Cyprus(N)" value="90392">+90392 Cyprus North</option>
                                            		<option dataCountryCode="Cyprus(S)" value="357">+357 Cyprus South</option>
                                            		<option dataCountryCode="Czech_Republic" value="42">+42 Czech Republic</option>
                                            		<option dataCountryCode="Denmark" value="45">+45 Denmark</option>
                                            		<option dataCountryCode="Djibouti" value="253">+253 Djibouti</option>
                                            		<option dataCountryCode="Dominica" value="1809">+1809 Dominica</option>
                                            		<option dataCountryCode="Dominican_Republic" value="1809">+1809 Dominican Republic</option>
                                            		<option dataCountryCode="Ecuador" value="593">+593 Ecuador</option>
                                            		<option dataCountryCode="Egypt" value="20">+20 Egypt</option>
                                            		<option dataCountryCode="El_Salvador" value="503">+503 El Salvador</option>
                                            		<option dataCountryCode="Equatorial" value="240">+240 Equatorial Guinea</option>
                                            		<option dataCountryCode="Eritrea" value="291">+291 Eritrea</option>
                                            		<option dataCountryCode="Estonia" value="372">+372 Estonia</option>
                                            		<option dataCountryCode="Ethiopia" value="251">+251 Ethiopia</option>
                                            		<option dataCountryCode="Falkland" value="500">+500 Falkland Islands</option>
                                            		<option dataCountryCode="Faroe" value="298">+298 Faroe Islands</option>
                                            		<option dataCountryCode="Fiji" value="679">+679 Fiji</option>
                                            		<option dataCountryCode="Finland" value="358">+358 Finland</option>
                                            		<option dataCountryCode="France" value="33">+33 France</option>
                                            		<option dataCountryCode="French_Guiana" value="594">+594 French Guiana</option>
                                            		<option dataCountryCode="French_Polynesia" value="689">+689 French Polynesia</option>
                                            		<option dataCountryCode="Gabon" value="241">+241 Gabon</option>
                                            		<option dataCountryCode="Gambia" value="220">+220 Gambia</option>
                                            		<option dataCountryCode="Georgia" value="7880">+7880 Georgia</option>
                                            		<option dataCountryCode="Ghana" value="233">+233 Ghana</option>
                                            		<option dataCountryCode="Gibraltar" value="350">+350 Gibraltar</option>
                                            		<option dataCountryCode="Greece" value="30">+30 Greece</option>
                                            		<option dataCountryCode="Greenland" value="299">+299 Greenland</option>
                                            		<option dataCountryCode="Grenada" value="1473">+1473 Grenada</option>
                                            		<option dataCountryCode="Guadeloupe" value="590">+590 Guadeloupe</option>
                                            		<option dataCountryCode="Guam" value="671">+671 Guam</option>
                                            		<option dataCountryCode="Guatemala" value="502">+502 Guatemala</option>
                                            		<option dataCountryCode="Guinea" value="224">+224 Guinea</option>
                                            		<option dataCountryCode="Guinea" value="245">+245 Guinea - Bissau</option>
                                            		<option dataCountryCode="Guyana" value="592">+592 Guyana</option>
                                            		<option dataCountryCode="Haiti" value="509">+509 Haiti</option>
                                            		<option dataCountryCode="Honduras" value="504">+504 Honduras</option>
                                            		<option dataCountryCode="HongKong" value="852">+852 Hong Kong</option>
                                            		<option dataCountryCode="Hungary" value="36">+36 Hungary</option>
                                            		<option dataCountryCode="Iceland" value="354">+354 Iceland</option>
                                            		<option dataCountryCode="India" value="91">+91 India</option>
                                            		<option dataCountryCode="Indonesia" value="62">+62 Indonesia</option>
                                            		<option dataCountryCode="Iran" value="98">+98 Iran</option>
                                            		<option dataCountryCode="Iraq" value="964">+964 Iraq</option>
                                            		<option dataCountryCode="Ireland" value="353">+353 Ireland</option>
                                            		<option dataCountryCode="Israel" value="972">+972 Israel</option>
                                            		<option dataCountryCode="Italy" value="39">+39 Italy</option>
                                            		<option dataCountryCode="Jamaica" value="1876">+1876 Jamaica</option>
                                            		<option dataCountryCode="Japan" value="81">+81 Japan</option>
                                            		<option dataCountryCode="Jordan" value="962">+962 Jordan</option>
                                            		<option dataCountryCode="Kazakhstan" value="7">+7 Kazakhstan</option>
                                            		<option dataCountryCode="Kenya" value="254">+254 Kenya</option>
                                            		<option dataCountryCode="Kiribati" value="686">+686 Kiribati</option>
                                            		<option dataCountryCode="Korea(N)" value="850">+850 Korea North</option>
                                            		<option dataCountryCode="Korea(S)" value="82">+82 Korea South</option>
                                            		<option dataCountryCode="Kuwait" value="965">+965 Kuwait</option>
                                            		<option dataCountryCode="Kyrgyzstan" value="996">+996 Kyrgyzstan</option>
                                            		<option dataCountryCode="Laos" value="856">+856 Laos</option>
                                            		<option dataCountryCode="Latvia" value="371">+371 Latvia</option>
                                            		<option dataCountryCode="Lebanon" value="961">+961 Lebanon</option>
                                            		<option dataCountryCode="Lesotho" value="266">+266 Lesotho</option>
                                            		<option dataCountryCode="Liberia" value="231">+231 Liberia</option>
                                            		<option dataCountryCode="Libya" value="218">+218 Libya</option>
                                            		<option dataCountryCode="Liechtenstein" value="417">+417 Liechtenstein</option>
                                            		<option dataCountryCode="Lithuania" value="370">+370 Lithuania</option>
                                            		<option dataCountryCode="Luxembourg" value="352">+352 Luxembourg</option>
                                            		<option dataCountryCode="Macao" value="853">+853 Macao</option>
                                            		<option dataCountryCode="Macedonia" value="389">+389 Macedonia</option>
                                            		<option dataCountryCode="Madagascar" value="261">+261 Madagascar</option>
                                            		<option dataCountryCode="Malawi" value="265">+265 Malawi</option>
                                            		<option dataCountryCode="Malaysia" value="60">+60 Malaysia</option>
                                            		<option dataCountryCode="Maldives" value="960">+960 Maldives</option>
                                            		<option dataCountryCode="Mali" value="223">+223 Mali</option>
                                            		<option dataCountryCode="Malta" value="356">+356 Malta</option>
                                            		<option dataCountryCode="Marshall" value="692">+692 Marshall Islands</option>
                                            		<option dataCountryCode="Martinique" value="596">+596 Martinique</option>
                                            		<option dataCountryCode="Mauritania" value="222">+222 Mauritania</option>
                                            		<option dataCountryCode="Mayotte" value="269">+269 Mayotte</option>
                                            		<option dataCountryCode="Mexico" value="52">+52 Mexico</option>
                                            		<option dataCountryCode="Micronesia" value="691">+691 Micronesia</option>
                                            		<option dataCountryCode="Moldova" value="373">+373 Moldova</option>
                                            		<option dataCountryCode="Monaco" value="377">+377 Monaco</option>
                                            		<option dataCountryCode="Mongolia" value="976">+976 Mongolia</option>
                                            		<option dataCountryCode="Montserrat" value="1664">+1664 Montserrat</option>
                                            		<option dataCountryCode="Morocco" value="212">+212 Morocco</option>
                                            		<option dataCountryCode="Mozambique" value="258">+258 Mozambique</option>
                                            		<option dataCountryCode="Myanmar" value="95">+95 Myanmar</option>
                                            		<option dataCountryCode="Namibia" value="264">+264 Namibia</option>
                                            		<option dataCountryCode="Nauru" value="674">+674 Nauru</option>
                                            		<option dataCountryCode="Nepal" value="977">+977 Nepal</option>
                                            		<option dataCountryCode="Netherlands" value="31">+31 Netherlands</option>
                                            		<option dataCountryCode="New_Caledonia" value="687">+687 New Caledonia</option>
                                            		<option dataCountryCode="New_Zealand" value="64">+64 New Zealand</option>
                                            		<option dataCountryCode="Nicaragua" value="505">+505 Nicaragua</option>
                                            		<option dataCountryCode="Niger" value="227">+227 Niger</option>
                                            		<option dataCountryCode="Nigeria" value="234">+234 Nigeria</option>
                                            		<option dataCountryCode="Niue" value="683">+683 Niue</option>
                                            		<option dataCountryCode="Norfolk_Islands" value="672">+672 Norfolk Islands</option>
                                            		<option dataCountryCode="Northern_Marianas" value="670">+670 Northern Marianas</option>
                                            		<option dataCountryCode="Norway" value="47">+47 Norway</option>
                                            		<option dataCountryCode="Oman" value="968">+968 Oman</option>
                                            		<option dataCountryCode="Palau" value="680">+680 Palau</option>
                                            		<option dataCountryCode="Panama" value="507">+507 Panama</option>
                                            		<option dataCountryCode="Papua" value="675">+675 Papua New Guinea</option>
                                            		<option dataCountryCode="Paraguay" value="595">+595 Paraguay</option>
                                            		<option dataCountryCode="Peru" value="51">+51 Peru</option>
                                            		<option dataCountryCode="Philippines" value="63">+63 Philippines</option>
                                            		<option dataCountryCode="Poland" value="48">+48 Poland</option>
                                            		<option dataCountryCode="Portugal" value="351">+351 Portugal</option>
                                            		<option dataCountryCode="Puerto" value="1787">+1787 Puerto Rico</option>
                                            		<option dataCountryCode="Qatar" value="974">+974 Qatar</option>
                                            		<option dataCountryCode="Reunion" value="262">+262 Reunion</option>
                                            		<option dataCountryCode="Romania" value="40">+40 Romania</option>
                                            		<option dataCountryCode="Russia" value="7">+7 Russia</option>
                                            		<option dataCountryCode="Rwanda" value="250">+250 Rwanda</option>
                                            		<option dataCountryCode="San_Marino" value="378">+378 San Marino</option>
                                            		<option dataCountryCode="Sao_Tome_Principe" value="239">+239 Sao Tome &amp; Principe</option>
                                            		<option dataCountryCode="Saudi" value="966">+966 Saudi Arabia</option>
                                            		<option dataCountryCode="Senegal" value="221">+221 Senegal</option>
                                            		<option dataCountryCode="Serbia" value="381">+381 Serbia</option>
                                            		<option dataCountryCode="Seychelles" value="248">+248 Seychelles</option>
                                            		<option dataCountryCode="Sierra" value="232">+232 Sierra Leone</option>
                                            		<option dataCountryCode="Singapore" value="65">+65 Singapore</option>
                                            		<option dataCountryCode="Slovak" value="421">+421 Slovak Republic</option>
                                            		<option dataCountryCode="Slovenia" value="386">+386 Slovenia</option>
                                            		<option dataCountryCode="Solomon" value="677">+677 Solomon Islands</option>
                                            		<option dataCountryCode="Somalia" value="252">+252 Somalia</option>
                                            		<option dataCountryCode="South_Africa" value="27">+27 South Africa</option>
                                            		<option dataCountryCode="Spain" value="34">+34 Spain </option>
                                            		<option dataCountryCode="SriLanka" value="94">+94 Sri Lanka </option>
                                            		<option dataCountryCode="St_Helena" value="290">+290 St. Helena </option>
                                            		<option dataCountryCode="St_Kitts" value="1869">+1869 St. Kitts </option>
                                            		<option dataCountryCode="St_Lucia" value="1758">+1758 St. Lucia </option>
                                            		<option dataCountryCode="Sudan" value="249">+249 Sudan</option>
                                            		<option dataCountryCode="Suriname" value="597">+597 Suriname</option>
                                            		<option dataCountryCode="Swaziland" value="268">+268 Swaziland </option>
                                            		<option dataCountryCode="Sweden" value="46">+46 Sweden </option>
                                            		<option dataCountryCode="Switzerland" value="41">+41 Switzerland </option>
                                            		<option dataCountryCode="Syria" value="963">+963 Syria </option>
                                            		<option dataCountryCode="Taiwan" value="886">+886 Taiwan </option>
                                            		<option dataCountryCode="Tajikstan" value="7">+7 Tajikstan</option>
                                            		<option dataCountryCode="Thailand" value="66">+66 Thailand </option>
                                            		<option dataCountryCode="Togo" value="228">+228 Togo</option>
                                            		<option dataCountryCode="Tonga" value="676">+676 Tonga </option>
                                            		<option dataCountryCode="Trinidad" value="1868">+1868 Trinidad &amp; Tobago </option>
                                            		<option dataCountryCode="Tunisia" value="216">+216 Tunisia </option>
                                            		<option dataCountryCode="Turkey" value="90">+90 Turkey </option>
                                            		<option dataCountryCode="Turkmenistan" value="7">+7 Turkmenistan </option>
                                            		<option dataCountryCode="Turkmenistan" value="993">+993 Turkmenistan </option>
                                            		<option dataCountryCode="Turks" value="1649">+1649 Turks &amp; Caicos Islands </option>
                                            		<option dataCountryCode="Tuvalu" value="688">+688 Tuvalu </option>
                                            		<option dataCountryCode="Uganda" value="256">+256 Uganda </option>
                                                    <option dataCountryCode="UK" value="44">+44 UK</option>
                                            		<option dataCountryCode="Ukraine" value="380">+380 Ukraine</option>
                                            		<option dataCountryCode="United_Arab_Emirates" value="971">+971 United Arab Emirates </option>
                                            		<option dataCountryCode="Uruguay" value="598">+598 Uruguay </option>
                                            		<option dataCountryCode="USA" value="1">+1 USA </option>
                                            		<option dataCountryCode="Uzbekistan" value="7">+7 Uzbekistan </option>
                                            		<option dataCountryCode="Vanuatu" value="678">+678 Vanuatu </option>
                                            		<option dataCountryCode="Vatican" value="379">+379 Vatican City</option>
                                            		<option dataCountryCode="Venezuela" value="58">+58 Venezuela </option>
                                            		<option dataCountryCode="Vietnam" value="84">+84 Vietnam </option>
                                            		<option dataCountryCode="Virgin_Islands_British" value="84">+1284 Virgin Islands - British </option>
                                            		<option dataCountryCode="Virgin_Islands_US" value="84">+1340 Virgin Islands - US</option>
                                            		<option dataCountryCode="Wallis" value="681">+681 Wallis &amp; Futuna </option>
                                            		<option dataCountryCode="Yemen" value="969">+969 Yemen (North)</option>
                                            		<option dataCountryCode="Yemen" value="967">+967 Yemen (South)</option>
                                            		<option dataCountryCode="Zambia" value="260">+260 Zambia </option>
                                            		<option dataCountryCode="Zimbabwe" value="263">+263 Zimbabwe</option>
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
                                <!-- <div class="col-md">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="address" id="address"
                                            placeholder="Address">
                                    </div>
                                </div> -->
                                <div class="col-md">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="msg" id="msg"
                                            placeholder="Message">
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
                                            <option value="" disabled selected>Country</option>
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
                                <!-- <div class="col-md">
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
                                </div> -->
                            </div>
                            <div class="form-row">
                               
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