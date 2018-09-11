
<?php if (is_singular()) : ?>

  <?php the_content() ?>
<?php else : ?>
  <?php the_post_thumbnail('thumbnail') ?>
  <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
  <?php the_time('Y年n月j日') ?>
  <?php the_excerpt(); ?>
<?php endif; ?>
<hr>
