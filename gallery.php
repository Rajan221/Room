<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>HRooms</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
        
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
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
							<a class="nav-link  active" aria-current="page" href="gallery.php">Gallery</a>
						</li>
						<li class="nav-item">
							<a class="nav-link"  href="booking.php">Book Now</a>
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
	
	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3 style="text-align:center; margin-top:30px; font-size:40px">GALLERY</h3></strong>
				<br />
				<br />
				<div style = "float:left; margin-top:30px; height:250px; margin-left:20px;">
					<img src = "img/a.jpg"  height = "250"/>
				</div>
				<div style = "float:left; margin-top:30px; height:250px; margin-left:20px;">
					<img src = "img/b.jpg"   height = "250"/>
				</div>
				<div style = "float:left; margin-top:30px; height:250px; margin-left:20px;">
					<img src = "img/c.jpg"   height = "250"/>
				</div>
				<div style = "float:left; margin-top:30px; height:250px; margin-left:20px;">
					<img src = "img/d.jpg"   height = "250"/>
				</div>
				<br style = "clear:both;" />
				<br />
				<div style = "float:left; margin-top:30px; height:250px; margin-left:20px;">
					<img src = "img/e.jpg"   height = "250"/>
				</div>
				<div style = "float:left; margin-top:30px; height:250px; margin-left:20px;">
					<img src = "img/f.jpg"   height = "250"/>
				</div>
				
                <div style = "float:left; margin-top:30px; height:250px; margin-left:20px;">
					<img src = "img/g.jpg"   height = "250"/>
				</div>
                <div style = "float:left; margin-top:30px; height:250px; margin-left:20px;">
					<img src = "img/h.jpg"   height = "250"/>
				</div>
                
                <div style = "float:left; margin-top:30px; height:250px; margin-left:20px;">
					<img src = "img/j.jpg"   height = "250"/>
				</div>
				
				<br style = "clear:both;" />
				<br />
				
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
</div>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>