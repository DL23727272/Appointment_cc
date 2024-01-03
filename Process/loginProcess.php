<?php
session_start(); 

include "myConnection.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $name = $_POST["username"];
    $password = $_POST["password"];
    $passwordEncrypt = md5($password);


    $query = "SELECT * FROM admin WHERE name = '$name' AND password = '$passwordEncrypt'";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) == 1) {
     
        $_SESSION['admin_logged_in'] = true;
    
       
        echo "Redirecting to admin/admin.php...";
    
       
        mysqli_close($connect);
        header('Location: ../admin/admin.php');
        exit; 
    } else {
        $response = [
            'status' => 'error',
            'message' => 'Invalid username or password'
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
