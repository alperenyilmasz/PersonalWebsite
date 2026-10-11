<div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6">
                <h3 class="mb-0">Dashboard</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Güvenli Çıkış</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
</div>
<div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
           
            <div class="row">
              <div class="cold-md-12">
                <div class="alert alert-success">Güvenli Çıkış Yaptınız. Lütfen Bekleyiniz. Yönlendiriliyorsunuz.</div>
                <?php 
                  $code->logout();
                  go(URL,3);
                ?>
              </div>
            </div>

          </div>
          <!--end::Container-->
        </div>