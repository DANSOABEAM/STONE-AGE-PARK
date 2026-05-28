<?php

/* =========================
   DATABASE CONNECTION
========================= */

$host = "localhost";
$user = "root";
$password = "";
$database = "tour_contact";

$conn = new mysqli($host,$user,$password,$database);

/* =========================
   FORM SUBMISSION
========================= */

if(isset($_POST['sendMessage'])){

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

/* SAVE TO DATABASE */

$sql = "INSERT INTO messages(name,email,phone,subject,message)
VALUES('$name','$email','$phone','$subject','$message')";

$conn->query($sql);

/* =========================
   EMAIL
========================= */

$to = "yourgmail@gmail.com";

$email_subject = "New Tour Contact Message";

$email_message = "

New Contact Message

Name: $name

Email: $email

Phone: $phone

Subject: $subject

Message:
$message

";

mail($to,$email_subject,$email_message);

/* =========================
   SMS API SAMPLE
========================= */

/*

USE:
- Hubtel
- Arkesel
- Twilio

SMS TEXT:

'New Tour Message Received.
Check your email inbox.'

*/

/* SUCCESS */

$success = true;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Contact Us</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>

/* =========================
   GLOBAL
========================= */

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{

    background:#08111f;

    color:white;

    overflow-x:hidden;
}

/* =========================
   NAVBAR
========================= */

.navbar{

    position:fixed;

    top:0;
    left:0;

    width:100%;

    display:flex;

    justify-content:space-between;
    align-items:center;

    padding:18px 8%;

    background:rgba(0,0,0,0.4);

    backdrop-filter:blur(10px);

    z-index:1000;
}

.logo{

    font-size:30px;

    font-weight:bold;

    color:#00d9ff;
}

.nav-links{

    display:flex;

    gap:25px;
}

.nav-links a{

    color:white;

    text-decoration:none;

    transition:0.4s;
}

.nav-links a:hover{
    color:#00d9ff;
}

/* =========================
   HERO
========================= */

.hero{

    height:55vh;

    background:
    linear-gradient(rgba(0,0,0,0.6),
    rgba(0,0,0,0.6)),

    url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e');

    background-size:cover;
    background-position:center;

    display:flex;
    justify-content:center;
    align-items:center;

    text-align:center;

    animation:zoom 10s infinite alternate;
}

@keyframes zoom{

from{
    background-size:100%;
}

to{
    background-size:110%;
}

}

.hero-content h1{

    font-size:60px;

    margin-bottom:10px;

    animation:fadeDown 1s ease;
}

.hero-content p{
    color:#ddd;
    font-size:18px;
}

@keyframes fadeDown{

from{
    opacity:0;
    transform:translateY(-40px);
}

to{
    opacity:1;
    transform:translateY(0);
}

}

/* =========================
   CONTACT SECTION
========================= */

.contact-section{

    padding:90px 8%;

    display:grid;

    grid-template-columns:
    repeat(auto-fit,minmax(350px,1fr));

    gap:40px;
}

/* CONTACT INFO */

.contact-info{

    animation:slideLeft 1s ease;
}

.contact-info h2{

    font-size:42px;

    margin-bottom:20px;
}

.contact-info p{

    color:#ccc;

    line-height:1.7;

    margin-bottom:30px;
}

.info-box{

    display:flex;

    gap:15px;

    margin-bottom:25px;

    align-items:flex-start;
}

.info-box i{

    width:55px;
    height:55px;

    background:#00d9ff;

    color:black;

    border-radius:50%;

    display:flex;
    justify-content:center;
    align-items:center;

    font-size:20px;
}

/* FORM */

.contact-form{

    background:rgba(255,255,255,0.08);

    backdrop-filter:blur(15px);

    padding:35px;

    border-radius:25px;

    animation:slideRight 1s ease;
}

.contact-form h2{

    margin-bottom:25px;

    font-size:35px;
}

.form-group{
    margin-bottom:18px;
}

.form-group input,
.form-group textarea{

    width:100%;

    padding:15px;

    border:none;

    border-radius:12px;

    outline:none;

    background:white;
}

.form-group textarea{
    resize:none;
    height:140px;
}

/* BUTTON */

.send-btn{

    width:100%;

    padding:15px;

    border:none;

    border-radius:12px;

    background:#00d9ff;

    color:black;

    font-size:16px;

    font-weight:bold;

    cursor:pointer;

    transition:0.4s;
}

.send-btn:hover{

    background:white;

    transform:translateY(-3px);
}

/* SUCCESS */

.success{

    background:#00d9ff;

    color:black;

    padding:15px;

    border-radius:12px;

    margin-bottom:20px;

    text-align:center;

    font-weight:bold;
}

/* ANIMATIONS */

@keyframes slideLeft{

from{
    opacity:0;
    transform:translateX(-60px);
}

to{
    opacity:1;
    transform:translateX(0);
}

}

@keyframes slideRight{

from{
    opacity:0;
    transform:translateX(60px);
}

to{
    opacity:1;
    transform:translateX(0);
}

}

/* FOOTER */

.footer{

    background:#050b14;

    text-align:center;

    padding:35px;
}

.footer p{
    color:#aaa;
}

/* RESPONSIVE */

@media(max-width:768px){

.hero-content h1{
    font-size:40px;
}

.contact-info h2{
    font-size:32px;
}

.nav-links{
    display:none;
}

}

</style>

</head>
<body>

<!-- =========================
     NAVBAR
========================= -->

<nav class="navbar">

<div class="logo">TravelPro</div>

<div class="nav-links">

<a href="#">Home</a>
<a href="#">Tours</a>
<a href="#">Booking</a>
<a href="#">Contact</a>

</div>

</nav>

<!-- =========================
     HERO
========================= -->

<section class="hero">

<div class="hero-content">

<h1>Contact Us</h1>

<p>We would love to hear from you.</p>

</div>

</section>

<!-- =========================
     CONTACT SECTION
========================= -->

<section class="contact-section">

<!-- LEFT -->

<div class="contact-info">

<h2>Get In Touch</h2>

<p>
Contact us for luxury tours, travel bookings,
vacation packages, and unforgettable travel
experiences around the world.
</p>

<div class="info-box">

<i class="fa fa-phone"></i>

<div>

<h3>Phone</h3>

<p>+233 24 000 0000</p>

</div>

</div>

<div class="info-box">

<i class="fa fa-envelope"></i>

<div>

<h3>Email</h3>

<p>travelpro@gmail.com</p>

</div>

</div>

<div class="info-box">

<i class="fa fa-location-dot"></i>

<div>

<h3>Location</h3>

<p>Accra, Ghana</p>

</div>

</div>

</div>

<!-- RIGHT -->

<div class="contact-form">

<h2>Send Message</h2>

<?php if(isset($success)){ ?>

<div class="success">

Message Sent Successfully

</div>

<?php } ?>

<form method="POST">

<div class="form-group">

<input type="text"
name="name"
placeholder="Full Name"
required>

</div>

<div class="form-group">

<input type="email"
name="email"
placeholder="Email Address"
required>

</div>

<div class="form-group">

<input type="text"
name="phone"
placeholder="Phone Number"
required>

</div>

<div class="form-group">

<input type="text"
name="subject"
placeholder="Subject"
required>

</div>

<div class="form-group">

<textarea
name="message"
placeholder="Your Message"
required></textarea>

</div>

<button class="send-btn"
name="sendMessage">

Send Message

</button>

</form>

</div>

</section>

<!-- =========================
     FOOTER
========================= -->

<footer class="footer">

<p>© 2026 TravelPro Tours. All Rights Reserved.</p>

</footer>

</body>
</html>