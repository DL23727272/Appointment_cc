<html>
    <head>
        <title>Arwen</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
           <!-- Alertify sakit sa ulo -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    </head>
    <body>
        <?php include ('../modals.php'); ?>
        <nav class="navbar bg-body-tertiary fixed-top shadow p-3 mb-5 bg-body-tertiary rounded">
        <div class="container-fluid">
            <a class="navbar-brand" href="admin.php"><i class="fa-solid fa-users-line"></i> Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Paesano Barber Shop</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link" href="admin.php"><i class="fa-solid fa-users-line"></i> Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-plus"></i> Add User</a>
                </li>
                </ul>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-scissors"></i> Barbers
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="arwen.php"><i class="fa-solid fa-user-check"></i> Arwen</a></li>
                        <li><a class="dropdown-item" href="allen.php"><i class="fa-solid fa-user-check"></i> Allen</a></li>
                        <li><a class="dropdown-item" href="ramil.php"><i class="fa-solid fa-user-check"></i> Ramil</a></li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
        </nav>


        <br></br>
        <div class="container-fluid">
        <h1 class="h4 mt-5"><i class="fa-solid fa-user-check"></i> Arwen</h1>
        <?php
            include 'D:\xampp\htdocs\Appointment\Process\myConnection.php';
            
            $currentDate = date("Y-m-d");

            $query = "SELECT * FROM arwen WHERE checkin_date = '$currentDate'";
            $result = mysqli_query($connect, $query);

            $totalAppointmentsToday = mysqli_num_rows($result);
         ?>
         <table class="table">
            <tr>
                <th scope="col">Total appointment today: </th>
                <th scope="col"><i class='fa-solid fa-square-poll-vertical'></i> <?php echo $totalAppointmentsToday; ?></th>
            </tr>
            <tr>
                <th scope="col"> ID </th>
                <th scope="col"> Check-in Date </th>
                <th scope="col"> Check-in Time </th>
                <th scope="col"> Name </th>
                <th scope="col"> Type </th>
                <th scope="col"> Edit </th>
                <th scope="col"> Delete </th>
            </tr>
            <?php 
               include 'D:\xampp\htdocs\Appointment\Process\myConnection.php';

                $query = "SELECT * FROM arwen";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
            ?>         
                <tr>
                    <td> <?php echo $row["id"];?> </td>
                    <td> <?php echo $row["checkin_date"];?> </td>
                    <td> <?php echo $row["checkin_time"];?> </td>
                    <td> <?php echo $row["name"];?> </td>
                    <td> <?php echo $row["service_type"];?> </td>
                    <td>
                      <a href="editForm.php?id=<?php echo $row ["id"]; ?>">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit" >Edit</button>
                      </a>
                    </td>
                    <td>
                    <a href="#" onclick="deleteAppointment(<?php echo $row["id"]; ?>, 'arwen');">
                        <button type='button' class='btn btn-warning'>Delete</button>
                    </a>
                    </td>
                    
                </tr>
                
                <?php
                    }
                }
                else{
                    echo "<p class='lead'><i class='fa-solid fa-square-poll-vertical'></i> 0 book</p>";
                }
            ?>
            
        </table>
        </div>
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
        <script>
        function deleteAppointment(id, barberName) {
            var confirmMessage = `Are you sure you want to delete appointment with ID ${id}?`;

            alertify.confirm(confirmMessage, function () {
                $.ajax({
                    url: `../Process/deleteProcess.php?id=${id}&barber_name=${barberName}`,
                    type: 'GET',
                    dataType: 'json',
                    success: function (response) {
                        if (response.success) {
                            alertify.success(response.message);

                            setTimeout(function () {
                                location.reload();
                            }, 1000); 
                        } else {
                            alertify.error(response.message);
                        }
                    },
                });
            }, function () {
               
            });
        }


             alertify.set('notifier','position', 'top-right');
             alertify.success('Welcome, Arwen!' );
        </script>
    </body>
</html>