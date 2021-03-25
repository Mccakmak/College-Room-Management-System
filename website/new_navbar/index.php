<?php include('../server.php') ?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>T.C. ISTANBUL MEDIPOL UNIVERSITY </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <a href="new_navbar/index.html"><link rel="shortcut icon" type="image/x-icon" href="assets/img/medipol.png"></a>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/footer.css">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <!--mobil için-->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <meta name="author" content="Codrops" />
    <link rel="stylesheet" type="text/css" href="kat_css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="kat_css/style.css" />
    <script src="kat_js/modernizr-custom.js"></script>
</head>

<body>


    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt="" width="152"
                                            height="55"></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="../reservation/reservation.php">Reservation</a></li>
                                            <li><a href="../modify_reservation.php">Modify Reservations</a></li>
                                            <li><a href="../list_reservation.php">Past Reservations</a></li>
                                            <li><a href="../feedback.php">Send Feedback</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                                <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                    <li class="d-none d-xl-block">
                                        <div class="form-box f-right ">
                                            
                                        </div>
                                    </li>

                                    <li><p style="margin-top: 10px; margin-right: 20px;"><?php echo $_SESSION['name']; ?><p></li>
                                        <a style="margin-top: 10px; color: #000000" href="../contact/contact.php">Contact</a>
                                    <li class="d-none d-lg-block"> <a href="../login.php" class="btn header-btn">Sign Out</a></li>

                                </ul>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

    
    <div class="container">
        <div class="main">
            <div class="mall">
                <div class="levels">
                    <div class="level level--1" aria-label="Level 1">
                        <svg class="map map--1" viewBox="0 0 1253 835" width="100%" height="100%" preserveAspectRatio="xMidYMid meet">
                            <polygon points="13 13 13 664 385 664 385 323 478 323 478 664 819 664 819 323 943 323 943 664 1222 664 1222 13 13 13" class="map__ground" />
                            <path d="M0 0 L1235 0 L1235 677 L930 677 L930 336 L832 336 L832 677 L465 677 L465 336 L398 336 L398 677 L0 677 L0 0 M13 13 L13 664 L385 664 L385 323 L478 323 L478 664 L819 664 L819 323 L943 323 L943 664 L1222 664 L1222 13Z" class="map__outline"/>
                            <rect x="19" y="19" width="122" height="148" class="map__space"/> <!--6G-->
                            <rect x="19" y="169" width="93" height="118" class="map__space"/> <!--camlı-->
                            <rect x="19" y="293" width="184" height="118" class="map__space"/> <!--PC Lab-->
                            <rect x="19" y="417" width="184" height="118" class="map__space"/> <!--Lab-->
                            <rect x="19" y="541" width="122" height="118" class="map__space"/> <!--Erol-->
                            <rect x="143" y="629" width="93" height="31" class="map__space"/> <!--Beste-->
                            <rect x="324" y="541" width="57" height="119" class="map__space"/> <!--Hoca-->
                            <rect x="293" y="417" width="88" height="119" class="map__space"/> <!--Lab-->
                            <rect x="293" y="324" width="88" height="88" class="map__space"/> <!--Lab-->
                            <rect x="483" y="323" width="88" height="336" class="map__space"/> <!--Hocalar-->
                            <rect x="605" y="323" width="88" height="135" class="map__space"/> <!--Hoca-->
                            <rect x="605" y="463" width="88" height="140" class="map__space"/> <!--Hoca-->
                            <rect x="728" y="323" width="87" height="336" class="map__space"/> <!--Hocalar-->
                            <rect x="948" y="323" width="87" height="140" class="map__space"/> <!--Elek Lab-->
                            <rect x="948" y="468" width="87" height="191" class="map__space"/> <!--Fizik Lab-->
                            <rect x="1040" y="602" width="84" height="57" class="map__space"/> <!--Hoca-->
                            <rect x="1129" y="323" width="87" height="140" class="map__space"/> <!--Lab-->
                            <rect x="1129" y="468" width="87" height="191" class="map__space"/> <!--Lab-->
                            <rect x="1005" y="19" width="212" height="88" class="map__space"/> <!--Sınıf aMFİ-->
                            <rect x="819" y="19" width="181" height="88" class="map__space"/> <!--Sınıf-->
                            <rect x="633" y="19" width="181" height="88" class="map__space"/> <!--Sınıf-->
                            <rect x="447" y="19" width="181" height="88" class="map__space"/> <!--Sınıf-->
                            <rect x="261" y="19" width="181" height="88" class="map__space"/> <!--Sınıf-->
                            <rect x="146" y="19" width="110" height="88" class="map__space"/> <!--Sınıf-->
                            <rect x="236" y="174" width="186" height="93" class="map__space"/> <!--Merdiven-->
                            <rect x="360" y="205" width="31" height="62" class="map__lake"/> <!--Merdiven-->
                            <rect x="453" y="174" width="155" height="93" class="map__space"/> <!--Asansör-->
                            <rect x="453" y="189" width="31" height="62" class="map__lake"/> <!--Asansör-->
                            <rect x="639" y="174" width="186" height="93" class="map__space"/> <!--Merdiven-->
                            <rect x="763" y="205" width="31" height="62" class="map__lake"/> <!--Merdiven-->
                            <rect x="887" y="174" width="155" height="93" class="map__space"/> <!--Merdiven-->
                            <rect x="918" y="205" width="31" height="62" class="map__lake"/> <!--Merdiven-->
                            <rect x="1104" y="138" rx="20" ry="20" width="93" height="171" class="map__tree"/> <!--Kapsül-->
                            <rect x="1109" y="147" rx="15" ry="15" width="31" height="62" class="map__space"/> <!--Kapsül1-->
                            <rect x="1145" y="147" rx="15" ry="15" width="44" height="93" class="map__space"/> <!--Kapsül2-->
                            <rect x="1109" y="214" rx="15" ry="15" width="31" height="88" class="map__space"/> <!--Kapsül3-->
                            <rect x="1145" y="245" rx="15" ry="15" width="44" height="57" class="map__space"/> <!--Kapsül4-->
                        </svg>
     
                    </div>
                    <div class="level level--2" aria-label="Level 2">
                        <svg class="map map--2" viewBox="0 0 1253 835" width="100%" height="100%" preserveAspectRatio="xMidYMid meet">
                            <polygon points="13 13 13 664 385 664 385 323 478 323 478 664 819 664 819 323 943 323 943 664 1222 664 1222 13 13 13" class="map__ground" />
                            <path d="M0 0 L1235 0 L1235 677 L930 677 L930 336 L832 336 L832 677 L465 677 L465 336 L398 336 L398 677 L0 677 L0 0 M13 13 L13 664 L385 664 L385 323 L478 323 L478 664 L819 664 L819 323 L943 323 L943 664 L1222 664 L1222 13Z" class="map__outline"/>
                            <rect x="19" y="19" width="122" height="148" class="map__space"/> <!--6G-->
                            <rect x="19" y="169" width="93" height="118" class="map__space"/> <!--camlı-->
                            <rect x="19" y="293" width="184" height="118" class="map__space"/> <!--PC Lab-->
                            <rect x="19" y="417" width="184" height="118" class="map__space"/> <!--Lab-->
                            <rect x="19" y="541" width="122" height="118" class="map__space"/> <!--Erol-->
                            <rect x="143" y="629" width="93" height="31" class="map__space"/> <!--Beste-->
                            <rect x="324" y="541" width="57" height="119" class="map__space"/> <!--Hoca-->
                            <rect x="293" y="417" width="88" height="119" class="map__space"/> <!--Lab-->
                            <rect x="293" y="324" width="88" height="88" class="map__space"/> <!--Lab-->
                            <rect x="483" y="323" width="88" height="336" class="map__space"/> <!--Hocalar-->
                            <rect x="605" y="323" width="88" height="135" class="map__space"/> <!--Hoca-->
                            <rect x="605" y="463" width="88" height="140" class="map__space"/> <!--Hoca-->
                            <rect x="728" y="323" width="87" height="336" class="map__space"/> <!--Hocalar-->
                            <rect x="948" y="323" width="87" height="140" class="map__space"/> <!--Elek Lab-->
                            <rect x="948" y="468" width="87" height="191" class="map__space"/> <!--Fizik Lab-->
                            <rect x="1040" y="602" width="84" height="57" class="map__space"/> <!--Hoca-->
                            <rect x="1129" y="323" width="87" height="140" class="map__space"/> <!--Lab-->
                            <rect x="1129" y="468" width="87" height="191" class="map__space"/> <!--Lab-->
                            <rect x="1005" y="19" width="212" height="88" class="map__space"/> <!--Sınıf aMFİ-->
                            <rect x="819" y="19" width="181" height="88" class="map__space"/> <!--Sınıf-->
                            <rect x="633" y="19" width="181" height="88" class="map__space"/> <!--Sınıf-->
                            <rect x="447" y="19" width="181" height="88" class="map__space"/> <!--Sınıf-->
                            <rect x="261" y="19" width="181" height="88" class="map__space"/> <!--Sınıf-->
                            <rect x="146" y="19" width="110" height="88" class="map__space"/> <!--Sınıf-->
                            <rect x="236" y="174" width="186" height="93" class="map__space"/> <!--Merdiven-->
                            <rect x="360" y="205" width="31" height="62" class="map__lake"/> <!--Merdiven-->
                            <rect x="453" y="174" width="155" height="93" class="map__space"/> <!--Asansör-->
                            <rect x="453" y="189" width="31" height="62" class="map__lake"/> <!--Asansör-->
                            <rect x="639" y="174" width="186" height="93" class="map__space"/> <!--Merdiven-->
                            <rect x="763" y="205" width="31" height="62" class="map__lake"/> <!--Merdiven-->
                            <rect x="887" y="174" width="155" height="93" class="map__space"/> <!--Merdiven-->
                            <rect x="918" y="205" width="31" height="62" class="map__lake"/> <!--Merdiven-->
                            <rect x="1104" y="138" rx="20" ry="20" width="93" height="171" class="map__tree"/> <!--Kapsül-->
                            <rect x="1109" y="147" rx="15" ry="15" width="31" height="62" class="map__space"/> <!--Kapsül1-->
                            <rect x="1145" y="147" rx="15" ry="15" width="44" height="93" class="map__space"/> <!--Kapsül2-->
                            <rect x="1109" y="214" rx="15" ry="15" width="31" height="88" class="map__space"/> <!--Kapsül3-->
                            <rect x="1145" y="245" rx="15" ry="15" width="44" height="57" class="map__space"/> <!--Kapsül4-->
                        </svg>

                    </div>
                    <div class="level level--3" aria-label="Level 3">
                        <svg class="map map--3" viewBox="0 0 1253 835" width="100%" height="100%" preserveAspectRatio="xMidYMid meet">
                            <polygon points="13 13 13 664 385 664 385 323 478 323 478 664 819 664 819 323 943 323 943 664 1222 664 1222 13 13 13" class="map__ground" />
                            <path d="M0 0 L1235 0 L1235 677 L930 677 L930 336 L832 336 L832 677 L465 677 L465 336 L398 336 L398 677 L0 677 L0 0 M13 13 L13 664 L385 664 L385 323 L478 323 L478 664 L819 664 L819 323 L943 323 L943 664 L1222 664 L1222 13Z" class="map__outline"/>
                            <rect x="19" y="19" width="122" height="148" class="map__space"/> <!--6G-->
                            <rect x="19" y="169" width="93" height="118" class="map__space"/> <!--camlı-->
                            <rect x="19" y="293" width="184" height="118" class="map__space"/> <!--PC Lab-->
                            <rect x="19" y="417" width="184" height="118" class="map__space"/> <!--Lab-->
                            <rect x="19" y="541" width="122" height="118" class="map__space"/> <!--Erol-->
                            <rect x="143" y="629" width="93" height="31" class="map__space"/> <!--Beste-->
                            <rect x="324" y="541" width="57" height="119" class="map__space"/> <!--Hoca-->
                            <rect x="293" y="417" width="88" height="119" class="map__space"/> <!--Lab-->
                            <rect x="293" y="324" width="88" height="88" class="map__space"/> <!--Lab-->
                            <rect x="483" y="323" width="88" height="336" class="map__space"/> <!--Hocalar-->
                            <rect x="605" y="323" width="88" height="135" class="map__space"/> <!--Hoca-->
                            <rect x="605" y="463" width="88" height="140" class="map__space"/> <!--Hoca-->
                            <rect x="728" y="323" width="87" height="336" class="map__space"/> <!--Hocalar-->
                            <rect x="948" y="323" width="87" height="140" class="map__space"/> <!--Elek Lab-->
                            <rect x="948" y="468" width="87" height="191" class="map__space"/> <!--Fizik Lab-->
                            <rect x="1040" y="602" width="84" height="57" class="map__space"/> <!--Hoca-->
                            <rect x="1129" y="323" width="87" height="140" class="map__space"/> <!--Lab-->
                            <rect x="1129" y="468" width="87" height="191" class="map__space"/> <!--Lab-->
                            <rect x="1005" y="19" width="212" height="88" class="map__space"/> <!--Sınıf aMFİ-->
                            <rect x="819" y="19" width="181" height="88" class="map__space"/> <!--Sınıf-->
                            <rect x="633" y="19" width="181" height="88" class="map__space"/> <!--Sınıf-->
                            <rect x="447" y="19" width="181" height="88" class="map__space"/> <!--Sınıf-->
                            <rect x="261" y="19" width="181" height="88" class="map__space"/> <!--Sınıf-->
                            <rect x="146" y="19" width="110" height="88" class="map__space"/> <!--Sınıf-->
                            <rect x="236" y="174" width="186" height="93" class="map__space"/> <!--Merdiven-->
                            <rect x="360" y="205" width="31" height="62" class="map__lake"/> <!--Merdiven-->
                            <rect x="453" y="174" width="155" height="93" class="map__space"/> <!--Asansör-->
                            <rect x="453" y="189" width="31" height="62" class="map__lake"/> <!--Asansör-->
                            <rect x="639" y="174" width="186" height="93" class="map__space"/> <!--Merdiven-->
                            <rect x="763" y="205" width="31" height="62" class="map__lake"/> <!--Merdiven-->
                            <rect x="887" y="174" width="155" height="93" class="map__space"/> <!--Merdiven-->
                            <rect x="918" y="205" width="31" height="62" class="map__lake"/> <!--Merdiven-->
                            <rect x="1104" y="138" rx="20" ry="20" width="93" height="171" class="map__tree"/> <!--Kapsül-->
                            <rect x="1109" y="147" rx="15" ry="15" width="31" height="62" class="map__space"/> <!--Kapsül1-->
                            <rect x="1145" y="147" rx="15" ry="15" width="44" height="93" class="map__space"/> <!--Kapsül2-->
                            <rect x="1109" y="214" rx="15" ry="15" width="31" height="88" class="map__space"/> <!--Kapsül3-->
                            <rect x="1145" y="245" rx="15" ry="15" width="44" height="57" class="map__space"/> <!--Kapsül4-->
                        </svg>
                        <!-- /level__pins -->
                    </div>
                    <div class="level level--4" aria-label="Level 4">
                        <svg class="map map--4" viewBox="0 0 1253 835" width="100%" height="100%" preserveAspectRatio="xMidYMid meet">
                            <polygon points="13 13 13 664 385 664 385 323 478 323 478 664 819 664 819 323 943 323 943 664 1222 664 1222 13 13 13" class="map__ground" />
                            <path d="M0 0 L1235 0 L1235 677 L930 677 L930 336 L832 336 L832 677 L465 677 L465 336 L398 336 L398 677 L0 677 L0 0 M13 13 L13 664 L385 664 L385 323 L478 323 L478 664 L819 664 L819 323 L943 323 L943 664 L1222 664 L1222 13Z" class="map__outline"/>
                            <rect x="19" y="19" width="122" height="148" class="map__space"/> <!--6G-->
                            <rect x="19" y="169" width="93" height="118" class="map__space"/> <!--camlı-->
                            <rect x="19" y="293" width="184" height="118" class="map__space"/> <!--PC Lab-->
                            <rect x="19" y="417" width="184" height="118" class="map__space"/> <!--Lab-->
                            <rect x="19" y="541" width="122" height="118" class="map__space"/> <!--Erol-->
                            <rect x="143" y="629" width="93" height="31" class="map__space"/> <!--Beste-->
                            <rect x="324" y="541" width="57" height="119" class="map__space"/> <!--Hoca-->
                            <rect x="293" y="417" width="88" height="119" class="map__space"/> <!--Lab-->
                            <rect x="293" y="324" width="88" height="88" class="map__space"/> <!--Lab-->
                            <rect x="483" y="323" width="88" height="336" class="map__space"/> <!--Hocalar-->
                            <rect x="605" y="323" width="88" height="135" class="map__space"/> <!--Hoca-->
                            <rect x="605" y="463" width="88" height="140" class="map__space"/> <!--Hoca-->
                            <rect x="728" y="323" width="87" height="336" class="map__space"/> <!--Hocalar-->
                            <rect x="948" y="323" width="87" height="140" class="map__space"/> <!--Elek Lab-->
                            <rect x="948" y="468" width="87" height="191" class="map__space"/> <!--Fizik Lab-->
                            <rect x="1040" y="602" width="84" height="57" class="map__space"/> <!--Hoca-->
                            <rect x="1129" y="323" width="87" height="140" class="map__space"/> <!--Lab-->
                            <rect x="1129" y="468" width="87" height="191" class="map__space"/> <!--Lab-->
                            <rect x="1005" y="19" width="212" height="88" class="map__space"/> <!--Sınıf aMFİ-->
                            <rect x="819" y="19" width="181" height="88" class="map__space"/> <!--Sınıf-->
                            <rect x="633" y="19" width="181" height="88" class="map__space"/> <!--Sınıf-->
                            <rect x="447" y="19" width="181" height="88" class="map__space"/> <!--Sınıf-->
                            <rect x="261" y="19" width="181" height="88" class="map__space"/> <!--Sınıf-->
                            <rect x="146" y="19" width="110" height="88" class="map__space"/> <!--Sınıf-->
                            <rect x="236" y="174" width="186" height="93" class="map__space"/> <!--Merdiven-->
                            <rect x="360" y="205" width="31" height="62" class="map__lake"/> <!--Merdiven-->
                            <rect x="453" y="174" width="155" height="93" class="map__space"/> <!--Asansör-->
                            <rect x="453" y="189" width="31" height="62" class="map__lake"/> <!--Asansör-->
                            <rect x="639" y="174" width="186" height="93" class="map__space"/> <!--Merdiven-->
                            <rect x="763" y="205" width="31" height="62" class="map__lake"/> <!--Merdiven-->
                            <rect x="887" y="174" width="155" height="93" class="map__space"/> <!--Merdiven-->
                            <rect x="918" y="205" width="31" height="62" class="map__lake"/> <!--Merdiven-->
                            <rect x="1104" y="138" rx="20" ry="20" width="93" height="171" class="map__tree"/> <!--Kapsül-->
                            <rect x="1109" y="147" rx="15" ry="15" width="31" height="62" class="map__space"/> <!--Kapsül1-->
                            <rect x="1145" y="147" rx="15" ry="15" width="44" height="93" class="map__space"/> <!--Kapsül2-->
                            <rect x="1109" y="214" rx="15" ry="15" width="31" height="88" class="map__space"/> <!--Kapsül3-->
                            <rect x="1145" y="245" rx="15" ry="15" width="44" height="57" class="map__space"/> <!--Kapsül4-->
                        </svg>
                        
                        <!-- /level__pins -->
                    </div>
                </div>
                <!-- /levels -->
            </div>
            <!-- /mall -->
            
 
        </div>
        <!-- /main -->

        <!-- /spaces-list -->
    </div>
    <!-- /container -->
    <script src="kat_js/classie.js"></script>
    <script src="kat_js/list.min.js"></script>
    <script src="kat_js/main.js"></script>

    <!-- JS here -->

    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>
    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>


</body>




</html>