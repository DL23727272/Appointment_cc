 <!---Barber 1--->
 <div class="modal fade" id="barber1" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa-solid fa-scissors"></i> Book an Appointment with Paesano Barber</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="form"  method="post"  id="arwenForm">
            <h1 class="display-3"><i class="fa-solid fa-user"></i> Arwen</h1>
            <p class="lead fs-6">Please fill in the details to book an appointment with Barber Arwen:</p>

            <div class="d-flex flex-column">
              <h1 class="lead fs-6"><i class="fa-solid fa-user-tie"></i> Your Name</h1>
              <input type="text" id="name1" name="fname" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
            </div>

            <div class="d-flex justify-content-between mt-2 mb-2">
            <div class="d-flex flex-column" style="width: 50%;">
              <h1 class="lead fs-6"><i class="fa-solid fa-calendar-days"></i> Check-in Date</h1>
              <input type="date" id="check-in-Date" name="dateIn" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
            </div>

            <div class="d-flex flex-column" style="width: 49%;">
              <h1 class="lead fs-6"><i class="fa-solid fa-clock"></i> Check-in Time (Hour)</h1>
              <select class="form-select" id="inputGroupSelect01" name="timeIn">
                <option disabled selected value="">Choose an hour...</option>
                <option value="09:00:00">9:00 AM</option>
                <option value="10:00:00">10:00 AM</option>
                <option value="11:00:00">11:00 AM</option>
                <option value="13:00:00">1:00 PM</option>
                <option value="14:00:00">2:00 PM</option>
                <option value="15:00:00">3:00 PM</option>
                <option value="16:00:00">4:00 PM</option>
              </select>
            </div>
            </div>

            <div class="d-flex flex-column">
              <h1 class="lead fs-6"><i class="fa-solid fa-bell-concierge"></i> Select Services</h1>
              <select class="form-select" id="inputGroupSelect01" name="serviceType">
                <option disabled selected value="">Choose a service...</option>
                <option value="Haircut">Haircut</option>
                <option value="Shave">Shave</option>
                <option value="Beard Trim">Beard Trim</option>
                <option value="Hair styling">Hair styling</option>
              </select>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="send" id="Tsave">Book</button>
          </div>
        </form>
      </div>
    </div>
  </div>

   <!---Barber 2--->
   <div class="modal fade" id="barber2" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa-solid fa-scissors"></i> Book an Appointment with Paesano Barber</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="form"  method="post"  id="allenForm">
            <h1 class="display-3"><i class="fa-solid fa-user"></i> Allen</h1>
            <p class="lead">Please fill in the details to book an appointment with Barber Allen:</p>

            <div class="d-flex flex-column">
              <h1 class="lead fs-6"><i class="fa-solid fa-user-tie"></i> Your Name</h1>
              <input type="text" id="name1" name="fname" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
            </div>

            <div class="d-flex justify-content-between mt-2 mb-2">
            <div class="d-flex flex-column" style="width: 50%;">
              <h1 class="lead fs-6"><i class="fa-solid fa-calendar-days"></i> Check-in Date</h1>
              <input type="date" id="check-in-Date" name="dateIn" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
            </div>

            <div class="d-flex flex-column" style="width: 49%;">
              <h1 class="lead fs-6"><i class="fa-solid fa-clock"></i> Check-in Time (Hour)</h1>
              <select class="form-select" id="inputGroupSelect01" name="timeIn">
                <option disabled selected value="">Choose an hour...</option>
                <option value="09:00:00">9:00 AM</option>
                <option value="10:00:00">10:00 AM</option>
                <option value="11:00:00">11:00 AM</option>
                <option value="13:00:00">1:00 PM</option>
                <option value="14:00:00">2:00 PM</option>
                <option value="15:00:00">3:00 PM</option>
                <option value="16:00:00">4:00 PM</option>
              </select>
            </div>
            </div>

            <div class="d-flex flex-column">
              <h1 class="lead fs-6"><i class="fa-solid fa-bell-concierge"></i> Select Services</h1>
              <select class="form-select" id="inputGroupSelect01" name="serviceType">
                <option disabled selected value="">Choose a service...</option>
                <option value="Haircut">Haircut</option>
                <option value="Shave">Shave</option>
                <option value="Beard Trim">Beard Trim</option>
                <option value="Hair styling">Hair styling</option>
              </select>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="send" id="Tsave">Book</button>
          </div>
        </form>
      </div>
    </div>
  </div>

 <!---Barber 3--->
 <div class="modal fade" id="barber3" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa-solid fa-scissors"></i> Book an Appointment with Paesano Barber</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="form"  method="post"  id="ramilForm">
            <h1 class="display-3"><i class="fa-solid fa-user"></i> Ramil</h1>
            <p class="lead">Please fill in the details to book an appointment with Barber Ramil:</p>
            <div class="d-flex flex-column">
              <h1 class="lead fs-6"><i class="fa-solid fa-user-tie"></i> Your Name</h1>
              <input type="text" id="name1" name="fname" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
            </div>

            <div class="d-flex justify-content-between mt-2 mb-2">
            <div class="d-flex flex-column" style="width: 50%;">
              <h1 class="lead fs-6"><i class="fa-solid fa-calendar-days"></i> Check-in Date</h1>
              <input type="date" id="check-in-Date" name="dateIn" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
            </div>

            <div class="d-flex flex-column" style="width: 49%;">
              <h1 class="lead fs-6"><i class="fa-solid fa-clock"></i> Check-in Time (Hour)</h1>
              <select class="form-select" id="inputGroupSelect01" name="timeIn">
                <option disabled selected value="">Choose an hour...</option>
                <option value="09:00:00">9:00 AM</option>
                <option value="10:00:00">10:00 AM</option>
                <option value="11:00:00">11:00 AM</option>
                <option value="13:00:00">1:00 PM</option>
                <option value="14:00:00">2:00 PM</option>
                <option value="15:00:00">3:00 PM</option>
                <option value="16:00:00">4:00 PM</option>
              </select>
            </div>
            </div>

            <div class="d-flex flex-column">
              <h1 class="lead fs-6"><i class="fa-solid fa-bell-concierge"></i> Select Services</h1>
              <select class="form-select" id="inputGroupSelect01" name="serviceType">
                <option disabled selected value="">Choose a service...</option>
                <option value="Haircut">Haircut</option>
                <option value="Shave">Shave</option>
                <option value="Beard Trim">Beard Trim</option>
                <option value="Hair styling">Hair styling</option>
              </select>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="send" id="Tsave">Book</button>
          </div>
        </form>
      </div>
    </div>
  </div>

   <!---Barber 4--->
 <div class="modal fade" id="barber4" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Book now</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="form" action="Process/#.php" method="post">
            <h1>Barber4</h1>

            <div class="form-group">
              <label for="chkD">Check-in Date</label>
              <input type="date" name="dateIn" id="check-in-Date" class="chkD" required>
            </div>

            <div class="form-group">
              <label for="chkT">Enter Check-in Time (e.g., 09:00 AM)</label>
              <input type="time" id="chkt" name="timeIn" class="form-control" placeholder="Enter the time" required>
            </div>

            <div class="form-group">
              <label for="name">Name</label>
              <input id="name1" name="fname" type="text" class="form-control" autofocus placeholder="Enter a name" required>
            </div>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="send" id="Tsave">Check-in</button>
          </div>
        </form>
      </div>
    </div>
  </div>

   <!---Barber 5--->
   <div class="modal fade" id="barber5" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Book now</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="form" action="Process/#.php" method="post">
            <h1>Barber5</h1>

            <div class="form-group">
              <label for="chkD">Check-in Date</label>
              <input type="date" name="dateIn" id="check-in-Date" class="chkD" required>
            </div>

            <div class="form-group">
              <label for="chkT">Enter Check-in Time (e.g., 09:00 AM)</label>
              <input type="time" id="chkt" name="timeIn" class="form-control" placeholder="Enter the time" required>
            </div>

            <div class="form-group">
              <label for="name">Name</label>
              <input id="name1" name="fname" type="text" class="form-control" autofocus placeholder="Enter a name" required>
            </div>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="send" id="Tsave">Check-in</button>
          </div>
        </form>
      </div>
    </div>
  </div>

 <!---Barber 6--->
 <div class="modal fade" id="barber6" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Book now</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="form" action="Process/#.php" method="post">
            <h1>Barber6</h1>

            <div class="form-group">
              <label for="chkD">Check-in Date</label>
              <input type="date" name="dateIn" id="check-in-Date" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="chkT">Enter Check-in Time (e.g., 09:00 AM)</label>
              <input type="time" id="chkt" name="timeIn" class="form-control" placeholder="Enter the time" required>
            </div>

            <div class="form-group">
              <label for="name">Name</label>
              <input id="name1" name="fname" type="text" class="form-control" autofocus placeholder="Enter a name" required>
            </div>
         </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="send" id="Tsave">Check-in</button>
          </div>
        </form>
      </div>
    </div>
  </div>

   <!---LOG IN--->
 <div class="modal fade" id="logIn" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Welcome Barber</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="form" action="Process/loginProcess.php" method="post">
            <h1>Log-in</h1>

            <div class="form-group">
              <label for="username">Username</label>
              <input id="name1" name="username" type="text" class="form-control" autofocus placeholder="Enter username" required>
            </div>

            <div class="form-group">
              <label for="name">Password</label>
              <input id="pass" name="password" type="password" class="form-control" autofocus placeholder="Enter a password" required>
            </div>
         </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="send" id="Tsave">Log-in</button>
          </div>
        </form>
      </div>
    </div>
  </div>



  <!-------TEST------->
  
