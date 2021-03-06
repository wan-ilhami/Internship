<?php
include("connection.php");
session_start();
$desc = $_SESSION['USERLEVELDESC'];
echo "Session: " . $desc . "<br>";
$levelid = $_SESSION['USERLEVELID'];
echo "level ID: " . $levelid . "<br>";
$ID = $_SESSION['USERID'];
echo "User ID: " . $ID;
?>

<!doctype html>
<html lang="en">

<head>
  <title>File Record</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="dashboardStyle.css">
</head>

<body>

  <div class="wrapper d-flex align-items-stretch" style="height: 4000px;">
    <nav id="sidebar">
      <div class="p-4 pt-5" style="position: fixed; width: 18%;">
        <a href="#" class="img logo rounded-circle mb-5" style="background-image: url('logo.png'); width:250px; height:250px; margin-top:-60px "></a>

        <ul class="list-unstyled components mb-5" style="margin-top: -50px;">
          <li class="active">
            <a href="dashboard.php">Home</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
            </ul>
          </li>

          <li>
            <a href="#searchsubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Search</a>
            <ul class="collapse list-unstyled" id="searchsubmenu">
              <li>
                <a href="SearchCode.php">By Code</a>
              </li>
              <li>
                <a href="SearchName.php">By Name</a>
              </li>
            </ul>
          </li>

          <li>
            <a href="Upload.php">Upload Files</a>
          </li>

          <li>
            <a href="Contact.php">Contact</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
            </ul>
          </li>
        </ul>

    </nav>

    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid" style="background-color: #f9f7d9" ;>
          <marquee behavior="scroll" direction="left" scrollamount="10">
            <?php
            if ($levelid == 1) {
              echo "WELCOME ADMIN";
            }
            if ($levelid == 2) {
              echo "WELCOME FIRST USER";
            }
            if ($levelid == 3) {
              echo "WELCOME LAST USER";
            }
            ?> </marquee>
          <button type="button" id="sidebarCollapse" class="btn btn-primary" style="position: fixed; height:30px">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>

          <div>
            <button button type="button" class="logout-btn" data-toggle="modal" data-target="#myModal"> <img class="logout-img" src="logout.png" alt="logout">
            </button>
          </div>
          <!-- Logout Modal -->
          <div class="modal" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content" style="width: 500px; height:200px; margin-top: 150px; text-align:center; border-radius:25px;">
                <!-- Logout Header -->
                <div class="modal-header">
                  <h4 style="text-align: center;">ARE YOU SURE YOU WANT TO LOGOUT?</h4>
                </div>
                <!-- Logout footer -->
                <div class="modal-footer" style="margin: auto; display:block;">
                  <button type="button" class="btn-no" data-dismiss="modal">No</button>
                  <button type="button" class="btn-yes" onclick="location.href = 'index.html';">Yes</button>
                </div>

                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fa fa-bars"></i>
                </button>

                <a class="img logo rounded-circle mb-5" style="background-image: url('UiTM Logo.png')"></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="nav navbar-nav ml-auto">

                  </ul>
                </div>
              </div>
      </nav>

      <h2 class="mb-4">Welcome to List File Record</h2>
      <p>Welcome to System File Record. This is System is about to keep a bundle of file that need to stored.</p>

    </div>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>