<!DOCTYPE html>
 <html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class();?>>
        <div id='page' class='site'>
            <header>
                <!-- <section class="top-bar">
                    <div class="container">
                    </div>
                </section> -->
                <section class="menu-area">
                    <div class="container">
                    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
                    <div class="container text-center">
  <div class="row align-items-end"> 
    <?php wp_nav_menu( array( 'theme_location' => 'krillin_main-menu', 'depth' => 2 )); ?>
    </div>
</nav>

                        <nav class="main-menu">
                            <button class="check-button">
                                <div class="menu-icon">
                                    <div class="bar1"></div>
                                    <div class="bar2"></div>
                                    <div class="bar3"></div>
                                </div>
                            </button>
                        </nav>                    
                    </div>
                    
            </section>
            </header>