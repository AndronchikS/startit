<!DOCTYPE html>
<html lang=<?php echo bloginfo('language'); ?>>
<head>
    <!-- Meta Tags -->
    <meta charset=<?php echo bloginfo('charset'); ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="Carrby - Agency Template">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css"
          href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <!-- Page Title -->
    <title><?php bloginfo('name'); ?></title>

    <!-- Favicon and Touch Icons -->
    <link href=<?php the_field('icon', 194); ?> rel="shortcut icon
    " type="image/png">
    <?php wp_head(); ?>
    <!--<base target='_blank' />-->
</head>
<body>
<!-- Start Header -->
<header id="header" class="<?php echo $classMenu?>">
    <div class="navigation">
        <div class="container">
            <nav id="flexmenu">
                <div class="logo">
                    <a href="index.php"><img src=<?php the_field($mainLogo, 396); ?> alt="logo"></a>
                </div>
                <div class="nav-inner">
                    <div id="mobile-toggle" class="mobile-btn"></div>
                    <?php
                    if (has_nav_menu('menutop')) {
                        wp_nav_menu(array(
                            'theme_location' => 'menutop',
                            'menu_class' => 'main-menu',
                            'container' => false,
                        ));
                    }
                    ?>
                </div>
            </nav>
        </div>
    </div>
</header>
