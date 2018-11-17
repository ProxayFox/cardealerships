<!doctype html>
<html lang="en">
<head>
    <!--   -->
  <meta charset="utf-8">
  <title>Upload Image</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>  
</head>
<body>
<div class="jumbotron text-center">
    <img id="logo" src="images/iForm.jpg" style="height:150px" alt="Logo">   
</div>

<div class="container-fluid">
    <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
    <form method="post" action="addImage.php" enctype="multipart/form-data" id="comm_form">
        <p>Title <input type="text" name="title" class="required" width="200"></p>
        <p>Image To Upload<input type="file" name="imagename"></p>
        <p>Info <textarea name="info" rows="5" cols="30"></textarea></p>
        <input type="submit" value="Submit">
        <input type="reset" value="Clear">
    </form></div> 
    <div class="col-sm-4"></div>    
  </div> 
</div>
<footer class="container-fluid text-center navbar-fixed-bottom">
    <span class="glyphicon glyphicon-chevron-up"></span>FOOTER<span class="glyphicon glyphicon-chevron-up"></span>
</footer>
</body>
</html>