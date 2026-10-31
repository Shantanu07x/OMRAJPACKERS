<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Dynamic Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Contact Us',
    'bc_desc' => 'Get in touch with ' . $company3 . ' for fast relocation assistance, booking inquiries &amp; 100% free quotes.',
    'breadcrumbs' => [
        ['name' => 'Contact Us']
    ]
]);
?>

<!-- Contact Page Main Content -->
<div class="contact-page-wrap py-5">
    <div class="container">

        <!-- Top 4 Quick Action Contact Cards (2 in a row on mobile, 4 on desktop) -->
        <div class="row g-2 g-sm-3 g-md-4 contact-quick-grid">
            
            <!-- 1. Phone Card -->
            <div class="col-6 col-lg-3">
                <a href="<?= $phonehtml ?>" class="contact-quick-card">
                    <div class="contact-quick-icon-wrap icon-phone">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div class="contact-quick-info">
                        <span class="contact-quick-label">24X7 HELPLINE</span>
                        <span class="contact-quick-val contact-quick-val-phone"><?= $phone ?></span>
                        <span class="contact-quick-status">
                            <span class="status-dot-pulse"></span> Available Now
                        </span>
                    </div>
                </a>
            </div>

            <!-- 2. WhatsApp Card -->
            <div class="col-6 col-lg-3">
                <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="contact-quick-card">
                    <div class="contact-quick-icon-wrap icon-wa">
                        <i class="bi bi-whatsapp"></i>
                    </div>
                    <div class="contact-quick-info">
                        <span class="contact-quick-label">WHATSAPP CHAT</span>
                        <span class="contact-quick-val">Chat with Expert</span>
                        <span class="contact-quick-status">
                            <span class="status-dot-pulse"></span> Instant Reply
                        </span>
                    </div>
                </a>
            </div>

            <!-- 3. Email Card -->
            <div class="col-6 col-lg-3">
                <a href="<?= $mailhtml ?>" class="contact-quick-card">
                    <div class="contact-quick-icon-wrap icon-mail">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <div class="contact-quick-info">
                        <span class="contact-quick-label">OFFICIAL EMAIL</span>
                        <span class="contact-quick-val contact-quick-val-email" title="<?= $mail ?>"><?= $mail ?></span>
                        <span class="contact-quick-status">
                            <span class="status-dot-pulse"></span> Quick Reply
                        </span>
                    </div>
                </a>
            </div>

            <!-- 4. Location Card -->
            <div class="col-6 col-lg-3">
                <a href="#officeMapSection" class="contact-quick-card">
                    <div class="contact-quick-icon-wrap icon-loc">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div class="contact-quick-info">
                        <span class="contact-quick-label">HEAD OFFICE</span>
                        <span class="contact-quick-val"><?= $addressRegion ?>, <?= $companystate ?></span>
                        <span class="contact-quick-status">
                            <span class="status-dot-pulse"></span> Open 7 Days
                        </span>
                    </div>
                </a>
            </div>

        </div>

        <!-- Main Form & Sidebar Row -->
        <div class="row g-4 g-lg-5">

            <!-- Left Column: Contact Form (col-lg-8) -->
            <div class="col-12 col-lg-8">
                <div class="contact-main-card">
                    
                    <!-- Form Header -->
                    <div class="contact-form-header">
                        <span class="contact-header-tag">
                            <i class="bi bi-chat-heart-fill"></i> Send a Direct Message
                        </span>
                        <h2 class="contact-form-title">
                            Get In Touch With <span class="text-brand-red">Our Experts</span>
                        </h2>
                        <p class="contact-form-desc">
                            Have questions about your upcoming relocation or need an instant rate estimate? Complete the form below and our move manager will call you back within 15 minutes.
                        </p>
                    </div>

                    <!-- Ajax-Enabled Contact Form (Connected to Admin Contacts Page) -->
                    <form id="contactPageForm" class="ajax-form contact-form-wrap" data-url="<?= site_url('contacts/contact') ?>" data-result="contactPageFormResult" onsubmit="return false;">
                        
                        <div class="row g-3 g-md-4">
                            
                            <!-- Full Name Field -->
                            <div class="col-12 col-md-6">
                                <div class="contact-field-group">
                                    <label class="contact-field-label" for="contact_name">Your Full Name <span class="text-danger">*</span></label>
                                    <div class="contact-input-wrapper">
                                        <i class="bi bi-person-fill contact-field-icon"></i>
                                        <input type="text" id="contact_name" name="name" class="contact-field-control" placeholder="Enter your full name" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Mobile Number Field -->
                            <div class="col-12 col-md-6">
                                <div class="contact-field-group">
                                    <label class="contact-field-label" for="contact_phone">Phone Number <span class="text-danger">*</span></label>
                                    <div class="contact-input-wrapper">
                                        <i class="bi bi-telephone-fill contact-field-icon"></i>
                                        <input type="tel" id="contact_phone" name="phone" maxlength="10" class="contact-field-control" placeholder="10-digit mobile number" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Email Address Field -->
                            <div class="col-12 col-md-6">
                                <div class="contact-field-group">
                                    <label class="contact-field-label" for="contact_email">Email Address</label>
                                    <div class="contact-input-wrapper">
                                        <i class="bi bi-envelope-fill contact-field-icon"></i>
                                        <input type="email" id="contact_email" name="email" class="contact-field-control" placeholder="name@example.com">
                                    </div>
                                </div>
                            </div>

                            <!-- Service / Category Selection -->
                            <div class="col-12 col-md-6">
                                <div class="contact-field-group">
                                    <label class="contact-field-label" for="contact_category">Select Service Needed</label>
                                    <div class="contact-input-wrapper">
                                        <i class="bi bi-box-seam-fill contact-field-icon"></i>
                                        <select id="contact_category" name="category" class="contact-field-control contact-select-control" aria-label="Select Service Needed">
                                            <option value="Household Goods Shifting">Household Goods Shifting</option>
                                            <option value="Office and Corporate Shifting">Office and Corporate Shifting</option>
                                            <option value="Local and Domestic Shifting">Local &amp; Domestic Shifting</option>
                                            <option value="Packing and Unpacking Services">Packing &amp; Unpacking Services</option>
                                            <option value="Loading and Unloading Services">Loading &amp; Unloading Services</option>
                                            <option value="Vehicle Transportation">Vehicle Transportation</option>
                                            <option value="Warehousing and Storage Solutions">Warehousing &amp; Storage</option>
                                            <option value="Transit Insurance Coverage">Transit Insurance Coverage</option>
                                            <option value="General Relocation Inquiry">General Relocation Inquiry</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- City / Location Field -->
                            <div class="col-12">
                                <div class="contact-field-group">
                                    <label class="contact-field-label" for="contact_city">City / Current Location</label>
                                    <div class="contact-input-wrapper">
                                        <i class="bi bi-geo-alt-fill contact-field-icon"></i>
                                        <input type="text" id="contact_city" name="city" class="contact-field-control" placeholder="e.g. Mumbai, Delhi, Bengaluru, Pune, Hyderabad">
                                    </div>
                                </div>
                            </div>

                            <!-- Message / Requirements Field -->
                            <div class="col-12">
                                <div class="contact-field-group">
                                    <label class="contact-field-label" for="contact_message">Your Message / Moving Details <span class="text-danger">*</span></label>
                                    <div class="contact-input-wrapper">
                                        <i class="bi bi-chat-text-fill contact-field-icon textarea-icon"></i>
                                        <textarea id="contact_message" name="message" rows="4" class="contact-field-control contact-textarea-control" placeholder="Please mention your shifting origin, destination, preferred moving date, or specific item details..." required></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button & Trust Note -->
                            <div class="col-12">
                                <button type="submit" class="contact-submit-btn">
                                    <i class="bi bi-send-fill"></i>
                                    <span>Send Message Now</span>
                                </button>
                                
                                <div class="contact-form-trust">
                                    <i class="bi bi-shield-check text-success fs-6"></i>
                                    <span>100% Privacy Assured &bull; No Spam &bull; Immediate Callback</span>
                                </div>

                                <!-- AJAX Results Container -->
                                <div id="contactPageFormResult" class="contact-form-result"></div>
                            </div>

                        </div>
                    </form>

                </div>
            </div>

            <!-- Right Column: Sidebar Help Box & Office Info (col-lg-4) -->
            <div class="col-12 col-lg-4">
                
                <!-- 1. Interactive Sidebar Help Box -->
                <div class="contact-sidebar-help-box">
                    <div class="sidebar-help-glow"></div>
                    
                    <div class="sidebar-help-headset">
                        <i class="bi bi-headset"></i>
                    </div>

                    <span class="sidebar-help-badge">24/7 Relocation Support</span>
                    <h3 class="sidebar-help-title">Need Moving Assistance?</h3>
                    <p class="sidebar-help-desc">
                        Our relocation coordinators are standing by to offer instant custom quotes, packing advice, and route scheduling.
                    </p>

                    <!-- Direct Action Buttons Row (Side-by-side on Mobile) -->
                    <div class="sidebar-action-row">
                        <a href="<?= $phonehtml ?>" class="sidebar-btn-call">
                            <i class="bi bi-telephone-fill"></i>
                            <span>Call <?= $phone ?></span>
                        </a>

                        <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="sidebar-btn-wa">
                            <i class="bi bi-whatsapp"></i>
                            <span>Chat on WhatsApp</span>
                        </a>
                    </div>

                    <!-- Key Perks Checklist -->
                    <ul class="sidebar-perks-list">
                        <li class="sidebar-perk-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Free In-Home or Virtual Survey</span>
                        </li>
                        <li class="sidebar-perk-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Transparent Rates &amp; Zero Hidden Costs</span>
                        </li>
                        <li class="sidebar-perk-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Multi-Layer Packing Protection</span>
                        </li>
                        <li class="sidebar-perk-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>All-India Dedicated GPS Fleet</span>
                        </li>
                    </ul>
                </div>

                <!-- 2. Registered Office & Hours Info Card -->
                <div class="contact-sidebar-info-card">
                    <h4 class="sidebar-info-title">
                        <i class="bi bi-building-check text-brand-red"></i>
                        <span>Office Details</span>
                    </h4>

                    <!-- Head Office Address Block -->
                    <div class="contact-info-block">
                        <div class="contact-info-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div class="contact-info-text">
                            <div class="contact-info-head">HEAD OFFICE ADDRESS</div>
                            <p class="contact-info-desc"><?= $address ?></p>
                        </div>
                    </div>

                    <!-- Branch Office Address Block -->
                    <div class="contact-info-block">
                        <div class="contact-info-icon">
                            <i class="bi bi-pin-map-fill"></i>
                        </div>
                        <div class="contact-info-text">
                            <div class="contact-info-head">BRANCH OFFICE ADDRESS</div>
                            <p class="contact-info-desc"><?= !empty($branchAddress) ? $branchAddress : 'Flat No 102, 1st Floor, Near Bank of India, Ramkrishna nagar Patna-800027' ?></p>
                        </div>
                    </div>

                    <!-- Hours Block -->
                    <div class="contact-info-block">
                        <div class="contact-info-icon">
                            <i class="bi bi-clock-fill"></i>
                        </div>
                        <div class="contact-info-text">
                            <div class="contact-info-head">WORKING HOURS</div>
                            <p class="contact-info-desc">Monday &ndash; Sunday: 8:00 AM &ndash; 10:00 PM</p>
                        </div>
                    </div>

                    <!-- 24/7 Helpline Block -->
                    <div class="contact-info-block">
                        <div class="contact-info-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div class="contact-info-text">
                            <div class="contact-info-head">CUSTOMER HELPDESK</div>
                            <p class="contact-info-desc">Active 24x7 Support Available</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Bottom Full-Width Interactive Google Map Section (Auto-Loads on Scroll / Zero Cookies on Load) -->
        <div id="officeMapSection" class="contact-map-card">
            <div class="contact-map-header">
                <h4 class="contact-map-title">
                    <i class="bi bi-map-fill text-brand-red"></i>
                    <span>Find Our Registered Office on Google Maps</span>
                </h4>
                <a href="https://maps.google.com/?q=Ramkrishan+Nagar,+Patna,+Bihar,+India" target="_blank" rel="noopener" class="btn city-branches-btn btn-sm rounded-pill px-3 fw-bold">
                    <i class="bi bi-box-arrow-up-right me-1"></i> Open in Maps
                </a>
            </div>

            <div id="contactMapContainer" class="contact-map-facade position-relative" onclick="loadContactMap()">
                <div class="text-center p-4">
                    <div class="contact-map-pin-pulse">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2 fs-5"><?= $company3 ?></h5>
                    <div class="text-muted small mb-3" style="max-width: 580px; margin: 0 auto; line-height: 1.6;">
                        <div><strong class="text-dark">Head Office:</strong> <?= htmlspecialchars($address) ?></div>
                        <div class="mt-1"><strong class="text-dark">Branch Office:</strong> <?= htmlspecialchars(!empty($branchAddress) ? $branchAddress : 'Flat No 102, 1st Floor, Near Bank of India, Ramkrishna nagar Patna-800027') ?></div>
                    </div>
                    <div class="d-flex align-items-center gap-2 justify-content-center">
                        <span class="badge bg-white text-dark border shadow-sm px-3 py-2 rounded-pill small d-inline-flex align-items-center gap-2">
                            <span class="spinner-border spinner-border-sm text-danger" role="status" aria-hidden="true"></span>
                            <span>Loading Interactive Map...</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
var mapLoaded = false;
function loadContactMap() {
    if (mapLoaded) return;
    mapLoaded = true;
    var container = document.getElementById('contactMapContainer');
    if (!container) return;
    container.innerHTML = '<iframe class="contact-map-iframe" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14394.753795860386!2d85.158496!3d25.58203!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f2a764d4c9b843%3A0xddf40629db0746c!2sRamkrishan%20Nagar%2C%20Patna%2C%20Bihar%2C%20India!5e0!3m2!1sen!2sus!4v1793001771721!5m2!1sen!2sus" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" title="Office Location Map"></iframe>';
}

// Automatically load the map as soon as user scrolls near the map section
document.addEventListener('DOMContentLoaded', function() {
    var target = document.getElementById('officeMapSection');
    if (!target) return;
    if ('IntersectionObserver' in window) {
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    loadContactMap();
                    observer.disconnect();
                }
            });
        }, { rootMargin: '250px 0px' });
        observer.observe(target);
    } else {
        // Fallback for older browsers
        window.addEventListener('scroll', function onFirstScroll() {
            loadContactMap();
            window.removeEventListener('scroll', onFirstScroll);
        }, { passive: true });
    }
});
</script>