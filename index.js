// Data Models
const MEDICINES_DATA = [
    // Analgésicos y Antiinflamatorios
    {
        id: "med-1",
        name: "Acetaminofén 500mg",
        category: "analgesicos",
        categoryLabel: "Analgésicos y Antiinflamatorios",
        desc: "Indicado para el alivio del dolor leve a moderado y estados febriles. Producto de alta pureza.",
        compounds: "Acetaminofén"
    },
    {
        id: "med-2",
        name: "Ibuprofeno 400mg",
        category: "analgesicos",
        categoryLabel: "Analgésicos y Antiinflamatorios",
        desc: "Efectivo analgésico y antiinflamatorio para dolores musculares, articulares y de cabeza.",
        compounds: "Ibuprofeno"
    },
    {
        id: "med-3",
        name: "Naproxeno 250mg",
        category: "analgesicos",
        categoryLabel: "Analgésicos y Antiinflamatorios",
        desc: "Alivio prolongado de la inflamación y dolor. Especialmente útil para dolores articulares.",
        compounds: "Naproxeno Sodico"
    },
    {
        id: "med-4",
        name: "Diclofenaco 50mg",
        category: "analgesicos",
        categoryLabel: "Analgésicos y Antiinflamatorios",
        desc: "Antiinflamatorio no esteroideo (AINE) potente para dolores agudos y crónicos.",
        compounds: "Diclofenaco Potásico"
    },

    // Antibióticos y Antivirales
    {
        id: "med-5",
        name: "Amoxicilina 500mg",
        category: "antibioticos",
        categoryLabel: "Antibióticos y Antivirales",
        desc: "Antibiótico de amplio espectro para infecciones de garganta, oído, vías urinarias y piel.",
        compounds: "Amoxicilina Trihidrato"
    },
    {
        id: "med-6",
        name: "Azitromicina 500mg",
        category: "antibioticos",
        categoryLabel: "Antibióticos y Antivirales",
        desc: "Antibiótico macrólido indicado para infecciones respiratorias y de transmisión sexual.",
        compounds: "Azitromicina Dihidrato"
    },
    {
        id: "med-7",
        name: "Cefalexina 500mg",
        category: "antibioticos",
        categoryLabel: "Antibióticos y Antivirales",
        desc: "Cefalosporina de primera generación útil para infecciones bacterianas del tracto respiratorio y piel.",
        compounds: "Cefalexina Monohidrato"
    },
    {
        id: "med-8",
        name: "Aciclovir 400mg",
        category: "antibioticos",
        categoryLabel: "Antibióticos y Antivirales",
        desc: "Antiviral de referencia indicado para el tratamiento de infecciones por el virus del herpes.",
        compounds: "Aciclovir"
    },

    // Enfermedades Crónicas
    {
        id: "med-9",
        name: "Metformina 850mg",
        category: "cronicos",
        categoryLabel: "Enfermedades Crónicas",
        desc: "Medicamento esencial para el control de la glucemia en pacientes con Diabetes Mellitus Tipo 2.",
        compounds: "Metformina Clorhidrato"
    },
    {
        id: "med-10",
        name: "Losartán 50mg",
        category: "cronicos",
        categoryLabel: "Enfermedades Crónicas",
        desc: "Antihipertensivo líder indicado para el tratamiento de la hipertensión arterial y protección renal.",
        compounds: "Losartán Potásico"
    },
    {
        id: "med-11",
        name: "Atorvastatina 20mg",
        category: "cronicos",
        categoryLabel: "Enfermedades Crónicas",
        desc: "Indicado para reducir los niveles de colesterol LDL y triglicéridos en sangre, previniendo eventos cardiovasculares.",
        compounds: "Atorvastatina Cálcica"
    },
    {
        id: "med-12",
        name: "Enalapril 20mg",
        category: "cronicos",
        categoryLabel: "Enfermedades Crónicas",
        desc: "Inhibidor de la ECA indicado en hipertensión arterial e insuficiencia cardíaca congestiva.",
        compounds: "Enalapril Maleato"
    },

    // Fórmulas Magistrales en Oftalmología
    {
        id: "med-13",
        name: "Interferón Alfa-2b Colirio",
        category: "formulas",
        categoryLabel: "Fórmulas Magistrales en Oftalmología",
        desc: "Preparación personalizada indicada en patologías corneales severas y neoplasias de la superficie ocular.",
        compounds: "Interferón Alfa-2b Recombinante"
    },
    {
        id: "med-14",
        name: "Ciclosporina Oftálmica 0.05%",
        category: "formulas",
        categoryLabel: "Fórmulas Magistrales en Oftalmología",
        desc: "Inmunomodulador preparado magistralmente para el síndrome de ojo seco severo y queratoconjuntivitis.",
        compounds: "Ciclosporina A"
    },
    {
        id: "med-15",
        name: "Colirio de Atropina Diluida",
        category: "formulas",
        categoryLabel: "Fórmulas Magistrales en Oftalmología",
        desc: "Formulación especial utilizada para el control de la progresión de la miopía en pacientes pediátricos.",
        compounds: "Sulfato de Atropina"
    },
    {
        id: "med-16",
        name: "Suero Autólogo Oftálmico",
        category: "formulas",
        categoryLabel: "Fórmulas Magistrales en Oftalmología",
        desc: "Colirio biológico personalizado elaborado a partir del suero del propio paciente para regeneración corneal.",
        compounds: "Factores de Crecimiento del Suero"
    }
];

const DERMO_PRODUCTS = [
    {
        id: "dermo-1",
        name: "Shampoo Revitalizante Capilar",
        desc: "Fórmula dermocosmética avanzada para limpiar suavemente, fortalecer los folículos pilosos y estimular el crecimiento. pH balanceado.",
        price: 45000,
        image: "images/dermo_shampoo.png",
        rating: 4.8,
        reviewsCount: 124,
        badge: "NUEVO"
    },
    {
        id: "dermo-2",
        name: "Tónico Anticaída Estimulante",
        desc: "Tratamiento intensivo en gotas para el cuero cabelludo. Activa la microcirculación, reduce la caída y densifica la fibra capilar.",
        price: 55000,
        image: "images/dermo_tonico.png",
        rating: 4.9,
        reviewsCount: 96,
        badge: "DESTACADO"
    },
    {
        id: "dermo-3",
        name: "Tratamiento Nutritivo Intensivo",
        desc: "Mascarilla reparadora enriquecida con aminoácidos y lípidos biomiméticos. Hidrata profundamente y restaura el brillo natural.",
        price: 60000,
        image: "images/dermo_tratamiento.png",
        rating: 4.7,
        reviewsCount: 88,
        badge: "MÁS VENDIDO"
    }
];

// App State
let cart = JSON.parse(localStorage.getItem('ep_cart')) || [];
let activeTab = 'analgesicos';
let searchQuery = '';

// DOM Elements
document.addEventListener('DOMContentLoaded', () => {
    // Navigation / Header scroll behavior
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // Mobile menu toggle
    const hamburger = document.querySelector('.hamburger');
    const nav = document.querySelector('.nav');
    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        nav.classList.toggle('active');
    });

    // Close mobile menu when a link is clicked
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            hamburger.classList.remove('active');
            nav.classList.remove('active');
        });
    });

    // Theme toggle logic
    const themeBtn = document.querySelector('.theme-toggle');
    const currentTheme = localStorage.getItem('theme') || 'light';
    document.documentElement.setAttribute('data-theme', currentTheme);

    themeBtn.addEventListener('click', () => {
        const theme = document.documentElement.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
        document.documentElement.setAttribute('data-theme', theme);
        localStorage.setItem('theme', theme);
    });

    // Cart Drawer Toggle
    const cartBtn = document.querySelector('.cart-toggle');
    const closeCartBtn = document.querySelector('.close-cart');
    const cartDrawer = document.querySelector('.cart-drawer');
    const cartOverlay = document.querySelector('.cart-overlay');

    const openCart = () => {
        cartDrawer.classList.add('active');
        cartOverlay.classList.add('active');
        renderCart();
    };

    const closeCart = () => {
        cartDrawer.classList.remove('active');
        cartOverlay.classList.remove('active');
    };

    cartBtn.addEventListener('click', openCart);
    closeCartBtn.addEventListener('click', closeCart);
    cartOverlay.addEventListener('click', closeCart);

    // Initialize Medicines Catalog
    renderMedicines();

    // Tab filtering logic
    const tabButtons = document.querySelectorAll('.tab-btn');
    tabButtons.forEach(btn => {
        btn.addEventListener('click', (e) => {
            tabButtons.forEach(b => b.classList.remove('active'));
            e.target.classList.add('active');
            activeTab = e.target.dataset.tab;
            renderMedicines();
        });
    });

    // Search bar logic
    const searchInput = document.querySelector('.search-input');
    searchInput.addEventListener('input', (e) => {
        searchQuery = e.target.value.toLowerCase().trim();
        renderMedicines();
    });

    // Initialize Dermocosmetics Shop
    renderDermoProducts();

    // Setup forms & modal listeners
    setupModals();

    // Update cart badge initially
    updateCartBadge();
});

// Render Medicines Catalog
function renderMedicines() {
    const grid = document.querySelector('.medicine-grid');
    const noResults = document.querySelector('.no-results');
    
    // Filter data
    const filtered = MEDICINES_DATA.filter(med => {
        const matchesTab = activeTab === 'all' || med.category === activeTab;
        const matchesSearch = med.name.toLowerCase().includes(searchQuery) || 
                              med.compounds.toLowerCase().includes(searchQuery) ||
                              med.desc.toLowerCase().includes(searchQuery);
        return matchesTab && matchesSearch;
    });

    // Render HTML
    if (filtered.length === 0) {
        grid.innerHTML = '';
        noResults.style.display = 'block';
    } else {
        noResults.style.display = 'none';
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
}

// Render Dermocosmetics Shop
function renderDermoProducts() {
    const grid = document.querySelector('.product-grid');
    
    grid.innerHTML = DERMO_PRODUCTS.map(prod => {
        // Generate stars icons HTML
        let starsHTML = '';
        const fullStars = Math.floor(prod.rating);
        for (let i = 0; i < 5; i++) {
            if (i < fullStars) {
                starsHTML += `<svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg>`;
            } else {
                starsHTML += `<svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg>`;
            }
        }

        // Format price to COP currency format (e.g. $45.000)
        const formattedPrice = new Intl.NumberFormat('es-CO', {
            style: 'currency',
            currency: 'COP',
            minimumFractionDigits: 0,
            maximumFractionDigits: 0
        }).format(prod.price);

        return `
            <div class="prod-card glass-panel">
                <div class="prod-img-wrap">
                    <img src="${prod.image}" alt="${prod.name}" class="prod-img" loading="lazy">
                    <span class="prod-badge">${prod.badge}</span>
                </div>
                <div class="prod-content">
                    <div class="prod-stars">
                        ${starsHTML}
                        <span class="prod-stars-text">(${prod.reviewsCount} opiniones)</span>
                    </div>
                    <h3 class="prod-name">${prod.name}</h3>
                    <p class="prod-desc">${prod.desc}</p>
                    <div class="prod-meta">
                        <span class="prod-price">${formattedPrice}</span>
                        <button class="btn btn-secondary" onclick="addToCart('${prod.id}')">
                            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            Añadir
                        </button>
                    </div>
                </div>
            </div>
        `;
    }).join('');
}

// Cart System Operations
function addToCart(productId) {
    const product = DERMO_PRODUCTS.find(p => p.id === productId);
    if (!product) return;

    const existing = cart.find(item => item.id === productId);
    if (existing) {
        existing.qty += 1;
    } else {
        cart.push({
            id: product.id,
            name: product.name,
            price: product.price,
            image: product.image,
            qty: 1
        });
    }

    // Persist
    localStorage.setItem('ep_cart', JSON.stringify(cart));
    
    // UI Effects
    updateCartBadge();
    const cartBadge = document.querySelector('.cart-badge');
    cartBadge.classList.add('bump');
    setTimeout(() => cartBadge.classList.remove('bump'), 300);

    // Open Cart Drawer
    document.querySelector('.cart-drawer').classList.add('active');
    document.querySelector('.cart-overlay').classList.add('active');
    renderCart();
}

function updateQuantity(productId, change) {
    const item = cart.find(i => i.id === productId);
    if (!item) return;

    item.qty += change;
    if (item.qty <= 0) {
        removeFromCart(productId);
    } else {
        localStorage.setItem('ep_cart', JSON.stringify(cart));
        updateCartBadge();
        renderCart();
    }
}

function removeFromCart(productId) {
    cart = cart.filter(item => item.id !== productId);
    localStorage.setItem('ep_cart', JSON.stringify(cart));
    updateCartBadge();
    renderCart();
}

function updateCartBadge() {
    const badge = document.querySelector('.cart-badge');
    const totalQty = cart.reduce((sum, item) => sum + item.qty, 0);
    
    if (totalQty > 0) {
        badge.textContent = totalQty;
        badge.style.display = 'flex';
    } else {
        badge.style.display = 'none';
    }
}

function renderCart() {
    const list = document.querySelector('.cart-items-list');
    const summaryTotal = document.getElementById('cart-subtotal');
    const summaryTotalFinal = document.getElementById('cart-total');
    
    if (cart.length === 0) {
        list.innerHTML = `
            <div class="cart-empty-msg">
                <svg width="48" height="48" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" style="margin: 0 auto 16px auto; display:block;"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                <p>Tu carrito está vacío</p>
                <span style="font-size:0.8rem; color:var(--text-light)">Añade productos de la línea dermocosmética</span>
            </div>
        `;
        document.querySelector('.cart-summary').style.display = 'none';
        return;
    }

    document.querySelector('.cart-summary').style.display = 'block';

    // Render items
    list.innerHTML = cart.map(item => {
        const formattedItemPrice = new Intl.NumberFormat('es-CO', {
            style: 'currency',
            currency: 'COP',
            minimumFractionDigits: 0
        }).format(item.price * item.qty);

        return `
            <div class="cart-item">
                <img src="${item.image}" alt="${item.name}" class="cart-item-img">
                <div class="cart-item-details">
                    <h4 class="cart-item-name">${item.name}</h4>
                    <span class="cart-item-price">${formattedItemPrice}</span>
                    <div class="cart-item-ctrl">
                        <button class="qty-btn" onclick="updateQuantity('${item.id}', -1)">-</button>
                        <span class="qty-val">${item.qty}</span>
                        <button class="qty-btn" onclick="updateQuantity('${item.id}', 1)">+</button>
                    </div>
                </div>
                <button class="remove-item" onclick="removeFromCart('${item.id}')">
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                </button>
            </div>
        `;
    }).join('');

    // Compute totals
    const subtotal = cart.reduce((sum, item) => sum + (item.price * item.qty), 0);
    
    const formattedSub = new Intl.NumberFormat('es-CO', {
        style: 'currency',
        currency: 'COP',
        minimumFractionDigits: 0
    }).format(subtotal);

    summaryTotal.textContent = formattedSub;
    summaryTotalFinal.textContent = formattedSub;
}

// Modals and Forms Integration
function setupModals() {
    const modalOverlay = document.getElementById('quote-modal');
    const checkoutModal = document.getElementById('checkout-modal');
    const successModal = document.getElementById('success-modal');
    
    // Close modal triggers
    document.querySelectorAll('.close-modal, .modal-overlay').forEach(btn => {
        btn.addEventListener('click', (e) => {
            // Only close if overlay itself or close btn is clicked
            if (e.target === btn || btn.classList.contains('close-modal')) {
                document.querySelectorAll('.modal-overlay').forEach(m => m.classList.remove('active'));
            }
        });
    });

    // Prevent propagation inside the card
    document.querySelectorAll('.modal-card').forEach(card => {
        card.addEventListener('click', e => e.stopPropagation());
    });

    // Medicine Quote Form Submit
    const quoteForm = document.getElementById('quote-form');
    quoteForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const medName = document.getElementById('quote-med-name').value;
        const name = document.getElementById('quote-name').value;
        const phone = document.getElementById('quote-phone').value;
        const email = document.getElementById('quote-email').value;
        const msg = document.getElementById('quote-message').value;

        // Generate WhatsApp API URL
        const whatsappNumber = '573053398870';
        const text = `Hola *Essencial Pharma*, me interesa cotizar el siguiente medicamento:\n\n` + 
                     `💊 *Medicamento:* ${medName}\n` +
                     `👤 *Nombre:* ${name}\n` +
                     `📞 *Teléfono:* ${phone}\n` +
                     `✉️ *Correo:* ${email}\n` +
                     `💬 *Mensaje:* ${msg}\n\n` +
                     `Solicito información de disponibilidad y costo. ¡Gracias!`;
        
        const url = `https://api.whatsapp.com/send?phone=${whatsappNumber}&text=${encodeURIComponent(text)}`;
        
        // UI Feedback
        modalOverlay.classList.remove('active');
        showSuccessModal("¡Cotización Enviada!", "Te estamos redirigiendo a WhatsApp para finalizar tu solicitud con un asesor comercial.");
        
        setTimeout(() => {
            window.open(url, '_blank');
        }, 1500);
    });

    // Checkout E-commerce Form Submit
    const checkoutForm = document.getElementById('checkout-form');
    checkoutForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const name = document.getElementById('co-name').value;
        const phone = document.getElementById('co-phone').value;
        const email = document.getElementById('co-email').value;
        const address = document.getElementById('co-address').value;
        const city = document.getElementById('co-city').value;

        // Construct cart order message
        let orderDetails = '';
        let total = 0;
        cart.forEach((item, index) => {
            const itemTotal = item.price * item.qty;
            total += itemTotal;
            const priceFormatted = new Intl.NumberFormat('es-CO', { style: 'currency', currency: 'COP', minimumFractionDigits: 0 }).format(item.price);
            orderDetails += `${index + 1}. *${item.name}* (x${item.qty}) - Subtotal: ${new Intl.NumberFormat('es-CO', { style: 'currency', currency: 'COP', minimumFractionDigits: 0 }).format(itemTotal)}\n`;
        });

        const formattedTotal = new Intl.NumberFormat('es-CO', { style: 'currency', currency: 'COP', minimumFractionDigits: 0 }).format(total);

        // Generate WhatsApp API URL
        const whatsappNumber = '573053398870';
        const text = `🛒 *NUEVO PEDIDO DERMOCOSMÉTICA - Essencial Pharma*\n\n` + 
                     `👤 *Cliente:* ${name}\n` +
                     `📞 *Teléfono:* ${phone}\n` +
                     `✉️ *Correo:* ${email}\n` +
                     `📍 *Dirección de Envío:* ${address}\n` +
                     `🏙️ *Ciudad:* ${city}\n\n` +
                     `📦 *Detalle del Pedido:*\n${orderDetails}\n` +
                     `💰 *VALOR TOTAL:* ${formattedTotal}\n\n` +
                     `Quedo atento a la confirmación de datos para el envío y métodos de pago.`;
        
        const url = `https://api.whatsapp.com/send?phone=${whatsappNumber}&text=${encodeURIComponent(text)}`;
        
        // Empty Cart
        cart = [];
        localStorage.removeItem('ep_cart');
        updateCartBadge();
        
        // Close Checkout & Cart
        checkoutModal.classList.remove('active');
        document.querySelector('.cart-drawer').classList.remove('active');
        document.querySelector('.cart-overlay').classList.remove('active');
        
        // UI Feedback
        showSuccessModal("¡Pedido Registrado con Éxito!", "Hemos recibido los datos de tu orden. Te estamos redirigiendo a WhatsApp para coordinar el pago y envío.");
        
        setTimeout(() => {
            window.open(url, '_blank');
        }, 1500);
    });

    // General Contact Form (Section footer)
    const generalForm = document.getElementById('contact-form');
    if (generalForm) {
        generalForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const name = document.getElementById('form-name').value;
            const phone = document.getElementById('form-phone').value;
            const email = document.getElementById('form-email').value;
            const msg = document.getElementById('form-message').value;

            // Generate WhatsApp URL
            const whatsappNumber = '573053398870';
            const text = `Hola *Essencial Pharma*, quiero solicitar más información general:\n\n` + 
                         `👤 *Nombre:* ${name}\n` +
                         `📞 *Teléfono:* ${phone}\n` +
                         `✉️ *Correo:* ${email}\n` +
                         `💬 *Mensaje:* ${msg}`;
            
            const url = `https://api.whatsapp.com/send?phone=${whatsappNumber}&text=${encodeURIComponent(text)}`;
            
            showSuccessModal("¡Mensaje Preparado!", "Te redirigimos a WhatsApp para contactarnos de forma inmediata.");
            
            setTimeout(() => {
                window.open(url, '_blank');
            }, 1500);
        });
    }
}

// Global modal trigger helpers
window.openQuoteModal = function(medicineName, categoryLabel) {
    const modal = document.getElementById('quote-modal');
    document.getElementById('quote-med-name').value = medicineName;
    document.getElementById('quote-med-label').textContent = `${categoryLabel} > ${medicineName}`;
    modal.classList.add('active');
};

window.openCheckoutModal = function() {
    if (cart.length === 0) return;
    const modal = document.getElementById('checkout-modal');
    modal.classList.add('active');
};

function showSuccessModal(title, message) {
    const modal = document.getElementById('success-modal');
    document.getElementById('success-title').textContent = title;
    document.getElementById('success-message').textContent = message;
    modal.classList.add('active');
}

// Explicit global bindings for safety
window.addToCart = addToCart;
window.updateQuantity = updateQuantity;
window.removeFromCart = removeFromCart;
