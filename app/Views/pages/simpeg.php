<div class="row g-6">
  <div class="col-lg-6">
    <div class="swiper-container swiper-container-horizontal swiper swiper-card-advance-bg" id="swiper-with-pagination-cards">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="row">
            <div class="col-12">
              <h5 class="text-white mb-0">Statistik Pegawai Kementerian Agama</h5>
              <small>Data per <?= date('Y-m-d')?></small>
            </div>
            <div class="row">
              <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1 pt-md-9">
                <h3 class="text-white mb-0" id="jumlahpegawai">0</h3>
              </div>
              <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                <img src="<?= base_url()?>assets/img/illustrations/card-website-analytics-1.png" alt="Website Analytics" height="150" class="card-website-analytics-img">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <!--/ Website Analytics -->

  <!-- Average Daily Sales -->
  <div class="col-xl-3 col-sm-6">
    <div class="card h-100">
      <div class="card-header pb-0">
        <h5 class="mb-3 card-title">PNS</h5>
        <p class="mb-0 text-body">Pegawai Negeri Sipil</p>
        <h4 class="mb-0" id="jumlahpns">0</h4>
      </div>
    </div>
  </div>
  <!--/ Average Daily Sales -->

  <!-- Sales Overview -->
  <div class="col-xl-3 col-sm-6">
    <div class="card h-100">
      <div class="card-header pb-0">
        <h5 class="mb-3 card-title">PPPK</h5>
        <p class="mb-0 text-body">Pegawai Pemerintah dengan Perjanjian Kerja</p>
        <h4 class="mb-0" id="jumlahpppk">0</h4>
      </div>
    </div>
  </div>
  <!--/ Sales Overview -->

  <!-- Earning Reports -->
  <div class="col-lg-6">
    <div class="card h-100">
      <div class="card-header pb-0 d-flex justify-content-between">
        <div class="card-title mb-0">
          <h5 class="mb-1">Agama</h5>
          <p class="card-subtitle">Statistik Berdasarkan Agama</p>
        </div>
      </div>
      <div class="card-body">
        <div id="tableagama">

        </div>
      </div>
    </div>
  </div>
  <!--/ Earning Reports -->

  <!-- Support Tracker -->
  <div class="col-md-6">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between">
        <div class="card-title mb-0">
          <h5 class="mb-1">Jabatan</h5>
          <p class="card-subtitle">Statistik Berdasarkan Tipe Agama</p>
        </div>
      </div>
      <div class="card-body row">
        <div id="tablejabatan">

        </div>
      </div>
    </div>
  </div>
</div>
