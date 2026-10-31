<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
?>

<!-- ==========================================================================
     Frequently Asked Questions (FAQs) Section with Help Sidebar
     ========================================================================== -->
<section id="faqs" class="faqs-section py-5 py-lg-6 position-relative">
    <div class="container position-relative">

        <!-- Section Header -->
        <div class="text-center mb-4 mb-lg-5">
            <div class="section-tag-badge justify-content-center">
                <span class="section-tag-line"></span>
                <span class="section-tag-text">FREQUENTLY ASKED QUESTIONS</span>
            </div>
            <h2 class="services-main-title mt-1 mb-2">
                Got Questions? <span class="services-title-red">We've Got Answers</span>
            </h2>
            <p class="faqs-header-subtitle text-muted mx-auto mb-0">
                Everything you need to know about our packing, moving, pricing, and safety procedures.
            </p>
        </div>

        <!-- Full-Width Layout: FAQs in col-12 without sidebar -->
        <div class="row g-4 justify-content-center">

            <!-- Full-Width Column: Accordion (col-12) -->
            <div class="col-12">
                <div class="accordion custom-faq-accordion" id="homeFaqAccordion">

                    <!-- FAQ Item 1 -->
                    <div class="accordion-item faq-item">
                        <h3 class="accordion-header" id="headingOne">
                            <button class="accordion-button faq-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span class="faq-q-number me-3">01</span>
                                <span class="faq-q-text flex-grow-1">What is the cost of hiring packers and movers?</span>
                            </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#homeFaqAccordion">
                            <div class="accordion-body faq-body">
                                Cost will depend on the quantity of consignment, distance, packing materials and floor
                                access along with any other services. Please share your moving details for an estimate.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="accordion-item faq-item">
                        <h3 class="accordion-header" id="headingTwo">
                            <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="faq-q-number me-3">02</span>
                                <span class="faq-q-text flex-grow-1">Do you provide shifting services outside my city?</span>
                            </button>
                        </h3>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#homeFaqAccordion">
                            <div class="accordion-body faq-body">
                                Yes, we offer both local and domestic moving services.
                                Tell us your pickup and delivery locations for further discussion about your needs.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="accordion-item faq-item">
                        <h3 class="accordion-header" id="headingThree">
                            <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="faq-q-number me-3">03</span>
                                <span class="faq-q-text flex-grow-1">Do you provide packing services if I arrange for transportation separately?</span>
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#homeFaqAccordion">
                            <div class="accordion-body faq-body">
                                Please get in touch with us to know whether packing only service is available for your location.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="accordion-item faq-item">
                        <h3 class="accordion-header" id="headingFour">
                            <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <span class="faq-q-number me-3">04</span>
                                <span class="faq-q-text flex-grow-1">Do I get insurance cover for my goods?</span>
                            </button>
                        </h3>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#homeFaqAccordion">
                            <div class="accordion-body faq-body">
                                There may be some options for insuring your goods. Check about the coverage,
                                exclusions and conditions before confirming your booking.
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
                    <h3 class="about-cta-title mb-1">Moving Plan Ahead?</h3>
                    <p class="about-cta-subtitle mb-0">
                       Leave your packing and shifting to us as you prepare for your new place. Contact <strong><?=$company3?></strong>.
                    </p>
                </div>
                <div class="col-12 col-xl-6 text-xl-end">
                    <div
                        class="d-flex align-items-center gap-2 justify-content-center justify-content-xl-end flex-wrap flex-sm-nowrap">
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