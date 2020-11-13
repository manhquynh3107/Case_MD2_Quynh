<!DOCTYPE html>
<html lang="vi">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <meta name="csrf-token" content="8WZ20L8yKEZSuqRsFI5x1NTtvCS9yYMWhSnO9K7d">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
    <link href="/assets/frontend/theme/assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN: BASE PLUGINS  -->
    <link href="/assets/frontend/theme/assets/global/plugins/magnific/magnific.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
    <!-- END: BASE PLUGINS -->
    <!-- BEGIN: PAGE STYLES -->
    <link href="/assets/frontend/theme/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
    <!-- END: PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="/assets/frontend/theme/assets/demos/default/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/demos/default/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/demos/default/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css"/>
    <link href="/assets/frontend/theme/assets/demos/default/css/custom.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="/assets/frontend/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="/assets/frontend/plugins/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="/assets/frontend/plugins/owl-carousel/owl.transitions.css">
    <script src="/assets/frontend/plugins/jquery/jquery-2.1.0.min.js"></script>
    <script src="/assets/frontend/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/frontend/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="/assets/frontend/plugins/owl-carousel/slider.js"></script>

    <script src="/assets/frontend/plugins/jquery-cookie/jquery.cookie.js"></script>
    <link href="/assets/frontend/css/style.css?v=160413047537363" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <style>
        .ui-autocomplete {
            max-height: 500px;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .input-group-addon {
            background-color: #FAFAFA;
        }

        .input-group .input-group-btn > .btn, .input-group .input-group-addon {
            background-color: #FAFAFA;
        }

        .modal {
            text-align: center;
        }

        @media  screen and (min-width: 768px) {
            .modal:before {
                display: inline-block;
                vertical-align: middle;
                content: " ";
                height: 100%;
            }
        }

        @media (min-width: 992px) and (max-width: 1200px) {
            .c-layout-header-fixed.c-layout-header-topbar .c-layout-page {
                margin-top: 245px;
            }
        }

        @media  screen and (max-width: 767px) {
            .modal-dialog:before {
                margin-top: 75px;
                display: inline-block;
                vertical-align: middle;
                content: " ";
                height: 100%;
            }

            .modal-dialog {
                width: 100%;

            }

            .modal-content {
                margin-right: 20px;
            }
        }

        .modal-dialog {
            display: inline-block;
            text-align: left;


        }

        .mfp-wrap {
            z-index: 20000 !important;
        }

        .c-content-overlay .c-overlay-wrapper {
            z-index: 6;
        }

        .z7 {
            z-index: 7 !important;
        }
    </style>

    <link href="/assets/frontend/theme/assets/global/plugins/magnific/magnific.css" rel="stylesheet" type="text/css"/>
    <title>Login</title>
       </head>
<body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-topbar c-layout-header-topbar-collapse">
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        // FB JavaScript SDK configuration and setup
        FB.init({
            appId      : '281302596567364', // FB App ID
            cookie     : true,  // enable cookies to allow the server to access the session
            xfbml      : true,  // parse social plugins on this page
            version    : 'v3.2' // use graph api version 2.8
        });

        // Check whether the user already logged in
        FB.getLoginStatus(function(response) {
            if (response.status === 'connected') {
                //display user data
                getFbUserData();
            }
        });
    };

    // Load the JavaScript SDK asynchronously
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    // Facebook login with JavaScript SDK
    function fbLogin() {
        FB.login(function (response) {
            if (response.authResponse) {
                // Get and display the user profile data
                getFbUserData();
            } else {
                document.getElementById('status').innerHTML = 'User cancelled login or did not fully authorize.';
            }
        }, {scope: 'email'});
    }

    // Fetch the user profile data from facebook
    function getFbUserData(){
        FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture'},
            function (response) {
                document.getElementById('fbLink').setAttribute("onclick","fbLogout()");
                document.getElementById('fbLink').innerHTML = 'Logout from Facebook';
                document.getElementById('status').innerHTML = '<p>Thanks for logging in, ' + response.first_name + '!</p>';
                document.getElementById('userData').innerHTML = '<h2>Facebook Profile Details</h2><p><img src="'+response.picture.data.url+'"/></p><p><b>FB ID:</b> '+response.id+'</p><p><b>Name:</b> '+response.first_name+' '+response.last_name+'</p><p><b>Email:</b> '+response.email+'</p><p><b>Gender:</b> '+response.gender+'</p><p><b>FB Profile:</b> <a target="_blank" href="'+response.link+'">click to view profile</a></p>';
            });
    }

    // Logout from facebook
    function fbLogout() {
        FB.logout(function() {
            document.getElementById('fbLink').setAttribute("onclick","fbLogin()");
            document.getElementById('fbLink').innerHTML = '<img src="images/fb-login-btn.png"/>';
            document.getElementById('userData').innerHTML = '';
            document.getElementById('status').innerHTML = '<p>You have successfully logout from Facebook.</p>';
        });
    }
</script>


<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="279586329645345"
     logged_in_greeting="Chào bạn, mình hỗ trợ được gì cho bạn!"
     logged_out_greeting="Chào bạn, mình hỗ trợ được gì cho bạn!">
</div>
<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: HEADER -->
<header class="c-layout-header c-layout-header-4 c-layout-header-default-mobile" data-minimize-offset="80">
    <div class="c-topbar c-topbar-light">
        <div class="container">
            <!-- BEGIN: INLINE NAV -->
            <nav class="c-top-menu c-pull-left">
                <ul class="c-icons c-theme-ul">
                    <li>
                        <a href="https://www.facebook.com/ShopQuynhNgheSi" target="_blank">
                            <i class="icon-social-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCXzhS2cCgB9TtF68ss8t8Og?view_as=subscriber" target="_blank">
                            <i class="icon-social-youtube"></i>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- END: INLINE NAV -->
            <!-- BEGIN: INLINE NAV -->
            <nav class="c-top-menu c-pull-right m-t-10">
                <ul class="c-links c-theme-ul">
                    <li>
                        Hotline: <a href="tel:Quỳnh Nghệ Sĩ ">Quỳnh Nghệ Sĩ 7h-22h</a>
                    </li>

                </ul>
            </nav>
            <!-- END: INLINE NAV -->
        </div>
    </div>
    <div class="c-navbar">
        <div class="container">
            <!-- BEGIN: BRAND -->
            <div class="c-navbar-wrapper clearfix">
                <div class="c-brand c-pull-left">
                    <h1 style="margin: 0px;display: inline-block">
                        <a href="http://localhost/Quynh/Home/INDEX.php" class="c-logo" alt="Shop bán nick game, acc game online avatar, đột kích – CF, liên minh huyền thoại lol , ngọc rồng, khí phách anh hùng - kpah giá rẻ, uy tín...">
                            <img height="90px" src="/Quynh/upload-usr/images/my_logo.png" alt="hey" class="c-desktop-logo">
                            <img height="29px" src="/Quynh/upload-usr/images/my_logo.png" alt="hey" class="c-desktop-logo-inverse">
                            <img height="35px" src="/Quynh/upload-usr/images/my_logo.png" alt="hey" class="c-mobile-logo"> </a>
                    </h1>
                    <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                        <span class="c-line"></span>
                        <span class="c-line"></span>
                        <span class="c-line"></span>
                    </button>
                    <button class="c-topbar-toggler" type="button">
                        <i class="fa fa-ellipsis-v"></i>
                    </button>
                    <button class="c-search-toggler" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
                <!-- END: BRAND -->
                <!-- BEGIN: QUICK SEARCH -->
                <form class="c-quick-search" action="#">
                    <input type="text" name="query" placeholder="Tìm kiếm..." value="" class="form-control" autocomplete="off">
                    <span class="c-theme-link">&times;</span>
                </form>
                <!-- END: QUICK SEARCH -->                        <!-- BEGIN: HOR NAV -->
                <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
                <!-- BEGIN: MEGA MENU -->
                <!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
                <style>
                    .c-menu-type-mega:hover {
                        transition-delay: 1s;
                    }

                    .c-layout-header.c-layout-header-4 .c-navbar .c-mega-menu > .nav.navbar-nav > li:focus > a:not(.btn), .c-layout-header.c-layout-header-4 .c-navbar .c-mega-menu > .nav.navbar-nav > li:active > a:not(.btn), .c-layout-header.c-layout-header-4 .c-navbar .c-mega-menu > .nav.navbar-nav > li:hover > a:not(.btn) {
                        color: #3a3f45;
                        background: #FAFAFA;
                    }
                </style>
                <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold d-none hidden-xs hidden-sm">

                    <ul  class="nav navbar-nav c-theme-nav">
                        <li class="c-menu-type-classic">
                            <a rel="" href="http://localhost/Quynh/Home/INDEX.php" class="c-link dropdown-toggle ">TRANG CHỦ</a>
                        </li>
                        <li class="c-menu-type-classic"><a  rel=""  href="http://localhost/Quynh/Home/INDEX.php" class="c-link dropdown-toggle ">NẠP TIỀN</a>
                        </li>
                        <li>
                            <a href="http://localhost/Quynh/Log_In/Log_in.php" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold">
                                <i class="icon-user"></i> Đăng nhập</a>
                        </li>
                        <li>
                            <a href="http://localhost/Quynh/Sign_In/Sign_In.php" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold">
                                <i class="icon-key icons"></i> Đăng ký</a>
                        </li>
                    </ul>


                </nav>



                <nav class="menu-main-mobile c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold hidden-md hidden-lg">

                    <ul  class="nav navbar-nav c-theme-nav">
                        <li class="c-menu-type-classic">
                            <a rel="" href="http://localhost/Quynh/Home/INDEX.php" class="c-link dropdown-toggle ">TRANG CHỦ</a>
                        </li>
                        <li class="c-menu-type-classic">
                            <a  rel=""  href="http://localhost/Home/INDEX.php" class="c-link dropdown-toggle ">NẠP TIỀN</a>
                        </li>
                        <li><a href="http://localhost/Quynh/Log_In/Log_in.php" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold">
                                <i class="icon-user"></i> Đăng nhập</a>
                        </li>
                        <li>
                            <a href="http://localhost/Quynh/Sign_In/Sign_In.php" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold">
                                <i class="icon-key icons"></i> Đăng ký</a>
                        </li>
                    </ul>


                </nav>

                <!-- END: MEGA MENU -->
                <!-- END: LAYOUT/HEADERS/MEGA-MENU -->
                <!-- END: HOR NAV -->
            </div>
            <!-- BEGIN: LAYOUT/HEADERS/QUICK-CART -->
            <!-- BEGIN: CART MENU -->
            <!-- END: CART MENU -->
            <!-- END: LAYOUT/HEADERS/QUICK-CART -->
        </div>
    </div>
</header>
<!-- END: HEADER -->
<!-- END: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: PAGE CONTAINER -->
<div class="c-layout-page">
    <!-- BEGIN: PAGE CONTENT -->
    <div class="login-box">

        <!-- /.login-logo -->
        <div class="login-box-body box-custom">
            <p class="login-box-msg">Đăng nhập hệ thống</p>
            <span class="help-block" style="text-align: center;color: #dd4b39">
                       <strong></strong>
                </span>

            <form action="http://localhost/Quynh/Log_In/Log_in.php" method="POST">
                <input type="hidden" name="_token" value="8WZ20L8yKEZSuqRsFI5x1NTtvCS9yYMWhSnO9K7d">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="username" placeholder="Tài khoản" >
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>

                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="checkbox icheck">
                            <label style="color: #666">
                                <input type="checkbox" name="remember" id="remember" > Ghi nhớ
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-6" style="text-align: right">
                        <a href="/Quynh/Log_In/password/reset" style="color: #666;margin-top: 10px;margin-bottom: 10px;display: block;font-style: italic;">Quên mật khẩu?</a><br>
                    </div>
                    <!-- /.col -->
                </div>

                <div class="row">

                    <!-- /.col -->
                    <div class="col-xs-12">
                        <button href="http://localhost/Quynh/Dao_Quynh/dao_quynh.php" type="submit" class="btn btn-primary btn-block btn-flat" style="margin: 0 auto;">Đăng nhập</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p style="margin-top: 5px">- HOẶC -</p>



                <a href="http://localhost/Quynh/Dao_Quynh/dao_quynh.php" class="btn btn-primary">Facebook Login</a>

                <a href="http://localhost/Quynh/Sign_In/Sign_In.php" class="btn  btn-social btn-google btn-flat">
                    <i class="icon-key icons"></i>Tạo tài khoản</a>
            </div>
            <!-- /.social-auth-links -->
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <style>
        .login-box, .register-box {
            width: 400px;
            margin: 7% auto;

            padding: 20px;;
        }



        @media (max-width: 767px){
            .login-box, .register-box {
                width: 100%;
            }

        }

        .login-box-msg, .register-box-msg {
            margin: 0;
            text-align: center;
            padding: 0 20px 20px 20px;
            text-align: center;
            font-size: 20px;;
            font-weight: bold;
        }

        .box-custom{
            border: 1px solid #cccccc;
            padding: 20px;

            color: #666;
        }
    </style>
    <!-- END: PAGE CONTENT -->
</div>
<div class="modal fade" id="noticeModal" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="loader" style="text-align: center">
            <img src="/Quynh/upload-usr/images/loader.gif" style="width: 50px;height: 50px;display: none" alt=""></div>
        <div class="modal-content">
            &lt;p style=&quot;text-align:center&quot;&gt;&lt;span style=&quot;color:#f39c12&quot;&gt;&lt;strong&gt;SHOP CH&amp;Iacute;NH CHỦ Quỳnh Nghệ Sĩ&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;

            &lt;p style=&quot;text-align:center&quot;&gt;&lt;span style=&quot;color:#e74c3c&quot;&gt;&lt;strong&gt;RA MẮT V&amp;Ograve;NG QUAY BINGO TẾT TRUNG THU&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;

            &lt;p style=&quot;text-align:center&quot;&gt;&lt;strong&gt;&lt;em&gt;&lt;u&gt;&lt;a href=&quot;https://www.facebook.com/chinhpysl&quot;&gt;&lt;span style=&quot;color:#2980b9&quot;&gt;FACEBOOK ADMIN HỖ TRỢ&lt;/span&gt;&lt;/a&gt;&lt;/u&gt;&lt;/em&gt;&lt;/strong&gt;&lt;a href=&quot;https://www.facebook.com/chinhpysl&quot;&gt;&lt;span style=&quot;color:#2980b9&quot;&gt;&lt;strong&gt;&lt;em&gt;&lt;u&gt;&amp;nbsp;TẠI D&amp;Acirc;Y&lt;/u&gt;&lt;/em&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/a&gt;&lt;/p&gt;

            &lt;p&gt;&amp;nbsp;&lt;/p&gt;
        </div>
    </div>
</div>


<div class="modal fade" id="LoadModal" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="loader" style="text-align: center">
            <img src="/Quynh/upload-usr/images/loader.gif" style="width: 50px;height: 50px;display: none" alt=""></div>
        <div class="modal-content">
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        $('.load-modal').each(function (index, elem) {
            $(elem).unbind().click(function (e) {
                e.preventDefault();
                e.preventDefault();
                var curModal = $('#LoadModal');
                if (curModal) {
                    curModal.find('.modal-content').html("<div class=\"loader\" style=\"text-align: center\">" + "<img src=\"/Quynh/upload-usr/images/loader.gif\" style=\"width: 50px;height: 50px;\" alt=''></div>");
                    curModal.modal('show').find('.modal-content').load($(elem).attr('rel'));
                }
            });
        });
    });
</script>



<!-- END: PAGE CONTAINER -->
<a name="footer"></a>
<footer class="c-layout-footer c-layout-footer-3 c-bg-dark">
    <div class="c-prefooter">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="c-container c-first">

                        <p><strong>HỆ THỐNG B&Aacute;N ACC FREE FIRE&nbsp;TỰ ĐỘNG - ĐẢM BẢO UY T&Iacute;N V&Agrave; CHẤT LƯỢNG.</strong></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="c-container c-last">
                        <p><strong>CH&Uacute;NG T&Ocirc;I LU&Ocirc;N LẤY UY T&Iacute;N L&Agrave;M H&Agrave;NG ĐẦU ĐỐI VỚI KH&Aacute;CH H&Agrave;NG. HI VỌNG SẼ ĐƯỢC PHỤC VỤ C&Aacute;C BẠN. CẢM ƠN</strong></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="fb-root"></div>
                    <script>(function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id))
                                return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                    <div class="fb-page" data-href="https://www.facebook.com/ShopQuynhNgheSi" data-tabs="timeline" data-height="270" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/ShopQuynhNgheSi" class="fb-xfbml-parse-ignore">
                            <a href="https://www.facebook.com/ShopQuynhNgheSi">Nick.vn</a>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="c-postfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 c-col">
                </div>
            </div>
        </div>
    </div>
</footer><!-- END: LAYOUT/FOOTERS/FOOTER-5 -->
<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
<div class="c-layout-go2top">
    <i class="icon-arrow-up"></i>
</div><!-- END: LAYOUT/FOOTERS/GO2TOP -->
<!-- BEGIN: LAYOUT/BASE/BOTTOM -->
<!-- BEGIN: CORE PLUGINS -->
<!--[if lt IE 9]>
<![endif]-->
<script src="/assets/frontend/theme/assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="/assets/frontend/theme/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/frontend/theme/assets/plugins/jquery.easing.min.js" type="text/javascript"></script>
<script src="/assets/frontend/theme/assets/plugins/reveal-animate/wow.js" type="text/javascript"></script>
<script src="/assets/frontend/theme/assets/demos/default/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript"></script>
<!-- END: CORE PLUGINS -->
<!-- BEGIN: LAYOUT PLUGINS -->
<script src="/assets/frontend/theme/assets/global/plugins/magnific/magnific.js" type="text/javascript"></script>
<script src="/assets/frontend/theme/assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
<script src="/assets/frontend/theme/assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
<script src="/assets/frontend/theme/assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="/assets/frontend/theme/assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="/assets/frontend/theme/assets/plugins/smooth-scroll/jquery.smooth-scroll.js" type="text/javascript"></script>
<script src="/assets/frontend/theme/assets/plugins/js-cookie/js.cookie.js" type="text/javascript"></script>
<!-- END: LAYOUT PLUGINS -->
<!-- BEGIN: THEME SCRIPTS -->
<script src="/assets/frontend/theme/assets/base/js/components.js" type="text/javascript"></script>
<script src="/assets/frontend/theme/assets/base/js/app.js" type="text/javascript"></script>

<script src="/assets/frontend/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        App.init(); // init core
    });
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })


    $(".menu-main-mobile a").click(function() {

        if( $(this).closest("li").hasClass("c-open")){
            $(this).closest("li").removeClass("c-open");
        }
        else{
            $(this).closest("li").addClass("c-open");
        }
    });

</script>
<!-- END: THEME SCRIPTS -->
<!-- BEGIN: PAGE SCRIPTS -->
<script src="/assets/frontend/theme/assets/plugins/moment.min.js" type="text/javascript"></script>
<script src="/assets/frontend/theme/assets/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
<script src="/assets/frontend/theme/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="/assets/frontend/theme/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="/assets/frontend/theme/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="/assets/frontend/theme/assets/demos/default/js/scripts/pages/datepicker.js" type="text/javascript"></script>
<script src="/assets/frontend/plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js" type="text/javascript"></script>

<script src="/assets/frontend/js/common.js" type="text/javascript"></script>
<!-- END: LAYOUT/BASE/BOTTOM -->

<script>
    //Check nếu thay đổi mật khẩu mới thì login lại
    $(document).ready(function(){
        jQuery.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/checkpass",
            method: 'get',
            success: function (result) {
                console.log(result)
                if(result.status === 1)
                {
                    window.location = '/logout';
                }
                else
                {
                    //Nothing
                }
            },
            error: function (data, textStatus, errorThrown) {
                //Nothing
                console.log(errorThrown)
            }
        });
    })

</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126686260-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-168354921-15');
</script>
</body>
</html>