<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="./css/matrimony.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/all.css">
</head>
<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap");
* {
  margin: 0px;
  padding: 0px;
  font-family: "Poppins", sans-serif;
}

.container .contact {
  background-color: #eecbed;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
  height: 100vh;
}

form {
  background-color: white;
  display: flex;
  flex-direction: column;
  padding: 2vw 4vw;
  width: 60%;
  max-width: 600px;
  border-radius: 10px;
}

form h2 {
  text-align: center;
  color: #e65b00;
  margin-bottom: 20px;
}

form input, textarea {
  border: 0;
  margin: 10px 0px;
  padding: 20px;
  outline: none;
  background: #f5f5f5;
  font-size: 16px;
  border-radius: 10px;
  resize: none;
}

form button {
  background: white;
  color: #e65b00;
  border: 1px solid #e65b00;
  padding: 15px;
  font-size: 1rem;
  outline: none;
  cursor: pointer;
  width: 100%;
  font-weight: bold;
  margin: 20px auto 0;
  border-radius: 30px;
  transition: all .5s ease-in;
}

form button:hover {
  border: 1px solid #e65b00;
  background: #8c3135;
  color: white;
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
<body>
<!-- <div class="container-fluid banner"> -->
    <!-- <div class="container"> -->
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
<div class="container contact">
        <form>
            <h2 class="text-center"> CONTACT</h2>
            <input type="text" id="name" placeholder="Enter Your Name" required>
            <input type="email" id="email" placeholder="Enter Your Email" required>
            <input type="phone" id="phone" placeholder="Enter Your Phone Number" required>
            <input type="text" id="coupon" placeholder="Subject" required>

            <textarea id="message" rows="4" placeholder="Write Something"></textarea>
            <button type="submit">Send</button>
        </form>
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
</body>
</html>