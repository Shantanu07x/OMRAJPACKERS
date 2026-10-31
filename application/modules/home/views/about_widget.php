<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- ==========================================================================
     About Section - Home About Widget
     ========================================================================== -->
<section class="home-about-section py-5 py-lg-6">
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5">

            <!-- Left Column: Heading, Description & CTA Button -->
            <div class="col-12 col-lg-4">
                <div class="about-content-wrap">
                    <div class="section-tag-badge">
                        <span class="section-tag-line"></span>
                        <span class="section-tag-text">ABOUT US</span>
                    </div>
                    <h2 class="about-main-title mb-3">
                        Your Trusted <span class="about-title-red">Packers and Movers</span>
                    </h2>
                    <p class="about-description mb-4">
                        <strong><?=$company3?></strong> offer packing and shifting services for domestic, corporate and
                        vehicles. It is evident that the items which have to be moved generally carry some importance
                        either personally or financially. A cupboard could be passed on through generations of families,
                        and a computer or office documents are essential for work.
                    </p>
                    <a href="<?= site_url('about-us') ?>"
                        class="btn btn-about-cta d-inline-flex align-items-center gap-2">
                        <span>Know More About Us</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Center Column: Arched Image Frame & Floating Badge -->
            <div class="col-12 col-lg-4 text-center">
                <div class="about-image-wrapper position-relative mx-auto">
                    <!-- Decorative Left Red Curved Dashed Arrow (Desktop) -->
                    <div class="about-curve-arrow d-none d-xl-block" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 50 50" fill="none">
                            <path d="M 6 42 C 6 22, 18 12, 40 12" stroke="var(--logo-red)" stroke-width="2"
                                stroke-dasharray="3 3" fill="none" />
                            <path d="M 34 6 L 44 12 L 36 20" stroke="var(--logo-red)" stroke-width="2" fill="none"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>

                    <!-- Arched Image Frame (Add your image here) -->
                    <div class="about-image-frame overflow-hidden mx-auto">
                        <!-- User Image: Place your image file in assets/img/ and set the src below -->
                        <img src="<?= base_url('assets/img/home-about.jpg') ?>"
                            alt="Packaging of goods by  <?= $company3 ?>"
                            class="about-main-img w-100 h-100 object-fit-cover" width="400" height="300" loading="lazy"
                            decoding="async">
                    </div>

                    <!-- Floating Badge: Happy Relocations -->
                    <div
                        class="about-badge-floating bg-white shadow rounded-pill p-2 px-3 d-inline-flex align-items-center gap-2">
                        <div class="about-badge-icon rounded-circle d-flex align-items-center justify-content-center">
                            <!-- Omraj Moving Truck Logo Icon (Brand Mascot) -->
                            <svg class="about-badge-logo-svg" viewBox="0 0 100 100" fill="none"
                                xmlns="http://www.w3.org/2000/svg" aria-label="Omraj Packers and Movers Logo">
                                <!-- Chimney -->
                                <rect x="59" y="14" width="6" height="12" fill="var(--logo-blue, #012652)" />
                                <!-- Navy House Roof -->
                                <path d="M 53 29 L 72 13 L 91 29 Z" fill="var(--logo-blue, #012652)" />
                                <!-- Navy House Body -->
                                <rect x="58" y="28" width="28" height="20" fill="var(--logo-blue, #012652)" />
                                <!-- White House Door -->
                                <rect x="68" y="38" width="8" height="10" fill="#FFFFFF" />
                                <!-- Pink/Coral Truck Bed Rail -->
                                <rect x="54" y="47" width="40" height="7" rx="3.5" fill="#fca5a5" />
                                <!-- Red Truck Body -->
                                <path
                                    d="M 14 50 C 14 44 18 43 24 43 L 28 43 C 29 40 33 27 36 24 C 38 22 42 22 46 22 L 53 22 C 55 22 56 23 56 25 L 56 46 L 89 46 C 90.5 46 91 47 91 48.5 L 91 66 L 85.5 66 A 11.5 11.5 0 0 0 62.5 66 L 43.5 66 A 11.5 11.5 0 0 0 20.5 66 L 14 66 C 12.5 66 12 65 12 63.5 L 12 52.5 C 12 51 12.5 50 14 50 Z"
                                    fill="var(--logo-red, #EE0416)" />
                                <!-- Light Blue Windshield -->
                                <path
                                    d="M 33 42 L 39 27 C 40 25.5 41 25.5 43 25.5 L 47 25.5 C 48.5 25.5 49.5 26.5 49.5 28 L 49.5 42 Z"
                                    fill="#93c5fd" />
                                <!-- Front Bumper -->
                                <rect x="9.5" y="50" width="5" height="16" rx="2.5" fill="#cbd5e1" />
                                <!-- Rear Bumper -->
                                <rect x="89.5" y="56" width="5" height="11" rx="2.5" fill="#cbd5e1" />
                                <!-- OMRAJ text on truck -->
                                <text x="52" y="60" font-family="'Inter', sans-serif" font-weight="900" font-size="11"
                                    fill="#FFFFFF" text-anchor="middle" letter-spacing="0.5">OMRAJ</text>
                                <!-- Wheels -->
                                <circle cx="32" cy="68" r="10.5" fill="#1e293b" />
                                <circle cx="32" cy="68" r="5" fill="#cbd5e1" />
                                <circle cx="74" cy="68" r="10.5" fill="#1e293b" />
                                <circle cx="74" cy="68" r="5" fill="#cbd5e1" />
                            </svg>
                        </div>
                        <div class="text-start lh-sm pe-1">
                            <span class="d-block fw-bold text-muted about-badge-text-top">Happy</span>
                            <span class="d-block fw-bold about-badge-text-bottom">Relocations</span>
                        </div>
                        <!-- Decorative Red Spark Lines above badge -->
                        <div class="about-badge-sparks" aria-hidden="true">
                            <span class="spark spark-1"></span>
                            <span class="spark spark-2"></span>
                            <span class="spark spark-3"></span>
                        </div>
                    </div>
                </div>

                <!-- Text below the image -->
                <p class="about-description text-start mt-4 mb-0">
                    Depending upon the type of services you have opted for, our team will take care of packing, loading, transportation and unloading. We also offer storage services and insurance for eligible consignments.
                </p>
            </div>

            <!-- Right Column: 3 Key Feature Items Stacked -->
            <div class="col-12 col-lg-4">
                <div class="about-features-list d-flex flex-column gap-3 gap-md-4">

                    <!-- Feature 1: Experienced Professionals -->
                    <div class="about-feature-item d-flex align-items-center gap-3">
                        <div
                            class="about-feature-icon-wrap icon-blue flex-shrink-0 rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div>
                            <h3 class="about-feature-title mb-1">Experienced Professionals</h3>
                            <p class="about-feature-desc mb-0">Skilled and trained team for a safe move.</p>
                        </div>
                    </div>

                    <!-- Feature 2: Pan India Service -->
                    <div class="about-feature-item d-flex align-items-center gap-3">
                        <div
                            class="about-feature-icon-wrap icon-red flex-shrink-0 rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div>
                            <h3 class="about-feature-title mb-1">Pan India Service</h3>
                            <p class="about-feature-desc mb-0">Relocation services across major cities.</p>
                        </div>
                    </div>

                    <!-- Feature 3: Customer Satisfaction -->
                    <div class="about-feature-item d-flex align-items-center gap-3">
                        <div
                            class="about-feature-icon-wrap icon-red flex-shrink-0 rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-heart-fill"></i>
                        </div>
                        <div>
                            <h3 class="about-feature-title mb-1">Customer Satisfaction</h3>
                            <p class="about-feature-desc mb-0">Your happiness is our top priority.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>