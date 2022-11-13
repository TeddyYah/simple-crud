<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('mahasiswa/index', $data);
		$this->load->view('templates/footer');
	}

    public function tambah()
	{
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('mahasiswa/tambah', $data);
		$this->load->view('templates/footer');
	}

    public function detailData($id)
    {
        $data['title'] = 'Detail Data Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('mahasiswa/detail', $data);
		$this->load->view('templates/footer');
    }

    public function simpanData()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'nim' => $this->input->post('nim', true),
            'kelas' => $this->input->post('kelas', true),
            'tugas' => $this->input->post('tugas', true)
        ];

        $this->db->insert('tbl_mahasiswa', $data);
        $this->session->set_flashdata('msg', 
        '<div class="alert alert-success">Data berhasil ditambahkan</div>');
        return redirect(base_url('mahasiswa'));
    }

    public function editData($id)
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('tugas', 'Tugas', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('mahasiswa/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->ubahDataMahasiswa();
            $this->session->set_flashdata('msg', 
        '<div class="alert alert-success">Data berhasil diubah</div>');
            redirect('mahasiswa');
        }
    }


    public function hapusData($id)
    {
        $this->Mahasiswa_model->getHapusMahasiswa($id);
        $this->session->set_flashdata('msg', 
        '<div class="alert alert-danger">Data berhasil dihapus</div>');
        return redirect(base_url('mahasiswa/index'));

    }
}