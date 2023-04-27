<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MATRIMONI</title>
  <link rel="stylesheet" href="./css/matrimony.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/all.css">
  <link rel="icon" type="image/x-icon" href=".\img\real logo.jpg">
  <style>
    #services {
    width: 100%;
    margin-bottom: 50px;
}

.heading {
    font-size: 3rem;
    margin: 1rem auto;
    text-align: center;
    font-family: system-ui;
    color: #8c3135;
    font-family:head;
}

#services p {
    text-align: center;
    margin-bottom: 1rem;
    font-family: sans-serif;
}

.services-container {
    width: 80%;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    align-content: flex-start;
    justify-content: space-around;
}

.service-item {
    width: 20rem;
    margin: 1rem;
    padding: 10px;
    display: flex;
    flex-shrink: 1;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    transition: all 0.1s linear;
    border-radius: 10px;
    cursor: pointer;
    box-shadow: 3px 3px 10px 0px rgb(0, 0, 0, 0.1);
}

.service-item:hover {
    transform: scale(1.01);
    box-shadow: 5px 5px 15px 0px rgb(0, 0, 0, 0.2);
}

.service-item ul li {
    width: 50px;
    height: 50px;
    color: white;
    list-style: none;
    font-size: 1.2rem;
    display: flex;
    border-radius: 50%;
    align-items: center;
    justify-content: center;
    background-color: #e65000;
}

.service-heading {
    margin: 1rem 0;
    text-align: center;
    color:#8c3135 ;
    font-family: system-ui;
}

article p {
    font-size: 14px;
    color: #000000b7;
}

.service-item:hover p,
.service-item:hover .service-heading {
    color: #000000;
}
.trust h1{
    color: #8c3135;

  }
  .home a{
    /* color: #8c3135; */
    font-family: home;

  }
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

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
</head>

<body>
 
<nav class="navbar navbar-expand-sm navbar-dark">
  <div class="container-fluid home">
    <a class="navbar-brand text-danger fw-bold " href="#"><i class="fa-solid fa-phone"></i>  +1234569870</a>
    <a class="navbar-brand text-danger fw-bold " href="https://mail.google.com"><i class="fa-solid fa-envelope"></i> soul@gmail.com</a>
    <a class="navbar-brand text-danger fw-bold " href="./contact.php"> CONTACT US</a>
  </div>
</nav>
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
        <div class="collapse navbar-collapse justify-content-end  " id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item active mx-3">
              <a class="nav-link fw-bold fs-5  text-uppercase" href="login.php">Login</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link fw-bold fs-5 text-uppercase" href="./form.php">Register</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>

  <div class="container-fluid banner_1">
    <div class="container banner1_content">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-7 col-7 banner1_text">
          <h1 class="text-white fw-bold ms">Matrimonial Search.</h1>
          <h1 class="text-white fw-bold display-3 bm">Best Matching</h1>
          <h1 class=" fw-bold Couples display-4 couple">Couples</h1>
          <p class="fs-6 fw-bold quotes "><q>A Happy Marriage is the union of two good forgivers.</q></p>
        </div>
        <div class="col-xl-6 col-md-6 col-sm-5 col-5 couple_image">
          <img src="./img/bride.png" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid banner2 bg-light">
    <div class="container p-5">
      <section id="services">
        <h2 class="heading"> Find your Special Someone </h2>
        <div class="services-container">
            <div class="service-item">
                <ul>
               <li> <i class="fa-solid fa-pen-to-square"></i></li>
                </ul>
                <article>
                    <h2 class="service-heading"><a href="./login.php"> Sign Up </a></h2>
                    <p>Register for free & put up your Matrimony Profile</p>
                </article>
            </div>
            
            <div class="service-item">
                <ul>
               <li> <i class="fa-solid fa-user-group"></i> </li>
                </ul>
                <article>
                    <h2 class="service-heading"> Connect </h2>
                    <p>Select & Connect with Matches you like</p>
                </article>
            </div>
          
 
    </section>

 <div class="row cards_section">
        <h1 class="text-center my-5 success fw-bold">Matrimony Service with Millions of Success Stories</h1>

        <div class="col-xl-4 mx-auto sec">
          <div class="card" style="width:  20rem;">
            <img src="./img/service 1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Mohan Meera</h5>
              <p class="card-text">Thank you mutual.  I found my soulmate with your help.We were searching for a match all over India</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
        <div class="col-xl-4 mx-auto sec">
          <div class="card" style="width: 20rem;">
            <img src="./img/service 2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Aswin Aysha</h5>
              <p class="card-text">I was searching for my better half. Then we found Aswin's profile. Found the meaning of life. Thank you mutual.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
        <div class="col-xl-4 mx-auto sec">
          <div class="card" style="width:  20rem;">
            <img src="./img/service 3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">John Grace</h5>
              <p class="card-text">Two different professionals, Two different states, a different time of lockdown bring together for the life.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
     
  </div>
  
      <h1 class="text-capitalize text-center fw-bold success mt-5">your trusted matchmaker</h1>
      <div class="row py-5 services">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 feature service-item">
          <p class="text-center display-4 "><ul><li><i class="fa-solid fa-address-card"></i></li></ul></p>
          <h5 class="text-center fw-bold success">Only real profile</h5>
          <p class="text-center">We allow only photo ID matched profiles to connect with you.</p>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 feature service-item">
          <p class="text-center display-4"><ul><li><i class="fa-solid fa-code-compare"></i></li></ul></p>
          <h5 class="text-center fw-bold success">Relevant Matches</h5>
          <p class="text-center">We handpick the right matches as per what you are looking for </p>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 service-item">
          <p class="text-center display-4"><ul><li><i class="fa-solid fa-file-shield"></i></li></ul></p>
          <h5 class="text-center fw-bold success">Security</h5>
          <p class="text-center">We promise to keep your profile data safe.</p>
        </div>
      </div>
      </div>
    </div>
  <div class="container-fluid banner">
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

  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/all.js"></script>

</body>

</html>