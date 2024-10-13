<div class="row">
  <h5 class="mb-2">Statistik Pelamar<span class="h4"> CPNS SSCASN 2024</span></h5>
  <div class="col-lg-3 col-sm-6">
    <div class="card card-border-shadow-primary h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2">
          <div class="avatar me-4">
            <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-truck ti-28px"></i></span>
            </div>
            <h4 class="mb-0" id="cpns_jml_pendaftar">0</h4>
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
              <h4 class="mb-0" id="cpns_jml_submit">0</h4>
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
                <h4 class="mb-0" id="cpns_jml_ms">0</h4>
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
                <h4 class="mb-0" id="cpns_jml_tms">0</h4>
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
                <h4 class="mb-0" id="cpns_jml_blm_verif">0</h4>
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
