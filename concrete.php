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
      <li class="nav-item ">
        <a class="nav-link" href="index.php"><b>Home</b> <span class="sr-only">(current)</span></a>
      </li>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item ">
        <a class="nav-link" href="cse.php"><b>CSE</b></a>
      </li>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item ">
        <a class="nav-link" href="me.php"><b>ME</b></a>
      </li>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item ">
        <a class="nav-link" href="ee.php"><b>EE</b></a>
      </li>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item ">
        <a class="nav-link" href="ec.php"><b>ECE</b></a>
      </li>
      &nbsp;&nbsp;&nbsp;&nbsp;
       <li class="nav-item active">
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


<table class="table table-hover table-dark " style="text-align: center;">
   <thead>
   	<tr>
   		<th scope="col" colspan="3"><p style="font-size: 30px;text-align: center"><u>Concrete Technology Lectures</u></p></th>
   	</tr>

    <tr>
      <th scope="col" width="50px">SNo.</th>
      <th scope="col"><b>Videos</b></th>
      <th scope="col" width="65%"><b>Lecture On</b> </th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><video height="250px" width="250px" src="videos/1.mp4" controls></video></td>
      <td style="padding-top: 100px;"><h5>6.1 Introduction to Concrete Technology</h5></td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><video height="250px" width="250px" src="videos/1.mp4" controls></video></td>
      <td style="padding-top: 100px;"><h5>6.2 Cement: Production And Composition</h5></td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><video height="250px" width="250px" src="videos/1.mp4" controls></video></td>
      <td style="padding-top: 100px;"><h5>6.3 Structure And Hydration</h5></td>
      
    </tr>

     <tr>
      <th scope="row">4</th>
      <td><video height="250px" width="250px" src="videos/1.mp4" controls></video></td>
      <td style="padding-top: 100px;"><h5>6.4 Properties And Tests  </h5></td>
      
    </tr>
     <tr>
      <th scope="row">5</th>
      <td><video height="250px" width="250px" src="videos/1.mp4" controls></video></td>
      <td style="padding-top: 100px;"><h5>6.5 Types And Use</h5></td>
      
    </tr>
     <tr>
      <th scope="row">6</th>
      <td><video height="250px" width="250px" src="videos/1.mp4" controls></video></td>
      <td style="padding-top: 100px;"><h5>6.6 Aggregates</h5></td>
      
    </tr>
     <tr>
      <th scope="row">7</th>
      <td><video height="250px" width="250px" src="videos/1.mp4" controls></video></td>
      <td style="padding-top: 100px;"><h5>6.7 Chemical Admixture</h5></td>
      
    </tr>
     <tr>
      <th scope="row">8</th>
      <td><video height="250px" width="250px" src="videos/1.mp4" controls></video></td>
      <td style="padding-top: 100px;"><h5>6.8 Batching And Mixing Of Concrete</h5></td>
      
    </tr>
  </tbody>
</table>


</body>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="jqueryui/jquery-ui.js"></script>

<script src="js/search.js"/>


</html>

