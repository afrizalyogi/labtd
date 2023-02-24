<?php

namespace App\Models;

use CodeIgniter\Model;

class PrakEldigModel extends Model
{
    //Inisialisasi
    protected $table = 'prak_eldig';
    protected $allowedFields = ['npm','nama'];

    //Query Read
    public function getData()
    {
        $query = $this->table('prak_eldig')->query('select * from prak_eldig');
        return $query->getResult();
    }

    //Query Reset
    public function getReset()
    {
        $query = $this->table('prak_eldig')->query('set @num := 0;');
        $query = $this->table('prak_eldig')->query('update prak_eldig set id = @num := (@num+1);');
        $query = $this->table('prak_eldig')->query('alter table prak_eldig AUTO_INCREMENT =1;');
        return $query->getResult();
    }
    
    //Query Main Search
    public function search($keyword){
        $query = $this->table('prak_eldig')->like('nama', $keyword);
        return $query;
    }

    //Query Admin Search
    public function searchAdmin($key)
    {
        $query = $this->table('prak_eldig')->like('nama', $key);
        return $query;
    }
}

?>