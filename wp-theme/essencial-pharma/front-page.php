<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero full-banner" id="inicio">
    <div class="hero-bg-slider">
        <div class="hero-slide active" style="background-image:url('https://images.unsplash.com/photo-1586015555751-63bb77f4322a?auto=format&fit=crop&q=80&w=1600');"></div>
        <div class="hero-slide" style="background-image:url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Rectangle-21.png');"></div>
        <div class="hero-slide" style="background-image:url('https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?auto=format&fit=crop&q=80&w=1600');"></div>
    </div>

    <div class="container hero-banner-container">
        <div class="hero-banner-content">
            <span class="section-tag">Distribución Profesional e Innovación</span>
            <h1 class="hero-banner-title">Acceso a medicamentos esenciales con calidad y confianza</h1>
            <p class="hero-banner-desc">Distribuimos medicamentos de alta calidad avalados por la OMS para garantizar disponibilidad en donde más se necesitan. Explora también nuestras nuevas líneas premium en dermocosmética y veterinaria.</p>
            <div class="hero-btns">
                <a href="#medicamentos" class="btn btn-primary">
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    Ver Medicamentos
                </a>
                <a href="#dermocosmetica" class="btn btn-secondary">
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                    Explorar Tienda
                </a>
            </div>
        </div>

        <div class="hero-banner-badges">
            <div class="hero-badge-float glass-panel">
                <div class="hero-badge-icon">
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                </div>
                <div class="hero-badge-info"><h4>Normas INVIMA &amp; ICA</h4><p>Calidad regulada en Colombia</p></div>
            </div>
            <div class="hero-badge-float glass-panel">
                <div class="hero-badge-icon">
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                </div>
                <div class="hero-badge-info"><h4>Salud &amp; Bienestar</h4><p>Humano y veterinario</p></div>
            </div>
        </div>

        <div class="slider-dots">
            <span class="dot active" data-slide="0"></span>
            <span class="dot" data-slide="1"></span>
            <span class="dot" data-slide="2"></span>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="section" id="servicios" style="background:var(--bg-secondary);">
    <div class="container">
        <div class="section-title-wrap">
            <span class="section-tag">Soluciones a tu Medida</span>
            <h2 class="section-title">Nuestros Servicios Especializados</h2>
            <p class="section-desc">Diseñados para garantizar el acceso, seguridad y disponibilidad de medicamentos esenciales, trabajando con hospitales, clínicas, farmacias y entidades públicas y privadas.</p>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(320px,1fr));">
            <div class="feat-card glass-panel serv-card">
                <div class="serv-card-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Rectangle-20.png" alt="Distribución de Medicamentos"></div>
                <div class="serv-card-body">
                    <div class="feat-icon-wrap" style="margin:0 0 20px 0;">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <h3 class="feat-title" style="margin-bottom:8px;">Distribución de Medicamentos</h3>
                    <p style="color:var(--color-secondary);font-size:0.9rem;font-weight:600;margin-bottom:16px;">Garantizamos calidad, trazabilidad y cumplimiento normativo en cada entrega.</p>
                    <p class="feat-desc" style="margin-bottom:24px;flex-grow:1;font-size:0.9rem;">Contamos con una red logística eficiente para ofrecer un suministro continuo de medicamentos esenciales avalados por la OMS en óptimas condiciones de seguridad y temperatura.</p>
                    <ul style="list-style:none;display:flex;flex-direction:column;gap:10px;font-size:0.85rem;color:var(--text-secondary);">
                        <li>✓ Almacenamiento bajo condiciones certificadas</li>
                        <li>✓ Control de calidad en cada lote distribuido</li>
                        <li>✓ Entregas oportunas con cobertura a nivel nacional</li>
                        <li>✓ Cumplimiento estricto de normativas INVIMA y OMS</li>
                    </ul>
                </div>
            </div>
            <div class="feat-card glass-panel serv-card">
                <div class="serv-card-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Rectangle-22.png" alt="Asesoría Farmacéutica"></div>
                <div class="serv-card-body">
                    <div class="feat-icon-wrap" style="margin:0 0 20px 0;">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.168.477 4 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4 1.253"></path></svg>
                    </div>
                    <h3 class="feat-title" style="margin-bottom:8px;">Asesoría Farmacéutica</h3>
                    <p style="color:var(--color-secondary);font-size:0.9rem;font-weight:600;margin-bottom:16px;">Acompañamiento técnico especializado para optimizar el uso de medicamentos.</p>
                    <p class="feat-desc" style="margin-bottom:24px;flex-grow:1;font-size:0.9rem;">Nuestro equipo de regentes farmacéuticos ofrece orientación y soporte técnico a IPS e instituciones de salud para garantizar un manejo racional, seguro y eficiente del portafolio.</p>
                    <ul style="list-style:none;display:flex;flex-direction:column;gap:10px;font-size:0.85rem;color:var(--text-secondary);">
                        <li>✓ Consultoría en selección y uso adecuado de esenciales</li>
                        <li>✓ Asesoría en normativas sanitarias y registros</li>
                        <li>✓ Capacitación en almacenamiento y dispensación (BPA)</li>
                    </ul>
                </div>
            </div>
            <div class="feat-card glass-panel serv-card">
                <div class="serv-card-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Rectangle-23.png" alt="Logística y Abastecimiento"></div>
                <div class="serv-card-body">
                    <div class="feat-icon-wrap" style="margin:0 0 20px 0;">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path><path d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10M21 16V10a2 2 0 00-2-2h-3V5a1 1 0 00-1-1h-3M16 16h-3"></path></svg>
                    </div>
                    <h3 class="feat-title" style="margin-bottom:8px;">Logística y Abastecimiento</h3>
                    <p style="color:var(--color-secondary);font-size:0.9rem;font-weight:600;margin-bottom:16px;">Procesos optimizados para asegurar disponibilidad constante y trazabilidad.</p>
                    <p class="feat-desc" style="margin-bottom:24px;flex-grow:1;font-size:0.9rem;">Implementamos estrategias logísticas de última generación que aseguran el flujo continuo de medicamentos desde su origen hasta el punto de entrega final.</p>
                    <ul style="list-style:none;display:flex;flex-direction:column;gap:10px;font-size:0.85rem;color:var(--text-secondary);">
                        <li>✓ Planificación de abastecimiento según demanda institucional</li>
                        <li>✓ Control de stocks en tiempo real para evitar desabastecimiento</li>
                        <li>✓ Seguimiento y trazabilidad digital del pedido en ruta</li>
                        <li>✓ Reducción de costos logísticos y tiempos de entrega</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quiénes Somos -->
<section class="section" id="quienes-somos">
    <div class="container">
        <div class="section-title-wrap">
            <span class="section-tag">Quiénes Somos</span>
            <h2 class="section-title">Construimos Confianza</h2>
            <p class="section-desc">Somos aliados estratégicos del sector salud, con un equipo comprometido con la calidad, la ética y el acceso oportuno a medicamentos esenciales en Colombia y Latinoamérica.</p>
        </div>
        <div class="qs-split">
            <div class="qs-img-wrap">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Rectangle-10-5.png" alt="Equipo de investigación Essencial Pharma" class="qs-img">
                <div class="qs-img-badge glass-panel"><strong>Colombia</strong><span>y Latinoamérica</span></div>
            </div>
            <div class="qs-content">
                <div class="mv-card glass-panel">
                    <div class="feat-icon-wrap" style="margin:0 0 16px 0;background:rgba(0,208,132,0.1);">
                        <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </div>
                    <h3 class="feat-title" style="margin-bottom:10px;">Misión</h3>
                    <p style="font-size:0.95rem;color:var(--text-secondary);line-height:1.7;">Brindar acceso oportuno y seguro a medicamentos esenciales que mejoren la calidad de vida de las personas, con estricto cumplimiento de normas sanitarias internacionales.</p>
                </div>
                <div class="mv-card glass-panel">
                    <div class="feat-icon-wrap" style="margin:0 0 16px 0;background:rgba(1,79,130,0.1);">
                        <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <h3 class="feat-title" style="margin-bottom:10px;">Visión</h3>
                    <p style="font-size:0.95rem;color:var(--text-secondary);line-height:1.7;">Ser líderes en distribución de medicamentos esenciales en Latinoamérica, reconocidos por nuestra innovación, ética y compromiso con la salud pública.</p>
                </div>
            </div>
        </div>
        <div class="valores-wrap">
            <h3 style="text-align:center;font-size:1.6rem;margin-bottom:36px;color:var(--text-primary);">Nuestros Valores</h3>
            <div class="valores-grid">
                <?php
                $valores = [
                    ['icon' => 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z', 'title' => 'Calidad', 'desc' => 'Estándares certificados en cada proceso'],
                    ['icon' => 'M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3', 'title' => 'Transparencia', 'desc' => 'Actuamos con ética y honestidad'],
                    ['icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z', 'title' => 'Innovación', 'desc' => 'Tecnología y mejora continua'],
                    ['icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z', 'title' => 'Vocación de Servicio', 'desc' => 'Priorizamos a clientes y pacientes'],
                    ['icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064', 'title' => 'Compromiso', 'desc' => 'Responsabilidad social y ambiental'],
                ];
                foreach ($valores as $v) : ?>
                <div class="valor-item glass-panel">
                    <div class="feat-icon-wrap" style="margin:0 0 14px 0;">
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="<?php echo esc_attr($v['icon']); ?>"></path></svg>
                    </div>
                    <h4><?php echo esc_html($v['title']); ?></h4>
                    <p><?php echo esc_html($v['desc']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Por qué Essencial Pharma -->
<section class="section pq-section" style="background:var(--bg-secondary);">
    <div class="container">
        <div class="pq-split">
            <div class="pq-img-wrap">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Rectangle-9.png" alt="Medicamentos Essencial Pharma" class="pq-img">
            </div>
            <div class="pq-content">
                <span class="section-tag">Nuestro Diferencial</span>
                <h2 class="section-title" style="text-align:left;font-size:2rem;margin-top:12px;">¿Por qué elegir<br>Essencial Pharma?</h2>
                <p style="color:var(--text-secondary);margin:16px 0 28px;font-size:1rem;line-height:1.7;">Más que un distribuidor, somos un aliado estratégico que garantiza el acceso oportuno a medicamentos con los más altos estándares de calidad y trazabilidad.</p>
                <div class="pq-list">
                    <?php
                    $diferenciales = [
                        ['title' => 'Medicamentos avalados por la OMS', 'desc' => 'Portafolio seleccionado bajo criterios internacionales de seguridad y eficacia.'],
                        ['title' => 'Procesos logísticos seguros y eficientes', 'desc' => 'Cadena de frío certificada y trazabilidad digital en cada entrega.'],
                        ['title' => 'Equipo experimentado en farmacéutica', 'desc' => 'Regentes farmacéuticos con experiencia en regulación INVIMA y normativas OMS.'],
                        ['title' => 'Atención personalizada y acompañamiento técnico', 'desc' => 'Soporte directo a IPS, clínicas, farmacias y entidades de salud.'],
                        ['title' => 'Compromiso con la innovación', 'desc' => 'Honestidad, transparencia y mejora continua en todos nuestros procesos.'],
                    ];
                    foreach ($diferenciales as $d) : ?>
                    <div class="pq-item">
                        <span class="pq-check">✔</span>
                        <div><strong><?php echo esc_html($d['title']); ?></strong><p><?php echo esc_html($d['desc']); ?></p></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Medicines Section -->
<section class="section" id="medicamentos">
    <div class="container">
        <div class="section-title-wrap">
            <span class="section-tag">Portafolio Farmacéutico</span>
            <h2 class="section-title">Medicamentos Esenciales</h2>
            <p class="section-desc">Selección rigurosa de medicamentos bajo Buenas Prácticas de Manufactura. Por regulaciones nacionales, no se comercializan por e-commerce directo. Haz tu solicitud de cotización formal.</p>
        </div>
        <div class="catalog-controls">
            <div class="search-bar-wrap">
                <svg class="search-icon" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <input type="text" class="search-input" placeholder="Buscar medicamento o componente activo...">
            </div>
            <div class="catalog-tabs">
                <button class="tab-btn" data-tab="all">Todos</button>
                <button class="tab-btn active" data-tab="analgesicos">Analgésicos y Antiinflamatorios</button>
                <button class="tab-btn" data-tab="antibioticos">Antibióticos y Antivirales</button>
                <button class="tab-btn" data-tab="cronicos">Enfermedades Crónicas</button>
                <button class="tab-btn" data-tab="formulas">Fórmulas Magistrales</button>
            </div>
        </div>
        <div class="medicine-grid"><!-- Rendered by JS --></div>
        <div class="no-results glass-panel">
            <svg width="48" height="48" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" style="margin:0 auto 16px auto;"><path d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <h3>No se encontraron medicamentos</h3>
            <p style="color:var(--text-secondary);margin-top:8px;">Prueba buscando otra palabra clave o cambiando de categoría.</p>
        </div>
    </div>
</section>

<!-- Tienda: WooCommerce Products -->
<section class="section dermo-section" id="dermocosmetica">
    <div class="container">
        <div class="section-title-wrap">
            <span class="section-tag" style="color:var(--color-accent);">Bienestar e Higiene Premium</span>
            <h2 class="section-title">Tienda de Venta Libre</h2>
            <p class="section-desc">Soluciones científicas capilares y productos especializados de cuidado veterinario. Compra directa en línea con despacho rápido en todo el país.</p>
        </div>

        <div class="catalog-controls" style="margin-bottom:40px;">
            <div class="catalog-tabs">
                <button class="tab-btn active" data-shop-tab="all">Todos los Productos</button>
                <button class="tab-btn" data-shop-tab="dermocosmetica">Dermocosmética Capilar</button>
                <button class="tab-btn" data-shop-tab="veterinaria">Línea Veterinaria</button>
            </div>
        </div>

        <div class="product-grid">
            <?php
            $loop = new WP_Query([
                'post_type'      => 'product',
                'posts_per_page' => -1,
                'post_status'    => 'publish',
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            ]);

            if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post();
                    global $product;
                    $pid      = get_the_ID();
                    $cat_slug = ep_get_product_cat_slug($pid);
                    $badge    = ep_get_product_badge($pid);
                    $thumb    = get_the_post_thumbnail_url($pid, 'woocommerce_thumbnail') ?: wc_placeholder_img_src();
                    $avg      = $product->get_average_rating();
                    $r_count  = $product->get_rating_count();
                    $excerpt  = wp_trim_words(get_the_excerpt() ?: strip_tags($product->get_description()), 18, '…');
            ?>
            <div class="prod-card glass-panel" data-category="<?php echo esc_attr($cat_slug); ?>">
                <div class="prod-img-wrap">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo esc_url($thumb); ?>" alt="<?php the_title_attribute(); ?>" class="prod-img" loading="lazy">
                    </a>
                    <span class="prod-badge"><?php echo esc_html($badge); ?></span>
                </div>
                <div class="prod-content">
                    <?php if ($avg > 0) : ?>
                    <div class="prod-stars">
                        <?php echo wc_get_rating_html($avg, $r_count); ?>
                        <span class="prod-stars-text">(<?php echo esc_html($r_count); ?> opiniones)</span>
                    </div>
                    <?php endif; ?>
                    <h3 class="prod-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p class="prod-desc"><?php echo esc_html($excerpt); ?></p>
                    <div class="prod-meta">
                        <span class="prod-price"><?php echo $product->get_price_html(); ?></span>
                        <a href="<?php echo esc_url($product->add_to_cart_url()); ?>"
                           data-quantity="1"
                           data-product_id="<?php echo esc_attr($pid); ?>"
                           data-product_sku="<?php echo esc_attr($product->get_sku()); ?>"
                           class="btn btn-secondary add_to_cart_button ajax_add_to_cart"
                           aria-label="<?php echo esc_attr($product->add_to_cart_description()); ?>"
                           rel="nofollow">
                            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            Añadir
                        </a>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p style="text-align:center;color:var(--text-secondary);padding:40px 0;">Próximamente productos disponibles.</p>';
            endif;
            ?>
        </div>

        <?php if (function_exists('wc_get_page_permalink')) : ?>
        <div style="text-align:center;margin-top:40px;">
            <a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>" class="btn btn-primary">
                Ver todos los productos
            </a>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- Quality Commitment -->
<section class="section" id="compromiso">
    <div class="container">
        <div class="section-title-wrap">
            <span class="section-tag">Excelencia y Trazabilidad</span>
            <h2 class="section-title">Compromiso de Calidad</h2>
            <p class="section-desc">Garantizamos que todos nuestros productos farmacéuticos y cosméticos cumplen de forma estricta con las exigencias sanitarias.</p>
        </div>
        <div class="features-grid">
            <div class="feat-card glass-panel">
                <div class="feat-icon-wrap"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg></div>
                <h3 class="feat-title">Productos Certificados</h3>
                <p class="feat-desc">Medicamentos debidamente avalados por el INVIMA, OMS y agencias internacionales.</p>
            </div>
            <div class="feat-card glass-panel">
                <div class="feat-icon-wrap"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg></div>
                <h3 class="feat-title">Cadena de Frío</h3>
                <p class="feat-desc">Control riguroso de temperatura y condiciones óptimas de almacenamiento y transporte.</p>
            </div>
            <div class="feat-card glass-panel">
                <div class="feat-icon-wrap"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg></div>
                <h3 class="feat-title">Autenticidad Garantizada</h3>
                <p class="feat-desc">Trazabilidad completa en la procedencia y origen de todas las formulaciones.</p>
            </div>
            <div class="feat-card glass-panel">
                <div class="feat-icon-wrap"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg></div>
                <h3 class="feat-title">Soporte Técnico Continuo</h3>
                <p class="feat-desc">Atención personalizada y acompañamiento constante por regentes farmacéuticos.</p>
            </div>
        </div>
    </div>
</section>

<!-- Certifications & Regulatory Compliance -->
<section class="section cert-section" id="certificaciones">
    <div class="container">
        <div class="cert-layout">
            <div class="cert-img-col">
                <div class="cert-img-wrap">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Rectangle-11.png" alt="Laboratorio farmacéutico certificado Essencial Pharma" class="cert-main-img" loading="lazy">
                    <div class="cert-img-badge">
                        <div class="cert-badge-icon" style="background:rgba(0,208,132,0.15);">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <div>
                            <strong>Regulación Sanitaria</strong>
                            <span>Colombiana e Internacional</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cert-content">
                <span class="section-tag">Cumplimiento Normativo</span>
                <h2 class="section-title" style="text-align:left;margin-top:12px;">Certificaciones que respaldan cada producto</h2>
                <p style="color:rgba(255,255,255,0.82);margin:16px 0 36px;font-size:1rem;line-height:1.7;">Nuestros medicamentos, cosméticos y productos veterinarios operan bajo la regulación más exigente de Colombia e instituciones internacionales de salud. Cada lote distribuido pasa por controles rigurosos de calidad, autenticidad y trazabilidad.</p>
                <div class="cert-badges-grid">
                    <div class="cert-badge-item">
                        <div class="cert-badge-icon">
                            <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <div>
                            <h4>INVIMA</h4>
                            <p>Registro sanitario y vigilancia de todos los productos distribuidos en Colombia</p>
                        </div>
                    </div>
                    <div class="cert-badge-item">
                        <div class="cert-badge-icon">
                            <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"></path></svg>
                        </div>
                        <div>
                            <h4>OMS / WHO</h4>
                            <p>Medicamentos avalados por la Organización Mundial de la Salud</p>
                        </div>
                    </div>
                    <div class="cert-badge-item">
                        <div class="cert-badge-icon">
                            <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                        </div>
                        <div>
                            <h4>ICA</h4>
                            <p>Certificación veterinaria del Instituto Colombiano Agropecuario para línea animal</p>
                        </div>
                    </div>
                    <div class="cert-badge-item">
                        <div class="cert-badge-icon">
                            <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        </div>
                        <div>
                            <h4>BPM / BPA</h4>
                            <p>Buenas Prácticas de Manufactura y Almacenamiento certificadas internacionalmente</p>
                        </div>
                    </div>
                    <div class="cert-badge-item">
                        <div class="cert-badge-icon">
                            <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M12 2v20M2 12h20M4.93 4.93l14.14 14.14M19.07 4.93L4.93 19.07"></path></svg>
                        </div>
                        <div>
                            <h4>Cadena de Frío</h4>
                            <p>Control certificado de temperatura en almacenamiento y transporte de biológicos</p>
                        </div>
                    </div>
                    <div class="cert-badge-item">
                        <div class="cert-badge-icon">
                            <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                        </div>
                        <div>
                            <h4>Trazabilidad Digital</h4>
                            <p>Seguimiento lote a lote desde el origen hasta el punto de entrega final</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quiénes Somos -->
<section class="section" id="nosotros">
    <div class="container">
        <div class="contact-split">
            <div>
                <span class="section-tag">¿Quiénes Somos?</span>
                <h2 class="section-title">Comprometidos con la Salud en Colombia</h2>
                <p style="color:var(--text-secondary);margin-top:20px;font-size:1.05rem;">En <strong>Essencial Pharma</strong> somos aliados estratégicos del sector salud. Nos especializamos en la distribución de medicamentos esenciales que cumplen estrictas normas sanitarias globales y en el desarrollo de fórmulas magistrales oftálmicas adaptadas a necesidades individuales no comerciales.</p>
                <p style="color:var(--text-secondary);margin-top:16px;font-size:1.05rem;">Bajo la visión de ofrecer cuidado integral, ampliamos nuestro portafolio con soluciones dermocosméticas capilares premium, respaldadas por investigación clínica para la salud folicular diaria.</p>
            </div>
            <div class="contact-details">
                <div class="contact-item">
                    <div class="contact-icon"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg></div>
                    <div class="contact-text"><h5>Teléfono / WhatsApp</h5><p>(+57) 305 339 8870</p></div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg></div>
                    <div class="contact-text"><h5>E-Mail de Contacto</h5><p>info@essencialpharma.com.co</p></div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg></div>
                    <div class="contact-text"><h5>Ubicación</h5><p>Carrera 25 # 9A sur 176 — Medellín, Colombia</p></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contacto -->
<section class="section" id="contacto" style="background:var(--bg-secondary);">
    <div class="container">
        <div class="section-title-wrap">
            <span class="section-tag">Contacto</span>
            <h2 class="section-title">¿Dudas o requerimientos?</h2>
            <p class="section-desc">Envíanos un mensaje rápido y nos pondremos en contacto vía WhatsApp de inmediato.</p>
        </div>
        <div style="max-width:680px;margin:0 auto;">
            <div class="glass-panel" style="padding:40px;">
                <form id="contact-form">
                    <?php wp_nonce_field('ep_contact', 'ep_contact_nonce'); ?>
                    <div class="form-group">
                        <label class="form-label" for="form-name">Nombre Completo</label>
                        <input type="text" id="form-name" class="form-input" placeholder="Ej. Juan Pérez" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="form-phone">Teléfono de Contacto</label>
                        <input type="tel" id="form-phone" class="form-input" placeholder="Ej. 3051234567" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="form-email">Correo Electrónico</label>
                        <input type="email" id="form-email" class="form-input" placeholder="Ej. juan@correo.com" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="form-message">Mensaje / Consulta</label>
                        <textarea id="form-message" class="form-textarea" placeholder="Escribe tu consulta aquí..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-secondary" style="width:100%;">
                        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"></path></svg>
                        Enviar Consulta por WhatsApp
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
