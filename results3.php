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
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container2">
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $name = $_POST['student_name'];
  $rollno = $_POST['student_roll'];
  $rollnos=$_POST['student_rolls'];
  $age = $_POST['student_age'];
  $email=$_POST['student_mail'];
  $attendance=$_POST['student_attendance'];
  $date=$_POST['student_date'];
$server = 'localhost';
$username = 'username';
$password = '';
$database = 'sams';

// Create connection
$conn = mysqli_connect($server, $username, $password , $database);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else
{
  $sql = " UPDATE sams_table SET Student_Name='$name',Student_RollNo='$rollno',Student_Age='$age',Student_Email='$email',Student_attendance='$attendance',Date='$date' WHERE Student_RollNo='$rollnos' ";

  if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }

  mysqli_close($conn);
}



}
?>
</div>
</body>
</html>