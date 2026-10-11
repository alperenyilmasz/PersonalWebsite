<?php
require_once "sistem/loader.php";
$onsayfa = $code->getirOnsayfaAyarlari();
$adSoyad = !empty($onsayfa->ad_soyad) ? $onsayfa->ad_soyad : "Alperen YILMAZ";
$email = !empty($onsayfa->email) ? $onsayfa->email : "alperenyilmasz38@gmail.com";
$telefon = !empty($onsayfa->telefon) ? $onsayfa->telefon : "+90 507 903 2778";
$instagramUrl = !empty($onsayfa->instagram_url) ? $onsayfa->instagram_url : "https://www.instagram.com/alperenyilmasz/";
$twitterUrl = !empty($onsayfa->twitter_url) ? $onsayfa->twitter_url : "https://x.com/alperenyilmasz";
$facebookUrl = isset($onsayfa->facebook_url) ? $onsayfa->facebook_url : "";
$linkedinUrl = !empty($onsayfa->linkedin_url) ? $onsayfa->linkedin_url : "https://www.linkedin.com/in/alperenyilmasz/";
$githubUrl = !empty($onsayfa->github_url) ? $onsayfa->github_url : "https://github.com/alperenyilmasz";
$adIlk = explode(' ', $adSoyad)[0];
?>
<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Projelerim - <?php echo htmlspecialchars($adSoyad, ENT_QUOTES, 'UTF-8'); ?></title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" rel="stylesheet">
    <link rel="icon" href="logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
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

      .nav-link:hover::after,
      .nav-link.active::after {
        width: 100%;
      }

      .nav-link.active {
        font-weight: 600;
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

      .social-icons .bi-twitter-x { color: #000000; }
      .social-icons .bi-facebook { color: #1877F2; }
      .social-icons .bi-linkedin { color: #0077B5; }

      h1, h2, h3, h4, h5, h6 {
        color: #2575fc;
        font-weight: 600;
      }

      .projects-intro {
        text-align: center;
        margin-bottom: 2rem;
      }

      .projects-intro h2 {
        font-size: 2rem;
        margin-bottom: 0.5rem;
      }

      .projects-intro p {
        color: #5a6a7a;
        font-size: 1.05rem;
        margin-bottom: 0;
      }

      #projectAccordion {
        border-radius: 12px;
        overflow: hidden;
      }

      #projectAccordion .accordion-item {
        border: 1px solid rgba(37, 117, 252, 0.2);
        margin-bottom: 0.75rem;
        border-radius: 10px !important;
        overflow: hidden;
        background: rgba(255, 255, 255, 0.95);
      }

      #projectAccordion .accordion-button {
        font-weight: 500;
        color: #2575fc;
        background: rgba(255, 255, 255, 0.95);
        box-shadow: none;
        padding: 1rem 1.25rem;
      }

      #projectAccordion .accordion-button:not(.collapsed) {
        background: #d6ebff;
        color: #2575fc;
        box-shadow: none;
      }

      #projectAccordion .accordion-button:focus {
        box-shadow: none;
        border-color: rgba(37, 117, 252, 0.25);
      }

      #projectAccordion .accordion-button::after {
        filter: brightness(0) saturate(100%) invert(32%) sepia(89%) saturate(1875%) hue-rotate(205deg) brightness(98%) contrast(101%);
      }

      #projectAccordion .accordion-body {
        background: #fff;
        color: #2c3e50;
        padding: 1.5rem;
      }

      #projectAccordion .project-thumb {
        border-radius: 10px;
        border: 1px solid rgba(37, 117, 252, 0.15);
        width: 100%;
        height: auto;
        object-fit: cover;
      }

      #projectAccordion .project-tags .badge {
        margin-right: 0.35rem;
        margin-bottom: 0.35rem;
        font-size: 0.8rem;
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
              <a class="nav-link" href="index.php">Ana Sayfa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#ogrenim">Akademik Kariyerim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="projelerim.php">Projelerim</a>
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

    <div class="container mt-5 mb-5" data-aos="fade-up" data-aos-delay="200">
      <div class="projects-intro">
        <h2>Merhaba, Ben <?php echo htmlspecialchars($adIlk, ENT_QUOTES, 'UTF-8'); ?>!</h2>
        <p>Web, mobil ve masaüstü projelerimi keşfedin.</p>
      </div>

      <div class="accordion" id="projectAccordion">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingKisiselWeb">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKisiselWeb" aria-expanded="true" aria-controls="collapseKisiselWeb">
              <i class="bi bi-person-badge me-2"></i> Kişisel Web Sitesi
            </button>
          </h2>
          <div id="collapseKisiselWeb" class="accordion-collapse collapse show" aria-labelledby="headingKisiselWeb" data-bs-parent="#projectAccordion">
            <div class="accordion-body">
              <div class="row align-items-center g-4">
                <div class="col-md-4">
                  <img src="kisiselweb.png" alt="Kişisel Web Sitesi" class="project-thumb img-fluid">
                </div>
                <div class="col-md-8">
                  <p>HTML5, CSS3, JavaScript ve Bootstrap 5 kullanılarak geliştirilen, dinamik ve mobil uyumlu kişisel tanıtım sayfası.</p>
                  <div class="project-tags mb-3">
                    <span class="badge bg-primary">HTML5</span>
                    <span class="badge bg-danger">CSS3</span>
                    <span class="badge bg-warning text-dark">JavaScript</span>
                    <span class="badge bg-success">Bootstrap 5</span>
                  </div>
                  <a href="index.php" class="btn btn-outline-primary btn-sm">Canlı Demo Tıklayınız</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingDashboard">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDashboard" aria-expanded="false" aria-controls="collapseDashboard">
              <i class="bi bi-bar-chart-line me-2"></i> Gösterge Paneli
            </button>
          </h2>
          <div id="collapseDashboard" class="accordion-collapse collapse" aria-labelledby="headingDashboard" data-bs-parent="#projectAccordion">
            <div class="accordion-body">
              <div class="row align-items-center g-4">
                <div class="col-md-4">
                  <img src="dashboard.png" alt="Gösterge Paneli" class="project-thumb img-fluid">
                </div>
                <div class="col-md-8">
                  <p>Matplotlib ve D3.js entegrasyonlu, interaktif grafiklerle KPI takibi sağlayan kontrol paneli.</p>
                  <div class="project-tags mb-3">
                    <span class="badge bg-primary">D3.js</span>
                    <span class="badge bg-info text-dark">Flask</span>
                    <span class="badge bg-warning text-dark">JavaScript</span>
                    <span class="badge bg-success">Chart.js</span>
                  </div>
                  <a href="<?php echo htmlspecialchars($githubUrl, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-outline-primary btn-sm" target="_blank" rel="noopener noreferrer">Kaynak Kodları için Tıklayınız</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingMobil">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMobil" aria-expanded="false" aria-controls="collapseMobil">
              <i class="bi bi-phone me-2"></i> Mobil Uygulama
            </button>
          </h2>
          <div id="collapseMobil" class="accordion-collapse collapse" aria-labelledby="headingMobil" data-bs-parent="#projectAccordion">
            <div class="accordion-body">
              <div class="row align-items-center g-4">
                <div class="col-md-4">
                  <img src="mobile.png" alt="Mobil Uygulama" class="project-thumb img-fluid">
                </div>
                <div class="col-md-8">
                  <p>React Native ve Firebase ile geliştirilen, çapraz platform destekli ve gerçek zamanlı veri senkronizasyonlu mobil uygulama.</p>
                  <div class="project-tags mb-3">
                    <span class="badge bg-primary">React Native</span>
                    <span class="badge bg-danger">Expo</span>
                    <span class="badge bg-warning text-dark">Firebase</span>
                    <span class="badge bg-success">Redux</span>
                  </div>
                  <a href="<?php echo htmlspecialchars($githubUrl, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-outline-primary btn-sm" target="_blank" rel="noopener noreferrer">Kaynak Kodları için Tıklayınız</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingMasaustu">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMasaustu" aria-expanded="false" aria-controls="collapseMasaustu">
              <i class="bi bi-pc-display me-2"></i> Masaüstü Uygulama
            </button>
          </h2>
          <div id="collapseMasaustu" class="accordion-collapse collapse" aria-labelledby="headingMasaustu" data-bs-parent="#projectAccordion">
            <div class="accordion-body">
              <div class="row align-items-center g-4">
                <div class="col-md-4">
                  <img src="oyun.png" alt="Masaüstü Uygulama" class="project-thumb img-fluid">
                </div>
                <div class="col-md-8">
                  <p>C# ve .NET Framework ile geliştirilen, kullanıcı dostu arayüze sahip masaüstü yönetim ve otomasyon uygulaması.</p>
                  <div class="project-tags mb-3">
                    <span class="badge bg-primary">C#</span>
                    <span class="badge bg-info text-dark">.NET</span>
                    <span class="badge bg-warning text-dark">WinForms</span>
                    <span class="badge bg-success">SQL Server</span>
                  </div>
                  <a href="<?php echo htmlspecialchars($githubUrl, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-outline-primary btn-sm" target="_blank" rel="noopener noreferrer">Kaynak Kodları için Tıklayınız</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingSiber">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSiber" aria-expanded="false" aria-controls="collapseSiber">
              <i class="bi bi-shield-lock me-2"></i> Siber Güvenlik Aracı
            </button>
          </h2>
          <div id="collapseSiber" class="accordion-collapse collapse" aria-labelledby="headingSiber" data-bs-parent="#projectAccordion">
            <div class="accordion-body">
              <div class="row align-items-center g-4">
                <div class="col-md-4">
                  <img src="siber.png" alt="Siber Güvenlik Aracı" class="project-thumb img-fluid">
                </div>
                <div class="col-md-8">
                  <p>Ağ güvenliği analizi ve zafiyet taraması yapan, Kali Linux araçlarıyla entegre siber güvenlik test platformu.</p>
                  <div class="project-tags mb-3">
                    <span class="badge bg-primary">Kali Linux</span>
                    <span class="badge bg-danger">Wireshark</span>
                    <span class="badge bg-warning text-dark">Nmap</span>
                    <span class="badge bg-success">Python</span>
                  </div>
                  <a href="<?php echo htmlspecialchars($githubUrl, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-outline-primary btn-sm" target="_blank" rel="noopener noreferrer">Kaynak Kodları için Tıklayınız</a>
                </div>
              </div>
            </div>
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
            <a href="index.php#ogrenim">Akademik Kariyerim</a>
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
