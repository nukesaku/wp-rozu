<?php
get_header();
?>
<main>
  <div class="container">
    <div class="maincol">
      <?php
      if (have_posts()) :
        while ( have_posts()) :
          the_post();
          get_template_part( 'shared/_content', 'list' );
        endwhile;
      else :
        get_template_part( 'shared/_content', 'none' );
      endif;
      ?>
    </div>
    <?php get_sidebar() ?>
  </div>
</main>
<?php
get_footer();
