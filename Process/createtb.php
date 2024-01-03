<?php
    
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "paesano";
  

    $connect = mysqli_connect($hostname, $username, $password, $database);
    
    if($connect){
        echo "Connection to MySQL successful<br>";
    }
    else{
        echo "Connection to MySQL failed". mysqli_connect_error();
    }

    $query = "CREATE TABLE ramil (
        id INT PRIMARY KEY AUTO_INCREMENT,
        checkin_date DATE NOT NULL,
        checkin_time TIME NOT NULL,
        name VARCHAR(255) NOT NULL,
        service_type VARCHAR(255) NOT NULL
    )";

    if(mysqli_query($connect, $query)){
        echo "Studemt table created successfully";
    }
    else{
        echo "Student table failed to create <br>". mysqli_error($connect);
    }
    mysqli_close($connect);

?>