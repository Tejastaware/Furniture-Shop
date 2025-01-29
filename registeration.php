<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<style>
      body {
  background-image: url('img/contact-bg.png');
  background-size: cover; /* Ensures the image covers the entire background */
  background-position: center; /* Centers the image horizontally and vertically */
  background-repeat: no-repeat; /* Prevents the image from repeating */
}
</style>

</head>
<body>

  <?php 
  include 'navigation.php';
  ?>

<center><h2>Registration Form</h2></center>

<div class="container mt-5">
<div class="row justify-content-center">
    <div class="col-md-6">
    <form action="register.php" method="post" class="border p-4 rounded bg-transperont text-dark">
        <label for="username">Name:</label>
            <input type="text" name="username" class="form-control" name="name" placeholder="Plese Enter the Name" required>
        <br>
        <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" name="phone" placeholder="Plese Enter the Password" required>
        <br>
        <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" placeholder="Plese Enter the Email" required>
        <br>
        <label for="message">Address:</label>
            <textarea name="address" class="form-control" rows="2" placeholder="Plese Enter the your Address" required></textarea>
        <br>
        <label for="mobile">Mobile Number:</label>
            <textarea name="mobile" class="form-control" placeholder="Plese Enter the your Mobile No." required></textarea>
        <br>
          <div class="text-center" >
            <a href="register.php">
              <button>Register To HomeTown</button>
            </a>
          </div>
        
    </form>
    </div>
</div>
</div>
<?php 
  include 'footer.php';
?>
</body>
</html>