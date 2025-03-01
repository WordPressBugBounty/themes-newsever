<?php
if (!function_exists('newsever_header_section')) :
  /**
   * Banner Slider
   *
   * @since Newsever 1.0.0
   *
   */
  function newsever_header_section()
  {

    $header_layout = newsever_get_option('header_layout');
?>

    <header id="masthead" class="header-style1 <?php echo esc_attr($header_layout); ?>">

      <?php

      newsever_get_block('layout-1', 'header');


      ?>


      <div class="header-menu-part">
        <div id="main-navigation-bar" class="bottom-bar">
          <div class="navigation-section-wrapper">
            <div class="container-wrapper">
              <div class="header-middle-part">
                <div class="navigation-container">
                  <nav class="main-navigation clearfix">
                    <?php
                    $global_show_home_menu = newsever_get_option('global_show_home_menu');
                    $global_home_menu_icon = newsever_get_option('global_home_menu_icon');
                    if ($global_show_home_menu == 'yes'):
                    ?>
                      <span class="aft-home-icon">
                        <?php $home_url = home_url(); ?>
                        <a href="<?php echo esc_url($home_url); ?>" aria-label="<?php esc_attr_e('Home', 'newsever') ?>">
                          <i class="<?php echo esc_attr($global_home_menu_icon); ?>" aria-hidden="true"></i>
                        </a>
                      </span>
                    <?php endif; ?>
                    <span
                      class="toggle-menu"
                      role="button"
                      aria-controls="primary-menu"
                      aria-expanded="false"
                      tabindex="0"
                      aria-label="<?php esc_attr_e('Menu', 'newsever'); ?>"
                      aria-expanded="false">
                      <a href="javascript:void(0)" aria-label="Menu" class="aft-void-menu">
                        <span class="screen-reader-text">
                          <?php esc_html_e('Primary Menu', 'newsever'); ?>
                        </span>
                        <i class="ham"></i>
                      </a>
                    </span>
                    <?php
                    $global_show_home_menu = newsever_get_option('global_show_home_menu_border');

                    wp_nav_menu(array(
                      'theme_location' => 'aft-primary-nav',
                      'menu_id' => 'primary-menu',
                      'container' => 'div',
                      'container_class' => 'menu main-menu menu-desktop ' . $global_show_home_menu,
                    ));
                    ?>
                  </nav>
                </div>
              </div>
              <div class="header-right-part">
                <div class="af-search-wrap">
                  <div class="search-overlay">
                    <a href="#" title="Search" class="search-icon">
                      <i class="fa fa-search"></i>
                    </a>
                    <div class="af-search-form">
                      <?php get_search_form(); ?>
                    </div>
                  </div>
                </div>
                <div class="popular-tag-custom-link">
                  <?php
                  $aft_enable_custom_link = newsever_get_option('show_watch_online_section');
                  $watch_online_icon = newsever_get_option('watch_online_icon');
                  if ($aft_enable_custom_link):
                    $aft_custom_link = newsever_get_option('aft_custom_link');
                    $aft_custom_title = newsever_get_option('aft_custom_title');

                  ?>
                    <div class="custom-menu-link">

                      <a href="<?php echo esc_url($aft_custom_link); ?>">
                        <i class="<?php echo esc_attr($watch_online_icon); ?>" aria-hidden="true"></i>
                        <span><?php echo esc_html($aft_custom_title); ?></span>
                      </a>
                    </div>

                  <?php endif; ?>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </header>

    <!-- end slider-section -->
<?php
  }
endif;
add_action('newsever_action_header_section', 'newsever_header_section', 40);
