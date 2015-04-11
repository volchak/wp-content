<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>examByVolchak</title>

    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo("stylesheet_url"); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
   <script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.2.min.js"></script>
       <script src="<?php bloginfo('template_url'); ?>/js/commonJs.js"></script>
    <![endif]-->
    <?php wp_head();?>
</head>
<body>
    <header class="header">
        <div class="wrap-header">
            <a class="logo-company" href="#">
                <img src="img/main-logo.png" width="116" height="116" alt="logo company">
            </a>
            <nav class="navigation">
                <ul>
                    <li><a href="#">HOME</a> </li>
                    <li><a href="#">PORTFOLIO</a> </li>
                    <li class="active"><a href="#">BLOG</a> </li>
                    <li><a href="#">ABOUT US</a> </li>
                    <li><a href="#">CONTACT</a> </li>
                </ul>
            </nav>
        </div>
        <div class="bottom-header">
            <div class="wrap-bootom-header">
                <span class="word-blog">blog</span>
            </div>
        </div>
    </header>