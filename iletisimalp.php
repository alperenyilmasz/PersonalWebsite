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

    <style>
      body {
        background: linear-gradient(135deg, #ffffff 0%, #b3d9ff 50%, #80bfff 100%);
        min-height: 100vh;
        font-family: "Poppins", sans-serif;
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

      .social-icons .bi-instagram {
        background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
      }
      .social-icons .bi-twitter-x { color: #000000; }
      .social-icons .bi-facebook { color: #1877F2; }
      .social-icons .bi-linkedin { color: #0077B5; }

      /* Contact info icons styling */
      .info-item i {
        color: #60B5FF;
        font-size: 2rem;
        width: 80px;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 2px dotted #60B5FF;
        border-radius: 50%;
        margin-bottom: 1rem;
      }

      .info-item i:hover {
        background-color: rgba(96, 181, 255, 0.1);
        transition: all 0.3s ease;
      }

      .panel-box {
        background: linear-gradient(135deg, #8CCBFF 0%, #4A90FF 100%);
        border: 1px solid rgba(255, 255, 255, 0.22);
        box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.14);
      }

      .panel-box h3,
      .panel-box p {
        color: #ffffff;
      }

      .panel-box.info-item i {
        color: #ffffff;
        border-color: rgba(255, 255, 255, 0.75);
      }

      .map-frame {
        padding: 10px;
        border-radius: 16px;
      }

      .map-frame iframe {
        border-radius: 12px;
      }

      .contact-form-title {
        color: #ffffff;
        font-weight: 700;
        text-align: center;
        margin-bottom: 1rem;
      }

      .mini-contact-label {
        display: block;
        color: #ffffff;
        font-size: 0.8rem;
        font-weight: 700;
        margin-bottom: 0.35rem;
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
        content: "";
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
    </style>
  </head>
  <body>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header border-0" style="background: linear-gradient(to right, #60B5FF, #2575fc);">
            <h5 class="modal-title text-white" id="exampleModalLabel">
              <i class="bi bi-check-circle-fill me-2"></i>KVKK Onayı
            </h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center py-4">
            <i class="" style="font-size: 3rem;"></i>
            <p class="mt-3 mb-2">Girmiş olduğunuz veriler veritabanımızda saklanacaktır. <br> Onaylıyor musunuz?</p>
            
            <button class="btn btn-link text-decoration-none mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#kvkkText" aria-expanded="false" aria-controls="kvkkText">
              <i class="bi bi-chevron-down me-1"></i>Detaylı KVKK Metni
            </button>
            
            <div class="collapse" id="kvkkText">
              <div class="card card-body bg-light text-start mb-2">
                <h6 class="mb-3">Kişisel Verilerin Korunması ve İşlenmesi Hakkında Bilgilendirme</h6>
                <p class="small mb-2">6698 sayılı Kişisel Verilerin Korunması Kanunu ("KVKK") uyarınca, kişisel verileriniz; veri sorumlusu olarak Alperen Yılmaz ("Şirket") tarafından aşağıda açıklanan kapsamda işlenebilecektir.</p>
                
                <h6 class="mt-3 mb-2">Kişisel Verilerin İşlenme Amacı</h6>
                <p class="small mb-2">Kişisel verileriniz, iletişim formu aracılığıyla ilettiğiniz bilgilerin işlenmesi, size daha iyi hizmet sunulması, taleplerinize yanıt verilmesi ve iletişim bilgilerinizin güncel tutulması amacıyla işlenmektedir.</p>
                
                <h6 class="mt-3 mb-2">Kişisel Verilerin Aktarılması</h6>
                <p class="small mb-2">Kişisel verileriniz, yasal yükümlülüklerimiz kapsamında yetkili kamu kurum ve kuruluşlarına, hizmet aldığımız iş ortaklarımıza ve tedarikçilerimize, yasal süreçlerin yürütülmesi amacıyla hukuk bürolarına aktarılabilecektir.</p>
                
                <h6 class="mt-3 mb-2">Kişisel Veri Sahibinin Hakları</h6>
                <p class="small mb-2">KVKK'nın 11. maddesi uyarınca, kişisel verilerinizle ilgili olarak:</p>
                <ul class="small mb-2">
                  <li>Kişisel verilerinizin işlenip işlenmediğini öğrenme</li>
                  <li>Kişisel verileriniz işlenmişse buna ilişkin bilgi talep etme</li>
                  <li>Kişisel verilerinizin işlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını öğrenme</li>
                  <li>Yurt içinde veya yurt dışında kişisel verilerinizin aktarıldığı üçüncü kişileri bilme</li>
                  <li>Kişisel verilerinizin eksik veya yanlış işlenmiş olması hâlinde bunların düzeltilmesini isteme</li>
                  <li>KVKK'nın 7. maddesinde öngörülen şartlar çerçevesinde kişisel verilerinizin silinmesini veya yok edilmesini isteme</li>
                </ul>
                <p class="small">haklarına sahipsiniz.</p>
              </div>
            </div>
          </div>
          <div class="modal-footer border-0">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Vazgeç</button>
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Onay</button>
          </div>
        </div>
      </div>
    </div>

    <header class="header">
      <div class="d-flex align-items-center text-white" data-aos="fade-down" data-aos-delay="100" style="border-bottom-left-radius: 55px; border-bottom-right-radius: 55px;">
        <div class="container d-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center text-white">
            <i class="bi bi-envelope-fill me-2" style="color: #FCEFCB;"></i>
            <a href="mailto:alperenyilmasz38@gmail.com">alperenyilmasz38@gmail.com</a>
            <i class="bi bi-telephone-fill ms-4 me-2" style="color: #FCEFCB;"></i>
            <a href="tel:+905079032778">+90 507 903 2778</a>
          </div>
          <div class="social-icons d-flex align-items-center">
            <a href="https://www.instagram.com/alperenyilmasz/" class="text-white" title="Instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://x.com/alperenyilmasz" class="text-white" title="Twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="" class="text-white" title="Facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.linkedin.com/in/alperenyilmasz/" class="text-white" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
            <a href="https://github.com/alperenyilmasz" class="text-white" title="GitHub"><i class="bi bi-github"></i></a>
          </div>
        </div>
      </div>
    </header>
 
    <nav class="navbar navbar-expand-lg sticky-top" data-aos="fade-up" data-aos-delay="150" style="border-top-left-radius: 35px; border-top-right-radius: 35px;" data-bs-theme="light">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="logo.png" style="height: 40px; width: 60px;" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="index.php">Ana Sayfa</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php#ogrenim">Akademik Kariyerim</a></li>
            <li class="nav-item"><a class="nav-link" href="projelerim.php">Projelerim</a></li>
            <li class="nav-item"><a class="nav-link active" href="iletisimalp.php">İletişim</a></li>
            <li class="nav-item"><a class="nav-link" href="login.php"><i class="bi bi-person-circle me-1"></i>Kayıt / Giriş</a></li>
          </ul>
        </div>
      </div>
    </nav>

      <div class="container mt-5">
        <div class="row">
          <div class="col-lg-6">
            <div class="info-item panel-box d-flex flex-column justify-content-center align-items-center p-3 mb-5 rounded" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Adres</h3>
              <p>Kutlubey Yerleşkesi Kutlubeyyazıcılar Köyü </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="info-item panel-box d-flex flex-column justify-content-center align-items-center p-3 mb-5 rounded" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-telephone"></i>
              <h3>Telefon</h3>
              <p>+90 507 903 2778</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="info-item panel-box d-flex flex-column justify-content-center align-items-center p-3 mb-5 rounded" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-envelope"></i>
              <h3>E-posta</h3>
              <p>alperenyilmasz@gmail.com</p>
            </div>
          </div>
        </div>
          <div class="row mb-5">
            <div class="col-lg-6">
              <div class="map-frame panel-box" data-aos="fade-up" data-aos-delay="400">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11944.296079852915!2d32.26419031620027!3d41.54599453847894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409b7ab4a40a9d37%3A0x503bc50f823c4b15!2zQmFydMSxbiDDnG5pdmVyc2l0ZXNpIEt1dGx1YmV5IFlhesSxY8SxbGFyIEthbXDDvHPDvA!5e0!3m2!1str!2str!4v1747404733096!5m2!1str!2str" width="100%" height="430" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
            <div class="col-lg-6">
              <form class="form panel-box p-4 rounded h-100" style="height: 450px;" data-aos="fade-up" data-aos-delay="400" method="post" id="contactForm">
                <div class="container-fluid p-0 h-100 d-flex flex-column justify-content-between">
                  <h4 class="contact-form-title">Bize Ulaşın</h4>
                  <div class="row g-2 mb-4">
                    <div class="col-6">
                      <label class="mini-contact-label">Ad Soyad</label>
                      <input type="text" name="adi" class="form-control" placeholder="Adınız Soyadınız" required>
                    </div>
                    <div class="col-6">
                      <label class="mini-contact-label">E-posta</label>
                      <input type="email" name="eposta" class="form-control" placeholder="E-Posta" required>
                    </div>
                  </div>
                  <div class="w-100 mb-4">
                    <input type="text" name="konu" class="form-control" placeholder="Konu" required>
                  </div>
                  <div class="flex-grow-1 mb-4">
                    <textarea name="mesaj" class="form-control h-100" placeholder="Mesajınız" required></textarea>
                  </div>
                  <div>
                    <button type="submit" class="btn btn-primary w-100 gradient-custom" method="post">
                      <i class="bi bi-send-fill me-2"></i>Gönder
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
      </div>

    <footer class="footer" data-aos="fade-up" data-aos-delay="300">
      <div class="container">
        <div class="footer-content">
          <div class="footer-logo">
            <img src="logo.png" alt="Logo">
            <h3>Alperen YILMAZ</h3>
          </div>
          <div class="footer-links">
            <a href="index.php">Ana Sayfa</a>
            <a href="index.php#ogrenim">Akademik Kariyerim</a>
            <a href="projelerim.php">Projelerim</a>
            <a href="iletisimalp.php">İletişim</a>
            <a href="login.php">Kayıt / Giriş</a>
          </div>
          <div class="footer-social">
            <a href="https://www.instagram.com/alperenyilmasz/" title="Instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://x.com/alperenyilmasz" title="Twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="" title="Facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.linkedin.com/in/alperenyilmasz/" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
            <a href="https://github.com/alperenyilmasz" title="GitHub"><i class="bi bi-github"></i></a>
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
            delay: 200,
            easing: 'ease-in-out'
          });

          // Form submission handling
          document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            var modal = new bootstrap.Modal(document.getElementById('exampleModal'));
            modal.show();
            this.reset();
          });
        });
    </script>

  </body>
</html>
