<?php
    include "../Process/myConnection.php";

    $response = array(); 

    if (isset($_GET["id"]) && isset($_GET["barber_name"])) {
        $id = $_GET["id"];
        $barberName = $_GET["barber_name"];
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

        $query = "DELETE FROM $table WHERE id = $id";
        error_log("SQL Query: " . $query); 

        if (mysqli_query($connect, $query)) {
            $response['success'] = true;
            $response['message'] = "Book deleted successfully"; 
        } else {
            $response['success'] = false;
            $response['message'] = "Record failed to delete: " . mysqli_error($connect);
            error_log("Error: " . mysqli_error($connect)); 
        }
    } else {
        $response['success'] = false;
        $response['message'] = "Missing or invalid parameters";
    }

    // Send JSON response
    echo json_encode($response);
?>
