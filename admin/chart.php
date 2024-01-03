<?php
include 'D:\xampp\htdocs\Appointment\Process\myConnection.php';

$barberNames = ['arwen', 'allen', 'ramil'];
$data = [];

foreach ($barberNames as $barberName) {
    $data[$barberName] = getAppointmentCount($connect, $barberName);
}

echo json_encode($data);

function getAppointmentCount($connect, $barberName) {
    $query = "SELECT COUNT(*) AS appointment_count FROM $barberName WHERE checkin_date = CURDATE()";
    $result = mysqli_query($connect, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['appointment_count'];
    } else {
        return 0;
    }
}
?>
