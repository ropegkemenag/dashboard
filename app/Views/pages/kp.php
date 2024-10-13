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
    <?php foreach ($kpstatus as $row) {?>
      <div class="col-lg-3 col-sm-6">
        <div class="card card-border-shadow-primary h-100">
          <div class="card-body">
            <div class="d-flex align-items-center mb-2">
              <div class="avatar me-4">
                <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-truck ti-28px"></i></span>
              </div>
              <h4 class="mb-0"><?= rupiah($row->jumlah)?></h4>
            </div>
            <p class="mb-1"><?= $row->statusUsulanNama?></p>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>

  <div class="row mt-5">
    <div class="col-6">
      <div class="card h-100">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="card-title m-0 me-2">Jenis Kenaikan Pangkat</h5>
        </div>
        <div class="card-body">
          <ul class="p-0 m-0">
            <?php foreach ($kpjenis as $row) {?>
          <li class="d-flex mb-3 pb-1 align-items-center">
            <div class="badge bg-label-success me-4 rounded p-1_5">
              <i class="ti ti-browser-check ti-md"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0"><?= $row->jenis_kp?></h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0 text-danger"><?= $row->jumlah?></h6>
              </div>
            </div>
          </li>
          <?php } ?>
        </ul>
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="card h-100">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="card-title m-0 me-2">Satuan Kerja Pengusul</h5>
        </div>
        <div class="card-body">
          <ul class="p-0 m-0">
            <?php foreach ($kpsatker as $row) {?>
          <li class="d-flex mb-3 pb-1 align-items-center">
            <div class="badge bg-label-primary me-4 rounded p-1_5">
              <i class="ti ti-wallet ti-md"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0"><?= $row->satker?></h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0 text-danger"><?= $row->jumlah?></h6>
              </div>
            </div>
          </li>
          <?php } ?>
        </ul>
        </div>
      </div>
    </div>
    <div class="col-6">

    </div>
  </div>
