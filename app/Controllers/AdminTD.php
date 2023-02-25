<?php

namespace App\Controllers;
use App\Models\PrakTDModel;

class AdminTD extends BaseController
{

    //Inheritance
    protected $adminTDModel;
    public function __construct(){
        $this->adminTDModel = new PrakTDModel();
    }

    //Method Read
    public function index()
    {
        $curpage = $this->request->getVar('page_prak_td') ? $this->request->getVar('page_prak_td') : 1;

        $key = $this->request->getVar('key');
        if ($key){
            $prak_td = $this->adminTDModel->searchAdmin($key);
        }
        else{
            $prak_td = $this->adminTDModel;
        }
        
        $data = [
            'prak_td' => $prak_td->paginate(10, 'prak_td'),
            'pager' => $this->adminTDModel->pager,
            'curpage' => $curpage
        ];
        return view('main/admintd', $data);
    }

    //Method Save
    public function save()
    {
        $this->adminTDModel->save([
            'npm' => $this->request->getVar('npm'),
            'nama' => $this->request->getVar('nama')
        ]);

        session()->setFlashdata('pesanAdd', 'Data berhasil ditambahkan..');
        return redirect()->to('/admintd');
    }

    //Method Update
    public function update($id)
    {
        $this->adminTDModel->save([
            'id' => $id,
            'npm' => $this->request->getVar('npm'),
            'nama' => $this->request->getVar('nama')
        ]);

        session()->setFlashdata('pesanUpdate', 'Data berhasil dirubah..');
        return redirect()->to('/admintd');    
    }

    //Method Delete
    public function delete($id)
    {
        $this->adminTDModel->delete($id);
        $this->adminTDModel->getReset();

        session()->setFlashdata('pesanDelete', 'Data berhasil dihapus..');
        return redirect()->to('/admintd');
    }

    //Method Export Excel
    public function excel()
    {
        $data = [
            'prak_td' => $this->adminTDModel->getData()
        ];

        return view('admin/excelTD', $data);
    }

    //Method Print
    public function print()
    {
        $data = [
            'prak_td' => $this->adminTDModel->getData()
        ];

        return view('admin/printTD', $data);
    }
}
