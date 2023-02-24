<?php

namespace App\Controllers;
use App\Models\PrakEmbeddedModel;

class PrakEmbedded extends BaseController
{

    //Inheritance
    protected $PrakEmbeddedModel;
    public function __construct(){
        $this->PrakEmbeddedModel = new PrakEmbeddedModel();
    }

    //Method Read
    public function index()
    {
        $curpage = $this->request->getVar('page_prak_embedded') ? $this->request->getVar('page_prak_embedded') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword){
            $prak_embedded = $this->PrakEmbeddedModel->search($keyword);
        }
        else{
            $prak_embedded = $this->PrakEmbeddedModel;
        }
        
        $data = [
            'prak_embedded' => $prak_embedded->paginate(10, 'prak_embedded'),
            'pager' => $this->PrakEmbeddedModel->pager,
            'curpage' => $curpage
        ];
        return view('main/prakembedded', $data);
    }

    //Method Save
    public function save()
    {
        $this->PrakEmbeddedModel->save([
            'npm' => $this->request->getVar('npm'),
            'nama' => $this->request->getVar('nama')
        ]);

        session()->setFlashdata('Pesan', 'Data berhasil ditambahkan..');
        return redirect()->to('/prakembedded');
    }
}
