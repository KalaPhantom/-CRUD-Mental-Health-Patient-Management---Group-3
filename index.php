
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>

<!--Nav bar -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mental Health Patient Management System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      


        <li class="nav-item">
          <!-- Add confirmation before navigation (optional) -->
          <a class="nav-link active" href="add.php" onclick="return confirm('Are you sure you want to add a new patient?')">Add</a>
        </li>

      
        
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        
      </ul>
      <span class="navbar-text">
        Created by Group 3
      </span>
    </div>
  </div>
</nav>


<div class ="container my-4">
<div style ="padding: 2px">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Patient</th>
            <th>Adress</th>
            <th> Actions </th>
         </tr>
        </thead>

        <!-- Include PHP tag here -->

        <tbody>

        

        
            <?php require_once 'process.php';

            $showToast = false;
            $toastMessage = '';

            
            $sql = 'select * from tbl_patient ';
            $result = $mysqli->query($sql);

            if(!$result){
                die ("INvalid Query");
            }

            while($row = $result->fetch_assoc()) {

                echo "
                <tr>
                    <th>{$row['patient_id']}</th>
                    <td>{$row['NAME']}</td>
                    <td>{$row['address']}</td>
                    <td>
                        <a class='btn btn-warning' href='edit.php?id={$row['patient_id']}'>Update</a>
                        <a class='btn btn-danger' href='del.php?id={$row['patient_id']}'>Delete</a>
                    </td>
                </tr>
                ";
            }
            
            
            
            ?>
        </tbody>

    </table>
</div>
</div>





<!--Input validator-->
<!-- Todo : 

    > Create a CCS seprate file for this 
    > Seprate  floating dialoggue
    > Main menu for operations
-->
<body>
    <?php require_once 'process.php'?>
    <div class = "row justify-content-center">
        <form action="" method="POST">

            <!-- <div >
            <label style="color: red;">Name </label><input type="text" name="name" value="Enter the patient's name">
            </div>

            <div >
            <label style="color: red;">Adress </label>
            <input type="text" name="location" value="Enter your adress">
            </div>

            <div >
                <button type="submit" name = "save">save</button>
            </div> -->

        </form>
    </div>
</body>





</html>