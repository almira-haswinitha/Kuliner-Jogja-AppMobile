<?php
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Datamenu extends REST_Controller
{
    public function __construct()
    { 
        parent::__construct();
        $this->load->model('Menu_model','menu');
    }

    public function index_get()
    {
        $id_menu = $this->get('id_menu'); 
        if($id_menu === null){
        $menu = $this->menu->getdatamenu();
        } else {
            $menu = $this->menu->getdatamenu($id_menu);
        }
        
        if($menu){
            $this->response([
                'status' => TRUE,
                'data' => $menu
            ], REST_Controller::HTTP_NOT_FOUND);
        } else{
            $this->response([
                'status' => FALSE,
                'message' => 'id menu tidak ditemukan'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete()
    {
        $id_menu = $this->delete('id_menu');

        if($id_menu === null){
            $this->response([
                'status' => FALSE,
                'message' => 'pilih id terlebih dulu!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else{
            if($this->menu->deletedatamenu($id_menu) > 0){
                //ok
                $this->response([
                    'status' => TRUE,
                    'id_menu' => $id_menu,
                    'message' => 'menu telah dihapus'
                ], REST_Controller::HTTP_OK);
            } else {
                //id not found
                $this->response([
                    'status' => FALSE,
                    'message' => 'id menu tidak ditemukan!'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post()
    {
        $data = [
            'kategori' => $this->post('kategori'),
            'nama_menu' => $this->post('nama_menu'),
            'harga' => $this->post('harga'),
            'id_resto' => $this->post('id_resto')
        ];

        if( $this->menu->createddatamenu($data) > 0){
            $this->response([
                'status' => TRUE,
                'message' => 'menu baru telah ditambahkan.'
            ], REST_Controller::HTTP_CREATED);
        } else {
            //id not found
            $this->response([
                'status' => FALSE,
                'message' => 'gagal menambahkan menu.'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put()
    {
        $id_menu = $this->put('id_menu');
        $data = [
            'kategori' => $this->post('kategori'),
            'nama_menu' => $this->post('nama_menu'),
            'harga' => $this->post('harga'),
            'id_resto' => $this->post('id_resto')
        ];

        if( $this->menu->updatedatamenu($data, $id_menu) > 0){
            $this->response([
                'status' => TRUE,
                'message' => 'data menu telah di update.'
            ], REST_Controller::HTTP_OK);
        } else {
            //id not found
            $this->response([
                'status' => FALSE,
                'message' => 'gagal update menu.'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}

?>