<?php
include "myConnection.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $name = $_POST["username"];
    $password= $_POST["password"];
    $passwordEncrypt = md5($password);
     
    $query = "INSERT INTO admin ( name, password)
             VALUE ( '$name', '$passwordEncrypt')";
   
    if(mysqli_query($connect, $query)){
        $response = [
            'status' => 'success',
            'message' => 'Welcome admin'
        ];
    } else {
        $response = [
            'status' => 'error',
            'message' => 'Failed to add record: ' . mysqli_error($connect)
        ];
    }
    mysqli_close($connect);
} else {
    $response = [
        'status' => 'error',
        'message' => 'All fields are mandatory'
    ];
}

header('Content-Type: application/json');
echo json_encode($response);
?>