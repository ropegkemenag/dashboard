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
      
      $data['djk'] = $simpeg->dashboard_jk(0);
      $data['djab'] = $simpeg->dashboard_jab(0);
      $data['dagama'] = $simpeg->dashboard_agama(0);
    }
}
