<?php

namespace App\Models;

use CodeIgniter\Model;

class PrakEmbeddedModel extends Model
{
    //Inisialisasi
    protected $table = 'prak_embedded';
    protected $allowedFields = ['npm','nama'];

    //Query Read
    public function getData()
    {
        $query = $this->table('prak_embedded')->query('select * from prak_embedded');
        return $query->getResult();
    }

    //Query Reset
    public function getReset()
    {
        $query = $this->table('prak_embedded')->query('set @num := 0;');
        $query = $this->table('prak_embedded')->query('update prak_embedded set id = @num := (@num+1);');
        $query = $this->table('prak_embedded')->query('alter table prak_embedded AUTO_INCREMENT =1;');
        return $query->getResult();
    }
    
    //Query Main Search
    public function search($keyword){
        $query = $this->table('prak_embedded')->like('nama', $keyword);
        return $query;
    }

    //Query Admin Search
    public function searchAdmin($key)
    {
        $query = $this->table('prak_embedded')->like('nama', $key);
        return $query;
    }
}

?>