<?php

    class Kuliner extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Kuliner_model');
            $this->load->library('form_validation');
        }
        
        public function index()
        {
            $data['judul'] = 'Daftar Data kuliner';
            $data['kuliner'] = $this->Kuliner_model->getAllkuliner();
            if($this->input->post('keyword')){
                $data['kuliner'] = $this->Kuliner_model->cariDatakuliner();
            }
            $this->load->view('templates/header', $data);
            $this->load->view('kuliner/index', $data);
            $this->load->view('templates/footer');
        }

        public function tambahkuliner()
        {
            $data['judul'] = 'Form Tambah Data kuliner';

            $this->form_validation->set_rules('kategori_resto','Kategori_resto', 'required');
            $this->form_validation->set_rules('alamat','Alamat', 'required|numeric');
            $this->form_validation->set_rules('hari_operasional','Hari_operasional', 'required|numeric');
            $this->form_validation->set_rules('waktu_buka','Waktu_buka', 'required|numeric');
            $this->form_validation->set_rules('waktu_tutup','Waktu_tutup', 'required|numeric');
            $this->form_validation->set_rules('deskripsi','Deskripsi', 'required|numeric');
            $this->form_validation->set_rules('gambar','Gambar', 'required|numeric');

            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('kuliner/tambahkuliner');
                $this->load->view('templates/footer');
            }
            else{
                $this->Kuliner_model->tambahDatakuliner();
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('kuliner');
            }
        }

        public function hapuskuliner($id)
        {
            $this->Kuliner_model->hapusDatakuliner($id);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('kuliner');
        }

        public function detailkuliner($id)
        {
            $data['judul'] = 'Detail Data kuliner';
            $data['kuliner']=$this->Kuliner_model->getkulinerById($id);
            $this->load->view('templates/header', $data);
            $this->load->view('kuliner/detailkuliner', $data);
            $this->load->view('templates/footer');     
        }

        public function ubahkuliner($id)
        {
            $data['judul'] = 'Form Update Data kuliner';
            $data['kuliner'] = $this->Kuliner_model->getkulinerById($id);

            $this->form_validation->set_rules('kategori_resto','Kategori_resto', 'required');
            $this->form_validation->set_rules('alamat','Alamat', 'required|numeric');
            $this->form_validation->set_rules('hari_operasional','Hari_operasional', 'required|numeric');
            $this->form_validation->set_rules('waktu_buka','Waktu_buka', 'required|numeric');
            $this->form_validation->set_rules('waktu_tutup','Waktu_tutup', 'required|numeric');
            $this->form_validation->set_rules('deskripsi','Deskripsi', 'required|numeric');
            $this->form_validation->set_rules('gambar','Gambar', 'required|numeric');

            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('kuliner/ubahkuliner', $data);
                $this->load->view('templates/footer');
            }
            else{
                $this->Kuliner_model->ubahDatakuliner();
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('kuliner');
            }
        }
    }
?>