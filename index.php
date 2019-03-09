<?php
get_header();
?>
<main>
  <div class="container">
    <div class="maincol">
      <div class="contents">
        <?php
        if (have_posts()) :
          while ( have_posts()) :
            the_post();
            get_template_part( 'shared/_content');
          endwhile;
          get_template_part( 'shared/_pagenavi' ); # ページナビの読み込み
        else :
          get_template_part( 'shared/_content', 'none' );
        endif;
        ?>
      </div>
    </div>
    <?php get_sidebar() ?>
  </div>
</main>
<?php
get_footer();
