<?php

/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Newsever
 */

if (!function_exists('newsever_post_categories')) :
  function newsever_post_categories($separator = '&nbsp')
  {
    $global_show_categories = newsever_get_option('global_show_categories');
    if ($global_show_categories == 'no') {
      return;
    }

    // Hide category and tag text for pages.
    if ('post' === get_post_type()) {

      global $post;

      $post_categories = get_the_category($post->ID);
      if ($post_categories) {
        $output = '<ul class="cat-links">';
        foreach ($post_categories as $post_category) {
          $t_id = $post_category->term_id;
          $color_id = "category_color_" . $t_id;

          // retrieve the existing value(s) for this meta field. This returns an array
          $term_meta = get_option($color_id);

          $color_class = ($term_meta) ? $term_meta['color_class_term_meta'] : 'category-color-1';

          $output .= '<li class="meta-category">
                             <a class="newsever-categories ' . esc_attr($color_class) . '"  aria-label="' . esc_attr($post_category->name) . '" href="' . esc_url(get_category_link($post_category)) . '" alt="' . esc_attr(sprintf(__('View all posts in %s', 'newsever'), $post_category->name)) . '"> 
                                 ' . esc_html($post_category->name) . '
                             </a>
                        </li>';
        }
        $output .= '</ul>';
        echo $output;
      }
    }
  }
endif;


if (!function_exists('newsever_get_category_color_class')) :

  function newsever_get_category_color_class($term_id)
  {

    $color_id = "category_color_" . $term_id;
    // retrieve the existing value(s) for this meta field. This returns an array
    $term_meta = get_option($color_id);
    $color_class = ($term_meta) ? $term_meta['color_class_term_meta'] : '';
    return $color_class;
  }
endif;

if (!function_exists('newsever_post_item_meta')) :

  function newsever_post_item_meta()
  {

    global $post;
    if ('post' == get_post_type($post->ID)):

      $author_id = $post->post_author;
      $display_setting = newsever_get_option('global_post_date_author_setting');
      $date_display_setting = newsever_get_option('global_date_display_setting');

?>

      <span class="author-links">

        <?php

        if ($display_setting == 'show-date-author' || $display_setting == 'show-date-only'): ?>
          <span class="item-metadata posts-date">
            <i class="fa fa-clock-o"></i>
            <?php
            if ($date_display_setting == 'default-date') {
              the_time(get_option('date_format'));
            } else {
              echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ' . __('ago', 'newsever');
            }

            ?>
          </span>
        <?php endif; ?>
        <?php if ($display_setting == 'show-date-author' || $display_setting == 'show-author-only'): ?>

          <span class="item-metadata posts-author byline">
            <i class="fa fa-pencil-square-o"></i>
            <?php newsever_by_author(); ?>
          </span>
          <?php endif;
        $show_comment_count = newsever_get_option('global_show_comment_count');

        if ($show_comment_count == 'yes'):

          $comment_count = get_comments_number($post->ID);

          if (absint($comment_count) >= 1):
          ?>

            <span class="min-read-post-comment">
              <a class="af-comment-count" href="<?php the_permalink(); ?>" aria-label="<?php echo esc_attr(get_the_title($post->ID)); ?>">
                <?php echo get_comments_number($post->ID); ?>
              </a>
            </span>
        <?php endif;
        endif;
        ?>

      </span>
    <?php
    endif;
  }
endif;


if (!function_exists('newsever_post_item_tag')) :

  function newsever_post_item_tag($view = 'default')
  {
    global $post;

    if ('post' === get_post_type()) {

      /* translators: used between list items, there is a space after the comma */
      $tags_list = get_the_tag_list('', ' ');
      if ($tags_list) {
        /* translators: 1: list of tags. */
        printf('<span class="tags-links">' . esc_html('Tags: %1$s') . '</span>', $tags_list); // WPCS: XSS OK.
      }
    }

    if (is_single()) {
      edit_post_link(
        sprintf(
          wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
            __('Edit <span class="screen-reader-text">%s</span>', 'newsever'),
            array(
              'span' => array(
                'class' => array(),
              ),
            )
          ),
          get_the_title()
        ),
        '<span class="edit-link">',
        '</span>'
      );
    }
  }
endif;

if (!function_exists('newsever_post_item_publish_date')) {
  function newsever_post_item_publish_date()
  {

    $display_setting = newsever_get_option('global_post_date_author_setting');
    $date_display_setting = newsever_get_option('global_date_display_setting');
    if ($display_setting == 'show-date-author' || $display_setting == 'show-date-only'): ?>
      <span class="item-metadata posts-date">
        <i class="fa fa-clock-o"></i>
        <?php
        if ($date_display_setting == 'default-date') {
          the_time(get_option('date_format'));
        } else {
          echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ' . __('ago', 'newsever');
        }

        ?>
      </span>
    <?php endif;
  }
}

if (!function_exists('newsever_post_item_publish_author')) {
  function newsever_post_item_publish_author()
  {
    global $post;
    $author_id = $post->post_author;
    $display_setting = newsever_get_option('global_post_date_author_setting');
    $date_display_setting = newsever_get_option('global_date_display_setting');
    if ($display_setting == 'show-date-author' || $display_setting == 'show-author-only'): ?>

      <span class="item-metadata posts-author byline">
        <i class="fa fa-pencil-square-o"></i>
        <?php newsever_by_author(); ?>
      </span>
<?php endif;
  }
}
