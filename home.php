<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./css/matrimony.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/all.css">
</head>
<style>
.success{
  color: #8c3135;
  margin-top: 20px;
}
</style>
<body>
	
<div class="container-fluid banner">
            <div class="container">
      <nav class="navbar navbar-expand-lg">

        <a class="navbar-brand logo p-1" href="#">
          <img src="img/real logo.jpg" alt="logo" class="logo" style="width: 70px;">
        </a>
        <p class="text-white h3 soul">Find Your <br> Soulmate</p>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        </div>
        </div>
 
		<div class="container">
			<h1 class="text-center success">WELCOME TO FIND YOUR SOULMATE FAMILY!!!</h1>
		</div>

</body>
</html>





<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
    	
    	<div class="shadow w-350  text-center">
    		<img src="upload/<?=$_SESSION['pp']?>"
    		     class="img-fluid rounded-circle">
            <h3 class="display-4 "><?=$_SESSION['fname']?></h3>
            <a href="logout.php" class="btn btn-warning mb-3">
            	Logout
            </a>
		</div>
    </div>
</body>
</html>

<?php }else {
	header("Location: login.php");
	exit;
} ?>