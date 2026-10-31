<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
$active_service = isset($active_service) ? $active_service : $this->uri->segment(1);

$services_list = [
    [
        'slug' => 'household-goods-shifting',
        'name' => 'Household Goods Shifting',
        'icon' => 'bi-house-door-fill',
        'color' => 'text-brand-red'
    ],
    [
        'slug' => 'office-and-corporate-shifting',
        'name' => 'Office & Corporate Shifting',
        'icon' => 'bi-buildings-fill',
        'color' => 'text-primary'
    ],
    [
        'slug' => 'local-and-domestic-shifting',
        'name' => 'Local & Domestic Shifting',
        'icon' => 'bi-truck',
        'color' => 'text-info'
    ],
    [
        'slug' => 'packing-and-unpacking-services',
        'name' => 'Packing & Unpacking Services',
        'icon' => 'bi-box-seam-fill',
        'color' => 'text-warning'
    ],
    [
        'slug' => 'loading-and-unloading-services',
        'name' => 'Loading & Unloading Services',
        'icon' => 'bi-box-arrow-in-down',
        'color' => 'text-danger'
    ],
    [
        'slug' => 'vehicle-transportation',
        'name' => 'Vehicle Transportation',
        'icon' => 'bi-car-front-fill',
        'color' => 'text-success'
    ],
    [
        'slug' => 'warehousing-and-storage-solutions',
        'name' => 'Warehousing & Storage',
        'icon' => 'bi-building-fill-lock',
        'color' => 'text-primary'
    ],
    [
        'slug' => 'insurance-coverage',
        'name' => 'Transit Insurance Coverage',
        'icon' => 'bi-shield-check',
        'color' => 'text-success'
    ]
];
?>
<!-- Services Navigation Sidebar -->
<div class="services-menu-card mb-4">
    <div class="services-menu-header d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center gap-2">
            <i class="bi bi-grid-fill text-brand-red fs-5"></i>
            <h3 class="fw-bold mb-0 text-navy fs-6">Other Relocation Services</h3>
        </div>
        <span class="badge bg-danger rounded-pill small">All Services</span>
    </div>
    <div class="p-3">
        <div class="d-flex flex-column gap-2">
            <?php foreach ($services_list as $srv): 
                $is_active = ($active_service === $srv['slug']);
            ?>
                <a href="<?= site_url($srv['slug']) ?>" class="service-menu-item <?= $is_active ? 'active' : '' ?>">
                    <div class="d-flex align-items-center gap-2">
                        <span class="service-menu-item-icon <?= $srv['color'] ?>">
                            <i class="bi <?= $srv['icon'] ?>"></i>
                        </span>
                        <span><?= $srv['name'] ?></span>
                    </div>
                    <?php if ($is_active): ?>
                        <span class="badge rounded-pill small">Active</span>
                    <?php else: ?>
                        <i class="bi bi-chevron-right text-muted small"></i>
                    <?php endif; ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>

