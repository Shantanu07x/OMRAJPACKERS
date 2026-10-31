<?php
$st = strtolower(str_replace(" ", "-", $state));
include "data/$st.php";
$state = ucwords($state);
?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Packers and Movers in ' . ucwords($state),
    'bc_desc' => '',
    'breadcrumbs' => [
        ['name' => 'Our Branches', 'url' => site_url('our-branches')],
        ['name' => ucwords($state)],

    ]
]);
?>
<div class="pm-list-service-page py-5">
    <div class="container pm-list-feature-section">

        <!-- Section Heading & Badge -->
        <div class="text-center mb-4 pb-2">
            <div class="section-tag-badge justify-content-center mb-2">
                <span class="section-tag-line"></span>
                <span class="section-tag-text">CITIES WE SERVE IN <?= strtoupper($state) ?></span>
            </div>
            <h2 class="pm-list-header-title mb-2">
                Packers and Movers in <span class="text-brand-red"><?= ucwords($state) ?></span>
            </h2>
            <p class="pm-list-header-desc text-contrast mx-auto mb-0">
                Select your city below for verified household relocation, vehicle transport, and commercial shifting services.
            </p>
        </div>

        <div class="row g-3 justify-content-center">
            <?php
            $st = str_replace(" ", "-", $state);
            foreach ($cities as $ct):
                $link = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
                $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
                ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <a href="<?= site_url("$link-packers-movers-$statename") ?>"
                        class="pm-list-city-card-link text-decoration-none d-block h-100">
                        <div class="pm-list-city-card card h-100">
                            <div class="card-body pm-list-card-body d-flex flex-column justify-content-between p-3">
                                <div class="d-flex align-items-start justify-content-between mb-2">
                                    <div class="pm-list-icon">
                                        <i class="bi bi-truck"></i>
                                    </div>
                                    <span class="pm-list-arrow-btn">
                                        <i class="bi bi-arrow-up-right"></i>
                                    </span>
                                </div>
                                <div class="pm-list-city-name">
                                    <span class="pm-list-sublabel">Packers and Movers</span>
                                    <h3 class="pm-list-city-title mb-0"><?= $ct['nm'] ?></h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>