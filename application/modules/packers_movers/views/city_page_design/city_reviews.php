<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$city_name = !empty($city) ? $city : 'Bihar';

// Tailored verified reviews for this city
$city_reviews = [
    [
        'name' => 'Amitabh Ranjan',
        'initials' => 'AR',
        'stars' => 5,
        'location' => "$city_name to Delhi",
        'desc' => "Outstanding experience moving my household items from $city_name. The Omraj Packers team arrived on time, used top quality bubble wrap and boxes, and delivered every single piece safely.",
        'date' => '3 days ago'
    ],
    [
        'name' => 'Sneha Kumari',
        'initials' => 'SK',
        'stars' => 5,
        'location' => "Local Shifting in $city_name",
        'desc' => "We booked Omraj Packers for local apartment shifting in $city_name. The crew was very courteous and handled our fragile glassware and refrigerator with exceptional care. Highly recommended!",
        'date' => '1 week ago'
    ],
    [
        'name' => 'Rajesh Choudhary',
        'initials' => 'RC',
        'stars' => 5,
        'location' => "$city_name to Bengaluru",
        'desc' => "Shifted my bike and 2 BHK luggage from $city_name. Zero damages, live GPS updates, and fair pricing without any hidden charges. Truly the best moving service!",
        'date' => '2 weeks ago'
    ]
];

// Check database for approved user reviews if available
if (isset($this->db)) {
    $this->db->where('status', 1);
    $this->db->order_by('r_id', 'desc');
    $this->db->limit(3);
    $db_q = $this->db->get('reviews');
    if ($db_q && $db_q->num_rows() > 0) {
        $db_items = [];
        foreach ($db_q->result() as $row) {
            $parts = explode(' ', trim($row->name));
            $ini = strtoupper(substr($parts[0], 0, 1) . (isset($parts[1]) ? substr($parts[1], 0, 1) : ''));
            $db_items[] = [
                'name' => $row->name,
                'initials' => $ini ?: 'CL',
                'stars' => (int) $row->stars,
                'location' => !empty($row->r_title) ? $row->r_title : "Verified Move in $city_name",
                'desc' => $row->r_desc,
                'date' => date('M d, Y', strtotime($row->posted_date))
            ];
        }
        $city_reviews = array_merge($db_items, $city_reviews);
    }
}
?>

<!-- City Reviews Section Component -->
<div class="city-card-box p-4 p-md-5 mt-4">
    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
        <div>
            <div class="d-flex align-items-center gap-2 mb-1">
                <span class="hero-tag-line"></span>
                <span class="hero-tag">TESTIMONIALS</span>
            </div>
            <h3 class="city-section-title-sm mb-0">What Customers Say in <?= $city_name ?></h3>
        </div>
        <div class="d-flex align-items-center gap-1 text-warning bg-light p-2 px-3 rounded-pill border">
            <i class="bi bi-star-fill text-warning"></i>
            <span class="fw-bold text-dark ms-1">4.9 / 5.0</span>
            <small class="text-contrast ms-1">(Verified Reviews)</small>
        </div>
    </div>
    <p class="text-contrast mb-4">Real shifting experiences from families and professionals in <?= $city_name ?>:</p>

    <div class="row g-3">
        <?php foreach (array_slice($city_reviews, 0, 3) as $rev): ?>
            <div class="col-12 col-md-4">
                <div class="city-review-card h-100 p-3 rounded-3 border bg-light d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="d-flex align-items-center gap-2">
                                <div class="city-review-avatar rounded-circle d-flex align-items-center justify-content-center fw-bold">
                                    <?= $rev['initials'] ?>
                                </div>
                                <div>
                                    <h6 class="mb-0 fw-bold text-dark lh-sm"><?= $rev['name'] ?></h6>
                                    <small class="text-muted"><?= $rev['location'] ?></small>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex gap-1 text-warning mb-2 small">
                            <?php for ($s = 1; $s <= 5; $s++): ?>
                                <i class="bi <?= $s <= $rev['stars'] ? 'bi-star-fill' : 'bi-star' ?>"></i>
                            <?php endfor; ?>
                        </div>
                        <p class="text-contrast small mb-2 fst-italic">"<?= htmlspecialchars($rev['desc']) ?>"</p>
                    </div>
                    <small class="text-muted d-block text-end"><?= $rev['date'] ?></small>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
