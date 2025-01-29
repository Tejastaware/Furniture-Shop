<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
      
    <title>Navigation Bar</title>

    <style>
      a {
      font-size:14px;
      font-weight:700
    }
    .superNav {
      font-size:13px;
    }
    .form-control {
      outline:none !important;
      box-shadow: none !important;
    }
    @media screen and (max-width:540px){
      .centerOnMobile {
        text-align:center
      }
    }




    </style>
</head>

    <div class="superNav border-bottom py-2 bg-warning">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 centerOnMobile">
            <span class="d-none d-lg-inline-block d-md-inline-block d-sm-inline-block d-xs-none me-3"><strong>hometown18@gmail.com</strong></span>
            <span class="me-3"><i class="fa-solid fa-phone me-1 text-warning"></i> <strong>1-800-123-1234</strong></span>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block d-md-block-d-sm-block d-xs-none text-end">
            <span class="me-3"><i class="fa-solid fa-truck text-muted me-1"></i><a class="text-muted" href="registeration.php">Registeration</a></span>
            <span class="me-3"><i class="fa-solid fa-truck text-muted me-1"></i><a class="text-muted" href="login.php">Login as:</a></span>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">      
      <div class="container">
      <a class="navbar-brand" href="#">
        <img src="img/logo.webp" alt="Hometown" class="gm-added gm-loaded gm-observing gm-observing-cb" width="190px" loading="lazy">    
      </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
              <a class="nav-link mx-2 text-uppercase" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 text-uppercase" href="product.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 text-uppercase" href="aboutus.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 text-uppercase" href="contact1.php">Contact</a>
           </li>
          </ul>
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
              <a class="nav-link mx-2 text-uppercase" href="#"><i class="fa-solid fa-cart-shopping me-1"></i> Cart</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

</body>
</html>