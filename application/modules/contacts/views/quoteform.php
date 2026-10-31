<div class="quote-card">
    <!-- Heading -->
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-3">
        <div>
            <h2 class="quote-card-title">Get a Free <span class="text-quote-red">Moving Quote</span></h2>
            <p class="quote-card-subtitle">Fill in your details and get an instant estimate.</p>
        </div>
        <div class="quote-instant-badge d-none d-md-inline-flex align-items-center gap-2">
            <i class="bi bi-shield-fill-check text-success fs-5"></i>
            <span>Zero Obligation &bull; Instant Transparent Pricing</span>
        </div>
    </div>

    <!-- Form Inputs Row -->
    <form id="heroQuoteCardForm" onsubmit="event.preventDefault(); submitDirectHeroQuote();">
        <div class="row g-2 align-items-center">
            <!-- 1. Name Input -->
            <div class="col-12 col-md-6 col-lg">
                <div class="quote-field-box" id="box_hero_name">
                    <i class="bi bi-person quote-icon"></i>
                    <div class="quote-input-group flex-grow-1">
                        <label for="hero_name" class="quote-label">Your Name</label>
                        <input type="text" id="hero_name" name="name" class="quote-input"
                            placeholder="Enter your name" required>
                    </div>
                </div>
            </div>

            <!-- 2. Phone Number -->
            <div class="col-12 col-md-6 col-lg">
                <div class="quote-field-box" id="box_hero_phone">
                    <i class="bi bi-telephone quote-icon"></i>
                    <div class="quote-input-group flex-grow-1">
                        <label for="hero_phone" class="quote-label">Phone Number</label>
                        <input type="tel" id="hero_phone" name="phone" class="quote-input"
                            placeholder="10-digit mobile" maxlength="10" pattern="[0-9]{10}" required>
                    </div>
                </div>
            </div>

            <!-- 3. Moving From (side-by-side with Moving To on mobile) -->
            <div class="col-6 col-lg">
                <div class="quote-field-box" id="box_hero_from">
                    <i class="bi bi-geo-alt quote-icon"></i>
                    <div class="quote-input-group flex-grow-1">
                        <label for="hero_from" class="quote-label">Moving From</label>
                        <input type="text" id="hero_from" name="mfrom" class="quote-input"
                            placeholder="Enter City" value="<?= @$city ?>" required>
                    </div>
                    <i class="bi bi-chevron-down quote-chevron"></i>
                </div>
            </div>

            <!-- 4. Moving To (side-by-side with Moving From on mobile) -->
            <div class="col-6 col-lg">
                <div class="quote-field-box" id="box_hero_to">
                    <i class="bi bi-geo-alt quote-icon"></i>
                    <div class="quote-input-group flex-grow-1">
                        <label for="hero_to" class="quote-label">Moving To</label>
                        <input type="text" id="hero_to" name="mto" class="quote-input"
                            placeholder="Enter City" required>
                    </div>
                    <i class="bi bi-chevron-down quote-chevron"></i>
                </div>
            </div>

            <!-- 5. Service -->
            <div class="col-12 col-lg">
                <div class="quote-field-box" id="box_hero_service">
                    <i class="bi bi-truck quote-icon"></i>
                    <div class="quote-input-group flex-grow-1">
                        <label for="hero_service" class="quote-label">Service</label>
                        <select id="hero_service" name="mtype" class="quote-select" required>
                            <option value="" disabled selected>Select Service</option>
                            <option value="Household Shifting">Household Shifting</option>
                            <option value="Office Relocation">Office Relocation</option>
                            <option value="Car Transportation">Car Transportation</option>
                            <option value="Bike Transportation">Bike Transportation</option>
                            <option value="Packing & Moving">Packing &amp; Moving</option>
                            <option value="Storage / Warehousing">Storage / Warehousing</option>
                        </select>
                    </div>
                    <i class="bi bi-chevron-down quote-chevron"></i>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="col-12 col-lg-auto">
                <button type="submit" id="btn_hero_submit" class="btn btn-quote-action w-100 px-4">
                    <span>Get Quote Now</span>
                    <i class="bi bi-arrow-right"></i>
                </button>
            </div>
        </div>

        <!-- Status Alert Line -->
        <div id="quoteCardStatus" class="alert alert-danger py-2 px-3 mt-3 mb-0 quote-card-status d-none"></div>

        <!-- Trust Badges Strip (at bottom of card - 2 in a row on mobile, full strip on desktop) -->
        <div class="quote-badges-strip">
            <div class="row g-2 g-lg-3 align-items-center justify-content-between">
                <div class="col-6 col-lg-auto">
                    <div class="badge-item d-flex align-items-center gap-2">
                        <svg class="badge-icon-svg" width="22" height="22" viewBox="0 0 16 16"
                            fill="var(--logo-blue)">
                            <path
                                d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.8 11.8 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7 7 0 0 0 1.048-.625 11.8 11.8 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.54 1.54 0 0 0-1.044-1.263 63 63 0 0 0-2.887-.87C9.843.266 8.69 0 8 0z" />
                            <path
                                d="M10.854 5.854a.5.5 0 0 0-.708-.708L7.5 7.793 6.354 6.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"
                                fill="#ffffff" />
                        </svg>
                        <span>No Hidden Charges</span>
                    </div>
                </div>
                <div class="col-auto d-none d-lg-flex align-items-center px-0">
                    <div class="badge-divider"></div>
                </div>
                <div class="col-6 col-lg-auto">
                    <div class="badge-item d-flex align-items-center gap-2">
                        <span class="badge-icon-circle">₹</span>
                        <span>Best Price Guarantee</span>
                    </div>
                </div>
                <div class="col-auto d-none d-lg-flex align-items-center px-0">
                    <div class="badge-divider"></div>
                </div>
                <div class="col-6 col-lg-auto">
                    <div class="badge-item d-flex align-items-center gap-2">
                        <i class="fa-solid fa-headset badge-icon"></i>
                        <span>24/7 Support</span>
                    </div>
                </div>
                <div class="col-auto d-none d-lg-flex align-items-center px-0">
                    <div class="badge-divider"></div>
                </div>
                <div class="col-6 col-lg-auto">
                    <div class="badge-item d-flex align-items-center gap-2">
                        <i class="fa-solid fa-truck-fast badge-icon"></i>
                        <span>On-Time Delivery</span>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    function submitDirectHeroQuote() {
        var form = document.getElementById('heroQuoteCardForm');
        var btn = document.getElementById('btn_hero_submit');
        var status = document.getElementById('quoteCardStatus');

        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        btn.disabled = true;
        btn.innerHTML = 'Submitting...';

        fetch('<?= site_url("contacts/booking") ?>', {
            method: 'POST',
            body: new FormData(form)
        })
        .then(function(r) { return r.text(); })
        .then(function(res) {
            btn.disabled = false;
            btn.innerHTML = '<span>Get Quote Now</span> <i class="bi bi-arrow-right"></i>';
            status.classList.remove('d-none');
            if (res.trim() === '1') {
                status.className = 'alert alert-success py-2 px-3 mt-3 mb-0 quote-card-status';
                status.innerHTML = '<i class="bi bi-check-circle-fill me-1"></i> Thank you! Your quote request has been submitted successfully. Our team will contact you shortly.';
                form.reset();
            } else {
                status.className = 'alert alert-danger py-2 px-3 mt-3 mb-0 quote-card-status';
                status.innerHTML = res;
            }
        })
        .catch(function() {
            btn.disabled = false;
            btn.innerHTML = '<span>Get Quote Now</span> <i class="bi bi-arrow-right"></i>';
            status.className = 'alert alert-danger py-2 px-3 mt-3 mb-0 quote-card-status';
            status.innerHTML = '<i class="bi bi-wifi-off me-1"></i> Network error. Please try again.';
            status.classList.remove('d-none');
        });
    }
</script>
