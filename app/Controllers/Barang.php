<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;
use App\Models\SuratModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Validation\StrictRules\Rules;

class Barang extends BaseController
{
    public function index()
    {
        $barang_model = new BarangModel();
        $data['barang'] = $barang_model->findAll();
        $surat_model = new SuratModel();
        $data['surat'] = $surat_model->findAll();
        return view('dashboard', $data);
    }

    public function create()
    {
        return view('barang-create');
    }

    public function CreateBarangProses()
    {
        $barang_model = new BarangModel();
        $barang_model->insert($this->request->getPost());

        return redirect()->to(base_url('dashboard'));
    }

    public function edit($id = false)
    {
        $barang_model = new BarangModel();
        $data_barang = $barang_model->find($id);
        return view('barang-edit', ['data_barang' => $data_barang]);
    }

    public function editProses()
    {
        $barang_model = new BarangModel();
        $barang_model->update($this->request->getPost('id'), $this->request->getPost());
        return redirect()->to(base_url('dashboard'));
    }

    public function delete($id = false)
    {
        $barang_model = new BarangModel();
        $barang_model->delete($id);
        return redirect()->to(base_url('dashboard'));
    }
}
