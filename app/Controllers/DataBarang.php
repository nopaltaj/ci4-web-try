<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;
use App\Models\SuratModel;
use CodeIgniter\HTTP\ResponseInterface;

class DataBarang extends BaseController
{
    public function index()
    {
        $barang_model = new BarangModel();
        $data['barang'] = $barang_model->findAll();
        $surat_model = new SuratModel();
        $data['surat' ] = $surat_model->findAll();
        return view('data-barang', $data);
    }
    
    public function edit($id = false)
    {
        $barang_model = new BarangModel();
        $data_barang = $barang_model->find($id);
        return view('databarang-edit', ['data_barang' => $data_barang]);
    }

    public function editProses()
    {
        $barang_model = new BarangModel();
        $barang_model->update($this->request->getPost('id'), $this->request->getPost());
        return redirect()->to(base_url('data-barang'));
    }

}
