<!DOCTYPE html>
<html>

<link rel="stylesheet" href="indexStyle.css">

<body
    style="background-image: url('Login\ Wallpaper.jpg'); background-repeat: no-repeat; background-attachment: fixed;">

    <div class="container3">
        <h2 class="word-in-box">
            <marquee behavior="scroll" direction="left" scrollamount="10" style="color: black;">FSPU File Recording
                System</marquee>
        </h2>

        <div class="container5">
        </div>
        <button class="container4" onclick="document.getElementById('id01').style.display='block'">Login</button>
    </div>


    <div id="id01" class="modal">

        <form class="modal-content2 animate" action="plogin.php" method="post">

            <div class="container2">
                <h2 style="text-align: center;color:white;"> Login</h2>
            </div>

            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close"
                    title="Close Modal">&times;</span>
                <img src="Logo.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="uname"><b>Staff ID</b></label>
                <input type="text" placeholder="Enter Staff ID" name="id" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required style="margin-bottom: 30px;">

                <a href="forgotPass.php" > Forgot Your Password?</a>

            </div>
            <div class="container" style="background-color:#f1f1f1">
                <button class="back" type="submit"
                    onclick="document.getElementById('id01').style.display='none'">Back</button>
                <button class="login" type="submit" >Login</button>
            </div>
        </form>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</body>

</html>