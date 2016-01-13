<!DOCTYPE html>
<html>
<head>

  <title>কৃষি বাজার||কৃষিদ্রব্য </title>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->

  <!-- Import font awesome icon -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/main/css/font-awesome.min.css">
  <link type="text/css" rel="stylesheet" href="main/css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="main/css/custom.css">


        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">



  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <style type="text/css">
    .grade:hover{
      cursor: pointer;
      color: #f44336;
    }
    ::-webkit-input-placeholder {
       color: #263238;
    }

    :-moz-placeholder { /* Firefox 18- */
       color: #263238;  
    }

    ::-moz-placeholder {  /* Firefox 19+ */
       color: #263238;  
    }

    :-ms-input-placeholder {  
       color: #263238;  
    }
  </style>

</head>

<body>

<!-- Navbar goes here -->
<header>

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
                                <a href="#"><span>সকল পণ্যদ্রব্য</span></a>
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
</header>
<!-- end navbar -->
<br><br><br><br>
  <!-- Page Content goes here -->
  <div class="section" style="margin:0px;">
  <!-- Page Layout here -->

  <!-- side content -->
    <div class="row">


      

      <div class="col s12 m3 category">
       @foreach($category as $category) 
         <ul class="collapsible popout" data-collapsible="accordion">
          <li>
            <div class="collapsible-header">{{$category->name}}</div>
            <div class="collapsible-body">
              <ul class="collection" style="border-left:1px #ddd solid;">
                @foreach($category as $foscategoryol) 
                <li class="collection-item"><a href="#">XYZ</a></li>
                  @endforeach
              </ul>
            </div>
          </li>
        </ul>
          @endforeach
      </div> 
      

       <!-- view content -->

    <div class="col s12 m9">
      <div class="view-content">
        
        <!-- search category -->
       
        
        <!-- end search end category -->

        <!-- card -->
@foreach($product as $product)
<div class="col-sm-offset-1 col-md-6">
        <div class="card">
      
          <div class="row">
            <div class="col s12 m3 card-image">
              <div class="card-image">
                <a href="">{{ HTML::image($product->picture, 'alt', array( 'width' => 30, 'height' => 120 )) }}</a>
              </div>
              
            </div>

            <div class="col-sm-offset-1 col-md-6">
              <h4 style="margin:0;">{{$product->product_name}}</h4>
              <hr>
              <p>{{ $product->details }}.</p>
            
            </div>

          </div>

          <div class="card-action">
            
            <a href="#">মূল্য সীমা : {{ $product->min_price }} - {{ $product->max_price }} টাকা  </a>
            <a href="#">ঠিকানা : {{ $product->location }} </a>
            <a href="#">স্থায়িত্ব  : {{ $product->expiry_date }}</a>
            <div style="float:right;color:#e57373;margin-right:1%;">
              <i class="small material-icons grade">grade</i>
              <i class="small material-icons grade">grade</i>
              <i class="small material-icons grade">grade</i>
              <i class="small material-icons grade">grade</i>
              <i class="small material-icons grade">grade</i>
            </div>
          </div>

       
</div>
        </div>
        <br>
@endforeach
        <!-- end card -->



       
        








        <div class="row">
          <div class="col s12 m12">
            <div class="search-category">
              <ul class="pagination">
                <li><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                <li class="active"><a href="#!">1</a></li>
                <li class="waves-effect"><a href="#!">2</a></li>
                <li class="waves-effect"><a href="#!">3</a></li>
                <li class="waves-effect"><a href="#!">4</a></li>
                <li class="waves-effect"><a href="#!">5</a></li>
                <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>      
    </div>

    <!-- end view content -->
   
      
    </div> 

    <!-- end side content  -->

      
  </div>

  <!-- end page layout -->

</div> <!-- end of /#home-page -->

<script type="text/javascript" src="main/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="main/js/jquery-ui.min.js"></script>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="main/js/materialize.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
      // $('.cart').hide();
      $(".button-collapse").sideNav();
      $('.modal-trigger').leanModal();
      $('.collapsible').collapsible({
        accordion : false 
      });
      $('select').material_select(); 

      var date1 = new Date('27 December, 2015');
      var date2 = new Date('28 December, 2015');
      intdate = Math.abs(date1.getTime()-date2.getTime());
      console.log(intdate);

  });

</script>

</body>
</html>