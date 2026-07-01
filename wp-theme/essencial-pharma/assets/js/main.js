// ── Medicine catalog data (reference only – not for sale online) ──────────────
const MEDICINES_DATA = [
    { id:"med-1",  name:"Acetaminofén 500mg",        category:"analgesicos", categoryLabel:"Analgésicos y Antiinflamatorios",      desc:"Indicado para el alivio del dolor leve a moderado y estados febriles. Producto de alta pureza.",                                                                              compounds:"Acetaminofén" },
    { id:"med-2",  name:"Ibuprofeno 400mg",           category:"analgesicos", categoryLabel:"Analgésicos y Antiinflamatorios",      desc:"Efectivo analgésico y antiinflamatorio para dolores musculares, articulares y de cabeza.",                                                                                  compounds:"Ibuprofeno" },
    { id:"med-3",  name:"Naproxeno 250mg",            category:"analgesicos", categoryLabel:"Analgésicos y Antiinflamatorios",      desc:"Alivio prolongado de la inflamación y dolor. Especialmente útil para dolores articulares.",                                                                                compounds:"Naproxeno Sodico" },
    { id:"med-4",  name:"Diclofenaco 50mg",           category:"analgesicos", categoryLabel:"Analgésicos y Antiinflamatorios",      desc:"Antiinflamatorio no esteroideo (AINE) potente para dolores agudos y crónicos.",                                                                                            compounds:"Diclofenaco Potásico" },
    { id:"med-5",  name:"Amoxicilina 500mg",          category:"antibioticos", categoryLabel:"Antibióticos y Antivirales",         desc:"Antibiótico de amplio espectro para infecciones de garganta, oído, vías urinarias y piel.",                                                                                compounds:"Amoxicilina Trihidrato" },
    { id:"med-6",  name:"Azitromicina 500mg",         category:"antibioticos", categoryLabel:"Antibióticos y Antivirales",         desc:"Antibiótico macrólido indicado para infecciones respiratorias y de transmisión sexual.",                                                                                    compounds:"Azitromicina Dihidrato" },
    { id:"med-7",  name:"Cefalexina 500mg",           category:"antibioticos", categoryLabel:"Antibióticos y Antivirales",         desc:"Cefalosporina de primera generación útil para infecciones bacterianas del tracto respiratorio y piel.",                                                                    compounds:"Cefalexina Monohidrato" },
    { id:"med-8",  name:"Aciclovir 400mg",            category:"antibioticos", categoryLabel:"Antibióticos y Antivirales",         desc:"Antiviral de referencia indicado para el tratamiento de infecciones por el virus del herpes.",                                                                              compounds:"Aciclovir" },
    { id:"med-9",  name:"Metformina 850mg",           category:"cronicos",     categoryLabel:"Enfermedades Crónicas",              desc:"Medicamento esencial para el control de la glucemia en pacientes con Diabetes Mellitus Tipo 2.",                                                                            compounds:"Metformina Clorhidrato" },
    { id:"med-10", name:"Losartán 50mg",              category:"cronicos",     categoryLabel:"Enfermedades Crónicas",              desc:"Antihipertensivo líder indicado para el tratamiento de la hipertensión arterial y protección renal.",                                                                      compounds:"Losartán Potásico" },
    { id:"med-11", name:"Atorvastatina 20mg",         category:"cronicos",     categoryLabel:"Enfermedades Crónicas",              desc:"Indicado para reducir los niveles de colesterol LDL y triglicéridos en sangre, previniendo eventos cardiovasculares.",                                                    compounds:"Atorvastatina Cálcica" },
    { id:"med-12", name:"Enalapril 20mg",             category:"cronicos",     categoryLabel:"Enfermedades Crónicas",              desc:"Inhibidor de la ECA indicado en hipertensión arterial e insuficiencia cardíaca congestiva.",                                                                                compounds:"Enalapril Maleato" },
    { id:"med-13", name:"Interferón Alfa-2b Colirio", category:"formulas",    categoryLabel:"Fórmulas Magistrales en Oftalmología", desc:"Preparación personalizada indicada en patologías corneales severas y neoplasias de la superficie ocular.",                                                               compounds:"Interferón Alfa-2b Recombinante" },
    { id:"med-14", name:"Ciclosporina Oftálmica 0.05%", category:"formulas",  categoryLabel:"Fórmulas Magistrales en Oftalmología", desc:"Inmunomodulador preparado magistralmente para el síndrome de ojo seco severo y queratoconjuntivitis.",                                                                 compounds:"Ciclosporina A" },
    { id:"med-15", name:"Colirio de Atropina Diluida", category:"formulas",   categoryLabel:"Fórmulas Magistrales en Oftalmología", desc:"Formulación especial utilizada para el control de la progresión de la miopía en pacientes pediátricos.",                                                               compounds:"Sulfato de Atropina" },
    { id:"med-16", name:"Suero Autólogo Oftálmico",  category:"formulas",     categoryLabel:"Fórmulas Magistrales en Oftalmología", desc:"Colirio biológico personalizado elaborado a partir del suero del propio paciente para regeneración corneal.",                                                          compounds:"Factores de Crecimiento del Suero" },
];

let activeTab    = 'analgesicos';
let searchQuery  = '';

document.addEventListener('DOMContentLoaded', () => {

    // ── Header scroll behaviour ───────────────────────────────────────────────
    const header = document.querySelector('.header');
    if (header) {
        window.addEventListener('scroll', () => {
            header.classList.toggle('scrolled', window.scrollY > 50);
        });
    }

    // ── Mobile nav toggle ────────────────────────────────────────────────────
    const hamburger = document.querySelector('.hamburger');
    const navWrap   = document.querySelector('.nav-mobile-wrap');
    if (hamburger && navWrap) {
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navWrap.classList.toggle('active');
        });
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('active');
                navWrap.classList.remove('active');
            });
        });
    }

    // ── Theme toggle ─────────────────────────────────────────────────────────
    const themeBtn     = document.querySelector('.theme-toggle');
    const savedTheme   = localStorage.getItem('theme') || 'light';
    document.documentElement.setAttribute('data-theme', savedTheme);
    if (themeBtn) {
        themeBtn.addEventListener('click', () => {
            const next = document.documentElement.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
            document.documentElement.setAttribute('data-theme', next);
            localStorage.setItem('theme', next);
        });
    }

    // ── Cart mini-drawer (WooCommerce) ───────────────────────────────────────
    const cartDrawer  = document.querySelector('.cart-drawer');
    const cartOverlay = document.querySelector('.cart-overlay');
    const closeCart   = document.querySelector('.close-cart');

    const openCartDrawer  = () => { cartDrawer?.classList.add('active');    cartOverlay?.classList.add('active'); };
    const closeCartDrawer = () => { cartDrawer?.classList.remove('active'); cartOverlay?.classList.remove('active'); };

    // On cart-icon click → open drawer (instead of navigating to /carrito)
    document.querySelector('.cart-toggle')?.addEventListener('click', e => {
        e.preventDefault();
        openCartDrawer();
    });
    closeCart?.addEventListener('click', closeCartDrawer);
    cartOverlay?.addEventListener('click', closeCartDrawer);

    // ── Hero Slider ───────────────────────────────────────────────────────────
    const slides = document.querySelectorAll('.hero-slide');
    const dots   = document.querySelectorAll('.slider-dots .dot');
    let currentSlide = 0, slideInterval;

    function showSlide(i) {
        slides.forEach(s => s.classList.remove('active'));
        dots.forEach(d => d.classList.remove('active'));
        slides[i]?.classList.add('active');
        dots[i]?.classList.add('active');
        currentSlide = i;
    }
    function startSlideShow() { slideInterval = setInterval(() => showSlide((currentSlide + 1) % slides.length), 5000); }

    if (slides.length > 0) {
        startSlideShow();
        dots.forEach(dot => dot.addEventListener('click', e => {
            clearInterval(slideInterval);
            showSlide(parseInt(e.target.dataset.slide));
            startSlideShow();
        }));
    }

    // ── Medicine catalog tabs & search ───────────────────────────────────────
    if (document.querySelector('.medicine-grid')) {
        renderMedicines();

        document.querySelectorAll('.tab-btn[data-tab]').forEach(btn => {
            btn.addEventListener('click', e => {
                document.querySelectorAll('.tab-btn[data-tab]').forEach(b => b.classList.remove('active'));
                e.target.classList.add('active');
                activeTab = e.target.dataset.tab;
                renderMedicines();
            });
        });

        document.querySelector('.search-input')?.addEventListener('input', e => {
            searchQuery = e.target.value.toLowerCase().trim();
            renderMedicines();
        });
    }

    // ── Shop category tabs (filter by data-category on WC product cards) ─────
    const shopCards   = document.querySelectorAll('.prod-card[data-category]');
    const shopTabBtns = document.querySelectorAll('[data-shop-tab]');
    if (shopTabBtns.length > 0) {
        shopTabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                shopTabBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                const tab = btn.dataset.shopTab;
                shopCards.forEach(card => {
                    card.style.display = (tab === 'all' || card.dataset.category === tab) ? '' : 'none';
                });
            });
        });
    }

    // ── Modals (quote & success) ─────────────────────────────────────────────
    setupModals();
});

// ── WooCommerce: open cart drawer after AJAX add-to-cart ─────────────────────
(function ($) {
    $(document.body).on('added_to_cart', function () {
        document.querySelector('.cart-drawer')?.classList.add('active');
        document.querySelector('.cart-overlay')?.classList.add('active');
    });
}(jQuery));

// ── Render Medicines Catalog ──────────────────────────────────────────────────
function renderMedicines() {
    const grid      = document.querySelector('.medicine-grid');
    const noResults = document.querySelector('.no-results');
    if (!grid) return;

    const filtered = MEDICINES_DATA.filter(med => {
        const matchTab    = activeTab === 'all' || med.category === activeTab;
        const matchSearch = med.name.toLowerCase().includes(searchQuery)
                         || med.compounds.toLowerCase().includes(searchQuery)
                         || med.desc.toLowerCase().includes(searchQuery);
        return matchTab && matchSearch;
    });

    if (filtered.length === 0) {
        grid.innerHTML = '';
        if (noResults) noResults.style.display = 'block';
        return;
    }

    if (noResults) noResults.style.display = 'none';
    grid.innerHTML = filtered.map(med => `
        <div class="med-card glass-panel">
            <span class="med-category-badge">${med.categoryLabel}</span>
            <h3 class="med-name">${med.name}</h3>
            <p class="med-desc">${med.desc}</p>
            <div class="med-compounds">
                <span class="med-compounds-title">Componente Activo</span>
                <span class="med-compounds-list">${med.compounds}</span>
            </div>
            <button class="btn btn-primary med-action" onclick="openQuoteModal('${med.name}', '${med.categoryLabel}')">
                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                Cotizar Medicamento
            </button>
        </div>
    `).join('');
}

// ── Modals & Forms ────────────────────────────────────────────────────────────
function setupModals() {
    // Close triggers
    document.querySelectorAll('.close-modal, .modal-overlay').forEach(el => {
        el.addEventListener('click', e => {
            if (e.target === el || el.classList.contains('close-modal')) {
                document.querySelectorAll('.modal-overlay').forEach(m => m.classList.remove('active'));
            }
        });
    });
    document.querySelectorAll('.modal-card').forEach(card => card.addEventListener('click', e => e.stopPropagation()));

    // Medicine Quote Form
    document.getElementById('quote-form')?.addEventListener('submit', e => {
        e.preventDefault();
        const medName = document.getElementById('quote-med-name').value;
        const name    = document.getElementById('quote-name').value;
        const phone   = document.getElementById('quote-phone').value;
        const email   = document.getElementById('quote-email').value;
        const msg     = document.getElementById('quote-message').value;

        const text = `Hola *Essencial Pharma*, me interesa cotizar el siguiente medicamento:\n\n`
                   + `💊 *Medicamento:* ${medName}\n👤 *Nombre:* ${name}\n📞 *Teléfono:* ${phone}\n`
                   + `✉️ *Correo:* ${email}\n💬 *Mensaje:* ${msg}\n\nSolicito información de disponibilidad y costo. ¡Gracias!`;

        document.getElementById('quote-modal').classList.remove('active');
        showSuccessModal('¡Cotización Enviada!', 'Te estamos redirigiendo a WhatsApp para finalizar tu solicitud con un asesor comercial.');
        setTimeout(() => window.open(`https://api.whatsapp.com/send?phone=573053398870&text=${encodeURIComponent(text)}`, '_blank'), 1500);
    });

    // General Contact Form
    document.getElementById('contact-form')?.addEventListener('submit', e => {
        e.preventDefault();
        const name  = document.getElementById('form-name').value;
        const phone = document.getElementById('form-phone').value;
        const email = document.getElementById('form-email').value;
        const msg   = document.getElementById('form-message').value;

        const text = `Hola *Essencial Pharma*, quiero solicitar más información general:\n\n`
                   + `👤 *Nombre:* ${name}\n📞 *Teléfono:* ${phone}\n✉️ *Correo:* ${email}\n💬 *Mensaje:* ${msg}`;

        showSuccessModal('¡Mensaje Preparado!', 'Te redirigimos a WhatsApp para contactarnos de forma inmediata.');
        setTimeout(() => window.open(`https://api.whatsapp.com/send?phone=573053398870&text=${encodeURIComponent(text)}`, '_blank'), 1500);
    });
}

// ── Global helpers ────────────────────────────────────────────────────────────
window.openQuoteModal = function (medicineName, categoryLabel) {
    document.getElementById('quote-med-name').value   = medicineName;
    document.getElementById('quote-med-label').textContent = `${categoryLabel} › ${medicineName}`;
    document.getElementById('quote-modal').classList.add('active');
};

function showSuccessModal(title, message) {
    document.getElementById('success-title').textContent   = title;
    document.getElementById('success-message').textContent = message;
    document.getElementById('success-modal').classList.add('active');
}

window.filterShopCategory = function (category) {
    const shopTabBtns = document.querySelectorAll('[data-shop-tab]');
    const shopCards   = document.querySelectorAll('.prod-card[data-category]');
    
    shopTabBtns.forEach(btn => {
        if (btn.dataset.shopTab === category) {
            btn.classList.add('active');
        } else {
            btn.classList.remove('active');
        }
    });

    shopCards.forEach(card => {
        card.style.display = (category === 'all' || card.dataset.category === category) ? '' : 'none';
    });

    const shopSection = document.getElementById('dermocosmetica');
    if (shopSection) {
        shopSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
};

