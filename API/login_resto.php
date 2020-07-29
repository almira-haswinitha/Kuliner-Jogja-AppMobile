<?php

include 'connection.php';

if($_POST){

    // Data
    $namaresto = $_POST['namaresto'] ?? '';
    $id_resto = $_POST['id_resto'] ?? '';

    $response = []; // Data Response

    // Cek username didalam databse
    $userQuery = $connection->prepare("SELECT * FROM kuliner where namaresto = ?");
    $userQuery->execute(array($namaresto));
    $query = $userQuery->fetch();

    if($userQuery->rowCount() == 0) {
        $response['status'] = false;
        $response['message'] = "Resto Tidak Terdaftar";
    }
    else {

        // Ambil kategori_ di db
        $kategori_DB = $query['id_resto'];
        // strcmp = membandingkan
        if(strcmp(($id_resto),$kategori_DB) === 0){
            $response['status'] = true;
            $response['message'] = "Login Berhasil";
            $response['data'] = [
                'id_resto' => $query['id_resto'],
                'namaresto' => $query['namaresto'],
                'alamat' => $query['alamat'],
                'hari_operasional' => $query['hari_operasional'],
                'waktu_buka' => $query['waktu_buka'],
                'waktu_tutup' => $query['waktu_tutup'],
                'deskripsi' => $query['deskripsi'],
                'gambar' => $query['gambar']
            ];
        } else {
            $response['status'] = false;
            $response['message'] = "id resto salah";
        }
    }

    // Jadikan data JSON
    $json = json_encode($response, JSON_PRETTY_PRINT);

    // Print
    echo $json;

}