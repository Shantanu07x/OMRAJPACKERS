<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php 
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_current' => 'Photo Gallery',
    'bc_title_white' => 'Photo',
    'bc_title_orange' => 'Gallery',
    'bc_desc' => 'Explore visual highlights of our verified packing crews, secure container fleets, and reliable shifting operations across India.'
]); 
?>

<!-- Main Page Content Section -->
<section class="photo-gallery-section py-4 py-lg-5">
    <div class="container">
        
        <!-- Header Info Bar -->
        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3 mb-4 pb-3 border-bottom">
            <div>
                <span class="badge px-3 py-2 rounded-pill fw-bold mb-2 d-inline-flex align-items-center gap-1" style="background-color: #fee2e2; color: #7f1d1d; border: 1px solid #fecaca;">
                    <i class="bi bi-images"></i> ON-FIELD OPERATIONS
                </span>
                <h2 class="fw-bold text-brand-blue mb-1">
                    Real Relocation &amp; Packing <span class="text-brand-red">Photo Gallery</span>
                </h2>
                <p class="text-contrast small mb-0">
                    Take a look at authentic photographs of our trained crew in action — ensuring zero damage, premium packing, and punctual delivery.
                </p>
            </div>
            <div>
                <button type="button" class="btn gallery-quote-btn rounded-pill px-4 py-2.5 fw-bold shadow-sm d-inline-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#qteModal">
                    <i class="bi bi-send-fill"></i> Request Moving Quote
                </button>
            </div>
        </div>

        <!-- Full-Width Photo Gallery Grid (Col-12, No Sidebar) -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 mb-5">
            <?php if (!empty($photos)): ?>
                <?php foreach ($photos as $photo): 
                    $img_url = base_url('assets/uploads/gallery/' . $photo->image);
                    $album = !empty($photo->album_name) ? $photo->album_name : 'General';
                    $title = !empty($photo->title) ? $photo->title : 'Packers and Movers Relocation';
                ?>
                <div class="col">
                    <div class="gallery-photo-card h-100 rounded-4 overflow-hidden border bg-white shadow-sm d-flex flex-column position-relative" 
                         role="button" 
                         tabindex="0"
                         onclick="openGalleryLightbox('<?= $img_url ?>', '<?= htmlspecialchars(addslashes($title)) ?>', '<?= htmlspecialchars(addslashes($album)) ?>')"
                         title="Click to view full photo">
                        
                        <div class="gallery-img-wrapper position-relative overflow-hidden">
                            <img loading="lazy" src="<?= $img_url ?>" class="w-100 gallery-img" alt="<?= htmlspecialchars($title) ?>">
                            <div class="gallery-hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                                <span class="gallery-zoom-circle rounded-circle d-flex align-items-center justify-content-center shadow">
                                    <i class="bi bi-arrows-fullscreen text-white fs-5"></i>
                                </span>
                            </div>
                            <span class="badge bg-danger position-absolute top-0 start-0 m-3 rounded-pill px-3 py-1.5 fw-semibold shadow-sm">
                                <?= htmlspecialchars($album) ?>
                            </span>
                        </div>

                        <div class="card-body p-3 d-flex flex-column justify-content-between flex-grow-1">
                            <h3 class="fw-bold text-brand-blue mb-1 fs-6 text-truncate" title="<?= htmlspecialchars($title) ?>">
                                <?= htmlspecialchars($title) ?>
                            </h3>
                            <div class="d-flex align-items-center justify-content-between text-muted small mt-2 pt-2 border-top">
                                <span class="text-success fw-semibold d-inline-flex align-items-center gap-1" style="font-size: 0.78rem;">
                                    <i class="bi bi-patch-check-fill"></i> Verified Shift
                                </span>
                                <span class="text-contrast" style="font-size: 0.78rem;">
                                    <i class="bi bi-zoom-in me-1"></i> Click to Zoom
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 w-100 text-center py-5">
                    <div class="p-5 bg-white rounded-4 border shadow-sm mx-auto" style="max-width: 600px;">
                        <i class="bi bi-images text-muted fs-1 mb-3 d-block"></i>
                        <h3 class="text-brand-blue fw-bold mb-2 fs-5">No Gallery Photos Uploaded Yet</h3>
                        <p class="text-contrast small mb-3">
                            New on-field relocation photos posted from our operations portal will appear here automatically.
                        </p>
                        <a href="<?= site_url('contact-us') ?>" class="btn btn-danger rounded-pill px-4 py-2 fw-bold">
                            <i class="bi bi-telephone-fill me-1"></i> Contact Coordinator
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <!-- CTA Concierge Banner -->
        <section class="about-cta-banner my-4">
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
</section>

<!-- Gallery Image Lightbox Modal -->
<div class="modal fade" id="galleryLightboxModal" tabindex="-1" aria-labelledby="galleryLightboxModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4 border-0 shadow-lg overflow-hidden bg-dark">
            <div class="modal-header border-0 pb-0 position-relative">
                <div>
                    <span class="badge bg-danger rounded-pill px-3 py-1 mb-1" id="galleryLightboxAlbum"></span>
                    <h3 class="modal-title text-white fw-bold fs-5" id="galleryLightboxModalLabel"></h3>
                </div>
                <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-3 text-center">
                <img id="galleryLightboxImg" src="" alt="Gallery Preview" class="img-fluid rounded-3 shadow" style="max-height: 75vh; object-fit: contain;">
            </div>
        </div>
    </div>
</div>

<script>
function openGalleryLightbox(imgUrl, title, album) {
    document.getElementById('galleryLightboxImg').src = imgUrl;
    document.getElementById('galleryLightboxModalLabel').textContent = title || 'Packers and Movers Relocation';
    document.getElementById('galleryLightboxAlbum').textContent = album || 'General';
    var myModal = new bootstrap.Modal(document.getElementById('galleryLightboxModal'));
    myModal.show();
}
</script>
