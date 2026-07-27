<?php
declare(strict_types=1);

$pageTitle = 'AIS Web';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php require __DIR__ . '/sections/header.php'; ?>

    <main>
        <?php require __DIR__ . '/sections/hero.php'; ?>
        <?php require __DIR__ . '/sections/benefits.php'; ?>
        <?php require __DIR__ . '/sections/video-consultation.php'; ?>
        <?php require __DIR__ . '/sections/services.php'; ?>
        <?php require __DIR__ . '/sections/closure-form.php'; ?>
        <?php require __DIR__ . '/sections/company.php'; ?>
        <?php require __DIR__ . '/sections/accreditations.php'; ?>
        <?php require __DIR__ . '/sections/mediators.php'; ?>
        <?php require __DIR__ . '/sections/process.php'; ?>
        <?php require __DIR__ . '/sections/why-us.php'; ?>
        <?php require __DIR__ . '/sections/faq.php'; ?>
        <?php require __DIR__ . '/sections/clients.php'; ?>
    </main>

    <?php require __DIR__ . '/sections/footer.php'; ?>

    <!-- Sticky Floating Contact Widget -->
    <aside class="floating-contact-widget" aria-label="Quick contact links">
        <a href="tel:08002461218" class="floating-widget-btn floating-widget-btn--phone" aria-label="Call 0800 246 1218">
            <span class="widget-label">Call 0800 246 1218</span>
            <span class="widget-icon" aria-hidden="true">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            </span>
        </a>
        <a href="mailto:info@effectivedisputesolutions.co.uk" class="floating-widget-btn floating-widget-btn--email" aria-label="Email Us">
            <span class="widget-label">Send an Email</span>
            <span class="widget-icon" aria-hidden="true">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            </span>
        </a>
    </aside>

    <!-- Floating Live Chat Trigger Widget -->
    <div class="floating-chat-widget">
        <div class="chat-speech-bubble" role="tooltip">
            <span>Talk to a mediator now!</span>
        </div>
        <button class="chat-trigger-btn" type="button" aria-label="Talk to a mediator now">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
        </button>
    </div>

    <script src="assets/js/main.js"></script>
</body>
</html>
