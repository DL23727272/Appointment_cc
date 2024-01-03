<?php
include "myConnection.php";

if (isset($_POST['fname']) && isset($_POST['dateIn']) && isset($_POST['timeIn']) && isset($_POST['serviceType'])) {
    $fname = $_POST['fname'];
    $CheckInDate = $_POST["dateIn"];
    $CheckInTime = $_POST["timeIn"];
    $serviceType = $_POST["serviceType"]; 

    
    $checkQuery = "SELECT * FROM allen WHERE checkin_date = '$CheckInDate' AND checkin_time = '$CheckInTime'";
    $result = mysqli_query($connect, $checkQuery);

    if (mysqli_num_rows($result) > 0) {
        $response = [
            'status' => 'error',
            'message' => 'Time is already taken'
        ];
    } else {
        $query = "INSERT INTO allen (checkin_date, checkin_time, name, service_type) 
                    VALUES ('$CheckInDate', '$CheckInTime', '$fname', '$serviceType')";
   
        if (mysqli_query($connect, $query)) {
            $response = [
                'status' => 'success',
                'message' => 'Booked to Allen successfully'
            ];
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Failed to add record: ' . mysqli_error($connect)
            ];
        }
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
