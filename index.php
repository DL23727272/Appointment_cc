<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Home | Paesano</title>
     <!-- Alertify sakit sa ulo -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <script src="jquery-3.6.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        #img{
            width: 75px;
            height: 70px;
        }

        .img{
            width: 500px;
            height: 400px;
        }

        body{
            overflow-x: hidden;
            overflow-y: auto;
            margin: 0;
            padding: 0;
        }

        #slider {
            width: 100%; /* Adjust the width as needed */
            height: 400px; /* Adjust the height as needed */
            display: flex;
            overflow: hidden;
        }

        .slide {
            min-width: 100%;
            transition: transform 1.1s ease-in-out; /* Changed from opacity to transform for smooth sliding */
        }

        .slide img {
            width: 600px;
            height: 400px;
        }
        .nav-link{
            cursor: pointer;
        }
    </style>
  
    <script>
       var currentImage = 1;

        function showNextImage() {
        // Slide to the next image
        $('#slider').animate({ scrollLeft: currentImage * $('.slide').width() }, 1100, function() {
                // Get the next image index (cycling back to the first image if needed)
                currentImage = (currentImage % 3) + 1;
            });
        }

        $(document).ready(function() {
            // Show the first image initially
            currentImage = 1;

            // Set the interval to change the image every 3000ms (3 seconds)
            setInterval(showNextImage, 3000);
        });
    </script>

</head>
<body>
<?php include 'modals.php'; ?>

<!--Navbar-->

<nav class="navbar navbar-expand-lg bg-white sticky-top shadow p-3 mb-5">
  <div class="container-sm">
    <img src="img/paesano_logo.jpg" id="img"/>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="book.php">Book</a>
        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#logIn">Log-in</a>
      </div>
    </div>
  </div>
</nav>

<!--Main Content-->

<div class="container-sm d-sm-flex flex-sm-column flex-md-row align-items-md-center">
    <div class="p-2">
        <h1 class="display-6 fw-medium">Welcome to Paesano Barber Shop – Where Style Meets Tradition! </h1>
        <p class="lead mt-3 mb-3">Step into a world of timeless grooming and a blend of contemporary trends at Paesano Barber Shop. We're not just a barber shop; we're a destination for the modern gentleman seeking the perfect grooming experience. Discover the artistry of our skilled barbers and immerse yourself in an ambiance that exudes sophistication and classic charm.</p>
        <div class="d-sm-flex flex-sm-column flex-md-row justify-content-sm-around justify-content-md-start">
            <div class="m-2"><i class="fa-brands fa-2xl fa-square-twitter" style="color: #0D6EFD"></i> <a href="#" class="link-underline-dark link-dark link-offset-2">Twitter</a></div>
            <div class="m-2"><i class="fa-brands fa-2xl fa-square-facebook" style="color: #0D6EFD"></i> <a href="#" class="link-underline-dark link-dark link-offset-2">Facebook</a></div>
            <div class="m-2"><i class="fa-brands fa-2xl fa-square-instagram" style="color: #0D6EFD"></i> <a href="#" class="link-underline-dark link-dark link-offset-2">Instagram</a></div>
        </div>
    </div>
    <div class="p-2">
        <section class="banner">
            <div id="slider">
                <div class="slide">
                    <img src="img/img1.jpg" class="img-thumbnail img-fluid shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <div class="slidertitle" id="title1"></div>
                </div>

                <div class="slide">
                    <img src="img/img2.jpg" class="img-thumbnail img-fluid shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <div class="slidertitle" id="title2"></div>
                </div>

                <div class="slide">
                <img src="img/img3.jpg" class="img-thumbnail img-fluid shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <div class="slidertitle" id="title3"></div>
                </div>
            </div>
        </section>
    </div>
</div>

<div class="d-sm-flex flex-column container-sm mt-5 mb-5">
    <div class="p-2">
        <h1 class="display-6 fw-medium">Book Your Appointment – Unleash Your Style! </h1>
        <p class="lead mt-3 mb-3">
        Ready to elevate your grooming game? Booking an appointment at Paesano Barber Shop is a breeze. Simply select a date and time that suits you best, and let our master barbers work their magic.
        </p>
    </div>
    <div class="d-sm-flex flex-sm-column flex-md-row flex-lg-row justify-content-sm-center justify-content-md-around">
        <div class="card m-2">
            <div class="card-body">
                <h5 class="card-title"><i class="fa-solid fa-burst" style="color: #0D6EFD"></i> Classic Ambiance: </h5>
                <p class="card-text">Immerse yourself in our welcoming, classy atmosphere that harks back to the golden age of barbershops.</p>
            </div>
        </div>
        <div class="card m-2">
            <div class="card-body">
                <h5 class="card-title"><i class="fa-solid fa-handshake-simple" style="color: #0D6EFD"></i> Expert Barbers:</h5>
                <p class="card-text">Our seasoned barbers are skilled in the latest trends and traditional techniques, ensuring you get the perfect cut every time.</p>
            </div>
        </div>
        <div class="card m-2">
            <div class="card-body">
                <h5 class="card-title"><i class="fa-solid fa-person-circle-check" style="color: #0D6EFD"></i> Tailored Services:</h5>
                <p class="card-text"> From haircuts to shaves, we tailor our services to meet your unique grooming preferences and style.</p>
            </div>
        </div>
    </div>
</div>

<!--Footer-->

<div class="bg-dark text-white p-5">
    <div class="container-sm d-sm-flex align-items-start">
        <div class="d-sm-flex flex-sm-column flex-md-column align-items-sm-center ">
            <div><img src="img/paesano_logo.jpg" id="img" class="rounded"/></div>
            <div><h1 class="fs-5">Paesano</h1></div>
        </div>
        <div class="d-sm-flex flex-sm-row flex-md-column">
            <div class="">
                <div class="mx-4 d-sm-flex d-md-flex flex-sm-row flex-md-row align-items-sm-center align-items-md-center">
                    <i class="fa-solid fa-home fa-xl mb-2"></i>
                    <span class="m-2">
                        <h5>Marina st., Darapidap rd.</h5>
                        <p>San Antonio Candon City Ilocos Sur</p>
                    </span>
                </div>
                
                <div class="mx-4 d-sm-flex d-md-flex flex-sm-row flex-md-row align-items-sm-center align-items-md-center">
                    <i class="fa-solid fa-phone fa-xl mb-2"></i>
                    <span class="m-2">
                        <h5>09771043166</h5>
                        <p>Everyday, 9AM to 5PM</p>
                    </span>
                </div>
            
                <div class="mx-4 d-sm-flex d-md-flex flex-sm-row flex-md-row align-items-sm-center align-items-md-center">
                   <i class="fa-solid fa-envelope fa-xl mb-2"></i>
                   <span class="m-2">
                       <h5>paesanobarbershop
                        @gmail.com</h5>
                       <p>Email us your query</p>
                   </span>
                </div>
            </div>
        </div>
        <div class="d-sm-flex flex-sm-column" id="contact">
            <form action="contactForm.php" method="post" id="contactForms">
                <h1 class="h6">Contact Us!</h1>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Name</span>
                    <input type="text" name="name" class="form-control" aria-label="Name" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
                    <input type="email" name="email" class="form-control" aria-label="Email" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Subject</span>
                    <input type="text" name="subject" class="form-control" aria-label="Subject" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Message</span>
                    <textarea type="text" name="message" class="form-control" aria-label="Message" aria-describedby="inputGroup-sizing-sm"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>
</div>

<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    // Contact Form
    $(document).ready(function() {
        alertify.set('notifier', 'position', 'top-right');

        
        $("#contactForms").submit(function(e) {
            e.preventDefault(); 

          
            var name = $("input[name='name']").val();
            var email = $("input[name='email']").val();
            var subject = $("input[name='subject']").val();
            var message = $("textarea[name='message']").val();

           
            var data = {
                name: name,
                email: email,
                subject: subject,
                message: message
            };

            
            $.ajax({
                type: "POST",
                url: "contactForm.php", 
                data: data,
                success: function(response) {
                    
                    if (response.status === 'success') {
                        alertify.success(response.message); 
                        $("#contactForms")[0].reset(); 
                    } else {
                        alertify.error(response.message); 
                    }
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error: " + status + " - " + error);
                    alertify.error("An error occurred while processing your request.");
                }
            });
        });
    });
</script>
</body>
</html>