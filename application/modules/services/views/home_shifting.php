<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Household Goods Shifting Services',
    'bc_desc' => 'Safe, Insured & Hassle-Free Home Relocation by ' . $company3,
    'breadcrumbs' => [
        ['name' => 'Services'],
        ['name' => 'Household Goods Shifting Services']
    ]
]);
?>

<div class="py-4 py-lg-5 bg-light">
    <div class="container">

        <!-- 1. Separated Containers: Main Content (col-12 col-lg-8) & Sidebar (col-12 col-lg-4) -->
        <div class="row g-4 mb-4 align-items-stretch">
            <!-- Left: Main Content Container (col-12 col-lg-8) -->
            <div class="col-12 col-lg-8">
                <div class="hero-content-card p-4 p-md-5 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <!-- Category Tag Badge -->
                        <div class="mb-3">
                            <span class="hero-tag-badge">
                                <i class="bi bi-shield-fill-check text-brand-red"></i>
                                Doorstep Home Relocation Experts
                            </span>
                        </div>

                        <!-- Main Heading -->
                        <h2 class="display-6 fw-bold mb-3 text-navy">
                            Moving Your Home,<br>
                            <span class="text-brand-red">Moving Your Happiness</span>
                        </h2>

                        <!-- Introductory Paragraphs -->
                        <p class="text-contrast lead fs-6 mb-3">
                            At <strong class="text-navy"><?= htmlspecialchars($company3) ?></strong>, we understand that
                            your home is more than just a place &mdash; it's where your memories live. Our home relocation
                            services are designed to make your move simple, safe and stress-free.
                        </p>
                        <p class="text-contrast mb-4">
                            From careful packing to secure transportation and timely delivery, we handle everything with
                            care so you can start your new journey with peace of mind. With over
                            <strong><?= htmlspecialchars($experience) ?> years of experience</strong> and 50,000+ happy
                            families relocated across India, you can count on us for flawless doorstep execution.
                        </p>

                        <!-- Key Feature Micro-Chips Grid -->
                        <div class="row g-2 mb-4">
                            <div class="col-6 col-sm-3">
                                <div class="hero-feature-chip">
                                    <i class="bi bi-shield-check text-success"></i>
                                    <span>100% Insured</span>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3">
                                <div class="hero-feature-chip">
                                    <i class="bi bi-box-seam text-warning"></i>
                                    <span>4-Layer Packing</span>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3">
                                <div class="hero-feature-chip">
                                    <i class="bi bi-geo-alt-fill text-danger"></i>
                                    <span>GPS Tracking</span>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3">
                                <div class="hero-feature-chip">
                                    <i class="bi bi-clock-fill text-primary"></i>
                                    <span>On-Time Move</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Actions & Trust Reassurance -->
                    <div>
                        <div class="d-flex flex-wrap align-items-center gap-3">
                            <a href="<?= $phonehtml ?>" class="btn btn-danger rounded-pill px-4 py-2 fw-bold shadow-sm d-inline-flex align-items-center gap-2">
                                <i class="bi bi-telephone-fill"></i> <?= $phone ?>
                            </a>
                            <button type="button" class="btn btn-outline-dark rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#qteModal">
                                <i class="bi bi-send-fill text-brand-red"></i> Get Free Quote
                            </button>
                        </div>

                        <!-- Micro Trust Badges Row -->
                        <div class="d-flex flex-wrap align-items-center gap-3 mt-3 pt-3 border-top text-contrast small">
                            <span class="d-inline-flex align-items-center gap-1">
                                <i class="bi bi-check-circle-fill text-success small"></i> Free Pre-Move Survey
                            </span>
                            <span class="d-inline-flex align-items-center gap-1">
                                <i class="bi bi-check-circle-fill text-success small"></i> Zero Hidden Charges
                            </span>
                            <span class="d-inline-flex align-items-center gap-1">
                                <i class="bi bi-check-circle-fill text-success small"></i> Pan-India Delivery
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Sidebar Container (col-12 col-lg-4) -->
            <div class="col-12 col-lg-4">
                <?php $this->load->view('services/services_sidebar', ['active_service' => 'household-goods-shifting']); ?>
            </div>
        </div>

        <!-- 2. Four Feature Highlights in a Row (2 in a row on mobile) -->
        <section class="bg-white rounded-4 border shadow-sm p-3 p-md-4 mb-4">
            <div class="row g-2 g-md-4 text-center align-items-stretch">
                <!-- 1. Safe & Secure Packing -->
                <div class="col-6 col-lg-3 feature-grid-item hover-feature">
                    <div class="mb-2">
                        <svg class="feature-badge-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#012652" d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01z"/>
                            <path fill="none" stroke="#ffffff" stroke-width="0.9" stroke-linecap="round" stroke-linejoin="round" d="M8 4.2c1.3 0 2.8-.7 3.2-1 .3 2.5-.2 5.2-3.2 6.8-3-1.6-3.5-4.3-3.2-6.8.4.3 1.9 1 3.2 1z"/>
                            <path fill="none" stroke="#ffffff" stroke-width="0.9" stroke-linecap="round" stroke-linejoin="round" d="M6.5 7.2l1 1 2.2-2.2"/>
                        </svg>
                    </div>
                    <h3 class="fw-bold fs-6 mb-1 text-navy">Safe &amp; Secure Packing</h3>
                    <p class="text-contrast small mb-0">High-quality materials for maximum safety.</p>
                </div>

                <!-- 2. On-Time Delivery -->
                <div class="col-6 col-lg-3 feature-grid-item hover-feature">
                    <div class="mb-2">
                        <svg class="feature-badge-icon" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="24" cy="24" r="21" fill="#EE0416" fill-opacity="0.08"/>
                            <g fill="#EE0416">
                                <path d="M6 16h18a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V17a1 1 0 0 1 1-1z"/>
                                <path d="M26 20h6.5a2 2 0 0 1 1.6.8l3.6 4.8c.2.3.3.7.3 1.1v4.3a1 1 0 0 1-1 1H26V20z"/>
                            </g>
                            <path d="M28 22h4.5l3 4H28v-4z" fill="#ffffff"/>
                            <path d="M5 20h14M5 24h12M5 28h15" stroke="#ffffff" stroke-width="1.2" stroke-linecap="round"/>
                            <circle cx="13" cy="33" r="4.5" fill="#EE0416"/>
                            <circle cx="13" cy="33" r="2" fill="#ffffff"/>
                            <circle cx="33" cy="33" r="4.5" fill="#EE0416"/>
                            <circle cx="33" cy="33" r="2" fill="#ffffff"/>
                        </svg>
                    </div>
                    <h3 class="fw-bold fs-6 mb-1 text-navy">On-Time Delivery</h3>
                    <p class="text-contrast small mb-0">We value your time and ensure timely delivery.</p>
                </div>

                <!-- 3. Experienced Team -->
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
                    <h3 class="fw-bold fs-6 mb-1 text-navy">Experienced Team</h3>
                    <p class="text-contrast small mb-0">Skilled professionals for a smooth move.</p>
                </div>

                <!-- 4. Affordable Pricing -->
                <div class="col-6 col-lg-3 feature-grid-item hover-feature">
                    <div class="mb-2">
                        <svg class="feature-badge-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#EE0416" d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0 2.924-2.924l-.89.01z"/>
                            <text x="8" y="10.8" font-size="7.5" font-family="'Plus Jakarta Sans', Arial, sans-serif" font-weight="bold" fill="#ffffff" text-anchor="middle">₹</text>
                        </svg>
                    </div>
                    <h3 class="fw-bold fs-6 mb-1 text-navy">Affordable Pricing</h3>
                    <p class="text-contrast small mb-0">Best services at competitive rates.</p>
                </div>
            </div>
        </section>

        <!-- 3. Our Home Relocation Process (Matching Mockup) -->
        <section class="process-container-box rounded-4 p-3 p-sm-4 p-md-5 mb-4">
            <div class="text-center mb-4 mb-lg-5">
                <span class="section-badge-title d-inline-block mb-1">
                    <span class="badge-dash"></span>OUR HOME RELOCATION PROCESS
                </span>
                <h2 class="fw-bold text-navy mb-2">
                    A Simple and Hassle-Free <span class="text-brand-red">Moving Process</span>
                </h2>
                <p class="text-contrast small mb-0">
                    We follow a well-planned process to make your home relocation safe, smooth and efficient.
                </p>
            </div>

            <div class="row g-2 g-md-3 g-xl-3 align-items-stretch justify-content-center">
                <!-- Step 1 -->
                <div class="col-6 col-lg">
                    <div class="process-card text-center d-flex flex-column align-items-center justify-content-start h-100">
                        <div class="process-icon-wrapper">
                            <span class="process-step-badge bg-brand-red">01</span>
                            <div class="process-icon-halo process-halo-blue">
                                <i class="bi bi-file-earmark-text text-navy process-icon-inner"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold fs-6 mb-1 text-navy">Get a Free Quote</h3>
                        <p class="text-contrast small mb-0">Share your moving details and get a quick estimate.</p>
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
                                <i class="bi bi-box-seam text-navy process-icon-inner"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold fs-6 mb-1 text-navy">Packing &amp; Labeling</h3>
                        <p class="text-contrast small mb-0">We use high-quality packing materials for safe and secure packing.</p>
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
                                <svg class="process-truck-svg" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="#EE0416">
                                        <path d="M4 11h16a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V12a1 1 0 0 1 1-1z"/>
                                        <path d="M22 15h6.5a2 2 0 0 1 1.6.8l3.6 4.8c.2.3.3.7.3 1.1v4.3a1 1 0 0 1-1 1H22V15z"/>
                                    </g>
                                    <path d="M24 17h4.5l3 4H24v-4z" fill="#ffffff"/>
                                    <circle cx="10" cy="28" r="3.8" fill="#EE0416"/>
                                    <circle cx="10" cy="28" r="1.6" fill="#ffffff"/>
                                    <circle cx="28" cy="28" r="3.8" fill="#EE0416"/>
                                    <circle cx="28" cy="28" r="1.6" fill="#ffffff"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="fw-bold fs-6 mb-1 text-navy">Transportation</h3>
                        <p class="text-contrast small mb-0">Your belongings are transported with care and GPS tracking.</p>
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
                        <h3 class="fw-bold fs-6 mb-1 text-navy">Delivery &amp; Setup</h3>
                        <p class="text-contrast small mb-0">We deliver and help in setting up at your new home.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. What We Relocate (Matching Mockup) -->
        <section class="bg-white rounded-4 p-3 p-sm-4 p-md-5 border shadow-sm mb-4">
            <div class="text-center mb-4 mb-lg-5">
                <span class="section-badge-title d-inline-block mb-1">
                    <span class="badge-dash"></span>WHAT WE RELOCATE
                </span>
                <h2 class="fw-bold text-navy mb-0">
                    We Handle All Types of <span class="text-brand-red">Household Items</span>
                </h2>
            </div>

            <div class="row g-2 g-md-3 g-lg-4">
                <!-- 1. Furniture -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="#012652" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 10V7a3 3 0 0 1 3-3h10a3 3 0 0 1 3 3v3h1a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-.5v2a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-2h-11v2a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-2H3a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h1zm2 0h12V7a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v3zm-2 2a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h.5a.5.5 0 0 0 .5-.5V13a1 1 0 0 0-1-1zm16 0a1 1 0 0 0-1 1v3.5a.5.5 0 0 0 .5.5h.5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                            </svg>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Furniture</h3>
                            <small class="text-contrast fw-semibold">(Bed, Sofa, Tables, etc.)</small>
                        </div>
                    </div>
                </div>

                <!-- 2. Home Appliances -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="#012652" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="2" width="9" height="20" rx="1.5"/>
                                <line x1="2" y1="9" x2="11" y2="9" stroke="#ffffff" stroke-width="0.9"/>
                                <line x1="9" y1="5" x2="9" y2="7.5" stroke="#ffffff" stroke-width="0.9" stroke-linecap="round"/>
                                <line x1="9" y1="11" x2="9" y2="15" stroke="#ffffff" stroke-width="0.9" stroke-linecap="round"/>
                                <rect x="13" y="4" width="9" height="18" rx="1.5"/>
                                <circle cx="17.5" cy="13" r="3.2" fill="#ffffff"/>
                                <circle cx="17.5" cy="13" r="2.2" fill="#012652"/>
                                <line x1="14.5" y1="7" x2="16.5" y2="7" stroke="#ffffff" stroke-width="0.9" stroke-linecap="round"/>
                                <circle cx="19.5" cy="7" r="0.8" fill="#ffffff"/>
                            </svg>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Home Appliances</h3>
                            <small class="text-contrast fw-semibold">(Fridge, Washing Machine, AC)</small>
                        </div>
                    </div>
                </div>

                <!-- 3. Fragile Items -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="#012652" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 3h12a1 1 0 0 1 1 1v4a7 7 0 0 1-6 6.93V19h3a1 1 0 0 1 0 2H8a1 1 0 0 1 0-2h3v-4.07A7 7 0 0 1 5 8V4a1 1 0 0 1 1-1z"/>
                            </svg>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Fragile Items</h3>
                            <small class="text-contrast fw-semibold">(Glass, Crockery, Decor)</small>
                        </div>
                    </div>
                </div>

                <!-- 4. Kitchen Items -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="#012652" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10.5" y="3" width="3" height="2" rx="0.8"/>
                                <path d="M4 8c0-1.8 3.5-3 8-3s8 1.2 8 3H4z"/>
                                <path d="M4 9h16v6a5 5 0 0 1-5 5H9a5 5 0 0 1-5-5V9z"/>
                                <path d="M2.5 10.5a1.5 1.5 0 0 1 1.5-1.5H4v3h-.5a1.5 1.5 0 0 1-1.5-1.5zM20 9h.5a1.5 1.5 0 0 1 1.5 1.5 1.5 1.5 0 0 1-1.5 1.5H20V9z"/>
                            </svg>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Kitchen Items</h3>
                            <small class="text-contrast fw-semibold">(Utensils, Containers, etc.)</small>
                        </div>
                    </div>
                </div>

                <!-- 5. Electronics -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="#012652" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="3" width="20" height="13" rx="1.5"/>
                                <rect x="4" y="5" width="16" height="9" fill="#ffffff" opacity="0.15"/>
                                <path d="M10 16h4v3h-4z"/>
                                <path d="M7 20h10a1 1 0 0 1 0 2H7a1 1 0 0 1 0-2z"/>
                            </svg>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Electronics</h3>
                            <small class="text-contrast fw-semibold">(TV, Computer, etc.)</small>
                        </div>
                    </div>
                </div>

                <!-- 6. Personal Belongings -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="#012652" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L3 6.5l9 4.5 9-4.5L12 2z"/>
                                <path d="M3 8.2v8.6l8 4.2v-8.4L3 8.2z"/>
                                <path d="M13 12.6v8.4l8-4.2V8.2l-8 4.4z"/>
                            </svg>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Personal Belongings</h3>
                            <small class="text-contrast fw-semibold">(Clothes, Books, etc.)</small>
                        </div>
                    </div>
                </div>

                <!-- 7. Artwork & Antiques -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="#012652" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="3" width="20" height="18" rx="2.5"/>
                                <circle cx="8" cy="8.5" r="2" fill="#ffffff"/>
                                <path d="M4 17l5-5 4 4 3-3 4 4v1.5a1.5 1.5 0 0 1-1.5 1.5h-13a1.5 1.5 0 0 1-1.5-1.5V17z" fill="#ffffff"/>
                            </svg>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Artwork &amp; Antiques</h3>
                            <small class="text-contrast fw-semibold">(Paints, Showpieces)</small>
                        </div>
                    </div>
                </div>

                <!-- 8. Plants & More -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="#012652" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 14h12l-1.5 7.5a1 1 0 0 1-1 .8h-7a1 1 0 0 1-1-.8L6 14z"/>
                                <rect x="5" y="12.5" width="14" height="2" rx="0.5"/>
                                <path d="M12 12c0-5-3-8-3-8s4 2 4 8z"/>
                                <path d="M12 12c0-5 3-8 3-8s-4 2-4 8z"/>
                                <path d="M12 12c0-4.5 0-7.5 0-7.5s-2 3.5 0 7.5z"/>
                                <path d="M7.5 8c2.5 0 4 2.5 4 4-2.5 0-4-2.5-4-4z"/>
                                <path d="M16.5 8c-2.5 0-4 2.5-4 4 2.5 0 4-2.5 4-4z"/>
                            </svg>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Plants &amp; More</h3>
                            <small class="text-contrast fw-semibold">(Indoor &amp; Outdoor)</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. Direct Concierge CTA Banner (Single Row Buttons) -->
        <section class="about-cta-banner my-3">
            <div class="row align-items-center g-3">
                <div class="col-12 col-xl-6">
                    <h3 class="about-cta-title mb-1">Planning Your Home Move? Get a Free Quote!</h3>
                    <p class="about-cta-subtitle mb-0">
                        Speak directly with our Senior Move Coordinator for instant planning &amp; fixed-price estimates.
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