<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs
      ================================================== -->
    <meta charset="utf-8">
    <title>About {{option('name')}}</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
      ================================================== -->

    <link rel="stylesheet" href="{{asset('frontend/rezyme/stylesheets/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/rezyme/stylesheets/layout.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/rezyme/stylesheets/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/rezyme/bootstrap/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/rezyme/image_gallery/css/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/rezyme/image_gallery/css/styles.css')}}">

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('frontend/rezyme/bootstrap/js/bootstrap.min.js')}}"></script>



    <!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/rezyme/stylesheets/ie7.css')}}">
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Favicons
        ================================================== -->
    <link rel="shortcut icon" href="{{asset('frontend/rezyme/img/favicon.png')}}">



</head>
<body>

<!-- Primary Page Layout
	================================================== -->
<!-- Start  Mobile & Tab Header-->
<div class="rzm_mobile_header col-sm-12 col-xs-12 hidden-lg hidden-md">
    <div class="mob_nav  navbar navbar-inverse navbar-fixed-top" id="slide-nav">

        <div class="navbar-header">
            <a class="navbar-toggle"></a>
        </div>

        <div id="slidemenu" class="navbar-default navbar-inverse">
            <ul class="nav navbar-nav primary">

                <li><a href="#home">About </a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#client">Clients</a></li>
                <li><a href="#testimonial">Testimonial</a></li>
                <li><a class="contact-form" href="#contact">Contact</a></li>

            </ul>
        </div>
    </div>
</div>

<!-- End  Mobile & Tab Header-->
<!-- Start outside-header -->
<div class="rzm_outside-header" id="home">


</div>
<!-- End outside-header -->
<!-- Start Outside Main -->

<div class="outside-main" id="page-content">

    <!-- Start Main Container -->
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 rzm_profile_nav">
                <div class="sticky">
                    <div class="logo">
                        <img src="{{asset('uploads/images/'. option('my_image'))}}" alt="profile_photo" class="img-responsive img-circle">
                    </div>
                    <!-- Start primary navigation -->
                    <div class="rzm_main_menu hidden-sm hidden-xs">
                        <ul class="primary">

                            <li class="first"><a href="#home">About Me</a></li>
                            <li><a href="#portfolio">About My Interests</a></li>
                            <li><a href="#experience">Contact</a></li>
                            <li><a href="#home" class="go_to_top">Top <i class="fa fa-arrow-up" aria-hidden="true"></i></a></li>
                        </ul>

                    </div>
                    <!-- End Primary navigation -->
                </div>

            </div>

            <div class="clearfix"></div>
            <!-- Start Profile Section -->
            <section class="col-md-9 col-sm-12 col-xs-12 col-md-offset-3 first profile rez_about">
                <div class="rez_top_title">
                    <h1>Hi, My Name is {{option('first_name')}} {{option('last_name')}}</h1>
                </div>
                <h1 class="title">About Me</h1>
                <!-- Start About section -->
                <div class="col-md-12 col-sm-12 col-xs-12  omega  about">
                    <p class="about_info">{{option('about_me')}}</p>
                </div>


                <h1 class="title">About My Interests</h1>
                <!-- Start About section -->
                <div class="col-md-12 col-sm-12 col-xs-12  omega  about">
                    <p class="about_info">{{option('about_my_interests')}}</p>
                </div>

                <!-- End About -->

                <div class="clear">
                </div>

            </section>
            <!-- End About section -->

            <!-- Start Contact section -->
            <section class="col-md-9 col-sm-12 col-xs-12 col-md-offset-3 rzm_contact" id="contact">
                <h1 class="title">Contact</h1>
                <div class="row">
                    <div class="col-md-6 col-xs-12 input-group">
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input disabled value="{{option('first_name')}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 input-group">
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input disabled value="{{option('last_name')}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 input-group">
                        <div class="form-group">
                            <label for="">Email Adress</label>
                            <input disabled value="{{option('email')}}"  class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 input-group">
                        <div class="form-group">
                            <label for="">Phone Number</label>
                            <input disabled value="{{option('phone_number')}}"  class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12 input-group">
                        <div class="form-group">
                            <label for="">Adress</label>
                            <input disabled value="{{option('address')}}"  class="form-control">
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Contact section -->

        </div>
    </div>
    <!-- End Main Container-->

</div>
<!-- End Outside Main-->

<!-- Start footer section -->
<section class="col-md-12 col-sm-12 col-xs-12 rzm_footer container-fluid">
    <div class="container">
        <h4>Find Me on</h4>
        <div class="rez_footer_social">

            <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-behance" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-dribbble" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>

        </div>
        <p>© All the works in my portfolio is my property, Please do not use them without my permission.</p>
    </div>
</section>
<!-- End footer section -->
<!-- JS
	================================================== -->

<script src="{{asset('frontend/rezyme/javascripts/jquery.tipsy.js')}}"></script>

<script src="{{asset('frontend/rezyme/javascripts/jquery.scrollTo-min.js')}}"></script>
<script src="{{asset('frontend/rezyme/javascripts/jquery.localscroll-min.js')}}"></script>
<script  src="{{asset('frontend/rezyme/javascripts/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('frontend/rezyme/javascripts/script.js')}}"></script>

<!--contact form script starts-->
<script src="{{asset('frontend/rezyme/contact.js')}}"></script>
<script src="{{asset('frontend/rezyme/javascripts/jquery.validate.js')}}" type="text/javascript"></script>

<script src="{{asset('frontend/rezyme/image_gallery/js/isotope.min.js')}}"></script>
<script src="{{asset('frontend/rezyme/image_gallery/js/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('frontend/rezyme/image_gallery/js/main.js')}}"></script>



<!-- End Document
================================================== -->
</body>


</html>
