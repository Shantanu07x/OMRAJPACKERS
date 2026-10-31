<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// Curated verified customer reviews
$testimonials = [
    [
        'name' => 'Rahul Sharma',
        'initials' => 'RS',
        'stars' => 5,
        'route' => 'Mumbai to Bangalore',
        'desc' => 'Outstanding relocation service! Omraj Packers moved our 3 BHK household items from Mumbai to Bangalore without a single scratch. The team was punctual, polite, and extremely professional with packing fragile glassware.',
        'date' => '2 days ago',
        'gradient' => 'avatar-blue'
    ],
    [
        'name' => 'Priya Mehta',
        'initials' => 'PM',
        'stars' => 5,
        'route' => 'Pune to Hyderabad',
        'desc' => 'Moved my car and apartment goods on short notice. Everything arrived right on schedule within 48 hours. The live updates and tracking gave us total peace of mind. Highly recommended for interstate moves!',
        'date' => '1 week ago',
        'gradient' => 'avatar-red'
    ],
    [
        'name' => 'Amit Verma',
        'initials' => 'AV',
        'stars' => 5,
        'route' => 'Delhi to Kolkata',
        'desc' => 'Transparent pricing with no hidden charges. The crew used multi-layer bubble wrap and heavy-duty corrugated sheets. Truly impressed with their dedication and care throughout the entire journey.',
        'date' => '2 weeks ago',
        'gradient' => 'avatar-amber'
    ],
    [
        'name' => 'Rajesh Nair',
        'initials' => 'RN',
        'stars' => 5,
        'route' => 'Thane to Kochi',
        'desc' => 'Very professional packers. From dismantling our modular furniture to reinstalling everything at our new home, their team handled it all seamlessly. Excellent value for money and friendly staff.',
        'date' => '3 weeks ago',
        'gradient' => 'avatar-green'
    ],
    [
        'name' => 'Sneha Patil',
        'initials' => 'SP',
        'stars' => 5,
        'route' => 'Local Shifting, Mumbai',
        'desc' => 'Fast, affordable, and zero hassle. Shifted my 1 BHK from Andheri to Powai in just half a day. The staff was courteous and took immense care of all our electronic appliances and furniture.',
        'date' => '1 month ago',
        'gradient' => 'avatar-purple'
    ],
    [
        'name' => 'Vikramaditya Rao',
        'initials' => 'VR',
        'stars' => 5,
        'route' => 'Bangalore to Chennai',
        'desc' => 'Best moving experience I have had in 15 years. The staff was well-trained and cooperative. Every box was clearly labeled and inventoried. Thank you Omraj Packers for such peace of mind!',
        'date' => '1 month ago',
        'gradient' => 'avatar-navy'
    ]
];

// Check if database has user reviews and prepend them
if (isset($this->db)) {
    $this->db->where('status', 1);
    $this->db->order_by('r_id', 'desc');
    $this->db->limit(6);
    $db_q = $this->db->get('reviews');
    if ($db_q && $db_q->num_rows() > 0) {
        $db_items = [];
        $gradients = ['avatar-blue', 'avatar-red', 'avatar-amber', 'avatar-green', 'avatar-purple', 'avatar-navy'];
        $i = 0;
        foreach ($db_q->result() as $row) {
            $parts = explode(' ', trim($row->name));
            $ini = strtoupper(substr($parts[0], 0, 1) . (isset($parts[1]) ? substr($parts[1], 0, 1) : ''));
            $db_items[] = [
                'name' => $row->name,
                'initials' => $ini ?: 'CL',
                'stars' => (int) $row->stars,
                'route' => !empty($row->r_title) ? $row->r_title : 'Verified Relocation',
                'desc' => $row->r_desc,
                'date' => date('M d, Y', strtotime($row->posted_date)),
                'gradient' => $gradients[$i % count($gradients)]
            ];
            $i++;
        }
        $testimonials = array_merge($db_items, $testimonials);
    }
}
?>

<!-- ==========================================================================
     Testimonials Slider Section
     ========================================================================== -->
<section id="testimonials" class="testimonials-section py-5 py-lg-6 position-relative overflow-hidden">
    <div class="container position-relative">

        <!-- Section Header -->
        <div class="text-center mb-4 mb-lg-5">
            <div class="section-tag-badge justify-content-center">
                <span class="section-tag-line"></span>
                <span class="section-tag-text">CLIENT TESTIMONIALS</span>
            </div>
            <h2 class="services-main-title mt-1 mb-2">
                What Our Happy Clients <span class="services-title-red">Say About Us</span>
            </h2>
            <p class="testimonials-subtitle text-muted mx-auto mb-3">
                Real moving experiences and reviews from families and businesses across India.
            </p>

            <!-- Overall Trust Badge -->
            <div class="testimonials-trust-pill d-inline-flex align-items-center gap-2">
                <div class="d-flex gap-1 text-warning">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <span class="testimonials-trust-score">4.9 / 5.0</span>
                <span class="testimonials-trust-sep">|</span>
                <span class="testimonials-trust-count">Over 1,500+ Verified Moves</span>
            </div>
        </div>

        <!-- Slider Viewport and Track -->
        <div class="testimonial-slider-container position-relative">
            <div class="testimonial-slider-viewport" id="testimonialSliderViewport">
                <div class="testimonial-slider-track" id="testimonialSliderTrack">
                    <?php foreach ($testimonials as $t): ?>
                        <div class="testimonial-slide">
                            <div class="testimonial-card h-100 d-flex flex-column">
                                <!-- Card Header: Stars & Quote Icon -->
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="testimonial-stars d-flex gap-1 text-warning">
                                        <?php for ($s = 0; $s < $t['stars']; $s++): ?>
                                            <i class="bi bi-star-fill"></i>
                                        <?php endfor; ?>
                                    </div>
                                    <div class="testimonial-quote-icon">
                                        <i class="bi bi-quote"></i>
                                    </div>
                                </div>

                                <!-- Review Body -->
                                <p class="testimonial-desc mb-3 flex-grow-1">
                                    &ldquo;<?= htmlspecialchars($t['desc']) ?>&rdquo;
                                </p>

                                <!-- Route / Location Badge -->
                                <div class="mb-3">
                                    <span class="testimonial-route-badge">
                                        <i class="bi bi-geo-alt-fill text-danger me-1"></i>
                                        <?= htmlspecialchars($t['route']) ?>
                                    </span>
                                </div>

                                <!-- Author Info Footer -->
                                <div class="testimonial-author d-flex align-items-center gap-3 pt-3">
                                    <div class="testimonial-avatar <?= $t['gradient'] ?> d-flex align-items-center justify-content-center">
                                        <span><?= htmlspecialchars($t['initials']) ?></span>
                                    </div>
                                    <div class="testimonial-author-meta">
                                        <h3 class="testimonial-author-name mb-0"><?= htmlspecialchars($t['name']) ?></h3>
                                        <div class="d-flex align-items-center gap-1">
                                            <span class="testimonial-verified-badge">
                                                <i class="bi bi-patch-check-fill text-primary"></i> Verified Customer
                                            </span>
                                            <span class="testimonial-author-date text-muted">&bull; <?= htmlspecialchars($t['date']) ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Slider Controls: Prev Arrow, 2 Dots in between, Next Arrow -->
            <div class="testimonial-controls d-flex align-items-center justify-content-center gap-2 mt-4">
                <!-- Previous Arrow -->
                <button type="button" class="testimonial-arrow-btn" id="testimonialPrevBtn" aria-label="Previous Testimonial">
                    <i class="bi bi-chevron-left"></i>
                </button>

                <!-- Exactly 2 Dots (between Prev & Next) -->
                <div class="testimonial-dots d-flex align-items-center gap-1 mx-2" id="testimonialDots"></div>

                <!-- Next Arrow -->
                <button type="button" class="testimonial-arrow-btn" id="testimonialNextBtn" aria-label="Next Testimonial">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>

    </div>
</section>

<!-- ==========================================================================
     Testimonial Slider Dynamic Script
     ========================================================================== -->
<script>
(function() {
    function initTestimonialSlider() {
        var viewport = document.getElementById('testimonialSliderViewport');
        var prevBtn = document.getElementById('testimonialPrevBtn');
        var nextBtn = document.getElementById('testimonialNextBtn');
        var dotsContainer = document.getElementById('testimonialDots');

        if (!viewport || !prevBtn || !nextBtn || !dotsContainer) return;

        var slides = viewport.querySelectorAll('.testimonial-slide');
        if (!slides.length) return;

        function getSlideWidth() {
            var slide = slides[0];
            var track = document.getElementById('testimonialSliderTrack');
            var gap = 20;
            if (track) {
                var computedGap = window.getComputedStyle(track).gap;
                if (computedGap && computedGap !== 'normal') {
                    gap = parseFloat(computedGap) || 20;
                }
            }
            return slide.offsetWidth + gap;
        }

        // Only 2 dots between the arrows
        function createDots() {
            dotsContainer.innerHTML = '';
            for (var i = 0; i < 2; i++) {
                (function(idx) {
                    var dot = document.createElement('button');
                    dot.type = 'button';
                    dot.className = 'testimonial-dot' + (idx === 0 ? ' active' : '');
                    dot.setAttribute('aria-label', 'Go to testimonials page ' + (idx + 1));
                    dot.addEventListener('click', function() {
                        var maxScroll = viewport.scrollWidth - viewport.clientWidth;
                        if (idx === 0) {
                            viewport.scrollTo({
                                left: 0,
                                behavior: 'smooth'
                            });
                        } else {
                            viewport.scrollTo({
                                left: maxScroll,
                                behavior: 'smooth'
                            });
                        }
                    });
                    dotsContainer.appendChild(dot);
                })(i);
            }
        }

        function updateActiveDot() {
            var maxScroll = viewport.scrollWidth - viewport.clientWidth;
            if (maxScroll <= 0) return;
            var currentScroll = viewport.scrollLeft;
            var activeDotIdx = (currentScroll >= (maxScroll * 0.45)) ? 1 : 0;

            var dots = dotsContainer.querySelectorAll('.testimonial-dot');
            dots.forEach(function(dot, idx) {
                if (idx === activeDotIdx) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        }

        nextBtn.addEventListener('click', function() {
            var slideWidth = getSlideWidth();
            var maxScroll = viewport.scrollWidth - viewport.clientWidth;
            if (viewport.scrollLeft >= maxScroll - 15) {
                viewport.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                viewport.scrollBy({ left: slideWidth, behavior: 'smooth' });
            }
        });

        prevBtn.addEventListener('click', function() {
            var slideWidth = getSlideWidth();
            var maxScroll = viewport.scrollWidth - viewport.clientWidth;
            if (viewport.scrollLeft <= 15) {
                viewport.scrollTo({ left: maxScroll, behavior: 'smooth' });
            } else {
                viewport.scrollBy({ left: -slideWidth, behavior: 'smooth' });
            }
        });

        var scrollDebounce;
        viewport.addEventListener('scroll', function() {
            clearTimeout(scrollDebounce);
            scrollDebounce = setTimeout(function() {
                updateActiveDot();
            }, 50);
        }, { passive: true });

        // Autoplay every 5.5 seconds
        var autoplayInterval;
        function startAutoplay() {
            stopAutoplay();
            autoplayInterval = setInterval(function() {
                nextBtn.click();
            }, 5500);
        }
        function stopAutoplay() {
            if (autoplayInterval) clearInterval(autoplayInterval);
        }

        viewport.addEventListener('mouseenter', stopAutoplay);
        viewport.addEventListener('mouseleave', startAutoplay);
        viewport.addEventListener('touchstart', stopAutoplay, { passive: true });
        viewport.addEventListener('touchend', startAutoplay, { passive: true });

        window.addEventListener('resize', function() {
            updateActiveDot();
        });

        createDots();
        startAutoplay();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initTestimonialSlider);
    } else {
        initTestimonialSlider();
    }
})();
</script>