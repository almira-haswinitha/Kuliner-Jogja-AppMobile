<?php

    class menu extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Menu_model');
            $this->load->library('form_validation');
        }
        
        public function index()
        {
            $data['judul'] = 'Daftar Data menu';
            $data['menu'] = $this->Menu_model->getAllmenu();
            if($this->input->post('keyword')){
                $data['menu'] = $this->Menu_model->cariDatamenu();
            }
            $this->load->view('templates/header', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        }

        public function tambahmenu()
        {
            $data['judul'] = 'Form Tambah Data menu';

            $this->form_validation->set_rules('kategori','kategori', 'required');
            $this->form_validation->set_rules('nama_menu','nama_menu', 'required|numeric');
            $this->form_validation->set_rules('harga','harga', 'required|numeric');
            $this->form_validation->set_rules('id_resto','Id_resto', 'required|numeric');

            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('menu/tambahmenu');
                $this->load->view('templates/footer');
            }
            else{
                $this->Menu_model->tambahDatamenu();
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('menu');
            }
        }

        public function hapusmenu($id)
        {
            $this->Menu_model->hapusDatamenu($id);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('menu');
        }

        public function detailmenu($id)
        {
            $data['judul'] = 'Detail Data menu';
            $data['menu']=$this->Menu_model->getmenuById($id);
            $this->load->view('templates/header', $data);
            $this->load->view('menu/detailmenu', $data);
            $this->load->view('templates/footer');     
        }

        public function ubahmenu($id)
        {
            $data['judul'] = 'Form Update Data menu';
            $data['menu'] = $this->Menu_model->getmenuById($id);

            $this->form_validation->set_rules('kategori','kategori', 'required');
            $this->form_validation->set_rules('nama_menu','nama_menu', 'required|numeric');
            $this->form_validation->set_rules('harga','harga', 'required|numeric');
            $this->form_validation->set_rules('id_resto','Id_resto', 'required|numeric');

            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('menu/ubahmenu', $data);
                $this->load->view('templates/footer');
            }
            else{
                $this->Menu_model->ubahDatamenu();
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('menu');
            }
        }
    }
?>