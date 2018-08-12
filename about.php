<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<style type="text/css">
		#item img {
  max-width: 100%;
  
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
#item:hover img {
  -moz-transform: scale(1.1);
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
  border-bottom: 2px solid grey;
}

ul {
  width: 100%;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:black; /* navigation bar bg color*/
    border-bottom:1px solid #e7e7e7;

}

li {
    float:right; 

   padding:2px 2px;/* leaves space between two links in navigation bar */
}

li a {
    display: block;
    color: #ffffff;
    text-align: center;
    font-size: 15px;
    padding: 15px 20px;
    text-decoration: none;

}

#li1 {
 border: 1px solid white; /* Orange color for ADD on navigation bar*/
}

li a:hover { /* Change the link color  on hover */
    color: #000000;
    background-color: #eae66b;

}

	</style>
</head>
<body style="margin:0px;">
<div style="width:100%;height:54px;background-color: black;">
	<ul style="margin: 0;padding: 0;list-style-type: none;">
        <li><a href="signup.php">Signup</a></li>
		<li><a href="login.php">Login</a></li>
		
		<li><a href="about.php">About us</a></li>
		<li><a href="login.php">Search Mobiles</a></li>
		<li id="li1" style="margin-right: 64%;"><a href="index.php">Home</a></li>
	</ul>

</div>
<div id="item" style="width: 100%;height: 551px;background-color: #333333">

<img  src="heem.jpeg" style="width: 221px;height: 221px;margin: 71px 0px 81px;margin-left:81px;border-radius: 101px">
<img  src="mehul.jpg" style="width: 221px;height: 221px;margin: 81px 0px 81px;margin-left:91px;border-radius: 101px">
<img  src="akhil.jpeg" style="width: 221px;height: 221px;margin: 81px 0px 81px;margin-left:91px;border-radius: 101px">
<img  src="ratnesh.jpg" style="width: 221px;height: 221px;margin: 81px 0px 81px;margin-left:91px;border-radius: 101px">
 <br>
<table>
	<tr >
		<td style="padding-right: 171px;padding-left: 131px;font-size: 19px;color: #ffffff">HEEM JOSHI</td>
        <td style="padding-right: 121px;font-size: 19px;color: #ffffff">MEHUL.S.DHOLIYA</td>
        <td style="padding-right: 111px;font-size: 19px;color: #ffffff">AKHIL BALAKRISHANAN</td>
        <td style="font-size: 19px;color: #ffffff">RATNESH DUBEY</td>
	</tr>
	
		<tr style="padding: 5px" >
		<td style="padding-right: 201px;padding-left: 131px;font-size: 14px;color: #ffffff;padding-top: 31px">Roll No:24</td>
        <td style="padding-right: 141px;font-size: 14px;color: #ffffff;padding-top: 31px">Roll No:10</td>
        <td style="padding-right: 111px;font-size: 14px;color: #ffffff;padding-top: 31px">Roll No:02</td>
        <td style="font-size: 14px;color: #ffffff;padding-top: 31px">Roll No:13</td>
	</tr>

	</tr>
	
		<tr style="padding: 5px" >
		<td style="padding-right: 201px;padding-left: 131px;font-size: 14px;color: #ffffff;padding-top: 31px">TE-CMPN</td>
        <td style="padding-right: 141px;font-size: 14px;color: #ffffff;padding-top: 31px">TE-CMPN</td>
        <td style="padding-right: 111px;font-size: 14px;color: #ffffff;padding-top: 31px">TE-CMPN</td>
        <td style="font-size: 14px;color: #ffffff;padding-top: 31px">TE-CMPN</td>
	</tr>
</table>

</div>
</body>
</html>