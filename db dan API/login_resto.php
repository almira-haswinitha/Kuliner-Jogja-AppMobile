<?php

include 'connection.php';

if($_POST){

    // Data
    $namaresto = $_POST['namaresto'] ?? '';
    $passwordresto = $_POST['passwordresto'] ?? '';

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

        // Ambil password di db
        $passwordDB = $query['passwordresto'];
        // strcmp = membandingkan
        if(strcmp(($passwordresto),$passwordDB) === 0){
            $response['status'] = true;
            $response['message'] = "Login Berhasil";
            $response['data'] = [
                'namaresto' => $query['namaresto'],
                'alamat' => $query['alamat'],
                'hari_operasional' => $query['hari_operasional'],
                'waktu_buka' => $query['waktu_buka'],
                'waktu_tutup' => $query['waktu_tutup'],
                'deskripsi' => $query['deskripsi'],
                'gambar' => $query['gambar'],
                'id' => $query['id']
            ];
        } else {
            $response['status'] = false;
            $response['message'] = "Password resto salah";
        }
    }

    // Jadikan data JSON
    $json = json_encode($response, JSON_PRETTY_PRINT);

    // Print
    echo $json;

}