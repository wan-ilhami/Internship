
<?php
include("connection.php");
session_start();
$desc = $_SESSION['USERLEVELDESC'] ;
echo "Session: ".$desc."<br>";
$levelid = $_SESSION['USERLEVELID'];
echo "level ID: ".$levelid."<br>";
$ID = $_SESSION['USERID'];
echo "User ID: ".$ID;

if(isset($_POST['subcodeID']))
{
    foreach($_POST['subcodeID'] as $c)
   $_SESSION['searchsubcode'] = $c;
  // $b = $_POST['codeID'];
  print_r($c);
}

?>


<!DOCTYPE html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css;">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font: 16px Arial;
    }

    .center {
      color: rgb(0, 0, 0);
      width: 1000px;
      line-height: 40px;
      text-align: left;
      margin-top: 40px;
      margin-left: auto;
      margin-right: auto;
      border: 1px solid grey;
    }

    tr,
    th,
    td {
      text-align: left;
      border: 1px solid grey;
    }
  </style>
</head>


<html lang="en">

<head>
  <title>File Record</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar" style="height:1400px">
      <div class="p-4 pt-5" style="position: fixed; width: 17%;">
        <a href="#" class="img logo rounded-circle mb-5" style="background-image: url('UiTM Logo.png')"></a>
        <ul class="list-unstyled components mb-5">
          <li>
            <a href="dashboard.php">Home</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
            </ul>
          </li>

          <li>
            <a href="#searchsubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Search</a>
            <ul class="collapse list-unstyled" id="searchsubmenu">
              <li class="active">
                <a href="SearchCode.php">By Code</a>
              </li>
              <li>
                <a href="SearchName.php">By Name</a>
              </li>
            </ul>
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
        <div class="container-fluid" style="background-color: #f9f7d9">
        <marquee behavior="scroll" direction="left" scrollamount="10">
              <?php
                  if($levelid == 1)
                  {
                    echo "WELCOME ADMIN";
                  }
                  if($levelid == 2)
                  {
                    echo "WELCOME FIRST USER";
                  }
                  if($levelid == 3)
                  {
                    echo "WELCOME LAST USER";
                  }
               ?> </marquee>
              <button type="button" id="sidebarCollapse" class="btn btn-primary" style="position: fixed; height:30px">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>

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

      
      <h2 class="mb-4">YOUR FILE WILL DOWNLOAD AUTOMATICALLY</h2>
      <p>Please wait for a while.</p>
  

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>