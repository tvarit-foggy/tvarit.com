<style>
.lds-ripple {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
  top: 50%;
  left: 50%;
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

</style>    

<!-- Paste this code after body tag -->
<div class="fadeMe"><div class="lds-ripple"><div></div><div></div></div></div></div>

	<!-- Ends -->
<div class="main-menu fixed-menu sticky-top sticky">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand bold uppr" href=".">
                <img src="img/logo.png" class="img-fluid">
            </a>

            <a href="javascript://" class="menu-togglebar">
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
                                            <a href="achive_more" class="sub-Link">
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
                        <a class="nav-link" href="ai-platform">AI Platform</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">AI Consulting</a>
                        <div class="submenu-div">
                            <div class="row">
                                <div class="col">
                                    <div class="menuQuote">
                                          <div class="textBig">AI Consulting<span class="red">.</span></div>
                                        <!-- <p class="text-normal"> </p> -->
                                    </div>
                                </div>
                                <div class="col">
                                    <ul class="ul-sub-menu">
                                    <li>
                                            <a href="ai-consulting" class="sub-Link">AI Consulting</a>
                                        </li>
                                        <li>
                                            <a href="ai_academy" class="sub-Link">AI and Data Academy</a>
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
                                                    <a href="ai_for_manufacturing" class="sub-Link">AI for
                                                        Manufacturing</a>
                                                </li>
                                                <li>
                                                    <a href="ai_as_a_product" class="sub-Link">AI as a
                                                        Product </a>
                                                </li>
                                            </ul>
                                        </li>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
             <!------------------------sticky contact button start --------------------->
<div class="sticky-contact-bar">
<a href="contact" target="_blank" class="sticky-contact" > <img src="img/sticky_contact.png" class="img-fluid" onerror='this.style.display = "none"' alt=""></a>    
<!-- <a href="../contact" target="_blank" class="sticky-contact"> <img src="../img/sticky_contact.png" class="img-fluid" onerror='this.style.display = "none"' alt=""></a>     -->
</div>
<!------------------------sticky contact button end --------------------->
