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
        <?php require __DIR__ . '/sections/about.php'; ?>
    </main>

    <?php require __DIR__ . '/sections/footer.php'; ?>
    <script src="assets/js/main.js"></script>
</body>
</html>
