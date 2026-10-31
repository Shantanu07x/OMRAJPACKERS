<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Customer Reviews &amp; Testimonials',
    'bc_desc' => 'Read Genuine Stories &amp; Feedback From Verified Relocation Clients Across India',
    'breadcrumbs' => [
        ['name' => 'About Us', 'url' => site_url('about-us')],
        ['name' => 'Testimonials']
    ]
]);
?>

<div class="about-page-wrap py-4 py-lg-5">
    <div class="container">

        <!-- Top Header & Write Review Action -->
        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3 mb-4 pb-3 border-bottom">
            <div>
                <span class="badge bg-danger-subtle text-danger-emphasis px-3 py-2 rounded-pill fw-bold mb-2 d-inline-flex align-items-center gap-1">
                    <i class="bi bi-star-fill text-warning"></i> VERIFIED CUSTOMER STORIES
                </span>
                <h2 class="fw-bold text-brand-blue mb-1">
                    Customer Reviews &amp; <span class="text-brand-red">Testimonials</span>
                </h2>
                <p class="small mb-0" style="color: #334155 !important;">
                    Discover real experiences from families and businesses who relocated with <?= htmlspecialchars($company3) ?>.
                </p>
            </div>
            <div>
                <button type="button" class="btn btn-danger rounded-pill px-4 py-2.5 fw-bold shadow-sm d-inline-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#reviewModal">
                    <i class="bi bi-pencil-square"></i> Write a Review
                </button>
            </div>
        </div>

        <!-- Two Rows of Review Cards (3 cards per row on desktop = 6 cards per page) -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4">
            <?php
            $gradients = ['avatar-blue', 'avatar-red', 'avatar-amber', 'avatar-green', 'avatar-purple', 'avatar-navy'];
            $i = 0;
            if ($reviews->num_rows() == 0):
            ?>
                <div class="col-12 w-100 text-center py-5">
                    <div class="p-5 bg-white rounded-4 border shadow-sm">
                        <i class="bi bi-chat-square-quote text-muted fs-1 mb-3 d-block"></i>
                        <h4 class="text-brand-blue fw-bold mb-2">Be The First To Share Your Experience!</h4>
                        <p class="text-secondary small mb-3">No reviews submitted yet. Click below to write a review.</p>
                        <button type="button" class="btn btn-danger rounded-pill px-4 py-2 fw-bold" data-bs-toggle="modal" data-bs-target="#reviewModal">
                            <i class="bi bi-pencil-square me-1"></i> Write a Review
                        </button>
                    </div>
                </div>
            <?php else:
                foreach ($reviews->result() as $r):
                    $grad = $gradients[$i % count($gradients)];
                    $i++;
                    $name_parts = explode(' ', trim($r->name));
                    $initials = strtoupper(substr($name_parts[0], 0, 1) . (isset($name_parts[1]) ? substr($name_parts[1], 0, 1) : ''));
                    $stars = max(1, min(5, (int)$r->stars));
                    $route = !empty($r->city) ? $r->city : (!empty($r->r_title) ? $r->r_title : 'Verified Relocation');
                    $date_str = date('M d, Y', strtotime($r->posted_date));
            ?>
                <div class="col">
                    <div class="about-infra-card d-flex flex-column h-100 p-4">
                        <!-- Top Header with Stars & Verified Badge -->
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="text-warning fs-6">
                                <?php for ($s = 0; $s < $stars; $s++): ?>
                                    <i class="bi bi-star-fill"></i>
                                <?php endfor; ?>
                                <?php for ($s = $stars; $s < 5; $s++): ?>
                                    <i class="bi bi-star text-muted opacity-50"></i>
                                <?php endfor; ?>
                            </div>
                            <span class="badge bg-success-subtle text-success-emphasis border border-success-subtle rounded-pill px-2.5 py-1 small fw-semibold">
                                <i class="bi bi-patch-check-fill me-1"></i> Verified
                            </span>
                        </div>

                        <!-- Review Text -->
                        <p class="text-dark small mb-3 flex-grow-1" style="line-height: 1.65;">
                            &ldquo;<?= nl2br(htmlspecialchars($r->r_desc)) ?>&rdquo;
                        </p>

                        <!-- Optional Uploaded Review Images -->
                        <?php if (!empty($r->r_img)):
                            $images = explode(',', $r->r_img);
                        ?>
                            <div class="d-flex flex-wrap gap-2 mb-3">
                                <?php foreach ($images as $img):
                                    if (trim($img) !== ''):
                                ?>
                                    <img src="<?= base_url(trim($img)) ?>" alt="Review Image" class="img-thumbnail shadow-sm" onclick="openImageModal(this.src)" style="height: 52px; width: 52px; object-fit: cover; border-radius: 8px; cursor: pointer;">
                                <?php endif; endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <!-- Author & Route Details -->
                        <div class="pt-3 mt-auto border-top d-flex align-items-center gap-3">
                            <div class="review-avatar-circle <?= $grad ?> flex-shrink-0">
                                <?= $initials ?: 'CL' ?>
                            </div>
                            <div class="overflow-hidden flex-grow-1">
                                <strong class="text-brand-blue d-block text-truncate small"><?= htmlspecialchars($r->name) ?></strong>
                                <span class="small d-block text-truncate" style="font-size: 0.78rem; color: #475569;">
                                    <i class="bi bi-geo-alt-fill text-danger me-1"></i><?= htmlspecialchars($route) ?>
                                </span>
                            </div>
                            <div class="text-end flex-shrink-0">
                                <small style="font-size: 0.75rem; color: #475569;">
                                    <i class="bi bi-calendar3 me-1"></i><?= $date_str ?>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; endif; ?>
        </div>

        <!-- Pagination Section: Previous, Pages, Next (Shift to next page like a loop) -->
        <div class="d-flex justify-content-center mt-4">
            <?= $pagination ?>
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

<!-- Write a Review Modal Form -->
<div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 border-0 shadow-lg overflow-hidden">
            <div class="modal-header border-0 bg-navy text-white px-4 py-3" style="background-color: var(--logo-blue);">
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-pencil-square text-danger fs-5"></i>
                    <h3 class="modal-title fs-5 fw-bold text-white mb-0" id="reviewModalLabel">Write a Customer Review</h3>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <!-- Submission Message Inside Review Form Modal -->
                <div id="review-modal-alert">
                    <?php if ($this->session->flashdata('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show rounded-3 shadow-sm mb-3" role="alert">
                            <div class="d-flex align-items-center gap-2 pe-3">
                                <i class="bi bi-check-circle-fill text-success fs-5 flex-shrink-0"></i>
                                <div class="fw-semibold text-success-emphasis"><?= $this->session->flashdata('success') ?></div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <?php if ($this->session->flashdata('error')): ?>
                        <div class="alert alert-danger alert-dismissible fade show rounded-3 shadow-sm mb-3" role="alert">
                            <div class="d-flex align-items-center gap-2 pe-3">
                                <i class="bi bi-exclamation-triangle-fill text-danger fs-5 flex-shrink-0"></i>
                                <div class="fw-semibold text-danger-emphasis"><?= $this->session->flashdata('error') ?></div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                </div>

                <form id="review-submit-form" action="<?= site_url('reviews/submit') ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="redirect_to" value="<?= site_url('testimonials') ?>">
                    
                    <div class="mb-3">
                        <label for="rev_name" class="form-label small fw-bold text-dark mb-1">Your Full Name <span class="text-danger">*</span></label>
                        <input type="text" id="rev_name" name="name" class="form-control rounded-3" placeholder="e.g. Rajesh Kumar" required>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col-12 col-sm-6">
                            <label for="rev_email" class="form-label small fw-bold text-dark mb-1">Email Address <span class="text-danger">*</span></label>
                            <input type="email" id="rev_email" name="email" class="form-control rounded-3" placeholder="rajesh@example.com" required>
                        </div>
                        <div class="col-12 col-sm-6">
                            <label for="rev_city" class="form-label small fw-bold text-dark mb-1">City or Route <span class="text-danger">*</span></label>
                            <input type="text" id="rev_city" name="city" class="form-control rounded-3" placeholder="e.g. Patna to Bangalore" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-bold text-dark mb-1" id="rating-label">Your Rating <span class="text-danger">*</span></label>
                        <div class="d-flex align-items-center gap-3 p-2 bg-light rounded-3 border" role="group" aria-labelledby="rating-label">
                            <div class="contact-rating-select d-flex gap-1" id="star-rating">
                                <i class="bi bi-star-fill text-warning fs-4 contact-rating-item" role="button" tabindex="0" aria-label="1 star" data-value="1" style="cursor: pointer;"></i>
                                <i class="bi bi-star-fill text-warning fs-4 contact-rating-item" role="button" tabindex="0" aria-label="2 stars" data-value="2" style="cursor: pointer;"></i>
                                <i class="bi bi-star-fill text-warning fs-4 contact-rating-item" role="button" tabindex="0" aria-label="3 stars" data-value="3" style="cursor: pointer;"></i>
                                <i class="bi bi-star-fill text-warning fs-4 contact-rating-item" role="button" tabindex="0" aria-label="4 stars" data-value="4" style="cursor: pointer;"></i>
                                <i class="bi bi-star-fill text-warning fs-4 contact-rating-item" role="button" tabindex="0" aria-label="5 stars" data-value="5" style="cursor: pointer;"></i>
                            </div>
                            <div class="d-flex align-items-center gap-1 ms-auto">
                                <span id="rating-emoji" class="fs-5" aria-hidden="true">😍</span>
                                <span id="rating-number" class="fw-bold text-dark">5</span><span class="text-muted small">/5</span>
                            </div>
                        </div>
                        <input type="hidden" name="rating" id="rating-input" value="5">
                    </div>

                    <div class="mb-3">
                        <label for="rev_review" class="form-label small fw-bold text-dark mb-1">Your Review &amp; Experience <span class="text-danger">*</span></label>
                        <textarea id="rev_review" name="review" class="form-control rounded-3" rows="4" placeholder="How was your relocation experience with Omraj Packers and Movers? Mention timeliness, packing quality, and staff behavior..." required></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="review-images-input" class="form-label small fw-bold text-dark mb-1">Upload Photos <small class="text-muted">(Optional, up to 4 images)</small></label>
                        <input type="file" id="review-images-input" name="review_images[]" class="form-control rounded-3" accept="image/jpeg, image/png, image/webp" multiple>
                    </div>

                    <button type="submit" id="btn-submit-review" class="btn btn-danger w-100 rounded-pill py-2.5 fw-bold shadow-sm">
                        <i class="bi bi-send-fill me-1"></i> Submit Review
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Full Screen Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-transparent border-0">
      <div class="modal-header border-0 pb-0 justify-content-end">
        <button type="button" class="btn-close bg-white rounded-circle p-2" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center p-0">
        <img id="fullImage" src="" class="img-fluid rounded-4 shadow-lg" style="max-height: 80vh; object-fit: contain; max-width: 100%;">
      </div>
    </div>
  </div>
</div>

<script>
function openImageModal(src) {
    document.getElementById('fullImage').src = src;
    var myModal = new bootstrap.Modal(document.getElementById('imageModal'));
    myModal.show();
}

document.addEventListener('DOMContentLoaded', function() {
    <?php if ($this->session->flashdata('success') || $this->session->flashdata('error')): ?>
    var revModalEl = document.getElementById('reviewModal');
    if (revModalEl && typeof bootstrap !== 'undefined') {
        var revModal = new bootstrap.Modal(revModalEl);
        revModal.show();
    }
    <?php endif; ?>

    const emojis = {
        1: '😠',
        2: '😞',
        3: '😐',
        4: '🙂',
        5: '😍'
    };
    const emojiDisplay = document.getElementById('rating-emoji');
    const numberDisplay = document.getElementById('rating-number');
    
    document.querySelectorAll('.contact-rating-item').forEach(star => {
        star.addEventListener('click', function() {
            const value = this.getAttribute('data-value');
            document.getElementById('rating-input').value = value;
            if (emojiDisplay) emojiDisplay.textContent = emojis[value];
            if (numberDisplay) numberDisplay.textContent = value;
            
            document.querySelectorAll('.contact-rating-item').forEach(s => {
                if (parseInt(s.getAttribute('data-value')) <= parseInt(value)) {
                    s.classList.replace('bi-star', 'bi-star-fill');
                    s.classList.add('text-warning');
                    s.classList.remove('text-muted');
                } else {
                    s.classList.replace('bi-star-fill', 'bi-star');
                    s.classList.remove('text-warning');
                    s.classList.add('text-muted');
                }
            });
        });
    });

    // Handle Review Form Submission via AJAX to display message inside the form
    const reviewForm = document.getElementById('review-submit-form');
    const alertContainer = document.getElementById('review-modal-alert');
    const submitBtn = document.getElementById('btn-submit-review');

    if (reviewForm) {
        reviewForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (!this.checkValidity()) {
                this.reportValidity();
                return;
            }

            const origBtnHtml = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Submitting...';

            if (alertContainer) {
                alertContainer.innerHTML = '';
            }

            const formData = new FormData(this);

            fetch(this.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                }
            })
            .then(res => res.json())
            .then(data => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = origBtnHtml;

                if (data.status === 'success') {
                    if (alertContainer) {
                        alertContainer.innerHTML = `
                            <div class="alert alert-success alert-dismissible fade show rounded-3 shadow-sm mb-3" role="alert">
                                <div class="d-flex align-items-center gap-2 pe-3">
                                    <i class="bi bi-check-circle-fill text-success fs-5 flex-shrink-0"></i>
                                    <div class="fw-semibold text-success-emphasis">${data.message}</div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        `;
                    }
                    reviewForm.reset();
                    
                    // Reset star rating visual to 5
                    const star5 = document.querySelector('.contact-rating-item[data-value="5"]');
                    if (star5) star5.click();

                    // Scroll modal body smoothly to top to show message
                    const modalBody = reviewForm.closest('.modal-body');
                    if (modalBody) {
                        modalBody.scrollTo({ top: 0, behavior: 'smooth' });
                    }

                    // Reload page after brief delay to show new review at top
                    setTimeout(() => {
                        window.location.reload();
                    }, 2500);
                } else {
                    if (alertContainer) {
                        alertContainer.innerHTML = `
                            <div class="alert alert-danger alert-dismissible fade show rounded-3 shadow-sm mb-3" role="alert">
                                <div class="d-flex align-items-center gap-2 pe-3">
                                    <i class="bi bi-exclamation-triangle-fill text-danger fs-5 flex-shrink-0"></i>
                                    <div class="fw-semibold text-danger-emphasis">${data.message || 'Something went wrong. Please try again.'}</div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        `;
                    }
                }
            })
            .catch(err => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = origBtnHtml;
                // Fallback to normal form submit if fetch fails
                reviewForm.submit();
            });
        });
    }
});
</script>
