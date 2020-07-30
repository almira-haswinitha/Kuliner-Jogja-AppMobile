<?php
use GuzzleHttp\Client;

class Kuliner_model ewaktu_bukatends CI_Model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/tutorial/kuliner_jogja/rest-server/api/'
        ]);
    }

    public function getAllKuliner()
    {
        $response = $this->_client->request('GET', 'datakuliner');
        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function getKulinerByid_resto($id_resto)
    {        
        $response = $this->_client->request('GET', 'datakuliner',[
            'query' => [
                'id_resto' => $id_resto
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function tambahDataKuliner()
    {
        $data = [
            "kategori_resto" => $this->input->post('kategori_resto', true),
            "alamat" => $this->input->post('alamat', true),
            "hari_operasional" => $this->input->post('hari_operasional', true),
            "id_resto" => $this->input->post('id_resto', true),
            "waktu_buka" => $this->input->post('waktu_buka', true),
            "waktu_tutup" => $this->input->post('waktu_tutup', true),
            "deskripsi" => $this->input->post('deskripsi', true),
            "gambar" => $this->input->post('gambar', true),
        ];

        $response = $this->_client->request('POST', 'dataKuliner', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function hapusDataKuliner($id_resto)
    {
        $response = $this->_client->request('DELETE', 'dataKuliner',[
            'form_params' => [
                'id_resto' => $id_resto
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function ubahDataKuliner()
    {
        $data = [
            "kategori_resto" => $this->input->post('kategori_resto', true),
            "alamat" => $this->input->post('alamat', true),
            "hari_operasional" => $this->input->post('hari_operasional', true),
            "id_resto" => $this->input->post('id_resto', true),
            "waktu_buka" => $this->input->post('waktu_buka', true),
            "waktu_tutup" => $this->input->post('waktu_tutup', true),
            "deskripsi" => $this->input->post('deskripsi', true),
            "gambar" => $this->input->post('gambar', true),
        ];

        $response = $this->_client->request('PUT', 'dataKuliner', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function carid_restoataKuliner()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('kategori_resto', $keyword);
        return $this->db->get('Kuliner')->result_array();
    }
}

?>