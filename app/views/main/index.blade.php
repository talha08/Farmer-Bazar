<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 

<html class="no-js"> <!--<![endif]-->
    <head>

       <title>কৃষি বাজার </title>

        <!-- meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        
        <!-- stylesheets -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/style.css">


        <!-- scripts -->
        <script type="text/javascript" src="assets/js/modernizr.custom.97074.js"></script>

    </head>

    <body>

        <div id="home-page">

            <!-- site-navigation start -->  
            <nav id="mainNavigation" class="navbar navbar-dafault main-navigation navbar-fixed-top" role="navigation">
                <div class="container">
                    
                    <div class="navbar-header">
                        
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <!-- navbar logo -->
                        <div class="navbar-brand">
                            <span class="sr-only">কৃষি বাজার</span>
                            <a href="{{ URL::route('main.index') }}">
                                <!-- <img src="assets/img/main_logo.png" class="img-responsive center-block" alt="logo"> -->
                                কৃষি  
                                <br>বাজার
                            </a>
                        </div>
                        <!-- navbar logo -->

                    </div><!-- /.navbar-header -->

                    <!-- nav links -->
                    <div class="collapse navbar-collapse" id="main-nav-collapse">
                        <ul class="nav navbar-nav navbar-right text-uppercase">
                            <li>
                               <a href="{{ URL::route('main.index') }}"><span>মূল পাতা</span></a>
                            </li>

                            <li>
                                <a href="{{ URL::route('main.all') }}"><span>সকল পণ্যদ্রব্য</span></a>
                            </li> <!-- end of /.dropdown -->

                            <li>
                                <a href="#"><span>যোগাযোগ</span></a>
                            </li>
                            <li>
                                <a class="btn-nav" href="{{ URL::route('main.create') }}"><span>রেজিস্ট্রেশন</span></a>
                            </li>
                            <li>
                                <a class="btn-nav" href="{{ URL::route('login') }}"><span>লগ ইন</span></a>
                            </li>
                        </ul>
                    </div><!-- nav links -->
                    
                </div><!-- /.container -->
            </nav>
            <!-- site-navigation end -->


            <!-- header start -->
            <header id="header" class="header-wrapper home-parallax home-fade">
                <div class="header-overlay"></div>
                <div class="header-wrapper-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="welcome-speech">
                                    <h1>কৃষি বাজার - এ আপনাকে স্বাগতম</h1>
                                    {{ Form::open(array('route' => 'search', 'method' => 'post')) }}
                                        <div class="input-group margin-bottom-sm">
                                           
                                             {{ Form::text('contact', '', array('class' => 'form-control',
                                             'type'=>'text' ,'placeholder'=>'কিছু খোঁজার জন্য এখানে লিখুন')) }}

                                            <a href="#" class="input-group-addon">
                                                

                                                  {{ Form::submit('', array('class' => 'fa fa-search')) }}
                                            </a>
                                        </div>
                                    {{ Form::close() }}
                                </div><!-- /.intro -->
                            </div>
                        </div>
                    </div><!-- /.container -->

                </div><!-- /.header-wrapper-inner -->
            </header>
            <!-- /#header -->

            <div class="main-content">

                <!--  begin intro section -->

                <section class="intro bg-light-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="assets/img/about.jpg" class="img-responsive center-block" alt="intro">
                            </div>

                            <div class="col-md-7">
                                <div class="intro-description">
                                    <h2>কৃষি বাজার সম্পর্কে কিছু বিস্তারিত</h2>
                                    <p>
                                        বাংলাদেশের কৃষকদের জন্য এই প্রথম এলো Farmar Bazzar. এখানে তারা নিজেদের উৎপাদিত কৃষিপণ্য সম্পর্কে সাধারণ মানুষকে অবহিত করতে পারবে। 
                                    </p>

                                    <ul class="points">
                                        <li>
                                            <span>
                                                <i class="fa fa-star"></i>
                                            </span>
                                            প্রত্যেক কৃষকদের জন্য থাকছে তাদের নিজেদের আলাদা প্রোফাইল
                                        </li>
                                        <li>
                                            <span>
                                                <i class="fa fa-star"></i>
                                            </span>
                                            কৃষকেরা নিজেদের উৎপাদিত কৃষিদ্রব্য নিজেদের প্রোফাইলে দিতে পারবে
                                        </li>
                                        <li>
                                            <span>
                                                <i class="fa fa-star"></i>
                                            </span>
                                            কৃষিদ্রব্যের দাম সম্পর্কে সবাই অবগত হতে পারবে।
                                        </li>
                                        <li>
                                            <span>
                                                <i class="fa fa-star"></i>
                                            </span>
                                            উৎপাদিত দ্রব্য সম্পর্কে সবাই নিজের মতামত এবং সেই দ্রব্যের রেটিং দিতে পারবে।
                                        </li>
                                    </ul> <!-- end of /.points -->

                                    <a href="{{ URL::route('login') }}" class="btn btn-slategray">
                                        লগ ইন করুন
                                    </a> <!-- /purchase button -->
                                </div> <!-- end of /.intro-description -->
                            </div>
                        </div>
                    </div> <!-- end of /.container -->
                </section> 
                <!--  end of intro section -->


                <!--  begin feature section  -->
                <section class="bg-white feature">
                    <div class="container">
                        <div class="headline text-center">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <h2 class="section-title">কৃষিদ্রব্যের শ্রেণীবিভাগ</h2>
                                </div>
                            </div>
                        </div> <!-- /.headline -->

                        <div class="catagory-list">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="feature-content text-center">
                                        <div class="feature-icon-box">
                                            <img class="img-responsive center-block" src="assets/img/catagory1.jpg">
                                        </div> <!--  end of /.feature-icon-box  -->
                                        <div class="feature-info">
                                            <h3 class="feature-heading">ফসল</h3>
                                            <p class="feature-description">
                                                Class aptent taciti sociosqu ad litora torquent conubia nostra, per inceptos himenaeos.
                                            </p>  <!--   end of /.feature-description  -->
                                            <a href="#" class="btn btn-slategray">
                                                বিস্তারিত দেখতে ক্লিক করুন
                                            </a>
                                        </div> <!--   end of /.feature-info  -->
                                    </div> <!--  end of /.feature-content  -->
                                </div>

                                <div class="col-md-3">
                                    <div class="feature-content text-center">
                                        <div class="feature-icon-box">
                                            <img class="img-responsive center-block" src="assets/img/catagory2.jpg">
                                        </div> <!--  end of /.feature-icon-box  -->
                                        <div class="feature-info">
                                            <h3 class="feature-heading">শাক-সব্জি</h3>
                                            <p class="feature-description">
                                                Class aptent taciti sociosqu ad litora torquent conubia nostra, per inceptos himenaeos.
                                            </p>  <!--   end of /.feature-description  -->
                                            <a href="#" class="btn btn-slategray">
                                                বিস্তারিত দেখতে ক্লিক করুন
                                            </a>
                                        </div> <!--   end of /.feature-info  -->
                                    </div> <!--  end of /.feature-content  -->
                                </div>

                                <div class="col-md-3">
                                    <div class="feature-content text-center">
                                        <div class="feature-icon-box">
                                            <img class="img-responsive center-block" src="assets/img/catagory3.jpg">
                                        </div> <!--  end of /.feature-icon-box  -->
                                        <div class="feature-info">
                                            <h3 class="feature-heading">ফল-মূল</h3>
                                            <p class="feature-description">
                                                Class aptent taciti sociosqu ad litora torquent conubia nostra, per inceptos himenaeos.
                                            </p>  <!--   end of /.feature-description  -->
                                            <a href="#" class="btn btn-slategray">
                                                বিস্তারিত দেখতে ক্লিক করুন
                                            </a>
                                        </div> <!--   end of /.feature-info  -->
                                    </div> <!--  end of /.feature-content  -->
                                </div>

                                <div class="col-md-3">
                                    <div class="feature-content text-center">
                                        <div class="feature-icon-box">
                                            <img class="img-responsive center-block" src="assets/img/catagory4.jpg">
                                        </div> <!--  end of /.feature-icon-box  -->
                                        <div class="feature-info">
                                            <h3 class="feature-heading">মসলা</h3>
                                            <p class="feature-description">
                                                Class aptent taciti sociosqu ad litora torquent conubia nostra, per inceptos himenaeos.
                                            </p>  <!--   end of /.feature-description  -->
                                            <a href="#" class="btn btn-slategray">
                                                বিস্তারিত দেখতে ক্লিক করুন
                                            </a>
                                        </div> <!--   end of /.feature-info  -->
                                    </div> <!--  end of /.feature-content  -->
                                </div>
                            </div>
                        </div>
                            
                    </div> <!-- end of /.container -->
                </section>  
                <!--   end of feature section  -->



                <!--  begin services section -->

                <section class="bg-white">
                    <div class="container">

                        <div class="headline text-center">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <h2 class="section-title">প্রধান কৃষিদ্রব্যসমূহ</h2>
                                </div>
                            </div>
                        </div> <!-- /.headline -->

                        <div class="service-list">
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="service-content text-center">
                                        <div class="service-icon-box ">
                                            <img class="img-responsive img-circle center-block" src="assets/img/rice.png">
                                        </div> <!--  end of .service-icon-box  -->
                                        <div class="service-info">
                                            <h3 class="service-heading">ধান</h3>
                                            <p class="service-description">
                                                Phasellus sit amet tristique ligula. Donec iaculis leo suscipit ultricies Interdum tal esuada fames ante infaucibus.
                                            </p> 
                                        </div> <!--   end of .service-info  -->
                                    </div> <!--  end of .service-content  -->
                                </div>

                                <div class="col-md-4">
                                    <div class="service-content text-center">
                                        <div class="service-icon-box">
                                            <img class="img-responsive img-circle center-block" src="assets/img/wheat.jpg">
                                        </div> <!--  end of .service-icon-box  -->
                                        <div class="service-info">
                                            <h3 class="service-heading">গম</h3>
                                            <p class="service-description">
                                                Phasellus sit amet tristique ligula. Donec iaculis leo suscipit ultricies Interdum tal esuada fames ante infaucibus.
                                            </p> 
                                        </div> <!--   end of .service-info  -->
                                    </div> <!--  end of .service-content  -->
                                </div>

                                <div class="col-md-4">
                                    <div class="service-content text-center">
                                        <div class="service-icon-box">
                                            <img class="img-responsive img-circle center-block" src="assets/img/jute.jpg">
                                        </div> <!--  end of .service-icon-box  -->
                                        <div class="service-info">
                                            <h3 class="service-heading">পাট</h3>
                                            <p class="service-description">
                                                Phasellus sit amet tristique ligula. Donec iaculis leo suscipit ultricies Interdum tal esuada fames ante infaucibus.
                                            </p> 
                                        </div> <!--   end of .service-info  -->
                                    </div> <!--  end of .service-content  -->
                                </div>

                                <div class="col-md-4">
                                    <div class="service-content text-center">
                                        <div class="service-icon-box">
                                            <img class="img-responsive img-circle center-block" src="assets/img/potato.jpg">
                                        </div> <!--  end of .service-icon-box  -->
                                        <div class="service-info">
                                            <h3 class="service-heading">আলু</h3>
                                            <p class="service-description">
                                                Phasellus sit amet tristique ligula. Donec iaculis leo suscipit ultricies Interdum tal esuada fames ante infaucibus.
                                            </p> 
                                        </div> <!--   end of .service-info  -->
                                    </div> <!--  end of .service-content  -->
                                </div>

                                <div class="col-md-4">
                                    <div class="service-content text-center">
                                        <div class="service-icon-box">
                                            <img class="img-responsive img-circle center-block" src="assets/img/tea.jpg">
                                        </div> <!--  end of .service-icon-box  -->
                                        <div class="service-info">
                                            <h3 class="service-heading">চা</h3>
                                            <p class="service-description">
                                                Phasellus sit amet tristique ligula. Donec iaculis leo suscipit ultricies Interdum tal esuada fames ante infaucibus.
                                            </p> 
                                        </div> <!--   end of .service-info  -->
                                    </div> <!--  end of .service-content  -->
                                </div>

                                <div class="col-md-4">
                                    <div class="service-content text-center">
                                        <div class="service-icon-box">
                                            <img class="img-responsive img-circle center-block" src="assets/img/mustard.jpg">
                                        </div> <!--  end of .service-icon-box  -->
                                        <div class="service-info">
                                            <h3 class="service-heading">সরিষা</h3>
                                            <p class="service-description">
                                                Phasellus sit amet tristique ligula. Donec iaculis leo suscipit ultricies Interdum tal esuada fames ante infaucibus.
                                            </p> 
                                        </div> <!--   end of .service-info  -->
                                    </div> <!--  end of .service-content  -->
                                </div>

                            </div> <!--  end of .row  -->
                        </div> <!--  end of .service-list  -->
                    </div> <!-- end of .container -->
                </section> 
                <!--  end of services section -->

                            
            </div> <!-- end of /.main-content -->

            <footer>
                
            </footer>
            
        </div> <!-- end of /#home-page -->

        <!--  Necessary scripts  -->

        <script type="text/javascript" src="assets/js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/owl.carousel.js"></script>
        <script type="text/javascript" src="assets/js/jquery.hoverdir.js"></script>


        <!-- script for portfolio section using hoverdirection -->
        <script type="text/javascript">
            $(function() {

                $('.portfolio-item > .item-image').each( function() { $(this).hoverdir({
                    hoverDelay : 75
                }); } );

            });
        </script>


        <!-- script for twitter-feed using owl carousel-->
        <script type="text/javascript">
            $(document).ready(function() {
 
                $("#twit").owlCarousel({
                 
                    navigation : true, // Show next and prev buttons
                    slideSpeed : 100,
                    paginationSpeed : 400,
                    navigationText : false,
                    singleItem: true,
                    autoPlay: true,
                    pagination: false
                });
 
            });
        </script>


        <!-- script for testimonial section using owl carousel -->
        <script type="text/javascript">
            $(document).ready(function() {
 
                $("#client-speech").owlCarousel({
                 
                    autoPlay: 5000, //Set AutoPlay to 3 seconds
                    stopOnHover: true,
                    singleItem:true
                });
 
            });
        </script>


    </body>
</html>