<?php
class Siswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-siswa');
        
    }
    public function cetak()
    {   
        $this->form_validation->set_rules('nama', 'Nama Siswa','required|min_length[3]');
        $this->form_validation->set_rules('nis', 'Nis','required|min_length[3]|numeric');
        $this->form_validation->set_rules('kelas', 'Kelas','required|min_length[3]');
        $this->form_validation->set_rules('tgllahir', 'Tanggal Lahir','required|min_length[3]');
        $this->form_validation->set_rules('tempatlahir', 'Tempat Lahir','required|min_length[3]');
        $this->form_validation->set_rules('alamat', 'Alamat','required|min_length[3]');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin','required|min_length[3]');
        $this->form_validation->set_rules('agama', 'Pilih Agama','required');
            
        $this->form_validation->set_message('required', '%s Tidak boleh kosong');
        $this->form_validation->set_message('min_lenght', '%s  sekurang-kurangnya %s karakter digit');
        $this->form_validation->set_message('numeric', '%s hanya boleh diisi dengan angka');

        if ($this->form_validation->run() != true) { 
            $this->load->view('view-form-siswa');
         } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tgllahir' => $this->input->post('tgllahir'),
                'tempatlahir' => $this->input->post('tempatlahir'),
                'alamat' => $this->input->post('alamat'),
                'jk' => $this->input->post('jk'),
                'agama' => $this->input->post('agama')
        ];
        $this->load->view('view-data-siswa', $data);
        }
    }
}