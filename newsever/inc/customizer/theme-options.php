<?php

/**
 * Option Panel
 *
 * @package Newsever
 */

$default = newsever_get_default_theme_options();
/*theme option panel info*/
require get_template_directory() . '/inc/customizer/frontpage-options.php';

// Add Theme Options Panel.
$wp_customize->add_panel('theme_option_panel',
    array(
        'title' => __('Theme Options', 'newsever'),
        'priority' => 200,
        'capability' => 'edit_theme_options',
    )
);


// Preloader Section.
$wp_customize->add_section('site_preloader_settings',
    array(
        'title' => __('Preloader Options', 'newsever'),
        'priority' => 4,
        'capability' => 'edit_theme_options',
        'panel' => 'theme_option_panel',
    )
);

// Setting - preloader.
$wp_customize->add_setting('enable_site_preloader',
    array(
        'default' => $default['enable_site_preloader'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'newsever_sanitize_checkbox',
    )
);

$wp_customize->add_control('enable_site_preloader',
    array(
        'label' => __('Enable preloader', 'newsever'),
        'section' => 'site_preloader_settings',
        'type' => 'checkbox',
        'priority' => 10,
    )
);
    
    
    /**
     * Layout options section
     *
     * @package Newsever
     */

// Layout Section.
    $wp_customize->add_section('site_layout_settings',
        array(
            'title' => __('Global Settings', 'newsever'),
            'priority' => 9,
            'capability' => 'edit_theme_options',
            'panel' => 'theme_option_panel',
        )
    );


// Setting - global content alignment of news.
    $wp_customize->add_setting('global_content_alignment',
        array(
            'default' => $default['global_content_alignment'],
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'newsever_sanitize_select',
        )
    );
    
    $wp_customize->add_control('global_content_alignment',
        array(
            'label' => __('Global Content Alignment', 'newsever'),
            'section' => 'site_layout_settings',
            'type' => 'select',
            'choices' => array(
                'align-content-left' => __('Content - Primary sidebar', 'newsever'),
                'align-content-right' => __('Primary sidebar - Content', 'newsever'),
                'full-width-content' => __('Full width content', 'newsever')
            ),
            'priority' => 130,
        ));

// Setting - global content alignment of news.
    $wp_customize->add_setting('global_show_categories',
        array(
            'default' => $default['global_show_categories'],
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'newsever_sanitize_select',
        )
    );
    
    $wp_customize->add_control('global_show_categories',
        array(
            'label' => __('Post Categories', 'newsever'),
            'section' => 'site_layout_settings',
            'type' => 'select',
            'choices' => array(
                'yes' => __('Show', 'newsever'),
                'no' => __('Hide', 'newsever'),
            
            ),
            'priority' => 130,
        ));


// Setting - global content alignment of news.
    $wp_customize->add_setting('global_widget_excerpt_setting',
        array(
            'default' => $default['global_widget_excerpt_setting'],
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'newsever_sanitize_select',
        )
    );
    
    $wp_customize->add_control('global_widget_excerpt_setting',
        array(
            'label' => __('Excerpt Mode', 'newsever'),
            'section' => 'site_layout_settings',
            'type' => 'select',
            'choices' => array(
                'trimmed-content' => __('Trimmed Content', 'newsever'),
                'default-excerpt' => __('Default Excerpt', 'newsever'),
            
            ),
            'priority' => 130,
        ));



// Breadcrumb Section.
$wp_customize->add_section('site_breadcrumb_settings',
    array(
        'title'      => __('Breadcrumb Options', 'newsever'),
        'priority'   => 50,
        'capability' => 'edit_theme_options',
        'panel'      => 'theme_option_panel',
    )
);

// Setting - breadcrumb.
$wp_customize->add_setting('enable_breadcrumb',
    array(
        'default'           => $default['enable_breadcrumb'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'newsever_sanitize_checkbox',
    )
);

$wp_customize->add_control('enable_breadcrumb',
    array(
        'label'    => __('Show breadcrumbs', 'newsever'),
        'section'  => 'site_breadcrumb_settings',
        'type'     => 'checkbox',
        'priority' => 10,
    )
);


// Setting - global content alignment of news.
$wp_customize->add_setting('select_breadcrumb_mode',
    array(
        'default'           => $default['select_breadcrumb_mode'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'newsever_sanitize_select',
    )
);

$wp_customize->add_control( 'select_breadcrumb_mode',
    array(
        'label'       => __('Select Breadcrumbs', 'newsever'),
        'description' => __("Please ensure that you have enabled the plugin's breadcrumbs before choosing other than Default", 'newsever'),
        'section'     => 'site_breadcrumb_settings',
        'type'        => 'select',
        'choices'               => array(
            'default' => __( 'Default', 'newsever' ),
            'yoast' => __( 'Yoast SEO', 'newsever' ),
            'rankmath' => __( 'Rank Math', 'newsever' ),
            'bcn' => __( 'NavXT', 'newsever' ),
        ),
        'priority'    => 100,
    ));



/**
     * Header section
     *
     * @package Newsever
     */

// Frontpage Section.
    $wp_customize->add_section('header_options_settings',
        array(
            'title' => __('Header Options', 'newsever'),
            'priority' => 49,
            'capability' => 'edit_theme_options',
            'panel' => 'theme_option_panel',
        )
    );




// Setting - sticky_header_option.
    $wp_customize->add_setting('enable_sticky_header_option',
        array(
            'default' => $default['enable_sticky_header_option'],
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'newsever_sanitize_checkbox',
        )
    );
    $wp_customize->add_control('enable_sticky_header_option',
        array(
            'label' => __('Enable Sticky Header', 'newsever'),
            'section' => 'header_options_settings',
            'type' => 'checkbox',
            'priority' => 11
        )
    );

// Setting - global content alignment of news.
$wp_customize->add_setting('global_show_home_menu',
    array(
        'default' => $default['global_show_home_menu'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'newsever_sanitize_select',
    )
);

$wp_customize->add_control('global_show_home_menu',
    array(
        'label' => __('Home Menu Icon', 'newsever'),
        'section' => 'header_options_settings',
        'type' => 'select',
        'choices' => array(
            'yes' => __('Show', 'newsever'),
            'no' => __('Hide', 'newsever'),

        ),
        'priority' => 11,
    ));




//=================================
//Watch Online Section.
//=================================


//section title
$wp_customize->add_setting('custom_link_section_title',
    array(
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    new Newsever_Section_Title(
        $wp_customize,
        'custom_link_section_title',
        array(
            'label' => __('Custom Link Section ', 'newsever'),
            'section' => 'header_options_settings',
            'priority' => 100,

        )
    )
);


$wp_customize->add_setting('show_watch_online_section',
    array(
        'default' => $default['show_watch_online_section'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'newsever_sanitize_checkbox',
    )
);

$wp_customize->add_control('show_watch_online_section',
    array(
        'label' => __('Enable Watch Online Section', 'newsever'),
        'section' => 'header_options_settings',
        'type' => 'checkbox',
        'priority' => 100,

    )
);

// Setting - sticky_header_option.
$wp_customize->add_setting('aft_custom_title',
    array(
        'default' => $default['aft_custom_title'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control('aft_custom_title',
    array(
        'label' => __('Title', 'newsever'),
        'section' => 'header_options_settings',
        'type' => 'text',
        'priority' => 130,
        'active_callback' => 'newsever_show_watch_online_section_status'
    )
);

// Setting - sticky_header_option.
$wp_customize->add_setting('aft_custom_link',
    array(
        'default' => $default['aft_custom_link'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control('aft_custom_link',
    array(
        'label' => __('Button Link', 'newsever'),
        'section' => 'header_options_settings',
        'type' => 'text',
        'priority' => 130,
        'active_callback' => 'newsever_show_watch_online_section_status'
    )
);







//========== comment count options ===============

// Global Section.
$wp_customize->add_section('site_comment_count_settings',
    array(
        'title' => __('Comment Count', 'newsever'),
        'priority' => 50,
        'capability' => 'edit_theme_options',
        'panel' => 'theme_option_panel',
    )
);

// Setting - global content alignment of news.
$wp_customize->add_setting('global_show_comment_count',
    array(
        'default' => $default['global_show_comment_count'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'newsever_sanitize_select',
    )
);

$wp_customize->add_control('global_show_comment_count',
    array(
        'label' => __('Comment Count', 'newsever'),
        'section' => 'site_comment_count_settings',
        'type' => 'select',
        'choices' => array(
            'yes' => __('Show', 'newsever'),
            'no' => __('Hide', 'newsever'),

        ),
        'priority' => 130,
    ));



//========== minutes read count options ===============

// Global Section.
$wp_customize->add_section('site_min_read_settings',
    array(
        'title' => __('Minutes Read Count', 'newsever'),
        'priority' => 50,
        'capability' => 'edit_theme_options',
        'panel' => 'theme_option_panel',
    )
);


// Setting - global content alignment of news.
$wp_customize->add_setting('global_show_min_read',
    array(
        'default' => $default['global_show_min_read'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'newsever_sanitize_select',
    )
);

$wp_customize->add_control('global_show_min_read',
    array(
        'label' => __('Minutes Read Count', 'newsever'),
        'section' => 'site_min_read_settings',
        'type' => 'select',
        'choices' => array(
            'yes' => __('Show', 'newsever'),
            'no' => __('Hide', 'newsever'),

        ),
        'priority' => 130,
    ));

//========== date and author options ===============

// Global Section.
$wp_customize->add_section('site_post_date_author_settings',
    array(
        'title' => __('Date and Author', 'newsever'),
        'priority' => 50,
        'capability' => 'edit_theme_options',
        'panel' => 'theme_option_panel',
    )
);

// Setting - global content alignment of news.
$wp_customize->add_setting('global_post_date_author_setting',
    array(
        'default' => $default['global_post_date_author_setting'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'newsever_sanitize_select',
    )
);


$wp_customize->add_control('global_post_date_author_setting',
    array(
        'label' => __('Date and Author', 'newsever'),
        'section' => 'site_post_date_author_settings',
        'type' => 'select',
        'choices' => array(
            'show-date-author' => __('Show Date and Author', 'newsever'),
            'hide-date-author' => __('Hide All', 'newsever'),
        ),
        'priority' => 130,
    ));



//========== single posts options ===============

// Single Section.
$wp_customize->add_section('site_single_posts_settings',
    array(
        'title' => __('Single Post', 'newsever'),
        'priority' => 50,
        'capability' => 'edit_theme_options',
        'panel' => 'theme_option_panel',
    )
);

// Setting - related posts.
$wp_customize->add_setting('single_show_featured_image',
    array(
        'default' => $default['single_show_featured_image'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'newsever_sanitize_checkbox',
    )
);

$wp_customize->add_control('single_show_featured_image',
    array(
        'label' => __('Show Featured Image', 'newsever'),
        'section' => 'site_single_posts_settings',
        'type' => 'checkbox',
        'priority' => 100,
    )
);


//========== related posts  options ===============

// Single Section.
$wp_customize->add_section('site_single_related_posts_settings',
    array(
        'title' => __('Related Posts', 'newsever'),
        'priority' => 50,
        'capability' => 'edit_theme_options',
        'panel' => 'theme_option_panel',
    )
);



// Setting - related posts.
$wp_customize->add_setting('single_related_posts_title',
    array(
        'default' => $default['single_related_posts_title'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control('single_related_posts_title',
    array(
        'label' => __('Title', 'newsever'),
        'section' => 'site_single_related_posts_settings',
        'type' => 'text',
        'priority' => 100,
        //'active_callback' => 'newsever_related_posts_status'
    )
);

/**
 * Archive options section
 *
 * @package Newsever
 */

// Archive Section.
$wp_customize->add_section('site_archive_settings',
    array(
        'title' => __('Archive Settings', 'newsever'),
        'priority' => 50,
        'capability' => 'edit_theme_options',
        'panel' => 'theme_option_panel',
    )
);



// Setting - archive content view of news.
$wp_customize->add_setting('archive_image_alignment_list',
    array(
        'default' => $default['archive_image_alignment_list'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'newsever_sanitize_select',
    )
);

$wp_customize->add_control('archive_image_alignment_list',
    array(
        'label' => __('Image alignment', 'newsever'),
        'description' => __('Select image alignment for archive', 'newsever'),
        'section' => 'site_archive_settings',
        'type' => 'select',
        'choices' => array(
            'archive-image-left' => __('Left', 'newsever'),
            'archive-image-right' => __('Right', 'newsever'),
            'archive-image-alternate' => __('Alternate', 'newsever'),
        ),
        'priority' => 130,
        //'active_callback' => 'newsever_archive_image_status'
    ));


//========== footer latest blog carousel options ===============

// Footer Section.
$wp_customize->add_section('frontpage_latest_posts_settings',
    array(
        'title' => __('You May Have Missed', 'newsever'),
        'priority' => 50,
        'capability' => 'edit_theme_options',
        'panel' => 'theme_option_panel',
    )
);



// Setting - featured_news_section_title.
$wp_customize->add_setting('frontpage_latest_posts_section_title',
    array(
        'default' => $default['frontpage_latest_posts_section_title'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control('frontpage_latest_posts_section_title',
    array(
        'label' => __('Posts Section Title', 'newsever'),
        'section' => 'frontpage_latest_posts_settings',
        'type' => 'text',
        'priority' => 100,
        //'active_callback' => 'newsever_latest_news_section_status'

    )
);




//========== footer section options ===============
// Footer Section.
$wp_customize->add_section('site_footer_settings',
    array(
        'title' => __('Footer', 'newsever'),
        'priority' => 50,
        'capability' => 'edit_theme_options',
        'panel' => 'theme_option_panel',
    )
);

// Setting - global content alignment of news.
$wp_customize->add_setting('footer_copyright_text',
    array(
        'default' => $default['footer_copyright_text'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control('footer_copyright_text',
    array(
        'label' => __('Copyright Text', 'newsever'),
        'section' => 'site_footer_settings',
        'type' => 'text',
        'priority' => 100,
    )
);


