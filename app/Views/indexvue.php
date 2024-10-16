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

            <div class="tab-content p-0" id="app">
              <div class="tab-pane fade show active" id="navs-simpeg" role="tabpanel">
                <div class="row">
                  <div class="col-6">
                    <div class="col-xl-12">
                      <div class="card h-100">
                        <div class="card-body d-flex justify-content-between">
                          <div class="d-flex flex-column">
                            <div class="card-title mb-auto">
                              <h5 class="mb-0 text-nowrap">Jumlah Pegawai</h5>
                            </div>
                            <div class="chart-statistics">
                              <h3 class="card-title mb-0">{{jumlahpegawai}}</h3>
                            </div>
                          </div>
                          <div id="generatedLeadsChart"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="card card-border-shadow-primary h-100">
                      <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                          <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-truck ti-28px"></i></span>
                          </div>
                          <h4 class="mb-0" id="simpeg_pns">{{simpegpns}}</h4>
                        </div>
                        <p class="mb-1">PNS</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="card card-border-shadow-primary h-100">
                      <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                          <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-truck ti-28px"></i></span>
                          </div>
                          <h4 class="mb-0" id="simpeg_pppk">{{simpegpppk}}</h4>
                        </div>
                        <p class="mb-1">PPPK</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

                <div class="tab-pane fade" id="navs-pengadaan" role="tabpanel">
                  <div class="row">
                    <h5 class="mb-2">Statistik Pelamar<span class="h4"> CPNS SSCASN 2024</span></h5>
                    <div class="col-lg-3 col-sm-6">
                      <div class="card card-border-shadow-primary h-100">
                        <div class="card-body">
                          <div class="d-flex align-items-center mb-2">
                            <div class="avatar me-4">
                              <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-truck ti-28px"></i></span>
                            </div>
                            <h4 class="mb-0" id="cpns_jml_pendaftar">{{cpns.jml_pendaftar}}</h4>
                          </div>
                          <p class="mb-1">Jumlah Pendaftar</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                      <div class="card card-border-shadow-warning h-100">
                        <div class="card-body">
                          <div class="d-flex align-items-center mb-2">
                            <div class="avatar me-4">
                              <span class="avatar-initial rounded bg-label-warning"
                              ><i class="ti ti-alert-triangle ti-28px"></i
                                ></span>
                              </div>
                              <h4 class="mb-0" id="cpns_jml_submit">{{cpns.jml_submit}}</h4>
                            </div>
                            <p class="mb-1">Jumlah Submit</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2 col-sm-6">
                        <div class="card card-border-shadow-danger h-100">
                          <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                              <div class="avatar me-4">
                                <span class="avatar-initial rounded bg-label-danger"
                                ><i class="ti ti-git-fork ti-28px"></i
                                  ></span>
                                </div>
                                <h4 class="mb-0" id="cpns_jml_ms">{{cpns.jml_ms}}</h4>
                              </div>
                              <p class="mb-1">Jumlah MS</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                          <div class="card card-border-shadow-info h-100">
                            <div class="card-body">
                              <div class="d-flex align-items-center mb-2">
                                <div class="avatar me-4">
                                  <span class="avatar-initial rounded bg-label-info"><i class="ti ti-clock ti-28px"></i></span>
                                </div>
                                <h4 class="mb-0" id="cpns_jml_tms">{{cpns.jml_tms}}</h4>
                              </div>
                              <p class="mb-1">Jumlah TMS</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                          <div class="card card-border-shadow-info h-100">
                            <div class="card-body">
                              <div class="d-flex align-items-center mb-2">
                                <div class="avatar me-4">
                                  <span class="avatar-initial rounded bg-label-info"><i class="ti ti-clock ti-28px"></i></span>
                                </div>
                                <h4 class="mb-0" id="cpns_jml_blm_verif">{{cpns.jml_blm_verif}}</h4>
                              </div>
                              <p class="mb-1">Jumlah Belum Verif</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row mt-5">
                        <div class="col-xxl-12 col-lg-12">
                          <div class="card h-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                              <h5 class="card-title m-0 me-2">Top Satker</h5>
                              <div class="dropdown">
                                <button
                                class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1"
                                type="button"
                                id="topCourses"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <i class="ti ti-dots-vertical ti-md text-muted"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topCourses">
                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                <a class="dropdown-item" href="javascript:void(0);">View All</a>
                              </div>
                            </div>
                          </div>
                          <div class="card-body">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Satuan Kerja</th>
                                  <th>Pelamar</th>
                                </tr>
                              </thead>
                              <tbody class="table-border-bottom-0">
                                <?php
                                $no = 1;
                                foreach ($cpnssatker as $row) {?>
                                  <tr>
                                    <td><span class="badge badge-center rounded-pill bg-label-primary"><?= $no?></span></td>
                                    <td><?= $row->lok_formasi_nm?></td>
                                    <td><?= rupiah($row->jumlah)?></td>
                                  </tr>
                                  <?php $no++; } ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="navs-kp" role="tabpanel">
                      <div class="row">
                        <h5 class="mb-2">Usul Kenaikan Pangkat<span class="h4"> Periode Desember 2024</span></h5>
                        <div class="col-lg-3 col-sm-6">
                          <div class="card card-border-shadow-primary h-100">
                            <div class="card-body">
                              <div class="d-flex align-items-center mb-2">
                                <div class="avatar me-4">
                                  <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-truck ti-28px"></i></span>
                                </div>
                                <h4 class="mb-0"><?= rupiah($kpjumlah->jumlah)?></h4>
                              </div>
                              <p class="mb-1">Jumlah Usul</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                          <div class="card card-border-shadow-primary h-100">
                            <div class="card-body">
                              <div class="d-flex align-items-center mb-2">
                                <div class="avatar me-4">
                                  <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-truck ti-28px"></i></span>
                                </div>
                                <h4 class="mb-0"><?= rupiah($kpjumlah->jumlah)?></h4>
                              </div>
                              <p class="mb-1">Sdh di TTD - Pertek</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                          <div class="card card-border-shadow-primary h-100">
                            <div class="card-body">
                              <div class="d-flex align-items-center mb-2">
                                <div class="avatar me-4">
                                  <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-truck ti-28px"></i></span>
                                </div>
                                <h4 class="mb-0"><?= rupiah($kpjumlah->jumlah)?></h4>
                              </div>
                              <p class="mb-1">Pembuatan SK Berhasil</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                          <div class="card card-border-shadow-primary h-100">
                            <div class="card-body">
                              <div class="d-flex align-items-center mb-2">
                                <div class="avatar me-4">
                                  <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-truck ti-28px"></i></span>
                                </div>
                                <h4 class="mb-0"><?= rupiah($kpjumlah->jumlah)?></h4>
                              </div>
                              <p class="mb-1">Menunggu SK Paraf / TTE</p>
                            </div>
                          </div>
                        </div>
                      </div>
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
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="<?= base_url()?>assets/main.js"></script>


</body>
</html>
