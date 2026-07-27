<?php
$accreditationLogos = glob(__DIR__ . '/../assets/assets_company_logo_top/*.png') ?: [];
natsort($accreditationLogos);
?>
<section class="accreditations" aria-labelledby="accreditations-title">
    <div class="accreditations-shell">
        <p class="eyebrow">Trusted standards</p>
        <h2 id="accreditations-title">Mediation Company Accreditation's &amp; Video</h2>
        <div class="accreditations-grid">
            <button class="accreditation-video" type="button" data-accreditation-video aria-label="Play Mediation Company video">
                <img src="assets/video/mediation-benefits-thumbnail.png" alt="Mediation Company video preview">
                <span class="accreditation-play" aria-hidden="true">▶</span>
                <span class="video-caption">Watch our mediation introduction</span>
            </button>
            <div class="logo-wall" aria-label="Mediation company accreditations">
                <?php foreach ($accreditationLogos as $logo): ?>
                    <div class="accreditation-logo"><img src="assets/assets_company_logo_top/<?= htmlspecialchars(basename($logo), ENT_QUOTES, 'UTF-8') ?>" alt="Mediation company accreditation logo"></div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<div class="video-modal" data-video-modal hidden>
    <div class="video-modal-backdrop" data-video-modal-close></div>
    <div class="video-modal-dialog" role="dialog" aria-modal="true" aria-label="Mediation Company video">
        <button class="video-modal-close" type="button" aria-label="Close video" data-video-modal-close>×</button>
        <div class="video-modal-frame" data-video-modal-frame></div>
    </div>
</div>
