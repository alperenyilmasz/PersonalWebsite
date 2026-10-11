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
      body{
        background-color: #F1EFEC;
        
      }
      .ig{
        color: #6a11cb;
      }

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
       
        <div class="d-flex align-items-center text-white p-1 col md-8" data-aos="fade-down" data-aos-delay="180" style="background-color: #60B5FF; border-bottom-left-radius: 55px; border-bottom-right-radius: 55px;">

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
                <a class="nav-link active" aria-current="page" href="alperenyilmaz.html">Ana Sayfa</a>
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

        <div class="text-center mb-5" data-aos="fade-down" data-aos-delay="200">
          <h1 class="display-3 fw-bold text-primary mb-3" style="background: linear-gradient(45deg, #60B5FF, #2575fc); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; letter-spacing: 2px;">
            Alperen Yılmaz
          </h1>
          <p class="lead text-muted">Yazılım Geliştirici & Web Tasarımcı</p>
        </div>

        <div class="text-center mb-4" data-aos="fade-up" data-aos-delay="300">
          <h2 class="display-5 fw-semibold text-dark mb-2">Projelerim</h2>
          <div class="w-25 mx-auto border-bottom border-3 border-primary"></div>
        </div>

        <div class="accordion mt-5 mb-5" id="projectShowcase">
          <div class="accordion-item shadow-sm mb-3">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#kisiselweb">
                <i class="bi bi-person-lines-fill me-2"> Kişisel Web Sitesi</i>
              </button>
            </h2>
            <div id="kisiselweb" class="accordion-collapse collapse show" data-bs-parent="#projectShowcase">
              <div class="accordion-body">
                <div class="row">

                    <div class="col-md-4">
                      <img src="kisiselweb.png" alt="" class="img-fluid">
                  </div>
                  <div class="col-md-8">
                    <p>HTML 5, CSS 3, JavaScript, Bootstrap 5, AOS kullanılarak geliştirilmiştir. 
                    </p>
                    <p>
                      <span class="badge bg-primary">HTML 5</span>
                      <span class="badge bg-danger ">CSS 3</span>
                      <span class="badge bg-warning text-dark">JavaScript</span>
                      <span class="badge bg-success">Bootstrap 5</span>
                      <span class="badge bg-info">AOS</span>
                    </p>
                    <a href="#"class="btn btn-outline-primary btn-sm">
                      Canlı Demo İçin Tıklayın
                    </a>
                  </div>
                 
                  </div>
                  
                </div>

              </div>
            </div>
          </div>
      
        </div>

        <div class="container mt-5">
        <div class="accordion mt-5 mb-5" id="dashboard">
          <div class="accordion-item shadow-sm mb-3">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#dashboardContent">
                <i class="bi bi-speedometer2 me-2"> Gösterge Paneli</i>
              </button>
            </h2>
            <div id="dashboardContent" class="accordion-collapse collapse" data-bs-parent="#projectShowcase">
              <div class="accordion-body">
                <div class="row">

                    <div class="col-md-4">
                      <img src="dashboard.png" alt="" class="img-fluid">
                  </div>
                  <div class="col-md-8">
                    <p>
                      Matplotlib, Seaborn, Pandas, Scikit-learn, TensorFlow kullanılarak geliştirilmiştir.
                    </p>
                    <p>
                      <span class="badge bg-primary">Matplotlib</span>
                      <span class="badge bg-danger ">Seaborn</span>
                      <span class="badge bg-warning text-dark">Pandas</span>
                      <span class="badge bg-success">Scikit-learn</span>
                      <span class="badge bg-info">TensorFlow</span>
                    </p>
                    <a href="#"class="btn btn-outline-primary btn-sm">
                      Canlı Demo İçin Tıklayın
                    </a>
                  </div>
                 
                  </div>
                  
                </div>

              </div>
            </div>
          </div>
      
        </div>

        <div class="container mt-5">
        <div class="accordion mt-5 mb-5" id="gameProject">
          <div class="accordion-item shadow-sm mb-3">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#gameContent">
                <i class="bi bi-controller me-2"> Oyun </i>
              </button>
            </h2>
            <div id="gameContent" class="accordion-collapse collapse" data-bs-parent="#projectShowcase">
              <div class="accordion-body">
                <div class="row">

                    <div class="col-md-4">
                      <img src="oyun.png" alt="" class="img-fluid">
                  </div>
                  <div class="col-md-8">
                    <p>
                      Unity, C#, Blender, Adobe Photoshop, Audacity kullanılarak geliştirilmiştir.
                    </p>
                    <p>
                      <span class="badge bg-primary">Unity</span>
                      <span class="badge bg-danger ">C#</span>
                      <span class="badge bg-warning text-dark">Blender</span>
                      <span class="badge bg-success">Adobe Photoshop</span>
                      <span class="badge bg-info">Audacity</span>
                    </p>
                    <a href="#"class="btn btn-outline-primary btn-sm">
                      Canlı Demo İçin Tıklayın
                    </a>
                  </div>
                 
                  </div>
                  
                </div>

              </div>
            </div>
          </div>
      
        </div>

        <div class="container mt-5">
        <div class="accordion mt-5 mb-5" id="cyberProject">
          <div class="accordion-item shadow-sm mb-3">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cyberContent">
                <i class="bi bi-shield-lock me-2"> Siber Güvenlik </i>
              </button>
            </h2>
            <div id="cyberContent" class="accordion-collapse collapse" data-bs-parent="#projectShowcase">
              <div class="accordion-body">
                <div class="row">

                    <div class="col-md-4">
                      <img src="siber.png" alt="" class="img-fluid">
                  </div>
                  <div class="col-md-8">
                    <p>
                      Kali Linux, Wireshark, Metasploit, Nmap, Burp Suite kullanılarak geliştirilmiştir.
                    </p>
                    <p>
                      <span class="badge bg-primary">Kali Linux</span>
                      <span class="badge bg-danger ">Wireshark</span>
                      <span class="badge bg-warning text-dark">Metasploit</span>
                      <span class="badge bg-success">Nmap</span>
                      <span class="badge bg-info">Burp Suite</span>
                    </p>
                    <a href="#"class="btn btn-outline-primary btn-sm">
                      Canlı Demo İçin Tıklayın
                    </a>
                  </div>
                 
                  </div>
                  
                </div>

              </div>
            </div>
          </div>
      
        </div>

        <div class="container mt-5">
        <div class="accordion mt-5 mb-5" id="mobileProject">
          <div class="accordion-item shadow-sm mb-3">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#mobileContent">
                <i class="bi bi-phone me-2"> Mobil Uygulama </i>
              </button>
            </h2>
            <div id="mobileContent" class="accordion-collapse collapse" data-bs-parent="#projectShowcase">
              <div class="accordion-body">
                <div class="row">

                    <div class="col-md-4">
                      <img src="mobile.png" alt="" class="img-fluid">
                  </div>
                  <div class="col-md-8">
                    <p>
                      React Native, Expo, Firebase, Redux, AsyncStorage kullanılarak geliştirilmiştir.
                    </p>
                    <p>
                      <span class="badge bg-primary">React Native</span>
                      <span class="badge bg-danger ">Expo</span>
                      <span class="badge bg-warning text-dark">Firebase</span>
                      <span class="badge bg-success">Redux</span>
                      <span class="badge bg-info">AsyncStorage</span>
                    </p>
                    <a href="#"class="btn btn-outline-primary btn-sm">
                      Canlı Demo İçin Tıklayın
                    </a>
                  </div>
                 
                  </div>
                  
                </div>

              </div>
            </div>
          </div>
      
        </div>
      </div>
      </div>
      
<div>
  <footer class="container-fluid text-center shadow-lg border-top border-danger py-3" style="background-color: #60B5FF; flex-grow: 1;">
    <div class="credits mt-2">
      ©<span>Tüm Hakları Saklıdır. </span><strong> Alperen Yılmaz</strong>
      <p>AY Web Tasarını Geliştirme</p>
    </div>
  </footer>
</div>

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
