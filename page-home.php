<?php get_header(); ?>
<?php get_template_part('parts/fancyslider', get_post_format() ); ?>
<section>
  <?php get_template_part('parts/bytypes', get_post_format() ); ?>
  <?php get_template_part('parts/bestsellers', get_post_format() ); ?>
  <?php get_template_part('parts/learn', get_post_format() ); ?>
  <?php get_template_part('parts/labtest', get_post_format() ); ?> 
</section>
            </main>
        </div>
    </div>
    
    <?php get_footer(); ?>