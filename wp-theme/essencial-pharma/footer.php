    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <?php if (has_custom_logo()) : the_custom_logo();
                    else : ?>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>" style="height:32px;">
                    <?php endif; ?>
                    <p class="footer-col-desc">Soluciones farmacéuticas adaptadas a las necesidades del sector salud en Colombia. Medicamentos esenciales y cuidado capilar dermocosmético.</p>
                </div>
                <div>
                    <h4 class="footer-col-title">Secciones</h4>
                    <ul class="footer-links">
                        <li><a href="<?php echo esc_url(home_url('/#inicio')); ?>" class="footer-link">Inicio</a></li>
                        <li><a href="<?php echo esc_url(home_url('/#servicios')); ?>" class="footer-link">Servicios</a></li>
                        <li><a href="<?php echo esc_url(home_url('/#medicamentos')); ?>" class="footer-link">Catálogo Medicamentos</a></li>
                        <li><a href="<?php echo esc_url(home_url('/#dermocosmetica')); ?>" class="footer-link">Tienda Dermocosmética</a></li>
                        <li><a href="<?php echo esc_url(home_url('/#compromiso')); ?>" class="footer-link">Compromiso Calidad</a></li>
                        <li><a href="<?php echo esc_url(home_url('/#quienes-somos')); ?>" class="footer-link">Sobre Nosotros</a></li>
                        <?php if (function_exists('wc_get_cart_url')) : ?>
                        <li><a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="footer-link">Carrito</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div>
                    <h4 class="footer-col-title">Contacto</h4>
                    <ul class="footer-links" style="color:#94a3b8;font-size:0.9rem;">
                        <li style="display:flex;gap:8px;align-items:center;">
                            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            (+57) 305 339 8870
                        </li>
                        <li style="display:flex;gap:8px;align-items:center;">
                            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            info@essencialpharma.com.co
                        </li>
                        <li style="display:flex;gap:8px;align-items:flex-start;">
                            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="margin-top:3px;flex-shrink:0;"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            Carrera 25 # 9A sur 176 — Medellín, Colombia
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Essencial Pharma. Todos los derechos reservados.</p>
                <p>Medellín, Colombia</p>
            </div>
        </div>
    </footer>

    <!-- Cart Mini Drawer (WooCommerce) -->
    <div class="cart-overlay"></div>
    <aside class="cart-drawer glass-panel">
        <div class="cart-header">
            <h3 class="cart-title">
                <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                Tu Carrito
            </h3>
            <button class="close-cart" aria-label="Cerrar Carrito">&times;</button>
        </div>
        <div class="widget_shopping_cart_content">
            <?php if (function_exists('woocommerce_mini_cart')) woocommerce_mini_cart(); ?>
        </div>
    </aside>

    <!-- Modal: Medicine Quote -->
    <div class="modal-overlay" id="quote-modal">
        <div class="modal-card glass-panel">
            <button class="close-modal" aria-label="Cerrar modal">&times;</button>
            <div class="modal-header">
                <h3>Cotizar Medicamento</h3>
                <p id="quote-med-label">Categoría &rsaquo; Nombre del Medicamento</p>
            </div>
            <form id="quote-form">
                <input type="hidden" id="quote-med-name">
                <div class="form-group">
                    <label class="form-label" for="quote-name">Tu Nombre Completo</label>
                    <input type="text" id="quote-name" class="form-input" placeholder="Ej. Carlos Mendoza" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="quote-phone">Teléfono Móvil (WhatsApp)</label>
                    <input type="tel" id="quote-phone" class="form-input" placeholder="Ej. 3001234567" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="quote-email">Correo Electrónico</label>
                    <input type="email" id="quote-email" class="form-input" placeholder="Ej. carlos@correo.com" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="quote-message">Notas o cantidades a solicitar</label>
                    <textarea id="quote-message" class="form-textarea" placeholder="Ej. Solicito 10 cajas para una IPS..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="width:100%;">Solicitar Cotización por WhatsApp</button>
            </form>
        </div>
    </div>

    <!-- Modal: Success -->
    <div class="modal-overlay" id="success-modal">
        <div class="modal-card glass-panel" style="text-align:center;max-width:440px;">
            <button class="close-modal" aria-label="Cerrar modal">&times;</button>
            <div class="success-checkmark">
                <div class="check-icon">
                    <span class="icon-line line-tip"></span>
                    <span class="icon-line line-long"></span>
                </div>
            </div>
            <h3 id="success-title" style="margin-bottom:12px;font-size:1.6rem;">¡Enviado!</h3>
            <p id="success-message" style="color:var(--text-secondary);line-height:1.5;font-size:0.95rem;">Tu mensaje ha sido enviado correctamente.</p>
        </div>
    </div>

<?php wp_footer(); ?>
</body>
</html>
