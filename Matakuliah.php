<?php
class Matakuliah extends CI_Controller 
{ 
    public function index() 
    { 
        $this->load->view('view_validation')
    }
    Public Function cetak()
    {
        $this->form_validation->set_rules('kode','kode Matakuliah','required|min_leght[3]',
        ['required'-> 'kode Matakuliah harus Diisi',
        'min_leght'-> 'kode terlalu pendek'
        ]);

    $this->form_validation->set_rules('nama','kode Matakuliah','required|min_leght[3]', [
        'required' => 'nama Matakuliah harus Diisi',
        'min_leght' => 'nama terlalu pendek'
        ]);
    if (this->form_validation->run() != TRUE){
        this->load->view('view-form-matakuliah');
    }else {
        $data = [
            'kode' -> $this->input->post('kode'),
            'nama' -> $this->input->post('nama'),
            'sks' -> $this->input->post('sks')
        ];

        $this->load->view('view-data-matakuliah', $data);
        }
    }



}