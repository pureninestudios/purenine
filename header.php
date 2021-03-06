<?php
    $root = $root;
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>PURENINE | The design studio of Thomas Klinger</title>
        <meta name="description" content="PURENINE | The design studio of Thomas Klinger">
        <meta name="keywords" content="PURENINE | The design studio of Thomas Klinger">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/fav-icon.jpg"/>

        <!-- Stylesheets -->
        <link rel="stylesheet" href="<?php echo $root; ?>bootstrap/css/bootstrap.min.css"/><!-- bootstrap grid -->
        <link rel="stylesheet" href="<?php echo $root; ?>bootstrap/css/bootstrap-theme.min.css"/><!-- bootstrap theme -->
        <link rel="stylesheet" href="<?php echo $root; ?>css/font-awesome.min.css"/><!-- retina ready styles -->
        <link rel="stylesheet" href="<?php echo $root; ?>css/retina.css"/><!-- retina ready styles -->
        <link rel="stylesheet" href="<?php echo $root; ?>css/animate.css"/><!-- animation for content -->



        <!-- Google Web fonts -->
        <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,700%7CPlayfair+Display:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800|Open+Sans:400,700" rel="stylesheet">

        <!-- Main stylesheet -->
        <link rel="stylesheet" href="<?php echo $root; ?>css/style.css"/><!-- template styles -->
        <link rel="stylesheet" href="<?php echo $root; ?>css/responsive.css"/><!-- responsive styles -->
    </head>

<?php
    $current = basename($_SERVER['REQUEST_URI']);
    $template = $template;
    // If is empty assume it's homepage
    if ($current == '' || $current == 'index.php' || $template == 'details2') {
        $klass = 'header-wrapper header-wrapper--home hamburger-menu hamburger-menu-dark';
    } else {
        $klass = 'header-wrapper header-wrapper--inner hamburger-menu hamburger-menu-dark header-transparent';
    }
?>

    <body>

        <?php include('module-loader.php'); ?>
        <?php include('module-menu.php'); ?>

        <div class="<?php echo $klass; ?>">
            <!-- #header start -->
            <header id="header">
                <!-- .container-fluid start -->
                <div class="container-fluid">
                    <!-- .main-nav start -->
                    <div class="main-nav">
                        <!-- .row start -->
                        <div class="row">
                            <div class="col-md-12">
                                <nav class="navbar navbar-default nav-left"  >
                                    <!-- .navbar-header start -->
                                    <div class="navbar-header">
                                        <div class="logo">
                                            <a href="http://www.purenine.com">
                                                <span class="icon-container logo-dark">
                                                    <?php if ($current == '' || $current == 'index.php' || $template = 'details2') : ?>
                                                        <img class="svg-black" src="<?php echo $root; ?>images/logo-dark.svg" alt=""/>
                                                    <?php else : ?>
                                                        <img class="svg-black" src="<?php echo $root; ?>images/logo-white.svg" alt=""/>
                                                    <?php endif; ?>
                                                </span>
                                            </a>
                                        </div><!-- .logo end -->
                                    </div><!-- .navbar-header start -->

                                    <!-- hamburger button holder start -->
                                    <div class="burger">
                                        <span class="burger__text">About</span>
                                        <span class="burger__filling"></span>
                                    </div>
                                    <!-- hamburger button holder end -->


                                </nav><!-- .navbar.navbar-default end -->
                            </div><!-- .col-md-12 end -->
                        </div><!-- .row end -->
                    </div><!-- .main-nav end -->
                </div><!-- .container-fluid end -->
            </header><!-- #header-->
        </div><!-- .header-wrapper end -->
