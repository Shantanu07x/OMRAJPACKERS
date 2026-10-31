<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Loading and Unloading Services',
    'bc_desc' => 'Safe & Mechanized Heavy-Lifting Execution by ' . $company3,
    'breadcrumbs' => [
        ['name' => 'Services'],
        ['name' => 'Loading and Unloading Services']
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
                                <i class="bi bi-box-arrow-in-down text-brand-red"></i>
                                Skilled Handling &amp; Stacking Crew
                            </span>
                        </div>

                        <!-- Main Heading -->
                        <h2 class="display-6 fw-bold mb-3 text-navy">
                            Safe, Systematic &amp; Mechanized<br>
                            <span class="text-brand-red">Loading &amp; Unloading</span>
                        </h2>

                        <!-- Introductory Paragraphs -->
                        <p class="text-contrast lead fs-6 mb-3">
                            Loading and unloading require strength, precision, and the right handling gear. At <strong class="text-navy"><?= htmlspecialchars($company3) ?></strong>, our trained loading crew utilizes modern mechanical equipment to prevent any risk of drops, dents, or transit movement.
                        </p>
                        <p class="text-contrast mb-4">
                            We use hydraulic lifters, hand trolleys, moving dollies, and reinforced nylon straps to load heavy furniture, appliances, and commercial machinery safely. Our scientific truck stacking ensures balanced weight distribution, while careful doorstep offloading places every box directly in your designated rooms.
                        </p>

                        <!-- Key Feature Micro-Chips Grid -->
                        <div class="row g-2 mb-4">
                            <div class="col-6 col-sm-3">
                                <div class="hero-feature-chip">
                                    <i class="bi bi-gear-fill text-danger"></i>
                                    <span>Hydraulic Trolleys</span>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3">
                                <div class="hero-feature-chip">
                                    <i class="bi bi-shield-check text-primary"></i>
                                    <span>Zero-Drop Policy</span>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3">
                                <div class="hero-feature-chip">
                                    <i class="bi bi-person-check-fill text-info"></i>
                                    <span>Trained Crew</span>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3">
                                <div class="hero-feature-chip">
                                    <i class="bi bi-house-door-fill text-success"></i>
                                    <span>Room Placement</span>
                                </div>
                            </div>
                        </div>

                        <!-- Direct CTA Buttons -->
                        <div class="d-flex flex-wrap gap-2 gap-sm-3 mb-3">
                            <a href="<?= $phonehtml ?>" class="btn-cta-phone">
                                <i class="bi bi-telephone-fill"></i> Call <?= $phone ?>
                            </a>
                            <button type="button" class="btn-cta-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
                                <i class="bi bi-send-fill text-danger"></i> Request Loading Crew
                            </button>
                            <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="btn-cta-whatsapp">
                                <i class="bi bi-whatsapp"></i> WhatsApp Inquiry
                            </a>
                        </div>
                    </div>

                    <!-- Bottom Reassurance Row -->
                    <div class="pt-3 border-top d-flex flex-wrap align-items-center justify-content-between gap-2 text-contrast small">
                        <span class="d-inline-flex align-items-center gap-1">
                            <i class="bi bi-check-circle-fill text-success small"></i> Proper Weight Balancing
                        </span>
                        <span class="d-inline-flex align-items-center gap-1">
                            <i class="bi bi-check-circle-fill text-success small"></i> Wall &amp; Floor Protection
                        </span>
                        <span class="d-inline-flex align-items-center gap-1">
                            <i class="bi bi-check-circle-fill text-success small"></i> All Floors Supported (With/Without Lift)
                        </span>
                    </div>
                </div>
            </div>

            <!-- Right: Services Sidebar -->
            <div class="col-12 col-lg-4">
                <?php $this->load->view('services/services_sidebar', ['active_service' => 'loading-and-unloading-services']); ?>
            </div>
        </div>

        <!-- 2. Four Feature Highlights in a Row (2 in a row on mobile) -->
        <section class="bg-white rounded-4 border shadow-sm p-3 p-md-4 mb-4">
            <div class="row g-2 g-md-4 text-center align-items-stretch">
                <!-- 1. Modern Equipment -->
                <div class="col-6 col-lg-3 feature-grid-item hover-feature">
                    <div class="mb-2">
                        <svg class="feature-badge-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#012652" d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01z"/>
                            <path fill="none" stroke="#ffffff" stroke-width="0.9" stroke-linecap="round" stroke-linejoin="round" d="M8 4.2c1.3 0 2.8-.7 3.2-1 .3 2.5-.2 5.2-3.2 6.8-3-1.6-3.5-4.3-3.2-6.8.4.3 1.9 1 3.2 1z"/>
                            <path fill="none" stroke="#ffffff" stroke-width="0.9" stroke-linecap="round" stroke-linejoin="round" d="M6.5 7.2l1 1 2.2-2.2"/>
                        </svg>
                    </div>
                    <h3 class="fw-bold fs-6 mb-1 text-navy">Modern Lifting Gear</h3>
                    <p class="text-contrast small mb-0">Ramps, pulleys, straps &amp; dollies for heavy goods.</p>
                </div>

                <!-- 2. Scientific Weight Balancing -->
                <div class="col-6 col-lg-3 feature-grid-item hover-feature">
                    <div class="mb-2">
                        <svg class="feature-badge-icon" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="24" cy="24" r="21" fill="#EE0416" fill-opacity="0.08"/>
                            <g fill="#EE0416">
                                <path d="M6 16h18a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V17a1 1 0 0 1 1-1z"/>
                                <path d="M26 20h6.5a2 2 0 0 1 1.6.8l3.6 4.8c.2.3.3.7.3 1.1v4.3a1 1 0 0 1-1 1H26V20z"/>
                            </g>
                        </svg>
                    </div>
                    <h3 class="fw-bold fs-6 mb-1 text-navy">Proper Stacking</h3>
                    <p class="text-contrast small mb-0">Heavy items on floor, delicate items securely lashed.</p>
                </div>

                <!-- 3. Physical Protection -->
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
                    <h3 class="fw-bold fs-6 mb-1 text-navy">Door &amp; Floor Care</h3>
                    <p class="text-contrast small mb-0">Protective padding avoids scratches on doors &amp; floors.</p>
                </div>

                <!-- 4. Punctual Delivery -->
                <div class="col-6 col-lg-3 feature-grid-item hover-feature">
                    <div class="mb-2">
                        <svg class="feature-badge-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#EE0416" d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01z"/>
                            <text x="8" y="10.8" font-size="7.5" font-family="'Plus Jakarta Sans', Arial, sans-serif" font-weight="bold" fill="#ffffff" text-anchor="middle">₹</text>
                        </svg>
                    </div>
                    <h3 class="fw-bold fs-6 mb-1 text-navy">Transparent Rates</h3>
                    <p class="text-contrast small mb-0">Clear labor estimates with zero hidden handling costs.</p>
                </div>
            </div>
        </section>

        <!-- 3. Our Loading & Unloading Process (2 in a row on mobile) -->
        <section class="process-container-box rounded-4 p-3 p-sm-4 p-md-5 mb-4">
            <div class="text-center mb-4 mb-lg-5">
                <span class="section-badge-title d-inline-block mb-1">
                    <span class="badge-dash"></span>OUR HANDLING PROCESS
                </span>
                <h2 class="fw-bold text-navy mb-2">
                    Methodical Loading &amp; <span class="text-brand-red">Unloading Process</span>
                </h2>
                <p class="text-contrast small mb-0">
                    A disciplined handling workflow designed to guarantee 100% damage-free transfer.
                </p>
            </div>

            <div class="row g-2 g-md-3 g-xl-3 align-items-stretch justify-content-center">
                <!-- Step 1 -->
                <div class="col-6 col-lg">
                    <div class="process-card text-center d-flex flex-column align-items-center justify-content-start h-100">
                        <div class="process-icon-wrapper">
                            <span class="process-step-badge bg-brand-red">01</span>
                            <div class="process-icon-halo process-halo-blue">
                                <i class="bi bi-list-check text-navy process-icon-inner"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold fs-6 mb-1 text-navy">Pre-Load Inspection</h3>
                        <p class="text-contrast small mb-0">Audit of packed items &amp; vehicle space planning.</p>
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
                                <i class="bi bi-box-arrow-up text-navy process-icon-inner"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold fs-6 mb-1 text-navy">Systematic Loading</h3>
                        <p class="text-contrast small mb-0">Heavy items base-stacked, fragile goods strapped.</p>
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
                                <i class="bi bi-lock-fill text-brand-red process-icon-inner"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold fs-6 mb-1 text-navy">Transit Lashing</h3>
                        <p class="text-contrast small mb-0">Tight belt binding prevents sliding during transit.</p>
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
                                <i class="bi bi-box-arrow-in-down text-navy process-icon-inner"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold fs-6 mb-1 text-navy">Room Offloading</h3>
                        <p class="text-contrast small mb-0">Doorstep unloading directly into designated rooms.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. Items Handled (2 in a row on mobile) -->
        <section class="bg-white rounded-4 p-3 p-sm-4 p-md-5 border shadow-sm mb-4">
            <div class="text-center mb-4 mb-lg-5">
                <span class="section-badge-title d-inline-block mb-1">
                    <span class="badge-dash"></span>HEAVY &amp; BULKY ITEMS WE HANDLE
                </span>
                <h2 class="fw-bold text-navy mb-0">
                    Precision Handling For <span class="text-brand-red">All Heavy Goods</span>
                </h2>
            </div>

            <div class="row g-2 g-md-3 g-lg-4">
                <!-- 1. Heavy Wooden Furniture -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-door-closed text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Almirahs &amp; Beds</h3>
                            <small class="text-contrast fw-semibold">(Solid wood, hydraulic storage)</small>
                        </div>
                    </div>
                </div>

                <!-- 2. Home Appliances -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-snow text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Double-Door Fridges</h3>
                            <small class="text-contrast fw-semibold">(Trolley moving with upright care)</small>
                        </div>
                    </div>
                </div>

                <!-- 3. Washing Machines -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-washing-machine text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Washing Machines</h3>
                            <small class="text-contrast fw-semibold">(Drum locks, careful lifting)</small>
                        </div>
                    </div>
                </div>

                <!-- 4. Pianos & Heavy Instruments -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-music-note-beamed text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Pianos &amp; Safes</h3>
                            <small class="text-contrast fw-semibold">(Specialized heavy dollies)</small>
                        </div>
                    </div>
                </div>

                <!-- 5. Commercial Machinery -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-gear text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Industrial Machinery</h3>
                            <small class="text-contrast fw-semibold">(Factory &amp; lab equipment)</small>
                        </div>
                    </div>
                </div>

                <!-- 6. Marble & Granite Tables -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-gem text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Marble Table tops</h3>
                            <small class="text-contrast fw-semibold">(Vertical carry with belt support)</small>
                        </div>
                    </div>
                </div>

                <!-- 7. Fitness & Gym Equipment -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-activity text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Gym &amp; Treadmills</h3>
                            <small class="text-contrast fw-semibold">(Disassembly &amp; reassembly)</small>
                        </div>
                    </div>
                </div>

                <!-- 8. Commercial Printers -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-printer text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Photocopiers</h3>
                            <small class="text-contrast fw-semibold">(Commercial printing units)</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. Direct Concierge CTA Banner -->
        <section class="about-cta-banner my-3">
            <div class="row align-items-center g-3">
                <div class="col-12 col-xl-6">
                    <h3 class="about-cta-title mb-1">Need Skilled Loading and Unloading Labor?</h3>
                    <p class="about-cta-subtitle mb-0">
                        Hire our trained manpower and mechanical equipment for safe, damage-free shifting.
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