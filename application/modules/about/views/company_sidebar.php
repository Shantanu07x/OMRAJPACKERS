<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<aside class="company-sidebar">
    <!-- Company Quick Links -->
    <div class="sidebar-widget widget-company mb-4">
        <h4 class="widget-title mb-3 fw-bold text-brand-blue">Company Overview</h4>
        <ul class="list-unstyled d-flex flex-column gap-2 mb-0">
            <?php
            $company_links = [
                ['slug' => 'about-us',        'name' => 'About Us',          'icon' => 'bi-info-circle'],
                ['slug' => 'why-choose-us',   'name' => 'Why Choose Us',     'icon' => 'bi-patch-check'],
                ['slug' => 'photo-gallery',   'name' => 'Photo Gallery',     'icon' => 'bi-images'],
                ['slug' => 'video-gallery',   'name' => 'Video Gallery',     'icon' => 'bi-play-btn'],
                ['slug' => 'testimonials',   'name' => 'Client Reviews',    'icon' => 'bi-star'],
                ['slug' => 'faqs',            'name' => 'FAQs',              'icon' => 'bi-question-circle'],
            ];

            $current_active = isset($active_link) ? $active_link : $this->uri->segment(1);

            foreach ($company_links as $item):
                $is_active = ($current_active === $item['slug']) ? 'active bg-danger text-white' : 'bg-light text-dark';
            ?>
                <li>
                    <a href="<?= site_url($item['slug']) ?>" class="d-flex align-items-center justify-content-between p-2 rounded text-decoration-none <?= $is_active ?>">
                        <span class="d-flex align-items-center gap-2">
                            <i class="bi <?= $item['icon'] ?>"></i>
                            <span><?= $item['name'] ?></span>
                        </span>
                        <i class="bi bi-chevron-right small"></i>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Quick Assistance Box -->
    <div class="sidebar-widget widget-cta p-4 rounded-3 text-white text-center mb-4 gradient-banner-blue">
        <i class="bi bi-telephone-outbound fs-1 text-danger mb-2 d-inline-block"></i>
        <h5 class="fw-bold mb-2">Need Shifting Help?</h5>
        <p class="small text-white-50 mb-3">Speak with our relocation specialist for instant booking &amp; free estimates.</p>
        <a href="<?= $phonehtml ?>" class="btn btn-danger btn-sm rounded-pill px-3 py-2 fw-semibold w-100 mb-2">
            <i class="bi bi-telephone-fill me-1"></i> <?= $phone ?>
        </a>
        <button type="button" class="btn btn-outline-light btn-sm rounded-pill px-3 py-2 fw-semibold w-100" data-bs-toggle="modal" data-bs-target="#qteModal">
            Get a Free Quote
        </button>
    </div>
</aside>
