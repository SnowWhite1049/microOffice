<!DOCTYPE html>
<html>
<head>
    <!-- Meta and Title -->
    <meta charset="utf-8">
    <title>MicroOffice - A Responsive Bootstrap 3 Admin Dashboard Template</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme"/>
    <meta name="description" content="AdminK - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- Angular material -->
    <link rel="stylesheet" type="text/css" href="assets/skin/css/angular-material.min.css">
    <!-- Icomoon -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/icomoon/icomoon.css">
    <!-- AnimatedSVGIcons -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/animatedsvgicons/css/codropsicons.css">
    <!-- CSS - allcp forms -->
    <link rel="stylesheet" type="text/css" href="assets/allcp/forms/css/forms.css">
    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css">
    <!-- CSS - theme -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/less/theme.css">
</head>

<script src="assets/js/jquery/jquery-1.12.3.min.js"></script>
<script src="assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>
<script type="text/javascript">    
    
    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }
    function userRegister(){     
       
        if($("#firstname").val() == ""){
            alert("Empty firstname.");
            $("#firstname").focus();
            return false;            
        }
        if($("#lastname").val() == ""){
            alert("Empty lastname.");
            $("#lastname").focus();
            return false;
        }
        if(!isEmail($("#email").val())){
            alert("Email is not valid.");
            $("#email").focus();
            return false;
        }
        if($("#username").val() == ""){
            alert("Empty username.");
            $("#username").focus();
            return false;
        }
        if($("#username").val() == ""){
            alert("Empty username.");
            $("#username").focus();
            return false;
        }

       
        if($("#password").val() != "" && $("#password").val() == $("#confirmPassword").val()) {

           
            if($("#password").val().length < 6) {
                alert("Error: Password must contain at least six characters!");
                $("#password").focus();
                return false;
            }            

            re = /[0-9]/;

            if(!re.test($("#password").val())) {
                alert("Error: password must contain at least one number (0-9)!");
                $("#password").focus();
                return false;
            }
            re = /[a-z]/;
                if(!re.test($("#password").val())) {
                alert("Error: password must contain at least one lowercase letter (a-z)!");
                $("#password").focus();
                return false;
            }
            re = /[A-Z]/;
                if(!re.test($("#password").val())) {
                alert("Error: password must contain at least one uppercase letter (A-Z)!");
                $("#password").focus();
                return false;
            }
        } else {
            alert("Error: Please check that you've entered and confirmed your password!");
            $("#password").focus();
            return false;
        }

        frm.submit();

    }
</script>
<body class="utility-page sb-l-c sb-r-c">
<!-- Body Wrap -->
<form id="frm" name="frm" action="server/register.php" method="post"> 
<div id="main" class="animated fadeIn">
    <!-- Main Wrapper -->
    <section id="content_wrapper">
        <div id="canvas-wrapper">
            <canvas id="demo-canvas"></canvas>
        </div>
        <!-- Content -->
        <section id="content" class="">
            <!-- Registration -->
            <div class="allcp-form theme-primary mw600" id="register">
                <div class="bg-primary mw600 text-center mb20 br3 pt15 pb10">
                    <!-- <img src="assets/img/logo.png" alt=""/> -->
                    <div class="logo-widget">
                        <a class="logo-image mtn" href="index.html">
                            <!-- <img src="assets/img/logo.png" alt="" class="img-responsive"> -->
                        </a>
                        <div class="logo-slogan mtn">
                            <div>MicroOffice<span class="text-info"></span></div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading pn">
                                    <span class="panel-title">
                                      Registration form
                                    </span>
                    </div>
                    <!-- /Panel Heading -->
                    <form method="post" action="/" id="form-register">
                        <div class="panel-body pn">
                            <div class="section row mh10m">
                                <div class="col-md-6 ph10">
                                    <label for="firstname" class="field prepend-icon">
                                        <input type="text" name="firstname" id="firstname"
                                               class="gui-input"
                                               placeholder="First name...">
                                        <span class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </label>
                                </div>
                                <!-- /section -->
                                <div class="col-md-6 ph10">
                                    <label for="lastname" class="field prepend-icon">
                                        <input type="text" name="lastname" id="lastname" class="gui-input"
                                               placeholder="Last name...">
                                        <span class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </label>
                                </div>
                                <!-- /section -->
                            </div>
                            <!-- /section -->
                            <div class="section">
                                <label for="email" class="field prepend-icon">
                                    <input type="email" name="email" id="email" class="gui-input"
                                           placeholder="Email address">
                                    <span class="field-icon">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </label>
                            </div>
                            <!-- /section -->
                            <div class="section">
                                <label for="username" class="field prepend-icon">
                                    <input type="text" name="username" id="username" class="gui-input"
                                           placeholder="Nickname">
                                    <span class="field-icon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </label>
                            </div>
                            <!-- /section -->
                            <div class="section">
                                <label for="password" class="field prepend-icon">
                                    <input type="password" name="password" id="password" class="gui-input"
                                           placeholder="Create a password">
                                    <span class="field-icon">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </label>
                            </div>
                            <!-- /section -->
                            <div class="section">
                                <label for="confirmPassword" class="field prepend-icon">
                                    <input type="password" name="confirmPassword" id="confirmPassword"
                                           class="gui-input"
                                           placeholder="Retype your password">
                                    <span class="field-icon">
                                        <i class="fa fa-unlock-alt"></i>
                                    </span>
                                </label>
                            </div>
                            <!-- /section -->
                            <div class="section">
                                <div class="bs-component pull-left mt10 mb10">
                                    <div class="checkbox-custom checkbox-primary mb5">
                                        <input type="checkbox" checked="" id="agree">
                                        <label for="agree">I agree to the
                                            <a href="#"> terms of use. </a></label>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <button type="button" onclick="userRegister()" class="btn btn-bordered btn-primary">I Accept - Create Account
                                    </button>
                                </div>
                            </div>
                            <!-- /section -->
                        </div>
                        <!-- /Form -->
                        <div class="panel-footer">
                        </div>
                        <!-- /Panel Footer -->
                    </form>
                </div>
            </div>
            <!-- /Spec Form -->
        </section>
        <!-- /Content -->
    </section>
    <!-- /Main Wrapper -->
</div>
</form>
<!-- /Body Wrap  -->
<!-- Scripts -->
<!-- jQuery -->
<!-- AnimatedSVGIcons -->
<script src="assets/fonts/animatedsvgicons/js/snap.svg-min.js"></script>
<script src="assets/fonts/animatedsvgicons/js/svgicons-config.js"></script>
<script src="assets/fonts/animatedsvgicons/js/svgicons.js"></script>
<script src="assets/fonts/animatedsvgicons/js/svgicons-init.js"></script>
<!-- Scroll -->
<script src="assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- HighCharts Plugin -->
<script src="assets/js/plugins/highcharts/highcharts.js"></script>
<!-- CanvasBG JS -->
<script src="assets/js/plugins/canvasbg/canvasbg.js"></script>
<!-- Theme Scripts -->
<script src="assets/js/utility/utility.js"></script>
<script src="assets/js/demo/demo.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/demo/widgets_sidebar.js"></script>
<script src="assets/js/pages/dashboard_init.js"></script>
<!-- /Scripts -->
</body>
</html>
