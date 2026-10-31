<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- ==========================================================================
     Hero Slider, Quote Form Card & Arc Badges Section
     ========================================================================== -->
<section class="hero-slider-section">
    <img src="<?= base_url('assets/img/slider.jpg') ?>" class="hero-slider-bg-img" alt="Om Raj Packers and Movers"
        width="1983" height="793" loading="eager" fetchpriority="high" decoding="async">
    <div class="hero-slider-overlay"></div>

    <div class="container">
        <!-- Top Row: Hero Text (Left) and Arc Feature Badges (Right) -->
        <div class="row align-items-center mb-4 pb-2">
            <!-- Left Hero Content -->
            <div class="col-lg-7 col-xl-7">
                <?php if (!empty($city)): 
                    $st_clean = !empty($state) ? ucwords($state) : 'Bihar';
                    $st_slug = !empty($state) ? strtolower(str_replace(' ', '-', $state)) : 'bihar';
                ?>
                <div class="city-slider-bc-wrap mb-3">
                    <nav class="dyn-bc-nav" aria-label="breadcrumb">
                        <a href="<?= site_url() ?>"><i class="bi bi-house-door me-1"></i>Home</a>
                        <span class="dyn-bc-sep"><i class="bi bi-chevron-right"></i></span>
                        <a href="<?= site_url('our-branches') ?>">Our Branches</a>
                        <span class="dyn-bc-sep"><i class="bi bi-chevron-right"></i></span>
                        <a href="<?= site_url($st_slug) ?>"><?= $st_clean ?></a>
                        <span class="dyn-bc-sep"><i class="bi bi-chevron-right"></i></span>
                        <span class="dyn-bc-current"><?= ucwords($city) ?></span>
                    </nav>
                </div>
                <?php endif; ?>

                <!-- Eyebrow Bar + Label -->
                <div class="hero-eyebrow-wrap d-inline-flex align-items-center gap-2 mb-2">
                    <span class="hero-eyebrow-bar"></span>
                    <span class="hero-eyebrow-label">TRUSTED PACKERS AND MOVERS</span>
                </div>


                <h1 class="hero-title mb-2">
                    <?= !empty($city) ? "Best Packers and Movers<br>in <span class=\"text-highlight\">$city</span>" : "Moving Made<br><span class=\"text-highlight\">Simple</span> for You" ?>
                </h1>

                <!-- Slogan with script font & shield badge -->
                <div class="hero-slogan-wrap d-inline-flex align-items-center gap-2 my-2">
                    <i class="bi bi-shield-fill-check text-warning fs-5"></i>
                    <span class="hero-slogan-script">Your Belongings, Our Responsibility</span>
                </div>

                <p class="hero-desc mb-3">
                    <?= !empty($city) ? "Seamless and affordable household, office and vehicle shifting services in <strong>$city</strong> and across India." : "Seamless and affordable relocation services for your home, office and vehicle &mdash; anywhere in India." ?>
                </p>

                <!-- Desktop 3-Chip Row (40+ Yrs Legacy removed) -->
                <div class="hero-stats-row d-none d-md-flex flex-wrap align-items-center gap-2 mb-3 mb-lg-0">
                    <div class="hero-stat-chip">
                        <i class="bi bi-shield-check text-success me-1"></i>
                        <span><strong>100%</strong> Insured</span>
                    </div>
                    <div class="hero-stat-chip">
                        <i class="bi bi-clock-history text-warning me-1"></i>
                        <span><strong>On-Time</strong> Moves</span>
                    </div>
                    <div class="hero-stat-chip">
                        <i class="bi bi-cash-stack text-info me-1"></i>
                        <span><strong>Best</strong> Rates</span>
                    </div>
                </div>

                <!-- Mobile 3-Column Trust Bar in One Row (Matching Screenshot) -->
                <div class="hero-mobile-trust-bar d-flex d-md-none align-items-center justify-content-between my-3 py-2 px-2">
                    <div class="mobile-trust-col text-center flex-fill">
                        <div class="mobile-trust-circle">
                            <i class="bi bi-shield-fill-check text-danger"></i>
                        </div>
                        <div class="mobile-trust-label">100%<br>Insured</div>
                    </div>
                    <div class="mobile-trust-divider"></div>
                    <div class="mobile-trust-col text-center flex-fill">
                        <div class="mobile-trust-circle">
                            <i class="fa-solid fa-truck-fast text-danger"></i>
                        </div>
                        <div class="mobile-trust-label">On-Time<br>Moves</div>
                    </div>
                    <div class="mobile-trust-divider"></div>
                    <div class="mobile-trust-col text-center flex-fill">
                        <div class="mobile-trust-circle">
                            <i class="bi bi-cash-stack text-danger"></i>
                        </div>
                        <div class="mobile-trust-label">Best<br>Rates</div>
                    </div>
                </div>
            </div>

            <!-- Right: Curved Arc Feature Badges (Desktop Screenshot 2) -->
            <div class="col-lg-5 col-xl-5 d-none d-lg-block">
                <div class="hero-arc-wrapper ms-xl-4">
                    <!-- Curved connecting arc with red circular indicator dots (Reverse-C Curve) -->
                    <svg class="hero-arc-svg" viewBox="0 0 350 310" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="hero-arc-path"
                            d="M 0 5 C 5 13, 12 22, 20 32 C 38 52, 54 80, 65 112 C 73 138, 76 166, 72 192 C 68 220, 56 248, 44 272 C 35 290, 26 302, 18 310"
                            stroke="rgba(255,255,255,0.88)" stroke-width="2.5" stroke-dasharray="5 5" />
                        <!-- Dot 1 (Badge 1: 100% Safe Packing) -->
                        <circle class="arc-pulse-ring" cx="20" cy="32" r="9" fill="rgba(238, 4, 22, 0.4)" />
                        <circle cx="20" cy="32" r="5" fill="var(--logo-red)" stroke="#ffffff" stroke-width="2.5" />
                        <!-- Dot 2 (Badge 2: On-Time Delivery) -->
                        <circle class="arc-pulse-ring" cx="65" cy="112" r="9" fill="rgba(1, 38, 82, 0.45)" />
                        <circle cx="65" cy="112" r="5" fill="var(--logo-blue)" stroke="#ffffff" stroke-width="2.5" />
                        <!-- Dot 3 (Badge 3: Experienced Team) -->
                        <circle class="arc-pulse-ring" cx="72" cy="192" r="9" fill="rgba(238, 4, 22, 0.4)" />
                        <circle cx="72" cy="192" r="5" fill="var(--logo-red)" stroke="#ffffff" stroke-width="2.5" />
                        <!-- Dot 4 (Badge 4: Affordable Pricing) -->
                        <circle class="arc-pulse-ring" cx="44" cy="272" r="9" fill="rgba(1, 38, 82, 0.45)" />
                        <circle cx="44" cy="272" r="5" fill="var(--logo-blue)" stroke="#ffffff" stroke-width="2.5" />
                    </svg>

                    <!-- Badge 1: 100% Safe & Secure Packing (Red Octagon) -->
                    <div class="arc-pill arc-pill-1">
                        <div class="arc-shape-wrap">
                            <div class="arc-shape arc-shape-red">
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2L4 5V11C4 16.5 7.5 21.3 12 22C16.5 21.3 20 16.5 20 11V5L12 2Z" fill="#ffffff"/>
                                    <path d="M8.5 11.5L11 14L15.5 9" stroke="var(--logo-red)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <div class="arc-text">
                            <span class="arc-title">100%</span>
                            <span class="arc-subtitle">Safe &amp; Secure<br>Packing</span>
                        </div>
                    </div>

                    <!-- Badge 2: On-Time Delivery (Blue Octagon) -->
                    <div class="arc-pill arc-pill-2">
                        <div class="arc-shape-wrap">
                            <div class="arc-shape arc-shape-blue">
                                <i class="fa-solid fa-truck-fast"></i>
                            </div>
                        </div>
                        <div class="arc-text">
                            <span class="arc-title">On-Time</span>
                            <span class="arc-subtitle">Delivery</span>
                        </div>
                    </div>

                    <!-- Badge 3: Experienced Team (Red Octagon) -->
                    <div class="arc-pill arc-pill-3">
                        <div class="arc-shape-wrap">
                            <div class="arc-shape arc-shape-red">
                                <i class="fa-solid fa-users"></i>
                            </div>
                        </div>
                        <div class="arc-text">
                            <span class="arc-title">Experienced</span>
                            <span class="arc-subtitle">Team</span>
                        </div>
                    </div>

                    <!-- Badge 4: Affordable Pricing (Blue Octagon) -->
                    <div class="arc-pill arc-pill-4">
                        <div class="arc-shape-wrap">
                            <div class="arc-shape arc-shape-blue">
                                <span class="arc-rupee-sign">&#8377;</span>
                            </div>
                        </div>
                        <div class="arc-text">
                            <span class="arc-title">Affordable</span>
                            <span class="arc-subtitle">Pricing</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Row: Quote Form Card (Loaded from contacts/quoteform.php) -->
        <div class="row">
            <div class="col-12">
                <?php $this->load->view('contacts/quoteform'); ?>

                <!-- Mobile 2x2 Trust Badges Preview (Displayed after Quote Form on Mobile) -->
                <div class="row g-2 d-lg-none mt-3 pt-1">
                    <div class="col-6">
                        <div class="arc-pill w-100 m-0 shadow-sm">
                            <div class="arc-shape-wrap">
                                <div class="arc-shape arc-shape-red">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2L4 5V11C4 16.5 7.5 21.3 12 22C16.5 21.3 20 16.5 20 11V5L12 2Z" fill="#ffffff"/>
                                        <path d="M8.5 11.5L11 14L15.5 9" stroke="var(--logo-red)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="arc-text">
                                <span class="arc-title">100%</span>
                                <span class="arc-subtitle">Safe Packing</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="arc-pill w-100 m-0 shadow-sm">
                            <div class="arc-shape-wrap">
                                <div class="arc-shape arc-shape-blue">
                                    <i class="fa-solid fa-truck-fast"></i>
                                </div>
                            </div>
                            <div class="arc-text">
                                <span class="arc-title">On-Time</span>
                                <span class="arc-subtitle">Delivery</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="arc-pill w-100 m-0 shadow-sm">
                            <div class="arc-shape-wrap">
                                <div class="arc-shape arc-shape-red">
                                    <i class="fa-solid fa-users"></i>
                                </div>
                            </div>
                            <div class="arc-text">
                                <span class="arc-title">Experienced</span>
                                <span class="arc-subtitle">Team</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="arc-pill w-100 m-0 shadow-sm">
                            <div class="arc-shape-wrap">
                                <div class="arc-shape arc-shape-blue">
                                    <span class="arc-rupee-sign">&#8377;</span>
                                </div>
                            </div>
                            <div class="arc-text">
                                <span class="arc-title">Affordable</span>
                                <span class="arc-subtitle">Pricing</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>