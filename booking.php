<?php
session_start();
 if(!isset($_SESSION['login']) || !$_SESSION['login']==1){
   header('Location:login.php');
 }
 $id = $_SESSION['user_id']; 



?>
<!DOCTYPE html>
<html>

<head>
    <title>Book Room</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

 


</head>

<body>

    
    <!-- this is navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="book.php">Book Now</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Check-out</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-danger" href="db/logout.php">Logout</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->
    <h1 style="text-align:center;">Book room</h1>

    <div class="container">
        <div class="row d-flex justify-content-center">


            <div class="col-md-8">

                <form method="POST" action="db/booking.php">
                    <div class="md-3">
                        <br>
                        <label style="font-size:20px; font-weight:bold;" class="form-label">Check-in:
                        </label>
                        <input name="date" type="date" class="form-control ">
                    </div>
                    

                    <div class="md-3">
                        <label style="font-size:20px; ; font-weight:bold;" class="form-label">Status:</label>
                        <select name="status" class="form-control " style="">
                            <option value="Booked" selected>Booked</option>
                            <option value="Travelling">Travelling</option>
                            <option value="Reserved">Reserved</option>
                        </select>
                    </div>


                    <hr>
                    <button type="submit" class="btn btn-success">Save</button>
                    <?php include('include/message.php'); ?>
                </form>
            </div>
        </div>
    </div>



</body>
<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>




</html>