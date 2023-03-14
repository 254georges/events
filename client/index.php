<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" href="css/style1.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="font-awesome/fontawesome.all.min.css">
    <title>Events Manager</title>
</head>
<body>
 <div class="container-fluid">  
        <!-- Navbar starts -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                
                    <a class="navbar-brand" href="#">EVENTS</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto p-2">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="about.php">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="login/login.php">Book</a>
                        </li>
                        <li class="nav-item">
                        <a class="btn btn-primary" href="login/login.php">Login</a>
                        </li>
                    </ul>
                    </div>
                
            </nav>
        <!-- navbar end -->
      
       <!-- start hero -->
       <div class="header">
            <div class="img-parent">
                    <div class="img">
                        <img src="images/golden.jpg" alt="">
                    </div>
                    <div class="img-overlay"></div>
            </div>
       
       <div class="img-content">
            <h2>Book the perfect event venue.</h2>
            <span>Event Manager is the easiest way to book the perfect event space. Enjoy the location library and hassle-free bookings today.
            </span>
       </div>
       </div>
       <!-- end hero -->
    
</div>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- javascript -->
<script>
    $(document).scroll(function())
    {
    $(".navbar").toggleClass("scroll", $(this).scrollTop()> $("navbar").height())}
</script>

</body>
</html>