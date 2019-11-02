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
    $("#btn").live("click", function() {
        if ($("#name").val() !== "" && $("#email").val() !== "" && $("#phone").val() !== "" &&
            $("#company").val() !== "" && $("#city").val() !== "" && $("#country").val() !== "" &&
            $("#jobrole").val() !== "" && $("#industry").val() !== "") {
            var name = $("#name").val();
            var email = $("#email").val();
            var phone = $("#phone").val();
            var company = $("#company").val();
            var city = $("#city").val();
            var country = $("#country").val();
            var jobrole = $("#jobrole").val();
            var industry = $("#industry").val();
            var address = $("#address").val();
            var x = document.getElementById("snackbar");
            $.ajax({
                type: "POST",
                url: "/spsAction",
                data: "name=" + name + '&email=' + email + '&phone=' + phone + '&company=' +
                    company + '&city' + city + '&country' + country + '&jobrole' + jobrole +
                    '&industry' + industry +
                    '&address' + address,
                success: function(data) {
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
                    $("#address").val();
                }
            });
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
    background: url('./img/sps_cloud.png')no-repeat;
    background-size: contain;
        }

    .heading-form {
        font-size: large;
        text-align: center;
        color: #ed1b4a;
    }
    .footerBg {
        background: url('./img/SPS_Banner.jpg')no-repeat center;
        background-size: cover; 
        height: 65vh;
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
                        <div class="text-1">
                            Smart Production Solution
                        </div>
                        <div class="text-big60">
                            SPS 2019
                        </div>
                        <br>
                        <p class="text-p">
                            30th international exhibition for industrial automation.<br>
                            Nuremberg, Germany <br> 26 - 28 November 2019
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
                            <span class="heading-form"> Free Entry Registration</span>
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
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone" id="phone"
                                            placeholder="Phone *">
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
                                        <select id="country" class="form-control" name="country" id="country">
                                            <option value="" disabled selected>Select Country</option>
                                            <option value="Afganistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bonaire">Bonaire</option>
                                            <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Canary Islands">Canary Islands</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Channel Islands">Channel Islands</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos Island">Cocos Island</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote DIvoire">Cote DIvoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curaco">Curacao</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Ter">French Southern Ter</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Great Britain">Great Britain</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Hawaii">Hawaii</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="India">India</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea North">Korea North</option>
                                            <option value="Korea Sout">Korea South</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia">Macedonia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Midway Islands">Midway Islands</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Nambia">Nambia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherland Antilles">Netherland Antilles</option>
                                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                            <option value="Nevis">Nevis</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau Island">Palau Island</option>
                                            <option value="Palestine">Palestine</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Phillipines">Philippines</option>
                                            <option value="Pitcairn Island">Pitcairn Island</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                                            <option value="Republic of Serbia">Republic of Serbia</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="St Barthelemy">St Barthelemy</option>
                                            <option value="St Eustatius">St Eustatius</option>
                                            <option value="St Helena">St Helena</option>
                                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                            <option value="St Lucia">St Lucia</option>
                                            <option value="St Maarten">St Maarten</option>
                                            <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                            <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                            <option value="Saipan">Saipan</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="Samoa American">Samoa American</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Tahiti">Tahiti</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Erimates">United Arab Emirates</option>
                                            <option value="United States of America">United States of America</option>
                                            <option value="Uraguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Vatican City State">Vatican City State</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                            <option value="Wake Island">Wake Island</option>
                                            <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zaire">Zaire</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <select id="job_role" class="form-control" name="jobrole" id="jobrole">
                                            <option value="" disabled selected>Job Role</option>
                                            <option value="Component Engineer">Component Engineer</option>
                                            <option value="Design Engineer">Design Engineer</option>
                                            <option value="Distributor Purchasing">Distributor - Purchasing</option>
                                            <option value="Distributor Sales">Distributor - Sales</option>
                                            <option value="Engineering">Engineering</option>
                                            <option value="Inventory Control">Inventory Control</option>
                                            <option value="Manufacturing Engineer">Manufacturing Engineer</option>
                                            <option value="Product Manager">Product Manager</option>
                                            <option value="Purchasing">Purchasing</option>
                                            <option value="Other">Other/Unknown</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <select id="industry" class="form-control" name="industry" id="industry">
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
                                    <div class="form-group text-right">
                                        <input type="button" value="Submit" id="btn" class="btn btn-round btn-red-grd">
                                    </div>
                                </div>
                            </div>
                            <div id="snackbar">We Will Contact you Shortly</div>
                            <div id="validation">Fill All the Mandatory Fields</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 order-1 order-md-2 mb-md-0 ">
                <br>
                <div class="white-box-shadow ">
                    <img src="./img/SPS_Banner.jpg">
                <div class="formBox w-100">

                </div>
                </div>
                    <!-- <div class="text-contact">
                        Contact Info
                    </div> -->
                    <!-- <br>
                    <div class="ctnDetailBox">
                        <h4 class="red">Stand Location</h4>
                        <p class="text-p">exhibition hall 6,<br> at booth 150M<br>Nuremberg, Germany </p>
                    </div>

                    <div class="ctnDetailBox">
                        <h4 class="red">Phone</h4>
                        <p class="text-p">+49 173 835 1380</p>
                    </div>

                    <div class="ctnDetailBox">
                        <h4 class="red">E-mail</h4>
                        <p class="text-p">info@tvarit.com</p>
                    </div> -->

                    <!-- <div class="ctnDetailBox">
                        <div class="ft-social">
                            <h3>Disclaimer</h3>
                            <div class="ft-links">
                                <a href="impressum">Impressum</a>
                                <a href="datenschutz">Datenschutz</a>
                            </div>
                        </div>
                    </div>
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
                    </div> -->

                    <!-- <div class="ctnDetailBox">
                        <p class="text-p">
                            &copy;2019 Tvarit GmbH
                        </p>
                    </div> -->

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