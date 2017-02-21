<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SRIIT-codejam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="imgs/icon.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="styles/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <style media="screen">
    table,th,td {align:center; text-align: center;border: 2px solid black;}
    th{width: 100px;}
    td{width: 200px;}
    </style>
  </head>
  <body>
    <div class="head" style="min-height:12px;"></div>
    <nav class="navbar navbar-default ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="index.html" ><img class="logo menu-text"  src="imgs/logo.png" alt="SRIIT"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
	  <ul class="nav navbar-nav navbar-right" style="padding:0px 0px; border:0px">
      <li><span ><img class="dept" src="imgs/dept.png" alt="Dept. of Computer Science & Engineering" /></span></li>
      <li><a class="navbar-texts menu-text" id="white_bg" href="" data-toggle="modal" data-target=".bs-example-modal-lg" style="color:black">Suggestions</a>
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
         <div class="modal-dialog modal-lg">
           <div class="modal-content">
             <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" >&times;</span></button>
               <h4 class="modal-title" id="exampleModalLabel">Suggestion</h4>
                 </div>
              <form action="sugg.php" method="post">
                 <div class="modal-body">
                    <div>
                  <label for="recipient-name" class="control-label">Name <span class="glyphicon glyphicon-user" aria-hidden="true"> </span> </label>
                       <input type="text" class="form-control" name="name" id="recipient-name">
                     </div>
                     <div>
                       <label for="message-text" class="control-label">Your Proposal <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> </label>
                       <textarea class="form-control" name="idea" id="message-text"></textarea>
                     </div>
                 </div>
                 <div class="modal-footer">
                   <button class="btn btn-success btn-lg " type="submit" >
          		 			<span class="glyphicon glyphicon-send"></span> &nbsp Send
          		 		</button>
                </div>
               </form>
           </div>
         </div>
       </div>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle menu-text navbar-texts" style="color:black" id="white_bg" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">codejam <span class="caret"></span></a>
        <ul class="dropdown-menu" style="font-size:18px; border-color:#fefefe; border-radius:0px; min-width:250px" >
          <li><a href="#" class="menu-text">Results</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#" class="menu-text">Key</a></li>
        </ul>
      </li>
	  </ul>

    </div>
  </div>
</nav>
<div>
    <img  class="tech" src="imgs/techfest.png" alt="" />
    <hr style="margin: 5px 0 5px 0 ;">
</div>
<div class="container" align="center" style="margin-top:12px;">
  <form class="" action="" method="post">
   <span style="margin: 0 35px 0 0;font-size:25px;"><b>Id :</b></span>
    <input class="login_text" type="text" name="Id" placeholder="Roll Number" required autofocus >

      <button class="btn btn-success btn-lg login-btn" style="margin-left: 10px;"type="submit" >
       <span class="glyphicon glyphicon-user"></span> &nbsp GO
     </button>
  </form>
</div>
<div class="container" align="center" style="margin:10px 20px 10px 20px; font-size:18px; max-width:50%;">
  <ul class="nav nav-tabs" role="tablist">
  <li role="presentation" class="active"><a   href="#Round-1" aria-controls="home" role="tab" data-toggle="tab">Round-1</a></li>
      <li role="presentation"><a href="#Round-2" aria-controls="profile" role="tab" data-toggle="tab">Round-2</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active fade" id="Round-1">
      <div class="" align="center">

      <?php
      $servername = "localhost";
      $username = "root";
      $password = "321654";
      $dbname = "codejam";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT * FROM collections";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
           echo "<table><tr><th>Q no </th><th>Token no </th><th> Option</th><th>TIme taken</th></tr>";
           // output data of each row
           while($row = $result->fetch_assoc()) {
               echo "<tr><td>" . $row["Question No"]. "</td><td>" . $row["Token No"]. "</td><td> " . $row["Response"]. "</td><td>" .$row["TimeTaken"]. "</td></tr>";
           }
           echo "</table>";
      } else {
           echo "0 results";
      }

      $conn->close();
      ?>

      </div>
    </div>
    <div role="tabpanel" class="tab-pane fade " id="Round-2">...</div>

  </div>

 </div>





  </body>
  <footer>

    <div   style="background-color: 	#730099; ">
      <p>
        <a href="#" style="margin-left:8%;"><img style="height:30px" src="imgs/crt_w.png" alt="Chandrahas Boorela" /> </a>
        <a href="https://sriit.ac.in" id="footer-sriit" style=" margin-right:5%; padding:5px 0 5px 0 "> SRIIT</a>
        <a href="https://sriit.ac.in/about.html" style="margin-right:5%;">About</a>
        <a href="https://sriit.ac.in/contact-us.php">Contact</a>
      </p>
    </div>
  </footer>
</html>
