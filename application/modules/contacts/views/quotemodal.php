<div class="modal fade quote-custom-modal" id="qteModal" tabindex="-1" role="dialog" aria-labelledby="qteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- Top Color Accent Bar -->
            <div class="quote-modal-top-accent"></div>

            <!-- Modal Header -->
            <div class="quote-modal-header">
                <div>
                    <span class="quote-modal-badge">
                        <i class="bi bi-lightning-charge-fill"></i> Instant Estimate
                    </span>
                    <h3 class="quote-modal-title" id="qteModalLabel">
                        Request a <span class="text-brand-red">Free Quote</span>
                    </h3>
                    <p class="quote-modal-subtitle">
                        Fill in your relocation details for instant pricing &amp; free survey.
                    </p>
                </div>
                <button type="button" class="quote-modal-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="quote-modal-body">
                <form id="quotemodal" class="ajax-form" data-url="<?= site_url('contacts/booking') ?>" data-result="resultquotemodal" onsubmit="return false;">
                    <div class="row g-2 g-md-3">
                        
                        <!-- Your Name -->
                        <div class="col-12 col-md-6">
                            <div class="qm-input-group">
                                <i class="bi bi-person-fill qm-icon"></i>
                                <input type="text" class="qm-control" name="name" placeholder="Your Full Name" required>
                            </div>
                        </div>

                        <!-- Phone Number -->
                        <div class="col-12 col-md-6">
                            <div class="qm-input-group">
                                <i class="bi bi-telephone-fill qm-icon"></i>
                                <input type="tel" class="qm-control" name="phone" maxlength="10" placeholder="10-Digit Mobile No." required>
                            </div>
                        </div>

                        <!-- Email Address -->
                        <div class="col-12">
                            <div class="qm-input-group">
                                <i class="bi bi-envelope-fill qm-icon"></i>
                                <input type="email" class="qm-control" name="email" placeholder="Your Email Address (Optional)">
                            </div>
                        </div>

                        <!-- Service Type -->
                        <div class="col-12">
                            <div class="qm-input-group">
                                <i class="bi bi-box-seam-fill qm-icon"></i>
                                <select name="mtype" class="qm-control qm-select">
                                    <option value="" disabled selected>Select Relocation Service</option>
                                    <option value="Household Goods Shifting">Household Goods Shifting</option>
                                    <option value="Office &amp; Corporate Shifting">Office &amp; Corporate Shifting</option>
                                    <option value="Local &amp; Domestic Shifting">Local &amp; Domestic Shifting</option>
                                    <option value="Vehicle Transportation">Vehicle Transportation (Car / Bike)</option>
                                    <option value="Packing &amp; Unpacking Services">Packing &amp; Unpacking Services</option>
                                    <option value="Loading &amp; Unloading Services">Loading &amp; Unloading Services</option>
                                    <option value="Warehousing &amp; Storage">Warehousing &amp; Storage Solutions</option>
                                    <option value="Transit Insurance Coverage">Transit Insurance Coverage</option>
                                </select>
                            </div>
                        </div>

                        <!-- From City -->
                        <div class="col-6">
                            <div class="qm-input-group">
                                <i class="bi bi-geo-alt-fill qm-icon text-danger"></i>
                                <input type="text" class="qm-control" name="mfrom" placeholder="Moving From (City)">
                            </div>
                        </div>

                        <!-- To City -->
                        <div class="col-6">
                            <div class="qm-input-group">
                                <i class="bi bi-geo-alt-fill qm-icon text-primary"></i>
                                <input type="text" class="qm-control" name="mto" placeholder="Moving To (City)">
                            </div>
                        </div>

                        <!-- Message / Needs -->
                        <div class="col-12">
                            <div class="qm-input-group">
                                <i class="bi bi-chat-left-dots-fill qm-icon textarea-icon"></i>
                                <textarea name="message" rows="3" class="qm-control qm-textarea" placeholder="Items to shift, moving date, or special instructions..."></textarea>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-12 pt-1">
                            <button id="submitbquotemodal" type="submit" class="qm-submit-btn">
                                <span>Get My Free Quote</span>
                                <i class="bi bi-send-fill ms-1"></i>
                            </button>
                            
                            <div class="qm-trust-strip">
                                <span><i class="bi bi-shield-check text-success me-1"></i>100% Secure</span>
                                <span>&bull;</span>
                                <span><i class="bi bi-clock-history text-primary me-1"></i>15 Min Callback</span>
                                <span>&bull;</span>
                                <span><i class="bi bi-tag-fill text-danger me-1"></i>Best Price</span>
                            </div>
                        </div>
                    </div>

                    <!-- Ajax Status Result Container -->
                    <div id="resultquotemodal" class="mt-2"></div>
                </form>
            </div>
        </div>
    </div>
</div>