<?php
/**
 * Template Name: Category-Full
 *
 * This is the template that displays full width page without sidebar
 *
 * @package activello
 */

get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

     
        <?php
          // If comments are open or we have at least one comment, load up the comment template
          zww_archives_list(); 
        ?>

    </main><!-- #main -->

  </div><!-- #primary -->

<?php get_footer(); ?>
