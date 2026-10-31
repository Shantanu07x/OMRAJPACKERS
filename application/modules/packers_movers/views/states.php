<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Our Branches',
    'bc_desc' => '',
    'breadcrumbs' => [
        ['name' => 'Our Branches']
    ]
]);
?>

<?php
$state = [
    [
        "image" => "bihar.jpg",
        "category" => "Bihar",
        "link" => "bihar"
    ],
    [
        "image" => "jharkhand.jpg",
        "category" => "Jharkhand",
        "link" => "jharkhand"
    ],
];
?>

<!-- Locations Section -->
<section class="locations-presence-section py-5 bg-light position-relative">
    <div class="container">

        <!-- Section Heading & Badge -->
        <div class="text-center mb-5">
            <div class="locations-badge-wrap mb-2">
                <span class="locations-tag-badge d-inline-flex align-items-center gap-2">
                    <i class="bi bi-geo-alt-fill"></i>
                    <span>Nationwide Network</span>
                </span>
            </div>
            <h2 class="locations-section-title fw-bold mt-2 mb-2">
                Our Presence Across <span class="locations-title-red">India</span>
            </h2>
            <p class="locations-section-desc text-contrast mx-auto mb-0">
                Reliable, IBA-approved, and insured packing and moving services available across all major states and cities.
            </p>
        </div>

        <!-- State Cards Grid -->
        <div class="row g-4 justify-content-center">
            <?php foreach ($state as $item): ?>
                <div class="col-12 col-sm-6 col-md-6 col-lg-5 col-xl-4">
                    <div class="location-state-card h-100">
                        <a href="<?= site_url($item['link']) ?>" class="location-card-link text-decoration-none">
                            <!-- Fixed Image Container -->
                            <div class="location-card-img-wrap">
                                <img class="location-card-img"
                                    src="<?= base_url('assets/img/state/' . $item['image']) ?>"
                                    alt="<?= htmlspecialchars($item['category']) ?>" loading="lazy">
                                <div class="location-card-overlay">
                                    <span class="location-view-btn">
                                        <i class="bi bi-eye"></i>
                                        <span>View Details</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </span>
                                </div>
                            </div>

                            <!-- Card Body with Location Name and Arrow Button -->
                            <div class="location-card-body">
                                <div class="location-card-info">
                                    <span class="location-pin-icon" aria-hidden="true">
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </span>
                                    <h3 class="location-card-name"><?= htmlspecialchars($item['category']) ?></h3>
                                </div>
                                <span class="location-arrow-btn" aria-hidden="true">
                                    <i class="bi bi-arrow-right"></i>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>