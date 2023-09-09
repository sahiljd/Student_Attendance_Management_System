<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="styles.css">
    
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>
    
  
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">SAMS</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php"
                >Home</a>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container2">
<?php
// Connecting to the Database
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$date=$_POST['student_date'];
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'sams';

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    $sql = "SELECT * FROM sams_table WHERE Date='$date' ";
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result);
     echo $num," records found in the DataBase<br>";
    
    if($num> 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['Student_Name']."     ||      ".$row['Student_RollNo']."       ||       ".$row['Student_Age']."      ||       ".$row['Student_Email']."       ||        ".$row['Student_attendance']."      ||        ".$row['Date'];
            echo "<br>";
        }
    }
    mysqli_close($conn);    
}


}
?>
</div>    
</body>
</html>


