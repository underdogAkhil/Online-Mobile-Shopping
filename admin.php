<?php


session_start();
if (isset($_SESSIOn['userid'])) {
	# code...
header('location:admin.php');


}

?>

<?php
$db = mysqli_connect("localhost","root","","mobile_shoping"); 

if (isset($_POST['login'])) {
	# code...
	$username=$_POST['us'];
    $password=$_POST['ps'];

    $qry="SELECT * FROM `user` WHERE `userid`='$username' and `password` = '$password' ";

    $run=mysqli_query($db,$qry);

    $row=mysqli_num_rows($run);


    if($row<1)
   {
   	?>
       
     <script type="text/javascript">
     	
     alert('! User name or Password not matched !!\n\nTry Again!!');
     window.open('login.php');

     </script>

   	<?php
   }
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>