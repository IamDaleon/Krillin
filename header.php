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
                <nav class="navbar navbar-expand-md bg-light navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/OPMS.webp" class="d-block smlimg " alt="..."></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    </ul>
  </div>
</nav>
                    
            </section>
            </header>