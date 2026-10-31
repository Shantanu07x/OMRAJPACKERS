<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'About Us',
    'bc_desc' => 'Learn more about ' . $company3 . ' - 40+ Years of Safe, Reliable & Affordable Relocation Across India',
    'breadcrumbs' => [
        ['name' => 'About Us']
    ]
]);
?>

<div class="about-page-wrap">
    <div class="container py-4 py-lg-5">

        <!-- 1. Hero Story & Sidebar (Separate Container Cards) -->
        <section class="about-hero-section py-3 my-4">
            <div class="row align-items-start g-4 g-lg-5">
                <!-- Left Column: Company Story Card -->
                <div class="col-12 col-lg-7">
                    <div class="about-story-card h-100">
                        <div class="about-card-badge mb-3">
                            <span class="badge-accent-dot"></span>
                            <i class="bi bi-shield-check text-brand-red me-1"></i> 40+ Years Legacy in Relocation
                        </div>
                        <h2 class="about-hero-title mb-2">
                            About Us : <span class="text-brand-red"><?= htmlspecialchars($company3) ?></span>
                        </h2>
                        <div class="about-title-divider mb-4"></div>
                        <p class="about-hero-lead mb-3">
                            <strong class="text-dark"><?= htmlspecialchars($company3) ?></strong> is a trusted and
                            experienced relocation company dedicated to providing safe, reliable, and affordable packing and
                            moving services. With years of expertise in the moving industry, we have successfully helped
                            hundreds of customers relocate their homes and offices with complete peace of mind.
                        </p>
                        <p class="about-hero-lead mb-3">
                            We specialize in household shifting, office relocation, local and domestic moving, vehicle
                            transportation, and warehousing services. Our skilled professionals use high-quality packing
                            materials and modern handling techniques to ensure your belongings remain safe throughout the
                            relocation process.
                        </p>
                        <p class="about-hero-lead mb-3">
                            At <strong class="text-dark"><?= htmlspecialchars($company3) ?></strong>, customer satisfaction
                            is our top priority. We believe in transparent pricing, timely delivery, and professional
                            service. Every move is planned carefully to minimize stress and maximize efficiency, whether it
                            is a small local shift or a long-distance relocation.
                        </p>
                        <p class="about-hero-lead mb-0">
                            Our commitment to quality service, attention to detail, and customer-focused approach has made
                            <strong class="text-dark"><?= htmlspecialchars($company3) ?></strong> a preferred choice for
                            reliable moving solutions. When you choose us, you choose safety, trust, and a smooth moving
                            experience.
                        </p>
                    </div>
                </div>

                <!-- Right Column: Sidebar (Separate Containers) -->
                <div class="col-12 col-lg-5">
                    <!-- Core Relocation Features (Separate Container Cards) -->
                    <div class="d-flex flex-column gap-3 mb-4">
                        <!-- 1. Safe & Secure -->
                        <div class="about-feature-card d-flex align-items-center gap-3">
                            <div class="feature-badge badge-red flex-shrink-0">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="h5 fw-bold text-brand-blue mb-1">Safe &amp; Secure</h3>
                                <p class="text-secondary small mb-0">High-quality packing materials for complete safety.</p>
                            </div>
                            <div class="about-card-arrow flex-shrink-0">
                                <i class="bi bi-chevron-right"></i>
                            </div>
                        </div>

                        <!-- 2. On-Time Delivery -->
                        <div class="about-feature-card d-flex align-items-center gap-3">
                            <div class="feature-badge badge-blue flex-shrink-0">
                                <i class="bi bi-truck"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="h5 fw-bold text-brand-blue mb-1">On-Time Delivery</h3>
                                <p class="text-secondary small mb-0">We value your time and ensure timely delivery.</p>
                            </div>
                            <div class="about-card-arrow flex-shrink-0">
                                <i class="bi bi-chevron-right"></i>
                            </div>
                        </div>

                        <!-- 3. Experienced Team -->
                        <div class="about-feature-card d-flex align-items-center gap-3">
                            <div class="feature-badge badge-red flex-shrink-0">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="h5 fw-bold text-brand-blue mb-1">Experienced Team</h3>
                                <p class="text-secondary small mb-0">Skilled professionals for a hassle-free experience.</p>
                            </div>
                            <div class="about-card-arrow flex-shrink-0">
                                <i class="bi bi-chevron-right"></i>
                            </div>
                        </div>

                        <!-- 4. Affordable Pricing -->
                        <div class="about-feature-card d-flex align-items-center gap-3">
                            <div class="feature-badge badge-blue flex-shrink-0">
                                <i class="bi bi-currency-rupee"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="h5 fw-bold text-brand-blue mb-1">Affordable Pricing</h3>
                                <p class="text-secondary small mb-0">Transparent and competitive rates with no hidden charges.</p>
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
                                    <span class="fw-semibold">100% Damage-Free Guarantee</span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="about-check-item">
                                    <span class="about-check-icon"><i class="bi bi-check-lg"></i></span>
                                    <span class="fw-semibold">Zero Hidden Costs or Surprises</span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="about-check-item">
                                    <span class="about-check-icon"><i class="bi bi-check-lg"></i></span>
                                    <span class="fw-semibold">Trained &amp; Verified Personnel</span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="about-check-item">
                                    <span class="about-check-icon"><i class="bi bi-check-lg"></i></span>
                                    <span class="fw-semibold">All-Risk Transit Insurance</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 2. Key Numbers & Achievements Counter Bar -->
        <section class="about-stats-section">
            <div class="row g-3 g-md-4">
                <div class="col-6 col-md-3">
                    <div class="about-stat-card stat-accent-red">
                        <div class="about-stat-icon-wrap"><i class="bi bi-clock-history"></i></div>
                        <div class="about-stat-number">40+</div>
                        <div class="about-stat-label">Years Experience</div>
                        <div class="about-stat-sub">Trusted by Generations</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="about-stat-card stat-accent-blue">
                        <div class="about-stat-icon-wrap"><i class="bi bi-box-seam-fill"></i></div>
                        <div class="about-stat-number">50K+</div>
                        <div class="about-stat-label">Moves Completed</div>
                        <div class="about-stat-sub">Homes &amp; Offices Nationwide</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="about-stat-card stat-accent-red">
                        <div class="about-stat-icon-wrap"><i class="bi bi-truck-front-fill"></i></div>
                        <div class="about-stat-number">150+</div>
                        <div class="about-stat-label">GPS-Tracked Trucks</div>
                        <div class="about-stat-sub">Specialized Fleet Vehicles</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="about-stat-card stat-accent-blue">
                        <div class="about-stat-icon-wrap"><i class="bi bi-patch-check-fill"></i></div>
                        <div class="about-stat-number">99.4%</div>
                        <div class="about-stat-label">On-Time Deliveries</div>
                        <div class="about-stat-sub">Verified Industry Leading</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. Mission & Vision Section (Layout matching Image 3) -->
        <section class="about-mv-section rounded-4 p-4 p-md-5 my-4">
            <div class="row align-items-center g-4">
                <!-- Our Mission Card -->
                <div class="col-12 col-lg-4">
                    <div class="about-mv-card mission-card h-100 d-flex flex-column justify-content-center">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <div class="about-mv-icon-box bg-red-subtle text-brand-red flex-shrink-0">
                                <i class="bi bi-bullseye"></i>
                            </div>
                            <div>
                                <span class="about-card-subtitle text-uppercase">Core Purpose</span>
                                <h3 class="h4 fw-bold text-brand-blue mb-0">Our Mission</h3>
                            </div>
                        </div>
                        <div class="mv-card-line mb-3"></div>
                        <p class="text-secondary mb-0">
                            To provide reliable, safe and affordable relocation services, making every move a smooth and
                            positive experience for our customers.
                        </p>
                    </div>
                </div>

                <!-- Center Circular Image with Dual-Color Arcs & Logo Badge -->
                <div class="col-12 col-lg-4 d-flex justify-content-center align-items-center my-3 my-lg-0">
                    <div class="mv-center-visual position-relative">
                        <!-- Dual-Color Curved Arc Ring (Red Left, Navy Right) -->
                        <svg class="mv-arc-svg" viewBox="0 0 280 280" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Left Red Arc -->
                            <path d="M 125 10 A 130 130 0 0 0 125 270" stroke="#EE0416" stroke-width="4.5"
                                stroke-linecap="round" />
                            <!-- Right Navy Blue Arc -->
                            <path d="M 155 10 A 130 130 0 0 1 155 270" stroke="#012652" stroke-width="4.5"
                                stroke-linecap="round" />
                        </svg>

                        <!-- Center Circular Image -->
                        <div class="mv-image-circle">
                            <img src="<?= base_url('assets/img/aboutus.jpg') ?>"
                                alt="Omraj Packers Relocation Moving Boxes"
                                class="img-fluid w-100 h-100 object-fit-cover">
                        </div>

                        <!-- Overlapping Logo Badge at Bottom-Left -->
                        <div class="mv-logo-badge position-absolute">
                            <img src="<?= base_url('assets/img/logo/logo.png') ?>"
                                alt="<?= htmlspecialchars($company3) ?>" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Our Vision Card -->
                <div class="col-12 col-lg-4">
                    <div class="about-mv-card vision-card h-100 d-flex flex-column justify-content-center">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <div class="about-mv-icon-box bg-blue-subtle text-brand-blue flex-shrink-0">
                                <i class="bi bi-eye"></i>
                            </div>
                            <div>
                                <span class="about-card-subtitle text-uppercase">Future Outlook</span>
                                <h3 class="h4 fw-bold text-brand-blue mb-0">Our Vision</h3>
                            </div>
                        </div>
                        <div class="mv-card-line line-blue mb-3"></div>
                        <p class="text-secondary mb-0">
                            To be India's most trusted and customer-centric packers and movers brand, known for quality
                            service, innovation and excellence.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Core Values Pill Strip -->
            <div class="row g-3 mt-4 pt-2 justify-content-center">
                <div class="col-12 col-md-4">
                    <div class="about-value-card d-flex align-items-center gap-3">
                        <div class="about-value-icon-wrap text-brand-red flex-shrink-0">
                            <i class="bi bi-shield-lock-fill"></i>
                        </div>
                        <div>
                            <h4 class="h6 fw-bold text-brand-blue mb-1">Integrity &amp; Honesty</h4>
                            <p class="text-secondary small mb-0">100% price transparency with zero hidden fees.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="about-value-card d-flex align-items-center gap-3">
                        <div class="about-value-icon-wrap text-brand-red flex-shrink-0">
                            <i class="bi bi-heart-fill"></i>
                        </div>
                        <div>
                            <h4 class="h6 fw-bold text-brand-blue mb-1">Customer First</h4>
                            <p class="text-secondary small mb-0">Treating every valuable item with dedicated care.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="about-value-card d-flex align-items-center gap-3">
                        <div class="about-value-icon-wrap text-brand-blue flex-shrink-0">
                            <i class="bi bi-patch-check-fill"></i>
                        </div>
                        <div>
                            <h4 class="h6 fw-bold text-brand-blue mb-1">Reliability</h4>
                            <p class="text-secondary small mb-0">Punctual, accountable, and insured transit nationwide.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. How We Work (4-Step Relocation Blueprint) -->
        <section class="about-process-section rounded-4 p-4 p-md-5 my-4">
            <div class="text-center mb-4 mb-lg-5">
                <span class="badge bg-primary-subtle text-primary-emphasis px-3 py-2 rounded-pill fw-bold mb-2">
                    <i class="bi bi-diagram-3-fill me-1"></i> THE OMRAJ BLUEPRINT
                </span>
                <h2 class="fw-bold text-brand-blue mb-1">How We Make Your Relocation Effortless</h2>
                <p class="text-secondary small mb-0">A four-stage systematic process engineered for 100% damage-free
                    moving</p>
            </div>

            <div class="row g-3 g-md-4">
                <!-- Step 1 -->
                <div class="col-6 col-lg-3">
                    <div class="about-step-card">
                        <div class="about-step-number">01</div>
                        <div class="about-step-icon">
                            <i class="bi bi-clipboard2-check-fill"></i>
                        </div>
                        <h3 class="about-step-title">Pre-Move Survey &amp; Quote</h3>
                        <p class="about-step-desc mb-0">
                            Our relocation specialist conducts an in-home or digital inventory check to provide an
                            exact, itemized, binding price quote with zero hidden charges.
                        </p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-6 col-lg-3">
                    <div class="about-step-card">
                        <div class="about-step-number">02</div>
                        <div class="about-step-icon">
                            <i class="bi bi-box-seam-fill"></i>
                        </div>
                        <h3 class="about-step-title">5-Layer Protective Packing</h3>
                        <p class="about-step-desc mb-0">
                            Trained packers use virgin bubble wrap, corrugated sheets, corner guards, stretch film, and
                            heavy cartons to shield delicate furniture, electronics, and crockery.
                        </p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-6 col-lg-3">
                    <div class="about-step-card">
                        <div class="about-step-number">03</div>
                        <div class="about-step-icon">
                            <i class="bi bi-truck-front-fill"></i>
                        </div>
                        <h3 class="about-step-title">GPS-Tracked Safe Transit</h3>
                        <p class="about-step-desc mb-0">
                            Goods are loaded using specialized ramps and heavy strap locks inside weather-sealed
                            container trucks, backed by live GPS tracking and transit insurance.
                        </p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="col-6 col-lg-3">
                    <div class="about-step-card">
                        <div class="about-step-number">04</div>
                        <div class="about-step-icon">
                            <i class="bi bi-house-check-fill"></i>
                        </div>
                        <h3 class="about-step-title">Unloading &amp; Placement</h3>
                        <p class="about-step-desc mb-0">
                            Upon arrival, our crew unloads, unboxes, inspects each item, and assists in reassembling and
                            arranging furniture in your designated rooms.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. Specialized Fleet & Modern Infrastructure (Operational Capabilities - 2 in a row on mobile) -->
        <section class="about-infra-section p-4 p-md-5 my-4">
            <div class="text-center mb-4 mb-lg-5">
                <span class="badge bg-success-subtle text-success-emphasis px-3 py-2 rounded-pill fw-bold mb-2">
                    <i class="bi bi-building-gear me-1"></i> OPERATIONAL CAPABILITIES
                </span>
                <h2 class="fw-bold text-brand-blue mb-1">Our Modern Infrastructure &amp; Dedicated Fleet</h2>
                <p class="text-secondary small mb-0">State-of-the-art logistics assets delivering safe, punctual shifts
                    across all terrains</p>
            </div>

            <div class="row g-3 g-md-4">
                <!-- Infra 1 -->
                <div class="col-6 col-lg-3">
                    <div class="about-infra-card">
                        <div class="about-infra-icon">
                            <i class="bi bi-shield-shaded"></i>
                        </div>
                        <h3 class="about-infra-title">Containerized Fleet</h3>
                        <p class="about-infra-desc mb-0">
                            Over 150+ all-weather covered container trucks protecting your goods from dust, rain,
                            highway turbulence, and moisture.
                        </p>
                    </div>
                </div>

                <!-- Infra 2 -->
                <div class="col-6 col-lg-3">
                    <div class="about-infra-card">
                        <div class="about-infra-icon">
                            <i class="bi bi-car-front-fill"></i>
                        </div>
                        <h3 class="about-infra-title">Hydraulic Car Carriers</h3>
                        <p class="about-infra-desc mb-0">
                            Custom multi-vehicle trailers with hydraulic lift ramps and specialized wheel-locking
                            mechanisms for scratch-free auto transit.
                        </p>
                    </div>
                </div>

                <!-- Infra 3 -->
                <div class="col-6 col-lg-3">
                    <div class="about-infra-card">
                        <div class="about-infra-icon">
                            <i class="bi bi-buildings-fill"></i>
                        </div>
                        <h3 class="about-infra-title">Secure Warehousing</h3>
                        <p class="about-infra-desc mb-0">
                            Over 100,000 sq.ft of pest-controlled, CCTV-monitored, fire-protected storage space across
                            major metro hubs in India.
                        </p>
                    </div>
                </div>

                <!-- Infra 4 -->
                <div class="col-6 col-lg-3">
                    <div class="about-infra-card">
                        <div class="about-infra-icon">
                            <i class="bi bi-tools"></i>
                        </div>
                        <h3 class="about-infra-title">Heavy Handling Gear</h3>
                        <p class="about-infra-desc mb-0">
                            Professional furniture dollies, heavy-duty hoisting pulleys, floor runners, and pallet jacks
                            for safe multi-story shifting.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 6. Direct Concierge CTA Banner -->
        <section class="about-cta-banner my-4">
            <div class="row align-items-center g-3">
                <div class="col-12 col-xl-6">
                    <h3 class="about-cta-title mb-1">Planning Your Next Move? Let Our Experts Handle It!</h3>
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

        <!-- 7. SEO Search Keywords Tag Cloud (Dedicated Separate Container - Image 4) -->
        <section class="about-seo-section p-4 p-md-5 my-4">
            <div class="mb-3">
                <span class="badge bg-danger-subtle text-danger-emphasis px-3 py-2 rounded-pill fw-bold mb-2">
                    <i class="bi bi-search me-1"></i> VERIFIED SEARCH QUERIES
                </span>
                <h3 class="fw-bold text-brand-blue mb-1">
                    Searching for <span class="text-brand-red"><?= htmlspecialchars($company3) ?></span>
                </h3>
                <p class="text-secondary small mb-0">
                    Customers discover our verified packing, moving, vehicle transport, and warehousing solutions across
                    India through these popular search queries:
                </p>
            </div>
            <div class="about-seo-tags d-flex flex-wrap gap-2 pt-2">
                <?php
                $search_keywords = [
                    "Omraj Packers and Movers",
                    "Omraj Packers & Movers",
                    "Omraj Packers and Movers India",
                    "Packers and Movers",
                    "Best Packers and Movers",
                    "Top Packers and Movers",
                    "Professional Packers and Movers",
                    "Reliable Packers and Movers",
                    "Affordable Packers and Movers",
                    "Packers and Movers near me",
                    "Home shifting services",
                    "House shifting services",
                    "Residential relocation services",
                    "Office shifting services",
                    "Commercial shifting services",
                    "Local house shifting",
                    "Domestic relocation services",
                    "Household goods shifting",
                    "Packing and moving services",
                    "Loading and unloading services",
                    "Car transportation service",
                    "Car carrier service",
                    "Car shifting service",
                    "Bike transportation service",
                    "Bike shifting service",
                    "Two wheeler transportation",
                    "Vehicle relocation service",
                    "Car transport by truck",
                    "Bike transport by road",
                    "Cargo transportation service",
                    "Goods transportation service",
                    "Household goods transport",
                    "Full truck load service",
                    "Part truck load service",
                    "Door to door transportation",
                    "Road transportation service",
                    "Container transportation service",
                    "Logistics and transportation service",
                    "All India transportation service",
                    "Packers Movers in Patna",
                    "Packers Movers in Jahanabad",
                    "Packers Movers in Aara",
                    "Packers Movers in Gaya",
                    "Packers Movers in Darbhanga",
                    "Packers Movers in Chhapra",
                    "Packers Movers in Ranchi",
                    "Packers Movers in Deoghar",
                    "Packers Movers in Bokaro",
                    "Packers Movers in Bhagalpur",
                    "Packers Movers in Munger",
                    "Packers Movers in Katihar"
                ];
                foreach ($search_keywords as $keyword):
                    ?>
                    <span class="seo-tag-pill">
                        <i class="bi bi-check-circle-fill text-danger me-2"></i><?= htmlspecialchars($keyword) ?>
                    </span>
                <?php endforeach; ?>
            </div>
        </section>

    </div>
</div>