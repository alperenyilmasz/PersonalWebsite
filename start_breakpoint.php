<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Yusuf Can AKGÜN</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" rel="stylesheet">

    <style>

/* The actual timeline (the vertical ruler) */
.main-timeline {
  position: relative;
}

/* The actual timeline (the vertical ruler) */
.main-timeline::after {
  content: "";
  position: absolute;
  width: 6px;
  background-color: #939597;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.timeline {
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.timeline::after {
  content: "";
  position: absolute;
  width: 25px;
  height: 25px;
  right: -13px;
  background-color: #939597;
  border: 5px solid #f5df4d;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left {
  padding: 0px 40px 20px 0px;
  left: 0;
}

/* Place the container to the right */
.right {
  padding: 0px 0px 20px 40px;
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  position: absolute;
  top: 18px;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  position: absolute;
  top: 18px;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -12px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .main-timeline::after {
    left: 31px;
  }

  /* Full-width containers */
  .timeline {
    width: 100%;
    padding-left: 70px;
    padding-right: 25px;
  }

  /* Make sure that all arrows are pointing leftwards */
  .timeline::before {
    left: 60px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after,
  .right::after {
    left: 18px;
  }

  .left::before {
    right: auto;
  }

  /* Make all right containers behave like the left ones */
  .right {
    left: 0%;
  }
}
    </style>
    <style>
      .info-item i {
        font-size: 20px;
        color: blue;
        width: 56px;
        height: 56px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-color: black;
        border-radius: 50%;
        transition: all 0.3 ease-in-out;
        border: 2px dotted blue;
      }

      .info-item p {
        padding: 0;
        margin-bottom: 0;
        font-size: 14px;
        text-align: center;
      }

      .info-item h3 {
        font-size: 20px;
        font-weight: 700;
        margin: 10px;
        text-align: center;
      }
    </style>
  </head>
  <body class="d-flex flex-column">
    <header class="header">
       
        <div class="d-flex align-items-center text-white bg-black p-1">

         <div class="container d-flex align-items-center justify-content-between">

          <div class="d-flex align-items-center text-white">
            <i class="bi bi-envelope-fill text-success"></i><a href="mailto:akgunyusufcan1@gmail.com" class="text-white text-decoration-none ms-1">akgunyusufcan1@gmail.com</a>
            <i class="bi bi-telephone-fill ms-4 text-success"></i></i><span class="ms-1">+90 538 734 5228</span>
          </div>

          <div class="d-flex align-items-center justify-content-between mb-2">

            <a href="https://www.instagram.com/yusufc.akgn/" class="icon-link icon-link-hover"style="--bs-icon-link-transform: translate3d(0, -.200rem, 0);"><i class="bi bi-instagram text-success "></i></a>
            <a href="#"class="icon-link icon-link-hover"style="--bs-icon-link-transform: translate3d(0, -.200rem, 0);"><i class="bi bi-twitter-x ms-2 text-success"></i></a>
            <a href="#"class="icon-link icon-link-hover"style="--bs-icon-link-transform: translate3d(0, -.200rem, 0);"><i class="bi bi-facebook text-success ms-2"></i></a>
            <a href="https://www.linkedin.com/in/alperenyilmasz/"class="icon-link icon-link-hover"style="--bs-icon-link-transform: translate3d(0, -.200rem, 0);"><i class="bi bi-linkedin ms-2 text-success "></i></a>

          </div>

         </div>

       </div> 

    </header>

    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-lg bordered" style="background-color: rgb(216, 202, 189) !important;" data-bs-theme="light">
        <div class="container d-lex justify-content-between">
          <a class="navbar-brand" href="#">CanSOLVE</a>

          <!-- sayfa kuculduguunde menuyu acan button acılır -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>


          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="personelwebsite.html">Ana Sayfa</a>
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
                    <a class="nav-link" href="iletisim.html">İletişim</a>
                  </li>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container mt-5">
        <div class="row">
          <div class="col-lg-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center p-3 mb-5 rounded " data-aos="fade-up" data-aos-delay="200"
            style="box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);">
              <i class="bi bi-geo-alt"></i>
              <h3>Adres</h3>
              <p>Kutlubey Yerleşkesi Kutlubeyyazıcılar Köyü </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center p-3 mb-5 rounded" data-aos="fade-up" data-aos-delay="200"
            style="box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);">
              <i class="bi bi-telephone"></i>
              <h3>Telefon</h3>
              <p>+90 538 734 5228</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center p-3 mb-5 rounded" data-aos="fade-up" data-aos-delay="200"
            style="box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);">
              <i class="bi bi-envelope"></i>
              <h3>E-posta</h3>
              <p>akgunyusufcan1@gmail.com</p>
            </div>
          </div>
        </div>
          <div class="row mb-5">
            <div class="col-lg-6"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11944.296079852915!2d32.26419031620027!3d41.54599453847894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409b7ab4a40a9d37%3A0x503bc50f823c4b15!2zQmFydMSxbiDDnG5pdmVyc2l0ZXNpIEt1dGx1YmV5IFlhesSxY8SxbGFyIEthbXDDvHPDvA!5e0!3m2!1str!2str!4v1747404733096!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" data-aos="fade-up" data-aos-delay="500"></iframe></div>
            <div class="col-lg-6"></div>
          </div>
      </div>

<div>
        <footer class="container-fluid copyright text-center shadow-lg border-top border-warning py-3" style="background-color: rgb(216, 202, 189) ; flex-grow: 1;">

          <div class="credits mt-2">
           © <span>Tüm Hakları Saklıdır.</span><strong>  Yusuf Can AKGÜN</strong>
           <p>CanSOLVE Web Tasarımı Geliştirme</p>
          </div>
       </footer>
</div>



    </script>
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
        });
      </script>
  </body>
</html>