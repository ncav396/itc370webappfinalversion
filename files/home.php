<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if (!isset($_SESSION['logged_in'])) {        
    header("Location: index.php");
    exit;
} 

?>
<!DOCTYPE html>
<html>
  <head>
    <style>
      /* Navigation bar styles */
      .sidenav {
        height: 100%;
        width: 190px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        padding-top: 20px;
      }

      .sidenav a {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
      }

      .sidenav a:hover {
        color: #f1f1f1;
      }

      .sidenav a.logout:hover {
        color: #aa2222;
      }

      /* Main content styles */
      .main {
        margin-left: 200px;
        padding: 0px 10px;
      }

      /* Tooltip styles */
      .tooltip {
        position: relative;
        display: inline-block;
        border-bottom: 1px dotted black;
      }

      .tooltip .tooltiptext {
        visibility: hidden;
        width: 120px;
        background-color: black;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;
        position: absolute;
        z-index: 1;
        bottom: 125%;
        left: 50%;
        margin-left: -60px;
        opacity: 0;
        transition: opacity 0.3s;
      }

      .tooltip .tooltiptext::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: transparent transparent black transparent;
      }

      .tooltip:hover .tooltiptext {
        visibility: visible;
        opacity: 1;
      }
           /* Card styles */
           .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 200px;
        display: inline-block;
        text-align: center;
        font-family: arial;
        margin-right: 20px;
      }

      /* Image styles */
      .card img {
        width: 100%;
        height: 200px;
      }

      /* Button styles */
      .card button {
        border: none;
        outline: 0;
        padding: 12px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
      }

      /* Button hover effect */
      .emailbtn:hover {
        font-weight: 700;
      }

    </style>
  </head>
  <body>
    <!-- Navigation bar -->
    <div class="sidenav">
      <a id="btn-section-1" href="#homepage">Homepage</a>
      <a id="btn-section-2" href="#about">About Us</a>
      <a id="btn-section-3" href="#contact">Contact Us</a>
      <a id="btn-section-logout" href="logout.php" class="logout">Log Out</a>
    </div>

    <!-- Main content -->
    <div class="main" id="homepage">
      <!-- Web App section -->
      <div>
        <h2>Homepage</h2>
        <h3>The Docker Web App</h3>

<p>We to start the Docker app we used the provided source code from Blackboard, making modifications as required by the documentation.</p>

<img src="img/pic.jpg" alt="webapp">

<img src="img/showcase2.jpg" alt="contact">

<img src="img/showcase3.jpg" alt="about">

<p>Changed the existing login code to add usernames and passwords using our M-numbers. Session destroy was used to logout of the webapp.</p>

<img src="img/login.jpg" alt="login">

<img src="img/logout.jpg" alt="logout">

<p>Created the contact us page using html links and buttons to open the system email app.</p>

<img src="img/contact.jpg" alt="emailcode">

<p>Portrait images and text was added using the image and paragraph html tags to the existing card system to create the about page. The portrait photos were added to an image folder for the webapp.</p>

<img src="img/about1.jpg" alt="aboutcode">

<p>Please enjoy this code snippet and picture of the website in action:</p>
      </div>
      <div>
      <pre>
&lt;style&gt;
.content {
max-width: 270px;
margin: auto;
}

h1 {
margin-left: -25px;
  color: #5e0009;
}

label {
width: 70px;
  color: #000000;
  font-weight: bold;
display: inline-block;
}

input {
margin: 3px;
}

input:focus, textarea {
outline: none;
}

input[type=&quot;text&quot;]:focus {
  border: 2px solid #5e0009;
  border-radius: 4px;
}

input[type=&quot;password&quot;]:focus {
  border: 2px solid #5e0009;
  border-radius: 4px;
}

input.button {
  margin-left: 125px;
font-weight: 700;
}
&lt;/style&gt;
    </pre>
    </div>

</div>

      <!-- About Us section -->
      <div id="about" style="margin-left: 210px;">
        <h2>About Us</h2>
        
        <h3>Here are the members of the team:</h3><br>

        <!-- Person 1 -->
        <div class="card">
          <img src="img/Payton.jpeg" alt="Payton Zartman">
          <h3>VP of WaterSki Team, PIKE secretary, App Development/Cybersecurity Major</h3>
          <p>Lifts, plays poker, video games, fishing, other cool things.</p>
        </div>

        <!-- Person 2 -->
        <div class="card">
          <img src="img/jacob.jpg" alt="Jacob Renkoski">
          <h3>Jacob Renkoski</h3>
          <p>VP of A-BITS and <br>Application Development Major</p>
          <p>Plays video games, watches YouTube, learns Spanish and computer languages.</p>
        </div>
    
        <!-- Person 3 -->
        <div class="card">
          <img src="img/Nathaniel.jpg" alt="Nathaniel Cave">
          <h3>Nathaniel Cave</h3>
          <p>I'm a 22 year old IT major at Missouri State. I have experience in IT Help Desk and SQL Database management. My hobbies are hiking and cooking.</p>
        </div>
</div>
<!-- Contact/Email Section -->
<div id="contact" style="margin-left: 210px;">
          <h2 style="margin-bottom: -1px;">Contact us via email!</h2>
          <img style="width: 70px; height: 70px;" src="img/email.jpg">
          <div style="margin: 9px;"><a href="mailto:jer993s@missouristate.edu"><button  class="emailbtn">Email Jacob!</button></a></div>
          <div style="margin: 9px;"><a href="mailto:pez36s@missouristate.edu"><button  class="emailbtn">Email Payton!</button></a></div>
          <div style="margin: 9px;"><a href="mailto:cav396@missouristate.edu"><button  class="emailbtn">Email Nathaniel!</button></a></div>
</div>

    <!-- JavaScript for toggling sections -->
    <script>

      // get references to buttons and sections
      const btnSection1 = document.querySelector('#btn-section-1');
      const btnSection2 = document.querySelector('#btn-section-2');
      const btnSection3 = document.querySelector('#btn-section-3');
      const section1 = document.querySelector('#homepage');
      const section2 = document.querySelector('#about');
      const section3 = document.querySelector('#contact');

      section1.style.display = 'none';
        section2.style.display = 'none';
        section3.style.display = 'none';

            // handle click events on navigation buttons
      btnSection1.addEventListener('click', function() {
        section1.style.display = 'block';
        section2.style.display = 'none';
        section3.style.display = 'none';
      });
      btnSection2.addEventListener('click', function() {
        section1.style.display = 'none';
        section2.style.display = 'block';
        section3.style.display = 'none';
      });
      btnSection3.addEventListener('click', function() {
        section1.style.display = 'none';
        section2.style.display = 'none';
        section3.style.display = 'block';
      });
    </script>
  </body>
</html>

