	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Contact</title>
    <link rel="stylesheet" href="./css/matrimony.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/all.css">
</head>
<style>
.footer-section {
    width: 100%;
    display: flex;
    color: white;
    justify-content: space-around;
    flex-wrap: wrap;
    padding: 1rem 0;
}

.footer-section h2 {
    margin-bottom: 1rem;
    position: relative;
}

.footer-section h2::after {
    content: '';
    width: 4rem;
    height: .2rem;
    background: #e65b00;
    position: absolute;
    top: 2.5rem;
    left: 0;
}

.footer-section p {
    transition: all .2s linear;
    margin-bottom: .6em;
}

a {
    color: white;
    text-decoration: none;
    cursor: pointer;
}

.footer-section p:hover {
    transition: all .2s linear;
    transform: translateX(4px);
}

.footer-section a:hover {
    color: black;
}

.footer-item {
    margin: 1rem;
}

.footer-item ul {
    display: flex;
    justify-content: space-around;
    list-style: none;
}

.footer-item li {
    margin-right: 1rem;
}

.social ul li {
    font-size: 1.2rem;
    cursor: pointer;
    transition: all .2s linear;
}

.social ul li:hover {
    color: black;
    transform: scale(1.1);
    transition: all .2s linear;
}

@media screen and (max-width: 320px) {
    .footer-section {
        flex-direction: column;
        justify-content: flex-start;
        padding-left: 2rem;
    }
}
.success{
  color: #8c3135;
}
.sec:hover{
  transform: scale(1.01);
  box-shadow: 5px 5px 15px 0px rgb(0, 0, 0, 0.2);
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

    <div class="d-flex justify-content-center align-items-center mt-4">
    	
    	<form class="shadow w-450 p-3" 
    	      action="php/signup.php" 
    	      method="post"
    	      enctype="multipart/form-data">

    		<h4 class="display-4 fw-bold fs-1">Create Account</h4><br>
    		<?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

		    <?php if(isset($_GET['success'])){ ?>
    		<div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
			</div>
		    <?php } ?>
		  <div class="mb-3">
		    <label class="form-label fw-bold">Full Name</label>
		    <input type="text" 
		           class="form-control"
		           name="fname"
		           value="<?php echo (isset($_GET['fname']))?$_GET['fname']:"" ?>">
		  </div>

		  <div class="mb-3">
		    <label class="form-label fw-bold">User name</label>
		    <input type="text" 
		           class="form-control"
		           name="uname"
		           value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
		  </div>

		  <div class="mb-3">
		    <label class="form-label fw-bold">Password</label>
		    <input type="password" 
		           class="form-control"
		           name="pass">
		  </div>

		  <div class="mb-3">
		    <label class="form-label fw-bold">Profile Picture</label>
		    <input type="file" 
		           class="form-control"
		           name="pp">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Sign Up</button>
		  <a href="login.php" class="link-secondary fw-bold">Login</a>
		</form>
		
			</div>
			<div class="container-fluid banner mt-4">
  <div class="footer-section">
        <div class="footer-item">
            <h2>Company</h2>
            <p><a href=""> About Us</a></p>
            <p><a href="./contact.php"> Contact Us</a></p>
            <p><a href=""> Our Services</a></p>
            <p><a href=""> Privacy Policy</a></p>
        </div>
        <div class="footer-item">
            <h2>Get Help </h2>
            <p><a href=""> FAQ</a></p>
            <p><a href=""> Retuns </a></p>
            <p><a href=""> Payment Options </a></p>
        </div>
       
        <div class="footer-item social">
            <h2> Follow Us </h2>
            <ul>
                <li> <i class="fa-brands fa-instagram"></i> </li>
                <li> <i class="fa-brands fa-linkedin-in"></i> </li>
                <li> <i class="fa-brands fa-youtube"></i> </li>
                <li> <i class="fa-brands fa-twitter"></i> </li>
            </ul>
        </div>
    </div>
  </div>
</body>
</html>