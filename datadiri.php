<?php
class form extends CI_Controller
{

    public function index()
 
    {
    
        $this->load->view('form');
    
    }
    public function cetak()
    {
        $data = [
            'nama siswa' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas')
            'tanggal lahir' => $this->input->post('tanggal_lahir')
            'tempat lahir' => $this->input->post('tempat_lahir')
            'alamat' => $this->input->post('alamat')
            'jenis kelamin' => $this->input->post('jenis_kelamin')
            'agama' => $this->input->post('agama')

         ];

        $this->load->view('form', $data);
    }
}
