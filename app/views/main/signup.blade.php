<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->

<html class="no-js"> <!--<![endif]-->
<head>

    {{ $title }}

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

<div id="registration-page">

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
                    <span class="sr-only">Farmer Bazar</span>
                    <a href="index.html">
                        <!-- <img src="assets/img/main_logo.png" class="img-responsive center-block" alt="logo"> -->
                        Farmer
                        <br>Bazzar
                    </a>
                </div>
                <!-- navbar logo -->

            </div><!-- /.navbar-header -->

            <!-- nav links -->
            <div class="collapse navbar-collapse" id="main-nav-collapse">
                <ul class="nav navbar-nav navbar-right text-uppercase">
                    <li>
                        <a href="index.html"><span>??? ????</span></a>
                    </li>

                    <li>
                        <a href="#"><span>??? ??????????</span></a>
                    </li> <!-- end of /.dropdown -->

                    <li>
                        <a href="#"><span>???????</span></a>
                    </li>
                    <li>
                        <a class="btn-nav" href="#"><span>????????????</span></a>
                    </li>
                    <li>
                        <a class="btn-nav" href="#"><span>?? ??</span></a>
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
                        <form class="registration-form"  method="post" action="">
                            <h4>???????????? ???? ???? ????? ???????? ???? ???? ???</h4>

                            <div class="form-group">
                                <!-- <label for="name">????? ???</label> -->
                                <input type="text" class="form-control" id="name" name="" placeholder="????? ???? ??? ?????">
                            </div>
                            <div class="form-group">
                                <!-- <label for="address">????</label> -->
                                <select class="form-control" id="address">
                                    <option>????? ???????? ???? ???????? ????</option>
                                    <option value="bo">Borguna</option>
                                    <option value="ba">Barisal</option>
                                    <option value="bh">Bhola</option>
                                    <option value="jh">Jhalokathi</option>
                                    <option value="po">Potuakhali</option>
                                    <option value="pi">Pirojpur</option>
                                    <option value="ban">Bandarban</option>
                                    <option value="br">Brahmanbaria</option>
                                    <option value="ch">Chandpur</option>
                                    <option value="ctg">Chittagong</option>
                                    <option value="co">Comilla</option>
                                    <option value="cox">Cox's Bazar</option>
                                    <option value="fe">Feni</option>
                                    <option value="kh">Khagrachari</option>
                                    <option value="la">Lakhsmipur</option>
                                    <option value="no">Noakhali</option>
                                    <option value="ra">Rangamati</option>
                                    <option value="dh">Dhaka</option>
                                    <option value="fa">Faridpur</option>
                                    <option value="ga">Gazipur</option>
                                    <option value="go">Gopalganj</option>
                                    <option value="ki">Kishorganj</option>
                                    <option value="ma">Madaripur</option>
                                    <option value="man">Manikganj</option>
                                    <option value="mun">Munsiganj</option>
                                    <option value="nar">Narayanganj</option>
                                    <option value="na">Narshingdi</option>
                                    <option value="raj">Rajbari</option>
                                    <option value="sh">Shariatpur</option>
                                    <option value="ta">Tangail</option>
                                    <option value="bag">Bagerhat</option>
                                    <option value="chu">Chuadanga</option>
                                    <option value="je">Jessore</option>
                                    <option value="jhe">Jheniadaha</option>
                                    <option value="khu">Khulna</option>
                                    <option value="ku">Kustia</option>
                                    <option value="mag">Magura</option>
                                    <option value="me">Meherpur</option>
                                    <option value="nrl">Narail</option>
                                    <option value="sha">Shatkhira</option>
                                    <option value="ja">Jamalpur</option>
                                    <option value="my">Mymensingh</option>
                                    <option value="ne">Netrokona</option>
                                    <option value="she">Sherpurc</option>
                                    <option value="bog">Bogra</option>
                                    <option value="jo">Joypurhat</option>
                                    <option value="nao">Naogan</option>
                                    <option value="nat">Natore</option>
                                    <option value="cha">Chapainawabganj</option>
                                    <option value="pab">Pabna</option>
                                    <option value="raj">Rajshahi</option>
                                    <option value="sir">Sirajganj</option>
                                    <option value="di">Dinajpur</option>
                                    <option value="gai">Gaibandha</option>
                                    <option value="kur">Kurigram</option>
                                    <option value="lal">Lalmonirhat</option>
                                    <option value="nil">Nilfamari</option>
                                    <option value="pon">Ponchogor</option>
                                    <option value="ran">Rangpur</option>
                                    <option value="tha">Thakurgaon</option>
                                    <option value="ha">Habiganj</option>
                                    <option value="su">Sunamganj</option>
                                    <option value="mo">Moulivibazar</option>
                                    <option value="sy">Sylhet</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <!-- <label for="phone">?????? ?????</label> -->
                                <input type="tel" class="form-control" name="" id="phone" required="required" placeholder="????? ?????? ????? ???">
                            </div>

                            <div class="form-group">
                                <!-- <label for="password">?????????</label> -->
                                <input type="password" class="form-control" name="" id="password" placeholder="????? ????????? ???">
                            </div>
                            <br>
                            <button style="width: 100%;" class="btn registration-btn btn-slategray">?????????? ????? ??????? ?????</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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