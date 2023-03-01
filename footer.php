<footer class="site-footer">
<div class="row justify-content-lg-center">
    <div class="col col-lg-2">
      <ul class="simpler">
        <li><a href="/"> HOME</a></li>
        <li>PRODUCTS</li>
        <li>SITEMAP</li>
        <li>TERMS & CONDITION</li>
        <li>PRIVACY</li>
        <li>CONTACT</li>
      </ul>
    <span class="footer-hider"><?php wp_nav_menu( array('theme_location' => 'krillin_footer-menu', 'depth' =>1 )); ?></span>
    </div>
    <div class="vl col-lg-auto"></div>
    <div class="col- col-lg-6 text-center">
    <h3 class="text-center col-white">Get Exclusive Offers</h3>
        <span>Be the first to know about exclusive offers and product updates.</span>
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted txt-reducer">We'll never share your email with anyone else.</small>
          </div>
          <br />
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="vl col-lg-auto"></div>
    
    <div class="col col-lg-2 text-center">
    <a class="navbar-brand" href="/"><img src='<?php echo get_template_directory_uri(); ?>/assets/images/OPMS.webp' width='65vw' height='65vh'></a>
        <p>Optimized Plant Mediated Solutions has been the leader in the Kratom and Kava extract industry since 2010 due to its unique cold water extraction process.</p>
    </div>
  </div>
  <br />
  <hr class="hr-reducer" />
  <div class="container">
      <div class="copyright">
          <p class='smallertx footer-bottom'>All Copyright OPMS - All Rights Reserved. </p>
      </div>
          <nav class="footer-menu smallertx">
              <?php wp_nav_menu( array('theme_location' => 'krillin_footer-menu', 'depth' =>1 )); ?>
          </nav>
      </div>
          </footer>
      </div>
    <?php wp_footer(); ?>
</div>