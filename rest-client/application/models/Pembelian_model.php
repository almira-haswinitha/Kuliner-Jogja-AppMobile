<?php
use GuzzleHttp\Client;

class Pembelian_model extends CI_Model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/tutorial/REST-API/rest-server-TP/api/'
        ]);
    }

    public function getAllPembelian()
    {
        $response = $this->_client->request('GET', 'datapembelian');
        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function getPembelianById($id)
    {        
        $response = $this->_client->request('GET', 'datapembelian',[
            'query' => [
                'id' => $id
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function tambahDataPembelian()
    {
        $data = [
            "id_barang" => $this->input->post('id_barang', true),
            "tgl_transaksi" => date_format(date_create($this->input->post('tgl_pembelian')), 'Y-m-d'),
            "stok" => $this->input->post('stok', true),
            "harga" => $this->input->post('harga', true),
            "total" => $this->input->post('total')
        ];

        $response = $this->_client->request('POST', 'datapembelian', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function hapusDataPembelian($id)
    {
        $response = $this->_client->request('DELETE', 'datapembelian',[
            'form_params' => [
                'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function ubahDataPembelian()
    {
        $data = [
            "id_barang" => $this->input->post('id_barang', true),
            "tgl_transaksi" => date_format(date_create($this->input->post('tgl_pembelian')), 'Y-m-d'),
            "stok" => $this->input->post('stok', true),
            "harga" => $this->input->post('harga', true),
            "total" => $this->input->post('total', true),
            "id" => $this->input->post('id', true)
        ];

        $response = $this->_client->request('PUT', 'datapembelian', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function cariDataPembelian()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('id_barang', $keyword);
        return $this->db->get('pembelian')->result_array();
    }
}

?>