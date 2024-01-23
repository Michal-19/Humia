<?php

/** @var string $contentHTML */
/** @var \App\Core\IAuthenticator $auth */
/** @var \App\Core\LinkGenerator $link */
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= \App\Config\Configuration::APP_NAME ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/public/css/styl.css">
    <link rel="stylesheet" href="/public/css/home.index.css">
    <link rel="stylesheet" href="/public/css/home.weAreWorkingOnThisPage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/public/js/script.js"></script>
</head>
<body>
<nav id="myNav" class="navbar">
    <div class="whole-navbar" id="navl">
        <div class="navbar-container-left">
            <a class="navbar-item left-navbar-item navbar-effects" href="?home&a=weAreWorkingOnThisPage">HUMIA radí</a>
            <a class="navbar-item left-navbar-item navbar-effects" href="?home&a=weAreWorkingOnThisPage">HUMIA služby</a>
        </div>
        <div class="navbar-container-right" id="navbar-right">
            <a class="navbar-item navbar-effects" href="?home&a=weAreWorkingOnThisPage">HUMIA UFO</a>
            <a class="navbar-item navbar-effects" href="?home&a=weAreWorkingOnThisPage">HUMIA spolupráca</a>
        </div>
    </div>
    <a class="navbar-logo-pointer" id="humia-logo">
        <img class="navbar-logo-img" src="/public/images/HUMIA logo v2.png" alt="LOGO" />
    </a>
    <div id="nav-icon4" onclick="openNav()">
        <span></span>
        <span></span>
        <span></span>
    </div>
</nav>
<div class="container-fluid mt-3">
    <div class="web-content">
        <?= $contentHTML ?>
    </div>
</div>
<footer class="footer">
    <section class="footer-container">
        <div class="footer-address-container">
            <h3 class="footer-container-item-title">Kontaktné údaje</h3>
            <div class="footer-address">
                HUMIA s.r.o.<br />
                Nám. Gen. M.R. Štefánika 41/49<br />
                Brezno 977 01<br />
                +421 949 331 186<br />
                info@humia.sk
            </div>
        </div>
        <div class="footer-log-in">
            <h3 class="footer-container-item-title center-text">Prihlásenie</h3>
            <a class="footer-log-in-btn" href="https://umd.universal.sk/" target="_blank">
                <span class="footer-btn-inner-text">PORTOS</span>
            </a>
        </div>
        <div class="footer-compulsory-documents">
            <h3 class="footer-container-item-title center-text">Povinné dokumenty</h3>
            <a class="footer-log-in-btn" href="https://universal.sk/o-nas-2/" target="_blank">
                <span class="footer-btn-inner-text">Informácie pre finančné sprostredkovanie</span>
            </a>
            <a class="footer-log-in-btn" href="https://universal.sk/povinne-dokumenty-a-informacie-pre-financne-sprostredkovanie/" target="_blank">
                <span class="footer-btn-inner-text">Informácie pre spracovávanie osobných údajov</span>
            </a>
        </div>
    </section>
    <section class="footer-social-media">
        <div class="footer-social-media-container">
            <a href="https://www.facebook.com/profile.php?id=61553032774587" target="_blank" title="Join us on Facebook">
                <img class="footer-social-media-img" src="/public/images/Social media/facebook.png" />
            </a>
            <a href="https://www.instagram.com/humia.sk/?igshid=OGQ5ZDc2ODk2ZA%3D%3D&utm_source=qr&fbclid=IwAR1aejMJZmiuGV2vW2sZYVvgO-WTBfVidfmzLXgBEuJW-2wkJBoKxaETdro" target="_blank" title="Join us on Instagram">
                <img class="footer-social-media-img" src="/public/images/Social media/instagram.png" />
            </a>
            <a href="https://www.linkedin.com/company/humia-s-r-o/?fbclid=IwAR2N8gjc4C4C11EAM4iQ8Ump6BToHJ4FP_AuIQeYeXb-9_KrQn8xAzNY-XM" target="_blank" title="Join us on Linked In">
                <img class="footer-social-media-img" src="/public/images/Social media/linkedin.png" />
            </a>
        </div>
    </section>
</footer>
</body>
</html>
