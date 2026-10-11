<?php
require_once "sistem/loader.php";
$ogrenimBilgileri = $code->GetirOgrenimBilgileri();
$yetenekler = $code->GetirYetenekler(true);
$onsayfa = $code->getirOnsayfaAyarlari();
$adSoyad = !empty($onsayfa->ad_soyad) ? $onsayfa->ad_soyad : "Alperen YILMAZ";
$profilFoto = !empty($onsayfa->profil_foto) ? $onsayfa->profil_foto : "me1.png";
$hakkimdaYazi = !empty($onsayfa->hakkimda_yazi) ? $onsayfa->hakkimda_yazi : "Ben Alperen Yılmaz. 25 Haziran 2003 tarihinde Kayseri'nin Develi ilçesinde doğdum.";
$ogrenimBaslik = !empty($onsayfa->ogrenim_baslik) ? $onsayfa->ogrenim_baslik : "Öğrenim Bilgileri";
$yetenekBaslik = !empty($onsayfa->yetenek_baslik) ? $onsayfa->yetenek_baslik : "Yeteneklerim";
$email = !empty($onsayfa->email) ? $onsayfa->email : "alperenyilmasz38@gmail.com";
$telefon = !empty($onsayfa->telefon) ? $onsayfa->telefon : "+90 507 903 2778";
$instagramUrl = !empty($onsayfa->instagram_url) ? $onsayfa->instagram_url : "https://www.instagram.com/alperenyilmasz/";
$twitterUrl = !empty($onsayfa->twitter_url) ? $onsayfa->twitter_url : "https://x.com/alperenyilmasz";
$facebookUrl = isset($onsayfa->facebook_url) ? $onsayfa->facebook_url : "";
$linkedinUrl = !empty($onsayfa->linkedin_url) ? $onsayfa->linkedin_url : "https://www.linkedin.com/in/alperenyilmasz/";
$githubUrl = !empty($onsayfa->github_url) ? $onsayfa->github_url : "https://github.com/alperenyilmasz";
$footerYazi = !empty($onsayfa->footer_yazi) ? $onsayfa->footer_yazi : "Copyright © 2026  AlpY. Tüm Hakları Saklıdır.";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Alperen YILMAZ</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" rel="stylesheet">
    <link rel="icon" href="logo.png">

    <style>
      html {
        scroll-behavior: smooth;
      }

      body {
        background: linear-gradient(135deg, #ffffff 0%, #b3d9ff 50%, #80bfff 100%);
        background-size: 200% 200%;
        min-height: 100vh;
        font-family: 'Poppins', sans-serif;
        animation: bgFlow 14s ease-in-out infinite;
      }
      
      @keyframes bgFlow {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
      }

      .header {
        background: linear-gradient(135deg, #60B5FF 0%, #2575fc 100%);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        border-radius: 0 0 30px 30px;
        padding: 1rem 0;
      }

      .navbar {
        background-color: rgba(255, 255, 255, 0.95) !important;
        backdrop-filter: blur(10px);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        border-radius: 30px 30px 0 0;
        padding: 1rem 0;
      }

      .nav-link {
        position: relative;
        font-weight: 500;
        color: #2575fc !important;
        transition: all 0.3s ease;
      }

      .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: #2575fc;
        transition: width 0.3s ease;
      }

      .nav-link:hover::after {
        width: 100%;
      }

      .nav-link.active {
        font-weight: 600;
      }

      .nav-link.active::after {
        width: 100%;
      }

      .profile-frame, .intro-frame {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid rgba(0, 0, 0, 0.1);
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        border-radius: 25px;
        height: 800px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 2rem;
      }

      .profile-frame:hover, .intro-frame:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2) !important;
      }

      .profile-frame img {
        border-radius: 20px;
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: grayscale(100%);
        transition: all 0.5s ease;
        animation: floatPhoto 4.5s ease-in-out infinite;
      }
      
      @keyframes floatPhoto {
        0% { transform: translateY(0); }
        50% { transform: translateY(-8px); }
        100% { transform: translateY(0); }
      }

      .profile-frame:hover img {
        filter: grayscale(0%);
      }

      .intro-frame {
        overflow-y: auto;
      }

      .intro-frame::-webkit-scrollbar {
        width: 8px;
      }

      .intro-frame::-webkit-scrollbar-track {
        background: rgba(37, 117, 252, 0.1);
        border-radius: 10px;
      }

      .intro-frame::-webkit-scrollbar-thumb {
        background: #2575fc;
        border-radius: 10px;
        border: 2px solid rgba(37, 117, 252, 0.2);
      }

      .intro-frame::-webkit-scrollbar-thumb:hover {
        background: #60B5FF;
      }

      .card {
        border: none;
        border-radius: 25px;
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        margin-bottom: 2rem;
      }

      .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
      }

      .card-body {
        color: white;
        border-radius: 25px;
      }

      .card h4, .card p, .card .small {
        color: white !important;
      }

      .gradient-custom {
        background: linear-gradient(135deg, #60B5FF 0%, #2575fc 100%);
      }

      .gradient-custom-4 {
        background: linear-gradient(135deg, #2575fc 0%, #60B5FF 100%);
      }

      .skill-container {
        position: relative;
        margin-bottom: 2rem;
        padding: 1rem;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 15px;
        backdrop-filter: blur(10px);
        transition: all 0.3s ease;
        border: 1px solid rgba(37, 117, 252, 0.1);
      }

      .skill-container::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(135deg, #60B5FF 0%, #2575fc 100%);
        border-radius: 17px;
        z-index: -1;
        opacity: 0;
        transition: all 0.3s ease;
      }

      .skill-container:hover {
        transform: translateY(-5px);
        background: rgba(255, 255, 255, 0.4);
        border-color: transparent;
        box-shadow: 0 10px 20px rgba(37, 117, 252, 0.15);
      }

      .skill-container:hover::before {
        opacity: 0.5;
        filter: blur(5px);
      }

      .skill-container:hover .badge {
        transform: scale(1.1);
        background: linear-gradient(135deg, #60B5FF, #2575fc);
        color: white;
        transition: all 0.3s ease;
      }

      .skill-container:hover .progress-bar {
        animation: progressAnimation 1.5s ease-in-out;
      }

      @keyframes progressAnimation {
        0% {
          background-position: 0% 50%;
        }
        50% {
          background-position: 100% 50%;
        }
        100% {
          background-position: 0% 50%;
        }
      }

      .skill-label {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1rem;
      }

      .skill-label .badge {
        background: linear-gradient(135deg, #60B5FF, #2575fc);
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-weight: 500;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      .progress {
        height: 8px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 4px;
        overflow: hidden;
        position: relative;
      }

      .progress-bar {
        height: 100%;
        background: linear-gradient(90deg, #60B5FF, #2575fc);
        background-size: 200% 200%;
        border-radius: 4px;
        position: relative;
        transition: all 0.3s ease;
      }

      .progress-bar::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(
          90deg,
          rgba(255, 255, 255, 0) 0%,
          rgba(255, 255, 255, 0.4) 50%,
          rgba(255, 255, 255, 0) 100%
        );
        animation: shine 2s infinite;
      }

      .skill-details {
        margin-top: 0.5rem;
        font-size: 0.9rem;
        color: #666;
      }

      @keyframes shine {
        0% {
          transform: translateX(-100%);
        }
        100% {
          transform: translateX(100%);
        }
      }

      .badge {
        padding: 8px 12px;
        border-radius: 12px;
        font-weight: 500;
        transition: transform 0.3s ease;
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
      }

      .badge:hover {
        transform: scale(1.05);
      }

      .social-icons a {
        transition: all 0.3s ease;
        color: white;
        font-size: 1.2rem;
        padding: 8px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.25);
        backdrop-filter: blur(5px);
        margin: 0 4px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 35px;
        height: 35px;
      }

      .social-icons a:hover {
        transform: translateY(-3px);
        background: rgba(255, 255, 255, 0.35);
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
      }

      .social-icons .bi-instagram {
        background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
      }

      .social-icons .bi-twitter-x {
        color: #000000;
      }

      .social-icons .bi-facebook {
        color: #1877F2;
      }

      .social-icons .bi-linkedin {
        color: #0077B5;
      }

      .social-icons a:hover .bi-instagram {
        background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
      }

      .social-icons a:hover .bi-twitter-x {
        color: #000000;
      }

      .social-icons a:hover .bi-facebook {
        color: #1877F2;
      }

      .social-icons a:hover .bi-linkedin {
        color: #0077B5;
      }

      .timeline-4::after {
        background: linear-gradient(135deg, #60B5FF 0%, #2575fc 100%);
        box-shadow: 0 0 10px rgba(37, 117, 252, 0.5);
      }

      .main-timeline-4::after {
        background: linear-gradient(to bottom, #60B5FF, #2575fc);
        box-shadow: 0 0 10px rgba(37, 117, 252, 0.3);
      }

      h1, h2, h3, h4, h5, h6 {
        color: #2575fc;
        font-weight: 600;
      }

      .lead {
        color: #2c3e50;
        line-height: 1.8;
      }

      .text-secondary {
        color: #2575fc !important;
      }

      .timeline-4 {
        margin-bottom: 2rem;
      }

      .timeline-4:last-child {
        margin-bottom: 0;
      }

      @media screen and (max-width: 600px) {
        .timeline-4::before {
          border-color: transparent #60B5FF transparent transparent;
        }
      }

      .dropdown-menu {
        border-radius: 15px;
        border: none;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      }

      .dropdown-item {
        border-radius: 10px;
        margin: 5px;
        transition: all 0.3s ease;
      }

      .dropdown-item:hover {
        background-color: #f8f9fa;
        transform: translateX(5px);
      }

      .header a {
        color: white;
        text-decoration: none;
        transition: all 0.3s ease;
        position: relative;
      }

      .header a:not(.social-icons a)::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -2px;
        left: 0;
        background-color: #FCEFCB;
        transition: width 0.3s ease;
      }

      .header a:not(.social-icons a):hover::after {
        width: 100%;
      }

      .skill-title {
        position: relative;
        display: inline-block;
        padding: 10px 30px;
        margin-bottom: 40px;
        background: linear-gradient(135deg, #60B5FF 0%, #2575fc 100%);
        color: white;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(37, 117, 252, 0.2);
        transform: translateX(-50%);
        left: 50%;
      }

      .skill-title::before {
        content: '';
        position: absolute;
        top: -5px;
        left: -5px;
        right: -5px;
        bottom: -5px;
        background: linear-gradient(135deg, #60B5FF 0%, #2575fc 100%);
        border-radius: 18px;
        z-index: -1;
        opacity: 0.5;
        filter: blur(5px);
      }

      .skill-title:hover {
        transform: translateX(-50%) translateY(-3px);
        box-shadow: 0 8px 20px rgba(37, 117, 252, 0.3);
        transition: all 0.3s ease;
      }

      .ogrenim-title {
        animation: ogrenimTitleFloat 4.2s ease-in-out infinite;
      }

      @keyframes ogrenimTitleFloat {
        0% { transform: translateX(-50%) translateY(0); }
        50% { transform: translateX(-50%) translateY(-6px); }
        100% { transform: translateX(-50%) translateY(0); }
      }

      .footer {
        background: linear-gradient(135deg, #60B5FF 0%, #2575fc 100%);
        color: white;
        padding: 3rem 0;
        margin-top: 4rem;
        border-radius: 30px 30px 0 0;
        box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.1);
      }

      .footer-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 2rem;
      }

      .footer-logo {
        display: flex;
        align-items: center;
        gap: 1rem;
      }

      .footer-logo img {
        height: 40px;
        width: 60px;
        border-radius: 10px;
      }

      .footer-logo h3 {
        color: white;
        margin: 0;
        font-size: 1.5rem;
      }

      .footer-links {
        display: flex;
        gap: 2rem;
      }

      .footer-links a {
        color: white;
        text-decoration: none;
        transition: all 0.3s ease;
        position: relative;
      }

      .footer-links a::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -2px;
        left: 0;
        background-color: #FCEFCB;
        transition: width 0.3s ease;
      }

      .footer-links a:hover::after {
        width: 100%;
      }

      .footer-social {
        display: flex;
        gap: 1rem;
      }

      .footer-social a {
        color: white;
        background: rgba(255, 255, 255, 0.2);
        width: 35px;
        height: 35px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
      }

      .footer-social a:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: translateY(-3px);
      }

      .footer-bottom {
        text-align: center;
        margin-top: 2rem;
        padding-top: 2rem;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
      }

      @media (max-width: 768px) {
        .footer-content {
          flex-direction: column;
          text-align: center;
        }

        .footer-links {
          flex-direction: column;
          gap: 1rem;
        }

        .footer-social {
          justify-content: center;
        }
      }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <header class="header">
      <div class="d-flex align-items-center text-white" data-aos="fade-down" data-aos-delay="100" style="border-bottom-left-radius: 55px; border-bottom-right-radius: 55px;">
        <div class="container d-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center text-white">
            <i class="bi bi-envelope-fill me-2" style="color: #FCEFCB;"></i>
            <a href="mailto:<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></a>
            <i class="bi bi-telephone-fill ms-4 me-2" style="color: #FCEFCB;"></i>
            <a href="tel:<?php echo preg_replace('/\s+/', '', htmlspecialchars($telefon, ENT_QUOTES, 'UTF-8')); ?>"><?php echo htmlspecialchars($telefon, ENT_QUOTES, 'UTF-8'); ?></a>
          </div>

          <div class="social-icons d-flex align-items-center">
            <a href="<?php echo htmlspecialchars($instagramUrl, ENT_QUOTES, 'UTF-8'); ?>" class="text-white" title="Instagram">
              <i class="bi bi-instagram"></i>
            </a>
            <a href="<?php echo htmlspecialchars($twitterUrl, ENT_QUOTES, 'UTF-8'); ?>" class="text-white" title="Twitter">
              <i class="bi bi-twitter-x"></i>
            </a>
            <a href="<?php echo htmlspecialchars($facebookUrl, ENT_QUOTES, 'UTF-8'); ?>" class="text-white" title="Facebook">
              <i class="bi bi-facebook"></i>
            </a>
            <a href="<?php echo htmlspecialchars($linkedinUrl, ENT_QUOTES, 'UTF-8'); ?>" class="text-white" title="LinkedIn">
              <i class="bi bi-linkedin"></i>
            </a>
            <a href="<?php echo htmlspecialchars($githubUrl, ENT_QUOTES, 'UTF-8'); ?>" class="text-white" title="GitHub">
              <i class="bi bi-github"></i>
            </a>
          </div>
        </div>
      </div>
    </header>

    <nav class="navbar navbar-expand-lg sticky-top" data-aos="fade-up" data-aos-delay="150" style="border-top-left-radius: 35px; border-top-right-radius: 35px;" data-bs-theme="light">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="logo.png" style="height: 40px; width: 60px;" alt="Logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Ana Sayfa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#ogrenim">Akademik Kariyerim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="projelerim.php">Projelerim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="iletisimalp.php">İletişim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php"><i class="bi bi-person-circle me-1"></i>Kayıt / Giriş</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-5">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="profile-frame" data-aos="flip-left" data-aos-delay="200">
            <img src="<?php echo htmlspecialchars($profilFoto, ENT_QUOTES, 'UTF-8'); ?>" alt="Profile" class="rounded-3">
          </div>
        </div>

        <div class="col-md-6">
          <div class="intro-frame" data-aos="flip-right" data-aos-delay="300">
            <h1 class="display-5 fst-italic mb-4" data-aos="flip-right" data-aos-delay="250"><?php echo htmlspecialchars($adSoyad, ENT_QUOTES, 'UTF-8'); ?></h1>
            <p class="text-justify" style="font-size: 1rem; line-height: 1.6;">
              <?php echo $hakkimdaYazi; ?>
            </p>
          </div>
        </div>
      </div>
      <div class="container py-5" id="ogrenim">
          <h2 class="skill-title ogrenim-title text-center mb-4"><?php echo htmlspecialchars($ogrenimBaslik, ENT_QUOTES, 'UTF-8'); ?></h2>
          <div class="main-timeline-4 text-white">
            <?php if (!empty($ogrenimBilgileri)): ?>
              <?php foreach ($ogrenimBilgileri as $index => $satir): ?>
                <?php
                  $isRight = $index % 2 !== 0;
                  $timelineClass = $isRight ? "right-4" : "left-4";
                  $gradientClass = $isRight ? "gradient-custom-4" : "gradient-custom";
                  $aosEffect = $isRight ? "fade-left" : "fade-right";
                  $textAlignClass = $isRight ? " text-end" : "";
                  $delay = 350 + ($index * 50);
                ?>
                <div class="timeline-4 <?php echo $timelineClass; ?>">
                  <div class="card <?php echo $gradientClass; ?>" data-aos="<?php echo $aosEffect; ?>" data-aos-delay="<?php echo $delay; ?>">
                    <div class="card-body p-4<?php echo $textAlignClass; ?>">
                      <h4><?php echo htmlspecialchars($satir->ogrenim_seviyesi, ENT_QUOTES, "UTF-8"); ?></h4>
                      <p class="small text-white-50 mb-4"><?php echo htmlspecialchars($satir->mezuniyet_yil, ENT_QUOTES, "UTF-8"); ?></p>
                      <p><?php echo htmlspecialchars($satir->ogrenim_kurumadi, ENT_QUOTES, "UTF-8"); ?></p>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php else: ?>
              <div class="text-center text-secondary">Öğrenim bilgisi bulunamadı.</div>
            <?php endif; ?>
          </div>
        </div>

        
        <div class="container mt-5 mb-5" data-aos="fade-down" data-aos-delay="550">
          <h2 class="skill-title text-center mb-4"><?php echo htmlspecialchars($yetenekBaslik, ENT_QUOTES, 'UTF-8'); ?></h2>
          <div class="row">
            <?php if (!empty($yetenekler)): ?>
              <div class="col-md-6">
                <?php foreach ($yetenekler as $index => $yetenek): ?>
                  <?php if ($index % 2 === 0): ?>
                    <div class="skill-container" data-aos="fade-right" data-aos-delay="<?php echo 600 + ($index * 25); ?>">
                      <div class="skill-label">
                        <label class="form-label text-secondary mb-0"><?php echo htmlspecialchars($yetenek->yetenek_adi, ENT_QUOTES, "UTF-8"); ?></label>
                        <span class="badge">%<?php echo (int) $yetenek->yetenek_orani; ?></span>
                      </div>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php echo (int) $yetenek->yetenek_orani; ?>%" aria-valuenow="<?php echo (int) $yetenek->yetenek_orani; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  <?php endif; ?>
                <?php endforeach; ?>
              </div>
              <div class="col-md-6">
                <?php foreach ($yetenekler as $index => $yetenek): ?>
                  <?php if ($index % 2 !== 0): ?>
                    <div class="skill-container" data-aos="fade-left" data-aos-delay="<?php echo 600 + ($index * 25); ?>">
                      <div class="skill-label">
                        <label class="form-label text-secondary mb-0"><?php echo htmlspecialchars($yetenek->yetenek_adi, ENT_QUOTES, "UTF-8"); ?></label>
                        <span class="badge">%<?php echo (int) $yetenek->yetenek_orani; ?></span>
                      </div>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php echo (int) $yetenek->yetenek_orani; ?>%" aria-valuenow="<?php echo (int) $yetenek->yetenek_orani; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  <?php endif; ?>
                <?php endforeach; ?>
              </div>
            <?php else: ?>
              <div class="col-12 text-center text-secondary">Yetenek bilgisi bulunamadı.</div>
            <?php endif; ?>
          </div>
        </div>

      </div>
    </div>

    <footer class="footer" data-aos="fade-up" data-aos-delay="300">
      <div class="container">
        <div class="footer-content">
          <div class="footer-logo">
            <img src="logo.png" alt="Logo">
            <h3><?php echo htmlspecialchars($adSoyad, ENT_QUOTES, 'UTF-8'); ?></h3>
          </div>
          <div class="footer-links">
            <a href="index.php">Ana Sayfa</a>
            <a href="#ogrenim">Akademik Kariyerim</a>
            <a href="projelerim.php">Projelerim</a>
            <a href="iletisimalp.php">İletişim</a>
            <a href="login.php">Kayıt / Giriş</a>
          </div>
          <div class="footer-social">
            <a href="<?php echo htmlspecialchars($instagramUrl, ENT_QUOTES, 'UTF-8'); ?>" title="Instagram">
              <i class="bi bi-instagram"></i>
            </a>
            <a href="<?php echo htmlspecialchars($twitterUrl, ENT_QUOTES, 'UTF-8'); ?>" title="Twitter">
              <i class="bi bi-twitter-x"></i>
            </a>
            <a href="<?php echo htmlspecialchars($facebookUrl, ENT_QUOTES, 'UTF-8'); ?>" title="Facebook">
              <i class="bi bi-facebook"></i>
            </a>
            <a href="<?php echo htmlspecialchars($linkedinUrl, ENT_QUOTES, 'UTF-8'); ?>" title="LinkedIn">
              <i class="bi bi-linkedin"></i>
            </a>
            <a href="<?php echo htmlspecialchars($githubUrl, ENT_QUOTES, 'UTF-8'); ?>" title="GitHub">
              <i class="bi bi-github"></i>
            </a>
          </div>
        </div>
        <div class="footer-bottom">
          <p class="mb-0"><span style="font-weight:700;color:#000000;">Copyright © 2026</span> <span style="font-weight:700;color:#2575fc;">AlpY</span></p>
        </div>
      </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
          AOS.init({
            duration: 1000,  
            once: true,      
            offset: 100,     
            easing: 'ease-in-out'  
          });
        });
      </script>
  </body>
</html>
