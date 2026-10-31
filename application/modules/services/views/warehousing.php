<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Warehousing and Storage Solutions',
    'bc_desc' => 'Safe, Secure & Climate-Controlled Storage Facilities by ' . $company3,
    'breadcrumbs' => [
        ['name' => 'Services'],
        ['name' => 'Warehousing & Storage']
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
                                <i class="bi bi-building-fill-lock text-brand-red"></i>
                                Secure Storage &amp; Warehousing
                            </span>
                        </div>

                        <!-- Main Heading -->
                        <h2 class="display-6 fw-bold mb-3 text-navy">
                            Safe, Flexible &amp; Secure<br>
                            <span class="text-brand-red">Warehousing Solutions</span>
                        </h2>

                        <!-- Introductory Paragraphs -->
                        <p class="text-contrast lead fs-6 mb-3">
                            Need temporary or long-term storage for your household furniture or commercial goods? <strong class="text-navy"><?= htmlspecialchars($company3) ?></strong> provides modern, pest-controlled, and 24/7 CCTV-monitored warehousing spaces across India.
                        </p>
                        <p class="text-contrast mb-4">
                            Whether you are renovating your home, relocating abroad, transitioning between leases, or managing seasonal business inventory, our secure warehousing facilities guarantee complete safety, fire protection, and barcode-tracked inventory control.
                        </p>

                        <!-- Key Feature Micro-Chips Grid -->
                        <div class="row g-2 mb-4">
                            <div class="col-6 col-sm-3">
                                <div class="hero-feature-chip">
                                    <i class="bi bi-camera-video-fill text-danger"></i>
                                    <span>24/7 CCTV</span>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3">
                                <div class="hero-feature-chip">
                                    <i class="bi bi-shield-lock-fill text-primary"></i>
                                    <span>Pest Controlled</span>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3">
                                <div class="hero-feature-chip">
                                    <i class="bi bi-upc-scan text-info"></i>
                                    <span>Barcode Tracked</span>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3">
                                <div class="hero-feature-chip">
                                    <i class="bi bi-calendar2-check-fill text-success"></i>
                                    <span>Flexible Plans</span>
                                </div>
                            </div>
                        </div>

                        <!-- Direct CTA Buttons -->
                        <div class="d-flex flex-wrap gap-2 gap-sm-3 mb-3">
                            <a href="<?= $phonehtml ?>" class="btn-cta-phone">
                                <i class="bi bi-telephone-fill"></i> Call <?= $phone ?>
                            </a>
                            <button type="button" class="btn-cta-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
                                <i class="bi bi-send-fill text-danger"></i> Book Storage Space
                            </button>
                            <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="btn-cta-whatsapp">
                                <i class="bi bi-whatsapp"></i> WhatsApp Inquiry
                            </a>
                        </div>
                    </div>

                    <!-- Bottom Reassurance Row -->
                    <div class="pt-3 border-top d-flex flex-wrap align-items-center justify-content-between gap-2 text-contrast small">
                        <span class="d-inline-flex align-items-center gap-1">
                            <i class="bi bi-check-circle-fill text-success small"></i> Short &amp; Long Term
                        </span>
                        <span class="d-inline-flex align-items-center gap-1">
                            <i class="bi bi-check-circle-fill text-success small"></i> Fire Protection
                        </span>
                        <span class="d-inline-flex align-items-center gap-1">
                            <i class="bi bi-check-circle-fill text-success small"></i> Doorstep Pickup &amp; Delivery
                        </span>
                    </div>
                </div>
            </div>

            <!-- Right: Services Sidebar -->
            <div class="col-12 col-lg-4">
                <?php $this->load->view('services/services_sidebar', ['active_service' => 'warehousing-and-storage-solutions']); ?>
            </div>
        </div>

        <!-- 2. Four Feature Highlights in a Row (2 in a row on mobile) -->
        <section class="bg-white rounded-4 border shadow-sm p-3 p-md-4 mb-4">
            <div class="row g-2 g-md-4 text-center align-items-stretch">
                <!-- 1. 24x7 Security & CCTV -->
                <div class="col-6 col-lg-3 feature-grid-item hover-feature">
                    <div class="mb-2">
                        <svg class="feature-badge-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#012652" d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01z"/>
                            <path fill="none" stroke="#ffffff" stroke-width="0.9" stroke-linecap="round" stroke-linejoin="round" d="M8 4.2c1.3 0 2.8-.7 3.2-1 .3 2.5-.2 5.2-3.2 6.8-3-1.6-3.5-4.3-3.2-6.8.4.3 1.9 1 3.2 1z"/>
                            <path fill="none" stroke="#ffffff" stroke-width="0.9" stroke-linecap="round" stroke-linejoin="round" d="M6.5 7.2l1 1 2.2-2.2"/>
                        </svg>
                    </div>
                    <h3 class="fw-bold fs-6 mb-1 text-navy">24x7 Surveillance</h3>
                    <p class="text-contrast small mb-0">Round-the-clock security guards &amp; CCTV coverage.</p>
                </div>

                <!-- 2. Climate & Moisture Controlled -->
                <div class="col-6 col-lg-3 feature-grid-item hover-feature">
                    <div class="mb-2">
                        <svg class="feature-badge-icon" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="24" cy="24" r="21" fill="#EE0416" fill-opacity="0.08"/>
                            <g fill="#EE0416">
                                <path d="M24 8a6 6 0 0 0-6 6v11.2a10 10 0 1 0 12 0V14a6 6 0 0 0-6-6zm0 28a5 5 0 1 1 0-10 5 5 0 0 1 0 10z"/>
                            </g>
                        </svg>
                    </div>
                    <h3 class="fw-bold fs-6 mb-1 text-navy">Moisture Free</h3>
                    <p class="text-contrast small mb-0">Clean, dry, and regular pest-control treatments.</p>
                </div>

                <!-- 3. Barcode Inventory -->
                <div class="col-6 col-lg-3 feature-grid-item hover-feature">
                    <div class="mb-2">
                        <svg class="feature-badge-icon" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="24" cy="24" r="21" fill="#EE0416" fill-opacity="0.08"/>
                            <g fill="#EE0416">
                                <path d="M12 14h4v20h-4zm6 0h2v20h-2zm4 0h6v20h-6zm8 0h2v20h-2zm4 0h4v20h-4z"/>
                            </g>
                        </svg>
                    </div>
                    <h3 class="fw-bold fs-6 mb-1 text-navy">Itemized Tracking</h3>
                    <p class="text-contrast small mb-0">Every box is tagged and logged for easy retrieval.</p>
                </div>

                <!-- 4. Flexible Rental Pricing -->
                <div class="col-6 col-lg-3 feature-grid-item hover-feature">
                    <div class="mb-2">
                        <svg class="feature-badge-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#EE0416" d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01z"/>
                            <text x="8" y="10.8" font-size="7.5" font-family="'Plus Jakarta Sans', Arial, sans-serif" font-weight="bold" fill="#ffffff" text-anchor="middle">₹</text>
                        </svg>
                    </div>
                    <h3 class="fw-bold fs-6 mb-1 text-navy">Affordable Rates</h3>
                    <p class="text-contrast small mb-0">Pay only for the space &amp; duration you need.</p>
                </div>
            </div>
        </section>

        <!-- 3. Our Storage Process (2 in a row on mobile) -->
        <section class="process-container-box rounded-4 p-3 p-sm-4 p-md-5 mb-4">
            <div class="text-center mb-4 mb-lg-5">
                <span class="section-badge-title d-inline-block mb-1">
                    <span class="badge-dash"></span>OUR WAREHOUSING PROCESS
                </span>
                <h2 class="fw-bold text-navy mb-2">
                    How Our Storage <span class="text-brand-red">Service Works</span>
                </h2>
                <p class="text-contrast small mb-0">
                    From doorstep pickup to protected storage and final delivery, we manage every step seamlessly.
                </p>
            </div>

            <div class="row g-2 g-md-3 g-xl-3 align-items-stretch justify-content-center">
                <!-- Step 1 -->
                <div class="col-6 col-lg">
                    <div class="process-card text-center d-flex flex-column align-items-center justify-content-start h-100">
                        <div class="process-icon-wrapper">
                            <span class="process-step-badge bg-brand-red">01</span>
                            <div class="process-icon-halo process-halo-blue">
                                <i class="bi bi-box-seam text-navy process-icon-inner"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold fs-6 mb-1 text-navy">Doorstep Packing</h3>
                        <p class="text-contrast small mb-0">We pack and inventory every item at your doorstep.</p>
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
                                <i class="bi bi-truck text-navy process-icon-inner"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold fs-6 mb-1 text-navy">Safe Transport</h3>
                        <p class="text-contrast small mb-0">Goods are moved in covered containers to warehouse.</p>
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
                                <i class="bi bi-building-lock text-brand-red process-icon-inner"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold fs-6 mb-1 text-navy">Palletized Storage</h3>
                        <p class="text-contrast small mb-0">Goods stored on elevated pallets with 24x7 security.</p>
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
                                <i class="bi bi-house-door-fill text-navy process-icon-inner"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold fs-6 mb-1 text-navy">On-Demand Delivery</h3>
                        <p class="text-contrast small mb-0">We deliver your items right to your new address.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. Storage Categories (2 in a row on mobile) -->
        <section class="bg-white rounded-4 p-3 p-sm-4 p-md-5 border shadow-sm mb-4">
            <div class="text-center mb-4 mb-lg-5">
                <span class="section-badge-title d-inline-block mb-1">
                    <span class="badge-dash"></span>WHAT YOU CAN STORE
                </span>
                <h2 class="fw-bold text-navy mb-0">
                    Comprehensive Storage For <span class="text-brand-red">Homes &amp; Businesses</span>
                </h2>
            </div>

            <div class="row g-2 g-md-3 g-lg-4">
                <!-- 1. Household Furniture -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-lamp text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Home Furniture</h3>
                            <small class="text-contrast fw-semibold">(Sofa, Beds, Dining Sets)</small>
                        </div>
                    </div>
                </div>

                <!-- 2. Home Appliances -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-tv text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Appliances</h3>
                            <small class="text-contrast fw-semibold">(Fridge, AC, Washing Machine)</small>
                        </div>
                    </div>
                </div>

                <!-- 3. Commercial Stock -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-boxes text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Business Inventory</h3>
                            <small class="text-contrast fw-semibold">(Retail Goods, Stock, Parts)</small>
                        </div>
                    </div>
                </div>

                <!-- 4. Office Equipment -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-display text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Office Equipment</h3>
                            <small class="text-contrast fw-semibold">(Desks, Chairs, IT Hardware)</small>
                        </div>
                    </div>
                </div>

                <!-- 5. Confidential Records -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-archive text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Document Archiving</h3>
                            <small class="text-contrast fw-semibold">(Legal Files, Accounts, Records)</small>
                        </div>
                    </div>
                </div>

                <!-- 6. Seasonal Goods -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-calendar-event text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Seasonal Items</h3>
                            <small class="text-contrast fw-semibold">(Festival Decor, Winter Wear)</small>
                        </div>
                    </div>
                </div>

                <!-- 7. Renovation Storage -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-tools text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Renovation Moves</h3>
                            <small class="text-contrast fw-semibold">(Safe Keeping During Remodels)</small>
                        </div>
                    </div>
                </div>

                <!-- 8. Vehicles -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-car-front text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Long-Term Vehicle</h3>
                            <small class="text-contrast fw-semibold">(Protected Covered Parking)</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. Direct Concierge CTA Banner -->
        <section class="about-cta-banner my-3">
            <div class="row align-items-center g-3">
                <div class="col-12 col-xl-6">
                    <h3 class="about-cta-title mb-1">Need Safe Storage Space for Your Goods?</h3>
                    <p class="about-cta-subtitle mb-0">
                        Speak directly with our Storage Manager for instant availability, pricing &amp; doorstep pickup.
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
