<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<main class="main">
    <!-- Breadcrumbs Section -->
    <?php 
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_current' => '',
    'bc_title_white' => 'Blog',
    'bc_title_orange' => 'Details',
    'bc_desc' => ''
]); 
?>

    <!-- Blog Single Post -->
    <section class="blog-details-section py-5 bg-light">
        <div class="container my-3">
            <div class="row">
                <!-- Main Content -->
                <div class="col-12">
                    <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm">
                        <!-- Image -->
                        <div class="mb-4 rounded-4 overflow-hidden shadow-sm position-relative">
                            <?php 
                            $image_url = !empty(@$query[0]->image_url) ? @$query[0]->image_url : (!empty($img) ? $img : base_url('assets/img/home-about.jpg'));
                            ?>
                            <img src="<?= $image_url ?>" alt="<?= htmlspecialchars(@$query[0]->title) ?>" class="img-fluid w-100 blog-details-img">
                        </div>
                        
                        <!-- Meta Info -->
                        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4 pb-3 border-bottom">
                            <div class="d-flex gap-3 text-muted small">
                                <span class="d-flex align-items-center gap-2"><i class="bi bi-calendar-event blog-icon-primary"></i> <?= date('M d, Y', strtotime(@$query[0]->created_at)) ?></span>
                                <span class="d-flex align-items-center gap-2"><i class="bi bi-person-circle text-success"></i> By <?= htmlspecialchars(!empty(@$query[0]->author) ? @$query[0]->author : 'Admin') ?></span>
                            </div>
                            <div>
                                <button class="btn btn-sm px-3 rounded-pill fw-bold blog-btn-share" data-bs-toggle="modal" data-bs-target="#shareModal">
                                    <i class="bi bi-share me-1"></i> Share Post
                                </button>
                            </div>
                        </div>

                        <!-- Blog Details -->
                        <h2 class="fw-bold mb-4 blog-details-title"><?= @$query[0]->title ?></h2>
                        <div class="blog-content-wrapper text-muted">
                            <?= nl2br(@$query[0]->content) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Share Modal -->
<div class="modal fade" id="shareModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 shadow-lg">
            <div class="modal-header border-bottom-0 pb-0">
                <h3 class="modal-title fw-bold blog-icon-primary fs-5">Share this post</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <div class="d-grid gap-3 social-buttons">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=YOUR_URL" target="_blank" class="btn text-white py-2 rounded-3 fw-bold blog-bg-fb">
                        <i class="bi bi-facebook me-2"></i> Share on Facebook
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=YOUR_URL" target="_blank" class="btn text-white py-2 rounded-3 fw-bold blog-bg-tw">
                        <i class="bi bi-twitter me-2"></i> Share on Twitter
                    </a>
                    <a href="https://api.whatsapp.com/send?text=YOUR_URL" target="_blank" class="btn text-white py-2 rounded-3 fw-bold blog-bg-wa">
                        <i class="bi bi-whatsapp me-2"></i> Share on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var currentUrl = window.location.href;
    document.querySelectorAll('.social-buttons a').forEach(function(btn) {
        var shareUrl = btn.getAttribute('href');
        btn.setAttribute('href', shareUrl.replace('YOUR_URL', encodeURIComponent(currentUrl)));
    });
</script>



<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "headline": "<?= addslashes(@$query[0]->title) ?>",
    "image": [
        "<?= !empty(@$query[0]->image_url) ? @$query[0]->image_url : (!empty($img) ? $img : base_url('assets/img/home-about.jpg')) ?>"
    ],
    "datePublished": "<?= date('c', strtotime(@$query[0]->created_at)) ?>",
    "author": {
        "@type": "Person",
        "name": "<?= !empty(@$query[0]->author) ? addslashes(@$query[0]->author) : 'Admin' ?>"
    },
    "publisher": {
        "@type": "Organization",
        "name": "<?= isset($company3) ? $company3 : 'Omraj Packers and Movers' ?>",
        "logo": {
            "@type": "ImageObject",
            "url": "<?= base_url('assets/img/logo/logo.png') ?>"
        }
    },
    "description": "<?= addslashes(substr(strip_tags(@$query[0]->description), 0, 160)) ?>",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "<?= current_url() ?>"
    }
}
</script>