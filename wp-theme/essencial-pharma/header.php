<!DOCTYPE html>
<html <?php language_attributes(); ?> data-theme="light">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Announcement Bar -->
<div class="announcement-bar">
    <div class="announcement-track">
        <span>🐾 ¡NUEVA LÍNEA VETERINARIA DISPONIBLE! Cuidado premium para mascotas respaldado por ciencia.</span>
        <span>🌿 LÍNEA CAPILAR DERMOCOSMÉTICA: Tratamientos para la salud folicular y brillo de tu cabello.</span>
        <span>🚚 ENVÍOS A TODA COLOMBIA: Compras seguras con entrega rápida nacional.</span>
    </div>
</div>

<!-- Header Navigation -->
<header class="header">
    <div class="container">
        <div class="nav-mobile-wrap">
            <nav class="nav-left">
                <a href="<?php echo esc_url(home_url('/#inicio')); ?>" class="nav-link">Inicio</a>
                <a href="<?php echo esc_url(home_url('/#servicios')); ?>" class="nav-link">Servicios</a>
                <a href="<?php echo esc_url(home_url('/#medicamentos')); ?>" class="nav-link">Medicamentos</a>
                <a href="<?php echo esc_url(home_url('/#dermocosmetica')); ?>" class="nav-link">Tienda</a>
            </nav>
            <nav class="nav-right">
                <a href="<?php echo esc_url(home_url('/#compromiso')); ?>" class="nav-link">Compromiso</a>
                <a href="<?php echo esc_url(home_url('/#quienes-somos')); ?>" class="nav-link">Nosotros</a>
                <a href="<?php echo esc_url(home_url('/#contacto')); ?>" class="nav-link">Contacto</a>
            </nav>
        </div>

        <?php if (has_custom_logo()) : ?>
        <div class="logo">
            <?php the_custom_logo(); ?>
        </div>
        <?php else : ?>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
        </a>
        <?php endif; ?>

        <div class="nav-actions">
            <!-- Theme Toggle -->
            <button class="ctrl-btn theme-toggle" aria-label="Cambiar Tema" id="theme-toggle-btn">
                <svg class="sun-icon" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="5"></circle>
                    <path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"></path>
                </svg>
                <svg class="moon-icon" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                </svg>
            </button>

            <!-- Cart Button -->
            <a href="<?php echo function_exists('wc_get_cart_url') ? esc_url(wc_get_cart_url()) : '#'; ?>" class="ctrl-btn cart-toggle" aria-label="Ver Carrito" id="cart-toggle-btn">
                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                <?php if (function_exists('WC')) : $count = WC()->cart->get_cart_contents_count(); ?>
                <span class="cart-badge" style="display:<?php echo $count > 0 ? 'flex' : 'none'; ?>;">
                    <?php echo $count; ?>
                </span>
                <?php else : ?>
                <span class="cart-badge" style="display:none;">0</span>
                <?php endif; ?>
            </a>

            <!-- Hamburger Mobile Menu -->
            <button class="hamburger" aria-label="Abrir Menú">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</header>
