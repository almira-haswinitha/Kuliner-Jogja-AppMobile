<?php

include 'connection.php';

if($_POST){

    // POST DATA
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING); // menggunakan filter_sanitize_string agar bisa memfilter namanya
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $name = filter_input(INPUT_POST, 'nama_lengkap', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

    $response = [];

    // Cek username didalam databse
    $userQuery = $connection->prepare("SELECT * FROM akun where username = ?");
    $userQuery->execute(array($username));

    // Cek username apakah ada atau tidak
    if($userQuery->rowCount() != 0) {
        // Beri Response
        $response['status']= false;
        $response['message']='Akun sudah digunakan';
    } else {
        $insertAccount = 'INSERT INTO akun (username,password, nama_lengkap, email) values (:username, :password, :nama_lengkap, :email)';
        $statement = $connection->prepare($insertAccount);

        try{
            //Eksekusi statement db
            $statement->execute([
                ':username' => $username,
                ':password' => $password,
                ':nama_lengkap' => $name,
                ':email' => $email
            ]);

            //Beri response
            $response['status']= true;
            $response['message']='Akun berhasil didaftar';
            $response['data'] = [
                'username' => $username,
                'nama_lengkap' => $name
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