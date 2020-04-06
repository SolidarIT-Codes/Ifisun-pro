<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v4.3/admin/html/login_v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jun 2019 14:07:37 GMT -->
<head>
    <meta charset="utf-8" />
    <title>IFISUN| Gestion Pro</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/all.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/plugins/animate/animate.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/default/style.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/default/style-responsive.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/default/theme/default.css" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="<?php echo base_url(); ?>assets/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top bg-white">
<!-- begin #page-loader -->
<div id="page-loader" class="fade show"><span class="spinner"></span></div>
<!-- end #page-loader -->

<!-- begin #page-container -->
<div id="page-container" class="fade">
    <!-- begin login -->
    <div class="login login-with-news-feed">
        <!-- begin news-feed -->
        <div class="news-feed">
            <div class="news-image" style="background-image: url(<?php echo base_url(); ?>assets/img/login-bg/ifisun-logo.png)"></div>
            <div class="news-caption">
                <h4 class="caption-title"><b>Ifisun</b> Pro</h4>
                <p>
                    Gestion des données
                </p>
            </div>
        </div>
        <!-- end news-feed -->
        <!-- begin right-content -->
        <div class="right-content">
            <!-- begin login-header -->
            <div class="login-header">
                <div class="brand">
                    <b>Ifisun</b> Pro
                    <small>Gestion des données</small>
                </div>
                <div class="icon">
                    <i class="fa fa-sign-in"></i>
                </div>
            </div>
            <!-- end login-header -->
            <!-- begin login-content -->
            <div class="login-content">
                <?php
                echo validation_errors("<div class='alert alert-danger'>", "Erreur soumission formulaire </div>");

                if ($this->session->flashdata('msg')) {
                    echo $this->session->flashdata('msg');
                }
                ?>
                <form action="<?php echo site_url(); ?>admin/login" method="POST" class="margin-bottom-0">
                    <div class="form-group m-b-15">
                        <input type="text" class="form-control form-control-lg" name="login" placeholder="Login" required />
                    </div>
                    <div class="form-group m-b-15">
                        <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" required />
                    </div>
                    <!--div class="checkbox checkbox-css m-b-30">
                        <input type="checkbox" id="remember_me_checkbox" value="" />
                        <label for="remember_me_checkbox">
                            Remember Me
                        </label>
                    </div-->
                    <div class="login-buttons">
                        <button type="submit" class="btn btn-warning btn-block btn-lg">Se connecter</button>
                    </div>
                    <!--div class="m-t-20 m-b-40 p-b-40 text-inverse">
                        Not a member yet? Click <a href="register_v3.html" class="text-success">here</a> to register.
                    </div-->
                    <hr />
                    <p class="text-center text-grey-darker">
                        &copy; Ifisun Pro Tout Droit Reservé 2019
                    </p>
                </form>
            </div>
            <!-- end login-content -->
        </div>
        <!-- end right-container -->
    </div>
    <!-- end login -->
</div>
<!-- end page container -->

<!-- ================== BEGIN BASE JS ================== -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!--[if lt IE 9]>
<script src="<?php echo base_url(); ?>assets/crossbrowserjs/html5shiv.js"></script>
<script src="<?php echo base_url(); ?>assets/crossbrowserjs/respond.min.js"></script>
<script src="<?php echo base_url(); ?>assets/crossbrowserjs/excanvas.min.js"></script>
<![endif]-->
<script src="<?php echo base_url(); ?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/js-cookie/js.cookie.js"></script>
<script src="<?php echo base_url(); ?>assets/js/theme/default.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/apps.min.js"></script>
<!-- ================== END BASE JS ================== -->

<script>
    $(document).ready(function() {
        App.init();
    });
</script>
</body>

<!-- Mirrored from seantheme.com/color-admin-v4.3/admin/html/login_v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jun 2019 14:07:37 GMT -->
</html>
