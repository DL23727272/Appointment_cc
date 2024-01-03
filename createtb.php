<?php
    
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "web_db";
    $email = "";

    $connect = mysqli_connect($hostname, $email, $username, $password, $database);
    
    if($connect){
        echo "Connection to MySQL successful<br>";
    }
    else{
        echo "Connection to MySQL failed". mysqli_connect_error();
    }

    $query = "CREATE TABLE hotel(
        id INT PRIMARY KEY AUTO_INCREMENT,
        email VARCHAR(100),
        name VARCHAR(30) NOT NULL,
        password VARCHAR(100)
    )";

    if(mysqli_query($connect, $query)){
        echo "Studemt table created successfully";
    }
    else{
        echo "Student table failed to create <br>". mysqli_error($connect);
    }
    mysqli_close($connect);

?>