<footer class="footer-section">
        <div class="container text-center">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>13608 Wilshire Bvld, <br />STE P04 -1084, </br> Los Angeles, CA, 90010</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>+1 (213) 221-8049</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>Info@OPMSKratom.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="reducer" />
            <div class="footer-content">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/OPMS.webp" width="200vw" height="350vh" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>
                                  Optimized Plant Mediated Solutions has been the leader in the Kratom 
                                  and Kava extract industry since 2010 due to its unique cold water 
                                  extraction process.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                              <li><a href="/showall">PRODUCTS</a></li>
                              <li><a href="/about-us">ABOUT</a></li>
                              <li><a href="/shipping-returns">RETURNS</a></li>
                              <li><a href="/lab-results">LAB RESULT</a></li>
                              <li><a href="/contact-us">CONTACT US</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                          <h3 class="text-center col-white">Get Exclusive Offers</h3>
                              <span>Be the first to know about exclusive offers and product updates.</span>
                              <form class="condenser">
                                <div class="form-group">
                                  <!-- <label for="exampleInputEmail1">Email address</label> -->
                                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                  <small id="emailHelp" class="form-text text-muted txt-reducer">We'll never share your email with anyone else.</small>
                                </div>
                                <br />
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="hr-reducer" />
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2023, All Right Reserved <a href="#">O.P.M.S.</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                        <?php wp_nav_menu( array('theme_location' => 'krillin_footer-menu', 'depth' =>1 )); ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    
<!-- <footer class="site-footer">
<div class="row justify-content-lg-center">
    <div class="col col-lg-2">
      <ul class="simpler titler">
        <li><a href="/showall">PRODUCTS</a></li>
        <li><a href="/about-us">ABOUT</a></li>
        <li><a href="/shipping-returns">RETURNS</a></li>
        <li><a href="/lab-results">LAB RESULT</a></li>
        <li><a href="/contact-us">CONTACT US</a></li>
      </ul>
    <span class="footer-hider"><?php wp_nav_menu( array('theme_location' => 'krillin_footer-menu', 'depth' =>1 )); ?></span> 
    </div>
    <div class="vl col-lg-auto"></div>
    <div class="col- col-lg-6 text-center">
    <h3 class="text-center col-white">Get Exclusive Offers</h3>
        <span>Be the first to know about exclusive offers and product updates.</span>
        <form class="condenser">
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
          <p class='smallertx footer-bottom'>© 2023 O.P.M.S.® - All Rights Reserved. </p>
      </div>
          <nav class="footer-menu smallertx">
              <?php wp_nav_menu( array('theme_location' => 'krillin_footer-menu', 'depth' =>1 )); ?>
          </nav>
      </div>
          </footer>
      </div>
    <?php wp_footer(); ?>
</div> -->