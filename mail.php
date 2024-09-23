<!DOCTYPE html>
<?php 
if(isset($_POST["submit"]))
{
	$name=$_POST["name"];
	$phone=$_POST["phone"];
	$email=$_POST["email"];
	$subject="Booking Enquiry";
	$message=$_POST["msg"];	
    $to="info@themilestonetravels.com";

	// HTML Message Starts here
	$message = "
	<html>
		<body>
			<table style='width:600px;'>
				<tbody>
					<tr>
						<td style='width:150px'><strong>Title: </strong></td>
						<td style='width:400px'>Query From Customer</td>
					</tr>

					<tr>
						<td style='width:150px'><strong>Name: </strong></td>
						<td style='width:400px'>$name</td>
					</tr>
					<tr>
						<td style='width:150px'><strong>Mobile: </strong></td>
						<td style='width:400px'>$phone</td>
					</tr>
					<tr>
						<td style='width:150px'><strong>Email: </strong></td>
						<td style='width:400px'>$email</td>
					</tr>
					<tr>
						<td style='width:150px'><strong>Message: </strong></td>
						<td style='width:400px'>$message</td>
					</tr>
				</tbody>
			</table>
		</body>
	</html>
	";
	// HTML Message Ends here
         
	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
	// More headers
	$headers .= 'From: TheMileStoneTravels <info@themilestonetravels.com>' . "\r\n"; // Give an email id on which you want to get a reply. Users will get an email from this email id
	//$headers .= 'Cc: info@themilestonetravels.com' . "\r\n"; // If you want to add CC
	//$headers .= 'Bcc: info@themilestonetravels.com' . "\r\n"; // If you want to add Bcc
         
	if(mail($to, $subject, $message, $headers)){
		// Message if the mail has been sent
		echo "<script>
		
			window.location.href = 'https://themilestonetravels.com/form.html';
			</script>";
	}
	else{
		// Message if the mail has not been sent
		echo "<script>
			alert('EMAIL FAILED');
			window.location.href = 'https://themilestonetravels.com/contact.html';
			</script>";
	}
}


// if(isset($_POST["sybmit"]))
// {
// 	$hotel_name=$_POST["hotel_name"];
// 	$name=$_POST["name"];
// 	$phone=$_POST["mobile"];
// 	$email=$_POST["email"];
// 	$startdate=$_POST["adate"];
// 	$enddate=$_POST["edate"];	
// 	$adults=$_POST["adults"];	
// 	$children=$_POST["children"];	
//     $price=$_POST["price"];
//     $date=date("d-m-Y");
//     $insert = mysqli_query($con, "INSERT INTO `hotel_inquiry` (`hotel_name`, `price`,  `name`, `mobile`, `email`, `adate`, `edate`, `adults`, `children`, `date`) 
//     VALUES ('$hotel_name', '$price', '$name', '$phone', '$email', '$startdate', '$enddate', '$adults', '$children', '$date')")or die(mysqli_error($con));
// 	$to = "thisisengineer15@gmail.com"; // You can change here your Email
// 	$subject = "'$name' Hotel Regency Details"; // This is your subject
    

// 	// HTML Message Starts here
// 	$message = "
// 	<html>
// 		<body>
// 			<table style='width:600px;'>
// 				<tbody>
// 					<tr>
// 						<td style='width:150px'><strong>Title- </strong></td>
// 						<td style='width:400px'>Welcome to Hotel Regency Details</td>
// 					</tr>

// 					<tr>
// 						<td style='width:150px'><strong>Name: </strong></td>
// 						<td style='width:400px'>$name</td>
// 					</tr>
// 					<tr>
// 						<td style='width:150px'><strong>Mobile: </strong></td>
// 						<td style='width:400px'>$phone</td>
// 					</tr>
// 					<tr>
// 						<td style='width:150px'><strong>Email: </strong></td>
// 						<td style='width:400px'>$email</td>
// 					</tr>
//                     <tr>
// 						<td style='width:150px'><strong>Price: </strong></td>
// 						<td style='width:400px'>$price</td>
// 					</tr>
// 					<tr>
// 						<td style='width:150px'><strong>Arrival Date: </strong></td>
// 						<td style='width:400px'>$startdate</td>
// 					</tr>
//                     <tr>
// 						<td style='width:150px'><strong>Departure Date: </strong></td>
// 						<td style='width:400px'>$enddate</td>
// 					</tr>
//                     <tr>
// 						<td style='width:150px'><strong>Adults: </strong></td>
// 						<td style='width:400px'>$adults</td>
// 					</tr>
// 					<tr>
// 						<td style='width:150px'><strong>Children: </strong></td>
// 						<td style='width:400px'>$children</td>
// 					</tr>
// 					<tr>
// 						<td style='width:150px'><strong>Inquiry Date: </strong></td>
// 						<td style='width:400px'>$date</td>
// 					</tr>
// 				</tbody>
// 			</table>
// 		</body>
// 	</html>
// 	";
// 	// HTML Message Ends here
         
// 	// Always set content-type when sending HTML email
// 	$headers = "MIME-Version: 1.0" . "\r\n";
// 	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
// 	// More headers
// 	$headers .= 'From: HotelRegencyDetails <info@HotelRegencyDetails.com>' . "\r\n"; // Give an email id on which you want to get a reply. Users will get an email from this email id
// 	//$headers .= 'Cc: info@travbreaks.com' . "\r\n"; // If you want to add CC
// 	//$headers .= 'Bcc: info@travbreaks.com' . "\r\n"; // If you want to add Bcc
         
// 	if(mail($to, $subject, $message, $headers)){
// 		// Message if the mail has been sent
// 		echo "<script>
// 			alert('Message sent successfully');
// 			window.location.href = 'https://localhost/hotel/';
// 			</script>";
// 	}
// 	else{
// 		// Message if the mail has not been sent
// 		echo "<script>
//         alert('EMAIL FAILED');
//         window.location.href = 'https://localhost/hotel/';
//         </script>";
// 	}
// }

// if(isset($_POST["person_submit"]))
// {
// 	$name=$_POST["name"];
// 	$phone=$_POST["mobile"];
// 	$email=$_POST["email"];
//     $person=$_POST["person"];
//     $date=date("d-m-Y");
//     $insert = mysqli_query($con, "INSERT INTO `tours_inquiry` (`name`, `mobile`, `email`, `subject`, `date`) 
//     VALUES ('$name', '$phone', '$email', '$person', '$date')")or die(mysqli_error($con));
// 	$to = "info@travbreaks.com"; // You can change here your Email
// 	$subject = "'$name' TravBreaks Travels Inquiry"; // This is your subject
    

// 	// HTML Message Starts here
// 	$message = "
// 	<html>
// 		<body>
// 			<table style='width:600px;'>
// 				<tbody>
// 					<tr>
// 						<td style='width:150px'><strong>Title- </strong></td>
// 						<td style='width:400px'>Welcome to TravBreaks Travels</td>
// 					</tr>

// 					<tr>
// 						<td style='width:150px'><strong>Name: </strong></td>
// 						<td style='width:400px'>$name</td>
// 					</tr>
// 					<tr>
// 						<td style='width:150px'><strong>Mobile: </strong></td>
// 						<td style='width:400px'>$phone</td>
// 					</tr>
// 					<tr>
// 						<td style='width:150px'><strong>Email: </strong></td>
// 						<td style='width:400px'>$email</td>
// 					</tr>
// 					<tr>
// 						<td style='width:150px'><strong>Person: </strong></td>
// 						<td style='width:400px'>$person</td>
// 					</tr>
// 					<tr>
// 						<td style='width:150px'><strong>Inquiry Date: </strong></td>
// 						<td style='width:400px'>$date</td>
// 					</tr>
// 				</tbody>
// 			</table>
// 		</body>
// 	</html>
// 	";
// 	// HTML Message Ends here
         
// 	// Always set content-type when sending HTML email
// 	$headers = "MIME-Version: 1.0" . "\r\n";
// 	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
// 	// More headers
// 	$headers .= 'From: TravBreaks <info@travbreaks.com>' . "\r\n"; // Give an email id on which you want to get a reply. Users will get an email from this email id
// 	//$headers .= 'Cc: info@travbreaks.com' . "\r\n"; // If you want to add CC
// 	//$headers .= 'Bcc: info@travbreaks.com' . "\r\n"; // If you want to add Bcc
         
// 	if(mail($to, $subject, $message, $headers)){
// 		// Message if the mail has been sent
// 		echo "<script>
// 			alert('Message sent successfully');
// 			window.location.href = 'https://travbreaks.com/';
// 			</script>";
// 	}
// 	else{
// 		// Message if the mail has not been sent
// 		echo "<script>
// 			alert('EMAIL FAILED');
// 			window.location.href = 'https://travbreaks.com/';
// 			</script>";
// 	}
// }
?>
