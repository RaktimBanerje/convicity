<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convicity</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/lightbox/dist/css/lightbox.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>
<div class="container-fluid">
  <nav class="header navbar navbar-expand-sm navbar-light bg-light fixed-top">
    <div class="container">
      <div class="page-logo d-none d-sm-block">
        <a class="convicity-logo1" href="<?php echo base_url() ?>">
          <img src="<?php echo base_url() ?>assets/images/logo1.png" class="img-1 img-responsive" style="margin: 7px 17px;">
          <img src="<?php echo base_url() ?>assets/images/logo2.png" class="img-responsive">
        </a>
      </div>

      <a class="navbar-brand d-sm-none d-block" href="<?php echo base_url() ?>">
        <img src="<?php echo base_url() ?>assets/images/logo1.png" class="img-1 img-responsive" style="margin: 0px 17px; height: 45px;">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      


      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" style="color: black;" href="<?php echo base_url() ?>">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style="color: black;" href="javascript:void(0)" role="button" data-bs-toggle="dropdown">Corporate</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo base_url() ?>corporate#who">WHO WE ARE</a></li>
              <li><a class="dropdown-item" href="<?php echo base_url() ?>corporate#partners">PARTNERS</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style="color: black;" href="javascript:void(0)" role="button" data-bs-toggle="dropdown">Project</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo base_url() ?>project/catalog/elite-villa">ELITE VILLA</a></li>
              <li><a class="dropdown-item" href="<?php echo base_url() ?>project/catalog/apartment">APARTMENTS</a></li>
              <li><a class="dropdown-item" href="<?php echo base_url() ?>project/catalog/classic-villa">CLASSIC VILLA</a></li>
            </ul>
          </li>        
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style="color: black;" href="javascript:void(0)" role="button" data-bs-toggle="dropdown">Media</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo base_url() ?>testinomial">TESTINOMIALS</a></li>
              <li><a class="dropdown-item" href="<?php echo base_url() ?>news">NEWS AND EVENTS</a></li>
              <li><a class="dropdown-item" href="<?php echo base_url() ?>downloads">DOWNLOADS</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: black;" href="<?php echo base_url() ?>careers">Careers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: black;" href="<?php echo base_url() ?>contact">Contact Us</a>
          </li>
        </ul>
        <!-- Button trigger modal -->
        <button class="btn btn-danger convicity-button" data-bs-toggle="modal" data-bs-target="#leadmodal" type="button">ENQUIRY NOW</button>
      </div>
    </div>
  </nav>
</div>
</body>
</html>