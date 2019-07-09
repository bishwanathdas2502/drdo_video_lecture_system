
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="images/drdologo.png">
	<title>Online Course</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="drop.css"/>
	<link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.structure.css">
	<link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.theme.css">


</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-light bg-red" style="background-color: #A5E89B;">
  <a class="navbar-brand" href="index.php"><b>ITR</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  &nbsp;&nbsp;&nbsp;

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><b>Home</b> <span class="sr-only">(current)</span></a>
      </li>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item">
        <a class="nav-link" href="cse.php"><b>CSE</b></a>
      </li>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item">
        <a class="nav-link" href="me.php"><b>ME</b></a>
      </li>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item">
        <a class="nav-link" href="ee.php"><b>EE</b></a>
      </li>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item">
        <a class="nav-link" href="ec.php"><b>ECE</b></a>
      </li>
      &nbsp;&nbsp;&nbsp;&nbsp;
       <li class="nav-item">
        <a class="nav-link" href="ce.php"><b>CE</b></a>
      </li>
      &nbsp;&nbsp;&nbsp;&nbsp;
      
    </ul>
    <form class="form-inline my-2 my-lg-0" action="search.php"  method="POST">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search" id="searchbox">
      <input class="btn btn-success my-2 my-sm-0" type="submit" name="submit" value="search"></input>
    </form>
  </div>
</nav>

<div class="container">
<img src="images/drdologo.png" style="margin-left: 330px;width: 40%;height: 40% ">
</div>

<div class="container">
	<marquee><p style="font-size: 50px;">Welcome to the ITR's Online Video Tutorial for Students</p></marquee>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
<a name="videolecture"><p style="text-align: center;font-family: cursive;font-size: 30px;font-weight: bold;"><u>VIDEO LECTURE ON</u></p></a>
</div>

<br>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-lg-4">
			<img src="images/cse.png" style="border-radius: 50%;margin-left: 40px;"/>
			<p style="text-align: center;font-family: cursive;font-size: 30px;font-weight: bold;">Computer Science And Engineering</p>
			<a href="cse.php"><button class="btn btn-success" style="align-content: center;margin-left: 30%">View Lectures</button></a>
			
		</div>
		<div class="col-lg-4" style="padding-left: 10px">
			<img src="images/me2.jpg" style="border-radius: 50%;margin-left: 60px;"/>
			<p style="text-align: center;font-family: cursive;font-size: 30px;font-weight: bold;">Mechanical<br> Engineering</p>


			<a href="me.php"><button class="btn btn-success" style="align-content: center;margin-left: 30%">View Lectures</button></a>
			
		</div>
		<div class="col-lg-4">
			<img src="images/ee2.png" style="border-radius: 50%;margin-left: 60px;"/>
			<p style="text-align: center;font-family: cursive;font-size: 30px;font-weight: bold;">Electrical<br>Engineering</p>
			<a href="ee.php"><button class="btn btn-success" style="align-content: center;margin-left: 30%">View Lectures</button></a>
			
		</div>
	</div>
	<br>
	<br>

	<div class="row">
		<div class="col-lg-6">
			<img src="images/ce2.png" style="border-radius: 50%;margin-left: 160px;"/>
			<p style="text-align: center;font-family: cursive;font-size: 30px;font-weight: bold;">Civil<br>Engineering</p>
			<br>
			
			<a href="ce.php"><button class="btn btn-success" style="align-content: center;margin-left: 40%">View Lectures</button></a>
			
		</div>
		<div class="col-lg-6" style="padding-left: 10px">
			<img src="images/ece2.jpg" style="border-radius: 50%;margin-left: 160px;"/>
			<p style="text-align: center;font-family: cursive;font-size: 30px;font-weight: bold;">Electronics & Communication<br>Engineering</p>

			<br>
			<a href="ec.php"><button class="btn btn-success" style="align-content: center;margin-left: 40%">View Lectures</button></a>
			
		</div>
	</div>		
</div>

</body>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="jqueryui/jquery-ui.js"></script>

<script src="js/search.js"/>
	
</script>

</html>

