<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Text on Image</title>
  <link rel="icon" href="./Images/Icons/Raihana park logo New.png" type="image/x-icon">
  <link rel="stylesheet" href="./css//Mainstyle.css">
  <script src="https://kit.fontawesome.com/b356ad9dc8.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <img class="CoverImage" src="./Images/z_81 - Photo.jpg" alt="Your Image">
    <a href="./Urdu.php"> <button type="button" class="btn btn-primary">Arabice</button></a>

    <div class="Maintext">
      <h1>Raihana <span>Park </span></h1>
    
      <img src="./Images/Icons/Raihana park logo New copy.png" alt="">
    
    </div>
  </div>

  <div class="container2">
    <div class="wrapper">
      <!-- Facebook Icon -->
      <div class="icon phone">
        <span><i class="fa-solid fa-phone"></i></span>
      </div>
      <!-- Twitter Icon -->
      <div class="icon email">
        <span> <i class="fa-regular fa-envelope"></i></span>
      </div>
      <!-- Linkedin Icon -->
      <div class="icon linkedin">

        <span> <i class="fab fa-linkedin-in"></i></span>
      </div>
      <!-- GitHub Icon -->
      <div class="icon whatsapp">

        <span><i class="fa-brands fa-whatsapp"></i></span>
      </div>
    </div>
    <br>
    <br>
    <div class="stickyFooter">
      <div class="logo"><a href="#"><i id="stickylogo" class="fa-solid fa-qrcode"></i></a> <a href="#"><i id="stickylogo" class="fa-solid fa-share-nodes"></i></a></div>
      <!-- <a  href="#">Add to Contact</a> -->
      <button id="Footerbtn">
        <p id="LogoAdd">Add to <br>contact</p> <a id="LogoAdd" href="#"> &nbsp;&nbsp;&nbsp;<i id="stickyadd" class="fa-solid fa-user-plus"></i>
          <!-- <p id="LogoAdd">Contact</p> -->
        </a>
      </button>

    </div>

    <div class="aboutCard">

      <h2>About Us</h2>
      <p class="card-description">Raihana Park is considered the best family and entertainment center and the first of
        its kind in the
        holy city of Karbala. It is also considered one of the most important entertainment centers that receives great
        attention from
        the Residents and visitors from the city of Karbala and other governorate. A number of facilities and services
        that suit Various
        age groups, starting from shops Commercial business that includes various brands International clothing,
        perfumes and accessories
        Other than that, moving to restaurants and cafes Diverse, including entertainment places for children And adults
        are classified among
        the most prominent attractions Tourist in the city.</p>
    </div>
    <div class="otherCards" data-aos="zoom-in-right">
      <h2> Contact Details</h2>
      <div class="contact-details">
        <span>
          <i class="fa-solid fa-phone" id="firstNumber"></i>
        </span>
        <input type="text" id="FirstNumberIcon" value="+964-7735660066" readonly></input>
        <span class="fas fa-copy fa-icn" id="copyIconOne"></span>
        <span id="newicon1"></span>
        <br>

        <br>
        <span><i class="fa-solid fa-phone" id="SecondNumber"></i></span><input type="text" id="SecondNumber" value="+964-7835660066" readonly></input> <span class="fas fa-copy fa-icon" id="copyIconTwo"></span>
        <span id="newicon2"></span>
      </div>
    </div>
    <div class="otherCards" data-aos="zoom-in-right">
      <h2> Location</h2>
      <h3 id="AddressText">
        Holy Karbala - Al-Hur Filka Al-Thawra,<br>
        Al-Hassan Al-Mujtaba Street
      </h3>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3359.9566188640556!2d43.9867584!3d32.6339787!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x155969e354ef3f7d%3A0xcb4e0d1621153011!2z2YXYqtmG2LLZhyDYsdmK2K3Yp9mG2Yc!5e0!3m2!1sen!2sin!4v1710240256386!5m2!1sen!2sin" id="Mapimage" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <br>
      <br>

    </div>
    <div class="otherCards" data-aos="zoom-in-right">
      <a href="./lease.php" id="Applybtn">
        <h2>APPLY FOR LEASE</h2>
      </a>
    </div>
    <div class="otherCards" data-aos="zoom-in-right">
      <a href="./Contact.php" id="Contactbtn">
        <h2>CONTACT US</h2>
      </a>
    </div>
    <div id="FormContent">
      <form method="post">
        <div class="Inform">
          <div class="box">
            <h3>LEASE FORM</h3>
            <div class="name">
              <i class="fa-solid fa-user"></i>
              <input type="text" placeholder="Name" name="name" required autocomplete="off">
            </div>
            <div class="Email">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" id="email" required autocomplete="off">
            </div>
            <div class='mobile'>
              <i class="fa-solid fa-phone"></i>
              <input type="text" placeholder="Mobile" name="mobile" required autocomplete="off">
            </div>
            <div class="message-box">
              <i class="fa-solid fa-message"></i>
              <textarea cols="28" rows="10" placeholder="Message" name="message" id="message" required></textarea>
            </div>
            <div class="button">
              <button id="send" type="submit" name="submit">Send</button>
            </div>
          </div>
        </div>
      </form>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 footer">
      <!-- Youtube Icon -->
      <div class="youtube">
        <span><i class="fab fa-youtube"></i></span>
      </div>
      <!-- Instagram -->
      <div class="instagram">

        <span><a href="https://www.instagram.com/raihanapark.iq?igsh=NTNza3MzcmxvbjZn"><i class="fab fa-instagram"></i></a></span>
      </div>
      <!-- Facebook -->
      <div class="facebook">
        <span><i class="fab fa-facebook-f"></i></span>
      </div>
    </div>

  </div>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 300,
      duration: 1000,
    });
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="vanilla-tilt.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="/Js//script.js"></script>
</body>

</html>