<?php

include 'connection.php';

if($_POST){

    // POST DATA
    $namaresto = filter_input(INPUT_POST, 'namaresto', FILTER_SANITIZE_STRING);
    $kategori_resto = filter_input(INPUT_POST, 'kategori_resto', FILTER_SANITIZE_STRING);
    $alamat = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING);
    $hari_operasional = filter_input(INPUT_POST, 'hari_operasional', FILTER_SANITIZE_STRING);
    $waktu_buka = filter_input(INPUT_POST, 'waktu_buka', FILTER_SANITIZE_STRING);
    $waktu_tutup = filter_input(INPUT_POST, 'waktu_tutup', FILTER_SANITIZE_STRING);
    $deskripsi = filter_input(INPUT_POST, 'deskripsi', FILTER_SANITIZE_STRING);
    $gambar = filter_input(INPUT_POST, 'gambar', FILTER_SANITIZE_STRING);

    $response = [];

    // Cek namaresto didalam databse
    $userQuery = $connection->prepare("SELECT * FROM kuliner where namaresto = ?");
    $userQuery->execute(array($namaresto));

    // Cek username apakah ada atau tidak
    if($userQuery->rowCount() != 0) {
        // Beri Response
        $response['status']= false;
        $response['message']='Toko sudah digunakan';
    } else {
        $insertAccount = 'INSERT INTO kuliner (namaresto, kategori_resto, alamat,hari_operasional,waktu_buka,waktu_tutup,deskripsi,gambar) values (:namaresto, :kategori_resto, :alamat, :hari_operasional, :waktu_buka, :waktu_tutup, :deskripsi, :gambar)';
        $statement = $connection->prepare($insertAccount);

        try{
            //Eksekusi statement db
            $statement->execute([
                ':namaresto' => $namaresto,
                ':kategori_resto' => $kategori_resto,
                ':alamat' => $alamat,
                ':hari_operasional' => $hari_operasional,
                ':waktu_buka' => $waktu_buka,
                ':waktu_tutup' => $waktu_tutup,
                ':deskripsi' => $deskripsi,
                ':gambar' => $gambar
            ]);

            //Beri response
            $response['status']= true;
            $response['message']='Toko berhasil didaftarkan';
            $response['data'] = [
                'namaresto' => $namaresto,
                'deskripsi' => $deskripsi
            ];
        } catch (Exception $e){
            die($e->getMessage());
        }

    }
    
    //Jadikan data JSON
    $json = json_encode($response, JSON_PRETTY_PRINT);

    //Print JSON
    echo $json;
}