<?php

include "process.php";


$id = "";
$name = "";
$address = "";

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == 'GET') {
    if (!isset($_GET['id'])) {
        header("location:/websites/index.php");
        exit;
    }

    $id = $_GET['id'];

    $sql = "SELECT * FROM tbl_patient WHERE patient_id = $id";
    $result = $mysqli->query($sql);

    if (!$result || $result->num_rows == 0) {
        header("location: /websites/index.php");
        exit;
    }

    $row = $result->fetch_assoc();
    $name = $row["NAME"];
    $address = $row["address"];

} else {
    // POST method: update patient
    $id = $_POST["id"];
    $name = $_POST["name"];
    $address = $_POST["address"];

    if (empty($name) || empty($address)) {
        $error = "All fields are required.";
    } else {
        $sql = "UPDATE tbl_patient SET NAME='$name', address='$address' WHERE patient_id='$id'";
        $result = $mysqli->query($sql);

        if ($result) {
            $success = "Patient updated successfully.";
            header("location: /websites/index.php");
            exit;
        } else {
            $error = "Error updating patient: " . $conn->error;
        }
    }
}
?>



<?php
include 'process.php';

$showToast = false;
$toastMessage ="";

if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $address = trim($_POST['address']);

    if (!empty($name) && !empty($address)) {
        

        $q = "INSERT INTO tbl_patient (NAME,address) VALUES ('$name', '$address')" ;
        $query = mysqli_query($mysqli,$q);

        $showToast = true;
        $toastMessage = 'New Patient Admitted';

    } else {
        echo "Please fill out all fields.";
    }
}

?>





<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

<!-- Nav bar -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mental Health Patient Management System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home</a>
        </li>
     
      </ul>
      <span class="navbar-text">
        Created by Group 3
      </span>
    </div>
  </div>
</nav>


 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center" >  Update Patient Info</h1>
 </div><br>

 <input type = "hidden" name = "id" value = "<?php echo $id; ?>" class = "form-control"> <br>

 <label> NAME: </label>
 <input type="text" name="name" value = "<?php echo $name; ?>" class="form-control"> <br>

 <label> ADRESS: </label>
 <input type="text" name="address" value = "<?php echo $address; ?>" class="form-control"> <br>


 <button class="btn btn-success" type="submit" name="submit" href = "#"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>

<!-- Toast Notification -->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="myToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto">Notification</strong>
            <small>Just now</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            <?php echo $toastMessage; ?>
        </div>
    </div>
</div>


<!-- Toast Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Show the toast if PHP says so
<?php if ($showToast): ?>
    window.addEventListener('DOMContentLoaded', function() {
        var toastEl = document.getElementById('myToast');
        var toast = new bootstrap.Toast(toastEl);
        toast.show();
    });
<?php endif; ?>
</script>

</html>