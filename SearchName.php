
<?php
include("connection.php");
session_start();
$desc = $_SESSION['userLevelDesc'] ;
echo "Session: ".$desc."<br>";
$levelid = $_SESSION['userLevelID'];
echo "level ID: ".$levelid."<br>";
$ID = $_SESSION['userID'];
echo "User ID: ".$ID;
?>

<!DOCTYPE html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="searchNameStyle.css">
        <link rel="stylesheet" href="dashboardStyle.css">
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
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url('logo.png'); width:250px; height:250px; margin-top:-60px "></a>
	        <ul class="list-unstyled components mb-5">
	          <li>
	            <a href="dashboard.php">Home</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
	            </ul>
            </li>
            
            <li >
	            <a href="#searchsubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" >Search</a>
	            <ul class="collapse list-unstyled" id="searchsubmenu">
              <li>
                  <a href="SearchCode.php">By Code</a>
              </li>
              <li  class="active" >
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
      <div id="content" class="p-4 p-md-5" >

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid"  style="background-color: #f9f7d9">
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

        <h2 class="mb-4" style="text-align: center; margin-right: 50px;">Search Files By Name</h2>
        <body style="margin: auto;">  
          <form autocomplete="off" action="/action_page.php">
            <div class="autocomplete" style="margin: auto; display: block;" >
              <input id="myInput" type="text" name="myCountry" placeholder="File Name...">
              <button style="background-color: #ffc107;border: solid black;" type="submit"><i style="width: 30px; margin-bottom: 13px;margin-top:13px;" class="fa fa-search"></i></button>
            </div>

            </form>
          
          <script>
          function autocomplete(inp, arr) {
            /*the autocomplete function takes two arguments,
            the text field element and an array of possible autocompleted values:*/
            var currentFocus;
            /*execute a function when someone writes in the text field:*/
            inp.addEventListener("input", function(e) {
                var a, b, i, val = this.value;
                /*close any already open lists of autocompleted values*/
                closeAllLists();
                if (!val) { return false;}
                currentFocus = -1;
                /*create a DIV element that will contain the items (values):*/
                a = document.createElement("DIV");
                a.setAttribute("id", this.id + "autocomplete-list");
                a.setAttribute("class", "autocomplete-items");
                /*append the DIV element as a child of the autocomplete container:*/
                this.parentNode.appendChild(a);
                /*for each item in the array...*/
                for (i = 0; i < arr.length; i++) {
                  /*check if the item starts with the same letters as the text field value:*/
                  if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                    /*create a DIV element for each matching element:*/
                    b = document.createElement("DIV");
                    /*make the matching letters bold:*/
                    b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                    b.innerHTML += arr[i].substr(val.length);
                    /*insert a input field that will hold the current array item's value:*/
                    b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                    /*execute a function when someone clicks on the item value (DIV element):*/
                    b.addEventListener("click", function(e) {
                        /*insert the value for the autocomplete text field:*/
                        inp.value = this.getElementsByTagName("input")[0].value;
                        /*close the list of autocompleted values,
                        (or any other open lists of autocompleted values:*/
                        closeAllLists();
                    });
                    a.appendChild(b);
                  }
                }
            });
            /*execute a function presses a key on the keyboard:*/
            inp.addEventListener("keydown", function(e) {
                var x = document.getElementById(this.id + "autocomplete-list");
                if (x) x = x.getElementsByTagName("div");
                if (e.keyCode == 40) {
                  /*If the arrow DOWN key is pressed,
                  increase the currentFocus variable:*/
                  currentFocus++;
                  /*and and make the current item more visible:*/
                  addActive(x);
                } else if (e.keyCode == 38) { //up
                  /*If the arrow UP key is pressed,
                  decrease the currentFocus variable:*/
                  currentFocus--;
                  /*and and make the current item more visible:*/
                  addActive(x);
                } else if (e.keyCode == 13) {
                  /*If the ENTER key is pressed, prevent the form from being submitted,*/
                  e.preventDefault();
                  if (currentFocus > -1) {
                    /*and simulate a click on the "active" item:*/
                    if (x) x[currentFocus].click();
                  }
                }
            });
            function addActive(x) {
              /*a function to classify an item as "active":*/
              if (!x) return false;
              /*start by removing the "active" class on all items:*/
              removeActive(x);
              if (currentFocus >= x.length) currentFocus = 0;
              if (currentFocus < 0) currentFocus = (x.length - 1);
              /*add class "autocomplete-active":*/
              x[currentFocus].classList.add("autocomplete-active");
            }
            function removeActive(x) {
              /*a function to remove the "active" class from all autocomplete items:*/
              for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
              }
            }
            function closeAllLists(elmnt) {
              /*close all autocomplete lists in the document,
              except the one passed as an argument:*/
              var x = document.getElementsByClassName("autocomplete-items");
              for (var i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                  x[i].parentNode.removeChild(x[i]);
                }
              }
            }
            /*execute a function when someone clicks in the document:*/
            document.addEventListener("click", function (e) {
                closeAllLists(e.target);
            });
          }
          
          /*An array containing all the country names in the world:*/
          var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
          
          /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
          autocomplete(document.getElementById("myInput"), countries);
          </script>          

          </body>
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
