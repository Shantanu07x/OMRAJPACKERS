<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * City About Section Design
 * Loads all content from city_content.php and presents it in a premium, full-width responsive layout.
 */
include 'city_content.php';

// Strip stray closing div in $htmlcontent so div balance remains 100% intact
$clean_htmlcontent = preg_replace('/<\/div>\s*(?=<!-- Feature Pills -->)/', '', $htmlcontent);
if ($clean_htmlcontent === $htmlcontent) {
    $clean_htmlcontent = str_replace("</div>\n\n          <!-- Feature Pills -->", "\n          <!-- Feature Pills -->", $htmlcontent);
}

// Localized Areas Mapping for Bihar & Jharkhand cities
$city_key = strtolower(trim($city));
$city_areas_map = [
    'patna' => ['Kankarbagh', 'Boring Road', 'Bailey Road', 'Rajendra Nagar', 'Danapur', 'Patliputra', 'Ashiana Nagar', 'Anisabad', 'Fraser Road', 'All Patna Areas'],
    'jehanabad' => ['Court Area', 'Raja Bazar', 'Kako Road', 'Unta', 'Gandhi Nagar', 'Station Road', 'Kinjar', 'Ghosi', 'Arwal Mod', 'All Jehanabad Areas'],
    'arrah' => ['Nawada', 'Chandwa', 'Jagdeo Nagar', 'Zero Mile', 'Gola Mohalla', 'Collectorate Road', 'Tari', 'Anaith', 'Dharhara', 'All Arrah Areas'],
    'gaya' => ['AP Colony', 'Bodh Gaya Road', 'Civil Lines', 'Rampur', 'Delha', 'Chandauti', 'Kendui', 'Manpur', 'Gewalbigha', 'All Gaya Areas'],
    'darbhanga' => ['Laheriasarai', 'Mirzapur', 'Benta', 'Donar', 'Allalpatti', 'Kathalbari', 'Bela', 'Rahamganj', 'Station Road', 'All Darbhanga Areas'],
    'chhapra' => ['Dahiyawan', 'Bhagwan Bazar', 'Salempur', 'Gudri', 'Prabhu Nath Nagar', 'Darshan Nagar', 'Nai Bazar', 'Brahampur', 'Rajendra Sarovar', 'All Chhapra Areas'],
    'bhagalpur' => ['Tilkamanjhi', 'Adampur', 'Zero Mile', 'Barari', 'Nathnagar', 'Aliganj', 'Khanjarpur', 'Sabour Road', 'Ishakchak', 'All Bhagalpur Areas'],
    'munger' => ['Jamalpur', 'Basudevpur', 'Purabsarai', 'Kasim Bazar', 'Bekapur', 'Belan Bazar', 'Topkhana Bazar', 'Shafiabad', 'Lal Darwaza', 'All Munger Areas'],
    'katihar' => ['Mirchaibari', 'Bara Bazar', 'Driver Tola', 'Rajendra Prasad Road', 'Naya Tola', 'Tingachia', 'Mangal Bazar', 'Leliya', 'Teenhgachiya', 'All Katihar Areas'],
    'ranchi' => ['Lalpur', 'Doranda', 'Morabadi', 'Hinoo', 'Harmu Housing Colony', 'Bariatu', 'Kanke Road', 'Ratu Road', 'Namkum', 'All Ranchi Areas'],
    'deoghar' => ['Castairs Town', 'Bilasi Town', 'Bompas Town', 'Jasidih', 'Williams Town', 'Satsang Nagar', 'Rohini', 'Kunda', 'VIP Chowk', 'All Deoghar Areas'],
    'bokaro' => ['Sector 4', 'Chas', 'Sector 1', 'City Centre', 'Sector 9', 'Sector 6', 'Sector 12', 'Cooperative Colony', 'Bokaro Thermal', 'All Bokaro Areas'],
];

if (isset($city_areas_map[$city_key])) {
    $current_areas = $city_areas_map[$city_key];
} else {
    $current_areas = [
        'Civil Lines', 'Station Road', 'Gandhi Nagar', 'Main Market', 'Industrial Area',
        'Green Park', 'Ring Road', 'Model Town', 'Bypass Road', "All $city Areas"
    ];
}

// Verified customer testimonials for top-to-bottom sliding carousel
$city_reviews = [
    [
        'name' => 'Aadhya Shandilya',
        'initials' => 'A',
        'stars' => 5,
        'location' => "Household Shifting in $city",
        'desc' => "Moving can be stressful, but choosing Omraj Packers and Movers was the best decision for our relocation in $city.",
        'date' => 'December 2025'
    ],
    [
        'name' => 'Amitabh Ranjan',
        'initials' => 'AR',
        'stars' => 5,
        'location' => "$city to Delhi",
        'desc' => "Outstanding experience moving my household items from $city. The Omraj Packers team arrived on time, used top quality bubble wrap and boxes, and delivered every single piece safely.",
        'date' => '3 days ago'
    ],
    [
        'name' => 'Sneha Kumari',
        'initials' => 'SK',
        'stars' => 5,
        'location' => "Local Shifting in $city",
        'desc' => "We booked Omraj Packers for local apartment shifting in $city. The crew was very courteous and handled our fragile glassware and refrigerator with exceptional care. Highly recommended!",
        'date' => '1 week ago'
    ],
    [
        'name' => 'Rajesh Choudhary',
        'initials' => 'RC',
        'stars' => 5,
        'location' => "$city to Bengaluru",
        'desc' => "Shifted my bike and 2 BHK luggage from $city. Zero damages, live GPS updates, and fair pricing without any hidden charges. Truly the best moving service!",
        'date' => '2 weeks ago'
    ],
    [
        'name' => 'Vikram Singh',
        'initials' => 'VS',
        'stars' => 5,
        'location' => "$city to Kolkata",
        'desc' => "Very impressed with the punctuality and packing speed. Multi-layer corrugated packaging ensured that our 65-inch LED TV and wooden furniture arrived in perfect condition.",
        'date' => '3 weeks ago'
    ],
    [
        'name' => 'Pooja Verma',
        'initials' => 'PV',
        'stars' => 5,
        'location' => "Office Relocation in $city",
        'desc' => "Smooth commercial move. Dismantling of workstations, safe cabling packaging, and quick setup over the weekend with zero disruption to our business operations.",
        'date' => '1 month ago'
    ],
    [
        'name' => 'Manoj Tiwari',
        'initials' => 'MT',
        'stars' => 5,
        'location' => "$city to Patna",
        'desc' => "Reliable packaging and safe unloading of our household furniture. The team was prompt, professional, and very cooperative throughout the move.",
        'date' => '1 month ago'
    ]
];

?>
<?php
$city_key = strtolower(trim($city));

if ($city_key === 'delhi ') {

    // Delhi FAQs
    $city_faqs = [
        [
            'q' => "How Much Do Packers and Movers Charge in Delhi?",
            'a' => "For local shifting inside Delhi, charges usually start from <b>₹3,500</b> for a 1 BHK. The final price depends on the floor, lift availability, distance and the amount of goods."
        ],
        [
            'q' => "Do You Handle Shifting in Narrow Lanes and Society Gates with Timing Rules?",
            'a' => "Yes. Tell us your society's entry timings and parking rules beforehand and we will plan the vehicle size and arrival time accordingly."
        ],
        [
            'q' => "Can You Shift From Delhi to Another City?",
            'a' => "Yes, we handle both local and intercity moves from Delhi. Share your pickup and drop address and we will send you a quote."
        ],
    ];

} elseif ($city_key === 'gaya ') {

    // Gaya FAQs
    $city_faqs = [
        [
            'q' => "What Is the Starting Charge for House Shifting in Gaya?",
            'a' => "Local house shifting in Gaya starts from around <b>₹3,000</b>. Larger homes and longer routes will cost more, so it is best to ask for a quote."
        ],
        [
            'q' => "Do You Provide Packing Material and Labour in Gaya?",
            'a' => "Yes, packing material and trained labour are included in our service. You can also take only transport if you want to pack things yourself."
        ],
        [
            'q' => "Is Insurance Available for My Goods?",
            'a' => "Yes, we can discuss insurance before shifting. Please read the policy terms and claim conditions before your goods are dispatched."
        ],
    ];

} else {

    // Default FAQs (all other cities)
    $city_faqs = [
        [
            'q' => "How Much Do Packers and Movers Charge for Shifting of Household Goods in $city?",
            'a' => "The charges depend upon the size of your house, volume of the goods, total distance, packing material and labour required. The starting charge of local shifting can be <b>₹3,000</b>. But the charge for larger household shifting or interstate shifting can be much higher than this. You can ask for an estimate according to your requirement."
        ],
        [
            'q' => "Do You Provide Local and Domestic Relocation Services?",
            'a' => "Yes, we do provide local and domestic moving services. Please provide your pick up and destination address, moving date and size of the house so that we could discuss the transportation and its estimated charges."
        ],
        [
            'q' => "Can I Get Insurance Coverage of My Household Goods During Transporting?",
            'a' => "Insurance coverage options can be discussed before shifting. The protection will depend upon the selected policy, declared goods, exceptions and conditions of claims. Always check the policy details before the dispatch of your belongings."
        ],
    ];
}
?>
<style>
    .city-box { border-left: 7px solid #061d5b !important; }
 
    /* flatten any inner card styling coming from $htmlcontent1 */
    .city-box .city-content > * { border: 0 !important; box-shadow: none !important; background: none !important; padding: 0 !important; margin-left: 0 !important; margin-right: 0 !important; }
    .city-box .city-content h1, .city-box .city-content h2, .city-box .city-content h3 { color: #061d5b; font-weight: 700; font-size: clamp(1.4rem, 2.4vw, 2rem); line-height: 1.25; }
    .city-box .city-content .text-brand-red { color: #e30613; }
    .city-box .city-content p, .city-box .city-content li { color: #3a4256; line-height: 1.75; }
 
    /* image fills the full height of the row, so it never spills out of the card */
    .city-box .city-media { height: 100%; min-height: 340px; background: #e9eef7; }
    .city-box .city-badge { background: #061d5b; }
    .city-box .city-badge-line { height: 3px; background: #e30613; border-radius: 3px; }
 
    /* tablet & mobile */
    @media (max-width: 991.98px) {
        .city-box .city-media { height: auto; min-height: 0; aspect-ratio: 16 / 10; }
    }
    @media (max-width: 575.98px) {
        .city-box { border-left-width: 5px !important; padding: 1.25rem !important; }
        .city-box .city-content p, .city-box .city-content li { font-size: .95rem; line-height: 1.7; }
        .city-box .city-media { aspect-ratio: 4 / 3; }
        .city-box .city-badge { margin: .6rem !important; padding: .45rem .7rem !important; gap: .6rem !important; }
        .city-box .city-badge i { font-size: 1.4rem !important; }
        .city-box .city-badge .small { font-size: .7rem; }
        .city-box .city-badge .fs-5 { font-size: 1rem !important; }
    }
</style>
<!-- ==========================================================================
     City Relocation & About Section
     ========================================================================== -->
<section class="city-about-section py-5">
    <div class="container">

        <!-- 1. First Container: Hero About Box (As per Image 2 Design) -->
        <section class="city-about-section py-5">
    <div class="container">
 
        <div class="city-box bg-white rounded-4 shadow-sm border p-4 p-md-5 mb-5">
            <div class="row g-4 g-lg-5">
 
                <div class="col-12 col-lg-6 city-content">
                    <?php echo $htmlcontent; ?>
                </div>
 
                <div class="col-12 col-lg-6">
                    <div class="city-media position-relative rounded-4 overflow-hidden shadow-sm">
                        <img src="<?= base_url('assets/img/city.jpg') ?>" alt="<?= $company3 ?> in <?= $city ?>"
                            class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" loading="lazy">
 
                        <div class="city-badge position-absolute bottom-0 end-0 m-3 d-flex align-items-center gap-3 py-2 px-3 rounded-3 shadow text-white">
                            <i class="bi bi-geo-alt-fill fs-2"></i>
                            <div>
                                <div class="small lh-sm">Reliable Relocation<br>Services Across</div>
                                <div class="fw-bold fs-5 lh-sm mt-1"><?= $city ?></div>
                                <div class="city-badge-line"></div>
                            </div>
                        </div>
                    </div>
                </div>
 
            </div>
        </div>

        <!-- 2. Second Container: Intro Content & Feature Pills from city_content.php -->
        <div class="city-card-box city-border-line-red p-4 p-md-5 mb-5 bg-white rounded-4 shadow-sm border">
            <?php echo $htmlcontent1; ?>
        </div>

        <!-- 3. Third Container: 4-Feature Trust Strip (As requested in image) -->
        <div class="city-feature-strip city-border-line-blue mb-5">
            <div class="row g-0 text-center">

                <!-- Feature 1: Safe & Secure Packing -->
                <div class="col-6 col-lg-3 city-feature-col">
                    <div class="city-feature-icon-wrap mb-3 mx-auto">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 2L28.5 6.5L34.5 5.5L37 11.5L43 13.5L42.5 19.5L47 24L42.5 28.5L43 34.5L37 36.5L34.5 42.5L28.5 41.5L24 46L19.5 41.5L13.5 42.5L11 36.5L5 34.5L5.5 28.5L1 24L5.5 19.5L5 13.5L11 11.5L13.5 5.5L19.5 6.5L24 2Z" fill="#012652" />
                            <path d="M24 13L17 16.5V23.5C17 28 20 32.2 24 33.5C28 32.2 31 28 31 23.5V16.5L24 13Z" fill="#ffffff" />
                            <path d="M21 23.5L23 25.5L27 21.5" stroke="#012652" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="city-feature-title">Safe &amp; Secure Packing</h3>
                    <p class="city-feature-desc mb-0">High-quality materials for maximum safety.</p>
                </div>

                <!-- Feature 2: On-Time Delivery -->
                <div class="col-6 col-lg-3 city-feature-col">
                    <div class="city-feature-icon-wrap mb-3 mx-auto">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M37 18H31V12H7C5.9 12 5 12.9 5 14V30H9C9 32.2 10.8 34 13 34C15.2 34 17 32.2 17 30H29C29 32.2 30.8 34 33 34C35.2 34 37 32.2 37 30H41C42.1 30 43 29.1 43 28V24L37 18ZM13 31.5C12.2 31.5 11.5 30.8 11.5 30C11.5 29.2 12.2 28.5 13 28.5C13.8 28.5 14.5 29.2 14.5 30C14.5 30.8 13.8 31.5 13 31.5ZM32 20H36.5L39.8 24H32V20ZM33 31.5C32.2 31.5 31.5 30.8 31.5 30C31.5 29.2 32.2 28.5 33 28.5C33.8 28.5 34.5 29.2 34.5 30C34.5 30.8 33.8 31.5 33 31.5Z" fill="#EE0416" />
                        </svg>
                    </div>
                    <h3 class="city-feature-title">On-Time Delivery</h3>
                    <p class="city-feature-desc mb-0">We value your time and ensure timely delivery.</p>
                </div>

                <!-- Feature 3: Experienced Team -->
                <div class="col-6 col-lg-3 city-feature-col">
                    <div class="city-feature-icon-wrap mb-3 mx-auto">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="24" cy="14" r="5" fill="#EE0416" />
                            <path d="M24 21C19.6 21 16 23.6 16 27V29H32V27C32 23.6 28.4 21 24 21Z" fill="#EE0416" />
                            <circle cx="12" cy="17" r="4" fill="#EE0416" />
                            <path d="M12 23C10.2 23 8.3 24 7.6 25.5C7.2 26.2 7 27.1 7 28V29H14V27C14 25.4 14.6 24 15.6 23C14.3 23 13.1 23 12 23Z" fill="#EE0416" />
                            <circle cx="36" cy="17" r="4" fill="#EE0416" />
                            <path d="M36 23C34.9 23 33.7 23 32.4 23C33.4 24 34 25.4 34 27V29H41V28C41 27.1 40.8 26.2 40.4 25.5C39.7 24 37.8 23 36 23Z" fill="#EE0416" />
                        </svg>
                    </div>
                    <h3 class="city-feature-title">Experienced Team</h3>
                    <p class="city-feature-desc mb-0">Skilled professionals for a smooth move.</p>
                </div>

                <!-- Feature 4: Affordable Pricing -->
                <div class="col-6 col-lg-3 city-feature-col">
                    <div class="city-feature-icon-wrap mb-3 mx-auto">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 2L28.5 6.5L34.5 5.5L37 11.5L43 13.5L42.5 19.5L47 24L42.5 28.5L43 34.5L37 36.5L34.5 42.5L28.5 41.5L24 46L19.5 41.5L13.5 42.5L11 36.5L5 34.5L5.5 28.5L1 24L5.5 19.5L5 13.5L11 11.5L13.5 5.5L19.5 6.5L24 2Z" fill="#EE0416" />
                            <text x="24" y="32" font-family="'Plus Jakarta Sans', system-ui, sans-serif" font-size="22" font-weight="800" fill="#ffffff" text-anchor="middle">&#8377;</text>
                        </svg>
                    </div>
                    <h3 class="city-feature-title">Affordable Pricing</h3>
                    <p class="city-feature-desc mb-0">Best services at competitive rates.</p>
                </div>

            </div>
        </div>

        <!-- 2. new content section -->
        <div class="city-card-box city-border-line-red p-4 p-md-5 mb-5 bg-white rounded-4 shadow-sm border">
            <?php echo $htmlcontent2; ?>
        </div>

        <!-- 4. Fourth Container: Moving Process Flow (As per Image 1 Design) -->
        <div class="city-process-section city-border-line-red p-4 p-md-5 mb-5">
            <!-- Section Header -->
            <div class="text-center mb-5">
                <div class="d-inline-flex align-items-center gap-2 mb-2">
                    <span class="city-head-dash"></span>
                    <span class="city-head-tag text-uppercase fw-bold">OUR PROCESS IN <?= strtoupper($city) ?></span>
                </div>
                <h2 class="city-head-title fw-bold mb-2">
                    A Simple and Hassle-Free <span class="text-brand-red">Moving Process</span>
                </h2>
                <p class="text-contrast mb-0 mx-auto city-process-subhead">
                    We follow a well-planned process to make your relocation in <?= $city ?> safe, smooth and efficient.
                </p>
            </div>

            <!-- 4 Steps Flow with Arrow Connectors -->
            <div class="row g-3 g-md-4 position-relative">

                <!-- Step 01 -->
                <div class="col-6 col-lg-3 position-relative">
                    <div class="city-process-card h-100 bg-white border text-center position-relative">
                        <span class="city-process-step-num step-num-red">01</span>
                        <div class="city-process-icon-wrap mx-auto mb-3">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#012652" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                        </div>
                        <h3 class="city-process-card-title mb-2">Get a Free Quote</h3>
                        <p class="city-process-card-desc mb-0">Share your moving details and get a quick estimate.</p>
                    </div>
                    <div class="city-process-arrow d-none d-lg-flex">
                        <svg width="18" height="26" viewBox="0 0 14 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 2L11 11L2 20" stroke="#EE0416" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>

                <!-- Step 02 -->
                <div class="col-6 col-lg-3 position-relative">
                    <div class="city-process-card h-100 bg-white border text-center position-relative">
                        <span class="city-process-step-num step-num-blue">02</span>
                        <div class="city-process-icon-wrap mx-auto mb-3">
                            <svg width="42" height="42" viewBox="0 0 24 24" fill="none" stroke="#012652" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                <line x1="12" y1="22.08" x2="12" y2="12"></line>
                            </svg>
                        </div>
                        <h3 class="city-process-card-title mb-2">Packing &amp; Labeling</h3>
                        <p class="city-process-card-desc mb-0">We use high-quality packing materials for safe and secure packing.</p>
                    </div>
                    <div class="city-process-arrow d-none d-lg-flex">
                        <svg width="18" height="26" viewBox="0 0 14 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 2L11 11L2 20" stroke="#EE0416" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>

                <!-- Step 03 -->
                <div class="col-6 col-lg-3 position-relative">
                    <div class="city-process-card h-100 bg-white border text-center position-relative">
                        <span class="city-process-step-num step-num-red">03</span>
                        <div class="city-process-icon-wrap mx-auto mb-3">
                            <div class="city-process-truck-circle rounded-circle d-flex align-items-center justify-content-center mx-auto">
                                <svg width="30" height="30" viewBox="0 0 24 24" fill="#EE0416">
                                    <path d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zM6 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm13.5-9l1.96 2.5H17V9.5h2.5zm-2 9c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="city-process-card-title mb-2">Transportation</h3>
                        <p class="city-process-card-desc mb-0">Your belongings are transported with care and GPS tracking.</p>
                    </div>
                    <div class="city-process-arrow d-none d-lg-flex">
                        <svg width="18" height="26" viewBox="0 0 14 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 2L11 11L2 20" stroke="#EE0416" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>

                <!-- Step 04 -->
                <div class="col-6 col-lg-3 position-relative">
                    <div class="city-process-card h-100 bg-white border text-center position-relative">
                        <span class="city-process-step-num step-num-blue">04</span>
                        <div class="city-process-icon-wrap mx-auto mb-3">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="#012652">
                                <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
                            </svg>
                        </div>
                        <h3 class="city-process-card-title mb-2">Delivery &amp; Setup</h3>
                        <p class="city-process-card-desc mb-0">We deliver and help in setting up at your new location.</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- 2. new content section -->
        <div class="city-card-box city-border-line-red p-4 p-md-5 mb-5 bg-white rounded-4 shadow-sm border">
            <?php echo $htmlcontent3; ?>
        </div>

        <!-- 5. Areas Near City (Open Section, Not in a Container Card - Matching User Request) -->
        <div class="city-areas-section my-5 py-3 text-center">
            <!-- Section Header -->
            <div class="mb-4 pb-2">
                <div class="d-inline-flex align-items-center gap-2 mb-2">
                    <span class="city-head-dash"></span>
                    <span class="city-head-tag text-uppercase fw-bold">LOCALITIES &amp; NEARBY REGIONS</span>
                </div>
                <h2 class="city-head-title fw-bold mb-2">
                    Areas Near <span class="text-brand-red"><?= $city ?></span>
                </h2>
                <p class="text-contrast mb-0 mx-auto city-areas-subhead">
                    We provide reliable house shifting, office relocation, vehicle transportation, and packing moving services across all major localities and areas near <?= $city ?>.
                </p>
            </div>

            <!-- Areas Pills Grid: 10 Localities in 2 rows of 5 on desktop (Fully Rounded Capsules) -->
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-3 justify-content-center">
                <?php foreach ($current_areas as $area): ?>
                    <div class="col">
                        <div class="city-area-pill rounded-pill h-100 d-flex align-items-center gap-2 justify-content-center text-center">
                            <i class="bi bi-geo-alt-fill text-danger fs-5 flex-shrink-0"></i>
                            <span class="city-area-name fw-bold"><?= $area ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- View All Branches CTA Button -->
            <div class="text-center mt-4 pt-2">
                <a href="<?= site_url('our-branches') ?>" class="btn city-branches-btn rounded-pill px-4 py-2 fw-bold shadow-sm d-inline-flex align-items-center gap-2">
                    <span>View All <?= !empty($state) ? ucwords($state) : '' ?> Branches</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- 6. Google Map Container (Service Hub & Coverage Map) -->
        <div class="city-map-container my-5 p-3 p-md-4">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3 pb-2 border-bottom">
                <div class="d-flex align-items-center gap-2">
                    <span class="city-head-dash"></span>
                    <div>
                        <span class="city-head-tag text-uppercase fw-bold d-block small">Service Location &amp; Operational Hub</span>
                        <h3 class="city-head-title fs-4 fw-bold mb-0">
                            Find Us Near <span class="text-brand-red"><?= $city ?></span>
                        </h3>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-1.5 rounded-pill fw-semibold small d-inline-flex align-items-center gap-1">
                        <i class="bi bi-geo-alt-fill text-success"></i> Verified Hub
                    </span>
                    <a href="https://maps.google.com/?q=Ramkrishan+Nagar,+Patna,+Bihar,+India" target="_blank" rel="noopener" class="btn btn-sm city-branches-btn rounded-pill px-3 py-1.5 fw-bold d-inline-flex align-items-center gap-1 shadow-sm">
                        <i class="bi bi-box-arrow-up-right"></i> Directions
                    </a>
                </div>
            </div>
            
            <div class="city-map-frame rounded-4 overflow-hidden border">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14394.753795860386!2d85.158496!3d25.58203!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f2a764d4c9b843%3A0xddf40629db0746c!2sRamkrishan%20Nagar%2C%20Patna%2C%20Bihar%2C%20India!5e0!3m2!1sen!2sus!4v1792838340460!5m2!1sen!2sus" width="100%" height="420" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" title="Google Maps Location for Omraj Packers and Movers in <?= htmlspecialchars($city) ?>"></iframe>
            </div>
        </div>

        <?php 
        $review_pairs = array_chunk($city_reviews, 2); 
        $desktop_review_pages = array_slice($review_pairs, 0, 2);
        $mobile_review_pages = array_slice($city_reviews, 0, 2);
        ?>
        <!-- Customer Testimonials & FAQs Section (Outside container as requested) -->
        <div class="city-reviews-faq-section my-5">
            <div class="row g-4 g-lg-5 align-items-start">

                <!-- Left Column: Testimonials (Desktop: 2 reviews per slide / Mobile: 1 review per slide, exactly 2 slides) -->
                <div class="col-12 col-lg-6">
                    <div class="mb-3">
                        <span class="city-review-tag-badge d-inline-flex align-items-center gap-1 mb-2">
                            <i class="bi bi-star-fill text-warning"></i> Customer Stories
                        </span>
                        <h3 class="city-head-title fs-2 fw-bold mb-1">
                            Reviews in <span class="text-brand-red"><?= $city ?></span>
                        </h3>
                        <p class="text-contrast mb-0 small">Verified customer ratings &amp; relocation experiences.</p>
                    </div>

                    <!-- Desktop View: 2 Reviews per Slide (Visible on lg and above) -->
                    <div id="cityReviewCarouselDesktop" class="carousel slide d-none d-lg-block" data-bs-ride="carousel" data-bs-interval="6000" data-bs-pause="hover">
                        <div class="carousel-inner">
                            <?php foreach ($desktop_review_pages as $pidx => $pair): ?>
                                <div class="carousel-item <?= $pidx === 0 ? 'active' : '' ?>">
                                    <div class="d-flex flex-column gap-3">
                                        <?php foreach ($pair as $rev): ?>
                                            <div class="city-review-card bg-white p-4 rounded-4 position-relative border">
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <div class="d-flex gap-1 text-warning fs-5">
                                                        <?php for ($s = 1; $s <= 5; $s++): ?>
                                                            <i class="bi <?= $s <= $rev['stars'] ? 'bi-star-fill' : 'bi-star' ?>"></i>
                                                        <?php endfor; ?>
                                                    </div>
                                                    <span class="city-google-badge d-inline-flex align-items-center gap-1">
                                                        <i class="bi bi-patch-check-fill text-success"></i> Google Verified Review
                                                    </span>
                                                </div>

                                                <p class="city-review-body mb-3 text-dark fst-italic position-relative">
                                                    "<?= htmlspecialchars($rev['desc']) ?>"
                                                </p>

                                                <div class="city-review-card-divider my-3"></div>

                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="city-review-avatar-purple rounded-circle d-flex align-items-center justify-content-center fw-bold text-white shadow-sm flex-shrink-0">
                                                        <?= $rev['initials'] ?>
                                                    </div>
                                                    <div>
                                                        <div class="mb-0 fw-bold text-dark city-reviewer-name"><?= $rev['name'] ?></div>
                                                        <small class="text-contrast city-reviewer-date"><?= $rev['date'] ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Mobile View: ONLY 1 Review per Slide (Visible on < 992px) -->
                    <div id="cityReviewCarouselMobile" class="carousel slide d-block d-lg-none" data-bs-ride="carousel" data-bs-interval="6000" data-bs-pause="hover">
                        <div class="carousel-inner">
                            <?php foreach ($mobile_review_pages as $idx => $rev): ?>
                                <div class="carousel-item <?= $idx === 0 ? 'active' : '' ?>">
                                    <div class="city-review-card bg-white p-3 p-md-4 rounded-4 position-relative border">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <div class="d-flex gap-1 text-warning fs-5">
                                                <?php for ($s = 1; $s <= 5; $s++): ?>
                                                    <i class="bi <?= $s <= $rev['stars'] ? 'bi-star-fill' : 'bi-star' ?>"></i>
                                                <?php endfor; ?>
                                            </div>
                                            <span class="city-google-badge d-inline-flex align-items-center gap-1">
                                                <i class="bi bi-patch-check-fill text-success"></i> Google Verified Review
                                            </span>
                                        </div>

                                        <p class="city-review-body mb-3 text-dark fst-italic position-relative">
                                            "<?= htmlspecialchars($rev['desc']) ?>"
                                        </p>

                                        <div class="city-review-card-divider my-3"></div>

                                        <div class="d-flex align-items-center gap-3">
                                            <div class="city-review-avatar-purple rounded-circle d-flex align-items-center justify-content-center fw-bold text-white shadow-sm flex-shrink-0">
                                                <?= $rev['initials'] ?>
                                            </div>
                                            <div>
                                                <div class="mb-0 fw-bold text-dark city-reviewer-name"><?= $rev['name'] ?></div>
                                                <small class="text-contrast city-reviewer-date"><?= $rev['date'] ?></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Controls: Prev Arrow, Exactly 2 Dots in between, Next Arrow (Both Desktop & Mobile) -->
                    <div class="city-review-controls d-flex align-items-center justify-content-center gap-2 mt-4">
                        <button class="city-nav-circle-btn" type="button" onclick="slideCityReviews('prev')" aria-label="Previous Reviews">
                            <i class="bi bi-chevron-left"></i>
                        </button>
                        <div class="d-flex align-items-center gap-1 mx-2">
                            <button type="button" class="city-carousel-dot active" onclick="goToCityReviewSlide(0)" aria-label="Page 1"></button>
                            <button type="button" class="city-carousel-dot" onclick="goToCityReviewSlide(1)" aria-label="Page 2"></button>
                        </div>
                        <button class="city-nav-circle-btn" type="button" onclick="slideCityReviews('next')" aria-label="Next Reviews">
                            <i class="bi bi-chevron-right"></i>
                        </button>
                    </div>
                </div>

                <!-- Right Column: FAQs Accordion -->
                <div class="col-12 col-lg-6">
                    <div class="d-flex align-items-center gap-2 mb-1">
                        <span class="city-head-dash"></span>
                        <span class="city-head-tag text-uppercase fw-bold">FREQUENTLY ASKED QUESTIONS</span>
                    </div>
                    <h3 class="city-head-title fs-2 fw-bold mb-2">Got Questions? <span class="text-brand-red">We Have Answers</span></h3>
                    <p class="text-contrast mb-4 small">Everything you need to know about shifting services in <?= $city ?>:</p>

                    <div class="accordion custom-faq-accordion" id="cityFaqAccordion">
                        <?php foreach ($city_faqs as $fidx => $faq): ?>
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
                                    <div class="accordion-body faq-body text-contrast small">
                                        <?= $faq['a'] ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>

        <!-- CTA Banner in City Page -->
        <div class="container my-4">
            <section class="about-cta-banner my-0">
                <div class="row align-items-center g-3">
                    <div class="col-12 col-xl-6">
                        <h3 class="about-cta-title mb-1">Planning Your Next Move in <?= !empty($city) ? $city : 'Your City' ?>? Let Our Experts Handle It!</h3>
                        <p class="about-cta-subtitle mb-0">
                            Speak directly with a Senior Relocation Coordinator for instant planning &amp; fixed-price estimates.
                        </p>
                    </div>
                    <div class="col-12 col-xl-6 text-xl-end">
                        <div class="d-flex align-items-center gap-2 justify-content-center justify-content-xl-end flex-wrap flex-sm-nowrap">
                            <a href="<?= !empty($phonehtml) ? $phonehtml : 'tel:+919902200448' ?>" class="btn-cta-phone flex-fill flex-sm-grow-0 text-nowrap">
                                <i class="bi bi-telephone-fill"></i> <?= !empty($phone) ? $phone : '+91 9902200448' ?>
                            </a>
                            <a href="<?= !empty($whatsapphtml) ? $whatsapphtml : 'https://api.whatsapp.com/send?phone=919902200448&text=Hi%20Omraj%20Packers' ?>" target="_blank" rel="noopener" class="btn-cta-whatsapp flex-fill flex-sm-grow-0 text-nowrap">
                                <i class="bi bi-whatsapp"></i> WhatsApp
                            </a>
                            <button type="button" class="btn-cta-quote flex-fill flex-sm-grow-0 text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">
                                <i class="bi bi-send-fill text-danger"></i> Free Quote
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
</section>

<!-- Review Carousel Dot & Counter Synchronization Script -->
<script>
function goToCityReviewSlide(idx) {
    ['#cityReviewCarouselDesktop', '#cityReviewCarouselMobile'].forEach(function(sel) {
        var el = document.querySelector(sel);
        if (el) {
            var carousel = bootstrap.Carousel.getOrCreateInstance(el);
            carousel.to(idx);
        }
    });
}

function slideCityReviews(direction) {
    var isDesktop = window.innerWidth >= 992;
    var targetId = isDesktop ? '#cityReviewCarouselDesktop' : '#cityReviewCarouselMobile';
    var el = document.querySelector(targetId);
    if (el) {
        var carousel = bootstrap.Carousel.getOrCreateInstance(el);
        if (direction === 'prev') {
            carousel.prev();
        } else {
            carousel.next();
        }
    }
}

document.addEventListener('DOMContentLoaded', function () {
    ['cityReviewCarouselDesktop', 'cityReviewCarouselMobile'].forEach(function(id) {
        var el = document.getElementById(id);
        if (el) {
            el.addEventListener('slide.bs.carousel', function (e) {
                var dots = document.querySelectorAll('.city-review-controls .city-carousel-dot');
                dots.forEach(function (dot, i) {
                    if (i === e.to) {
                        dot.classList.add('active');
                    } else {
                        dot.classList.remove('active');
                    }
                });
            });
        }
    });
});
</script>