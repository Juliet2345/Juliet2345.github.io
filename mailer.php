<?php
$typeofmove=$_POST['typeofmove'];
$moveoflike=$_POST['moveoflike'];
$cityselectionss=$_POST['cityselectionss'];
$orginlocality=$_POST['orginlocality'];
$destcity=$_POST['destcity'];
$destlocality=$_POST['destlocality'];
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$moveitem=$_POST['moveitem'];
$username=$_POST['username'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$comments=$_POST['comments'];

if($username!=''){
	
$message='<body>
<center> <h2>Transport</h2></center>
<table>
<tr><td>Name</td><td>:'.$username.'</td><tr> 
<tr><td>Email</td><td>:'.$email.'</td><tr> 
<tr><td>Phone Number</td><td>:'.$phone.'</td><tr> 
<tr><td>Type Of Move</td><td>:'.$typeofmove.'</td><tr> 
<tr><td>Move Of Like</td><td>:'.$moveoflike.'</td><tr> 
<tr><td>City Selection</td><td>:'.$cityselectionss.'</td><tr> 
<tr><td>Origin Locality</td><td>:'.$orginlocality.'</td><tr>
<tr><td>Destination City</td><td>:'.$destcity.'</td><tr>
<tr><td>Destination Locality</td><td>:'.$destlocality.'</td><tr> 
 <tr><td>Date</td><td>:'.$day.'-'.$month.'-'.$year.'</td><tr> 
 <tr><td>Move Items</td><td>:'.$moveitem.'</td><tr>
<tr><td>Comments</td><td>:'.$comments.'</td><tr>
</table></body>';


$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:'.$name.' <'.$email.'>' . "\r\n";
$headers .= 'BCC: '.'\r\n';


mail("akinyij1999@gmail.com", "Transport \n".date("d-m-Y"), $message, $headers); 

	?>
	<script>window.location="thankyou.html";</script>
	<?php
	
}else{
	?>
	<script>window.location="index.html";</script>
	<?php
}

?>