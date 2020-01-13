<?php include_once 'includes/header.php'; ?>

<style type="text/css">
	.bgimg {
    background-image: url('images/map.jpg');
}
</style>

		<script type="text/javascript">

		$(document).ready(function() {
			// top bar active
			$('#contact').addClass('active');

			});

		</script>

			<?php



				$result ="";

				

				if(isset($_POST['submit'])){
				// Load Composer's autoloader
				require 'phpmailer/PHPMailerAutoload.php';

				// Instantiation and passing `true` enables exceptions
				$mail = new PHPMailer(true);
			
				try {
				    //Server settings
				                      // Enable verbose debug output
				    $mail->isSMTP();                                            // Send using SMTP
				    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
				    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
				    $mail->Username   = 'kacsender@gmail.com';                     // SMTP username
				    $mail->Password   = 'kacsolutions123';                               // SMTP password
				    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
				    $mail->Port       = 587;                                    // TCP port to connect to

				    //Recipients
				    $mail->setFrom('kacsender@gmail.com', 'KAC');
				    $mail->addAddress('kacreceiver@gmail.com');     // Add a recipient
				    

				    

				 // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
  	$mail->Body='<h1 align=center>Name : '.$_POST['name'].'<br>Email : '.$_POST['email'].'<br>Message : '.$_POST['msg'].'</h1>';

    $mail->send();
    $result="Thanks ".$_POST['name']." for contacting us.";
} catch (Exception $e) {
    $result="Something Went Wrong, Please Try Again.";
}
}
?>

	
				


			<div class="row">
				<div class="col-lg-6">
				 <center><header class="h1" style="color: "> Contact Us.</header></center>
					<center>
					 <hr class="bg-light">
			        <h5 class="text-center text-success"><?php echo $result; ?></h5>
				        <form action="" method="POST" id="form-box" class="p-2">
				          <div class="form-group input-group">
				            <input type="text" name="name" autocomplete="off" class="form-control" placeholder="Enter your name" required>
				          </div>
				          <div class="form-group input-group">
				            <input type="email" name="email" autocomplete="off" class="form-control" placeholder="Enter your email" required>
				          </div>
				          <div class="form-group input-group">
				            <input type="text" name="subject" autocomplete="off" class="form-control" placeholder="Enter subject" required>
				          </div>
				          <div class="form-group input-group">
				            <textarea name="msg" id="msg" class="form-control" placeholder="Write your message" cols="30" rows="4" required></textarea>
				          </div>
				          <div class="form-group">
				            <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Send">
				          </div>
				        </form>
			        </center>	
				</div><!-- 1st col -->
				</br></br>
				<div class="col-lg-6">
					<center>
					<div class="contacts">Email Address:</div></br>
					thekaconsultancy.com</br></br></br>	
					<div class="contacts">Telephone Nos.:</div></br>
					+63 (2) 111-1111 </br>
					+63 (2) 222-222 </br></br></br>
					<div class="contacts">Mobile No.:</div></br>
					+63 917 111 1111</br>
					+63 919 222 2222</br>
					</center></br></br>
				</div>
			</div> <!-- row -->


<?php include_once 'includes/footer.php'; ?>