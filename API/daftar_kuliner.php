<?php

include 'connection.php';

if($_POST){

    // POST DATA
    $namaresto = filter_input(INPUT_POST, 'namaresto', FILTER_SANITIZE_STRING);
    $passwordresto = filter_input(INPUT_POST, 'passwordresto', FILTER_SANITIZE_STRING);
    $alamat = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING);
    $hari_operasional = filter_input(INPUT_POST, 'hari_operasional', FILTER_SANITIZE_STRING);
    $waktu_buka = filter_input(INPUT_POST, 'waktu_buka', FILTER_SANITIZE_STRING);
    $waktu_tutup = filter_input(INPUT_POST, 'waktu_tutup', FILTER_SANITIZE_STRING);
    $deskripsi = filter_input(INPUT_POST, 'deskripsi', FILTER_SANITIZE_STRING);
    $gambar = filter_input(INPUT_POST, 'gambar', FILTER_SANITIZE_STRING);
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

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
        $insertAccount = 'INSERT INTO kuliner (namaresto, passwordresto, alamat,hari_operasional,waktu_buka,waktu_tutup,deskripsi,gambar,id) values (:namaresto, :passwordresto, :alamat, :hari_operasional, :waktu_buka, :waktu_tutup, :deskripsi, :gambar, :id)';
        $statement = $connection->prepare($insertAccount);

        try{
            //Eksekusi statement db
            $statement->execute([
                ':namaresto' => $namaresto,
                ':passwordresto' => $passwordresto,
                ':alamat' => $alamat,
                ':hari_operasional' => $hari_operasional,
                ':waktu_buka' => $waktu_buka,
                ':waktu_tutup' => $waktu_tutup,
                ':deskripsi' => $deskripsi,
                ':gambar' => $gambar,
                ':id' => $id
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