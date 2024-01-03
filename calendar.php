<!DOCTYPE HTML>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            text-align: center;
            padding: 5px;
            height: 70px;
        }
        .weekDays{
            background-color: white;
            color: black;
        }
        .weekEnd{
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>
<?php
$month = date("F");
$year = date("Y");
$d = date("d");
$m = date("m");
$y = date("Y");
$numDays = date("t", mktime(0, 0, 0, $m, $d, $y));
?>

<h2><?php echo $month, " ", $year; ?></h2>

<!-- creating table -->
<table>
    <tr>
        <!-- creating the table header -->
        <th class="weekEnd">Sun</th>
        <th class="weekDays">Mon</th>
        <th class="weekDays">Tue</th>
        <th class="weekDays">Wed</th>
        <th class="weekDays">Thu</th>
        <th class="weekDays">Fri</th>
        <th class="weekEnd">Sat</th>
    </tr>
    <?php
   
    $s = date("w", mktime(0, 0, 0, $m, 1, $y));

    
    echo "<tr>";
    $day = 1;
    for ($i = 0; $i <= 6; $i++) {
        if ($i < $s) {
            echo "<td></td>";
        } else {
            echo "<td>" . $day . "</td>";
            $day++;
        }
    }
    echo "</tr>";

    
    $i = $day;
    while ($i <= $numDays) {
        echo "<tr>";
        for ($j = 0; $j <= 6; $j++) {
            if ($day <= $numDays) {
                echo "<td>" . $day . "</td>";
                $day++;
            } else {
                echo "<td></td>";
            }
            $i++;
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
