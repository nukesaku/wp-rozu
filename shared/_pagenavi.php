<div class="pagelink">
  <?php $args = [
      'end_size' => 3,
      'mid_size' => 1,
      'prev_text' => '&laquo; 前へ',
      'next_text' => '次へ &raquo;'
    ];
    echo paginate_links( $args ); ?>
</div>
