<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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
        <title>Contact</title>
         
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
       <?php 
     include 'header.php';
     ?>
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
                Contact Us
              </div>
              <br>
              <p class="text-p">
                 Let us get connected and get you updated on how can we help you. Please fill the form below. We will contact you within 24 hours.
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
              Contact Form
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
              Contact Info
            </div>
            <br>
            <div class="ctnDetailBox">
              <h4 class="red">Address</h4>
              <p class="text-p">Hanauer Landstraße 521,<br> 60386 Frankfurt am Main<br> Germany</p>
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
