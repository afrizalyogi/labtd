<?php

namespace App\Controllers;
use App\Models\PrakTDModel;

class PrakTD extends BaseController
{

    //Inheritance
    protected $PrakTDModel;
    public function __construct(){
        $this->PrakTDModel = new PrakTDModel();
    }

    //Method Read
    public function index()
    {
        $curpage = $this->request->getVar('page_prak_td') ? $this->request->getVar('page_prak_td') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword){
            $prak_td = $this->PrakTDModel->search($keyword);
        }
        else{
            $prak_td = $this->PrakTDModel;
        }
        
        $data = [
            'prak_td' => $prak_td->paginate(10, 'prak_td'),
            'pager' => $this->PrakTDModel->pager,
            'curpage' => $curpage
        ];
        return view('main/praktd', $data);
    }

    //Method Save
    public function save()
    {
        $this->PrakTDModel->save([
            'npm' => $this->request->getVar('npm'),
            'nama' => $this->request->getVar('nama')
        ]);

        session()->setFlashdata('Pesan', 'Data berhasil ditambahkan..');
        return redirect()->to('/praktd');
    }
}
