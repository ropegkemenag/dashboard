<?php

namespace App\Controllers;
use App\Models\CrudModel;
use App\Models\SimpegModel;

class Home extends BaseController
{
    public function index(): string
    {
      $model = new CrudModel;
      $simpeg = new SimpegModel;

      $data['cpnssatker'] = $model->getSatker();

      $data['djk'] = $simpeg->dashboard_jk(0);
      $data['djab'] = $simpeg->dashboard_jab(0);
      $data['dagama'] = $simpeg->dashboard_agama(0);

      $data['kpjumlah'] = $model->getKp();
      $data['kpstatus'] = $model->getKpStatus();
      $data['kpjenis'] = $model->getKpJenis();
      $data['kpsatker'] = $model->getKpSatker();

      return view('index', $data);
    }
}
