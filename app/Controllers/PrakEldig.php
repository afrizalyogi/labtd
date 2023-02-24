<?php

namespace App\Controllers;
use App\Models\PrakEldigModel;

class PrakEldig extends BaseController
{

    //Inheritance
    protected $PrakEldigModel;
    public function __construct(){
        $this->PrakEldigModel = new PrakEldigModel();
    }

    //Method Read
    public function index()
    {
        $curpage = $this->request->getVar('page_eldig') ? $this->request->getVar('page_eldig') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword){
            $prak_eldig = $this->PrakEldigModel->search($keyword);
        }
        else{
            $prak_eldig = $this->PrakEldigModel;
        }
        
        $data = [
            'prak_eldig' => $prak_eldig->paginate(10, 'prak_eldig'),
            'pager' => $this->PrakEldigModel->pager,
            'curpage' => $curpage
        ];
        return view('main/prakeldig', $data);
    }

    //Method Save
    public function save()
    {
        $this->PrakEldigModel->save([
            'npm' => $this->request->getVar('npm'),
            'nama' => $this->request->getVar('nama')
        ]);

        session()->setFlashdata('Pesan', 'Data berhasil ditambahkan..');
        return redirect()->to('/prakeldig');
    }
}
