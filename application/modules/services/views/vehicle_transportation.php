<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Vehicle Transportation Services',
    'bc_desc' => 'Safe, Scratch-Free Car &amp; Bike Transportation by ' . $company3,
    'breadcrumbs' => [
        ['name' => 'Services'],
        ['name' => 'Vehicle Transportation']
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
                                <i class="bi bi-car-front-fill text-brand-red"></i>
                                Automobile Relocation Specialists
                            </span>
                        </div>

                        <!-- Main Heading -->
                        <h2 class="display-6 fw-bold mb-3 text-navy">
                            Scratch-Free Car &amp; Bike<br>
                            <span class="text-brand-red">Transportation Services</span>
                        </h2>

                        <!-- Introductory Paragraphs -->
                        <p class="text-contrast lead fs-6 mb-3">
                            Relocating your vehicle demands high-grade specialized carriers, secure wheel lock
                            mechanisms, and certified logistics experts. At <strong
                                class="text-navy"><?= htmlspecialchars($company3) ?></strong>, we provide nationwide
                            doorstep vehicle transport for luxury cars, sedans, SUVs, and two-wheelers.
                        </p>
                        <p class="text-contrast mb-4">
                            We operate enclosed car carrier trailers with hydraulic ramps to eliminate road dust,
                            weather exposure, and transit wear. With comprehensive transit insurance and GPS live fleet
                            tracking, you can monitor your vehicle's journey every mile until safe doorstep handover.
                        </p>

                        <!-- Key Feature Micro-Chips Grid -->
                        <div class="row g-2 mb-4">
                            <div class="col-6 col-sm-3">
                                <div class="hero-feature-chip">
                                    <i class="bi bi-shield-shaded text-danger"></i>
                                    <span>Enclosed Carriers</span>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3">
                                <div class="hero-feature-chip">
                                    <i class="bi bi-geo-alt-fill text-primary"></i>
                                    <span>GPS Tracking</span>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3">
                                <div class="hero-feature-chip">
                                    <i class="bi bi-lock-fill text-info"></i>
                                    <span>Tire Locking</span>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3">
                                <div class="hero-feature-chip">
                                    <i class="bi bi-check-circle-fill text-success"></i>
                                    <span>Doorstep Delivery</span>
                                </div>
                            </div>
                        </div>

                        <!-- Direct CTA Buttons -->
                        <div class="d-flex flex-wrap gap-2 gap-sm-3 mb-3">
                            <a href="<?= $phonehtml ?>" class="btn-cta-phone">
                                <i class="bi bi-telephone-fill"></i> Call <?= $phone ?>
                            </a>
                            <button type="button" class="btn-cta-quote" data-bs-toggle="modal"
                                data-bs-target="#qteModal">
                                <i class="bi bi-send-fill text-danger"></i> Get Vehicle Quote
                            </button>
                            <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="btn-cta-whatsapp">
                                <i class="bi bi-whatsapp"></i> WhatsApp Inquiry
                            </a>
                        </div>
                    </div>

                    <!-- Bottom Reassurance Row -->
                    <div
                        class="pt-3 border-top d-flex flex-wrap align-items-center justify-content-between gap-2 text-contrast small">
                        <span class="d-inline-flex align-items-center gap-1">
                            <i class="bi bi-check-circle-fill text-success small"></i> Comprehensive Transit Insurance
                        </span>
                        <span class="d-inline-flex align-items-center gap-1">
                            <i class="bi bi-check-circle-fill text-success small"></i> Zero Kilometers Driven in Transit
                        </span>
                        <span class="d-inline-flex align-items-center gap-1">
                            <i class="bi bi-check-circle-fill text-success small"></i> Pan-India Express Delivery
                        </span>
                    </div>
                </div>
            </div>

            <!-- Right: Services Sidebar -->
            <div class="col-12 col-lg-4">
                <?php $this->load->view('services/services_sidebar', ['active_service' => 'vehicle-transportation']); ?>
            </div>
        </div>

        <!-- 2. Four Feature Highlights in a Row (2 in a row on mobile) -->
        <section class="bg-white rounded-4 border shadow-sm p-3 p-md-4 mb-4">
            <div class="row g-2 g-md-4 text-center align-items-stretch">
                <!-- 1. Enclosed Car Carrier -->
                <div class="col-6 col-lg-3 feature-grid-item hover-feature">
                    <div class="mb-2">
                        <svg class="feature-badge-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#012652"
                                d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01z" />
                            <path fill="none" stroke="#ffffff" stroke-width="0.9" stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8 4.2c1.3 0 2.8-.7 3.2-1 .3 2.5-.2 5.2-3.2 6.8-3-1.6-3.5-4.3-3.2-6.8.4.3 1.9 1 3.2 1z" />
                            <path fill="none" stroke="#ffffff" stroke-width="0.9" stroke-linecap="round"
                                stroke-linejoin="round" d="M6.5 7.2l1 1 2.2-2.2" />
                        </svg>
                    </div>
                    <h3 class="fw-bold fs-6 mb-1 text-navy">Closed Containers</h3>
                    <p class="text-contrast small mb-0">Protects your car from dust, rain &amp; highway debris.</p>
                </div>

                <!-- 2. Hydraulic Loading Ramps -->
                <div class="col-6 col-lg-3 feature-grid-item hover-feature">
                    <div class="mb-2">
                        <svg class="feature-badge-icon" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="24" cy="24" r="21" fill="#EE0416" fill-opacity="0.08" />
                            <g fill="#EE0416">
                                <path d="M6 16h18a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V17a1 1 0 0 1 1-1z" />
                                <path d="M26 20h6.5a2 2 0 0 1 1.6.8l3.6 4.8c.2.3.3.7.3 1.1v4.3a1 1 0 0 1-1 1H26V20z" />
                            </g>
                        </svg>
                    </div>
                    <h3 class="fw-bold fs-6 mb-1 text-navy">Hydraulic Ramps</h3>
                    <p class="text-contrast small mb-0">Gentle slope ramp for zero bumper undercarriage scraping.</p>
                </div>

                <!-- 3. Two-Wheeler Multi-Layer Packing -->
                <div class="col-6 col-lg-3 feature-grid-item hover-feature">
                    <div class="mb-2">
                        <svg class="feature-badge-icon" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="24" cy="24" r="21" fill="#EE0416" fill-opacity="0.08" />
                            <g fill="#EE0416">
                                <circle cx="14" cy="19" r="4.5" />
                                <path d="M7 32c0-4 3.5-7 8-7 1.8 0 3.4.5 4.6 1.4-.8 1.4-1.3 3.1-1.3 4.9v.7H7z" />
                                <circle cx="34" cy="19" r="4.5" />
                                <path d="M41 32c0-4-3.5-7-8-7-1.8 0-3.4.5-4.6 1.4.8 1.4 1.3 3.1 1.3 4.9v.7h11.3z" />
                                <circle cx="24" cy="15" r="5.5" />
                                <path d="M15 32c0-5 4-8.5 9-8.5s9 3.5 9 8.5H15z" />
                            </g>
                        </svg>
                    </div>
                    <h3 class="fw-bold fs-6 mb-1 text-navy">Bike Foam Wrap</h3>
                    <p class="text-contrast small mb-0">Multi-layer bubble wrap &amp; secure tie-down straps.</p>
                </div>

                <!-- 4. Direct Door Delivery -->
                <div class="col-6 col-lg-3 feature-grid-item hover-feature">
                    <div class="mb-2">
                        <svg class="feature-badge-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#EE0416"
                                d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01z" />
                            <text x="8" y="10.8" font-size="7.5" font-family="'Plus Jakarta Sans', Arial, sans-serif"
                                font-weight="bold" fill="#ffffff" text-anchor="middle">₹</text>
                        </svg>
                    </div>
                    <h3 class="fw-bold fs-6 mb-1 text-navy">All-Inclusive Rates</h3>
                    <p class="text-contrast small mb-0">Includes toll, tax, insurance &amp; doorstep delivery.</p>
                </div>
            </div>
        </section>

        <!-- 3. Vehicle Relocation Process (2 in a row on mobile) -->
        <section class="process-container-box rounded-4 p-3 p-sm-4 p-md-5 mb-4">
            <div class="text-center mb-4 mb-lg-5">
                <span class="section-badge-title d-inline-block mb-1">
                    <span class="badge-dash"></span>AUTOMOBILE LOGISTICS PROCESS
                </span>
                <h2 class="fw-bold text-navy mb-2">
                    How We Transport <span class="text-brand-red">Your Vehicle</span>
                </h2>
                <p class="text-contrast small mb-0">
                    A secure 4-stage transfer protocol ensuring zero risk and zero unexpected scratches.
                </p>
            </div>

            <div class="row g-2 g-md-3 g-xl-3 align-items-stretch justify-content-center">
                <!-- Step 1 -->
                <div class="col-6 col-lg">
                    <div
                        class="process-card text-center d-flex flex-column align-items-center justify-content-start h-100">
                        <div class="process-icon-wrapper">
                            <span class="process-step-badge bg-brand-red">01</span>
                            <div class="process-icon-halo process-halo-blue">
                                <i class="bi bi-file-earmark-check text-navy process-icon-inner"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold fs-6 mb-1 text-navy">Condition Inspection</h3>
                        <p class="text-contrast small mb-0">Joint pre-dispatch physical condition report &amp; photos.
                        </p>
                    </div>
                </div>

                <!-- Arrow 1 -->
                <div
                    class="col-auto d-none d-lg-flex align-items-center justify-content-center text-brand-red fs-4 fw-bold px-1">
                    <i class="bi bi-chevron-right"></i>
                </div>

                <!-- Step 2 -->
                <div class="col-6 col-lg">
                    <div
                        class="process-card text-center d-flex flex-column align-items-center justify-content-start h-100">
                        <div class="process-icon-wrapper">
                            <span class="process-step-badge bg-navy">02</span>
                            <div class="process-icon-halo process-halo-blue">
                                <i class="bi bi-shield-lock text-navy process-icon-inner"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold fs-6 mb-1 text-navy">Carrier Loading</h3>
                        <p class="text-contrast small mb-0">Hydraulic ramp entry with wheel locks and lashings.</p>
                    </div>
                </div>

                <!-- Arrow 2 -->
                <div
                    class="col-auto d-none d-lg-flex align-items-center justify-content-center text-brand-red fs-4 fw-bold px-1">
                    <i class="bi bi-chevron-right"></i>
                </div>

                <!-- Step 3 -->
                <div class="col-6 col-lg">
                    <div
                        class="process-card text-center d-flex flex-column align-items-center justify-content-start h-100">
                        <div class="process-icon-wrapper">
                            <span class="process-step-badge bg-brand-red">03</span>
                            <div class="process-icon-halo process-halo-red">
                                <i class="bi bi-truck text-brand-red process-icon-inner"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold fs-6 mb-1 text-navy">GPS Live Transit</h3>
                        <p class="text-contrast small mb-0">Dedicated carrier transit with live location updates.</p>
                    </div>
                </div>

                <!-- Arrow 3 -->
                <div
                    class="col-auto d-none d-lg-flex align-items-center justify-content-center text-brand-red fs-4 fw-bold px-1">
                    <i class="bi bi-chevron-right"></i>
                </div>

                <!-- Step 4 -->
                <div class="col-6 col-lg">
                    <div
                        class="process-card text-center d-flex flex-column align-items-center justify-content-start h-100">
                        <div class="process-icon-wrapper">
                            <span class="process-step-badge bg-navy">04</span>
                            <div class="process-icon-halo process-halo-blue">
                                <i class="bi bi-key-fill text-navy process-icon-inner"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold fs-6 mb-1 text-navy">Doorstep Handover</h3>
                        <p class="text-contrast small mb-0">Unloading, joint inspection check &amp; key handover.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. Vehicles We Relocate (2 in a row on mobile) -->
        <section class="bg-white rounded-4 p-3 p-sm-4 p-md-5 border shadow-sm mb-4">
            <div class="text-center mb-4 mb-lg-5">
                <span class="section-badge-title d-inline-block mb-1">
                    <span class="badge-dash"></span>VEHICLES WE TRANSPORT
                </span>
                <h2 class="fw-bold text-navy mb-0">
                    Safe Transport For <span class="text-brand-red">All Vehicle Types</span>
                </h2>
            </div>

            <div class="row g-2 g-md-3 g-lg-4">
                <!-- 1. Luxury Cars & Sedans -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-car-front-fill text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Luxury Cars</h3>
                            <small class="text-contrast fw-semibold">(Sedans, BMW, Audi, Merc)</small>
                        </div>
                    </div>
                </div>

                <!-- 2. SUVs & MUVs -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-truck-front-fill text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">SUVs &amp; 4x4</h3>
                            <small class="text-contrast fw-semibold">(Creta, Thar, Fortuner, etc.)</small>
                        </div>
                    </div>
                </div>

                <!-- 3. Hatchbacks & Small Cars -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-car-front text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Hatchbacks</h3>
                            <small class="text-contrast fw-semibold">(Swift, i20, WagonR, Tiago)</small>
                        </div>
                    </div>
                </div>

                <!-- 4. Electric Vehicles -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-lightning-charge-fill text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Electric Vehicles</h3>
                            <small class="text-contrast fw-semibold">(EV Cars, Battery Safety Care)</small>
                        </div>
                    </div>
                </div>

                <!-- 5. Royal Enfield & Cruisers -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-bicycle text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Heavy Bikes</h3>
                            <small class="text-contrast fw-semibold">(Bullet, Harley, Adventure)</small>
                        </div>
                    </div>
                </div>

                <!-- 6. Sports Bikes -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-speedometer text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Sports Bikes</h3>
                            <small class="text-contrast fw-semibold">(Ninja, KTM, Yamaha R15)</small>
                        </div>
                    </div>
                </div>

                <!-- 7. Scooters & Activa -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-scooter text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Scooters &amp; Mopeds</h3>
                            <small class="text-contrast fw-semibold">(Activa, Jupiter, Access, Ola)</small>
                        </div>
                    </div>
                </div>

                <!-- 8. Vintage & Classic Cars -->
                <div class="col-6 col-lg-3">
                    <div class="relocate-card p-2 p-sm-3 d-flex align-items-center gap-2 gap-sm-3 h-100">
                        <div class="relocate-icon-halo">
                            <i class="bi bi-award-fill text-navy fs-5"></i>
                        </div>
                        <div class="relocate-text-wrap">
                            <h3 class="fw-bold mb-0 text-navy fs-6">Vintage Cars</h3>
                            <small class="text-contrast fw-semibold">(Custom enclosed transport)</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. Direct Concierge CTA Banner -->
        <section class="about-cta-banner my-3">
            <div class="row align-items-center g-3">
                <div class="col-12 col-xl-6">
                    <h3 class="about-cta-title mb-1">Relocating Your Car or Bike Across India?</h3>
                    <p class="about-cta-subtitle mb-0">
                        Get an instant fixed-price vehicle shipping estimate with enclosed carrier guarantee.
                    </p>
                </div>
                <div class="col-12 col-xl-6 text-xl-end">
                    <div
                        class="d-flex align-items-center gap-2 justify-content-center justify-content-xl-end flex-wrap flex-sm-nowrap">
                        <a href="<?= $phonehtml ?>" class="btn-cta-phone flex-fill flex-sm-grow-0 text-nowrap">
                            <i class="bi bi-telephone-fill"></i> <?= $phone ?>
                        </a>
                        <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener"
                            class="btn-cta-whatsapp flex-fill flex-sm-grow-0 text-nowrap">
                            <i class="bi bi-whatsapp"></i> WhatsApp
                        </a>
                        <button type="button" class="btn-cta-quote flex-fill flex-sm-grow-0 text-nowrap"
                            data-bs-toggle="modal" data-bs-target="#qteModal">
                            <i class="bi bi-send-fill text-danger"></i> Free Quote
                        </button>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>