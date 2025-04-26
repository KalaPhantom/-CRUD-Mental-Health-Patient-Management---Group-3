
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
          <a class="nav-link active" href="index.php" >HOME</a>
        </li>


        <li class="nav-item">
          <!-- Add confirmation before navigation (optional) -->
          <a class="nav-link active" href="add.php" onclick="return confirm('Are you sure you want to add a new patient?')">Add</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        
      </ul>
      <span class="navbar-text">
        Created by Group 3
      </span>
    </div>
  </div>
</nav>



<div class = "container my-4">
<div class="card" style="width: 18rem; padding: 12px;;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Lerado, Allen N <br> BSCS - 2B.</p>
  </div>
</div>


<div class="card" style="width: 18rem ; padding: 12px;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Bueata, Nino Jay <br> BSCS - 2b.</p>
  </div>
</div>


<div class="card" style="width: 18rem;  padding: 12px;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Reyes, Clyde <br> BSCS - 2B</p>
  </div>
</div>
</div>
