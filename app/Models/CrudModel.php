<?php

namespace App\Models;

use CodeIgniter\Model;

class CrudModel extends Model
{

      protected $db;

      public function __construct()
      {
        $this->db = \Config\Database::connect('default', false);

      }

      public function getRow($table,$where)
      {
        $builder = $this->db->table($table);
        $query = $builder->getWhere($where);

        return $query->getRow();
      }

      public function getResult($table,$where=false)
      {
        $builder = $this->db->table($table);

        if($where){
          $query = $builder->getWhere($where);
        }else{
          $query = $builder->get();
        }

        return $query->getResult();
      }

      public function getSatker()
      {
        $query = $this->db->query("SELECT lok_formasi_nm, SUM(jml_submit) AS jumlah FROM sscasn_statistik_satker GROUP BY lok_formasi_nm ORDER BY jumlah DESC")->getResult();
        return $query;
      }

      public function getKp()
      {
        $query = $this->db->query("SELECT COUNT(id) AS jumlah FROM siasn_kp")->getRow();
        return $query;
      }

      public function getKpStatus()
      {
        $query = $this->db->query("SELECT statusUsulanNama, COUNT(id) AS jumlah FROM siasn_kp GROUP BY statusUsulanNama ORDER BY jumlah DESC")->getResult();
        return $query;
      }

      public function getKpJenis()
      {
        $query = $this->db->query("SELECT jenis_kp, COUNT(id) AS jumlah FROM siasn_kp GROUP BY jenis_kp ORDER BY jumlah DESC")->getResult();
        return $query;
      }

      public function getKpSatker()
      {
        $query = $this->db->query("SELECT satker,COUNT(id) AS jumlah FROM
                                  (SELECT
                                  	siasn_kp.*,
                                  	b.SATKER_4 AS satker
                                  FROM
                                  	dbo.siasn_kp
                                  	INNER JOIN
                                  	simpeg_2024..TEMP_PEGAWAI b
                                  	ON
                                  		siasn_kp.nipBaru = b.NIP_BARU) siasn
                                  GROUP BY satker ORDER BY jumlah DESC")->getResult();
        return $query;
      }

      public function getAccess($kodesatker)
      {
        $query = $this->db->query("SELECT
                                    UM_USER.ID,
                                    UM_USER.KODE_SATKER,
                                    UM_USER.NIP,
                                    UM_USER.ROLE,
                                    UM_USER.APP_ID,
                                    UM_APP.APP_NAME,
                                    UM_ROLES.REMARK,
                                    TEMP_PEGAWAI.NAMA_LENGKAP,
                                    TEMP_PEGAWAI.NO_HP
                                  FROM
                                    dbo.UM_USER
                                    INNER JOIN
                                    dbo.UM_APP
                                    ON
                                      UM_USER.APP_ID = UM_APP.ID
                                    INNER JOIN
                                      dbo.UM_ROLES
                                    ON
                                      UM_USER.ROLE = UM_ROLES.ROLE AND UM_USER.APP_ID = UM_ROLES.APP_ID
                                    INNER JOIN
                                    dbo.TEMP_PEGAWAI
                                    ON
                                      UM_USER.NIP = TEMP_PEGAWAI.NIP_BARU
                                  WHERE
                                    KODE_SATKER LIKE '$kodesatker%' AND UM_USER.APP_ID !='2'")->getResult();
        return $query;
      }

      public function getAccessAll()
      {
        $query = $this->db->query("SELECT
                                    UM_USER.ID,
                                    UM_USER.KODE_SATKER,
                                    UM_USER.NIP,
                                    UM_USER.ROLE,
                                    UM_USER.APP_ID,
                                    UM_APP.APP_NAME,
                                    UM_ROLES.REMARK,
                                    TEMP_PEGAWAI.NAMA_LENGKAP,
                                    TEMP_PEGAWAI.SATKER_3,
                                    TEMP_PEGAWAI.NO_HP
                                  FROM
                                    dbo.UM_USER
                                    INNER JOIN
                                    dbo.UM_APP
                                    ON
                                      UM_USER.APP_ID = UM_APP.ID
                                    INNER JOIN
                                      dbo.UM_ROLES
                                    ON
                                      UM_USER.ROLE = UM_ROLES.ROLE AND UM_USER.APP_ID = UM_ROLES.APP_ID
                                    INNER JOIN
                                    dbo.TEMP_PEGAWAI
                                    ON
                                      UM_USER.NIP = TEMP_PEGAWAI.NIP_BARU
                                  ")->getResult();
        return $query;
      }

      public function getSatkerKelola($kelola)
      {
        $query = $this->db->query("SELECT * FROM TM_SATUAN_KERJA WHERE KODE_SATUAN_KERJA='$kelola' OR KODE_ATASAN='$kelola'")->getResult();
        return $query;
      }
}
