<?php
// ─── Theme Setup ──────────────────────────────────────────────────────────────
function ep_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'gallery', 'caption', 'style', 'script']);
    add_theme_support('custom-logo', [
        'height'      => 130,
        'width'       => 450,
        'flex-width'  => true,
        'flex-height' => true,
    ]);

    // WooCommerce support
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    register_nav_menus(['primary' => 'Menú Principal']);
}
add_action('after_setup_theme', 'ep_setup');

// ─── Enqueue Scripts & Styles ─────────────────────────────────────────────────
function ep_enqueue_assets() {
    // Fonts
    wp_enqueue_style(
        'ep-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=DM+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap',
        [],
        null
    );

    // Main CSS
    wp_enqueue_style('ep-main', get_template_directory_uri() . '/assets/css/main.css', ['ep-fonts'], '1.3.0');

    // WooCommerce overrides
    wp_enqueue_style('ep-wc', get_template_directory_uri() . '/assets/css/wc-overrides.css', ['ep-main'], '1.3.0');

    // Main JS (depends on jquery which WP loads for WooCommerce)
    wp_enqueue_script('ep-main', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], '1.0.0', true);

    // Pass variables to JS
    wp_localize_script('ep-main', 'ep_vars', [
        'ajax_url'       => admin_url('admin-ajax.php'),
        'nonce'          => wp_create_nonce('ep_nonce'),
        'cart_url'       => function_exists('wc_get_cart_url') ? wc_get_cart_url() : home_url('/carrito'),
        'checkout_url'   => function_exists('wc_get_checkout_url') ? wc_get_checkout_url() : home_url('/checkout'),
        'theme_uri'      => get_template_directory_uri(),
    ]);
}
add_action('wp_enqueue_scripts', 'ep_enqueue_assets');

// ─── WooCommerce: Cart badge fragment ────────────────────────────────────────
add_filter('woocommerce_add_to_cart_fragments', function ($fragments) {
    $count   = WC()->cart->get_cart_contents_count();
    $display = $count > 0 ? 'flex' : 'none';
    $fragments['.cart-badge'] = '<span class="cart-badge" style="display:' . $display . ';">' . $count . '</span>';
    return $fragments;
});

// ─── WooCommerce: Remove default WC breadcrumb on shop ───────────────────────
add_filter('woocommerce_breadcrumb_defaults', function ($d) {
    $d['delimiter']   = ' › ';
    $d['wrap_before'] = '<nav class="ep-wc-breadcrumb">';
    $d['wrap_after']  = '</nav>';
    return $d;
});

// ─── WooCommerce: Wrap mini-cart buttons with EP classes ─────────────────────
add_filter('woocommerce_widget_cart_item_quantity', function ($html, $cart_item, $cart_item_key) {
    return $html;
}, 10, 3);

// ─── Helper: Product badge ───────────────────────────────────────────────────
function ep_get_product_badge(int $product_id): string {
    $badge = get_post_meta($product_id, '_ep_badge', true);
    if ($badge) return $badge;

    $terms = get_the_terms($product_id, 'product_cat');
    if ($terms && !is_wp_error($terms)) {
        foreach ($terms as $term) {
            if ($term->slug === 'veterinaria')    return 'VETERINARIO';
            if ($term->slug === 'dermocosmetica') return 'NUEVO';
        }
    }
    return 'DISPONIBLE';
}

// ─── Helper: Product primary category slug ───────────────────────────────────
function ep_get_product_cat_slug(int $product_id): string {
    $terms = get_the_terms($product_id, 'product_cat');
    if ($terms && !is_wp_error($terms)) {
        foreach ($terms as $term) {
            if (!in_array($term->slug, ['uncategorized', 'sin-categoria'])) {
                return $term->slug;
            }
        }
    }
    return 'all';
}

// ─── WooCommerce: Keep WC styles but load AFTER ours ────────────────────────
// (No desactivamos los estilos WC porque incluyen CSS funcional del checkout)

// ─── Security: Remove WP version ─────────────────────────────────────────────
remove_action('wp_head', 'wp_generator');

// ─── Title separator ─────────────────────────────────────────────────────────
add_filter('document_title_separator', fn() => '|');
