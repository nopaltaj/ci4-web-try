<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;
use App\Models\SuratModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Validation\StrictRules\Rules;

class Surat extends BaseController
{
    public function index()
    {
        $surat_model = new SuratModel();
        $data['surat'] = $surat_model->findAll();
        return view('dashboard', $data);
    }

    public function create()
    {
        return view('surat-create');
    }

    public function CreateSuratProses()
    {
        $surat_model = new SuratModel();
        $surat_model->insert($this->request->getPost());

        return redirect()->to(base_url('dashboard'));
    }

    public function edit($id = false)
    {
        $surat_model = new SuratModel();
        $data_surat = $surat_model->find($id);
        return view('surat-edit', ['data_surat' => $data_surat]);
    }

    public function editProses()
    {
        $surat_model = new SuratModel();
        $surat_model->update($this->request->getPost('id'), $this->request->getPost());
        return redirect()->to(base_url('dashboard'));
    }

    public function delete($id = false)
    {
        $surat_model = new SuratModel();
        $surat_model->delete($id);
        return redirect()->to(base_url('dashboard'));
    }
}
