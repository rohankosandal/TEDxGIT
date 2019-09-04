<?php
if ($_SERVER["REQUEST_METHOD"]!="GET") {
  header("Location:registration.html");
}
 ?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>TEDxKLSGIT | Error</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oxygen:400,700,300'>

      <link rel="stylesheet" href="css/error.css">


</head>

<body>

  <div class="error-wall load-error">
  <div class="error-container">
    <h1>Error</h1>
    <!-- <h3>We have had an error</h3> -->
    <!-- <h4>Error 404</h4> -->
    <!-- <p>Sorry...please check back (click refresh) in just a moment.</p> -->
    <p><h5 style="color:#fff"><?php echo $_GET['error']; ?></h5></p>
    <a href="<?php echo $_GET['link']; ?>">Go Back</a>

  </div>
</div>



</body>

</html>
