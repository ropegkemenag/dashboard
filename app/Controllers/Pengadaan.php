<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Pengadaan extends BaseController
{
    public function index()
    {
        //
    }

    public function cpns()
    {
      $client = service('curlrequest');

      $response = $client->request('GET', 'http://localhost:8081/casn/dashboard/cpns', [
          'headers' => [
              'Accept'        => 'application/json',
              'Content-Type' => 'application/json',
          ],
          'verify' => false
      ]);

      return $this->response->setJSON($response->getBody());
    }

    public function pppk()
    {
      $client = service('curlrequest');

      $response = $client->request('GET', 'http://localhost:8081/casn/dashboard/pppk', [
          'headers' => [
              'Accept'        => 'application/json',
              'Content-Type' => 'application/json',
          ],
          'verify' => false
      ]);

      return $this->response->setJSON($response->getBody());
    }
}
