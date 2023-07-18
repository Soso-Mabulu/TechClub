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
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" href="images/DarkLogo-bg.png" type="image/png">
  <style>
    /* Global styles */
    body {
      background-image: url("images/whiteBackgound.jpg");
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }

    /* Navbar styles */
    .navbar {
      background-color: #333;
    }
    .navbar-brand {
      font-size: 24px;
      font-weight: bold;
    }
    .navbar-nav .nav-item .nav-link {
      color: #fff;
    }

    /* Section styles */
    #services {
      padding: 60px 0;
    }
    h2.text-center {
      font-size: 36px;
      font-weight: bold;
      margin-bottom: 40px;
    }
    .service-card {
      margin-bottom: 30px;
      text-align: center;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }
    .service-card:hover {
      transform: translateY(-5px);
    }
    .service-icon {
      font-size: 40px;
      margin-bottom: 20px;
      color: #007bff;
    }
    .service-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
      color: #333;
    }
    .service-description {
      margin-bottom: 20px;
      color: #666;
    }
    .service-link {
      color: #007bff;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s ease;
    }
    .service-link:hover {
      color: #0056b3;
    }

    /* Go back button styles */
    .goback-container {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }
    .goback-button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      font-family: Arial, sans-serif;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }
    .goback-button:hover {
      background-color: #0056b3;
    }

    /* Footer styles */
    footer {
      background-color: #333;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }
    footer a {
      color: #fff;
      text-decoration: none;
    }
    footer a:hover {
      text-decoration: underline;
    }

    /* Responsive styles */
    @media (max-width: 767px) {
      h2.text-center {
        font-size: 30px;
      }
      .service-card {
        padding: 10px;
      }
      .service-title {
        font-size: 20px;
      }
    }

    @media (max-width: 575px) {
      .service-title {
        font-size: 18px;
      }
      .service-description {
        font-size: 14px;
      }
      .goback-button {
        font-size: 14px;
      }
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
              <a class="nav-link" href="services.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#booking">Book Consultation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactUs.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section id="services">
      <div class="container">
        <h2 class="text-center mb-5">Our Services</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="service-card">
              <div class="service-icon">
                <i class="fa fa-desktop"></i>
              </div>
              <div class="service-title">Desktop Support</div>
              <div class="service-description">Get assistance with desktop hardware and software issues, installation, configuration, and troubleshooting.</div>
              <a href="#" class="service-link" data-toggle="modal" data-target="#desktopSupportModal">Learn More</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-card">
              <div class="service-icon">
                <i class="fa fa-laptop"></i>
              </div>
              <div class="service-title">Laptop Repair</div>
              <div class="service-description">Repair and optimize your laptop for improved performance and extended lifespan.</div>
              <a href="#" class="service-link" data-toggle="modal" data-target="#laptopRepairModal">Learn More</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-card">
              <div class="service-icon">
                <i class="fa fa-hdd-o"></i>
              </div>
              <div class="service-title">Data Recovery</div>
              <div class="service-description">Retrieve lost, damaged, or accidentally deleted data from your storage devices.</div>
              <a href="#" class="service-link" data-toggle="modal" data-target="#dataRecoveryModal">Learn More</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-card">
              <div class="service-icon">
                <i class="fa fa-lock"></i>
              </div>
              <div class="service-title">Network Security</div>
              <div class="service-description">Protect your network from unauthorized access, viruses, malware, and other cyber threats.</div>
              <a href="#" class="service-link" data-toggle="modal" data-target="#networkSecurityModal">Learn More</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-card">
              <div class="service-icon">
                <i class="fa fa-print"></i>
              </div>
              <div class="service-title">Printer Setup</div>
              <div class="service-description">Get assistance with printer installation, configuration, and troubleshooting.</div>
              <a href="#" class="service-link" data-toggle="modal" data-target="#printerSetupModal">Learn More</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-card">
              <div class="service-icon">
                <i class="fa fa-database"></i>
              </div>
              <div class="service-title">Database Management</div>
              <div class="service-description">Manage and optimize your databases for efficient storage and retrieval of information.</div>
              <a href="#" class="service-link" data-toggle="modal" data-target="#databaseManagementModal">Learn More</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-card">
              <div class="service-icon">
                <i class="fa fa-cloud"></i>
              </div>
              <div class="service-title">Cloud Solutions</div>
              <div class="service-description">Implement cloud-based solutions for enhanced collaboration, storage, and scalability.</div>
              <a href="#" class="service-link" data-toggle="modal" data-target="#cloudSolutionsModal">Learn More</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-card">
              <div class="service-icon">
                <i class="fa fa-code"></i>
              </div>
              <div class="service-title">Software Development</div>
              <div class="service-description">Design, develop, and deploy customized software solutions tailored to your specific needs.</div>
              <a href="#" class="service-link" data-toggle="modal" data-target="#softwareDevelopmentModal">Learn More</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-card">
              <div class="service-icon">
                <i class="fa fa-wifi"></i>
              </div>
              <div class="service-title">Wireless Networking</div>
              <div class="service-description">Set up, secure, and optimize wireless networks for seamless connectivity.</div>
              <a href="#" class="service-link" data-toggle="modal" data-target="#wirelessNetworkingModal">Learn More</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-card">
              <div class="service-icon">
                <i class="fa fa-server"></i>
              </div>
              <div class="service-title">Server Management</div>
              <div class="service-description">Manage, monitor, and optimize server infrastructure for reliable performance.</div>
              <a href="#" class="service-link" data-toggle="modal" data-target="#serverManagementModal">Learn More</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-card">
              <div class="service-icon">
                <i class="fa fa-users"></i>
              </div>
              <div class="service-title">User Support</div>
              <div class="service-description">Provide technical support to end-users, troubleshooting hardware and software issues.</div>
              <a href="#" class="service-link" data-toggle="modal" data-target="#userSupportModal">Learn More</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-card">
              <div class="service-icon">
                <i class="fa fa-cogs"></i>
              </div>
              <div class="service-title">IT Consulting</div>
              <div class="service-description">Offer expert advice and guidance on IT strategies and solutions to optimize business operations.</div>
              <a href="#" class="service-link" data-toggle="modal" data-target="#itConsultingModal">Learn More</a>
            </div>
          </div>
          <!-- Add more services here -->
          <!-- Service 13 -->
          <div class="col-md-4">
            <div class="service-card">
              <div class="service-icon">
                <i class="fa fa-wrench"></i>
              </div>
              <div class="service-title">Hardware Repair</div>
              <div class="service-description">Repair faulty hardware components and ensure optimal performance.</div>
              <a href="#" class="service-link" data-toggle="modal" data-target="#hardwareRepairModal">Learn More</a>
            </div>
          </div>
          <!-- Service 14 -->
          <div class="col-md-4">
            <div class="service-card">
              <div class="service-icon">
                <i class="fa fa-shield"></i>
              </div>
              <div class="service-title">Cybersecurity</div>
              <div class="service-description">Protect your systems and data from cyber threats and breaches.</div>
              <a href="#" class="service-link" data-toggle="modal" data-target="#cybersecurityModal">Learn More</a>
            </div>
          </div>
          <!-- Service 15 -->
          <div class="col-md-4">
            <div class="service-card">
              <div class="service-icon">
                <i class="fa fa-camera"></i>
              </div>
              <div class="service-title">CCTV Installation</div>
              <div class="service-description">Install and configure CCTV systems for enhanced security and surveillance.</div>
              <a href="#" class="service-link" data-toggle="modal" data-target="#cctvInstallationModal">Learn More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="goback-container">
        <a class="goback-button" href="index.php">Go Back</a>
      </div>
      <br>
      <br>

    </section>

  </main>

  <footer>
    <div class="container">
      <p class="text-center">© 2023 RSA Tech Club. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    </div>
  </footer>

  <!-- Service Modals -->

  <!-- Desktop Support Modal -->
  <div class="modal fade" id="desktopSupportModal" tabindex="-1" role="dialog" aria-labelledby="desktopSupportModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="desktopSupportModalLabel">Desktop Support</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Our desktop support service provides assistance with hardware and software issues, installation, configuration, and troubleshooting. We help you keep your desktop systems running smoothly and efficiently.</p>
          <p>Contact us to get reliable and prompt desktop support.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Laptop Repair Modal -->
  <div class="modal fade" id="laptopRepairModal" tabindex="-1" role="dialog" aria-labelledby="laptopRepairModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="laptopRepairModalLabel">Laptop Repair</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Our laptop repair service focuses on diagnosing and fixing hardware and software issues to restore your laptop's performance. We can repair various components and optimize your laptop for better efficiency and longevity.</p>
          <p>Contact us for professional laptop repair services.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Data Recovery Modal -->
  <div class="modal fade" id="dataRecoveryModal" tabindex="-1" role="dialog" aria-labelledby="dataRecoveryModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="dataRecoveryModalLabel">Data Recovery</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Our data recovery service helps you retrieve lost, damaged, or accidentally deleted data from your storage devices. Whether it's a hard drive, SSD, USB drive, or memory card, we have the expertise to recover your valuable data.</p>
          <p>Contact us to discuss your data recovery needs and get professional assistance.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Network Security Modal -->
  <div class="modal fade" id="networkSecurityModal" tabindex="-1" role="dialog" aria-labelledby="networkSecurityModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="networkSecurityModalLabel">Network Security</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Our network security service ensures the protection of your network infrastructure from unauthorized access, viruses, malware, and other cyber threats. We implement robust security measures and provide ongoing monitoring and maintenance to keep your network secure.</p>
          <p>Contact us to strengthen your network security and safeguard your critical data.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Printer Setup Modal -->
  <div class="modal fade" id="printerSetupModal" tabindex="-1" role="dialog" aria-labelledby="printerSetupModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="printerSetupModalLabel">Printer Setup</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Our printer setup service assists you with the installation, configuration, and troubleshooting of printers. We ensure that your printers are properly set up and connected, allowing you to print efficiently and without issues.</p>
          <p>Contact us for reliable printer setup services.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Database Management Modal -->
  <div class="modal fade" id="databaseManagementModal" tabindex="-1" role="dialog"
    aria-labelledby="databaseManagementModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="databaseManagementModalLabel">Database Management</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Our database management service helps you effectively manage and optimize your databases. We ensure efficient storage, retrieval, and organization of your data, helping you make the most of your information resources.</p>
          <p>Contact us for expert database management solutions.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Cloud Solutions Modal -->
  <div class="modal fade" id="cloudSolutionsModal" tabindex="-1" role="dialog" aria-labelledby="cloudSolutionsModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="cloudSolutionsModalLabel">Cloud Solutions</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Our cloud solutions service enables you to leverage cloud technologies for enhanced collaboration, storage, and scalability. We help you migrate to the cloud, set up cloud infrastructure, and optimize your cloud-based systems.</p>
          <p>Contact us to explore the benefits of cloud solutions for your business.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Software Development Modal -->
  <div class="modal fade" id="softwareDevelopmentModal" tabindex="-1" role="dialog"
    aria-labelledby="softwareDevelopmentModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="softwareDevelopmentModalLabel">Software Development</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Our software development service offers custom software solutions tailored to your specific needs. From initial design to development and deployment, we ensure that your software aligns with your business goals and delivers optimal functionality.</p>
          <p>Contact us to discuss your software development requirements.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Wireless Networking Modal -->
  <div class="modal fade" id="wirelessNetworkingModal" tabindex="-1" role="dialog"
    aria-labelledby="wirelessNetworkingModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="wirelessNetworkingModalLabel">Wireless Networking</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Our wireless networking service helps you set up, secure, and optimize wireless networks. We ensure seamless connectivity and robust wireless performance, allowing you to stay connected and productive.</p>
          <p>Contact us to enhance your wireless networking infrastructure.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Server Management Modal -->
  <div class="modal fade" id="serverManagementModal" tabindex="-1" role="dialog"
    aria-labelledby="serverManagementModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="serverManagementModalLabel">Server Management</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Our server management service ensures the smooth operation of your server infrastructure. We handle server configuration, monitoring, and maintenance, optimizing performance and minimizing downtime.</p>
          <p>Contact us for reliable and efficient server management solutions.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- User Support Modal -->
  <div class="modal fade" id="userSupportModal" tabindex="-1" role="dialog" aria-labelledby="userSupportModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="userSupportModalLabel">User Support</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Our user support service provides technical assistance to end-users, helping them resolve hardware and software issues. We offer prompt and reliable support to ensure uninterrupted productivity.</p>
          <p>Contact us for efficient and responsive user support.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- IT Consulting Modal -->
  <div class="modal fade" id="itConsultingModal" tabindex="-1" role="dialog" aria-labelledby="itConsultingModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="itConsultingModalLabel">IT Consulting</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Our IT consulting service offers expert advice and guidance on IT strategies and solutions. We help you optimize your IT infrastructure, streamline processes, and leverage technology for business growth and efficiency.</p>
          <p>Contact us for professional IT consulting services.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal for Cybersecurity -->
  <div class="modal fade" id="cybersecurityModal" tabindex="-1" role="dialog" aria-labelledby="cybersecurityModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="cybersecurityModalLabel">Cybersecurity</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Protect your digital assets and sensitive information from cyber threats. Our cybersecurity services include:</p>
          <ul>
            <li>Network security assessment</li>
            <li>Firewall configuration and management</li>
            <li>Malware detection and removal</li>
            <li>Data encryption</li>
            <li>Security incident response</li>
            <li>Security awareness training</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <!-- CCTV Installation Modal -->
  <div class="modal fade" id="cctvInstallationModal" tabindex="-1" role="dialog"
    aria-labelledby="cctvInstallationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="cctvInstallationModalLabel">CCTV Installation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Our CCTV installation service helps you set up surveillance systems for enhanced security. We provide professional installation and configuration of CCTV cameras, ensuring comprehensive coverage and reliable monitoring.</p>
          <p>Contact us for expert CCTV installation services.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="script.js"></script>
<script>
  $(document).ready(function () {
    $('.learn-more').click(function () {
      var targetModal = $(this).attr('data-target');
      $(targetModal).modal('show');
    });
  });
</script>>

</html>
