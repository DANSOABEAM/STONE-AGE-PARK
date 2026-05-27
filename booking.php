<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TravelPro Tours</title>

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

html{
    scroll-behavior:smooth;
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

    background:rgba(0,0,0,0.35);

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
    gap:28px;
}

.nav-links a{
    color:white;
    text-decoration:none;
    transition:0.3s;
    font-size:15px;
}

.nav-links a:hover{
    color:#00d9ff;
}

/* =========================
   HERO SLIDER
========================= */

.hero{
    position:relative;
    height:100vh;
    overflow:hidden;
}

.slide{

    position:absolute;

    width:100%;
    height:100%;

    background-size:cover;
    background-position:center;

    opacity:0;

    transition:1s;
}

.slide.active{
    opacity:1;
}

.overlay{

    position:absolute;

    width:100%;
    height:100%;

    background:rgba(0,0,0,0.55);
}

.hero-content{

    position:absolute;

    top:50%;
    left:50%;

    transform:translate(-50%,-50%);

    text-align:center;

    z-index:10;

    width:90%;
}

.hero-content h1{

    font-size:65px;

    margin-bottom:15px;

    animation:fadeDown 1s ease;
}

.hero-content p{

    color:#ddd;

    font-size:20px;

    margin-bottom:30px;
}

.hero-btn{

    display:inline-block;

    padding:15px 38px;

    background:#00d9ff;

    color:black;

    border-radius:40px;

    text-decoration:none;

    font-weight:bold;

    transition:0.4s;
}

.hero-btn:hover{
    background:white;
    transform:scale(1.05);
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
   TOUR SECTION
========================= */

.tours{
    padding:90px 8%;
}

.section-title{
    text-align:center;
    margin-bottom:45px;
}

.section-title h2{
    font-size:42px;
}

/* GRID */

.tour-grid{

    display:grid;

    grid-template-columns:
    repeat(auto-fit,minmax(280px,1fr));

    gap:25px;
}

/* CARD */

.card{

    background:#101a2c;

    border-radius:20px;

    overflow:hidden;

    transition:0.4s;

    box-shadow:
    0 10px 25px rgba(0,0,0,0.4);
}

.card:hover{
    transform:translateY(-10px);
}

.card img{

    width:100%;

    height:220px;

    object-fit:cover;
}

.card-content{
    padding:22px;
}

.card-content h3{
    font-size:24px;
    margin-bottom:10px;
}

.price{

    color:#00d9ff;

    font-size:28px;

    margin-bottom:15px;

    font-weight:bold;
}

.features p{
    color:#ccc;
    margin:8px 0;
    font-size:14px;
}

/* BUTTON */

.book-btn{

    width:100%;

    padding:13px;

    margin-top:18px;

    border:none;

    border-radius:12px;

    background:#00d9ff;

    color:black;

    font-weight:bold;

    cursor:pointer;

    transition:0.4s;
}

.book-btn:hover{
    background:white;
}

/* =========================
   BOOKING POPUP
========================= */

.popup{

    position:fixed;

    top:0;
    left:0;

    width:100%;
    height:100%;

    background:rgba(0,0,0,0.75);

    display:none;

    justify-content:center;
    align-items:center;

    z-index:2000;

    padding:20px;
}

.popup-box{

    width:100%;
    max-width:950px;

    background:rgba(255,255,255,0.08);

    backdrop-filter:blur(18px);

    border-radius:22px;

    padding:30px;

    animation:popup 0.4s ease;
}

@keyframes popup{

from{
    transform:scale(0.7);
    opacity:0;
}

to{
    transform:scale(1);
    opacity:1;
}

}

.close{

    float:right;

    font-size:32px;

    cursor:pointer;

    color:white;
}

/* FORM */

.popup-box h2{
    margin-bottom:20px;
    text-align:center;
}

.form-grid{

    display:grid;

    grid-template-columns:
    repeat(2,1fr);

    gap:16px;
}

.form-grid input,
.form-grid select,
.form-grid textarea{

    width:100%;

    padding:13px;

    border:none;

    border-radius:12px;

    outline:none;

    background:white;
}

.form-grid textarea{

    resize:none;

    height:100px;

    grid-column:1/-1;
}

.submit-btn{

    grid-column:1/-1;

    padding:14px;

    border:none;

    border-radius:12px;

    background:#00d9ff;

    color:black;

    font-weight:bold;

    cursor:pointer;

    transition:0.4s;
}

.submit-btn:hover{
    background:white;
}

/* =========================
   FOOTER
========================= */

.footer{

    background:#050b14;

    padding:35px 8%;

    text-align:center;
}

.footer p{
    color:#aaa;
}

/* =========================
   RESPONSIVE
========================= */

@media(max-width:768px){

.hero-content h1{
    font-size:40px;
}

.hero-content p{
    font-size:16px;
}

.form-grid{
    grid-template-columns:1fr;
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
<a href="#tours">Tours</a>
<a href="#">Booking</a>
<a href="#">Contact</a>

</div>

</nav>

<!-- =========================
     HERO SLIDER
========================= -->

<section class="hero">

<div class="slide active"
style="background-image:url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e')">

<div class="overlay"></div>

<div class="hero-content">

<h1>Explore Beautiful Destinations</h1>

<p>Luxury tours and unforgettable travel experiences.</p>

<a href="#tours" class="hero-btn">

Explore Tours

</a>

</div>

</div>

<div class="slide"
style="background-image:url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b')">

<div class="overlay"></div>

<div class="hero-content">

<h1>Adventure Starts Here</h1>

<p>Travel with comfort and style around the world.</p>

<a href="#tours" class="hero-btn">

Book Today

</a>

</div>

</div>

</section>

<!-- =========================
     TOURS
========================= -->

<section class="tours" id="tours">

<div class="section-title">

<h2>Popular Tours</h2>

</div>

<div class="tour-grid">

<!-- CARD -->

<div class="card">

<img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e">

<div class="card-content">

<h3>Beach Tour</h3>

<div class="price">$250</div>

<div class="features">

<p><i class="fa fa-check"></i> Luxury Hotel</p>
<p><i class="fa fa-check"></i> Tour Guide</p>
<p><i class="fa fa-check"></i> 3 Days Experience</p>

</div>

<button class="book-btn"
onclick="openForm('Beach Tour')">

Book Now

</button>

</div>
</div>

<!-- CARD -->

<div class="card">

<img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b">

<div class="card-content">

<h3>Mountain Tour</h3>

<div class="price">$450</div>

<div class="features">

<p><i class="fa fa-check"></i> VIP Transport</p>
<p><i class="fa fa-check"></i> Free Meals</p>
<p><i class="fa fa-check"></i> 5 Days Adventure</p>

</div>

<button class="book-btn"
onclick="openForm('Mountain Tour')">

Book Now

</button>

</div>
</div>

<!-- CARD -->

<div class="card">

<img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee">

<div class="card-content">

<h3>Safari Tour</h3>

<div class="price">$700</div>

<div class="features">

<p><i class="fa fa-check"></i> Luxury Resort</p>
<p><i class="fa fa-check"></i> Private Guide</p>
<p><i class="fa fa-check"></i> 7 Days Experience</p>

</div>

<button class="book-btn"
onclick="openForm('Safari Tour')">

Book Now

</button>

</div>
</div>

</div>

</section>

<!-- =========================
     BOOKING POPUP
========================= -->

<div class="popup" id="popup">

<div class="popup-box">

<span class="close"
onclick="closeForm()">

&times;

</span>

<h2>Book Your Tour</h2>

<form action="booking.php" method="POST">

<div class="form-grid">

<input type="text"
name="fullname"
placeholder="Full Name"
required>

<input type="email"
name="email"
placeholder="Email Address"
required>

<input type="text"
name="phone"
placeholder="Phone Number"
required>

<input type="text"
name="country"
placeholder="Country"
required>

<input type="date"
name="start_date"
required>

<input type="date"
name="end_date"
required>

<input type="number"
name="people"
placeholder="Number Of People"
required>

<input type="number"
name="rooms"
placeholder="Rooms Needed"
required>

<select name="hotel_type">

<option>Luxury Hotel</option>
<option>Standard Hotel</option>

</select>

<select name="reservation_type">

<option>Single</option>
<option>Couple</option>
<option>Family</option>
<option>Group</option>

</select>

<input type="hidden"
name="tour_package"
id="tour_package">

<textarea
name="message"
placeholder="Additional Message"></textarea>

<button class="submit-btn"
name="bookTour">

Confirm Booking

</button>

</div>

</form>

</div>

</div>

<!-- =========================
     FOOTER
========================= -->

<footer class="footer">

<p>© 2026 TravelPro Tours. All Rights Reserved.</p>

</footer>

<script>

/* =========================
   HERO SLIDER
========================= */

let slides =
document.querySelectorAll(".slide");

let current = 0;

function showSlides(){

slides.forEach(slide => {
slide.classList.remove("active");
});

slides[current]
.classList.add("active");

}

setInterval(()=>{

current++;

if(current >= slides.length){
current = 0;
}

showSlides();

},5000);

/* =========================
   BOOKING FORM
========================= */

function openForm(tour){

document.getElementById("popup")
.style.display="flex";

document.getElementById("tour_package")
.value=tour;

}

function closeForm(){

document.getElementById("popup")
.style.display="none";

}

</script>

</body>
</html>