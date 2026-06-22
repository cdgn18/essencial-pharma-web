<?php
/**
 * Wrapper para todas las páginas de WooCommerce:
 * Tienda (/shop), Producto individual, Carrito, Checkout, Mi Cuenta.
 * WooCommerce detecta este archivo automáticamente.
 */
get_header();
?>

<main class="ep-wc-page section" style="padding-top: calc(var(--header-height) + 36px + 48px); min-height: 70vh; background: var(--bg-primary);">
    <div class="container">
        <?php woocommerce_content(); ?>
    </div>
</main>

<?php get_footer(); ?>
