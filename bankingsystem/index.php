<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Banking System</title>
  <!--<link href="css/bootsrap.min.css" rel="stylesheet">-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <!-- <link href="style.css" rel="stylesheet">-->
</head>
<div class="container">
  <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">Online Banking</span>
    </a>

    <ul class="nav nav-pills">
      <li class="nav-item"><a href="index.php" class="nav-link active">Home</a></li>
    </ul>
  </header>
</div>
<body>
<div class="container-fluid" style="background-color:#00afff;border-style:solid;border-width:5px;border-color:gold;position:absolute;">
 <div class="row">
  <div class="col-md-6 cols-xs-6 text-right">
   <img src="img/bank.jpg" alt="bank-logo" height="200px" class="rounded float-right" style="margin-left:18.6%">
  </div>
  <div class="col-md-6 col-xs-6">
    <h2 style="padding-top:10%;font-family:'Times New Roman';">Welcome to Pantheon Bank</h2>
  </div>
</div>
</div>
<div class="container" style="position:absolute;">
 <div class="row">
  <div class="col-md-12 col-xs-12 text-right">
   <a href="transfermoney.php" class="btn btn-info" role="button" style="margin-left:60%;margin-top:28%">Transfer Money</a>
  </div>
 </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<footer class="bg-light text-center text-lg-start" style="margin-top:35%;">
  <div class="container p-4">
    <div class="row">
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">GRIP Project</h5>

        <p>
          By Sairanjan Dasgupta
        </p>
      </div>
    </div>
  </div>
</footer>
</body>
</html>