<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 

<html class="no-js"> <!--<![endif]-->
    <head>

       
      <title>কৃষি বাজার||লগ ইন </title>

        <!-- meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        
        <!-- stylesheets -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">

    </head>

    <body>

        <div id="login-page">
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
                            <div class="col-sm-6 col-md-7">
                                
                            </div>

                            <div class="col-sm-6 col-md-5">
                                
                                    {{ Form::open(array('route' => 'login', 'method' => 'post','class'=>'login-form')) }}

                                    <h4>লগ ইন করার জন্য প্রয়োজনীয় তথ্য দিন</h4>
                                    <div class="form-group">
                                        {{ Form::text('contact', '', array('class' => 'form-control', 'placeholder' => 'Email Address', 'id'=>'phone' ,'placeholder'=>'আপনার মোবাইল নম্বর দিন')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'আপনার পাসওয়ার্ড দিন')) }}
                                    </div>
                                    <br>
                                    <div class="text-right">
                                        <a href="#">রেজিস্ট্রেশন</a>
                                        {{ Form::submit('লগ ইন করুন', array('class' => 'btn login-btn')) }}
                                    </div>
                                 {{ Form::close() }}



                            </div>
                        </div>
                    </div><!-- /.container -->

                </div><!-- /.header-wrapper-inner -->
            </header>
            <!-- /#header -->


            <footer>
                
            </footer>
            
        </div> <!-- end of /#home-page -->

        <!--  Necessary scripts  -->

        <script type="text/javascript" src="assets/js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>


    </body>
</html>