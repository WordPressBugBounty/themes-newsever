<?php

/**
 * List block part for displaying page content in page.php
 *
 * @package Newsever
 */

$excerpt_length = 20;
global $post;
$thumbnail_size = 'medium';
$show_excerpt = 'true';
$col_class = 'col-ten';
?>
<div class="archive-list-post list-style">
  <div class="read-single color-pad">

    <div class="read-img pos-rel col-2 float-l read-bg-img af-sec-list-img">
      <a href="<?php the_permalink(); ?>" aria-label="<?php echo esc_attr(get_the_title($post->ID)); ?>">
        <?php if (has_post_thumbnail()):
          the_post_thumbnail($thumbnail_size);
        endif;
        ?>
      </a>
      <div class="min-read-post-format">
        <?php echo newsever_post_format($post->ID); ?>
        <span class="min-read-item">
          <?php newsever_count_content_words($post->ID); ?>
        </span>
      </div>


    </div>


    <div class="read-details col-2 float-l pad af-sec-list-txt color-tp-pad">
      <div class="read-categories">
        <?php newsever_post_categories(); ?>
      </div>
      <div class="read-title">
        <h4>
          <a href="<?php the_permalink(); ?>" aria-label="<?php echo esc_attr(get_the_title($post->ID)); ?>"><?php the_title(); ?></a>
        </h4>
      </div>
      <div class="entry-meta">
        <?php newsever_post_item_meta(); ?>
      </div>

      <?php if ($show_excerpt != 'false'): ?>
        <div class="read-descprition full-item-discription">
          <div class="post-description">
            <?php if (absint($excerpt_length) > 0) : ?>
              <?php
              $excerpt = newsever_get_excerpt($excerpt_length, get_the_content());
              echo wp_kses_post(wpautop($excerpt));
              ?>
            <?php endif; ?>
          </div>
        </div>
      <?php endif; ?>


    </div>
  </div>
  <?php
  wp_link_pages(array(
    'before' => '<div class="page-links">' . esc_html__('Pages:', 'newsever'),
    'after' => '</div>',
  ));
  ?>
</div>