<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Frequently Asked Questions (FAQs)',
    'bc_desc' => "Find Clear, Reliable Answers to All Your Relocation, Packing & Safety Queries",
    'breadcrumbs' => [
        ['name' => 'About Us', 'url' => site_url('about-us')],
        ['name' => 'FAQs']
    ]
]);
?>

<!-- ==========================================================================
     Dedicated FAQs Page Section (12 Comprehensive Relocation FAQs)
     ========================================================================== -->
<section id="faqs" class="faqs-section py-5 py-lg-6 position-relative">
    <div class="container position-relative">

        <!-- Section Header -->
        <div class="text-center mb-4 mb-lg-5">
            <div class="section-tag-badge justify-content-center">
                <span class="section-tag-line"></span>
                <span class="section-tag-text">HELP &amp; KNOWLEDGE BASE</span>
            </div>
            <h2 class="services-main-title mt-1 mb-2">
                Frequently Asked <span class="services-title-red">Questions</span>
            </h2>
            <p class="faqs-header-subtitle text-muted mx-auto mb-0">
                Detailed answers to common questions about moving schedules, packing safety, vehicle transit, insurance, and billing.
            </p>
        </div>

        <!-- Full-Width Column: Accordion (col-12) -->
        <div class="row g-4 justify-content-center">
            <div class="col-12">
                <div class="accordion custom-faq-accordion" id="faqAccordionPage">

                    <!-- FAQ Item 01 -->
                    <div class="accordion-item faq-item">
                        <h3 class="accordion-header" id="pageHeadingOne">
                            <button class="accordion-button faq-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pageCollapseOne" aria-expanded="true" aria-controls="pageCollapseOne">
                                <span class="faq-q-number me-3">01</span>
                                <span class="faq-q-text flex-grow-1">How far in advance should I book my relocation service?</span>
                            </button>
                        </h3>
                        <div id="pageCollapseOne" class="accordion-collapse collapse show" aria-labelledby="pageHeadingOne"
                            data-bs-parent="#faqAccordionPage">
                            <div class="accordion-body faq-body">
                                We recommend booking your move at least 3 to 7 days in advance for local household shifting, and 7 to 14 days ahead for long-distance domestic relocation. Early booking guarantees vehicle availability, preferred moving day time slots, and allows our relocation managers to conduct a pre-move inventory survey.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 02 -->
                    <div class="accordion-item faq-item">
                        <h3 class="accordion-header" id="pageHeadingTwo">
                            <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pageCollapseTwo" aria-expanded="false" aria-controls="pageCollapseTwo">
                                <span class="faq-q-number me-3">02</span>
                                <span class="faq-q-text flex-grow-1">Will your team dismantle and reinstall my furniture at the destination?</span>
                            </button>
                        </h3>
                        <div id="pageCollapseTwo" class="accordion-collapse collapse" aria-labelledby="pageHeadingTwo"
                            data-bs-parent="#faqAccordionPage">
                            <div class="accordion-body faq-body">
                                Absolutely. Our trained moving crews come equipped with power tools, screwdrivers, and drills to safely dismantle large beds, modular wardrobes, and dining tables, and reassemble them neatly at your new destination.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 03 -->
                    <div class="accordion-item faq-item">
                        <h3 class="accordion-header" id="pageHeadingThree">
                            <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pageCollapseThree" aria-expanded="false" aria-controls="pageCollapseThree">
                                <span class="faq-q-number me-3">03</span>
                                <span class="faq-q-text flex-grow-1">How can I track my shipment during transit?</span>
                            </button>
                        </h3>
                        <div id="pageCollapseThree" class="accordion-collapse collapse" aria-labelledby="pageHeadingThree"
                            data-bs-parent="#faqAccordionPage">
                            <div class="accordion-body faq-body">
                                All our container fleet vehicles are equipped with real-time GPS tracking units. Your dedicated relocation coordinator shares daily milestone updates, checkpoint notifications, and expected delivery time directly via WhatsApp and phone.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 04 -->
                    <div class="accordion-item faq-item">
                        <h3 class="accordion-header" id="pageHeadingFour">
                            <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pageCollapseFour" aria-expanded="false" aria-controls="pageCollapseFour">
                                <span class="faq-q-number me-3">04</span>
                                <span class="faq-q-text flex-grow-1">What type of packaging materials do you use for delicate items?</span>
                            </button>
                        </h3>
                        <div id="pageCollapseFour" class="accordion-collapse collapse" aria-labelledby="pageHeadingFour"
                            data-bs-parent="#faqAccordionPage">
                            <div class="accordion-body faq-body">
                                We utilize our proprietary 5-layer protective packing protocol. This includes virgin bubble wrap, edge guards, thermocol cushioning, stretch film, heavy-duty 7-ply corrugated cartons, and custom wooden crating for delicate items like LED TVs, glass tabletops, and artwork.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 05 -->
                    <div class="accordion-item faq-item">
                        <h3 class="accordion-header" id="pageHeadingFive">
                            <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pageCollapseFive" aria-expanded="false" aria-controls="pageCollapseFive">
                                <span class="faq-q-number me-3">05</span>
                                <span class="faq-q-text flex-grow-1">How do you transport cars and two-wheelers safely?</span>
                            </button>
                        </h3>
                        <div id="pageCollapseFive" class="accordion-collapse collapse" aria-labelledby="pageHeadingFive"
                            data-bs-parent="#faqAccordionPage">
                            <div class="accordion-body faq-body">
                                Vehicles are transported using specialized covered car carrier trailers with hydraulic lift ramps and secure wheel-lock clamps. Two-wheelers receive multi-layer scratch-guard wrapping and are tethered with heavy-duty safety ratchet belts inside covered container trucks.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 06 -->
                    <div class="accordion-item faq-item">
                        <h3 class="accordion-header" id="pageHeadingSix">
                            <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pageCollapseSix" aria-expanded="false" aria-controls="pageCollapseSix">
                                <span class="faq-q-number me-3">06</span>
                                <span class="faq-q-text flex-grow-1">Do you offer secure warehousing or temporary storage services?</span>
                            </button>
                        </h3>
                        <div id="pageCollapseSix" class="accordion-collapse collapse" aria-labelledby="pageHeadingSix"
                            data-bs-parent="#faqAccordionPage">
                            <div class="accordion-body faq-body">
                                Yes. We manage pest-controlled, CCTV-monitored, fire-protected warehouse facilities across key metropolitan hubs in India. You can safely store household or commercial goods on both short-term (weekly) and long-term (monthly) arrangements.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 07 -->
                    <div class="accordion-item faq-item">
                        <h3 class="accordion-header" id="pageHeadingSeven">
                            <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pageCollapseSeven" aria-expanded="false" aria-controls="pageCollapseSeven">
                                <span class="faq-q-number me-3">07</span>
                                <span class="faq-q-text flex-grow-1">Are there any hidden fees or extra moving-day surcharges?</span>
                            </button>
                        </h3>
                        <div id="pageCollapseSeven" class="accordion-collapse collapse" aria-labelledby="pageHeadingSeven"
                            data-bs-parent="#faqAccordionPage">
                            <div class="accordion-body faq-body">
                                No. We practice 100% price transparency. Our written relocation quotation is all-inclusive, covering packing, labor, loading, freight, toll taxes, and doorstep unloading. You will never encounter surprise charges or moving-day demands from our team.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 08 -->
                    <div class="accordion-item faq-item">
                        <h3 class="accordion-header" id="pageHeadingEight">
                            <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pageCollapseEight" aria-expanded="false" aria-controls="pageCollapseEight">
                                <span class="faq-q-number me-3">08</span>
                                <span class="faq-q-text flex-grow-1">Which items are prohibited from being loaded into the moving truck?</span>
                            </button>
                        </h3>
                        <div id="pageCollapseEight" class="accordion-collapse collapse" aria-labelledby="pageHeadingEight"
                            data-bs-parent="#faqAccordionPage">
                            <div class="accordion-body faq-body">
                                For safety and statutory compliance, we cannot transport hazardous chemicals, gas cylinders, fuel, explosives, flammable liquids, perishable foods, pets, cash, jewelry, and critical personal legal documents. Clients are requested to carry valuables and legal certificates personally.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 09 -->
                    <div class="accordion-item faq-item">
                        <h3 class="accordion-header" id="pageHeadingNine">
                            <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pageCollapseNine" aria-expanded="false" aria-controls="pageCollapseNine">
                                <span class="faq-q-number me-3">09</span>
                                <span class="faq-q-text flex-grow-1">How should I prepare my home appliances before moving day?</span>
                            </button>
                        </h3>
                        <div id="pageCollapseNine" class="accordion-collapse collapse" aria-labelledby="pageHeadingNine"
                            data-bs-parent="#faqAccordionPage">
                            <div class="accordion-body faq-body">
                                We recommend defrosting your refrigerator at least 24 hours prior to prevent moisture leakages, draining washing machine hoses, disconnecting and securing AC units, and removing toner cartridges from printers. Our crew will handle all protective foam wrapping and crating.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 10 -->
                    <div class="accordion-item faq-item">
                        <h3 class="accordion-header" id="pageHeadingTen">
                            <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pageCollapseTen" aria-expanded="false" aria-controls="pageCollapseTen">
                                <span class="faq-q-number me-3">10</span>
                                <span class="faq-q-text flex-grow-1">What is the process for filing a transit insurance claim if goods are damaged?</span>
                            </button>
                        </h3>
                        <div id="pageCollapseTen" class="accordion-collapse collapse" aria-labelledby="pageHeadingTen"
                            data-bs-parent="#faqAccordionPage">
                            <div class="accordion-body faq-body">
                                In the rare event of transit damage, inspect your items during unloading with the team supervisor and endorse the delivery receipt. Notify your assigned relocation coordinator within 24–48 hours with photographs. Our dedicated claims desk will coordinate the surveyor inspection and expedited settlement.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 11 -->
                    <div class="accordion-item faq-item">
                        <h3 class="accordion-header" id="pageHeadingEleven">
                            <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pageCollapseEleven" aria-expanded="false" aria-controls="pageCollapseEleven">
                                <span class="faq-q-number me-3">11</span>
                                <span class="faq-q-text flex-grow-1">What payment methods do you accept, and what are the payment milestones?</span>
                            </button>
                        </h3>
                        <div id="pageCollapseEleven" class="accordion-collapse collapse" aria-labelledby="pageHeadingEleven"
                            data-bs-parent="#faqAccordionPage">
                            <div class="accordion-body faq-body">
                                We accept UPI, Net Banking (NEFT/RTGS), debit/credit cards, and cash. Standard payment terms include a token advance to secure the booking date, a second installment upon packing &amp; vehicle dispatch, and the remaining balance upon arrival at destination prior to unloading.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 12 -->
                    <div class="accordion-item faq-item">
                        <h3 class="accordion-header" id="pageHeadingTwelve">
                            <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pageCollapseTwelve" aria-expanded="false" aria-controls="pageCollapseTwelve">
                                <span class="faq-q-number me-3">12</span>
                                <span class="faq-q-text flex-grow-1">What is the process if I need to reschedule or cancel my move?</span>
                            </button>
                        </h3>
                        <div id="pageCollapseTwelve" class="accordion-collapse collapse" aria-labelledby="pageHeadingTwelve"
                            data-bs-parent="#faqAccordionPage">
                            <div class="accordion-body faq-body">
                                We understand that moving schedules can shift. You can reschedule your booking date with at least 24 hours advance notice without any penalty or rescheduling fees. Our coordinator will reassign an optimal container truck and crew for your updated date.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- CTA Banner -->
        <section class="about-cta-banner mt-5 mb-2">
            <div class="row align-items-center g-3">
                <div class="col-12 col-xl-6">
                    <h3 class="about-cta-title mb-1">Planning Your Next Move? Let Our Experts Handle It!</h3>
                    <p class="about-cta-subtitle mb-0">
                        Speak directly with a Senior Relocation Coordinator for instant planning &amp; fixed-price estimates.
                    </p>
                </div>
                <div class="col-12 col-xl-6 text-xl-end">
                    <div class="d-flex align-items-center gap-2 justify-content-center justify-content-xl-end flex-wrap flex-sm-nowrap">
                        <a href="<?= $phonehtml ?>"
                            class="btn-cta-phone flex-fill flex-sm-grow-0 text-nowrap">
                            <i class="bi bi-telephone-fill"></i> <?= $phone ?>
                        </a>
                        <a href="<?= $whatsapphtml ?>"
                            target="_blank" rel="noopener"
                            class="btn-cta-whatsapp flex-fill flex-sm-grow-0 text-nowrap">
                            <i class="bi bi-whatsapp"></i> WhatsApp
                        </a>
                        <button type="button" class="btn-cta-quote flex-fill flex-sm-grow-0 text-nowrap"
                            data-bs-toggle="modal" data-bs-target="#qteModal">
                            <i class="bi bi-send-fill text-danger"></i> Free Quote
                        </button>
                    </div>
                </div>
            </div>
        </section>

    </div>
</section>