<?php

namespace App\Controllers;

use App\Models\SuratModel;

class DataSurat extends BaseController
{
    public function index()
    {
        $surat_model = new SuratModel();
        $data['surat' ] = $surat_model->findAll();
        return view('data-surat', $data);
    }
    
    public function edit($id = false)
    {
        $surat_model = new suratModel();
        $data_surat = $surat_model->find($id);
        return view('datasurat-edit', ['data_surat' => $data_surat]);
    }

    public function editProses()
    {
        $surat_model = new suratModel();
        $surat_model->update($this->request->getPost('id'), $this->request->getPost());
        return redirect()->to(base_url('data-surat'));
    }

}
