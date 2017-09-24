<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Responsive website template for products</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,300italic,400italic,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Noto+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/bootstrap/css/bootstrap.min.css') }}">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="{{ URL::asset('plugins/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ URL::asset('plugins/flexslider/flexslider.css') }}">
    
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
</head> 

<body data-spy="scroll" data-target="#page-nav">   
    <!-- ******HEADER****** --> 
    <header id="header" class="header">  
        <div class="container">      
            <h1 class="logo">
                <a href="index.html"><img src="{{ URL::asset('images/logo.svg') }}" alt=""><span class="text">Q-ARS</span></a>
            </h1><!--//logo-->
            <nav class="main-nav navbar-right" role="navigation">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->
                <div id="navbar-collapse" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active nav-item"><a href="index.html">Home</a></li>
                        <li class="nav-item"><a href="features.html">Features</a></li>
                        <li class="nav-item"><a href="stories.html">Stories</a></li>
                        <li class="nav-item"><a href="pricing.html">Pricing</a></li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">More <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="story-single.html">Customer Story Single</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                                <li><a href="support.html">Support Center</a></li>   
                                <li><a href="career.html">Career</a></li> 
                                <li><a href="job-single.html">Job Single</a></li> 
                                <li><a href="contact.html">Contact</a></li>                    
                            </ul>                            
                        </li><!--//dropdown-->                         
                        <li class="nav-item"><a href="#" class="login-trigger" data-toggle="modal" data-target="#login-modal">Log in</a></li>
                        <li class="nav-item nav-item-cta last"><a class="btn-signup" href="#" data-toggle="modal" data-target="#signup-modal">Sign Up</a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </nav><!--//main-nav-->                     
        </div><!--//container-->
    </header><!--//header-->      
    
    <section class="promo-section section section-on-bg">
        <div class="hero-slider-wrapper">
            <div class="flexslider hero-slider">
                <ul class="slides">
                  <!--   <li class="slide slide-1"></li> -->
                    <li class="slide slide-2"></li>
                  <!--   <li class="slide slide-3"></li> -->
                </ul>
            </div>
            <div class="hero-slider-mask"> <!-- <img src="{{ URL::asset('images/hero/hero-2.jpg') }}"> --></div>
        </div><!--//hero-slider-wrapper--> 
        <div class="container promo-content">                
            <h2 class="headline">Q-ARS<br>The Ultimate Cloud Based Audience Response System</h2>
            <p class="tagline">Next Generation Audience Response!</p>
            <div class="actions">
                <a class="btn btn-cta btn-primary" href="#" data-toggle="modal" data-target="#signup-modal">Start Free Trial</a>  
                <br class="visible-xs-block">
                <a href="#" class="play-trigger" data-toggle="modal" data-target="#modal-video" ><img class="play-icon" src="{{ URL::asset('images/play-icon.svg') }}" alt="">See how it works</a>
            </div>
        </div><!--//container-->
    </section><!--//promo-section-->
    
    <div class="page-nav-space-holder hidden-xs">
        <div id="page-nav-wrapper" class="page-nav-wrapper text-center">
            <div class="container">
                <ul id="page-nav" class="nav page-nav list-inline">
                    <li><a class="scrollto" href="#overview-section">Overview</a></li>
                    <li><a class="scrollto"  href="#features-section">Key Features</a></li>
                    <li><a class="scrollto"  href="#customers-section">Customers</a></li>
                    <li><a class="scrollto"  href="#signup-section">Get Started</a></li>
                    <li><a class="scrollto"  href="#support-section">Support</a></li>
                </ul><!--//page-nav-->
            </div>
        </div><!--//page-nav-wrapper-->
    </div><!--//page-nav-space-holder-->
        
    <section id="overview-section" class="overview-section section">
        <h2 class="section-title">
            A great way to empower your team
        </h2>
        <div class="section-intro">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.
        </div><!--//section-intro-->
        <br>
        <br>
       <!--  <div class="figures-wrapper">
            <div class="container text-center">
                <figure class="macbook-screen"><img class="img-responsive" src="{{ URL::asset('images/macbook-screen.png') }}" alt=""></figure>
                <figure class="ipad-screen"><img class="img-responsive" src="{{ URL::asset('images/ipad-screen.png') }}" alt=""></figure>
                <figure class="iphone-screen"><img class="img-responsive" src="{{ URL::asset('images/iphone-screen.png') }}" alt=""></figure>
                <a href="#" type="button" class="play-icon" data-toggle="modal" data-target="#modal-video"><img src="{{ URL::asset('images/play-icon-md.svg') }}" alt=""></a>
            </div>
        </div> -->
        <!--//figures-wrapper-->
        <div class="benefits-wrapper">
            <div class="container text-center">
                <div class="row">
                    <div class="item col-xs-12 col-sm-4">
                        <div class="item-inner">
                            <img class="item-icon" src="{{ URL::asset('images/icons/clock-white.svg') }}" alt="">
                            <h3 class="item-title">10X Faster Development</h3>
                            <div class="item-desc">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                            </div>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item col-xs-12 col-sm-4">
                        <div class="item-inner">
                            <img class="item-icon" src="{{ URL::asset('images/icons/presenter-white.svg') }}" alt="">
                            <h3 class="item-title">Increase Productivity</h3>
                            <div class="item-desc">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                            </div>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item col-xs-12 col-sm-4">
                        <div class="item-inner">
                            <img class="item-icon" src="{{ URL::asset('images/icons/chat-white.svg') }}" alt="">
                            <h3 class="item-title">Better Collabration</h3>
                            <div class="item-desc">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                            </div>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                </div><!--//row-->
            </div><!--//container-->
        </div><!--//benefits-->
        <!-- <div class="press-wrapper">
            <div class="container">
               <div class="logos row">
                   <div class="logo col-xs-6 col-sm-3"><img class="img-responsive" src="{{ URL::asset('images/logos/logo-1.svg') }}" alt=""></div>
                   <div class="logo col-xs-6 col-sm-3"><img class="img-responsive" src="{{ URL::asset('images/logos/logo-2.svg') }}" alt=""></div>
                   <div class="logo col-xs-6 col-sm-3"><img class="img-responsive" src="{{ URL::asset('images/logos/logo-3.svg') }}" alt=""></div>
                   <div class="logo col-xs-6 col-sm-3"><img class="img-responsive" src="{{ URL::asset('images/logos/logo-4.svg') }}" alt=""></div>
               </div> 
            </div>
        </div> -->
    </section>
    <!--//overview-section-->
    
    <section id="features-section" class="features-section section">
        <h2 class="section-title">
            Key Features
        </h2>
        <div class="container">
            <div class="row">
                <div class="features-content-wrapper col-xs-12 col-sm-7 com-md-7">
                    <div class="intro">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec
                    </div><!--//intro-->
                    <ul class="feature-list list-unstyled">
                        <li><img class="tick-icon" src="{{ URL::asset('images/tick.svg') }}" alt=""> Feature one lorem ipsum dolor sit amet.</li>
                        <li><img class="tick-icon" src="{{ URL::asset('images/tick.svg') }}" alt=""> Feature two lorem ipsum dolor sit amet.</li>
                        <li><img class="tick-icon" src="{{ URL::asset('images/tick.svg') }}" alt=""> Feature three lorem ipsum dolor sit amet.</li>
                        <li><img class="tick-icon" src="{{ URL::asset('images/tick.svg') }}" alt=""> Feature four lorem ipsum dolor sit amet.</li>
                        <li><img class="tick-icon" src="{{ URL::asset('images/tick.svg') }}" alt=""> Feature five lorem ipsum dolor sit amet.</li>
                        <li><img class="tick-icon" src="{{ URL::asset('images/tick.svg') }}" alt=""> Feature six lorem ipsum dolor sit amet.</li>
                    </ul><!--//feature-list-->
                    
                    <div id="reviews-carousel" class="reviews-carousel carousel slide" data-ride="carousel">
                        <!--//wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <blockquote class="review center-block">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    <p>A great way to Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                </blockquote><!--//review-->
                                <div class="source">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div><!--//rating-->
                                    <img class="profile" src="{{ URL::asset('images/users/user-1.png') }}" alt="" />
                                    <div class="name">Theresa Wood, Product Hunt</div>
                                </div><!--//source-->    
                            </div><!--//item-->
                            
                            <div class="item">
                                <blockquote class="review center-block">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    <p>A great way to Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                </blockquote><!--//review-->
                                <div class="source">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div><!--//rating-->
                                    <img class="profile" src="{{ URL::asset('images/users/user-2.png') }}" alt="" />
                                    <div class="name">Rob Kim, Mashable</div>
                                </div><!--//source-->    
                            </div><!--//item-->
                            
                            <div class="item">
                                <blockquote class="review center-block">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    <p>A great way to Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                </blockquote><!--//review-->
                                <div class="source">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div><!--//rating-->
                                    <img class="profile" src="{{ URL::asset('images/users/user-3.png') }}" alt="" />
                                    <div class="name">Kevin Howell, Wired</div>
                                </div><!--//source-->    
                            </div><!--//item-->
                            
                        </div><!--//carousel-inner-->
                        
                        <!--//Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#reviews-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#reviews-carousel" data-slide-to="1"></li>
                            <li data-target="#reviews-carousel" data-slide-to="2"></li>
                        </ol>
                        
                    </div><!--//reviews-carousel-->
                </div><!--//features-content-wrapper-->
            </div><!--//row-->
        </div><!--//container-->
        
        <div class="features-figure-wrapper">
            <img class="img-responsive" src="{{ URL::asset('images/imac-screen.png') }}" alt="">
        </div><!--//features-figure-wrapper-->
        
        <!-- <div class="action-wrapper text-center">
            <a href="features.html" class="btn btn-secondary">View all features</a>
        </div> -->
        
    </section><!--//features-section-->
    
   <!--  <section id="customers-section" class="customers-section section">
        <h2 class="section-title">Trusted by smart businesses</h2>
        <div class="section-intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus elementum felis at lacus blandit egestas. Donec consectetur mollis leo, et pharetra massa eleifend mollis.</div>
        <div class="container">
            <div class="stories-wrapper row">
                <div class="item item-1 col-xs-12 col-md-6">
                    <div class="item-inner text-center">
                        <div class="item-mask"></div>
                        <div class="item-content">
                            <h3 class="content-title">Shipping product <br>at an amazing speed</h3>
                            <div class="content-desc">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit aenean commodo ligula eget dolor aenean massa. Cum sociis natoque penatibus.</p>
                            </div>
                            <a class="item-link" href="#"></a>
                        </div>
                    </div>
                </div>
                <div class="item item-2 col-xs-12 col-md-6">
                    <div class="item-inner text-center">
                        <div class="item-mask"></div>
                        <div class="item-content">
                            <h3 class="content-title">Better collaboration <br>with remote teams</h3>
                            <div class="content-desc">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit aenean commodo ligula eget dolor aenean massa. Cum sociis natoque penatibus.</p>
                            </div>
                            <a class="item-link" href="#"></a>
                        </div>
                    </div>
                </div>
                <div class="item item-3 col-xs-12 col-md-6">
                    <div class="item-inner text-center">
                        <div class="item-mask"></div>
                        <div class="item-content">
                            <h3 class="content-title">Put UX at the heart of  <br>our SaaS business</h3>
                            <div class="content-desc">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit aenean commodo ligula eget dolor aenean massa. Cum sociis natoque penatibus.</p>
                            </div>
                            <a class="item-link" href="#"></a>
                        </div>
                    </div>
                </div>
                <div class="item item-4 col-xs-12 col-md-6">
                    <div class="item-inner text-center">
                        <div class="item-mask"></div>
                        <div class="item-content">
                            <h3 class="content-title">A new way to app <br>development</h3>
                            <div class="content-desc">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit aenean commodo ligula eget dolor aenean massa. Cum sociis natoque penatibus.</p>
                            </div>
                            <a class="item-link" href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="action-wrapper text-center">
                <a class="btn btn-secondary" href="stories.html">All Customer Stories</a>
            </div>
        </div>
    </section> -->
    <!--//customers-section-->
    
    <section id="signup-section" class="signup-section section">
        <div class="section-inner">
            <div class="container text-center">
                <div class="counter-container">
                </div><!--//counter-container-->
                
                <h2 class="counter-desc">Customers Worldwide</h2>
                
                <div class="form-wrapper">
                    <h2 class="form-title">Start Your Free Trial Today</h2>
                    <div class="form-box">
                        <h3 class="form-heading">30 Day Free Trial</h3>
                        <div class="form-desc">Sign up now, it only takes 3 minutes</div>
                        <ul class="social-buttons list-unstyled">
                            <li><a href="#" class="btn btn-social btn-google"><i class="fa fa-google" aria-hidden="true"></i><span class="btn-text">Sign up with Google</span></a></li>
                            <li><a href="#" class="btn btn-social btn-facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span class="btn-text">Sign up with Facebook</span></a></li>
                        </ul><!--//social-buttons-->
                        <div class="divider">
                            <span class="or-text">OR</span>
                        </div><!--//divider-->
                        <form class="signup-form">
                            <div class="row">
                                <div class="form-group col-xs-12 col-sm-6">
                                    <label for="firstname" class="sr-only">First Name</label>
                                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                                </div><!--//form-group-->
                                <div class="form-group col-xs-12 col-sm-6">
                                    <label for="lastname" class="sr-only">Last Name</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                                </div><!--//form-group-->
                                <div class="form-group col-xs-12 col-sm-6">
                                    <label for="firstname" class="sr-only">Email Address</label>
                                    <input type="email" class="form-control" id="emailaddress" name="emailaddress" placeholder="Email Address">
                                </div><!--//form-group-->
                                <div class="form-group col-xs-12 col-sm-6">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Create a Password">
                                </div><!--//form-group-->
                                
                            </div><!--//row-->
                            <div class="legal-note">By signing up, you agree to our terms of services and privacy policy.</div>
                            
                            <button type="submit" class="btn btn-primary btn-cta">Start Your Free Trial</button>
                            <div class="alter-login">
                                Already have an account? <a class="login-link" href="#" data-toggle="modal" data-target="#login-modal">Log in</a>
                            </div>
                        </form><!--//form-->
                    </div><!--//form-box-->
                </div><!--//form-wrapper-->
                
            </div><!--//container-->
        </div><!--//section-inner-->
    </section><!--//signup-section-->
    
    <section id="support-section" class="support-section section text-center">
        <h2 class="section-title">24/7 Customer Support</h2>
        <div class="section-intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes</div>
        <a class="btn btn-secondary" href="support.html">Our Support Center</a>
        <div class="team-figure">
            <img class="img-responsive support-team" src="{{ URL::asset('images/team.png') }}" alt="">
        </div><!--//team-figure-->
    </section><!--//support-section-->
    
    <section class="apps-section section text-center">
        <h2 class="section-title">Download Our Apps</h2>
        <div class="container">
            <ul class="apps-list list-inline">
                <li><a class="btn btn-download-app btn-apple-download" href="#"><i class="fa fa-apple" aria-hidden="true"></i> <span class="btn-text"><span class="intro-text">Download on the</span><span class="main-text">App Store</span></span></a></li>
                <li><a class="btn btn-download-app btn-andriod-download" href="#"><i class="fa fa-android" aria-hidden="true"></i> <span class="btn-text"><span class="intro-text">Get it on</span><span class="main-text">Google Play</span></span></a></li>
                <li><a class="btn btn-download-app btn-windows-download" href="#"><i class="fa fa-windows" aria-hidden="true"></i> <span class="btn-text"><span class="intro-text">Download plugin for</span><span class="main-text">Microsoft Power Point</span></span></a></li>
            </ul><!--//apps-list-->
        </div><!--//container-->
    </section><!--//apps-section-->
        
    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col col-xs-6 col-md-3">
                    <div class="footer-col-inner">
                        <h3 class="col-title">About</h3>
                        <ul class="footer-menu list-unstyled">
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Jobs</a> <label class="label label-new">We're hiring</label></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//footer-col-->
                <div class="footer-col col-xs-6 col-md-3">
                    <div class="footer-col-inner">
                        <h3 class="col-title">Product</h3>
                        <ul class="footer-menu list-unstyled">
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Tutorials</a></li>
                            <li><a href="#">Support Center</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Customers</a></li>
                        </ul>
                    </div>
                </div><!--//footer-col-->
                <div class="footer-col col-xs-6 col-md-3">
                    <div class="footer-col-inner">
                        <h3 class="col-title">Useful Links</h3>
                        <ul class="footer-menu list-unstyled">
                            <li><a href="#">Sign up</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Become our partner</a></li>
                            <li><a href="#">FAQs</a></li>
                        </ul>
                    </div>
                </div><!--//footer-col-->
                <div class="footer-col col-xs-6 col-md-3">
                    <div class="footer-col-inner">
                        <h3 class="col-title">Legal</h3>
                        <ul class="footer-menu list-unstyled">
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms of Services</a></li>
                            <li><a href="#">Policies</a></li>
                        </ul>
                    </div>
                </div><!--//footer-col-->
            </div><!--//row-->
            <div class="divider"></div>
            <div class="footer-bottom text-center">
                <ul class="social-media list-inline">
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                    
                </ul>
    
                <small class="copyright">Template Copyright @ <a href="http://themes.3rdwavemedia.com/" target="_blank">3rd Wave Media</a></small> 
            </div>
        </div><!--//container-->
    </footer><!--//footer-->
    
    <!-- Video Modal -->
    <div class="modal modal-video" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 id="videoModalLabel" class="modal-title sr-only">Video Tour</h4>
                </div>
                <div class="modal-body">
                    <div class="video-container embed-responsive embed-responsive-16by9">
                        <iframe id="vimeo-video" src="//player.vimeo.com/video/140875675?color=ffffff&amp;wmode=transparent" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div><!--//video-container-->
                </div><!--//modal-body-->
            </div><!--//modal-content-->
        </div><!--//modal-dialog-->
    </div><!--//modal-->
    
    <!-- Login Modal -->
    <div class="modal modal-auth modal-login" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 id="loginModalLabel" class="modal-title text-center">Log in to your account</h4>
                </div>
                <div class="modal-body">
                    <div class="social-login text-center">                        
                        <ul class="social-buttons list-unstyled">
                            <li><a href="#" class="btn btn-social btn-google btn-block"><i class="fa fa-google" aria-hidden="true"></i><span class="btn-text">Log in with Google</span></a></li>
                            <li><a href="#" class="btn btn-social btn-facebook btn-block"><i class="fa fa-facebook" aria-hidden="true"></i><span class="btn-text">Log in with Facebook</span></a></li>
                        </ul>
                    </div>
                    <div class="divider">
                        <span class="or-text">OR</span>
                    </div>
                    <div class="login-form-container">
                        <form class="login-form">                
                            <div class="form-group email">
                                <i class="material-icons icon">&#xE0BE;</i>
                                <label class="sr-only" for="login-email">Email</label>
                                <input id="login-email" name="login-email" type="email" class="form-control login-email" placeholder="Email">
                            </div><!--//form-group-->
                            <div class="form-group password">
                                <i class="material-icons icon">&#xE897;</i>
                                <label class="sr-only" for="login-password">Password</label>
                                <input id="login-password" name="login-password" type="password" class="form-control login-password" placeholder="Password">
                                <div class="extra">
                                    <div class="checkbox remember">
                                        <label>
                                            <input type="checkbox"> Remember me
                                        </label>
                                    </div><!--//check-box-->
                                    <div class="forgotten-password">
                                        <a href="#" id="resetpass-link" data-toggle="modal" data-target="#resetpass-modal">Forgotten password?</a>
                                    </div>
                                </div><!--//extra-->
                            </div><!--//form-group-->
                            <button type="submit" class="btn btn-cta btn-block btn-primary">Log in</button>
                        </form>
                    </div><!--//login-form-container-->
                    
                    <div class="option-container">
                        <div class="lead-text">Don't have an account?</div> 
                        <a class="signup-link btn btn-ghost-alt" id="signup-link" href="#">Sign Up</a>                    
                    </div><!--//option-container-->
                </div><!--//modal-body-->
                
            </div><!--//modal-content-->
        </div><!--//modal-dialog-->
    </div><!--//modal-->
    
    <!-- Signup Modal -->
    <div class="modal modal-auth modal-signup" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 id="signupModalLabel" class="modal-title text-center">Sign up to start your 30 day free trial!</h4>
                </div>
                <div class="modal-body">
                    <div class="social-login text-center">                        
                        <ul class="social-buttons list-unstyled">
                            <li><a href="#" class="btn btn-social btn-google btn-block"><i class="fa fa-google" aria-hidden="true"></i><span class="btn-text">Sign up with Google</span></a></li>
                            <li><a href="#" class="btn btn-social btn-facebook btn-block"><i class="fa fa-facebook" aria-hidden="true"></i><span class="btn-text">Sign up with Facebook</span></a></li>
                        </ul>
                    </div>
                    <div class="divider">
                        <span class="or-text">OR</span>
                    </div>
                    <div class="login-form-container">
                        <form class="login-form">         
                            <div class="form-group full-name">
                                <i class="material-icons icon">&#xE7FD;</i>
                                <label class="sr-only" for="signup-fullname">Your Full Name</label>
                                <input id="signup-fullname" name="signup-fullname" type="text" class="form-control signup-email" placeholder="Your Full Name">
                            </div><!--//form-group-->       
                            <div class="form-group email">
                                <i class="material-icons icon">&#xE0BE;</i>
                                <label class="sr-only" for="signup-email">Your Email</label>
                                <input id="signup-email" name="signup-email" type="email" class="form-control signup-email" placeholder="Your Email">
                            </div><!--//form-group-->
                            <div class="form-group password">
                                <i class="material-icons icon">&#xE897;</i>
                                <label class="sr-only" for="signup-password">Create a Password</label>
                                <input id="signup-password" name="signup-password" type="password" class="form-control signup-password" placeholder="Create a Password">
                            </div><!--//form-group-->
                            <div class="legal-note">By signing up, you agree to our terms of services and privacy policy.</div>
                            <button type="submit" class="btn btn-block btn-primary btn-cta">Sign up</button>
                            
                        </form>
                    </div><!--//login-form-container-->
                    <div class="option-container">
                        <div class="lead-text">Already have an account?</div> 
                        <a class="login-link btn btn-ghost-alt" id="login-link" href="#">Log in</a>                    
                    </div><!--//option-container-->
                </div><!--//modal-body-->
            </div><!--//modal-content-->
        </div><!--//modal-dialog-->
    </div><!--//modal-->
    
    <!-- Reset Password Modal -->
    <div class="modal modal-auth modal-resetpass" id="resetpass-modal" tabindex="-1" role="dialog" aria-labelledby="resetpassModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 id="resetpassModalLabel" class="modal-title text-center">Forgot your password?</h4>
                </div>
                <div class="modal-body">
                    <div class="resetpass-form-container">
                        <p class="intro">We'll email you a link to a page where you can easily create a new password.</p>
                        <form class="resetpass-form">                
                            <div class="form-group email">
                                <label class="sr-only" for="reg-email">Your Email</label>
                                <input id="reg-email" name="reg-email" type="email" class="form-control login-email" placeholder="Your Email">
                            </div><!--//form-group-->
                            <button type="submit" class="btn btn-block btn-secondary btn-cta">Reset Password</button>
                        </form>
                    </div><!--//login-form-container-->
                    <div class="option-container">
                        <div class="lead-text">I want to <a class="back-to-login-link" id="back-to-login-link" href="#">return to login</a></div>                    
                    </div><!--//option-container-->
                </div><!--//modal-body-->
            </div><!--//modal-content-->
        </div><!--//modal-dialog-->
    </div><!--//modal-->
    
    <!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->  
   <!--  <div id="config-panel" class="config-panel hidden-xs hidden-sm">
        <div class="panel-inner">
            <a id="config-trigger" class="config-trigger config-panel-hide" href="#"><i class="fa fa-cog"></i></a>
            <h5 class="panel-title">Choose Colour</h5>
            <ul id="color-options" class="list-unstyled list-inline">
                <li class="theme-1 active"><a data-style="{{ URL::asset('css/styles.css') }}" href="#"></a></li>
                <li class="theme-2"><a data-style="{{ URL::asset('css/styles-2.css') }}" href="#"></a></li>
                <li class="theme-3"><a data-style="{{ URL::asset('css/styles-3.css') }}" href="#"></a></li>
                <li class="theme-4"><a data-style="{{ URL::asset('css/styles-4.css') }}" href="#"></a></li>     
                <li class="theme-5"><a data-style="{{ URL::asset('css/styles-5.css') }}" href="#"></a></li>    
                <li class="theme-6"><a data-style="{{ URL::asset('css/styles-6.css') }}" href="#"></a></li>             
            </ul>
            <a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
        </div>

    </div> -->
    <!--//configure-panel-->
 
    <!-- Javascript -->          
    <script type="text/javascript" src="{{ URL::asset('plugins/jquery-1.12.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script> 
    <script type="text/javascript" src="{{ URL::asset('plugins/bootstrap-hover-dropdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('plugins/back-to-top.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('plugins/jquery-scrollTo/jquery.scrollTo.min.js') }}"></script>  
    <script type="text/javascript" src="{{ URL::asset('plugins/flexslider/jquery.flexslider-min.js') }}"></script>     
    <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
    
    <!--//Page Specific JS -->
    <script type="text/javascript" src="{{ URL::asset('js/home.js') }}"></script>
    
    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src="{{ URL::asset('js/demo/style-switcher.js') }}"></script>
            
</body>
</html> 

