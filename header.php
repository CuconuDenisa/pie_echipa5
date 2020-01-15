<?php include('session.php'); ?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Spitalul Maria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content=""/>
    <!-- css -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection"/>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


    <script src="materialize/js/materialize.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-media.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/animate.js"></script>
    <!-- Vendor Scripts -->
    <script src="js/modernizr.custom.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

    <script>

        jQuery(document).ready( function () {
            jQuery('#table_id').DataTable();
            jQuery('#table_id2').DataTable();

        } );
    </script>

</head>

<body>
<div id="wrapper" class="home-page">
    <header class="topbar">
        <div class="container">
            <div class="row">
                <!-- mail -->
                <div class="col-sm-3">
                    <ul class="info mail">
                        <?php if (!isset($_SESSION['login_user'])) {
                            echo '<li><b id="logout"><a href="login-page.php"> Login</a></b></li>';
                        } else {
                            echo '<li><b id="logout"><a href="logout.php">Log Out</a></b></li>';
                        }
                        ?>

                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <ul class="info">

                            <li><i class="icon-info-blocks material-icons">perm_phone_msg</i><span> 0262-216601</span></li>
                        </ul>
                        <div class="clr"></div>
                    </div>
                </div>
                <!-- info -->

            </div>
        </div>
    </header>

    <!-- start header -->
    <header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><i
                                class="icon-info-blocks material-icons">account_balance</i>Spitalul Maria</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a class="waves-effect waves-dark" href="index.php">Acasă</a></li>
                        <li><a class="waves-effect waves-dark" href="despre.php">Despre noi</a></li>
                        <li><a class="waves-effect waves-dark" href="programari.php">Programari</a></li>

                        <?php if (!isset($_SESSION['login_user'])) {
                            echo '';
                        } else {
                            echo '<li class="dropdown">
                            <a href="#" data-toggle="dropdown"
                               class="dropdown-toggle waves-effect waves-dark">Servicii<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a class="waves-effect waves-dark" href="analize.php">Analize</a></li>
                                <li><a class="waves-effect waves-dark" href="internare.php">Internare</a></li>
                                <li><a class="waves-effect waves-dark" href="pacientinserat.php">Pacienti</a></li>
                                <li><a class="waves-effect waves-dark" href="fisaconsultatii.php">Consultatii</a></li>
                            </ul>';
                        }
                        ?>

                        <li><a class="waves-effect waves-dark" href="istoricpacienti.php">Istoric pacienti</a></li>
                        <li><a class="waves-effect waves-dark" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>