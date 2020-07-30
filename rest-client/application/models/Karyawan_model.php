<?php
use GuzzleHttp\Client;

class Karyawan_model extends CI_Model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/tutorial/REST-API/rest-server-TP/api/'
        ]);
    }

    public function getAllKaryawan()
    {
        $response = $this->_client->request('GET', 'datakaryawan');
        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function getKaryawanById($id)
    {        
        $response = $this->_client->request('GET', 'datakaryawan',[
            'query' => [
                'id' => $id
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function tambahDataKaryawan()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "jk" => $this->input->post('jk', true),
            "alamat" => $this->input->post('alamat', true),
            "kontak" => $this->input->post('kontak')
        ];

        $response = $this->_client->request('POST', 'datakaryawan', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function hapusDataKaryawan($id)
    {
        $response = $this->_client->request('DELETE', 'datakaryawan',[
            'form_params' => [
                'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function ubahDataKaryawan()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "jk" => $this->input->post('jk', true),
            "alamat" => $this->input->post('alamat', true),
            "kontak" => $this->input->post('kontak'),
            "id" => $this->input->post('id', true)
        ];

        $response = $this->_client->request('PUT', 'datakaryawan', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function cariDataKaryawan()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('id', $keyword);
        return $this->db->get('karyawan')->result_array();
    }
}

?>