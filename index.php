<?php
require __DIR__ . '/includes/lang.php';

$lang = $_GET['lang'] ?? 'th';
if (!isset($translations[$lang])) {
    $lang = 'th';
}

$site = $translations[$lang];
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang, ENT_QUOTES, 'UTF-8') ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($site['title'], ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="description" content="<?= htmlspecialchars($site['meta_description'], ENT_QUOTES, 'UTF-8') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="topbar">
        <div class="container nav-wrap">
            <a href="index.php?lang=<?= $lang ?>" class="brand">
                <span class="brand-mark">VOGUE</span>
                <span class="brand-sub">Department Store Krabi</span>
            </a>

            <button class="menu-toggle" aria-label="Toggle menu">☰</button>

            <nav class="nav-links">
                <a href="#directory"><?= $site['nav_directory'] ?></a>
                <a href="#brands"><?= $site['nav_brands'] ?></a>
                <a href="#food"><?= $site['nav_food'] ?></a>
                <a href="#promotions"><?= $site['nav_promotions'] ?></a>
                <a href="#events"><?= $site['nav_events'] ?></a>
                <a href="#contact"><?= $site['nav_contact'] ?></a>
            </nav>

            <div class="lang-switch">
                <a href="index.php?lang=th" class="lang-link <?= $lang === 'th' ? 'active' : '' ?>">TH</a>
                <a href="index.php?lang=en" class="lang-link <?= $lang === 'en' ? 'active' : '' ?>">EN</a>
                <a href="index.php?lang=zh" class="lang-link <?= $lang === 'zh' ? 'active' : '' ?>">中文</a>
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container hero-grid">
                <div>
                    <p class="eyebrow"><?= $site['hero_tag'] ?></p>
                    <h1><?= $site['hero_title'] ?></h1>
                    <p class="hero-text"><?= $site['hero_text'] ?></p>
                    <div class="hero-actions">
                        <a href="#directory" class="btn primary"><?= $site['btn_directory'] ?></a>
                        <a href="#promotions" class="btn secondary"><?= $site['btn_promotions'] ?></a>
                    </div>
                </div>
                <div class="hero-card">
                    <h3><?= $site['stats_title'] ?></h3>
                    <ul>
                        <li><?= $site['stat_1'] ?></li>
                        <li><?= $site['stat_2'] ?></li>
                        <li><?= $site['stat_3'] ?></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="section container" id="directory">
            <div class="section-title">
                <h2><?= $site['directory_title'] ?></h2>
                <p><?= $site['directory_text'] ?></p>
            </div>
            <div class="card-grid three-col">
                <article class="card">
                    <h3><?= $site['dir_map'] ?></h3>
                    <p><?= $site['dir_map_text'] ?></p>
                </article>
                <article class="card">
                    <h3><?= $site['dir_store'] ?></h3>
                    <p><?= $site['dir_store_text'] ?></p>
                </article>
                <article class="card">
                    <h3><?= $site['dir_services'] ?></h3>
                    <p><?= $site['dir_services_text'] ?></p>
                </article>
            </div>
        </section>

        <section class="section alt-section" id="brands">
            <div class="container">
                <div class="section-title">
                    <h2><?= $site['brands_title'] ?></h2>
                    <p><?= $site['brands_text'] ?></p>
                </div>
                <div class="card-grid four-col">
                    <article class="card"><h3>Fashion</h3><p><?= $site['category_fashion'] ?></p></article>
                    <article class="card"><h3>Beauty</h3><p><?= $site['category_beauty'] ?></p></article>
                    <article class="card"><h3>Electronics</h3><p><?= $site['category_electronics'] ?></p></article>
                    <article class="card"><h3>Supermarket</h3><p><?= $site['category_supermarket'] ?></p></article>
                </div>
            </div>
        </section>

        <section class="section container" id="food">
            <div class="section-title">
                <h2><?= $site['food_title'] ?></h2>
                <p><?= $site['food_text'] ?></p>
            </div>
            <div class="card-grid three-col">
                <article class="card"><h3><?= $site['food_restaurant'] ?></h3><p><?= $site['food_restaurant_text'] ?></p></article>
                <article class="card"><h3><?= $site['food_cafe'] ?></h3><p><?= $site['food_cafe_text'] ?></p></article>
                <article class="card"><h3><?= $site['food_dessert'] ?></h3><p><?= $site['food_dessert_text'] ?></p></article>
            </div>
        </section>

        <section class="section alt-section" id="promotions">
            <div class="container">
                <div class="section-title">
                    <h2><?= $site['promo_title'] ?></h2>
                    <p><?= $site['promo_text'] ?></p>
                </div>
                <div class="promo-banner">
                    <div>
                        <p class="eyebrow"><?= $site['promo_badge'] ?></p>
                        <h3><?= $site['promo_heading'] ?></h3>
                        <p><?= $site['promo_desc'] ?></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section container" id="events">
            <div class="section-title">
                <h2><?= $site['event_title'] ?></h2>
                <p><?= $site['event_text'] ?></p>
            </div>
            <div class="card-grid two-col">
                <article class="card"><h3><?= $site['event_upcoming'] ?></h3><p><?= $site['event_upcoming_text'] ?></p></article>
                <article class="card"><h3><?= $site['event_exhibition'] ?></h3><p><?= $site['event_exhibition_text'] ?></p></article>
            </div>
        </section>

        <section class="section alt-section" id="contact">
            <div class="container contact-grid">
                <div>
                    <div class="section-title left-align">
                        <h2><?= $site['contact_title'] ?></h2>
                        <p><?= $site['contact_text'] ?></p>
                    </div>
                </div>
                <div class="contact-card">
                    <p><strong><?= $site['contact_address'] ?></strong></p>
                    <p><?= $site['contact_phone'] ?></p>
                    <p><?= $site['contact_email'] ?></p>
                    <p><?= $site['contact_social'] ?></p>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container footer-row">
            <div>
                <strong>VOGUE Department Store Krabi</strong>
                <p><?= $site['footer_text'] ?></p>
            </div>
            <div>
                <a href="index.php?lang=th">ไทย</a> |
                <a href="index.php?lang=en">English</a> |
                <a href="index.php?lang=zh">中文</a>
            </div>
        </div>
    </footer>

    <script src="assets/js/app.js"></script>
</body>
</html>
