<body>
  <!-- Top Bar -->
  <div class="top-bar py-2">
    <div class="container">
      <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
        <!-- Contact Info Left -->
        <div class="d-flex align-items-center flex-wrap gap-3 gap-md-4 top-bar-contact">
          <a href="<?= $phonehtml ?>" class="top-bar-link d-inline-flex align-items-center gap-2">
            <i class="bi bi-telephone-fill"></i>
            <span><?= $phone ?></span>
          </a>
          <a href="<?= $mailhtml ?>" class="top-bar-link d-inline-flex align-items-center gap-2">
            <i class="bi bi-envelope-fill"></i>
            <span><?= $mail ?></span>
          </a>
        </div>
        <!-- Social Icons Right -->
        <div class="d-flex align-items-center gap-3 social-icons ms-auto ms-sm-0">
          <a href="<?= $facebookhtml ?>" target="_blank" rel="noopener" class="top-social-link" title="Facebook"
            aria-label="Facebook"><i class="bi bi-facebook"></i></a>
          <a href="<?= $instagramhtml ?>" target="_blank" rel="noopener" class="top-social-link" title="Instagram"
            aria-label="Instagram"><i class="bi bi-instagram"></i></a>
          <a href="<?= $linkedinhtml ?>" target="_blank" rel="noopener" class="top-social-link" title="LinkedIn"
            aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
          <a href="<?= $youtubehtml ?>" target="_blank" rel="noopener" class="top-social-link" title="YouTube"
            aria-label="YouTube"><i class="bi bi-youtube"></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Navbar -->
  <header class="main-header sticky-top">
    <nav class="navbar navbar-expand-lg bg-white main-navbar py-2 py-lg-3">
      <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center py-0" href="<?= site_url() ?>">
          <img src="<?= base_url('assets/img/logo/logo.png') ?>" alt="OMRAJ Packers & Movers" class="main-nav-logo me-2">
          <div class="brand-text-group d-flex flex-column justify-content-center">
            <span class="brand-title">OMRAJ</span>
            <span class="brand-subtitle">PACKERS & MOVERS</span>
          </div>
        </a>

        <!-- Mobile Toggler -->
        <button class="navbar-toggler border-0 shadow-none px-2" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarMainContent" aria-controls="navbarMainContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Menu & CTA -->
        <div class="collapse navbar-collapse" id="navbarMainContent">
          
          <!-- Mobile Top Bar with Close Cross Button at Corner (d-lg-none) -->
          <div class="mobile-nav-top-header d-flex align-items-center justify-content-between d-lg-none">
            <span class="mobile-nav-brand-tag">
              <i class="bi bi-compass-fill me-1 text-info"></i> Navigation Menu
            </span>
            <button type="button" class="mobile-nav-close-btn" data-bs-toggle="collapse"
              data-bs-target="#navbarMainContent" aria-controls="navbarMainContent" aria-label="Close navigation">
              <i class="bi bi-x-lg"></i>
            </button>
          </div>

          <!-- Mobile Section 1: Main Navigation Pages in BOX STYLE (d-lg-none) -->
          <div class="mobile-nav-group d-block d-lg-none my-2">
            <div class="mobile-nav-header">
              <i class="bi bi-grid-fill"></i>
              <span>MAIN PAGES</span>
            </div>
            <div class="mobile-nav-main-grid">
              <a href="<?= site_url() ?>" class="mobile-nav-tile <?= empty($this->uri->segment(1)) || $this->uri->segment(1) == 'home' ? 'active' : '' ?>">
                <i class="bi bi-house-door-fill text-danger"></i>
                <span>Home</span>
              </a>
              <a href="<?= site_url('our-branches') ?>" class="mobile-nav-tile <?= in_array($this->uri->segment(1), ['our-branches', 'branches', 'our-locations', 'location', 'locations', 'bihar', 'jharkhand', 'delhi', 'maharashtra', 'gujarat', 'punjab', 'west-bengal']) ? 'active' : '' ?>">
                <i class="bi bi-geo-alt-fill text-primary"></i>
                <span>Branches</span>
              </a>
              <a href="<?= site_url('contact-us') ?>" class="mobile-nav-tile <?= $this->uri->segment(1) == 'contact-us' ? 'active' : '' ?>">
                <i class="bi bi-telephone-fill text-success"></i>
                <span>Contact</span>
              </a>
              <a href="<?= site_url('photo-gallery') ?>" class="mobile-nav-tile <?= in_array($this->uri->segment(1), ['photo-gallery', 'video-gallery', 'gallery']) ? 'active' : '' ?>">
                <i class="bi bi-images text-warning"></i>
                <span>Gallery</span>
              </a>
              <a href="<?= site_url('blog') ?>" class="mobile-nav-tile <?= $this->uri->segment(1) == 'blog' ? 'active' : '' ?>">
                <i class="bi bi-newspaper text-info"></i>
                <span>Blog</span>
              </a>
            </div>
          </div>

          <!-- Mobile Section 2: About Omraj in BOX STYLE (d-lg-none) -->
          <div class="mobile-nav-group d-block d-lg-none my-2">
            <div class="mobile-nav-header">
              <i class="bi bi-info-circle-fill"></i>
              <span>ABOUT OMRAJ</span>
            </div>
            <div class="mobile-nav-about-row">
              <a href="<?= site_url('about-us') ?>" class="mobile-nav-tile <?= in_array($this->uri->segment(1), ['about-us', 'about']) ? 'active' : '' ?>">
                <i class="bi bi-info-circle-fill text-danger"></i>
                <span>About Us</span>
              </a>
              <a href="<?= site_url('why-choose-us') ?>" class="mobile-nav-tile <?= $this->uri->segment(1) == 'why-choose-us' ? 'active' : '' ?>">
                <i class="bi bi-patch-check-fill text-primary"></i>
                <span>Why Us</span>
              </a>
              <a href="<?= site_url('faqs') ?>" class="mobile-nav-tile <?= $this->uri->segment(1) == 'faqs' ? 'active' : '' ?>">
                <i class="bi bi-question-circle-fill text-warning"></i>
                <span>FAQs</span>
              </a>
              <a href="<?= site_url('testimonials') ?>" class="mobile-nav-tile <?= in_array($this->uri->segment(1), ['testimonials', 'reviews']) ? 'active' : '' ?>">
                <i class="bi bi-star-fill text-success"></i>
                <span>Testimonial</span>
              </a>
            </div>
          </div>

          <!-- Mobile Section 3 Header: Our Services (d-lg-none) -->
          <div class="mobile-nav-group d-block d-lg-none mt-3 mb-1">
            <div class="mobile-nav-header">
              <i class="bi bi-truck"></i>
              <span>OUR SERVICES</span>
            </div>
          </div>

          <!-- Navigation Links Centered -->
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0 align-items-lg-center">
            <!-- Desktop Home Link (d-none d-lg-block) -->
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link <?= empty($this->uri->segment(1)) || $this->uri->segment(1) == 'home' ? 'active' : '' ?>"
                href="<?= site_url() ?>">Home</a>
            </li>

            <!-- Mobile 8 Individual Services (d-lg-none) - Written Normally Outside Dropdown -->
            <li class="nav-item d-lg-none">
              <a class="nav-link <?= in_array($this->uri->segment(1), ['household-goods-shifting', 'home-relocation']) ? 'active' : '' ?>"
                href="<?= site_url('household-goods-shifting') ?>">Household Goods Shifting</a>
            </li>
            <li class="nav-item d-lg-none">
              <a class="nav-link <?= in_array($this->uri->segment(1), ['office-and-corporate-shifting', 'office-relocation']) ? 'active' : '' ?>"
                href="<?= site_url('office-and-corporate-shifting') ?>">Office &amp; Corporate Shifting</a>
            </li>
            <li class="nav-item d-lg-none">
              <a class="nav-link <?= $this->uri->segment(1) == 'local-and-domestic-shifting' ? 'active' : '' ?>"
                href="<?= site_url('local-and-domestic-shifting') ?>">Local &amp; Domestic Shifting</a>
            </li>
            <li class="nav-item d-lg-none">
              <a class="nav-link <?= in_array($this->uri->segment(1), ['packing-and-unpacking-services', 'packing-and-moving']) ? 'active' : '' ?>"
                href="<?= site_url('packing-and-unpacking-services') ?>">Packing &amp; Unpacking Services</a>
            </li>
            <li class="nav-item d-lg-none">
              <a class="nav-link <?= in_array($this->uri->segment(1), ['loading-and-unloading-services', 'loading-unloading']) ? 'active' : '' ?>"
                href="<?= site_url('loading-and-unloading-services') ?>">Loading &amp; Unloading Services</a>
            </li>
            <li class="nav-item d-lg-none">
              <a class="nav-link <?= in_array($this->uri->segment(1), ['vehicle-transportation', 'car-transportation', 'bike-transportation']) ? 'active' : '' ?>"
                href="<?= site_url('vehicle-transportation') ?>">Vehicle Transportation</a>
            </li>
            <li class="nav-item d-lg-none">
              <a class="nav-link <?= in_array($this->uri->segment(1), ['warehousing-and-storage-solutions', 'storage-services']) ? 'active' : '' ?>"
                href="<?= site_url('warehousing-and-storage-solutions') ?>">Warehousing &amp; Storage Solutions</a>
            </li>
            <li class="nav-item d-lg-none">
              <a class="nav-link <?= $this->uri->segment(1) == 'insurance-coverage' ? 'active' : '' ?>"
                href="<?= site_url('insurance-coverage') ?>">Insurance Coverage</a>
            </li>

            <!-- Desktop About Dropdown (d-none d-lg-block) -->
            <li class="nav-item dropdown d-none d-lg-block">
              <a class="nav-link dropdown-toggle <?= in_array($this->uri->segment(1), ['about-us', 'about', 'why-choose-us', 'faqs', 'testimonials', 'reviews']) ? 'active' : '' ?>"
                href="<?= site_url('about-us') ?>" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                About Us
              </a>
              <ul class="dropdown-menu border-0 shadow-lg py-2" aria-labelledby="aboutDropdown">
                <li>
                  <a class="dropdown-item d-flex align-items-center gap-2 <?= in_array($this->uri->segment(1), ['about-us', 'about']) ? 'active' : '' ?>" href="<?= site_url('about-us') ?>">
                    <i class="bi bi-info-circle-fill text-danger"></i>
                    <span>About Us Overview</span>
                  </a>
                </li>
                <li><hr class="dropdown-divider my-1 opacity-25"></li>
                <li>
                  <a class="dropdown-item d-flex align-items-center gap-2 <?= $this->uri->segment(1) == 'why-choose-us' ? 'active' : '' ?>" href="<?= site_url('why-choose-us') ?>">
                    <i class="bi bi-patch-check-fill text-primary"></i>
                    <span>Why Choose Us</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center gap-2 <?= $this->uri->segment(1) == 'faqs' ? 'active' : '' ?>" href="<?= site_url('faqs') ?>">
                    <i class="bi bi-question-circle-fill text-warning"></i>
                    <span>Frequently Asked Questions</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center gap-2 <?= in_array($this->uri->segment(1), ['testimonials', 'reviews']) ? 'active' : '' ?>" href="<?= site_url('testimonials') ?>">
                    <i class="bi bi-star-fill text-success"></i>
                    <span>Testimonials</span>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Desktop Services Dropdown (d-none d-lg-block) -->
            <li class="nav-item dropdown d-none d-lg-block">
              <a class="nav-link dropdown-toggle <?= in_array($this->uri->segment(1), ['services', 'household-goods-shifting', 'office-and-corporate-shifting', 'local-and-domestic-shifting', 'packing-and-unpacking-services', 'loading-and-unloading-services', 'vehicle-transportation', 'warehousing-and-storage-solutions', 'insurance-coverage', 'home-relocation', 'office-relocation', 'car-transportation', 'bike-transportation', 'storage-services', 'packing-and-moving', 'loading-unloading']) ? 'active' : '' ?>"
                href="<?= site_url('services') ?>" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu border-0 shadow-lg py-2" aria-labelledby="servicesDropdown">
                <li>
                  <a class="dropdown-item d-flex align-items-center gap-2 <?= $this->uri->segment(1) == 'services' ? 'active' : '' ?>" href="<?= site_url('services') ?>">
                    <i class="bi bi-grid-fill text-warning"></i>
                    <span>All Relocation Services</span>
                  </a>
                </li>
                <li><hr class="dropdown-divider my-1 opacity-25"></li>
                <li>
                  <a class="dropdown-item d-flex align-items-center gap-2 <?= in_array($this->uri->segment(1), ['household-goods-shifting', 'home-relocation']) ? 'active' : '' ?>" href="<?= site_url('household-goods-shifting') ?>">
                    <i class="bi bi-house-door-fill text-danger"></i>
                    <span>Household Goods Shifting</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center gap-2 <?= in_array($this->uri->segment(1), ['office-and-corporate-shifting', 'office-relocation']) ? 'active' : '' ?>" href="<?= site_url('office-and-corporate-shifting') ?>">
                    <i class="bi bi-buildings-fill text-primary"></i>
                    <span>Office &amp; Corporate Shifting</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center gap-2 <?= $this->uri->segment(1) == 'local-and-domestic-shifting' ? 'active' : '' ?>" href="<?= site_url('local-and-domestic-shifting') ?>">
                    <i class="bi bi-truck text-info"></i>
                    <span>Local &amp; Domestic Shifting</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center gap-2 <?= in_array($this->uri->segment(1), ['packing-and-unpacking-services', 'packing-and-moving']) ? 'active' : '' ?>" href="<?= site_url('packing-and-unpacking-services') ?>">
                    <i class="bi bi-box-seam-fill text-warning"></i>
                    <span>Packing &amp; Unpacking Services</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center gap-2 <?= in_array($this->uri->segment(1), ['loading-and-unloading-services', 'loading-unloading']) ? 'active' : '' ?>" href="<?= site_url('loading-and-unloading-services') ?>">
                    <i class="bi bi-box-arrow-in-down text-danger"></i>
                    <span>Loading &amp; Unloading Services</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center gap-2 <?= in_array($this->uri->segment(1), ['vehicle-transportation', 'car-transportation', 'bike-transportation']) ? 'active' : '' ?>" href="<?= site_url('vehicle-transportation') ?>">
                    <i class="bi bi-car-front-fill text-success"></i>
                    <span>Vehicle Transportation</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center gap-2 <?= in_array($this->uri->segment(1), ['warehousing-and-storage-solutions', 'storage-services']) ? 'active' : '' ?>" href="<?= site_url('warehousing-and-storage-solutions') ?>">
                    <i class="bi bi-building-fill-lock text-primary"></i>
                    <span>Warehousing &amp; Storage Solutions</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center gap-2 <?= $this->uri->segment(1) == 'insurance-coverage' ? 'active' : '' ?>" href="<?= site_url('insurance-coverage') ?>">
                    <i class="bi bi-shield-check text-success"></i>
                    <span>Insurance Coverage</span>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Desktop Regular Links (d-none d-lg-block) -->
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link <?= in_array($this->uri->segment(1), ['our-branches', 'branches', 'our-locations', 'location', 'locations', 'bihar', 'jharkhand', 'delhi', 'maharashtra', 'gujarat', 'punjab', 'west-bengal']) ? 'active' : '' ?>"
                href="<?= site_url('our-branches') ?>">Our Branches</a>
            </li>
              
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link <?= in_array($this->uri->segment(1), ['photo-gallery', 'video-gallery', 'gallery']) ? 'active' : '' ?>"
                href="<?= site_url('photo-gallery') ?>">Photo Gallery</a>
            </li>
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link <?= $this->uri->segment(1) == 'blog' ? 'active' : '' ?>"
                href="<?= site_url('blog') ?>">Blog</a>
            </li>
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link <?= $this->uri->segment(1) == 'contact-us' ? 'active' : '' ?>"
                href="<?= site_url('contact-us') ?>">Contact Us</a>
            </li>
          </ul>

          <!-- Quote CTA Button on Right -->
          <div class="nav-cta-wrapper d-flex align-items-center mt-3 mt-lg-0">
            <a href="<?= site_url('contact-us') ?>" class="btn btn-nav-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
              <span>Get a Free Quote</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <!-- Script for Desktop Hover & Click Navigation -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var dropdownToggles = document.querySelectorAll('.nav-item.dropdown > .dropdown-toggle');
      dropdownToggles.forEach(function (toggle) {
        toggle.addEventListener('click', function (e) {
          if (window.innerWidth >= 992) {
            var href = this.getAttribute('href');
            if (href && href !== '#' && !href.startsWith('javascript:')) {
              window.location.href = href;
            }
          }
        });
      });
    });
  </script>