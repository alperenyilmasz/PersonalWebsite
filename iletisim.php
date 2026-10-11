<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>İletişim - Alperen YILMAZ</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css"
      rel="stylesheet"
    />
    <link rel="icon" href="logo.png" />

    <style>
      body {
        background: linear-gradient(
          135deg,
          #ffffff 0%,
          #b3d9ff 50%,
          #80bfff 100%
        );
        min-height: 100vh;
        font-family: "Poppins", sans-serif;
        display: flex;
        flex-direction: column;
      }

      .container {
        flex: 1 0 auto;
      }

      .header {
        background: linear-gradient(135deg, #60b5ff 0%, #2575fc 100%);
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
        content: "";
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

      .header a {
        color: white;
        text-decoration: none;
        transition: all 0.3s ease;
        position: relative;
      }

      .header a:not(.social-icons a)::after {
        content: "";
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -2px;
        left: 0;
        background-color: #fcefcb;
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

      .contact-section {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        border-radius: 25px;
        padding: 2rem;
        margin-top: 2rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      }

      .contact-title {
        color: #2575fc;
        font-weight: 600;
        margin-bottom: 2rem;
        text-align: center;
      }

      .footer {
        background: linear-gradient(135deg, #60b5ff 0%, #2575fc 100%);
        color: white;
        padding: 3rem 0;
        margin-top: auto;
        border-radius: 30px 30px 0 0;
        box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.1);
        position: relative;
        bottom: 0;
        width: 100%;
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
        content: "";
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -2px;
        left: 0;
        background-color: #fcefcb;
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
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header class="header">
      <div
        class="d-flex align-items-center text-white"
        data-aos="fade-down"
        data-aos-delay="100"
        style="
          border-bottom-left-radius: 55px;
          border-bottom-right-radius: 55px;
        "
      >
        <div
          class="container d-flex align-items-center justify-content-between"
        >
          <div class="d-flex align-items-center text-white">
            <i class="bi bi-envelope-fill me-2" style="color: #fcefcb"></i>
            <a href="mailto:alperenyilmasz38@gmail.com"
              >alperenyilmasz38@gmail.com</a
            >
            <i
              class="bi bi-telephone-fill ms-4 me-2"
              style="color: #fcefcb"
            ></i>
            <a href="tel:+905079032778">+90 507 903 2778</a>
          </div>

          <div class="social-icons d-flex align-items-center">
            <a
              href="https://www.instagram.com/alperenyilmasz/"
              class="text-white"
              title="Instagram"
            >
              <i class="bi bi-instagram"></i>
            </a>
            <a
              href="https://x.com/alperenyilmasz"
              class="text-white"
              title="Twitter"
            >
              <i class="bi bi-twitter-x"></i>
            </a>
            <a href="" class="text-white" title="Facebook">
              <i class="bi bi-facebook"></i>
            </a>
            <a
              href="https://www.linkedin.com/in/alperenyilmasz/"
              class="text-white"
              title="LinkedIn"
            >
              <i class="bi bi-linkedin"></i>
            </a>
            <a
              href="https://github.com/alperenyilmasz"
              class="text-white"
              title="GitHub"
            >
              <i class="bi bi-github"></i>
            </a>
          </div>
        </div>
      </div>
    </header>

    <nav
      class="navbar navbar-expand-lg sticky-top"
      data-aos="fade-up"
      data-aos-delay="150"
      style="border-top-left-radius: 35px; border-top-right-radius: 35px"
      data-bs-theme="light"
    >
      <div class="container">
        <a class="navbar-brand" href="alperenyilmaz.html">
          <img src="logo.png" style="height: 40px; width: 60px" alt="Logo" />
        </a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNavDropdown"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="test.php">Ana Sayfa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Akademik Kariyerim</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Projelerim
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Web Projelerim</a></li>
                <li><a class="dropdown-item" href="#">Oyun Projelerim</a></li>
                <li>
                  <a class="dropdown-item" href="#">Masaüstü Projelerim</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="iletisim.html">İletişim</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="contact-section" data-aos="fade-up" data-aos-delay="200">
        <h1 class="contact-title">İletişim</h1>
        <!-- Buraya iletişim içeriğini ekleyebilirsiniz -->
      </div>
    </div>

    <footer class="footer" data-aos="fade-up" data-aos-delay="300">
      <div class="container">
        <div class="footer-content">
          <div class="footer-logo">
            <img src="logo.png" alt="Logo" />
            <h3>Alperen YILMAZ</h3>
          </div>
          <div class="footer-links">
            <a href="test.php">Ana Sayfa</a>
            <a href="#">Akademik Kariyerim</a>
            <a href="#">Projelerim</a>
            <a href="iletisim.html">İletişim</a>
          </div>
          <div class="footer-social">
            <a
              href="https://www.instagram.com/alperenyilmasz/"
              title="Instagram"
            >
              <i class="bi bi-instagram"></i>
            </a>
            <a href="https://x.com/alperenyilmasz" title="Twitter">
              <i class="bi bi-twitter-x"></i>
            </a>
            <a href="" title="Facebook">
              <i class="bi bi-facebook"></i>
            </a>
            <a
              href="https://www.linkedin.com/in/alperenyilmasz/"
              title="LinkedIn"
            >
              <i class="bi bi-linkedin"></i>
            </a>
            <a href="https://github.com/alperenyilmasz" title="GitHub">
              <i class="bi bi-github"></i>
            </a>
          </div>
        </div>
        <div class="footer-bottom">
          <p class="mb-0">&copy; 2024 Alperen YILMAZ. Tüm hakları saklıdır.</p>
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
      document.addEventListener("DOMContentLoaded", function () {
        AOS.init({
          duration: 1000,
          once: true,
          offset: 100,
          easing: "ease-in-out",
        });
      });
    </script>
  </body>
</html>
