<?php
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Datakuliner extends REST_Controller
{
    public function __construct()
    { 
        parent::__construct();
        $this->load->model('Kuliner_model','kuliner');
    }

    public function index_get()
    {
        $id_resto = $this->get('id_resto'); 
        if($id_resto === null){
        $kuliner = $this->kuliner->getDatakuliner();
        } else {
            $kuliner = $this->kuliner->getDatakuliner($id_resto);
        }
        
        if($kuliner){
            $this->response([
                'status' => TRUE,
                'data' => $kuliner
            ], REST_Controller::HTTP_NOT_FOUND); 
        } else{
            $this->response([
                'status' => FALSE,
                'message' => 'data kosong'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete()
    {
        $id_resto = $this->delete('id_resto');

        if($id_resto === null){
            $this->response([
                'status' => FALSE,
                'message' => 'pilih id terlebih dulu!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else{
            if($this->kuliner->deleteDatakuliner($id_resto) > 0){
                //ok
                $this->response([
                    'status' => TRUE,
                    'id_resto' => $id_resto,
                    'message' => 'kuliner telah dihapus'
                ], REST_Controller::HTTP_OK);
            } else {
                //id not found
                $this->response([
                    'status' => FALSE,
                    'message' => 'id resto tidak ditemukan!'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post()
    {
        $data = [
            'namaresto' => $this->post('namaresto'),
            'kategori_resto' => $this->post('kategori_resto'),
            'alamat' => $this->post('alamat'),
            'hari_operasional' => $this->post('hari_operasional'),
            'waktu_buka' => $this->post('waktu_buka'),
            'waktu_tutup' => $this->post('waktu_tutup'),
            'deskripsi' => $this->post('deskripsi'),
            'gambar' => $this->post('gambar')
        ];

        if( $this->kuliner->createdDatakuliner($data) > 0){
            $this->response([
                'status' => TRUE,
                'message' => 'kuliner baru telah ditambahkan.'
            ], REST_Controller::HTTP_CREATED);
        } else {
            //id not found
            $this->response([
                'status' => FALSE,
                'message' => 'gagal menambahkan kuliner.'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put()
    {
        $id_resto = $this->put('id_resto');
        $data = [
            'namaresto' => $this->post('namaresto'),
            'kategori_resto' => $this->post('kategori_resto'),
            'alamat' => $this->post('alamat'),
            'hari_operasional' => $this->post('hari_operasional'),
            'waktu_buka' => $this->post('waktu_buka'),
            'waktu_tutup' => $this->post('waktu_tutup'),
            'deskripsi' => $this->post('deskripsi'),
            'gambar' => $this->post('gambar')
        ];

        if( $this->kuliner->updateDatakuliner($data, $id_resto) > 0){
            $this->response([
                'status' => TRUE,
                'message' => 'data kuliner telah di update.'
            ], REST_Controller::HTTP_OK);
        } else {
            //id not found
            $this->response([
                'status' => FALSE,
                'message' => 'gagal update kuliner.'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}

?>