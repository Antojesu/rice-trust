<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charity Website</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
        }
        /* Top Bar */
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background:rgb(72, 255, 0);
            color: white;
            padding: 10px 20px;
        }
        .logo img {
            height: 40px;
        }
        .contact-info span {
            margin-right: 15px;
        }
        .admin-login a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        /* Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #333;
            padding: 15px;
            position: relative;
        }
        .nav-list {
            list-style: none;
            display: flex;
        }
        .nav-list li {
            position: relative;
            margin: 0 15px;
        }
        .nav-list a {
            color: white;
            text-decoration: none;
            padding: 10px;
            display: block;
        }
        .dropdown-menu {
            display: none;
            position: absolute;
            background: white;
            list-style: none;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            top: 100%;
            left: 0;
            width: 150px;
        }
        .dropdown:hover .dropdown-menu,
        .dropdown-menu:hover {
            display: block;
        }
        .dropdown-menu a {
            color: black;
            padding: 8px;
            display: block;
        }
        .menu-toggle {
            display: none;
            font-size: 24px;
            color: white;
            cursor: pointer;
        }
        @media (max-width: 768px) {
            .nav-list {
                display: none;
                flex-direction: column;
                background: #333;
                position: absolute;
                top: 50px;
                left: 0;
                width: 100%;
                padding: 10px;
            }
            .nav-list.active {
                display: flex;
            }
            .menu-toggle {
                display: block;
            }
            .dropdown-menu {
                position: relative;
                width: 100%;
            }
        }
       
        
        /* Footer */
        .footer-container {
            background: #222;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
        }
        .header {
            background-color: #88dd6e; 
            padding: 10px 20px;
            text-align: center;
            border-bottom: 2px solid #eaecee;
            margin-bottom: 20px;
        }
        .header img {
            max-height: 50px;
        }
        .header .contact-info a {
            text-decoration: none;
        }
        @media (max-width: 576px) {
            .header .row {
                flex-direction: column;
                text-align: center;
            }
            .header .contact-info {
                margin-top: 10px;
            }
        }
        .header a{
          text-decoration: none;
                }
        .public-disclosure {
            background-color: orange;
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
        }
        .nav-link {
            font-weight: bold;
        }
        .h1{
          text-align: center;
        }
        .content{
          text-align: center;
        }.counter{
          background-color: #f8f9f9;
          padding: 10px 20px;
          text-align: center;
         font-size: 30px;
         box-shadow: 0 2px 5px rgba(0,0,0.1);
         margin-top: 20px;
        }  
        .navbar-items{
    box-sizing: border-box;
    margin: 0%;
    padding: 0%;
    text-transform: capitalize;

}
.navbar{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 95%;
    margin: 2% auto;
    padding: 2%;
    height: 85px;
    border-radius: 27px;
    background-color: #fff;
    box-shadow: rgba(100,100,111,0.2)0px 7px 29px 0px;
}

.navbar-items{
    flex: 1;
    text-align:right;
}
.navbar ul li{
    position: relative;
    list-style: none;
    display: inline-block;
    padding: 0;
    font-weight: 500;
    font-size: 23px;
    margin: 0 15px;
}
.navbar ul li a{
    text-decoration: none;
    color: rgb(4, 5, 2);
    letter-spacing: 1px;
    

}
.navbar ul li a:hover{
    color:red;
    transition: all 0.5s linear;
}
.burger{
    display: none;
}
@media only screen and (max-width:761px)
{
    .navbar{
        padding: 2% 4%;
    }
    .navbar-items{
        position: absolute;
        height: 84vh;
        width: 200px;
        top: 106px;
        right: 15px;
        text-align: left;
        border-radius: 2;
        transition: all ls ease-out;
    }
    .nsvbar ul li{
        display: block;
        padding: 2px 0 34px;
    }
    .navbar-items ul{
        padding: 98px 51px 8px 49px;
    }
    .navbar ul li a{
        color: #fff;
    }
    .burger{
        display: block;
        z-index: 3;
        position:absolute;
        top: 25px;
        right: 8px;
        cursor: pointer;
        font-size: 33px;
        color: #2e6476;
    }
 
    @media (max-width: 768px) {
            .nav-list {
                display: none;
                flex-direction: column;
                background: #333;
                position: absolute;
                top: 50px;
                left: 0;
                width: 100%;
                padding: 10px;
            }
            .nav-list.active {
                display: flex;
            }
            .menu-toggle {
                display: block;
            }
            .dropdown-menu {
                position: relative;
                width: 100%;
            }
        }
}
.center {
   text-align: center; 
  } 
  .donate-button{
    background-color: orange;
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            -webkit-box-reflect: below
    tpx linear gradient(transparent #0005);
    box-shadow: 0 0 5px #03e914, 0 0 15px #03e914,
    0 0 25px #03e914, 0 0 100px #03e9f4;
  }
  .navbar ul li a{
    color: black;
    background-color:whitesmoke;
  }
  .marquee-container{
    padding: 5px;
    margin-top: 10px;
    text-align:center;
  }
  .marquee-container marquee{
    font-size: 18px;
    font-weight: bold;
    color: #000;
    
    
  }
  @media (max-width: 768px){
    .marquee-container{
      margin-top: 50px;
      font-size: 16px;
    }
  }
  .marquee-container{
    position:relative;
    z-index: 1;
  }
  .h1 h2 h3 h4{
    font-size: 2rem;
  }
  @media (max-width:768px){
h1 h2 h3 h4{
  font-size: 1.5em;
}
  }
  .mission{
    background-color: #95bcde;
    padding:20px;
    border-radius: 10px;
    text-align: center;
    margin: 20px 0;
    box-shadow: 0 4px 8px rgba(0,0,0.1);
  }
  body{
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .service{
            text-align: center;
            padding: 50px 20px;
            background-color: #fdfbf6;
        }
        .service-section h1{
            font-size: 36px;
            margin-bottom: 30px;
            color: #333;
        }
        .service-container{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .service-member{
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            display: flex;
            flex-direction: column;
        }
        .service-member img{
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .service-info{
            padding: 15px;
            background-color: #e86737;
            color: white;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 200px;
        }
        .service-info h2{
            margin: 0;
            font-size: 20px;
        }
        .service-info p{
            margin: 5px 0 0;
            font-size: 16px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-box-orient: vertical;
        }
        body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f5f5f5;
}

.profile-section {
  text-align: center;
  padding: 50px 20px;
  background-color: #fdfbf6;
}

.profile-section h1, .profile-section h2 {
  font-size: 36px;
  margin-bottom: 30px;
  color: #333;
}

/* Main Profiles (Patron, Organiser, Trustee) */
.profile-box {
  display: flex;
  align-items: center;
  background-color: #fff;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  margin: 20px auto;
  max-width: 800px; /* Limit the width of the box */
  padding: 10px;
}

.profile-box img {
  width: 250px;
  height: 250px;
  border-radius: 50%;
  object-fit: cover;
  margin-right: 20px;
}

.profile-info {
  text-align: left;
}

.profile-info h2 {
  margin: 0;
  font-size: 24px;
  color: #e86737;
}

.profile-info p {
  margin: 5px 0 0;
  font-size: 16px;
  color: #333;
}

/* Volunteer Grid */
.volunteer-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  flex-wrap: wrap;
  justify-content: center;
  gap: 15px;
  margin-top: 30px;
}

.volunteer-box {
  background-color: #fff;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  width: 300px;
  text-align: center;
  padding: 10px;
}

.volunteer-box img {
  width: 220px;
  height: 220px;
  border-radius: 50%;
  object-fit: cover;
  margin-bottom: 8px;
}

.volunteer-box p {
  margin: 10px 0 0;
  font-size: 16px;
  color: #333;
}
<!--about_us-->
body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
.container1 {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .about-text {
            flex: 1;
            padding: 20px;
        }
        .about-text h2 {
            color: #0056b3;
        }
        .about-text p {
            line-height: 1.6;
            color: #333;
        }
        .read-more-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            color: #fff;
            background-color: #28a745;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .read-more-btn:hover {
            background-color: #218838;
        }
        .video-section {
            flex: 1;
            text-align: center;
            padding: 20px;
        }
        .video-section video {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        <!--news_update-->
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container1 {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin: 20px auto;
            max-width: 1200px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .about-section {
            width: 65%;
        }

        .about-section h1 {
            color: #2f5d37;
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .about-section p {
            margin: 10px 0;
            color: #555;
        }

        .about-section .read-more-btn {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            color: #fff;
            background-color: #ff7f27;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
        }

        .about-section .read-more-btn:hover {
            background-color: #e96b21;
        }

        .news-section {
            width: 30%;
            background-color: #ffeccf;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #ff7f27;
        }

        .news-section h2 {
            font-size: 1.5rem;
            color: #2f5d37;
            margin-bottom: 10px;
        }

        .news-section p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 10px;
        }

        .news-section a {
            color: #ff7f27;
            text-decoration: none;
            font-weight: bold;
        }

        .news-section a:hover {
            text-decoration: underline;
        }
        /* Progress Bar Styling */
        #progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            width: 0;
            height: 5px;
            background-color: green;
            z-index: 9999;
        }

        /* Content Styling */
        .content {
            height:800px; /* Simulate long content */
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        .top-bar {
            background-color: #8dde75;
            padding: 10px 20px;
        }
        .nav-link {
            font-weight: bold;
        }
        .donate-btn {
            background-color: #ffcc00;
            border: none;
            padding: 5px 15px;
            font-weight: bold;
        }
        @media (max-width: 768px) {
            .nav-list {
                display: none;
                flex-direction: column;
                background: #333;
                position: absolute;
                top: 50px;
                left: 0;
                width: 100%;
                padding: 10px;
            }
            .nav-list.active {
                display: flex;
            }
            .menu-toggle {
                display: block;
            }
            .dropdown-menu {
                position: relative;
                width: 100%;
            }
        }
        .top-bar {
            background-color: #8dde75;
            padding: 10px 20px;
        }
        .nav-link {
            font-weight: bold;
        }
        .donate-btn {
            background-color: #ffcc00;
            border: none;
            padding: 5px 15px;
            font-weight: bold;
        }
        @media (max-width: 768px) {
            .top-bar {
                flex-direction: column;
                text-align: center;
            }
            .top-bar div {
                margin-bottom: 5px;
            }
            .navbar-nav {
                text-align: center;
            }
            .navbar-nav .nav-item {
                margin-bottom: 5px;
            }
        }
        
    </style>
</head>
<body>
    
<div class="top-bar d-flex flex-column flex-md-row justify-content-between align-items-center text-center">
        <div class="d-flex align-items-center">
            <img src="logo.png" alt="Logo" height="40">
            <span class="ms-2 fw-bold">RICE TRUST</span>
        </div>
        <div>
            <button class="donate-btn">DONATE NOW</button>
        </div>
        <div>
            <span>Call Us: +91-996-5540741</span>
            <span class="ms-3">Email: tmsrajan@yahoo.co.in</span>
            <a href="#" class="ms-3 text-dark">ADMIN</a>
        </div>
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About us</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Organisation Profile</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Mission</a></li>
                            <li><a class="dropdown-item" href="#">Vision</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Documents</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Gallery</a></li>
                </ul>
                <div class="text-center mt-2">
                    <a href="#" class="me-2"><img src="facebook.png" height="25"></a>
                    <a href="#" class="me-2"><img src="instagram.png" height="25"></a>
                    <a href="#"><img src="whatsapp.png" height="25"></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="logo"><img src="logo.jpg" alt="RICE TRUST"></div>
        <div class="contact-info">
            <span><i class="fas fa-envelope"></i> Email:tmsrajan@yahoo.co.in</span>
            <a href="tel:+919965540741"><span><i class="phone"></i>Call Us: +91-996-5540741</span></a>
            <a href="donation.php"><button class="donate-button">DONATE NOW</button></a>
        </div>
        <div class="admin-login"><a href="#">Admin</a></div>
    </div>
    
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="menu-toggle" id="mobile-menu">
            <i class="fas fa-bars"></i>
        </div>
        <ul class="nav-list">
            <li><a href="#">Home</a></li>
            <li class="dropdown">
                <a href="#">Projects <i class="fas fa-caret-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Education</a></li>
                    <li><a href="#">Healthcare</a></li>
                </ul>
            </li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact</a></li>
            <li class="donate-now"><a href="#">Donate Now</a></li>
        </ul>
    </nav>
    
    <!-- marquee -->
    <div class="marquee-container">
  <a href="donation.php"><marquee behavior="scroll" direction="left" ><button class="donate-button">DONATE NOW</button></marquee> </a> 
    </div>

    <div>
      <h2 class="center">RURAL INTEGRATED CHILDCARE AND EDUCATION TRUST</h2>
    <div class="counter">
        Visitors Count: <span id="visitorCount">0</span>
    </div>
</body>
 <script>
        // Check if the 'visitorCount' exists in localStorage
        let count = localStorage.getItem('visitorCount');
        if (!count) {
            // Initialize visitor count if it doesn't exist
            count = 0;
        } else {
            // Increment the count if it exists
            count = parseInt(count) + 1;
        }

        // Save the updated count back to localStorage
        localStorage.setItem('visitorCount', count);

        // Display the count in the webpage
        document.getElementById('visitorCount').textContent = count.toString().padStart(5, '0');
    </script>
    <body>
        <!-- Background Image Section -->
      <div style="
          background: url('293678001_2201699676653091_4060767419532220421_n.jpg') no-repeat center center; /* Replace 'your-image.jpg' with the correct path */
          background-size: cover;
          height: 70vh; /* Adjust the height for the section */
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          color: white; /* White text for contrast */
          text-align: center;">
      </div>
      <!--mission-->
      <section class="mission">
      <h1>OUR MISSION</h1>
      <h5>We would like to ameliorate the distress of the poor, the marganilaized sections
        of the society and the needy through Charitable Actions in order to build a better
        world for the present as well as future generartions
      </h5>
    </section>
  <!-- Additional Content Section -->
      <div class="content">
          <h2>OUR LOCATION</h2>
<a href="https://maps.app.goo.gl/2egAVLd8dPe5rxVB7" target="_blank">
    <img src="map.jpg" alt="Map" style="width:50%; border:1px solid #ccc;">
    <p>Click on the map to view our location on Google Maps.</p>
</a><br>
<!--our_motto-->
        <section class="mission">
              <h2>OUR MOTTO</h2>
              <h5>Our Trust is committed  to instill human values among the children and the youth  so as to lead a happy and successful life.
          </h5>
        </section>
          <hr>
      </div>
    </div>
    <!--news update-->
    <div class="container1">
      <!-- About Section -->
      <div class="about-section">
          <h1>Welcome To RICE TRUST</h1>
          <p>Rice Trust is to help others
            We are all individuals who are interested in the wellfare of our fellow human begings.
          RURAL INTEGRATED CHILDCARE AND EDUCATION TRUST is managed by the managing Trustee, Financial Trustee and other Tustees.
          </p>
          <a href="about_us.html" class="read-more-btn">Read More</a>
      </div>

      <!-- News Section -->
      <div class="news-section">
          <h2>News & Updates</h2>
          <p><strong>GROUP IV Exams materials</strong> these whatsapp group will help you to study for the group IV exams <a href="#">Click Here To join The WHATSAPP group</a></p>
          <p>By Clicking the link you will be directed to the Whatsapp group where you can enroll yourself fully for preparing Group IV Exams <a href="#">Click the link to enroll</a>.</p>
      </div>
  </div>

    <section class="service">
      <h1>TRUST ACTIVITES</h1>
      <div class="service-container">
          <div class="service-member">
              <img src="2.jpg" alt="">
              <div class="service-info">
                  <h2>Trustees and Volunteers having meeting with Mr. Antony Lloyd and Mr Shannon Vassou to discuss the future charitable activites at Melamanjampatty</h2>
              </div>
          </div>
          <div class="service-member">
              <img src="3.jpg" alt="">
              <div class="service-info">
                  <h2>Independence day celebration at our study centre at Kolarpatty village- competitions conducted and prizes handed over to the children</h2>
                  
              </div>
          </div>
          <div class="service-member">
            <img src="4.jpg" alt="">
            <div class="service-info">
                <h2>COVID-19 Welfare scheme -distribution of rice and provisions to a widow</h2>
               
            </div>
        </div>
        <div class="service-member">
          <img src="5.jpg" alt="">
          <div class="service-info">
              <h2>Study centre at Malaiadipatty village -distribution of stationery materials to the poor children - helping .</h2>
              
          </div>
      </div>
      </div>
      </div>
</section>
<!--about us-->
<div class="container1">
  <div class="about-text">
      <h2>About Us</h2>
      <p>
          We are all individuals who are interested in the wellfare of our fellow human begings.
          RURAL INTEGRATED CHILDCARE AND EDUCATION TRUST is managed by the managing Trustee, Financial Trustee and other Tustees.
      </p>
      <p>
          Our Organisation is registered under the Indian Trust Act, 1882.Our Registration number is 598/2008.
          We also registered an Amendment deed vide no 02/2021. The Trustees responsibilities are well defined in accordance with our Trust
          Deed.
      </p>
      <a href="about_us.html" class="read-more-btn">Read More</a>
  </div>
  <div class="video-section">
      <video controls>
          <source src="vd.mp4" type="video/mp4">
          Your browser does not support the video tag.
      </video>
  </div>
</div>

<section class="profile-section">
  <h1>OUR TEAM</h1>

  <!-- Patron, Organiser, Trustee Profiles -->
  <div class="profile-box">
    <img src="patron.jpg" alt="Patron">
    <div class="profile-info">
      <H3>PATRON</H3>
      <h2>MR.THOMAS PATHINATHAN</h2>
      <h2>M.Sc., M.C.A., B.Ed.,</h2>
      <p>Retired teacher & social worker<br> Rural integrated childcare and education trust</p>
        <p>14-B Jhansi Rani Street, Seshayee Nagar, K.K Nagar, TrichY-620021
      </p>
    </div>
  </div>

  <div class="profile-box">
    <img src="Susai.jpg" alt="Organiser">
    <div class="profile-info">
      <H3>FOUNDER AND FINANCIAL TRUSTEE</H3>
      <h2>MR. THOMAS MARIA SOOSAI RAJAN</h2><br>
      <br>
      <p>B.Sc., B.Ed., D.COMM.(CATHOLIC UNIVERSITY OF LYON,FRANCE)</p>
    </div>
  </div>

  <div class="profile-box">
    <img src="jesu.jpg" alt="Trustee">
    <div class="profile-info">
      <H3>MANAGING TRUSTEE</H3>
      <h2>Mr.JESU SELVARAJ</h2>
      <p></p>
    </div>
  </div>

  <!-- Volunteers Section -->
  <h2>Volunteers</h2>
  <div class="volunteer-container">
    <div class="volunteer-box">
      <h5>MR.ARUN KUMAR A</h5>
      <h5>M.Sc., B.Ed</h5>
      <P>CO-ORDINATOR</P>
    </div>
  </div>
  <div class="volunteer-container">
    <div class="volunteer-box">
      <h5>MRS. FELICITA A</h5>
      <h5>M.Sc., B.Ed</h5>
      <P>CO-ORDINATOR</P>
    </div>
  </div>
  <div class="volunteer-container">
    <div class="volunteer-box">
      <h5>INFANTA JESU</h5>
      <h5>M.A., M.BA., B.Ed</h5>
      <P>CO-ORDINATOR</P>
    </div>
  </div>
  <div class="volunteer-container">
    <div class="volunteer-box">
      <h5>ANTONY JESU</h5>
      <h5>B.Sc (COMPUTER SCIENCE)</h5>
      <P>CO-ORDINATOR AND WEB DESIGNER</P>
    </div>
  </div>
  
  </div>
</section>
    
    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <p>&copy; 2025 Charity Website. All Rights Reserved.</p>
        </div>
    </footer>
    
    <script>
        $(document).ready(function () {
            $("#mobile-menu").click(function () {
                $(".nav-list").toggleClass("active");
            });
        });
    </script>
    
</body>
</html>
