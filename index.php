<!DOCTYPE html>
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <!-- Favicons -->
        <link rel="icon" href="./img/favicon.png">
        <title>Tvarit AI</title>
         
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
                <link rel="stylesheet" href="css/flickity.css">
        <link rel="stylesheet" href="css/animate.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway: 100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed: 300i,400,400i,700,700i" rel="stylesheet">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        
         <script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.5.0/knockout-debug.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.5.0/knockout-min.js"></script>
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <![endif]-->
        
        <style>
       #cookieDiv{
           visibility: hidden;
       }
            .overlay {
  height: 0%;
  width: 100%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-y: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 15%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
 
}
.responsive {
  width: 60%;
  height: auto;
}
@media screen and ( max-width: 500px) {
  .responsive {
  width: 80%;
  height: 300px;
}
 
}
 
        </style>
       
         
</head>

  <body  onload="ReadCookie()" >
    <!------SPLASH SCREEN----->

    <!------------------------ main menu start ---------------------->
    <div class="main-menu fixed-menu sticky-top sticky">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand bold uppr" href="index">
            <img src="img/logo.png" class="img-fluid">
          </a>

          <a href="javascript://" class="menu-togglebar" >
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
                        <p class="text-normal">See for yourself, the potential Industry 4.0 holds and be a part of the AI revolution with us. Exploration is really the essence of the human spirit.</p>
                      </div>
                    </div>
                    <div class="col">
                      <ul class="ul-sub-menu">
                        <li>
                          <a href="use_cases" class="sub-Link">Use Cases</a>
                          <ul class="ul-deep-menu">
                            <li>
                              <a href="learn#Quality_Prediction" class="sub-Link">Quality Prediction</a>
                            </li>
                            <li>
                              <a href="learn#Predictive_Maintenance" class="sub-Link">Predictive Maintenance</a>
                            </li>
                            <li>
                              <a href="learn#Supply_Chain" class="sub-Link">Supply Chain</a>
                            </li>
                            <li>
                              <a href="learn#Asset_and_Inventory_Management" class="sub-Link">Asset and Inventory Management</a>
                            </li>
                            <li>
                              <a href="learn#Intra-plant_Logistics" class="sub-Link">Intra-plant Logistics</a>
                            </li>
                          </ul>
                        </li>
                        <li>
                          <a href="white_paper" class="sub-Link">White Paper</a>
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
                          <a href="news"  class="sub-Link">News</a>
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
                        <p class="text-normal">Exploration is curiosity put into action. Look at the transformation we can make and allow us to partner up with you.</p>
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
                          <a href="consulting" class="sub-Link">Consulting</a>
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
                        <p class="text-normal">Simplicity is about subtracting the obvious and adding the meaningful. Wander and wonder over the widespread applications of our solutions.</p>
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
                        <p class="text-normal">We believe in the transfusion of technology & humanity for imperative growth and work invariably to deliver tech-savvy APA products which help make your business simpler and upgraded.</p>
                      </div>
                    </div>
                    <div class="col">
                      <ul class="ul-sub-menu">
                        <li>
                          <a href="about#Vision" class="sub-Link">Vision</a>
                        </li>
                        <li>
                          <a href="about#Leadership" class="sub-Link">Leadership</a>
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
    <header class="headerBg">
        <a href="#Quality_Prediction" class="hdrscrollArrow" ><i class="icon ion-ios-arrow-dropdown"></i></a>
       <video poster="img/indexVideoBg.jpg" autoplay="true" muted loop>
        <source src="video/indexBg.mp4" type="video/mp4">
      </video>
      <div class="container">
      <a href="#downClick" class="hdrscrollArrow" ><i class="icon ion-ios-arrow-dropdown"></i></a>
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="typography">
              <div class="text-big60">
                 <span class="tvarit-black">Tv<span class="color">a</span>r<span class="color">i</span>t</span> TALKS
              </div>
              <div class="text-1">
                TO YOUR MACHINES
              </div>
              <br>
              <ul class="ul-list">
                <li>Understands them with our Data Science expertise</li>
                <li>Makes them smarter using our AI Software - Automated Predictive Analytics (APA)</li>
              </ul>

              <br>
              <a href="http://cloud.tvarit.com" target="_blank" class="btn btn-round btn-shadow btn-red-grd">TRY FOR 30 DAYS</a>
            </div>
          </div>
          <div class="text-1" style="font-size:15px; color:#ed1b4a; text-transform: uppercase;font-weight: bold;">
                TVARIT AI is the best solution for smart manufacturing, smart machines and digital transformation
            </div>
        </div>
      </div>
    </header>
    <!------------------------ header end --------------------------->


     
     
     <div class="section-padding">
       <div class="container">
        <div class="white-box-shadow">
          <div class="centerTitle">
            <div class="text-big60">How  <span class="tvarit-black">Tv<span class="color">a</span>r<span class="color">i</span>t</span> Does it ?</div>
            <h3 class="bold red text-center">TECHNOLOGY</h3>
          </div>
          
          <div class="centerPharseContent text-p">
            We want to make factories technologically advanced allowing machines and humans to work more effectively enabling businesses to make smart and informed decisions.
          </div>
        </div>
       </div>
     </div>


    <!------------------------ why needed start --------------------->
    <div class="section-padding">
      <div class="container">
        
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="videoWrapper">
              <iframe  class="videoFrame" src="https://www.youtube.com/embed/-G3xhq2-3Z0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-md-6">

            <div class="px-4 box-content-left">
              <div class="title">
               <div class="text-first red">Why</div>
               <div class="text-big60">APA?</div>
              </div>
              <div class="short-line bg-red"></div>
              <div class="whyapamore" >
                <p class="text-p">
                An insight into the world of APA-APA is the key to ease all the business hassle, to increase all the efficiency, to add all the precision. Instead of looking backward to analyze "what happened?" predictive analytics help executives answer "What's next?" and "What should we do about it?" With the assimilation of the digital and human world, the future beholds a manufacturing metamorphosis. Preparing and contributing for the revolution, Tvarit AI extends it's services in APA to offer the following: Explore the world of Predictive Analytics with us now! </p>
              </div>
              <div class="clearfix"></div>
              <br>
              <a href="products"  class="btn btn-round btn-shadow btn-red-grd">SEE ALL SERVICES</a>
            </div>
           
          </div>
        </div>
      </div>
    </div>
    <!------------------------ why needed end ----------------------->

    <!------------------------ Features start --------------------->
    <div class="section-padding">
      <div class="container">
        <div class="centerTitle text-big60">
          Benefits of  <span class="red fw-900">APA</span>
        </div>
        
        <br>

        <div class="row justify-content-center">
          <div class="col-md-4">
            <div class="featureBox">
              <div class="icon">
                <img src="img/f-icon-1.png" class="img-fluid">
              </div>

              <p class="title">CLUSTERING MACHINES</p>

              <div class="more">
                    <p class="text-p">Our smart solutions help segregate between dead, low load and high load machines for smooth operating. It also helps identify the high return and low return machines giving us an edge in resource optimization.
                    </p>
              </div>

            </div>
          </div>

          <div class="col-md-4">
            <div class="featureBox">
              <div class="icon">
                <img src="img/f-icon-2.png" class="img-fluid">
              </div>

              <p class="title">PREDICTIVE MAINTENANCE</p>

              <div class="more">
                    <p class="text-p">We develop Supervised & non- supervised ML algorithms for failure detection with 97.2% real-time accuracy. They provide data on circumstances and time under which real breakdown happens and alert you to minimize downtime.</p>
              </div>

            </div>
          </div>

          <div class="col-md-4">
            <div class="featureBox">
              <div class="icon">
                <img src="img/f-icon-3.png" class="img-fluid">
              </div>

              <p class="title">PREVENTIVE MAINTENANCE</p>

              <div class="more">
                  <p class="text-p">
                    We develop algorithms for real-time servicing data prediction. The main goal behind PM is for the equipment to make it from one planned service to the next planned service without any failures caused by fatigue, neglect, or normal wear (preventable items).
                  </p>
              </div>

            </div>
          </div>

          <div class="col-md-4">
            <div class="featureBox">
              <div class="icon">
                <img src="img/f-icon-4.png" class="img-fluid">
              </div>

              <p class="title">ANOMALY DETECTION</p>

              <div class="more">
                <p class="text-p">Our smart solutions detect anomalies in factory operations and deliver immediate response. This helps in fixing the problems quickly, prevents breakage and reduces downtime. It can also help prevent fatal accidents.</p>
              </div>

            </div>
          </div>

          <div class="col-md-4">
            <div class="featureBox">
              <div class="icon">
                <img src="img/f-icon-5.png" class="img-fluid">
              </div>

              <p class="title">CONDITION MONITORING</p>

              <div class="more">
                    <p class="text-p">With the assistance of real-time sensor monitoring, industries save about 70% of their time due to automated alert system.</p>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
    <!------------------------ Features end --------------------->

     <!------------------------ WHY NOW start --------------------->
    <div class="section-padding-both">
      <div class="container">
        <div class="white-box-shadow">
          <div class="centerTitle">
            <div class="text-big60" >WHY  <span class="fw-900">NOW ?</span></div>
            <h3 class="bold text-center red">TIMING</h3>
          </div>
          
          <div class="centerPharseContent text-p">
           Our vision is to build scalable and sustainable Automated Predictive Analytics (APA) solutions which are invisible and assistive, allowing manufacturers to do what they love - efficient productions.
          </div>
        </div>
      </div>
    </div>
    <!------------------------ WHY NOW end ----------------------->


    <!------------------------Countdown start --------------------->
    <div class="section-padding-both countBg parallax-bg parallax" data-diff="100" id="counter">
      <div class="container">
        <div class="centerTitle text-big60 text-white">
          The change we <span class="fw-900">brought</span>
        </div>
        <div class="row">
          <div class="col-md">
            <div class="countBox">
              <div class="figure"><span class="figureNum"data-count="22">0</span> <small>+</small></div>
              <div class="text">Machine Learning Algorithms </div>
            </div>
          </div>
          <div class="col-md">
            <div class="countBox">
              <div class="figure"><span class="figureNum"data-count="97.2">0</span> <small>%</small></div>
              <div class="text">Accuracy of APA models</div>
            </div>
          </div>

          <div class="col-md">
            <div class="countBox">
              <div class="figure"><span class="figureNum"data-count="2.7">0</span> <small class="x">X</small></div>
              <div class="text">Increased delivery time</div>
            </div>
          </div>

          <div class="col-md">
            <div class="countBox">
              <div class="figure"><span class="figureNum"data-count="13">0</span> <small>%</small></div>
              <div class="text">Increase in OEE</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!------------------------Countdown end --------------------->

    <!------------------------Automated slide start --------------------->
    <div class="section-padding bringSlideSection">
        <div class="row align-items-center">
          <div class="col-md-6 pdn-l-col">
            <div class="title md-center-title">
              <div class="text-first red">The change</div>
              <div class="text-big60">we can Bring</div>
              <div class="short-line bg-red"></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="automtv-carousel">
              <div class="carousel-cell">
                <a  href="automotive" class="automBox">
                  <div class="automPic">
                    <img src="img/pic-1.jpg" class="img-fluid">
                  </div>
                  <div class="automText">
                    Automotive
                    <div class="line"></div>
                  </div>
                </a>
              </div>
              <div class="carousel-cell">
                <a href="avionics" class="automBox">
                  <div class="automPic">
                    <img src="img/pic-2.jpg" class="img-fluid">
                  </div>
                  <div class="automText">
                    Avionics
                    <div class="line"></div>
                  </div>
                </a>
              </div>

              <div class="carousel-cell">
                <a href="chemicals" class="automBox">
                  <div class="automPic">
                    <img src="img/pic-3.jpg" class="img-fluid">
                  </div>
                  <div class="automText">
                    Chemicals
                    <div class="line"></div>
                  </div>
                </a>
              </div>

              <div class="carousel-cell">
                <a href="construction" class="automBox">
                  <div class="automPic">
                    <img src="img/pic-4.jpg" class="img-fluid">
                  </div>
                  <div class="automText">
                    Construction
                    <div class="line"></div>
                  </div>
                </a>
              </div>

              <div class="carousel-cell">
                <a href="industrial_machinery" class="automBox">
                  <div class="automPic">
                    <img src="img/pic-5.jpg" class="img-fluid">
                  </div>
                  <div class="automText">
                    Industrial Machinery
                    <div class="line"></div>
                  </div>
                </a>
              </div>

              <div class="carousel-cell">
                <a href="oil_gas" class="automBox">
                  <div class="automPic">
                    <img src="img/pic-6.jpg" class="img-fluid">
                  </div>
                  <div class="automText">
                    Oil & Gas
                    <div class="line"></div>
                  </div>
                </a>
              </div>

              <div class="carousel-cell">
                <a href="pharmaceuticals" class="automBox">
                  <div class="automPic">
                    <img src="img/pic-7.jpg" class="img-fluid">
                  </div>
                  <div class="automText">
                    PHARMACEUTICALS
                    <div class="line"></div>
                  </div>
                </a>
              </div>

              <div class="carousel-cell">
                <a href="steel" class="automBox">
                  <div class="automPic">
                    <img src="img/pic-8.jpg" class="img-fluid">
                  </div>
                  <div class="automText">
                    Steel
                    <div class="line"></div>
                  </div>
                </a>
              </div>

              <div class="carousel-cell">
                <a  href="textiles" class="automBox">
                  <div class="automPic">
                    <img src="img/pic-9.jpg" class="img-fluid">
                  </div>
                  <div class="automText">
                    Textiles
                    <div class="line"></div>
                  </div>
                </a>
              </div>

            </div>
          </div>
        </div>
    </div>
    <!------------------------Automated slide end --------------------->

     <!------------------------ tvarit start --------------------->
    <div class="section-padding-both">
      <div class="container">
        <div class="white-box-shadow">
          <div class="centerTitle">
            <div class="text-big60"><span class="tvarit-black">Tv<span class="color">a</span>r<span class="color">i</span>t</span>  The Team</div>
          </div>
          
          <div class="centerPharseContent text-p">
            We’re based out of Niedernhausen Germany having the perfect team composition - a German founder bringing vast know-how of machinery coupled with high-quality software expertise of the Indian founders.
          </div>
        </div>
      </div>
    </div>
    <!------------------------ tvarit end ----------------------->

    <!------------------------Client logo slide start --------------------->
    <div class="section-padding-both">
      <div class="container">
        <div class="centerTitle text-big60">
          Using <span class="tvarit-black">Tv<span class="color">a</span>r<span class="color">i</span>t</span>
        </div>
        <br>
        <div class="client-carousel">
          <div class="carousel-cell">
            <div class="picBox w-90">
              <img src="img/client_logo/aditya_birla.jpg" class="img-fluid">
            </div>
          </div>
          <div class="carousel-cell">
            <div class="picBox w-90">
              <img src="img/client_logo/DB.png" class="img-fluid">
            </div>
          </div>
          <div class="carousel-cell">
            <div class="picBox w-90">
              <img src="img/client_logo/intel.png" class="img-fluid">
            </div>
          </div>
          <div class="carousel-cell">
            <div class="picBox">
              <img src="img/client_logo/NTT.png" class="img-fluid">
            </div>
          </div>
          <div class="carousel-cell">
            <div class="picBox">
              <img src="img/client_logo/times-of-india.png" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!------------------------Client logo slide end --------------------->

    <!------------------------try demo start --------------------->
    
      <!------------------------ Reference start --------------------->
    <div class="section-padding-both">
      <div class="container">
        <div class="white-box-shadow">
          <div class="centerTitle">
            <div class="text-big60"><span class="tvarit-black">Reference</span></div>
          </div>
          <div class="col-md-12 row">
                               <div class="col-md-2"></div>
                 <div class="col-md-4">
                 <a href="">
                  <div class="automPic" style="height: 150px;">
                    <img src="img/reference1.png"   class="img-fluid" style="height:80px;margin-top:25px;">
                  </div>
                </a>
             </div>
               <div class="col-md-4">
                 <a href="">
                  <div class="automPic" style="height: 150px;">
                    <img src="img/reference2.jpeg"   class="img-fluid" style="height:80px;margin-top:25px;">
                  </div>
                </a>
             </div>
                 <div class="col-md-2"></div>
            </div>
        </div>
      </div>
    </div>
    <!------------------------ Reference end ----------------------->
    
    
    
    <!------------------------try demo end --------------------->

    <!------------------------footer start --------------------->
    <?php
    include 'footer.php';
    ?>
    <!------------------------footer end --------------------->
    
 
     <div class="cookieFooter bg-red-grd" id="cookieDiv" >
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-md-6">
            <p class="m-0 text-white text-center text-md-left">We use cookies to improve your experience on our website. By browsing this website, you agree to our use of cookies.</p>
          </div>
          <div class="col-md-4">
                    <form name = "myform" action = "">
             <div class="d-flex mt-3 mt-md-0 justify-content-center justify-content-md-end">
                 <input type="hidden"  name = "customer" value="user">
              <a href="datenschutz" target="_blank" class="btn btn-white btn-round mr-2">More Info</a>
              <input type="button" class="btn btn-white btn-round closeCookie" value="ok"  onclick = "WriteCookie();" />
            </div>
            </form>
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
    <script src="js/counting.js"></script>
    <script src="js/script.js"></script>
    <script src="js/parallax.js"></script>
           <script type = "text/javascript">
             function WriteCookie() {
               if( document.myform.customer.value == "" ) {
                  return;
               }
               cookievalue = escape(document.myform.customer.value) + ";";
               document.cookie = "name=" + cookievalue;
             }  

            function ReadCookie() {
                document.getElementById('cookieDiv').style.visibility = 'hidden';
                 var allcookies = document.cookie;
                cookiearray = allcookies.split(';');
                if(cookiearray.length !== 0){
                   document.getElementById('cookieDiv').style.visibility = 'hidden';
                 }else{
                   document.getElementById('cookieDiv').style.visibility = 'visible';
                 }
               for(var i=0; i<cookiearray.length; i++) {
                  name = cookiearray[i].split('=')[0];
                  value = cookiearray[i].split('=')[1];
                }
            }
      </script>  
   

  </body>
  </html>
