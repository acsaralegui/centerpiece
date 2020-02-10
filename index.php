<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="assets/img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
  <title>Centerpiece</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/rubick.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->

    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
    <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="assets/css/fonts/Rubik-Fonts.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:800i&display=swap" rel="stylesheet">
    
</head>

<body>

<nav class="navbar navbar-default navbar-transparent navbar-fixed-top navbar-burger" role="navigation">
    <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
    
    <div class="container">
    <div class="navbar-header">
   
        <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar bar1"></span>
            <span class="icon-bar bar2"></span>
            <span class="icon-bar bar3"></span>
        </button>
        <a href="https://www.centerpiece.life/" class="navbar-brand">
          <img width="200" height="" src="cp-logo-hor-white-orange.png" alt=""/>
        </a>
    </div>


    <div class="collapse navbar-collapse" >
      <ul class="nav navbar-nav navbar-right navbar-uppercase">
            <li class="social-links">
                <a href="#"> 
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="https://www.linkedin.com/company/centerpiece-life/"> 
                    <i class="fa fa-linkedin"></i>
                </a>
                <a href="#"> 
                    
                </a>
            </li>
            <li>
                <a href="" data-scroll="true" data-id="#whoWeAre"> 
                    Mission + Vision
                </a>
            </li>
            <li>
                <a href="" data-scroll="true" data-id="#workflow"> 
                    Business Model
                </a>
            </li>
            <li>
                <a href="" data-scroll="true" data-id="#projects">
                    Contract Manufacturing
                </a>
            </li>
            <li>
                <a href="" data-scroll="true" data-id="#Location"> 
                    Location
                </a>
            </li>
            <li>
                <a href="" data-scroll="true" data-id="#team"> 
                    Team
                </a>
            </li>
             <li>
                <a href="" data-scroll="true" data-id="#catalog"> 
                    Component Catalog
                </a>
            </li>
            <li>
                <a href="" data-scroll="true" data-id="#contact"> 
                    Contact us
                </a>
            </li>
       </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>

  
<div class="wrapper">
    <div class="section section-header">
        <div class="parallax pattern-image"> 
           <img src="assets/img/cp-web20-bkgd-home.jpg"/>
            <div class="container"> 
                 <div class="content">
                    <p><span> </span></p>
                    <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
 
                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
                    <div class="a"><h2>Contract Manufacturing<br>and<br>EO Sterilization</h2></div>
                 
                    <div class="separator-container">
                      <div class="separator line-separator"><img width="20" height="20" src="assets/img/cp-logo-mark-white.png"/></div>
                    </div>
                    <h5>The <font size="6" face="EB Garamond" color="#FB5817">operational centerpiece</font> of your medical device business</h5>
                    
                    <a class="btn btn-primary btn-lg" href="" data-scroll="true" data-id="#contact" role="button">CONTACT US</a>
                  </div> 
                  <a href="" data-scroll="true" data-id="#whoWeAre" class="scroll-arrow hidden-xs hidden-sm"><i class="fa fa-angle-down"></i>
                  </a>          
            </div>
        </div>
    </div>
    
    <div class="section section-we-are-1" id="whoWeAre">
        <div class="text-area" style="background-image: url('./assets/img/cp-web20-bkgd-mv.jpg')">
            <div class="container">
                <div class="row">
                    <div class="title add-animation" id="animationTest">
                        <h2><font size="10" face="EB Garamond">Misson + Vision</font></h2>
                        <div class="separator-container">
                      <div class="separator line-separator"><img width="20" height="20" src="assets/img/cp-logo-mark-color.svg"/></div>
                    </div>
                        <div class="b"><p class="large"><font>
                            Accelerating product innovation and commercialization by offering linked services - from product design through the distribution of sterile produce.<br><br>To become the <font face="EB Garamond" color="3966EB">operational centerpiece</font> of tomorrow’s medical device companies.</font>
                        </p></div>       
                    </div>
                </div>          
            </div>
        </div>
        <div class="parallax pattern-image">
            <img class="parallax-img" src="assets/img/rubik_background5.jpeg"/>
        </div>       
    </div>
    

    <div class="section section-we-do-2" id="workflow">
        <div class="container">
            <div class="row">
               <div class="title add-animation">  
                   <h2><font size="10" face="EB Garamond">Our Business Model</font></h2>
                   <div class="separator-container">
                      <div class="separator line-separator"><img width="20" height="20" src="assets/img/cp-logo-mark-660.svg"/></div>
                   </div>
                   <p><font size="5" face="EB Garamond">Total Supply Chain Management</font></p>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2 col-sm-6">
                   <div class="card add-animation animation">
                    <img width="80" height="80" class="" src="assets/img/cp-logo-mark-color.svg"/>
                       <div class="icon">
                           
                       </div>
                       <h3>Design Service</h3>
                       <hr>
                       <p>Product & Packaging Development</p>
                   </div>
               </div>
               <div class="col-md-2 col-sm-6">
                   <div class="card add-animation animation">
                      <img width="80" height="80" class="" src="assets/img/cp-logo-mark-color.svg"/>
                       <div class="icon">
                           
                       </div>
                       <h3>plastics & extrusion</h3>
                       <hr>
                       <p>Components: 135 Injection Molding Machines & 20 plastics & Extrusion Lines</p>
                   </div>
               </div>
               <div class="col-md-3 col-sm-6">
                   <div class="card add-animation animation">
                      <img width="80" height="80" class="" src="assets/img/cp-logo-mark-color.svg"/>
                       <div class="icon">
                           
                       </div>
                       <h3>Contract Manufacturing</h3>
                       <hr>
                       <p>Clean Room Assembly / Low Cost</p>
                   </div>
               </div>
               <div class="col-md-2 col-sm-6">
                   <div class="card add-animation animation">
                      <img width="80" height="80" class="" src="assets/img/cp-logo-mark-color.svg"/>
                       <div class="icon">
                           
                       </div>
                       <h3>EO Sterilization</h3>
                       <hr>
                       <p>High & Low Volume</p>
                   </div>
               </div>
               <div class="col-md-2 col-sm-6">
                   <div class="card add-animation animation">
                      <img width="80" height="80" class="" src="assets/img/cp-logo-mark-color.svg"/>
                       <div class="icon">
                           
                       </div>
                       <h3>Distribution</h3>
                       <br>
                       <hr>
                       <p>Finished & sterile Distribution</p>
                   </div>
               </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    
    <div class="section section-we-made-3 section-with-hover" id="projects">
      <div class="text-area" style="background-image: url('./assets/img/cp-web20-bkgd-core.jpg')">
        <div class="container">
              <br>
              <br>
              <br>
                <div class="contract">
                  <div class="col-md-5 col-sm-6">
                    <br>
                   <h2>Contract Manufacturing</h2>
                   <div class="separator-container">
                      <div class="separator line-separator"><img width="20" height="20" src="assets/img/cp-logo-mark-660.svg"/></div>
                   </div>
                   <br>
                   <br>
                    <ul><img width="15" height="15" src="assets/img/cp-logo-mark-660.svg"/> ISO 13485 Certified</ul><br>
                    <br>
                    <ul><img width="15" height="15" src="assets/img/cp-logo-mark-660.svg"/> FDA Registered</ul><br>
                    <br>
                    <ul><img width="15" height="15" src="assets/img/cp-logo-mark-660.svg"/> Clean Room Manufacturing</ul><br>
                    <br>
                    <ul><img width="15" height="15" src="assets/img/cp-logo-mark-660.svg"/> Supply Chain Management</ul><br>
                    <br>
                    <br>
                   <a class="btn btn-primary" href="quality.html">Quality Policy</a> 

               </div>
               <br>
               <br>
            <div class="row">
              <div class="col-md-6 col-sm-4">
                <div class="project add-animation animation-1">
                   <img src="assets/img/rubik_background2.jpg">
                   <img src="assets/img/Airport.jpg">
                </div>
              </div>
            </div>
      </div>
    </div>
      <br>
      <br>

    <div class="section section-we-do-2" id="workflow">
      
        <div class="container">
            <div class="row">
               <div class="title add-animation">  
                   <h2><font size="10" face="EB Garamond">Contract Manufacturing Capabilities</font></h2>
                   <div class="separator-container">
                      <div class="separator line-separator"><img width="20" height="20" src="assets/img/cp-logo-mark-660.svg"/></div>
                   </div>
                   <p><font size="5" face="EB Garamond">Our contract manufacturing offering is a supply chain solution…</font></p>
               </div>
            </div>
            <div class="row">
               <div class="col-md-3 col-sm-6">
                   <div class="card add-animation animation">
                    <div class="panel panel-primary">
                       <div class="panel-heading"><h3>Procurement of Materials<br><hr><span class="fa fa-angle-right"></span></h3>                         
                       </div>
                          <p><li>Supplier Evaluation, Management, and Development</li>
                          <hr>
                          <li>Direct and Indirect Material Purchasing</li>
                          <hr>
                          <Li>Component Receiving and Inspection</Li>
                          <hr>
                          <li>Compliant Import / Export Processes</li>
                          <hr>
                          <li><br><br></li>
                        </p>
                    </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                   <div class="card add-animation animation">
                      <div class="panel panel-primary">
                       <div class="panel-heading"><h3>Finished Device Manufacturing<br><hr><span class="fa fa-angle-right"></span></h3>
                       </div>
                        <p><li><br>Clean Room Manufacturing<br><br></li>
                          <hr>
                          <li>Finished Device and Sterile-Barrier Packaging</li>
                          <hr>
                          <li>Industry-Best Product Launch / Transfers</li>
                          <hr>
                          <li>Installation, Operational, and Process Qualifications</li>
                          <hr>
                          <li><br><br></li>
                         
                        </p>
                      </div>
                   </div>
               </div>
               <div class="col-md-3 col-sm-6">
                   <div class="card add-animation animation">
                    <div class="panel panel-primary">
                       <div class="panel-heading"><h3>In-House ETO Sterilization<br><hr><span class="fa fa-angle-right"></span></h3>
                       </div>
                        <p><li><br>High and Low Volume Chambers</li>
                          <hr>
                          <li>Validation and Cycle Improvement</li>
                          <hr>
                          <li>World-Class Sterilization Equipment</li>
                          <hr>
                          <li>Best-in-Class EO Abatement Processing</li>
                          <hr>
                          <li>Located 20 Minutes from Manufacturing Site</li>

                        </p>
                    </div>
                   </div>
               </div>
               <div class="col-md-3 col-sm-6">
                   <div class="card add-animation animation">
                    <div class="panel panel-primary">
                       <div class="panel-heading"><h3>Order Fulfillment & Distribution<hr><span class="fa fa-angle-right"></span></h3>
                       </div>
                        <p><li><br>Customer and / or Patient Shipping</li>
                          <hr>
                          <li>Truck, Train, Ocean, and / or Air Logistics</li>
                          <hr>
                          <li><br>On-Time Delivery, In-Full</li>
                          <hr>
                          <li>Compliant Import / Export Processes</li>
                          <hr>
                          <li>CTPAT Trucking and Custom Agents</li>
                        </P>
                    </div>
                   </div>
               </div>
              </div>
            </div>
        </div>
    </div>


 

     

    <div class="section section-we-made-3 section-with-hover" id="projects">
      
        <div class="container">
              <br>
              <br>
              <br>
                <div class="contract">
                  <div class="col-md-5 col-sm-6">
                    <br>
                   <h2><img width="40" height="40" src="assets/img/cp-web20-icon-EO.svg"/>Ethylene-Oxide Sterilization Services</h2>
                   <div class="separator-container">
                      <div class="separator line-separator"><img width="20" height="20" src="assets/img/cp-logo-mark-660.svg"/></div>
                   </div>
                    <ul><img width="15" height="15" src="assets/img/cp-logo-mark-660.svg"/> In-House EO Sterilization</ul>
                    <ul><img width="15" height="15" src="assets/img/cp-logo-mark-660.svg"/> High and Low Volume Chambers</ul>
                    <ul><img width="15" height="15" src="assets/img/cp-logo-mark-660.svg"/> Validation and Cycle Improvement Capability</ul>
                    <ul><img width="15" height="15" src="assets/img/cp-logo-mark-660.svg"/> World-Class Sterilization Equipment</ul>
                    <ul><img width="15" height="15" src="assets/img/cp-logo-mark-660.svg"/> Best-in-Class EO Abatement Processing</ul>
                    <br>
                    <h5> Coming soon</h5>
                    <br>
                    <a class="btn btn-primary" href="" data-scroll="true" data-id="#contact" role="button">CONTACT US</a>
               </div>
               <br>
               <br>
            <div class="row">
              <div class="col-md-6 col-sm-4">
                <div class="project add-animation animation-1">
                   <img src="assets/img/Sterilization.jpg">
                </div>
              </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>

      <div class="section section-we-made-3 section-with-hover" id="catalog">
       
        <div class="container">
            <div class="text-area">
                 <div class="title add-animation">  
                   <h2>Component Catalog – OTS Components</h2>
                   <div class="separator-container">
                      <div class="separator line-separator"><img width="20" height="20" src="assets/img/cp-logo-mark-660.svg"/></div>
                   </div>
                    <div class="center"><ul>135 Injection Molding Machines in Clean Room</ul>
                    <ul>20 Extrusion Lines in Clean Room</ul>
                    <ul>Hundreds of OTS Components Available</ul></div>
              

               </div> 
            </div>

            <div class="row">
              <div class="col-lg-3 col-md-5">
                <div class="project add-animation animation-1">
                   <img src="assets/img/bags.jpg">
                   <div class="over-area over-area-sm" onClick="" data-target="project_1">
                      <div class="content">
                        <h4>Bags</h4>
                          <p></p>
                      </div>
                       
                    </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-5">
                <div class="project add-animation animation-1">
                   <img src="assets/img/caps.jpg">
                   <div class="over-area over-area-sm" onClick="" data-target="project_1">
                      <div class="content">
                        <h4>Caps</h4>
                          <p></p>
                      </div>
                       
                    </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-5">
                <div class="project add-animation animation-2">
                    <img src="assets/img/chambers.jpg">
                    <div class="over-area over-area-sm" onClick="" data-target="project_2">
                      <div class="content">
                          <h4>Chambers</h4>
                         <p></p>
                      </div>
                      
                    </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-5">
                <div class="project add-animation animation-2">
                    <img src="assets/img/connectors.jpg">
                    <div class="over-area over-area-sm" onClick="" data-target="project_2">
                      <div class="content">
                          <h4>Connectors</h4>
                         <p></p>
                      </div>
                      
                    </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-5">
                <div class="project add-animation animation-2">
                    <img src="assets/img/spikes.jpg">
                    <div class="over-area over-area-sm" onClick="" data-target="project_2">
                      <div class="content">
                          <h4>Spikes</h4>
                         <p></p>
                      </div>
                      
                    </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-5">
                <div class="project add-animation animation-2">
                    <img src="assets/img/stopcocks.jpg">
                    <div class="over-area over-area-sm" onClick="" data-target="project_2">
                      <div class="content">
                          <h4>Stopcocks</h4>
                         <p></p>
                      </div>
                      
                    </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-5">
                <div class="project add-animation animation-2">
                    <img src="assets/img/tubing.jpg">
                    <div class="over-area over-area-sm" onClick="" data-target="project_2">
                      <div class="content">
                          <h4>Tubing</h4>
                         <p></p>
                      </div>
                     
                    </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-5">
                   <div class="project add-animation animation-3">
                        <img src="assets/img/valves.jpg">
                        <div class="over-area over-area-sm" onClick="" data-target="project_3">
                          <div class="content">
                              <h4>Valves</h4>
                              <p></p>
                          </div> 
                        </div>
                    </div>
                </div>                
              </div>
             <h3><center>For more information, email <font face="EB Garamond" color="#3966EB"><a href="mailto:info@centerpiece.life">info@centerpiece.life</a> </font></center></h3>
        </div>
    </div>
    <br>
    <br>
    <br>
      
    
    <div class="section section-we-made-3 section-with-hover">
      <div class="centerpiece img">
     
        <img class="baja" src="assets/img/baja.jpg">
      </div>
    <div class="container" id="Location">
            
                <div class="location">
                  <div class="col-md-5 col-sm-6">
                    <br>
                   <h2><center>About Rosarito, Baja California</center></h2>
                   <div class="separator-container">
                      <div class="separator line-separator"><img width="20" height="20" src="assets/img/cp-logo-mark-660.svg"/></div>
                   </div>
                   <ul><img width="15" height="15" src="assets/img/cp-logo-mark-660.svg"/>Coastal Resort City in Baja California</ul><br>
                    <ul><img width="15" height="15" src="assets/img/cp-logo-mark-660.svg"/> Located 10 Miles South of the US / Mexico Border</ul><br>
                    <ul><img width="15" height="15" src="assets/img/cp-logo-mark-660.svg"/> 35 Miles from the San Diego Airport</ul><br>
                    <ul><img width="15" height="15" src="assets/img/cp-logo-mark-660.svg"/> Manufacturing Labor Turnover < 2%</ul><br>
                    <br>

               </div>
               <br>
               <br>
            <div class="row">
              <div class="col-md-6 col-sm-4">
                <div class="project add-animation animation-1">
                   <img src="assets/img/location.jpg">
                </div>
              </div>
            </div>
      </div>
    </div>
      <br>
      <br>
        

    
     <div class="section section-team-2" id="team">
      <div class="centerpiece img">
        <img class="baja" src="assets/img/partner.jpg">
      </div>
       <div class="container">        
         <div class="text-area">
             <div class="title add-animation"> 
             <br>
             <br>
             <br> 
               <h2>ABOUT US / OUR TEAM</h2>
               <div class="separator-container">
                  <div class="separator line-separator"><img width="20" height="20" src="assets/img/cp-logo-mark-660.svg"/></div>
               </div>
               
           </div>
        </div>
      </div>
        <div class="team">
          <div class="row">
             <div class="col-md-3 col-sm-6">
              <div class="member add-animation animation-1">
                  <img class="img-circle" src="assets/img/faces/face_1.jpg"/>
                  <div class="description">
                    <h3 class="big-text">Matt Jordan</h3>
                    <p class="small-text">Chief Executive Officer</p>
                  </div>
                  <div class="social-buttons hidden-xs">
                    
                    <a href=""> 
                    <i class=""></i>
                </a>
                  </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-6">
               <div class="member add-animation animation-2">
                  <img class="img-circle" src="assets/img/faces/face_1.jpg"/>
                  <div class="description">
                    <h3 class="big-text">Derek Dunlap</h3>
                    <p class="small-text">Chief Financial Officer</p>
                 </div>
                 <div class="social-buttons hidden-xs">
                  
                    <a href=""> 
                    <i class=""></i>
                 </div>
              </div>
            </div>
             <div class="col-md-3 col-sm-6">
               <div class="member add-animation animation-3">
                  <img class="img-circle" src="assets/img/faces/face_1.jpg"/>
                  <div class="description">
                    <h3 class="big-text">Fransico Beltran</h3>
                    <p class="small-text">General Manager, Manufacturing</p>
                 </div>
                 <div class="social-buttons hidden-xs">
                    
                    <a href=""> 
                    <i class=""></i>
                 </div>
              </div>
            </div>

             <div class="col-md-3 col-sm-6">
               <div class="member add-animation animation-4">
                  <img class="img-circle" src="assets/img/faces/face_1.jpg"/>
                  <div class="description">
                    <h3 class="big-text">Victor Saralegui</h3>
                    <p class="small-text">Technical Director, Sterilization</p>
                 </div>
                 <div class="social-buttons hidden-xs">
                    
                    <a href=""> 
                    <i class=""></i>
                 </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="member add-animation animation-1">
                  <img class="img-circle" src="assets/img/faces/face_1.jpg"/>
                  <div class="description">
                    <h3 class="big-text">Rich Borror</h3>
                    <p class="small-text">Advisor</p>
                  </div>
                  <div class="social-buttons hidden-xs">
                    
                    <a href=""> 
                      <i class=""></i>
                    </a>
                  </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="member add-animation animation-1">
                  <img class="img-circle" src="assets/img/faces/face_1.jpg"/>
                  <div class="description">
                    <h3 class="big-text">Tom Prentice</h3>
                    <p class="small-text">Advisor</p>
                  </div>
                  <div class="social-buttons hidden-xs">
                    
                    <a href=""> 
                    <i class=""></i>
                </a>
                  </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="member add-animation animation-1">
                  <img class="img-circle" src="assets/img/faces/face_1.jpg"/>
                  <div class="description">
                    <h3 class="big-text">Gerardo De la Concha</h3>
                    <p class="small-text">Advisor</p>
                  </div>
                  <div class="social-buttons hidden-xs">
                    
                    <a href=""> 
                    <i class=""></i>
                </a>
                  </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="member add-animation animation-1">
                  <img class="img-circle" src="assets/img/faces/face_1.jpg"/>
                  <div class="description">
                    <h3 class="big-text">Karl Im</h3>
                    <p class="small-text">Advisor</p>
                  </div>
                  <div class="social-buttons hidden-xs">
                    
                    <a href=""> 
                    <i class=""></i>
                </a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    
    <div class="section section-numbers-2" id="numbers">
        <div class="parallax filter filter-color-1">
            <img src="assets/img/design.jpg">
        </div>
        <div class="container">
            <div class="text-area">
                <div class="title">
                    <h1><font size="30" color="grey">Design & Development Services</font></h1>
                    <div class="separator-container">
                      
                    </div>
                    
                </div>
            </div>
        
            <div class="clearfix"></div>
            <div class="row">
               <div class="col-md-4 col-sm-4">
                   <div class="card card-plain">
                      
                       <div class="number">
                        
                       </div>
                   </div>
               </div>
               <div class="col-md-4 col-sm-4">
                   <div class="card card-plain">
                       
                       <div class="number" >
                        
                       </div>
                   </div>
               </div>
               <div class="col-md-4 col-sm-4">
                   <div class="card card-plain">
                       <h3><font color="grey">…for product & sterile barrier packaging (and of course, sterilization validations)</font></h3>
                       
                       <div class="number" >
                          
                       </div>
                   </div>
               </div> 
            </div>          
        </div>
    </div>

    <div class="section section- contact" id="contact">
      <div class="container">
        <div class="row">
            <div class="center">
                <div class="card mt-5">
                    <div class="card-title">
                        <h2 class="text-center py-2"> Contact Us</h2>
                          <p>You don’t need a contract manufacturing partner. You need a supply chain solution.</p>
                        <hr>
                        <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
 
                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
                    </div>
                    <div class="card-body">
                        <form action="process.php" method="post">
                            <input type="text" name="UName" placeholder="Full Name" class="form-control mb-2">
                            <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                            <input type="text" name="Subject" placeholder="Company" class="form-control mb-2">
                            <textarea name="msg" class="form-control mb-2" placeholder="Write The Message"></textarea>
                            <button class="btn btn-primary btn-lg" name="btn-send"> Send </button>
                        </form>
                    </div>
                </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>

    <footer class="footer footer-big footer-color-black" id="footerTrigger">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-3">
                <div class="info add-animation-stopped animation-1">
                    <h5 class="title">Company</h5>
                    <nav>
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#" data-scroll="true" data-id="#Location">
                                   Location
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    
                                </a>
                            </li>
                            <li>
                                <a href="#" data-scroll="true" data-id="#team">
                                    About Us
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                </div>

                <div class="col-md-3 col-md-offset-1 col-sm-3">
                <div class="info add-animation-stopped animation-2">
                    <h5 class="title"> Contact us</h5>
                    <nav>
                        <ul>
                            <li>
                                <a href="#" data-scroll="true" data-id="#contact">
                                   Email: info@centerpiece.life 
                                </a>
                            </li>
                            <li>
                                <a href="#">phone:
                                   (858) 345-6146
                                </a>
                            </li>
                            <li>
                                <a href="#">Address: <li>440 Stevens Ave, Suite 200</li><li>Solana Beach, CA 92075</li>
                                    
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                   
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                </div>
                
                <div class="col-md-3 col-sm-3">
                <div  class="info add-animation-stopped animation-3">
                  <h5 class="title"> Products</h5>
                    
                    <nav>
                        <ul>
                            <li>
                               <a href="quality.html">
                                  Quality Policy
                                  
                                   
                                
                               </a>
                            </li>
                            <li>
                                <a href="#" data-scroll="true" data-id="#catalog">
                                  Catalog    
                                </a>
                            </li>
                          
                        </ul>
                    </nav>
                </div>
                </div>

                <div class="col-md-2 col-md-offset-1 col-sm-3">
                <div  class="info add-animation-stopped animation-4"> 
                    <h5 class="title">Follow us on</h5>
                    <nav>
                        <ul>
                            <li>
                                <a href="#" class="btn btn-social btn-facebook btn-simple">
                                    
                                </a>
                            </li>
                             <li>
                                 <a href="https://www.linkedin.com/company/centerpiece-life/" class="btn btn-social btn-linkedin btn-simple">
                                    <i class="fa fa-linkedin"></i> Linkedin
                                </a>
                            </li>
                            <li>
                               <a href="#" class="btn btn-social btn-twitter btn-simple">
                                    
                                </a>
                            </li>
                            <li>
                                 <a href="#" class="btn btn-social btn-reddit btn-simple">
                                    
                                </a>
                            </li>
                           
                        </ul>
                    </nav>
                </div>
                </div>
            </div>
            <hr>
            <div class="copyright">
                © 2020 CENTERPIECE
            </div>
        </div>
    </footer>
</div> <!-- end wrapper -->

</body>
  <!--   core js files    -->
  <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
  <script src="assets/js/bootstrap.js" type="text/javascript"></script>
  
  <!--   file for adding vertical points where we activate the elements animation   -->
  <script type="text/javascript" src="assets/js/jquery.waypoints.min.js"></script>

  <!--  js library for devices recognition -->
  <script type="text/javascript" src="assets/js/modernizr.js"></script>

  <!--  script for google maps   -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    
  <!--   file where we handle all the script from the Rubik page   -->
  <script type="text/javascript" src="assets/js/rubick.js"></script>