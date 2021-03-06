<article <?php post_class( 'kiji-list' ); ?>>
    <a href="<?php the_permalink(); ?>">
      <!--画像を追加-->
      <?php if( has_post_thumbnail() ): ?>
        <?php the_post_thumbnail('medium'); ?>
      <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.gif" alt="no-img"/>
      <?php endif; ?>
      <div class="text">
        <!--タイトル-->
        <h2><?php the_title(); ?></h2>
        <!--投稿日を表示-->
        <span class="kiji-date">
          <i class="fas fa-pencil-alt"></i>
          <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
            <?php echo get_the_date(); ?>
          </time>
        </span>
        <!--カテゴリ-->
        <?php if (!is_category()): ?>
          <?php if( has_category() ): ?>
          <span class="cat-data">
            <?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
          </span>
          <?php endif; ?>
        <?php endif; ?>
        <!--抜粋-->
        <?php the_excerpt(); ?>
      </div>
    </a>
  </article>