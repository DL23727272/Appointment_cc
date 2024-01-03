<?php
include "../Process/myConnection.php";

$response = array();

if (isset($_POST["id"]) && isset($_POST["barber_name"])) {
    $id = $_POST["id"];
    $barberName = $_POST["barber_name"];
    error_log("Received ID: " . $id);
    error_log("Received Barber Name: " . $barberName);

    switch ($barberName) {
        case "allen":
            $table = "allen";
            break;
        case "arwen":
            $table = "arwen";
            break;
        case "ramil":
            $table = "ramil";
            break;
        default:
            $response['success'] = false;
            $response['message'] = "Invalid barber name";
            echo json_encode($response);
            exit;
    }

    
    $query = "UPDATE $table SET status = 'done' WHERE id = $id";
    error_log("SQL Query: " . $query);

    if (mysqli_query($connect, $query)) {
        $response['success'] = true;
        $response['message'] = "Appointment marked as done successfully";
        $response['appointment_id'] = $id; 
    } else {
        $response['success'] = false;
        $response['message'] = "Failed to mark appointment as done: " . mysqli_error($connect);
        error_log("Error: " . mysqli_error($connect));
    }
} else {
    $response['success'] = false;
    $response['message'] = "Missing or invalid parameters";
}

// Send JSON response
echo json_encode($response);

?>
