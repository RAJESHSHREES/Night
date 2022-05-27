<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Club</title>
  <link rel="stylesheet" href = "/css/navbar.css" >
  <link rel="stylesheet" href="/css/reservation.css">
  
  </style>
</head>
<body>
  <!-- -----------Header Section------------ -->

  @section('header')
   <section class="header">
      <div class="nav-bar">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="aboutus">About US</a></li>
          <li><a href="/service">Services</a></li>
          <li><a href="/gallery">Gallery</a></li>
          <li><a href="/event">Events</a></li>
          <li><a href="/reservation">Reservation</a></li>
          <li><a href="/contactus">Contact Us</a></li>
        </ul>
      </div>
    <div class="text-box">
        <p>ENJOY THE MUSIC</p>
        <h1>MAKE YOUR NIGHT</h1>
        <a href="#" class="hero-btn" >More Info</a>
      </div>
    </section>
    @show


    <!-- ---------------Content Section--------------->


    <section class="book-table">
      <div class="booktable-row">
        <img src="{{ asset('images/table2.jpg') }}" alt="" >
        <h1>NON STOP PARTY</h1>
        <p>Enjoy the event throughout the entire night. </p>
        
        <a class="hero-btn" href="#"> Book A Table</a>
      </div>

      <div class="booktable-row">
        <img src="{{ asset('images/table2.jpg') }}" alt="" >
        <h1>SPECIAL PROGRAM</h1>
        <p>Enjoy the special progaram every night. </p>
        
        <a class="hero-btn" href="#"> Book A Table</a>
      </div>

      <div class="booktable-row">
        <img src="{{ asset('images/table2.jpg') }}" alt="" >
        <h1>TOP RESIDENCE</h1>
        <p>Enjoy the event throughout the entire night </p>
        
        <a class="hero-btn" href="#"> Book A Table</a>
      </div>
      <!------------form section------------>
<section class="reservation">
  <div class="title">TABLE RESERVATION</div>
  <br>
  <FORM action="#">
     <div class="user-details">
       <div class="input-box">
         <span class="details">Name:</span><br>
         
         <input type="text" class="latter" placeholder="Enter your name"required>
       </div>
       <br>
       <div class="input-box">
         <span class="details">E-mail:</span><br>
         <input type="text" class="latter" placeholder="Enter your email"required>
       </div>
       <br>
       <div class="input-box">
         <span class="details">Phone No:</span><br>
         <input type="number" class="latter"  placeholder="Enter your phone number"required>
       </div>
       <br>
       <div class="input-box">
         <span class="details">Message:</span><br>
         <input type="text" class="latter" placeholder="Enter your message"required>
       </div>
       <br>
       <div class="button">
         <input type="submit" class="value" value="Send message">
       </div> <br>
     </div>
  </FORM>
</section>

   
</body>
</html>