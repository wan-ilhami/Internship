<?php
include("connection.php");

$id = $_POST['id'];
$password = $_POST['password'];

$sql = "SELECT * FROM USERS u JOIN USERLEVEL a ON u.USERLEVELID = a.USERLEVELID WHERE USERID = '".$id."' AND USERPASS = '".$password."' ";

$qry = oci_parse($conn, $sql);
$res = oci_execute($qry);
$row = oci_fetch_all($qry,$res);
echo $row;
echo $qry;

if($row > 0)
{
   $e = oci_parse($conn,$sql);
   oci_execute($e);
    while($r = oci_fetch_assoc($e) )
    {
    session_start();
    $_SESSION['USERID'] = $r['USERID'];
     if($r['USERLEVELID'] == "" || $r['USERLEVELID'] == 1)
        $_SESSION['USERLEVELID'] = 1;
    
    else if($r['USERLEVELID'] == "" || $r['USERLEVELID'] == 2)
        $_SESSION['USERLEVELID'] = 2;
    
    else if($r['USERLEVELID'] == "" || $r['USERLEVELID'] == 3)
        $_SESSION['USERLEVELID'] = 3;
    

    $_SESSION['USERLEVELDESC'] = $r['USERLEVELDESC'];
    
    }
    echo "<br>".$_SESSION['USERID'];
    echo "<br>".$_SESSION['USERLEVELID'];
    echo "<br>".$_SESSION['USERLEVELDESC'];

    
    

    


    echo "<script language = 'javascript'> alert('You have logged In.'); window.location = 'dashboard.php';</script>";
}
else if($row==0)
{
    echo "<script language = 'javascript'> alert('Username OR Password are wrong. Please Enter New Password!'); window.location = 'index.php'</script>";
}


// check username whether database already have same username



?>