<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Why Choose Us',
    'bc_desc' => "Discover Why Customers Trust $company3 For Safe &amp; Timely Relocation Across India",
    'breadcrumbs' => [
        ['name' => 'About Us', 'url' => site_url('about-us')],
        ['name' => 'Why Choose Us']
    ]
]);
?>

<div class="about-page-wrap">
    <div class="container py-4 py-lg-5">

        <!-- 1. Hero Why Choose Us & Sidebar (Separate Container Cards) -->
        <section class="about-hero-section py-3 my-4">
            <div class="row align-items-start g-4 g-lg-5">
                <!-- Left Column: Why Choose Us Narrative Card -->
                <div class="col-12 col-lg-7">
                    <div class="about-story-card h-100">
                        <div class="about-card-badge mb-3">
                            <span class="badge-accent-dot"></span>
                            <i class="bi bi-star-fill text-warning me-1"></i> THE REPUTATION OF EXCELLENCE
                        </div>
                        <h2 class="about-hero-title mb-2">
                            Why Choose <span class="text-brand-red"><?= htmlspecialchars($company3) ?></span>?
                        </h2>
                        <div class="about-title-divider mb-4"></div>
                        <p class="about-hero-lead mb-3">
                            Relocating your home, vehicle, or corporate office is more than moving boxes—it is shifting
                            your life's valuable assets. At <strong
                                class="text-dark"><?= htmlspecialchars($company3) ?></strong>, we have earned the
                            lasting trust of over 50,000+ satisfied clients across India through four decades of
                            zero-compromise relocation standards.
                        </p>
                        <p class="about-hero-lead mb-3">
                            We deploy our proprietary <strong>5-Layer Multi-Guard Packaging Protocol</strong>, using
                            virgin bubble wraps, corrugated edge guards, high-density foam, and custom-built wooden
                            crates for delicate electronics, glass tops, and antique furniture to eliminate transit
                            hazards.
                        </p>
                        <p class="about-hero-lead mb-3">
                            Every single move is assigned a <strong>Dedicated Senior Relocation Coordinator</strong> who
                            personally oversees inventory audits, loading precision, real-time GPS tracking on national
                            highways, and doorstep unpacking at your new location.
                        </p>
                        <p class="about-hero-lead mb-0">
                            With 100% transparent pricing, zero moving-day surcharges, and comprehensive transit
                            insurance, choosing <strong class="text-dark"><?= htmlspecialchars($company3) ?></strong>
                            means choosing peace of mind, punctuality, and complete reliability.
                        </p>
                    </div>
                </div>

                <!-- Right Column: Sidebar (Separate Containers) -->
                <div class="col-12 col-lg-5">
                    <!-- Core Relocation Features (Separate Container Cards) -->
                    <div class="d-flex flex-column gap-3 mb-4">
                        <!-- 1. Pan-India Moving Network -->
                        <div class="about-feature-card d-flex align-items-center gap-3">
                            <div class="feature-badge badge-blue flex-shrink-0">
                                <i class="bi bi-globe-asia-australia"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="h5 fw-bold text-brand-blue mb-1">Pan-India Network</h3>
                                <p class="text-secondary small mb-0">Direct branches and verified delivery hubs across 150+ Indian cities.</p>
                            </div>
                            <div class="about-card-arrow flex-shrink-0">
                                <i class="bi bi-chevron-right"></i>
                            </div>
                        </div>

                        <!-- 2. Certified & IBA Compliant -->
                        <div class="about-feature-card d-flex align-items-center gap-3">
                            <div class="feature-badge badge-red flex-shrink-0">
                                <i class="bi bi-award-fill"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="h5 fw-bold text-brand-blue mb-1">IBA &amp; ISO Approved</h3>
                                <p class="text-secondary small mb-0">Meeting the highest government and banking association standards.</p>
                            </div>
                            <div class="about-card-arrow flex-shrink-0">
                                <i class="bi bi-chevron-right"></i>
                            </div>
                        </div>

                        <!-- 3. All-Weather Container Trucks -->
                        <div class="about-feature-card d-flex align-items-center gap-3">
                            <div class="feature-badge badge-blue flex-shrink-0">
                                <i class="bi bi-truck-front-fill"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="h5 fw-bold text-brand-blue mb-1">Containerized Fleet</h3>
                                <p class="text-secondary small mb-0">Sealed container vehicles shielding goods from dust, rain, and turbulence.</p>
                            </div>
                            <div class="about-card-arrow flex-shrink-0">
                                <i class="bi bi-chevron-right"></i>
                            </div>
                        </div>

                        <!-- 4. Hassle-Free Transit Cover -->
                        <div class="about-feature-card d-flex align-items-center gap-3">
                            <div class="feature-badge badge-red flex-shrink-0">
                                <i class="bi bi-shield-fill-check"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="h5 fw-bold text-brand-blue mb-1">Hassle-Free Transit Cover</h3>
                                <p class="text-secondary small mb-0">Comprehensive goods protection backed by fast, transparent claims.</p>
                            </div>
                            <div class="about-card-arrow flex-shrink-0">
                                <i class="bi bi-chevron-right"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Guarantees Checklist Container (Below Features) -->
                    <div class="about-guarantee-card p-4">
                        <div class="about-guarantee-header d-flex align-items-center justify-content-between mb-3 pb-2 border-bottom">
                            <span class="fw-bold text-brand-blue small text-uppercase tracking-wider">
                                <i class="bi bi-patch-check-fill text-brand-red me-1"></i> Omraj Assurance Guarantee
                            </span>
                            <span class="badge bg-success-subtle text-success-emphasis fw-bold rounded-pill px-2.5 py-1 small">
                                Verified
                            </span>
                        </div>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <div class="about-check-item">
                                    <span class="about-check-icon"><i class="bi bi-check-lg"></i></span>
                                    <span class="fw-semibold">Dedicated Move Coordinator</span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="about-check-item">
                                    <span class="about-check-icon"><i class="bi bi-check-lg"></i></span>
                                    <span class="fw-semibold">Live Fleet GPS Transit Tracking</span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="about-check-item">
                                    <span class="about-check-icon"><i class="bi bi-check-lg"></i></span>
                                    <span class="fw-semibold">5-Layer Multi-Guard Packing</span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="about-check-item">
                                    <span class="about-check-icon"><i class="bi bi-check-lg"></i></span>
                                    <span class="fw-semibold">Zero Moving-Day Surcharges</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 2. Key Trust Metrics & Achievements Counter Bar -->
        <section class="about-stats-section">
            <div class="row g-3 g-md-4">
                <div class="col-6 col-md-3">
                    <div class="about-stat-card stat-accent-red">
                        <div class="about-stat-icon-wrap"><i class="bi bi-star-fill"></i></div>
                        <div class="about-stat-number">4.9/5</div>
                        <div class="about-stat-label">Customer Rating</div>
                        <div class="about-stat-sub">12,500+ Verified Reviews</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="about-stat-card stat-accent-blue">
                        <div class="about-stat-icon-wrap"><i class="bi bi-shield-check"></i></div>
                        <div class="about-stat-number">100%</div>
                        <div class="about-stat-label">Safe Transit Record</div>
                        <div class="about-stat-sub">40+ Years Proven Safety</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="about-stat-card stat-accent-red">
                        <div class="about-stat-icon-wrap"><i class="bi bi-truck-front-fill"></i></div>
                        <div class="about-stat-number">150+</div>
                        <div class="about-stat-label">Container Trucks</div>
                        <div class="about-stat-sub">All-Weather Covered Fleet</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="about-stat-card stat-accent-blue">
                        <div class="about-stat-icon-wrap"><i class="bi bi-headset"></i></div>
                        <div class="about-stat-number">24/7</div>
                        <div class="about-stat-label">Dedicated Support</div>
                        <div class="about-stat-sub">Live Relocation Hotline</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. The Omraj Advantage vs Unorganized Movers Comparison Card -->
        <section class="about-infra-section p-4 p-md-5 my-4">
            <div class="text-center mb-4 mb-lg-5">
                <span class="badge bg-danger-subtle text-danger-emphasis px-3 py-2 rounded-pill fw-bold mb-2">
                    <i class="bi bi-shield-check me-1"></i> WHY WE STAND OUT
                </span>
                <h2 class="fw-bold text-brand-blue mb-1">
                    The <span class="text-brand-red"><?= htmlspecialchars($company3) ?></span> Difference
                </h2>
                <p class="text-secondary small mb-0">See how our professional packing &amp; moving standards compare
                    with regular transporters</p>
            </div>

            <div class="row g-3 g-md-4">
                <!-- Comparison Item 1 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="about-infra-card d-flex flex-column h-100">
                        <div class="about-infra-icon mb-3">
                            <i class="bi bi-box-seam-fill"></i>
                        </div>
                        <h3 class="about-infra-title mb-3">Packing Standards</h3>
                        <div class="border-top pt-3 mt-auto">
                            <p class="small text-dark mb-2">
                                <i class="bi bi-check-circle-fill text-success me-1"></i> <strong>Omraj:</strong>
                                5-layer virgin bubble wraps, edge guards &amp; wooden crates.
                            </p>
                            <p class="small text-muted mb-0">
                                <i class="bi bi-x-circle-fill text-danger me-1"></i> <strong>Others:</strong> Used
                                cartons and thin newspapers.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Comparison Item 2 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="about-infra-card d-flex flex-column h-100">
                        <div class="about-infra-icon mb-3">
                            <i class="bi bi-truck-front-fill"></i>
                        </div>
                        <h3 class="about-infra-title mb-3">Transport Fleet</h3>
                        <div class="border-top pt-3 mt-auto">
                            <p class="small text-dark mb-2">
                                <i class="bi bi-check-circle-fill text-success me-1"></i> <strong>Omraj:</strong> 150+
                                covered container trucks with live GPS tracking.
                            </p>
                            <p class="small text-muted mb-0">
                                <i class="bi bi-x-circle-fill text-danger me-1"></i> <strong>Others:</strong> Open
                                trucks exposed to rain, dust, and theft.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Comparison Item 3 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="about-infra-card d-flex flex-column h-100">
                        <div class="about-infra-icon mb-3">
                            <i class="bi bi-cash-coin"></i>
                        </div>
                        <h3 class="about-infra-title mb-3">Pricing Integrity</h3>
                        <div class="border-top pt-3 mt-auto">
                            <p class="small text-dark mb-2">
                                <i class="bi bi-check-circle-fill text-success me-1"></i> <strong>Omraj:</strong>
                                Binding fixed quotes with zero hidden moving surcharges.
                            </p>
                            <p class="small text-muted mb-0">
                                <i class="bi bi-x-circle-fill text-danger me-1"></i> <strong>Others:</strong> Low
                                initial quotes with surprise moving-day demands.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Comparison Item 4 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="about-infra-card d-flex flex-column h-100">
                        <div class="about-infra-icon mb-3">
                            <i class="bi bi-person-check-fill"></i>
                        </div>
                        <h3 class="about-infra-title mb-3">Moving Staff</h3>
                        <div class="border-top pt-3 mt-auto">
                            <p class="small text-dark mb-2">
                                <i class="bi bi-check-circle-fill text-success me-1"></i> <strong>Omraj:</strong>
                                Background-verified, full-time trained handling crew.
                            </p>
                            <p class="small text-muted mb-0">
                                <i class="bi bi-x-circle-fill text-danger me-1"></i> <strong>Others:</strong> Untrained
                                daily-wage casual laborers.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Direct Concierge CTA Banner -->
        <section class="about-cta-banner my-4">
            <div class="row align-items-center g-3">
                <div class="col-12 col-xl-6">
                    <h3 class="about-cta-title mb-1">Ready For a Safe &amp; Reliable Shift? Contact Us Today!</h3>
                    <p class="about-cta-subtitle mb-0">
                        Speak directly with a Senior Relocation Coordinator for instant planning &amp; fixed-price estimates.
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