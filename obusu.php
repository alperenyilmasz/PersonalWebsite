<!-- copyright bottom footer yapılacak border ekleme ve renklendirme-->

<!doctype html>
<html lang="tr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mehmet Sami Soydan</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" rel="stylesheet">
    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

        <div class="container">
            <div class="row justify-content-center align-items-center min-vh-100">
                <div class="col-md-6 col-lg-5">
                    <div class="card shadow-lg">
                        <div class="card-body p-4">
                            <h3 class="text-center mb-4"> Giriş Yap </h3>

                            <div id="loginForm">
                                <form action="">
                                    <div class="mb-3">
                                        <label class="fw-bold" for="epostagiriniz">E-posta Adresiniz: </label>
                                        <input type="email" name="eposta" id="epostagiriniz" class="form-control mb-3" placeholder="Lütfen e-posta adresinizi giriniz" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="fw-bold" for="sifregiriniz">Şifreniz: </label>
                                        <input type="password" name="sifre" id="sifregiriniz" class="form-control mb-3" placeholder="Lütfen şifrenizi giriniz" required>
                                    </div>
                                    <div class="d-grid mb-3">
                                        <button type="submit" name="login" class="btn btn-primary w-100" ><i class="bi bi-box-arrow-right me-1"></i>Giriş Yap</button><!-- bu buton ait olduğu formu tetikler -->
                                    </div>
                                </form>
                            </div>

                            <div id="kayitForm" style="display: none;">
                                <form>
                                    <div class="mb-3">
                                        <label class="fw-bold" for="Adi">Adınız ve Soyadınız: </label>
                                        <input type="text" name="adisoyadi" id="adi" class="form-control mb-3" placeholder="Lütfen adınızı ve soyadınızı giriniz" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="fw-bold" for="epostagiriniz1">E-posta Adresiniz: </label>
                                        <input type="email" name="eposta" id="epostagiriniz1" class="form-control mb-3" placeholder="Lütfen e-posta adresinizi giriniz" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="fw-bold" for="sifregiriniz1">Şifreniz: </label>
                                        <input type="password" name="sifre" id="sifregiriniz1" class="form-control mb-3" placeholder="Lütfen şifrenizi giriniz" required>
                                    </div>
                                    <div class="d-grid mb-3">
                                        <button type="submit" name="login" class="btn btn-success w-100" onclick="formGoster()"><i class="bi bi-person-fill-add me-1"></i>Kayıt Ol</button><!-- bu buton ait olduğu formu tetikler -->
                                    </div>
                                </form>
                            </div>

                            <hr class="my-4">
                            <div class="d-grid gap-2">
                                <button type="button" class="btn btn-secondary w-100" onclick="formGoster()"><i class="bi bi-person-plus-fill me-2"></i>Yeni Üye Kaydı</button>
                            </div>

                            <hr class="my-4">
                            <div class="d-grid gap-2">
                                <button type="button" class="btn btn-danger w-100 mb-2" aria-label="Google" title="Google"><i class="bi bi-google me-2"></i>ile giriş yap</button>
                                <button type="button" class="btn btn-primary w-100 my-1" aria-label="Facebook" title="Facebook"><i class="bi bi-facebook me-2"></i>ile giriş yap</button>
                                <button type="button" class="btn btn-dark w-100 my-1" aria-label="X" title="X"><i class="bi bi-twitter-x me-2"></i>ile giriş yap</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                AOS.init({
                duration: 1200,  
                once: true      
                });
            });
        </script>
        
        <script>
            function formGoster() {
                const loginForm = document.getElementById('loginForm');
                const kayitForm = document.getElementById('kayitForm');

                if (loginForm.style.display === 'none'){
                    loginForm.style.display = 'block';
                    kayitForm.style.display = 'none';
                } else {
                    loginForm.style.display = 'none';
                    kayitForm.style.display = 'block';
                }
            };
        </script>

    </body>
</html>