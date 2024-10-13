<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SimpegModel;

class Simpeg extends BaseController
{
    public function index()
    {
      $simpeg = new SimpegModel;

      $djk = $simpeg->dashboard_jk(0);
      $djab = $simpeg->dashboard_jab(0);
      $dagama = $simpeg->dashboard_agama(0);
      $djabatan = $simpeg->dashboard_jab(0);
      $dstatus = $simpeg->dashboard_status(0);

      $data = [
        'jf' => $djk[0],
        'jm' => $djk[1],
        'status' => $dstatus,
        'agama' => $dagama,
        'jabatan' => $djabatan,
      ];
      // print_r($data);
      return $this->response->setJSON($data);
    }

    public function jumlahpegawai()
    {
      $simpeg = new SimpegModel;

      $data = [
        'jumlah' => $da
      ];

      return $this->response->setJSON($response->getBody());
    }
}
