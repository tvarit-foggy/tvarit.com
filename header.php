<style>
.lds-ripple {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
  top: 50%;
}
.lds-ripple div {
  position: absolute;
  border: 4px solid #f74785;
  opacity: 1;
  border-radius: 50%;
  animation: lds-ripple 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;
}
.lds-ripple div:nth-child(2) {
  animation-delay: -0.5s;
}
@keyframes lds-ripple {
  0% {
    top: 36px;
    left: 36px;
    width: 0;
    height: 0;
    opacity: 1;
  }
  100% {
    top: 0px;
    left: 0px;
    width: 72px;
    height: 72px;
    opacity: 0;
  }
}
div.fadeMe {
  opacity:    1;
  background: #f1f1f1;
  width:      100%;
  height:     100%;
  z-index:    10;
  top:        0;
  left:       0;
  position:   fixed;
  z-index: 9999999;
}
.logo-contain {
    text-align: center;
    height: 100vh;
}
@media only screen and (max-width: 990px) {
    #tia-for-die-casting-sub {
      padding-left: 10px;
    }
}
</style>
<!-- Scripts -->
<script>
  (function(){

    window.ldfdr = window.ldfdr || {};
    (function(d, s, ss, fs){
      fs = d.getElementsByTagName(s)[0];

      function ce(src){
        var cs  = d.createElement(s);
        cs.src = src;
        setTimeout(function(){fs.parentNode.insertBefore(cs,fs)}, 1);
      }

      ce(ss);
    })(document, 'script', 'https://sc.lfeeder.com/lftracker_v1_lYNOR8xMWAb7WQJZ.js');
  })();
</script>
 <script async type="text/javascript" src="//cdns.canddi.com/p/651f57c868eb8134eb833d883acf3169.js"></script>
<!-- Scripts -->
<script type="text/javascript" langauge="javascript">
    function setLanguage(ln){
        if(ln === 'en'){
            let path = location.pathname.split("/");
            if(path[1] == 'de'){
                path = path[2];
                location.href = location.origin + '/de/' + path;
            }else {
                path = path[1];
                location.href = location.origin + '/' + path;
            }
            sessionStorage.setItem("lang",ln)
        }else{
            sessionStorage.setItem("lang",ln)
        }
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("a.menu-click").click(function(){
    $("div.item-show-hide-box").toggle();
  });
});
</script>

<!-- Paste this code after body tag -->
<div class="fadeMe">
<div class="logo-contain">
<div class="lds-ripple"><div></div><div></div></div></div>
</div>
</div>

	<!-- Ends -->
<div class="main-menu fixed-menu sticky-top sticky">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand bold uppr" href=".">
                <img alt="Tvarit Industrial AI" src="img/tvarit-logo.svg" loading="lazy" class="img-fluid">
            </a>

            <a href="javascript://" class="menu-togglebar" aria-label="Menu">
                <span></span>
                <span></span>
                <span></span>
            </a>

            <div class="navbar-collapse" id="navbarText">
                <a href="javascript://" class="menuclose d-block d-lg-none">
                    <i class="fas fa-arrow-right"></i>
                </a>
                <ul class="navbar-nav ml-auto">
		    <li class="nav-item">
                        <a class="nav-link" href="#">AI Product</a>
                        <div class="submenu-div">
                            <div class="row">
                                <div class="col">
                                    <div class="menuQuote">
                                          <div class="textBig">AI Product<span class="red">.</span></div>
                                        <!-- <p class="text-normal"> </p> -->
                                    </div>
                                </div>
                                <div class="col">
                                    <ul class="ul-sub-menu">
                                      <li>
                                            <a href="https://www.tia.tvarit.com/" class="sub-Link menu-click"  >TiA for Die-casting</a>
                                        </li>
                                        <div  id="tia-for-die-casting-sub">
                                          <a style="color:#333;  display:block;" href="#" class="item-show-hide-box" >Reduce rejections & rework in Die-Casting</a>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">AI Solutions</a>
                        <div class="submenu-div">
                            <div class="row">
                                <div class="col-lg-4 col">
                                    <div class="menuQuote">
                                        <div class="textBig">AI Solutions<span class="red">.</span></div>
                                        <!-- <p class="text-normal"> ..... </p> -->
                                    </div>
                                </div>
                                <div class="col-lg-4 col">
                                    <ul class="ul-sub-menu">
                                        <li>
                                            <a href="optimize-oee-for-steel-and-metal-manufacturing-companies" class="sub-Link">Optimize
                                                OEE for Metal Manufacturing companies</a>
                                        </li>
                                        <li>
                                            <a href="predictive-maintenance-for-industrial-electric-motors" class="sub-Link">Predictive
                                                Maintenance for Industrial Electric Motors</a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-lg-4 col">
                                     <ul class="ul-sub-menu">
                                        <li>
                                            <a href="ai-based-production-solution-for-cable-manufacturing"
                                                class="sub-Link">AI Based Production Planning for Cable Manufacturing</a>
                                        </li>
                                        <li>
                                            <a href="predictive-quality-for-die-casting-machines" class="sub-Link">Predictive
                                                Quality for Die-casting Machines</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row achivemore-menu">
                                <div class="col-lg-8 col">
                                    <ul class="ul-sub-menu">
                                        <li>
                                            <a href="achieve-more" class="sub-Link">
                                                <img class="ai_solutions_img" src="./img/plus_ai.png"
                                                    alt="Achieve More Tvarit AI Solutions" />
                                                <div class="bold tvarit-black">
                                                    Achieve More Tvarit AI Solutions
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Consulting</a>
                        <div class="submenu-div">
                            <div class="row">
                                <div class="col">
                                    <div class="menuQuote">
                                          <div class="textBig">Consulting<span class="red">.</span></div>
                                        <!-- <p class="text-normal"> </p> -->
                                    </div>
                                </div>
                                <div class="col">
                                    <ul class="ul-sub-menu">
                                    	<li>
                                            <a href="https://www.bigdata.tvarit.com/" class="sub-Link">Big Data Consultancy</a>
                                        </li>
					<li>
                                            <a href="ai-consulting" class="sub-Link">AI Consulting</a>
                                        </li>
                                        <li>
                                            <a href="ai-academy" class="sub-Link">AI and Data Academy</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Explore</a>
                        <div class="submenu-div">
                            <div class="row">
                                <div class="col-lg-4 col">
                                    <div class="menuQuote">
                                         <div class="textBig">Explore<span class="red">.</span></div>
                                        <!-- <p class="text-normal"></p> -->
                                    </div>
                                </div>
                                <div class="col-lg-3 col d-flex">
                                    <ul class="ul-sub-menu sub-300">
                                        <li>
                                            <a href="about#Vision" class="sub-Link">About Us</a>
                                        </li>
                                        <li>
                                            <a class="sub-Link" href="career">Careers</a>
                                        </li>
                                        <li>
                                            <a href="news" class="sub-Link">News</a>
                                        </li>
                                        <li>
                                            <a class="sub-Link" href="contact">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-5 col">
                                    <ul class="ul-sub-menu sub-300">
                                        <li>
                                            <a href="whitepapers" class="sub-Link">White Paper</a>
                                        </li>
                                        <li>
                                            <a href="videos" class="sub-Link">Videos</a>
                                        </li>
                                        <li>
                                            <a href="blogs" class="sub-Link">Blogs</a>
                                        </li>
                                        <li>
                                        <li>
                                            <a href="#" class="sub-Link">Survey</a>
                                            <ul class="ul-deep-menu">
                                                <li>
                                                    <a href="ai-for-manufacturing" class="sub-Link">AI for
                                                        Manufacturing</a>
                                                </li>
                                                <li>
                                                    <a href="ai-as-a-product" class="sub-Link">AI as a
                                                        Product </a>
                                                </li>
                                            </ul>
                                        </li>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                    <div style="display:flex;">
                        <a class="nav-link nav-link-en" href="/" id="english"
                            onClick="javascript:setLanguage('en');">
                            <b>EN</b>
                        </a>
                        <a class="nav-link nav-link-seprator" href="#">|</a>
                        <a class="nav-link nav-link-de" href="/" id="german"
                            onClick="javascript:setLanguage('de');">
                            <b>DE</b>
                        </a>
                    </div>
                </li>
                </ul>
            </div>
        </nav>
    </div>
             <!------------------------sticky contact button start --------------------->
<div class="sticky-contact-bar">
<a href="contact" target="_blank" class="sticky-contact" > <img src="img/sticky_contact.png" class="img-fluid" onerror='this.style.display = "none"' alt="Sticky Contact"></a>
<!-- <a href="../contact" target="_blank" class="sticky-contact"> <img src="../img/sticky_contact.png" class="img-fluid" onerror='this.style.display = "none"' alt=""></a>     -->
</div>
<!------------------------sticky contact button end --------------------->
<script>
    let path = location.pathname.split("/");
    if(path[1] == 'de'){
        path = path[2];
    }else {
        path = path[1];
    } 
    document.getElementById('german').href = location.origin + '/de/' + path;
    document.getElementById('english').href = location.origin + '/' + path;
</script>

