<!doctype html>

<html
lang="en"
class="light-style layout-menu-fixed layout-compact"
dir="ltr"
data-theme="theme-default"
data-assets-path="<?= base_url()?>assets/"
data-template="horizontal-menu-template-no-customizer-starter"
data-style="light">
<head>
  <meta charset="utf-8" />
  <meta
  name="viewport"
  content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Dashboard Kepegawaian Kementerian Agama</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?= base_url()?>assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
  href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
  rel="stylesheet" />

  <link rel="stylesheet" href="<?= base_url()?>assets/libs/fonts/tabler-icons.css" />
  <!-- <link rel="stylesheet" href="<?= base_url()?>assets/libs/fonts/fontawesome.css" /> -->
  <!-- <link rel="stylesheet" href="<?= base_url()?>assets/libs/fonts/flag-icons.css" /> -->

  <!-- Core CSS -->

  <link rel="stylesheet" href="<?= base_url()?>assets/libs/css/rtl/core.css" />
  <link rel="stylesheet" href="<?= base_url()?>assets/libs/css/rtl/theme-default.css" />

  <link rel="stylesheet" href="<?= base_url()?>assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="<?= base_url()?>assets/libs/libs/node-waves/node-waves.css" />

  <link rel="stylesheet" href="<?= base_url()?>assets/libs/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="<?= base_url()?>assets/libs/libs/swiper/swiper.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/libs/css/pages/cards-advance.css">

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="<?= base_url()?>assets/libs/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="<?= base_url()?>assets/js/config.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
    <div class="layout-container">
      <!-- Navbar -->

      <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
        <div class="container-xxl">
          <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
            <ul class="nav nav-pills" role="tablist">
              <li class="nav-item">
                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-simpeg" aria-controls="navs-simpeg" aria-selected="true"><i class='ti-sm ti ti-user-check me-1_5'></i> Simpeg</button>
              </li>
              <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pengadaan" aria-controls="navs-pengadaan" aria-selected="false"><i class='ti-sm ti ti-users me-1_5'></i> Pengadaan</button>
              </li>
              <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-kp" aria-controls="navs-kp" aria-selected="false"><i class='ti-sm ti ti-layout-grid me-1_5'></i> Kenaikan Pangkat</button>
              </li>
            </ul>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
              <i class="ti ti-x ti-md align-middle"></i>
            </a>
          </div>

          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="ti ti-menu-2 ti-md"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <img src="<?= base_url()?>assets/img/simpeg.png" width="100px" />

              </li>
              <!--/ User -->
            </ul>
          </div>
        </div>
      </nav>

      <!-- / Navbar -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Content wrapper -->
        <div class="content-wrapper">

          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">

            <div class="tab-content p-0">
              <div class="tab-pane fade show active" id="navs-simpeg" role="tabpanel">
                <?= $this->include('pages/simpeg')?>


              </div>
              <div class="tab-pane fade" id="navs-pengadaan" role="tabpanel">
                <?= $this->include('pages/pengadaan')?>
              </div>
              <div class="tab-pane fade" id="navs-kp" role="tabpanel">
                <?= $this->include('pages/kp')?>
              </div>
            </div>
          </div>
          <!--/ Content -->

          <!-- Footer -->
          <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl">
              <div
              class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
              <div class="text-body">
                ©
                <script>
                document.write(new Date().getFullYear());
                </script>
                , made with ❤️ by <a href="https://ropeg.kemenag.go.id" target="_blank" class="footer-link">Biro Kepegawaian</a>
              </div>
            </div>
          </div>
        </footer>
        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
      </div>
      <!--/ Content wrapper -->
    </div>

    <!--/ Layout container -->
  </div>
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>

<!-- Drag Target Area To SlideIn Menu On Small Screens -->
<div class="drag-target"></div>

<!--/ Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/libs/js/core.js -->

<script src="<?= base_url()?>assets/libs/libs/jquery/jquery.js"></script>
<script src="<?= base_url()?>assets/libs/libs/popper/popper.js"></script>
<script src="<?= base_url()?>assets/libs/js/bootstrap.js"></script>
<script src="<?= base_url()?>assets/libs/libs/node-waves/node-waves.js"></script>
<script src="<?= base_url()?>assets/libs/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?= base_url()?>assets/libs/libs/hammer/hammer.js"></script>

<script src="<?= base_url()?>assets/libs/js/menu.js"></script>

<script src="<?= base_url()?>assets/js/main.js"></script>
<script src="<?= base_url()?>assets/libs/libs/apex-charts/apexcharts.js"></script>
<script src="<?= base_url()?>assets/libs/libs/swiper/swiper.js"></script>

<script type="text/javascript">
var siteurl = '<?= site_url()?>';

setTimeout(function(){
    location = ''
  },1800000)
</script>
<script src="<?= base_url()?>assets/tablebuild.js"></script>
<script src="<?= base_url()?>assets/main.js"></script>

</body>
</html>
