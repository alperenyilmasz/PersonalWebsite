<!DOCTYPE html>
<html lang="tr">
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
      body{
        background-color: #F1EFEC;
        
      }
      .ig{
        color: #6a11cb;
      }
 /* The actual timeline (the vertical ruler) */
.main-timeline-4 {
  position: relative;
}

/* The actual timeline (the vertical ruler) */
.main-timeline-4::after {
  content: "";
  position: absolute;
  width: 3px;
  background-color: #bbb;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.timeline-4 {
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.timeline-4::after {
  content: "";
  position: absolute;
  width: 25px;
  height: 25px;
  right: -11px;
  background-color: #bbb;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left-4 {
  padding: 0px 40px 20px 0px;
  left: 0;
}

/* Place the container to the right */
.right-4 {
  padding: 0px 0px 20px 40px;
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left-4::before {
  content: " ";
  position: absolute;
  top: 18px;
  z-index: 1;
  right: 30px;
  border: medium solid rgba(37, 117, 252, 1);
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent rgba(37, 117, 252, 1);
}

/* Add arrows to the right container (pointing left) */
.right-4::before {
  content: " ";
  position: absolute;
  top: 18px;
  z-index: 1;
  left: 30px;
  border: medium solid rgba(37, 117, 252, 1);
  border-width: 10px 10px 10px 0;
  border-color: transparent rgba(37, 117, 252, 1) transparent transparent;
}

/* Fix the circle for containers on the right side */
.right-4::after {
  left: -14px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .main-timeline-4::after {
    left: 31px;
  }

  /* Full-width containers */
  .timeline-4 {
    width: 100%;
    padding-left: 70px;
    padding-right: 25px;
  }

  /* Make sure that all arrows are pointing leftwards */
  .timeline-4::before {
    left: 60px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left-4::after,
  .right-4::after {
    left: 18px;
  }

  .left-4::before {
    right: auto;
  }

  /* Make all right containers behave like the left ones */
  .right-4 {
    left: 0%;
  }
}

.gradient-custom {
  /* fallback for old browsers */
  background: #6a11cb;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(
    to right,
    #60B5FF,
    rgba(37, 117, 252, 1)
  );

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(
    to left,
    #70b8f7,
    rgb(18, 103, 250)
  );
}

.gradient-custom-4 {
  /* fallback for old browsers */
  background: #f093fb;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(
    to left,
    #60B5FF,
    rgba(37, 117, 252, 1)
  );

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(
    to right,
    #60B5FF,
    rgba(37, 117, 252, 1)
  );
}
    </style>
  </head>
  <body>
    <header class="header">
       
        <div class="d-flex align-items-center text-white p-1 col-md-8" data-aos="fade-down" data-aos-delay="180" style="background-color: #60B5FF; border-bottom-left-radius: 55px; border-bottom-right-radius: 55px;">

         <div class="container d-flex align-items-center justify-content-between">

          <div class="d-flex align-items-center text-white">
            <i class="bi bi-envelope-fill" style="color: #FCEFCB;"></i><a href="mailto:alperenyilmasz38@gmail.com" class="text-white text-decoration-none ms-1">alperenyilmasz38@gmail.com</a>
            <i class="bi bi-telephone-fill ms-4" style="color: #FCEFCB;"></i></i><span class="ms-1">+90 507 903 2778</span>
          </div>

          <div class="d-flex align-items-center justify-content-between mb-2">

            <a href="https://www.instagram.com/alperenyilmasz/" class="icon-link icon-link-hover"style="--bs-icon-link-transform: translate3d(0, -.200rem, 0);"><i class="bi bi-instagram ig"></i></a>
            <a href="https://x.com/alperenyilmasz"class="icon-link icon-link-hover"style="--bs-icon-link-transform: translate3d(0, -.200rem, 0);"><i class="bi bi-twitter-x ms-2" style="color: #000000;"xg></i></a>
            <a href=""class="icon-link icon-link-hover"style="--bs-icon-link-transform: translate3d(0, -.200rem, 0);"><i class="bi bi-facebook ms-2" style="color: #1877F2;"></i></a>
            <a href="https://www.linkedin.com/in/alperenyilmasz/"class="icon-link icon-link-hover"style="--bs-icon-link-transform: translate3d(0, -.200rem, 0);"><i class="bi bi-linkedin ms-2" style="color: #0077B5;"></i></a>

          </div>

         </div>

       </div> 

    </header>
 
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-lg bordered" data-aos="fade-up" data-aos-delay="150" style="border-top-left-radius: 35px; border-top-right-radius: 35px; background-color: #AFDDFF !important;" data-bs-theme="light">
        <div class="container d-lex justify-content-between">
          <a class="navbar-brand" href="#"><img src="logo.png" style="height: 40px; width: 60px;" alt=""></a>

          <!-- sayfa kuculduguunde menuyu acan button acılır -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>


          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Ana Sayfa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Akademik Kariyerim</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Projelerim
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Web Projelerim</a></li>
                  <li><a class="dropdown-item" href="#">Oyun Projelerim</a></li>
                  <li><a class="dropdown-item" href="#">Masaüstü Projelerim</a></li>
                </ul>
                <li class="nav-item">
                    <a class="nav-link" href="blabla.html">İletişim</a>
                  </li>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container mt-5">
        <div class="row">

            <div class="col-md-4 d-flex justify-content-center">
                <img src="me.png" alt="" style="height: 700px; box-shadow: 10px 20px 11px 0px rgba(0,0,0,0.75);" data-aos="flip-left" data-aos-delay="180">
            </div>

            <div class="col-md-8">
                <p class="h1 text-secondary fst-italic" data-aos="flip-right" data-aos-delay="180">Alperen YILMAZ</p>
                <br><br><br>
                <p class="col-md-7" data-aos="zoom-in" data-aos-delay="180" style="text-align: justify;">Ben Alperen Yılmaz. 25 Haziran 2003 tarihinde Kayseri'nin Develi ilçesinde doğdum. Eğitim hayatıma Muammer Kocatürk İlkokulu'nda başladım, ardından Pembe Cesarettin Kocatürk Ortaokulu'nda öğrenimime devam ettim. Ortaokul döneminde girdiğim TEOG sınavından 468 puan alarak Mustafa Koyuncu Fen Lisesi'ne girme hakkı kazandım.
                    <br><br>
                    Lise eğitimimin ardından, YKS sınavında elde ettiğim başarı sayesinde Bartın Üniversitesi Bilgisayar Teknolojisi ve Bilişim Sistemleri Bölümü'nü kazandım. Şu anda, çocukluk hayalim olan mesleğe adım atmış olmanın mutluluğunu yaşıyorum. Bilgisayar teknolojilerine olan ilgimle kendimi bu alanda geliştirmeye devam ediyorum.
                    <br><br>
                    Akademik hayatımın yanı sıra sosyal ve kültürel yönüme de önem veriyorum. Hobilerim arasında basketbol oynamak ve dizi-film izlemek yer alıyor. Lise yıllarımda okul takımında aktif olarak yer aldım ve takımımla birlikte Kayseri il ikinciliği elde ettik. Basketbol, takım ruhu ve disiplin kazanmamda önemli bir rol oynadı.
                  <br><br>
                  Ayrıca sinema ve dizi dünyasına büyük bir tutku duyuyorum. Bu alana olan ilgim öyle derin ki IMDb Top 200 listesinde yer alan tüm filmleri izledim. Film ve dizi izlemek benim için sadece bir hobi değil, aynı zamanda görsel anlatım ve senaryo yapısına dair farkındalığımı da artıran bir uğraş.
                  </p>
            </div>
            <div class="container py-5" id="ogrenim-bilgisi">
                <h2 class="text-center text-secondary mb-4">Öğrenim Bilgisi</h2>
                <div class="main-timeline-4 text-white" >
                  <div class="timeline-4 left-4">
                    <div class="card gradient-custom"data-aos="fade-right" data-aos-delay="180">
                      <div class="card-body p-4">
                        <i class="fas fa-brain fa-2x mb-3"></i>
                        <h4>İlkokul</h4>
                        <p class="small text-white-50 mb-4">2009</p>
                        <p>
                            Muammer Kocatürk İlkokulu
                        </p>
                        <h6 class="badge bg-body-tertiary text-black mb-0">TEOG</h6>
                      </div>
                    </div>
                  </div>
                  <div class="timeline-4 right-4">
                    <div class="card gradient-custom-4"data-aos="fade-left" data-aos-delay="250">
                      <div class="card-body p-4">
                        <i class="fas fa-camera fa-2x mb-3"></i>
                        <h4>Lise</h4>
                        <p class="small text-white-50 mb-4">2013</p>
                        <p>
                            Pembe Cesarettin Kocatürk Ortaokulu
                        </p>
                        <h6 class="badge bg-body-tertiary text-black mb-0">YKS</h6>
                      </div>
                    </div>
                  </div>
                  <div class="timeline-4 left-4">
                    <div class="card gradient-custom"data-aos="fade-right" data-aos-delay="350">
                      <div class="card-body p-4">
                        <i class="fas fa-campground fa-2x mb-3"></i>
                        <h4>Lise</h4>
                        <p class="small text-white-50 mb-4">2017</p>
                        <p>
                            Mustafa Koyuncu Fen Lisesi
                        </p>
                        <h6 class="badge bg-body-tertiary text-black mb-0">Vize</h6>
                        <h6 class="badge bg-body-tertiary text-black mb-0">Final</h6>
                      </div>
                    </div>
                  </div>
                  <div class="timeline-4 right-4">
                    <div class="card gradient-custom-4"data-aos="fade-left" data-aos-delay="450">
                      <div class="card-body p-4">
                        <i class="fas fa-camera fa-2x mb-3"></i>
                        <h4>Üniversite</h4>
                        <p class="small text-white-50 mb-4">2024</p>
                        <p>
                            Bartın Üniversitesi Bilgisayar Teknolojisi ve Bilişim Sistemleri
                        </p>
                        <h6 class="badge bg-body-tertiary text-black mb-0">YKS</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center mb-4">
          <h2 class="text-center text-secondary position-relative" style="padding-bottom: 10px;">
            Yeteneklerim
            <div style="position: absolute; bottom: 0; left: 50%; transform: translateX(-50%); width: 100px; height: 3px; background: linear-gradient(135deg, #60B5FF 0%, #2575fc 100%); border-radius: 3px;"></div>
          </h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="mb-3">
              <div class="d-flex justify-content-between mb-1">
                <span class="text-secondary">Python</span>
                <span class="text-secondary">75%</span>
              </div>
              <div class="progress" role="progressbar" aria-label="Python" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped progress-bar-animated text-bg-success" style="width: 0%" data-target-width="75"></div>
              </div>
            </div>
            <div class="mb-3">
              <div class="d-flex justify-content-between mb-1">
                <span class="text-secondary">C#</span>
                <span class="text-secondary">65%</span>
              </div>
              <div class="progress" role="progressbar" aria-label="C#" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped progress-bar-animated text-bg-info" style="width: 0%" data-target-width="65"></div>
              </div>
            </div>
            <div class="mb-3">
              <div class="d-flex justify-content-between mb-1">
                <span class="text-secondary">HTML</span>
                <span class="text-secondary">85%</span>
              </div>
              <div class="progress" role="progressbar" aria-label="HTML" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped progress-bar-animated text-bg-warning" style="width: 0%" data-target-width="85"></div>
              </div>
            </div>
            <div class="mb-3">
              <div class="d-flex justify-content-between mb-1">
                <span class="text-secondary">Bootstrap</span>
                <span class="text-secondary">80%</span>
              </div>
              <div class="progress" role="progressbar" aria-label="Bootstrap" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped progress-bar-animated text-bg-danger" style="width: 0%" data-target-width="80"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="container-fluid text-center shadow-lg border-top border-danger py-3" style="background-color: #60B5FF; flex-grow: 1;">
        <div class="credits mt-2">
          ©<span>Tüm Hakları Saklıdır. </span><strong> Alperen Yılmaz</strong>
          <p>AY Web Tasarını Geliştirme</p>
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
            duration: 1200,  
            once: true      
          });

          // Progress bar animation function with truly constant speed
          function animateProgressBar(element, duration) {
            const targetWidth = parseInt(element.getAttribute('data-target-width'));
            const startTime = performance.now();
            const frameDuration = 1000 / 60; // 60 FPS for smooth animation
            
            function updateProgress(currentTime) {
              const elapsed = currentTime - startTime;
              const progress = Math.min(elapsed / duration, 1);
              
              // Calculate exact width based on elapsed time
              const currentWidth = (targetWidth * elapsed) / duration;
              element.style.width = Math.min(currentWidth, targetWidth) + '%';
              
              if (progress < 1) {
                requestAnimationFrame(updateProgress);
              }
            }
            
            requestAnimationFrame(updateProgress);
          }

          // Animate all progress bars simultaneously
          const progressBars = document.querySelectorAll('.progress-bar');
          
          // Wait 2 seconds before starting all animations
          setTimeout(() => {
            progressBars.forEach(bar => {
              animateProgressBar(bar, 1500); // 1.5 seconds duration for smooth animation
            });
          }, 2000);

          // Form only exists on contact page; guard to avoid JS errors here.
          const contactForm = document.getElementById('contactForm');
          if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
              e.preventDefault();
              alert('Mesajınız gönderildi! En kısa sürede size dönüş yapacağım.');
              this.reset();
            });
          }
        });
    </script>

  </body>
</html>
