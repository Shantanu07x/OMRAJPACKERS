<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Office and Corporate Shifting',
    'bc_desc' => 'Zero-Downtime Commercial & Corporate Relocation Services by ' . $company3,
    'breadcrumbs' => [
        ['name' => 'Services'],
        ['name' => 'Office and Corporate Shifting']
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
                                <i class="bi bi-buildings-fill text-brand-red"></i>
                                Corporate Relocation Specialists
                            </span>
                        </div>

                        <!-- Main Heading -->
                        <h2 class="display-6 fw-bold mb-3 text-navy">
                            Smooth, Organized &amp; Fast<br>
                            <span class="text-brand-red">Office Relocation Services</span>
                        </h2>

                        <!-- Introductory Paragraphs -->
                        <p class="text-contrast lead fs-6 mb-3">
                            Relocating an office requires meticulous planning, precision handling, and zero business interruption. At <strong class="text-navy"><?= htmlspecialchars($company3) ?></strong>, we specialize in seamless commercial transitions for startups, corporate offices, and multi-story business centers.
                        </p>
                        <p class="text-contrast mb-4">
                            From secure IT server de-installation and anti-static packaging to modular workstation disassembly, confidential document transfer, and weekend/night execution, our trained team ensures your office is fully operational on schedule.
                        </p>

                        <!-- Key Feature Micro-Chips Grid -->
                        <div class="row g-2 mb-4">
                            <div class="col-6 col-sm-3">
                                <div class="hero-feature-chip">
                                    <i class="bi bi-clock-history text-danger"></i>
                                    <span>Zero Downtime</span>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3">
                                <div class="hero-feature-chip">
                                    <i class="bi bi-hdd-network-fill text-primary"></i>
                                    <span>IT Server Care</span>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3">
                                <div class="hero-feature-chip">
                                    <i class="bi bi-tools text-info"></i>
                                    <span>Desk Assembly</span>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3">
                                <div class="hero-feature-chip">
                                    <i class="bi bi-shield-lock-fill text-success"></i>
                                    <span>Record Security</span>
                                </div>
                            </div>
                        </div>

                        <!-- Direct CTA Buttons -->
                        <div class="d-flex flex-wrap gap-2 gap-sm-3 mb-3">
                            <a href="<?= $phonehtml ?>" class="btn-cta-phone">
                                <i class="bi bi-telephone-fill"></i> Call <?= $phone ?>
                            </a>
                            <button type="button" class="btn-cta-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
                                <i class="bi bi-send-fill text-danger"></i> Request Corporate Quote
                            </button>
                            <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="btn-cta-whatsapp">
                                <i class="bi bi-whatsapp"></i> WhatsApp Inquiry
                            </a>
                        </div>
                    </div>

                    <!-- Bottom Reassurance Row -->
                    <div class="pt-3 border-top d-flex flex-wrap align-items-center justify-content-between gap-2 text-contrast small">
                        <span class="d-inline-flex align-items-center gap-1">
                            <i class="bi bi-check-circle-fill text-success small"></i> Dedicated Project Manager
                        </span>
                        <span class="d-inline-flex align-items-center gap-1">
                            <i class="bi bi-check-circle-fill text-success small"></i> Weekend &amp; After-Hours Shifting
                        </span>
                        <span class="d-inline-flex align-items-center gap-1">
                            <i class="bi bi-check-circle-fill text-success small"></i> Pan-India Transit Insurance
                        </span>
                    </div>
                </div>
            </div>

            <!-- Right: Services Sidebar -->
            <div class="col-12 col-lg-4">
                <?php $this->load->view('services/services_sidebar', ['active_service' => 'office-and-corporate-shifting']); ?>
            </div>
        </div>

        <!-- 2. Four Feature Highlights in a Row (2 in a row on mobile) -->
        <section class="bg-white rounded-4 border shadow-sm p-3 p-md-4 mb-4">
            <div class="row g-2 g-md-4 text-center align-items-stretch">
                <!-- 1. Zero Business Disruption -->
                <div class="col-6 col-lg-3 feature-grid-item hover-feature">
                    <div class="mb-2">
                        <svg class="feature-badge-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#012652" d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01z"/>
                            <path fill="none" stroke="#ffffff" stroke-width="0.9" stroke-linecap="round" stroke-linejoin="round" d="M8 4.2c1.3 0 2.8-.7 3.2-1 .3 2.5-.2 5.2-3.2 6.8-3-1.6-3.5-4.3-3.2-6.8.4.3 1.9 1 3.2 1z"/>
                            <path fill="none" stroke="#ffffff" stroke-width="0.9" stroke-linecap="round" stroke-linejoin="round" d="M6.5 7.2l1 1 2.2-2.2"/>
                        </svg>
                    </div>
                    <h3 class="fw-bold fs-6 mb-1 text-navy">Zero Downtime</h3>
                    <p class="text-contrast small mb-0">Weekend &amp; overnight moves to safeguard work hours.</p>
                </div>

                <!-- 2. Specialized IT & Hardware -->
                <div class="col-6 col-lg-3 feature-grid-item hover-feature">
                    <div class="mb-2">
                        <svg class="feature-badge-icon" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="24" cy="24" r="21" fill="#EE0416" fill-opacity="0.08"/>
                            <g fill="#EE0416">
                                <rect x="8" y="12" width="32" height="18" rx="2"/>
                                <path d="M18 30h12v4H18zM14 34h20v2H14z"/>
                            </g>
                        </svg>
                    </div>
                    <h3 class="fw-bold fs-6 mb-1 text-navy">IT Server Packing</h3>
                    <p class="text-contrast small mb-0">Anti-static wrap &amp; shock-proof container handling.</p>
                </div>

                <!-- 3. Modular Workstation Team -->
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
                    <h3 class="fw-bold fs-6 mb-1 text-navy">Expert Carpentry</h3>
                    <p class="text-contrast small mb-0">Modular desks, cubicles &amp; conference table reassembly.</p>
                </div>

                <!-- 4. Confidential Document Safety -->
                <div class="col-6 col-lg-3 feature-grid-item hover-feature">
                    <div class="mb-2">
                        <svg class="feature-badge-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#EE0416" d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01z"/>
                            <text x="8" y="10.8" font-size="7.5" font-family="'Plus Jakarta Sans', Arial, sans-serif" font-weight="bold" fill="#ffffff" text-anchor="middle">₹</text>
                        </svg>
                    </div>
                    <h3 class="fw-bold fs-6 mb-1 text-navy">Fixed B2B Pricing</h3>
                    <p class="text-contrast small mb-0">Transparent corporate quotes with GST invoice claims.</p>
                </div>
            </div>
        </section>

        <!-- 3. Our Corporate Relocation Process (2 in a row on mobile) -->
        <section class="process-container-box rounded-4 p-3 p-sm-4 p-md-5 mb-4">
            <div class="text-center mb-4 mb-lg-5">
                <span class="section-badge-title d-inline-block mb-1">
                    <span class="badge-dash"></span>OUR CORPORATE PROCESS
                </span>
                <h2 class="fw-bold text-navy mb-2">
                    Structured Office <span class="text-brand-red">Relocation Workflow</span>
                </h2>
                <p class="text-contrast small mb-0">
                    A systematically staged plan to ensure timely handover and immediate operational readiness.
                </p>
            </div>

            <div class="row g-2 g-md-3 g-xl-3 align-items-stretch justify-content-center">
                <!-- Step 1 -->
                <div class="col-6 col-lg">
                    <div class="process-card text-center d-flex flex-column align-items-center justify-content-start h-100">
                        <div class="process-icon-wrapper">
                            <span class="process-step-badge bg-brand-red">01</span>
                            <div class="process-icon-halo process-halo-blue">
                                <i class="bi bi-clipboard2-check text-navy process-icon-inner"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold fs-6 mb-1 text-navy">Floor Plan Survey</h3>
                        <p class="text-contrast small mb-0">Site audit, floor mapping &amp; custom moving blueprint.</p>
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
                                <i class="bi bi-tags text-navy process-icon-inner"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold fs-6 mb-1 text-navy">Tagging &amp; Packing</h3>
                        <p class="text-contrast small mb-0">Color-coded department tagging and anti-static wrapping.</p>
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
                                <i class="bi bi-truck text-brand-red process-icon-inner"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold fs-6 mb-1 text-navy">Secure Transit</h3>
                        <p class="text-contrast small mb-0">Covered container trucks with real-time GPS fleet tracking.</p>
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
                                <i class="bi bi-building-check text-navy process-icon-inner"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold fs-6 mb-1 text-navy">Desk &amp; IT Setup</h3>
                        <p class="text-contrast small mb-0">Assembly according to new floor plan for instant working.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. What We Relocate in Offices (2 in a row on mobile) -->
        <section class="bg-white rounded-4 p-3 p-sm-4 p-md-5 border shadow-sm mb-4">
            <div class="text-center mb-4 mb-lg-5">
                <span class="section-badge-title d-inline-block mb-1">
                    <span class="badge-dash"></span>CORPORATE ASSETS WE MOVE
                </span>
                <h2 class="fw-bold text-navy mb-0">
                    We Handle All Types of <span class="text-brand-red">Commercial Assets</span>
                </h2>
            </div>

            <div class="row g-2 g-md-3 g-lg-4">
                <!-- 1. IT Servers & Data Centers -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-hdd-rack text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Servers &amp; Racks</h3>
                            <small class="text-contrast fw-semibold">(Data centers, UPS, Cabling)</small>
                        </div>
                    </div>
                </div>

                <!-- 2. Workstations & Cubicles -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-grid-3x3-gap text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Modular Desks</h3>
                            <small class="text-contrast fw-semibold">(Cubicles, Partitions, Chairs)</small>
                        </div>
                    </div>
                </div>

                <!-- 3. Desktop PCs & Monitiors -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-display text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Monitors &amp; PCs</h3>
                            <small class="text-contrast fw-semibold">(Laptops, Printers, Scanners)</small>
                        </div>
                    </div>
                </div>

                <!-- 4. Conference Room Systems -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-projector text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">AV Equipment</h3>
                            <small class="text-contrast fw-semibold">(Projectors, Video Walls)</small>
                        </div>
                    </div>
                </div>

                <!-- 5. Confidential Records -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-file-earmark-lock text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Legal &amp; HR Files</h3>
                            <small class="text-contrast fw-semibold">(Tamper-Evident Seals)</small>
                        </div>
                    </div>
                </div>

                <!-- 6. Executive Cabins -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-briefcase text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Executive Cabins</h3>
                            <small class="text-contrast fw-semibold">(Luxury Desks, Glass Tables)</small>
                        </div>
                    </div>
                </div>

                <!-- 7. Pantry & Breakroom -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-cup-hot text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Cafeteria Items</h3>
                            <small class="text-contrast fw-semibold">(Coffee Machines, Microwaves)</small>
                        </div>
                    </div>
                </div>

                <!-- 8. Heavy Machinery -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-gear-wide-connected text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Heavy Equipment</h3>
                            <small class="text-contrast fw-semibold">(Copiers, Plotters, Tooling)</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. Direct Concierge CTA Banner -->
        <section class="about-cta-banner my-3">
            <div class="row align-items-center g-3">
                <div class="col-12 col-xl-6">
                    <h3 class="about-cta-title mb-1">Planning a Corporate or Office Move?</h3>
                    <p class="about-cta-subtitle mb-0">
                        Connect with our Corporate Relocation Specialist for free site surveys &amp; zero-downtime execution plans.
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