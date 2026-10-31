<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$city_name = !empty($city) ? $city : 'Bihar';
$comp_name = !empty($company3) ? $company3 : 'Omraj Packers and Movers';

$faqs = [
    [
        'q' => "How are moving and packing charges calculated in $city_name?",
        'a' => "Charges depend on the volume of goods (1 BHK, 2 BHK, 3 BHK), distance between origin and destination in or outside $city_name, floor levels, lift availability, and packing quality. $comp_name provides free upfront quotations without any hidden costs."
    ],
    [
        'q' => "Do you provide transit insurance for shifting in $city_name?",
        'a' => "Yes, $comp_name offers 100% comprehensive transit insurance covering your household goods, electronics, and vehicles against any transit risks or accidental damage during the move."
    ],
    [
        'q' => "How early should I book my relocation in $city_name?",
        'a' => "We recommend booking 2 to 4 days in advance. For month-end, weekend, or festive moves in $city_name, booking 5 to 7 days ahead guarantees your preferred moving slot and dedicated transport truck."
    ],
    [
        'q' => "Can you transport my two-wheeler or car from $city_name?",
        'a' => "Absolutely! We provide enclosed car carrier trailers and specialized wooden crating for two-wheelers with door-to-door delivery from $city_name to any location across India."
    ],
    [
        'q' => "Do your team members help in unpacking and rearranging items?",
        'a' => "Yes, our trained crew assists in careful unloading, unpacking, and positioning heavy furniture and large appliances at your new residence in $city_name."
    ]
];
?>

<!-- City FAQ Section Component -->
<div class="city-card-box p-4 p-md-5 mt-4">
    <div class="d-flex align-items-center gap-2 mb-2">
        <span class="hero-tag-line"></span>
        <span class="hero-tag">FAQS IN <?= strtoupper($city_name) ?></span>
    </div>
    <h3 class="city-section-title-sm mb-2">Frequently Asked Questions in <?= $city_name ?></h3>
    <p class="text-contrast mb-4">Quick answers to common questions about relocation, pricing, and safety in <?= $city_name ?>:</p>

    <div class="accordion custom-faq-accordion" id="cityFaqAccordion">
        <?php foreach ($faqs as $fidx => $faq): ?>
            <div class="accordion-item faq-item mb-3 rounded-3 shadow-sm overflow-hidden border">
                <h4 class="accordion-header" id="cityFaqHead_<?= $fidx ?>">
                    <button class="accordion-button faq-btn <?= $fidx > 0 ? 'collapsed' : '' ?> fw-bold" 
                            type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#cityFaqCollapse_<?= $fidx ?>" 
                            aria-expanded="<?= $fidx === 0 ? 'true' : 'false' ?>" 
                            aria-controls="cityFaqCollapse_<?= $fidx ?>">
                        <span class="faq-q-number me-3 fw-bold"><?= sprintf('%02d', $fidx + 1) ?></span>
                        <span class="faq-q-text flex-grow-1 text-dark"><?= $faq['q'] ?></span>
                    </button>
                </h4>
                <div id="cityFaqCollapse_<?= $fidx ?>" 
                     class="accordion-collapse collapse <?= $fidx === 0 ? 'show' : '' ?>" 
                     aria-labelledby="cityFaqHead_<?= $fidx ?>" 
                     data-bs-parent="#cityFaqAccordion">
                    <div class="accordion-body faq-body text-contrast">
                        <?= $faq['a'] ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
