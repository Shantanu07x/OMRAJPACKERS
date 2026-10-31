<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- ==========================================================================
     Main Website Footer (Lightest Blue & Navy Line)
     ========================================================================== -->
<footer class="main-footer position-relative">

    <div class="footer-top-wrap">
        <div class="container">
            <div class="row g-4 g-lg-5">

                <!-- Column 1: Brand Info, Rating, Badges, Social -->
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Brand Logo -->
                    <a class="footer-brand d-inline-flex align-items-center text-decoration-none mb-3" href="<?= site_url() ?>">
                        <img src="<?= base_url('assets/img/logo/logo.png') ?>" alt="<?= htmlspecialchars($company3) ?>" class="footer-logo me-2">
                        <div class="brand-text-group d-flex flex-column justify-content-center">
                            <span class="brand-title">OMRAJ</span>
                            <span class="brand-subtitle">PACKERS &amp; MOVERS</span>
                        </div>
                    </a>

                    <!-- Company Short Description (Dark & High-Contrast) -->
                    <p class="footer-desc mb-3">
                        <?= htmlspecialchars($company3) ?> is an <strong class="text-dark">ISO 9001:2015</strong> certified &amp; <strong class="text-dark">Govt-approved</strong> relocation partner with <strong class="text-dark">40+ years</strong> of verified excellence, ensuring safe, insured, and timely shifting solutions across India.
                    </p>


                    <!-- Mini Trust Badges -->
                    <div class="d-flex flex-wrap gap-2 mb-3">
                        <span class="footer-mini-badge badge-govt">
                            <i class="bi bi-patch-check-fill text-danger me-1"></i>Govt Approved
                        </span>
                        <span class="footer-mini-badge badge-iso">
                            <i class="bi bi-award-fill text-warning me-1"></i>ISO 9001:2015
                        </span>
                        <span class="footer-mini-badge badge-insured">
                            <i class="bi bi-shield-check text-success me-1"></i>100% Insured
                        </span>
                    </div>

                    <!-- Connect With Us Social Icons -->
                    <div class="footer-social-wrap mt-2">
                        <span class="footer-contact-label mb-2">CONNECT WITH US:</span>
                        <div class="d-flex align-items-center gap-2">
                            <a href="<?= !empty($facebookhtml) ? $facebookhtml : 'https://facebook.com' ?>" target="_blank" rel="noopener" class="footer-social-link social-fb" title="Facebook" aria-label="Facebook">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="<?= !empty($instagramhtml) ? $instagramhtml : 'https://instagram.com' ?>" target="_blank" rel="noopener" class="footer-social-link social-ig" title="Instagram" aria-label="Instagram">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="<?= !empty($youtubehtml) ? $youtubehtml : 'https://youtube.com' ?>" target="_blank" rel="noopener" class="footer-social-link social-yt" title="YouTube" aria-label="YouTube">
                                <i class="bi bi-youtube"></i>
                            </a>
                            <a href="<?= !empty($linkedinhtml) ? $linkedinhtml : 'https://linkedin.com' ?>" target="_blank" rel="noopener" class="footer-social-link social-li" title="LinkedIn" aria-label="LinkedIn">
                                <i class="bi bi-linkedin"></i>
                            </a>
                            <a href="<?= !empty($whatsapphtml) ? $whatsapphtml : 'https://wa.me/919902200448' ?>" target="_blank" rel="noopener" class="footer-social-link social-wa" title="WhatsApp" aria-label="WhatsApp">
                                <i class="bi bi-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Column 2: Our Services -->
                <div class="col-6 col-md-6 col-lg-3">
                    <div class="footer-col-title">OUR SERVICES</div>
                    <ul class="footer-links-list">
                        <li>
                            <a href="<?= site_url('household-goods-shifting') ?>" class="footer-link">
                                <i class="bi bi-chevron-right"></i>
                                <span>Household Goods Shifting Services</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('office-and-corporate-shifting') ?>" class="footer-link">
                                <i class="bi bi-chevron-right"></i>
                                <span>Office and Corporate Shifting</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('local-and-domestic-shifting') ?>" class="footer-link">
                                <i class="bi bi-chevron-right"></i>
                                <span>Local and Domestic Shifting</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('packing-and-unpacking-services') ?>" class="footer-link">
                                <i class="bi bi-chevron-right"></i>
                                <span>Packing and Unpacking Services</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('loading-and-unloading-services') ?>" class="footer-link">
                                <i class="bi bi-chevron-right"></i>
                                <span>Loading and Unloading Services</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('vehicle-transportation') ?>" class="footer-link">
                                <i class="bi bi-chevron-right"></i>
                                <span>Vehicle Transportation</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('warehousing-and-storage-solutions') ?>" class="footer-link">
                                <i class="bi bi-chevron-right"></i>
                                <span>Warehousing and Storage Solutions</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('insurance-coverage') ?>" class="footer-link">
                                <i class="bi bi-chevron-right"></i>
                                <span>Insurance Coverage</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Column 3: Company & Support -->
                <div class="col-6 col-md-6 col-lg-2">
                    <div class="footer-col-title">COMPANY &amp; SUPPORT</div>
                    <ul class="footer-links-list">
                        <li>
                            <a href="<?= site_url('about-us') ?>" class="footer-link">
                                <i class="bi bi-chevron-right"></i>
                                <span>About Us</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('why-choose-us') ?>" class="footer-link">
                                <i class="bi bi-chevron-right"></i>
                                <span>Why Choose Us</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('our-branches') ?>" class="footer-link">
                                <i class="bi bi-chevron-right"></i>
                                <span>Our Branches</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('photo-gallery') ?>" class="footer-link">
                                <i class="bi bi-chevron-right"></i>
                                <span>Photo Gallery</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('testimonials') ?>" class="footer-link">
                                <i class="bi bi-chevron-right"></i>
                                <span>Testimonials</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('faqs') ?>" class="footer-link">
                                <i class="bi bi-chevron-right"></i>
                                <span>FAQs</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('blog') ?>" class="footer-link">
                                <i class="bi bi-chevron-right"></i>
                                <span>Blog</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('contact-us') ?>" class="footer-link">
                                <i class="bi bi-chevron-right"></i>
                                <span>Contact Us</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Column 4: Contact Info (Containerless) -->
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- 24x7 Helpline -->
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon icon-phone-soft">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div>
                            <span class="footer-contact-label">24X7 HELPLINE</span>
                            <a href="<?= $phonehtml ?>" class="footer-contact-link"><?= $phone ?></a>
                        </div>
                    </div>

                    <!-- WhatsApp Support -->
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon icon-wa-soft">
                            <i class="bi bi-whatsapp"></i>
                        </div>
                        <div>
                            <span class="footer-contact-label">WHATSAPP SUPPORT</span>
                            <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="footer-contact-link text-success fw-bold d-inline-flex align-items-center gap-1">Chat on WhatsApp <i class="bi bi-arrow-up-right-circle-fill small"></i></a>
                        </div>
                    </div>

                    <!-- Official Email -->
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon icon-mail-soft">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div>
                            <span class="footer-contact-label">OFFICIAL EMAIL</span>
                            <a href="<?= $mailhtml ?>" class="footer-contact-link"><?= $mail ?></a>
                        </div>
                    </div>

                    <!-- Head Office -->
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon icon-pin-soft">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div>
                            <span class="footer-contact-label">HEAD OFFICE</span>
                            <span class="footer-address-val"><?= $address ?></span>
                        </div>
                    </div>

                    <!-- Approved Trust Badge Box -->
                    <div class="footer-trust-box mt-3">
                        <div class="footer-trust-box-icon">
                            <i class="bi bi-shield-fill-check"></i>
                        </div>
                        <div>
                            <strong class="d-block text-dark small footer-trust-box-title">Government Approved Mover</strong>
                            <small class="footer-trust-box-desc">Bank &amp; Corporate Relocation Approved</small>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bottom Sub-Footer Bar -->
    <div class="footer-bottom-bar">
        <div class="container">
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between gap-2 text-center text-md-start">
                <div>
                    &copy; <?= date('Y') ?> <strong><?= htmlspecialchars($company3) ?></strong>. All Rights Reserved.
                </div>
                <div>
                    <span class="d-inline-flex align-items-center gap-2">
                        <span><i class="bi bi-shield-check text-success me-1"></i>100% Insured</span>
                        &bull;
                        <span><i class="bi bi-patch-check-fill text-warning me-1"></i>Govt Approved</span>
                        &bull;
                        <span><i class="bi bi-award-fill text-primary me-1"></i>ISO 9001:2015</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Quote Modal -->
<?php $this->load->view('contacts/quotemodal'); ?>

<!-- Floating Contact Action Buttons (Calling Left & WhatsApp Right) -->
<div class="floating-contact-actions" aria-label="Quick Contact Actions">
    <!-- Calling Button (Left) with Pop-out Phone Number on Hover -->
    <a href="<?=$phonehtml ?>" class="floating-btn floating-call-btn" aria-label="Call Us at <?=$phone ?>" title="Call Us">
        <span class="floating-btn-pulse"></span>
        <div class="floating-btn-icon">
            <i class="bi bi-telephone-fill"></i>
        </div>
        <span class="floating-btn-label floating-call-label">
            <small class="floating-btn-sub">Call Us</small>
            <span class="floating-btn-val"><?=$phone?></span>
        </span>
    </a>

    <!-- WhatsApp Button (Right) with Pop-out Text on Hover -->
    <a href="<?=$whatsapphtml ?>" target="_blank" rel="noopener" class="floating-btn floating-wa-btn" aria-label="Chat with us on WhatsApp" title="WhatsApp Us">
        <span class="floating-btn-pulse wa-pulse"></span>
        <span class="floating-btn-label floating-wa-label">
            <small class="floating-btn-sub">Online 24/7</small>
            <span class="floating-btn-val">WhatsApp Us</span>
        </span>
        <div class="floating-btn-icon">
            <i class="bi bi-whatsapp"></i>
        </div>
    </a>
</div>

<!-- Form & Site Scripts -->
<script src="<?= base_url('assets/js/form.js') ?>" defer></script>
</body>
</html>
