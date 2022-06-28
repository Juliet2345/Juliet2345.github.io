<?php
$name=$_POST['username'];
$email=$_POST['useremail'];
$number=$_POST['usernumber'];
$subject=$_POST['sub'];
$message=$_POST['messg'];



if($name!=''){
	
$message='<body>
<center> <h2>Transport</h2></center>
<table>
<tr><td>Company Name</td><td>:'.$name.'</td><tr> 
<tr><td>Email</td><td>:'.$email.'</td><tr> 
<tr><td>Phone Number</td><td>:'.$number.'</td><tr>
<tr><td>Subject</td><td>:'.$subject.'</td><tr> 
<tr><td>Message</td><td>:'.$message.'</td><tr> 
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