<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Packing and Unpacking Services',
    'bc_desc' => 'Multi-Layer Packing & Doorstep Unpacking Solutions by ' . $company3,
    'breadcrumbs' => [
        ['name' => 'Services'],
        ['name' => 'Packing and Unpacking Services']
    ]
]);
?>

<div class="py-4 py-lg-5 bg-light">
    <div class="container">

        <!-- Top Hero Section (col-12 col-lg-8 & col-12 col-lg-4) -->
        <div class="row g-4 mb-4 align-items-stretch">
            <div class="col-12 col-lg-8">
                <div class="hero-content-card p-4 p-md-5 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <!-- Category Tag Badge -->
                        <div class="mb-3">
                            <span class="hero-tag-badge">
                                <i class="bi bi-box-seam-fill text-brand-red"></i>
                                Professional Packing Specialists
                            </span>
                        </div>

                        <!-- Main Heading -->
                        <h2 class="display-6 fw-bold mb-3 text-navy">
                            Expert Multi-Layer Packing &amp;<br>
                            <span class="text-brand-red">Unpacking Services</span>
                        </h2>

                        <!-- Introductory Paragraphs -->
                        <p class="text-contrast lead fs-6 mb-3">
                            The safety of your belongings during transit depends entirely on the quality of packaging. At <strong class="text-navy"><?= htmlspecialchars($company3) ?></strong>, we employ industrial-grade multi-layer packaging techniques to safeguard every item from scratches, breakage, and moisture.
                        </p>
                        <p class="text-contrast mb-4">
                            From delicate porcelain, glassware, and flat-screen TVs to heavy wooden wardrobes and leather sofas, our trained packers treat your belongings with utmost care. At your destination, our crew unboxes, arranges furniture, and hauls away all packing debris for an effortless move.
                        </p>

                        <!-- Key Feature Micro-Chips Grid -->
                        <div class="row g-2 mb-4">
                            <div class="col-6 col-sm-3">
                                <div class="hero-feature-chip">
                                    <i class="bi bi-layers-fill text-danger"></i>
                                    <span>4-Layer Wrap</span>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3">
                                <div class="hero-feature-chip">
                                    <i class="bi bi-box-seam text-primary"></i>
                                    <span>Heavy Cartons</span>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3">
                                <div class="hero-feature-chip">
                                    <i class="bi bi-hammer text-info"></i>
                                    <span>Wooden Crates</span>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3">
                                <div class="hero-feature-chip">
                                    <i class="bi bi-trash3-fill text-success"></i>
                                    <span>Debris Removal</span>
                                </div>
                            </div>
                        </div>

                        <!-- Direct CTA Buttons -->
                        <div class="d-flex flex-wrap gap-2 gap-sm-3 mb-3">
                            <a href="<?= $phonehtml ?>" class="btn-cta-phone">
                                <i class="bi bi-telephone-fill"></i> Call <?= $phone ?>
                            </a>
                            <button type="button" class="btn-cta-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
                                <i class="bi bi-send-fill text-danger"></i> Get Packing Estimate
                            </button>
                            <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="btn-cta-whatsapp">
                                <i class="bi bi-whatsapp"></i> WhatsApp Inquiry
                            </a>
                        </div>
                    </div>

                    <!-- Bottom Reassurance Row -->
                    <div class="pt-3 border-top d-flex flex-wrap align-items-center justify-content-between gap-2 text-contrast small">
                        <span class="d-inline-flex align-items-center gap-1">
                            <i class="bi bi-check-circle-fill text-success small"></i> Eco-Friendly Materials
                        </span>
                        <span class="d-inline-flex align-items-center gap-1">
                            <i class="bi bi-check-circle-fill text-success small"></i> Color-Coded Room Labels
                        </span>
                        <span class="d-inline-flex align-items-center gap-1">
                            <i class="bi bi-check-circle-fill text-success small"></i> Zero-Debris Left Behind
                        </span>
                    </div>
                </div>
            </div>

            <!-- Right: Services Sidebar -->
            <div class="col-12 col-lg-4">
                <?php $this->load->view('services/services_sidebar', ['active_service' => 'packing-and-unpacking-services']); ?>
            </div>
        </div>

        <!-- 2. Four Feature Highlights in a Row (2 in a row on mobile) -->
        <section class="bg-white rounded-4 border shadow-sm p-3 p-md-4 mb-4">
            <div class="row g-2 g-md-4 text-center align-items-stretch">
                <!-- 1. Multi-Layer Protective Cushioning -->
                <div class="col-6 col-lg-3 feature-grid-item hover-feature">
                    <div class="mb-2">
                        <svg class="feature-badge-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#012652" d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01z"/>
                            <path fill="none" stroke="#ffffff" stroke-width="0.9" stroke-linecap="round" stroke-linejoin="round" d="M8 4.2c1.3 0 2.8-.7 3.2-1 .3 2.5-.2 5.2-3.2 6.8-3-1.6-3.5-4.3-3.2-6.8.4.3 1.9 1 3.2 1z"/>
                            <path fill="none" stroke="#ffffff" stroke-width="0.9" stroke-linecap="round" stroke-linejoin="round" d="M6.5 7.2l1 1 2.2-2.2"/>
                        </svg>
                    </div>
                    <h3 class="fw-bold fs-6 mb-1 text-navy">4-Layer Protection</h3>
                    <p class="text-contrast small mb-0">Bubble wrap, foam rolls, shrink film &amp; tape seal.</p>
                </div>

                <!-- 2. Specialized Crating -->
                <div class="col-6 col-lg-3 feature-grid-item hover-feature">
                    <div class="mb-2">
                        <svg class="feature-badge-icon" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="24" cy="24" r="21" fill="#EE0416" fill-opacity="0.08"/>
                            <g fill="#EE0416">
                                <path d="M10 14h28v20H10z"/>
                                <path d="M12 16l24 16M36 16L12 32" stroke="#ffffff" stroke-width="2"/>
                            </g>
                        </svg>
                    </div>
                    <h3 class="fw-bold fs-6 mb-1 text-navy">Custom Wooden Crating</h3>
                    <p class="text-contrast small mb-0">Engineered wood boxes for marble, glass &amp; LEDs.</p>
                </div>

                <!-- 3. Trained Packing Crew -->
                <div class="col-6 col-lg-3 feature-grid-item hover-feature">
                    <div class="mb-2">
                        <svg class="feature-badge-icon" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="24" cy="24" r="21" fill="#EE0416" fill-opacity="0.08"/>
                            <g fill="#EE0416">
                                <circle cx="14" cy="19" r="4.5"/>
                                <path d="M7 32c0-4 3.5-7 8-7 1.8 0 3.4.5 4.6 1.4-.8 1.4-1.3 3.1-1.3 4.9v.7H7z"/>
                                <circle cx="34" cy="19" r="4.5"/>
                                <path d="M41 32c0-4-3.5-7-8-7-1.8 0-3.4.5-4.6 1.4.8 1.4 1.3 3.1 1.3 4.9v.7h11.3z"/>
                                <circle cx="24" cy="15" r="5.5"/>
                                <path d="M15 32c0-5 4-8.5 9-8.5s9 3.5 9 8.5H15z"/>
                            </g>
                        </svg>
                    </div>
                    <h3 class="fw-bold fs-6 mb-1 text-navy">Trained Packers</h3>
                    <p class="text-contrast small mb-0">Certified professionals skilled in delicate packing.</p>
                </div>

                <!-- 4. Complete Unpacking & Placement -->
                <div class="col-6 col-lg-3 feature-grid-item hover-feature">
                    <div class="mb-2">
                        <svg class="feature-badge-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#EE0416" d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01z"/>
                            <text x="8" y="10.8" font-size="7.5" font-family="'Plus Jakarta Sans', Arial, sans-serif" font-weight="bold" fill="#ffffff" text-anchor="middle">₹</text>
                        </svg>
                    </div>
                    <h3 class="fw-bold fs-6 mb-1 text-navy">Clean Unpacking</h3>
                    <p class="text-contrast small mb-0">Unboxing, furniture setup &amp; full rubbish clearing.</p>
                </div>
            </div>
        </section>

        <!-- 3. Our Packing Process (2 in a row on mobile) -->
        <section class="process-container-box rounded-4 p-3 p-sm-4 p-md-5 mb-4">
            <div class="text-center mb-4 mb-lg-5">
                <span class="section-badge-title d-inline-block mb-1">
                    <span class="badge-dash"></span>OUR SYSTEMATIC PROCESS
                </span>
                <h2 class="fw-bold text-navy mb-2">
                    Step-by-Step Packing &amp; <span class="text-brand-red">Unpacking Flow</span>
                </h2>
                <p class="text-contrast small mb-0">
                    How we ensure total security from item boxing to room setup.
                </p>
            </div>

            <div class="row g-2 g-md-3 g-xl-3 align-items-stretch justify-content-center">
                <!-- Step 1 -->
                <div class="col-6 col-lg">
                    <div class="process-card text-center d-flex flex-column align-items-center justify-content-start h-100">
                        <div class="process-icon-wrapper">
                            <span class="process-step-badge bg-brand-red">01</span>
                            <div class="process-icon-halo process-halo-blue">
                                <i class="bi bi-search text-navy process-icon-inner"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold fs-6 mb-1 text-navy">Item Categorization</h3>
                        <p class="text-contrast small mb-0">Segregating fragile, bulky, and daily-use items.</p>
                    </div>
                </div>

                <!-- Arrow 1 -->
                <div class="col-auto d-none d-lg-flex align-items-center justify-content-center text-brand-red fs-4 fw-bold px-1">
                    <i class="bi bi-chevron-right"></i>
                </div>

                <!-- Step 2 -->
                <div class="col-6 col-lg">
                    <div class="process-card text-center d-flex flex-column align-items-center justify-content-start h-100">
                        <div class="process-icon-wrapper">
                            <span class="process-step-badge bg-navy">02</span>
                            <div class="process-icon-halo process-halo-blue">
                                <i class="bi bi-shield-shaded text-navy process-icon-inner"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold fs-6 mb-1 text-navy">Multi-Layer Wrapping</h3>
                        <p class="text-contrast small mb-0">Bubble wrap, foam, thermocol and edge protectors.</p>
                    </div>
                </div>

                <!-- Arrow 2 -->
                <div class="col-auto d-none d-lg-flex align-items-center justify-content-center text-brand-red fs-4 fw-bold px-1">
                    <i class="bi bi-chevron-right"></i>
                </div>

                <!-- Step 3 -->
                <div class="col-6 col-lg">
                    <div class="process-card text-center d-flex flex-column align-items-center justify-content-start h-100">
                        <div class="process-icon-wrapper">
                            <span class="process-step-badge bg-brand-red">03</span>
                            <div class="process-icon-halo process-halo-red">
                                <i class="bi bi-tags-fill text-brand-red process-icon-inner"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold fs-6 mb-1 text-navy">Labeling &amp; Sealing</h3>
                        <p class="text-contrast small mb-0">Numbered and color-coded labels on every carton.</p>
                    </div>
                </div>

                <!-- Arrow 3 -->
                <div class="col-auto d-none d-lg-flex align-items-center justify-content-center text-brand-red fs-4 fw-bold px-1">
                    <i class="bi bi-chevron-right"></i>
                </div>

                <!-- Step 4 -->
                <div class="col-6 col-lg">
                    <div class="process-card text-center d-flex flex-column align-items-center justify-content-start h-100">
                        <div class="process-icon-wrapper">
                            <span class="process-step-badge bg-navy">04</span>
                            <div class="process-icon-halo process-halo-blue">
                                <i class="bi bi-house-check-fill text-navy process-icon-inner"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold fs-6 mb-1 text-navy">Unpacking &amp; Setup</h3>
                        <p class="text-contrast small mb-0">Room placement, furniture setup &amp; waste cleanup.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. What We Pack (2 in a row on mobile) -->
        <section class="bg-white rounded-4 p-3 p-sm-4 p-md-5 border shadow-sm mb-4">
            <div class="text-center mb-4 mb-lg-5">
                <span class="section-badge-title d-inline-block mb-1">
                    <span class="badge-dash"></span>PREMIUM PACKING SOLUTIONS
                </span>
                <h2 class="fw-bold text-navy mb-0">
                    High-Grade Packaging For <span class="text-brand-red">Every Item</span>
                </h2>
            </div>

            <div class="row g-2 g-md-3 g-lg-4">
                <!-- 1. Crockery & Glass -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-cup text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Glass &amp; Crockery</h3>
                            <small class="text-contrast fw-semibold">(Air bubble wrap &amp; partitions)</small>
                        </div>
                    </div>
                </div>

                <!-- 2. LED TV & Electronics -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-tv text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">LEDs &amp; Screens</h3>
                            <small class="text-contrast fw-semibold">(Wooden crates &amp; foam corners)</small>
                        </div>
                    </div>
                </div>

                <!-- 3. Heavy Wooden Furniture -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-door-closed text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Beds &amp; Wardrobes</h3>
                            <small class="text-contrast fw-semibold">(Corrugated rolls &amp; shrink film)</small>
                        </div>
                    </div>
                </div>

                <!-- 4. Kitchen Utensils -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-egg-fried text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Kitchen Utensils</h3>
                            <small class="text-contrast fw-semibold">(Heavy cartons &amp; paper padding)</small>
                        </div>
                    </div>
                </div>

                <!-- 5. Clothes & Wardrobe Boxes -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-bag text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Garments &amp; Linen</h3>
                            <small class="text-contrast fw-semibold">(Hanging wardrobe boxes)</small>
                        </div>
                    </div>
                </div>

                <!-- 6. Books & Documents -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-book text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Books &amp; Files</h3>
                            <small class="text-contrast fw-semibold">(Reinforced compact boxes)</small>
                        </div>
                    </div>
                </div>

                <!-- 7. Antiques & Artwork -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-brush text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Art &amp; Antiques</h3>
                            <small class="text-contrast fw-semibold">(Custom museum-grade cases)</small>
                        </div>
                    </div>
                </div>

                <!-- 8. Mirrors & Glass Table tops -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-aspect-ratio text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Mirrors &amp; Glass</h3>
                            <small class="text-contrast fw-semibold">(Edge-padded safety crates)</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. Direct Concierge CTA Banner -->
        <section class="about-cta-banner my-3">
            <div class="row align-items-center g-3">
                <div class="col-12 col-xl-6">
                    <h3 class="about-cta-title mb-1">Want Stress-Free Professional Packing?</h3>
                    <p class="about-cta-subtitle mb-0">
                        Speak directly with our Packaging Specialists for doorstep assessment and tailored packing supplies.
                    </p>
                </div>
                <div class="col-12 col-xl-6 text-xl-end">
                    <div class="d-flex align-items-center gap-2 justify-content-center justify-content-xl-end flex-wrap flex-sm-nowrap">
                        <a href="<?= $phonehtml ?>" class="btn-cta-phone flex-fill flex-sm-grow-0 text-nowrap">
                            <i class="bi bi-telephone-fill"></i> <?= $phone ?>
                        </a>
                        <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="btn-cta-whatsapp flex-fill flex-sm-grow-0 text-nowrap">
                            <i class="bi bi-whatsapp"></i> WhatsApp
                        </a>
                        <button type="button" class="btn-cta-quote flex-fill flex-sm-grow-0 text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">
                            <i class="bi bi-send-fill text-danger"></i> Free Quote
                        </button>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>