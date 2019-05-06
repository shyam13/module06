<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="css/style.css" charset="utf-8"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>OUR SCHOOL MEMBERS</title>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#"><img src="https://cdn.pixabay.com/photo/2014/04/02/10/35/book-303927_960_720.png" style="width:5%;"></a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="index.html">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="announce.php">Announcements</a></li>
          <li class="active"><a href="index.php">Users</a></li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>THE MANAGEMENT</h1>
            <?php
            include "php/openDB.php";
            $sql = 'SELECT * FROM profiles';
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result)>0) {
              while($row = mysqli_fetch_assoc($result)){

                echo "FIRSTNAME:".$row["firstname"]."</br>";
                echo "LASTNAME:".$row["lastname"]."</br>";
                echo "CITY:".$row["city"]."</br><hr>";
              }
            }else{
              echo "No Records";
            }
             ?>
        </div>
      </div>
    </div>
  </body>
</html>
