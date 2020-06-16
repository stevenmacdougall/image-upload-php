<!doctype html>
   <html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Image Upload PHP</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   	  <link href="https://fonts.googleapis.com/css?family=PT+Serif|Rufina:700&display=swap" rel="stylesheet">
   	  <link rel="stylesheet" href="stylesheet.css" type="text/css">
   </head>
  <body>
  
  <div class="container">
  	<div class="row">
  	<div class="col-6 offset-3">
  	<div class="wrapper">

<?php

$name = $_FILES['file']['name'];
//$size = $_FILES['file']['size'];
//$type = $_FILES['file']['type'];

$tmp_name = $_FILES['file']['tmp_name'];

if (isset($name)) {
    if(!empty($name)) {

        $location = "uploads/";

        if(move_uploaded_file($tmp_name, $location.$name)) {
            echo '<div class="alert alert-success" role="alert">Uploaded!</div>';
        }

    } else{
        echo '<div class="alert alert-danger" role="alert">Please choose a file</div>';
    }
}


?>
<form action="index.php" method="POST" enctype="multipart/form-data">
    <input type="file"  name="file"><br><br>
    <input type="submit" class="btn btn-secondary btn-lg btn-block" value="Submit">
</form>
</div>
		</div>
	</div>
</div>
</body>
</html>