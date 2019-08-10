<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
        <!-- Favicons -->
        <link rel="apple-touch-icon" href="./assets/img/kit/free/apple-icon.png">
        <link rel="icon" href="./img/favicon.png">
        <title>Kontaktiere Uns</title>
         
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
                <link rel="stylesheet" href="css/flickity.css">
        <link rel="stylesheet" href="css/animate.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300i,400,400i,700,700i" rel="stylesheet">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        <link href="https://unpkg.com/ionicons@4.5.0/dist/css/ionicons.min.css" rel="stylesheet">

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <![endif]-->
        <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>  
 

<script type="text/javascript" language="javascript">  
$("#btn").live("click",function(){ 
  if($("#name").val() !== "" && $("#email").val() !=="" && $("#phone").val() !== "")
    {     
    var name = $("#name").val();  
    var email = $("#email").val();
    var sub = $("#sub").val();
    var phone = $("#phone").val();
    var msg = $("#msg").val();
    var x = document.getElementById("snackbar");
    $.ajax({     
    type:"POST",  
    url:"/mail",  
    data: "name="+name+'&email='+email+'&sub='+sub+'&phone='+phone+'&msg='+msg,  
    success:function(data){  
         x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);  
            $('#name').val('');
            $('#email').val('');
            $('#sub').val('');
            $('#phone').val('');
            $('#msg').val('');
    }  
    });  
      }
    else{
      var y = document.getElementById("validation");
      y.className = "show";
  setTimeout(function(){ y.className = y.className.replace("show", ""); }, 3000); 
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

#validation.show   {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;

}


@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
</style>
        
</head>

    <body>
  <script type="text/javascript" src="https://secure.perk0mean.com/js/173652.js" ></script>
<noscript><img alt="" src="https://secure.perk0mean.com/173652.png" style="display:none;" /></noscript>
    <!------------------------ main menu start ---------------------->
    <div class="main-menu fixed-menu sticky-top sticky">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand bold uppr" href="./">
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
                <a class="nav-link" href="javascript://">Erkunden</a>
                 <div class="submenu-div">
                  <div class="row">
                    <div class="col">
                      <div class="menuQuote">
                        <div class="textBig">Erkunden<span class="red">.</span></div>
                        <p class="text-normal">See for yourself, the potential Industry 4.0 holds and be a part of the AI revolution with us. Exploration is really the essence of the human spirit.</p>
                      </div>
                    </div>
                    <div class="col">
                      <ul class="ul-sub-menu">
                       <li>
                          <a href="use_cases" class="sub-Link">Use Cases</a>
                          <ul class="ul-deep-menu">
                            <li>
                              <a href="use_cases#Quality_Prediction" class="sub-Link">Quality Prediction</a>
                            </li>
                            <li>
                              <a href="use_cases#Predictive_Maintenance" class="sub-Link">Predictive Maintenance</a>
                            </li>
                            <li>
                              <a href="use_cases#Supply_Chain" class="sub-Link">Supply Chain</a>
                            </li>
                            <li>
                              <a href="use_cases#Asset_and_Inventory_Management" class="sub-Link">Asset and Inventory Management</a>
                            </li>
                            <li>
                              <a href="use_cases#Intra-plant_Logistics" class="sub-Link">Intra-plant Logistics</a>
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
                          <a href="news"  class="sub-Link">News</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript://">Lösungen</a>
                <div class="submenu-div">
                  <div class="row">
                    <div class="col">
                      <div class="menuQuote">
                        <div class="textBig">Lösungen<span class="red">.</span></div>
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
                <a class="nav-link" href="javascript://">Industrien</a>
                <div class="submenu-div">
                  <div class="row">
                    <div class="col">
                      <div class="menuQuote">
                        <div class="textBig">Industrien<span class="red">.</span></div>
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
                <a class="nav-link" href="about">Über Uns</a>
                <div class="submenu-div">
                  <div class="row">
                    <div class="col">
                      <div class="menuQuote">
                        <div class="textBig">Über Uns<span class="red">.</span></div>
                        <p class="text-normal">We believe in the transfusion of technology & humanity for imperative growth and work invariably to deliver tech-savvy APA products which help make your business simpler and upgraded.</p>
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
                <a class="nav-link" href="career">Karriere</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="contact">Kontakt</a>
              </li>
            </ul>
          </div>
        </nav>
    </div>
    <!------------------------ main menu end ------------------------>


    <!------------------------ header start ------------------------->
    <header class="headerBg contactBg">
      <div class="container">
        <a href="#downClick" class="hdrscrollArrow" ><i class="icon ion-ios-arrow-dropdown"></i></a>
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="typography">
              <div class="text-1">
                Let's Connect
              </div>
              <div class="text-big60">
              Kontaktiere Uns
              </div>
              <br>
              <p class="text-p">
              Lassen Sie uns in Kontakt treten und Sie darüber auf dem Laufenden halten, wie wir Ihnen helfen können. 
Bitte füllen Sie das untenstehende Formular aus. 
Wir werden Sie innerhalb von 24 Stunden kontaktieren.
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
            <div class="text-contact">
            KONTAKTFORMULAR
            </div>
            <br>
            <div class="white-box-shadow">
                <div class="formBox w-100">
                  <div class="form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name *">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email *">
                  </div>
                  <div class="form-row">
                    <div class="col-md">
                      <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="sub" placeholder="Subject">
                      </div>
                    </div>
                    <div class="col-md">
                      <div class="form-group">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone *">
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <textarea class="form-control" rows="3"  name="msg" id="msg" placeholder="Message"></textarea>
                  </div>
                  <br>
                  <div class="form-group text-right">
                        <input   type="button" value="Submit" id="btn"   class="btn btn-round btn-red-grd">
                  </div>
                    <div id="snackbar">We Will Contact you Shortly</div>
                  <div id="validation">Fill All the Mandatory Fields</div>
                </div>
              </div>
          </div>
          <div class="col-md-4 order-1 order-md-2 mb-md-0">
            <div class="text-contact">
            KONTAKTINFO
            </div>
            <br>
            <div class="ctnDetailBox">
              <h4 class="red">Address</h4>
              <p class="text-p">Gundelandstr. 5,<br> 60435 Frankfurt am Main</p>
            </div>

            <div class="ctnDetailBox">
              <h4 class="red">Phone</h4>
              <p class="text-p">+49 173 835 1380</p>
            </div>

            <div class="ctnDetailBox">
              <h4 class="red">E-mail</h4>
              <p class="text-p">info@tvarit.com</p>
            </div>

            <div class="ctnDetailBox">
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
                <a href="https://www.facebook.com/tvaritAI" target="blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.xing.com/xbp/pages/tvarit-gmbh" target="blank"><i class="fab fa-xing"></i></a>
                <a href="https://twitter.com/TvaritAI" target="blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/company/tvarit/" target="blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://www.youtube.com/playlist?list=PLqOwcayv0lYbbyKLjn6-A0w3Es4CKZpGr" target="blank"><i class="fab fa-youtube"></i></a>
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
    

  </body>
  </html>
