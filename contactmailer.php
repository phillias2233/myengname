<?php
require("/home/socialsh/myengname.socialshifu.com/phpmailer/PHPMailerAutoload.php");

$mail = new PHPMailer();

// Variable declaration
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['comments'];

$mail->IsSMTP(); 
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only                     
$mail->SMTPAuth = true; 
$mail->SMTPSecure = 'tls'; 
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->Username = "myengname2233@gmail.com";  
$mail->Password = "!89br@J)NASB"; 

$mail->From = "support@socialshifu.com";
$mail->FromName = "MyEngName Contact";
$mail->AddAddress("support@socialshifu.com", "Anthony");

$mail->WordWrap = 50;                               
$mail->IsHTML(true);                                 
$mail->Subject = "Message from: - ".$email."";

// How the form will be displayed via Email
$mail->Body = "
    <html>
    	<h2>Message from: <b>".$name." - ".$email.""</b></h2>
    	<table>
		<tr>
			<th>Message</th>
		</tr>
		<hr>
		<tr>
			<td><b>".$comments."</b></td>
		</tr>		
	</table>
    </html>";
   
$mail->AltBody = "Alt Message body";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Your Order has been submitted!";
?>
