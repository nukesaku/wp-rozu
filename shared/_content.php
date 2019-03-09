
<?php if (is_singular()) : ?>

  <?php the_content() ?>
<?php else : ?>
  <article class="content">
    <a href="<?php the_permalink() ?>">
      <div class="eyecatch"><?php the_post_thumbnail('thumbnail') ?></div>
      <section class="content-info">
        <div class="content-title"><?php the_title() ?></div>
        <div class="content-body"><?php the_excerpt(); ?></div>
        <div class="content-updated-at"><?php the_time('Y年n月j日') ?></div>
      </section>
    </a>
  </article>
<?php endif; ?>
