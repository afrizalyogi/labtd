<?php

namespace App\Models;

use CodeIgniter\Model;

class PrakTDModel extends Model
{
    //Inisialisasi
    protected $table = 'prak_td';
    protected $allowedFields = ['npm','nama'];

    //Query Read
    public function getData()
    {
        $query = $this->table('prak_td')->query('select * from prak_td');
        return $query->getResult();
    }

    //Query Reset
    public function getReset()
    {
        $query = $this->table('prak_td')->query('set @num := 0;');
        $query = $this->table('prak_td')->query('update prak_td set id = @num := (@num+1);');
        $query = $this->table('prak_td')->query('alter table prak_td AUTO_INCREMENT =1;');
        return $query->getResult();
    }
    
    //Query Main Search
    public function search($keyword){
        $query = $this->table('prak_td')->like('nama', $keyword);
        return $query;
    }

    //Query Admin Search
    public function searchAdmin($key)
    {
        $query = $this->table('prak_td')->like('nama', $key);
        return $query;
    }
}

?>