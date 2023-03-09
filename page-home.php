<?php get_header(); ?>
  <?php get_template_part('parts/fancyslider', get_post_format() ); ?>
  <?php get_template_part('parts/newaddition', get_post_format() ); ?>
  <!-- <?php get_template_part('parts/bytypes', get_post_format() ); ?> -->
  <?php get_template_part('parts/aboutsection', get_post_format() ); ?>
  <?php get_template_part('parts/bestsellers', get_post_format() ); ?>
  <?php get_template_part('parts/labtest', get_post_format() ); ?> 
  <?php get_template_part('parts/locator', get_post_format() ); ?> 
  <?php get_template_part('parts/press', get_post_format() ); ?> 
  <!-- <?php get_template_part('parts/faqs', get_post_format() ); ?> -->
  <?php get_template_part('parts/contact', get_post_format() ); ?>
        

      </main>
    </div>
</div>
    
    <?php get_footer(); ?>