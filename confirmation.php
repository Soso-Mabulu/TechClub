<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RSA Tech Club | Professional Tech Solutions in South Africa</title>
  <meta name="description" content="RSA Tech Club provides professional tech solutions in Potchefstroom, South Africa. We specialize in Windows recovery, software error consultations, installation help, tech support, computer repair, IT services, digital solutions, software troubleshooting, hardware installations, data recovery, virus removal, device maintenance, technology consulting, and more. Contact us for expert assistance.">
  <meta name="keywords" content="RSA Tech Club, tech solutions, Potchefstroom, South Africa, Windows recovery, software error consultations, installation help, tech support, computer repair, IT services, digital solutions, software troubleshooting, hardware installations, data recovery, virus removal, device maintenance, technology consulting, affordable tech assistance, reliable IT support, professional computer help, expert tech advice, fast and efficient repairs, remote tech assistance, on-site tech solutions">
  
  <meta name="author" content="Fikiswa Kwani">
  <!-- <link rel="icon" href="/images/Nlogo.png" type="image/png"> -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="styles.css"> -->
  <link rel="icon" href="images/DarkLogo-bg.png" type="image/png">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-image: url("images/techBackground_01.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      background-attachment: fixed;
    }

    /* Set the background color of the text to white */
    .text-white {
      color: #fff;
    }

    /* Set the background color of the text to a lighter color */
    .text-light {
      color: #f1f1f1;
    }

    /* Center the confirmation page content */
    .confirmation-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      flex-direction: column;
      text-align: center;
    }

    .confirmation-heading {
      color: #fff;
      margin-bottom: 20px;
      font-size: 32px;
    }

    .confirmation-text {
      color: #f1f1f1;
      margin-bottom: 40px;
      font-size: 18px;
    }

    .confirmation-details {
      color: #f1f1f1;
      margin-bottom: 20px;
      font-size: 16px;
    }

    .confirmation-button {
      background-color: gray;
      color: #fff;
      border: none;
      padding: 10px 20px;
      text-decoration: none;
      font-size: 16px;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    .confirmation-button:hover {
      background-color: black;
      text-decoration: none;
    }

    /* Navbar styles */
    .navbar {
      background-color: #333;
    }

    .navbar-brand {
      color: #fff;
      font-size: 24px;
      font-weight: bold;
    }

    .navbar-nav .nav-link {
      color: #fff;
      font-size: 18px;
    }

    .navbar-nav .nav-link:hover {
      color: #f1f1f1;
    }

    /* Header styles */
    .header-content {
      padding-top: 100px;
      padding-bottom: 100px;
      text-align: center;
    }

    .header-content h1 {
      font-size: 48px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .header-content p {
      font-size: 18px;
      color: #f1f1f1;
      max-width: 600px;
      margin: 0 auto;
      margin-bottom: 40px;
    }

    /* Footer styles */
    footer {
      background-color: #333;
      color: #f1f1f1;
      padding: 20px 0;
    }

    footer p {
      margin: 0;
    }
  </style>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">RSA Tech Club</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="./services.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#booking">Book Consultation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <section class="bg-primary">
    <div class="container header-content">
      <h1 class="display-4 text-white">Booking Confirmed</h1>
      <p class="lead text-light">Thank you for booking a consultation with RSA Tech Club. We have received your request and will get back to you soon.</p>
      <div class="confirmation-details">
        <h4>Appointment Details:</h4>
        <p>
          <strong>Date:</strong> <span id="dateValue"></span><br>
          <strong>Time:</strong> <span id="timeValue"></span><br>
          <strong>Description:</strong> <span id="descriptionValue"></span><br>
        </p>
        <h4>User Details:</h4>
        <p>
          <strong>Name:</strong> <span id="nameValue"></span><br>
          <strong>Email:</strong> <span id="emailValue"></span><br>
        </p>
      </div>
      <a class="confirmation-button" href="/TechRescue/index.php">Return to Homepage</a>
    </div>
  </section>

  <footer>
    <div class="container text-center">
      <p>&copy; 2023 RSA Tech Club. All rights reserved.</p>
    </div>
  </footer>

  <script>
    // Function to get a cookie value by name
    function getCookie(name) {
      var nameEQ = name + "=";
      var cookies = document.cookie.split(';');
      for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        while (cookie.charAt(0) === ' ') {
          cookie = cookie.substring(1, cookie.length);
        }
        if (cookie.indexOf(nameEQ) === 0) {
          return cookie.substring(nameEQ.length, cookie.length);
        }
      }
      return null;
    }

    // Retrieve the form values from cookies
    var name = getCookie('name');
    var email = getCookie('email');
    var description = getCookie('description');
    var date = getCookie('date');
    var time = getCookie('time');

    // Use the form values as needed
    document.addEventListener('DOMContentLoaded', function() {
      document.getElementById('nameValue').innerText = name;
      document.getElementById('emailValue').innerText = email;
      document.getElementById('descriptionValue').innerText = description;
      document.getElementById('dateValue').innerText = date;
      document.getElementById('timeValue').innerText = time;
    });
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
