<?php
function globSearch($pattern, $flags = 0)
{
    $files = glob($pattern, $flags);
    foreach (glob(dirname($pattern) . '/*', GLOB_ONLYDIR | GLOB_NOSORT) as $dir)
        $files = array_merge($files, globSearch($dir . '/' . basename($pattern), $flags));
    return $files;
}

function searchFiles()
{
    $path = get_template_directory() . '/dist/';
    $files = globSearch($path . "*.css");
    array_map(function ($file) {
        $file = explode('/', $file);
        $file = end($file);
    }, $files);
}

function register_styles_scripts(): void
{
    $path = get_template_directory();
    $filesCss = globSearch($path . "/dist/*.css");
    $filesJs = globSearch($path . "/dist/*.js");

    foreach ($filesCss as $file) {
        $filePath = str_replace($path, '', $file);
        $fileName = explode('/', $filePath);
        $fileName = end($fileName);
        $fileName = str_replace('.css', ' ', $fileName);
        wp_register_style(trim($fileName),get_template_directory_uri() . $filePath, array(), '1.2', 'screen');
        wp_enqueue_style(trim($fileName));
    }

    foreach ($filesJs as $file) {
        $filePath = str_replace($path, '', $file);
        $fileName = explode('/', $filePath);
        $fileName = end($fileName);
        $fileName = str_replace('.js', ' ', $fileName);
        wp_enqueue_script(trim($fileName),get_template_directory_uri() . $filePath, array(), '1.0', true);
    }
}

function admin_register_styles_scripts()
{
    wp_enqueue_style('admin-styles', get_stylesheet_directory_uri() . '/assets/admin/admin-style.css');
}

add_action('admin_enqueue_scripts', 'admin_register_styles_scripts');

add_action('wp_enqueue_scripts', 'register_styles_scripts', 1);

if (function_exists('add_theme_support')) {
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
}

add_filter('show_admin_bar', '__return_false');

add_action('after_setup_theme', function () {
    register_nav_menus([
        'header_menu' => 'Меню хедер',
        'footer_left_menu' => 'Левое меню футер',
        'footer_right_menu' => 'Правое меню футер',
    ]);
    add_theme_support(
        'custom-logo',
        array(
            'height' => 500,
            'width' => 500,
            'flex-height' => true,
        )
    );
});

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Глобальные настройки',
        'menu_title' => 'Глобальные настройки',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

function custom_register_post_types()
{
    $post_types = [
        [
            "post_type_name" => "iphone",
            "name" => "iPhone",
            "name_plural" => "iPhones",
            "name_lowercase" => "iPhone",
            "name_lowercase_plural" => "iPhones",
            'menu_icon' => 'dashicons-shield-alt',
            "supports" => ['title', 'editor', 'thumbnail'],
            "has_archive" => false,
        ],
        [
            "post_type_name" => "ipad",
            "name" => "iPad",
            "name_plural" => "iPades",
            "name_lowercase" => "iPad",
            "name_lowercase_plural" => "iPades",
            'menu_icon' => 'dashicons-shield-alt',
            "supports" => ['title', 'editor', 'thumbnail'],
            "has_archive" => false,
        ],
        [
            "post_type_name" => "macbook",
            "name" => "MacBook",
            "name_plural" => "MacBooks",
            "name_lowercase" => "MacBook",
            "name_lowercase_plural" => "MacBooks",
            'menu_icon' => 'dashicons-shield-alt',
            "supports" => ['title', 'editor', 'thumbnail'],
            "has_archive" => false,
        ],
        [
            "post_type_name" => "apple-watch",
            "name" => "Apple watch",
            "name_plural" => "Apple watches",
            "name_lowercase" => "Apple watch",
            "name_lowercase_plural" => "Apple watches",
            'menu_icon' => 'dashicons-shield-alt',
            "supports" => ['title', 'editor', 'thumbnail'],
            "has_archive" => false,
        ],
        [
            "post_type_name" => "airpods",
            "name" => "Airpods",
            "name_plural" => "Airpods",
            "name_lowercase" => "Airpods",
            "name_lowercase_plural" => "Airpods",
            'menu_icon' => 'dashicons-shield-alt',
            "supports" => ['title', 'editor', 'thumbnail'],
            "has_archive" => false,
        ],
    ];

    foreach ($post_types as $post_type) {
        $post_type_args = [
            'labels' => [
                'name' => __($post_type["name_plural"]),
                'singular_name' => __($post_type["name"]),
                'add_new' => __('Add New ' . $post_type["name"]),
                'add_new_item' => __('Add New ' . $post_type["name"]),
                'edit_item' => __('Edit ' . $post_type["name"]),
                'new_item' => __('New ' . $post_type["name"]),
                'view_item' => __('View ' . $post_type["name"]),
                'view_items' => __('View ' . $post_type["name_plural"]),
                'search_items' => __('Search ' . $post_type["name_plural"]),
                'not_found' => __('No ' . $post_type["name_lowercase_plural"] . ' found'),
                'not_found_in_trash' => __('No ' . $post_type["name_lowercase_plural"] . ' found in Trash'),
                'all_items' => __('All ' . $post_type["name_plural"]),
                'archives' => __($post_type["name"] . ' Archives'),
                'attributes' => __($post_type["name"] . ' Attributes'),
                'insert_into_item' => __('Insert into ' . $post_type["name_lowercase"]),
                'uploaded_to_this_item' => __('Uploaded to this ' . $post_type["name_lowercase"]),
                'item_published ' => __($post_type["name"] . ' published.'),
                'item_published_privately' => __($post_type["name"] . ' published privately.'),
                'item_reverted_to_draft' => __($post_type["name"] . ' reverted to draft.'),
                'item_scheduled' => __($post_type["name"] . ' scheduled.'),
                'item_updated' => __($post_type["name"] . ' updated.'),
            ],
            'menu_icon' => $post_type['menu_icon'],
            'public' => true,
            'has_archive' => $post_type["has_archive"],
            'menu_position' => 5,
            'show_in_rest' => true,
            'supports' => $post_type["supports"],
            'taxonomies' => $post_type["taxonomies"] ?? [],

        ];

        register_post_type($post_type["post_type_name"], $post_type_args);
    }

}

add_action('init', 'custom_register_post_types');

add_action('admin_menu', 'remove_menus_ssh');

function remove_menus_ssh()
{
    global $menu;
    $restricted = array(
        __('Posts'),
        __('Comments'),
    );
    end($menu);
    while (prev($menu)) {
        $value = explode(' ', $menu[key($menu)][0]);
        if (in_array(($value[0] != NULL ? $value[0] : ""), $restricted)) {
            unset($menu[key($menu)]);
        }
    }
}

add_action('acf/init', 'my_register_blocks');
function my_register_blocks()
{
    if (function_exists('acf_register_block_type')) {
        $path = get_template_directory();
        $filesPhp = globSearch($path . "/modules/*.php");

        foreach ($filesPhp as $file) {
            $filePath = str_replace($path, '', $file);
            $fileName = explode('/', $filePath);
            $fileName = end($fileName);
            $fileName = str_replace('.php', '', $fileName);
            $file_headers = get_file_data(__DIR__ . $filePath, [
                'title' => 'Title',
                'description' => 'Description',
                'category' => 'Category',
                'icon' => 'Icon',
                'keywords' => 'Keywords',
                'mode' => 'Mode',
                'align' => 'Align',
                'post_types' => 'PostTypes',
                'supports_align' => 'SupportsAlign',
                'supports_anchor' => 'SupportsAnchor',
                'supports_mode' => 'SupportsMode',
                'supports_jsx' => 'SupportsInnerBlocks',
                'supports_align_text' => 'SupportsAlignText',
                'supports_align_content' => 'SupportsAlignContent',
                'supports_multiple' => 'SupportsMultiple',
                'enqueue_style'     => 'EnqueueStyle',
                'enqueue_script'    => 'EnqueueScript',
                'enqueue_assets'    => 'EnqueueAssets',
            ]);

            acf_register_block_type(array(
                'name' => $fileName,
                'title' => __($file_headers['title']),
                'mode' => __($file_headers['mode']),
                'render_callback' => 'my_acf_block_render_callback',
                'category' => 'formatting',
            ));
        }
    }
}

function my_acf_block_render_callback($block)
{
    $slug = str_replace('acf/', '', $block['name']);
    if (file_exists(get_theme_file_path("modules/" . $slug . '/' . $slug . ".php"))) {
        include(get_theme_file_path("modules/" . $slug . '/' . $slug . ".php"));
    }
}

function webp_upload_mimes( $existing_mimes ) {
    // add webp to the list of mime types
    $existing_mimes['webp'] = 'image/webp';

    // return the array back to the function with our added mime type
    return $existing_mimes;
}
add_filter( 'mime_types', 'webp_upload_mimes' );

function slug_report_type_template()
{
    $page_type_object_podcasts = get_post_type_object('iphone');
    $page_type_object_podcasts->template = [
        ['acf/problems'],
        ['acf/services'],
        ['acf/contact-form'],
        ['acf/stand-out'],
        ['acf/map'],
    ];

    $page_type_object_podcasts = get_post_type_object('ipad');
    $page_type_object_podcasts->template = [
        ['acf/problems'],
        ['acf/services'],
        ['acf/contact-form'],
        ['acf/stand-out'],
        ['acf/map'],
    ];

    $page_type_object_podcasts = get_post_type_object('macbook');
    $page_type_object_podcasts->template = [
        ['acf/problems'],
        ['acf/services'],
        ['acf/contact-form'],
        ['acf/stand-out'],
        ['acf/map'],
    ];
}

add_action('init', 'slug_report_type_template');