<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Club</title>
  <link rel="stylesheet" href = "/css/navbar.css" >
</head>
<body>
  <!-- -----------Header Section------------ -->
   <section class="header">
      <div class="nav-bar">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About US</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Gallery</a></li>
          <li><a href="#">Events</a></li>
          <li><a href="#">Reservation</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
    <div class="text-box">
        <p>ENJOY THE MUSIC</p>
        <h1>MAKE YOUR NIGHT</h1>
        <a href="#" class="hero-btn" >More Info</a>
      
    </section>


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

    </section>



   
</body>
</html>