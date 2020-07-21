<?php

include 'connection.php';

if($_POST){

    // Data
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $response = []; // Data Response

    // Cek username didalam databse
    $userQuery = $connection->prepare("SELECT * FROM akun where username = ?");
    $userQuery->execute(array($username));
    $query = $userQuery->fetch();

    if($userQuery->rowCount() == 0) {
        $response['status'] = false;
        $response['message'] = "Username Tidak Terdaftar";
    }
    else {

        // Ambil password di db
        $passwordDB = $query['password'];
        // strcmp = membandingkan
        if(strcmp(($password),$passwordDB) === 0){
            $response['status'] = true;
            $response['message'] = "Login Berhasil";
            $response['data'] = [
                'user_id' => $query['id_user'],
                'username' => $query['username'],
                'name' => $query['nama_lengkap'],
                'email' => $query['email']
            ];
        } else {
            $response['status'] = false;
            $response['message'] = "Password anda salah";
        }
    }

    // Jadikan data JSON
    $json = json_encode($response, JSON_PRETTY_PRINT);

    // Print
    echo $json;

}