<!doctype html>
<html>

<head>
<meta charset="utf-8">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    <title>Registration Form</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Favicon Ends -->
    <style>
        .alert {
            padding: 20px;
            background-color: #4CAF50;
            color: white;
        }
        
        .alert2 {
            padding: 20px;
            background-color: red;
            color: white;
        }
        
        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }
        
        .closebtn:hover {
            color: black;
        }

    </style>

</head>

<body>
    <div id="header">


        <h3 class="center">Ajay Kumar Garg Institute of Management</h3>
        <div class="row"></div>
        <h5 class="center">MBA Registration Form Email Verification</h5>
    </div>
    <div class="row"></div>
    <div>
        <h6 class="grey-text center"> Kindly confirm your email id here, an auto-generated link will be sent to the given email, kindly click on the link for confirming registration form submission</h6><br><br><br>


            <div class="row">
                <form class="form" action="" method="POST">
                <div class="col s3" style="margin-left:4%;"></div>
                    <div class="col s4">
                        <div class="input-field">
                    <input type="email" name="email" value=" <?php session_start(); echo $_SESSION['email12']; ?>" id="email">
                    <label for="email">Email Address</label>
                        </div>
                </div>
                <div style="padding-top:0.7777%;" class="col s2 input-field">
                    <button class="btn blue white-text" type="submit" name="submit" value="Send">
                        <i class="material-icons right">send</i></button>
                </div>
                <div class="col s2"></div>
                    </form>
                </div>
        
        <?php
        
        include('dbconnect.php');

        if(isset($_POST['submit'])){
	       $email=$_POST['email'];
	       $query=mysqli_query($con, "SELECT email FROM studentdetails WHERE email='".$email."'");
	
            if(mysqli_num_rows($query)>=1){
                while($row=mysqli_fetch_array($query)){
                  $email1=md5($row['email']);
            	  $email=$row['email'];
                }
                
        $link="<a href='http://admission.akgim.edu.in/reset.php?key=".$email1."'>Click here to verify your email and confirm form submission</a>";
    
    
        require 'PHPmail/PHPMailerAutoload.php';
		require 'PHPmail/class.phpmailer.php'; // path to the PHPMailer class
		require 'PHPmail/class.smtp.php';

		$mail = new PHPMailer;

		//$mail->SMTPDebug = 3;    

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'Smtp.gmail.com;Smtp.live.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'akgimadmissionstomba@gmail.com';                 // SMTP username
		$mail->Password = '';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;               
		$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) );                     // TCP port to connect to

		$mail->setFrom('akgimadmissionstomba@gmail.comm','AKGIM');    // Add a recipient
		$mail->addAddress($email);  
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = 'AKGIM (MBA Registration Form Email Verification)';
		$mail->Body    = 'Click On This Link to verify your email address '.$link.'';
		$mail->AltBody = 'Form Submission Verification Link';

		if(!$mail->send()){
			echo "<div class='alert2' style='text-align:center;'>
            <span class='closebtn' onclick='this.parentElement.style.display=\"none\";'>&times;</span>
            Please enter the valid email.
                </div>";
            }
			else{
			echo "<div class='alert' style='text-align:center;'>
                <span class='closebtn' onclick='this.parentElement.style.display=\"none\";'>&times;</span> 
                <strong> A verification link has been sent to your email id, kindly click on that link for verification </strong> 
                </div>";
                
                $URL="http://akgim.edu.in/";
                echo '<META HTTP-EQUIV="refresh" content="5;URL=' . $URL . '">';
        		}
			}

			else{
				echo "<div class='alert2' style='text-align:center;'>
                <span class='closebtn' onclick='this.parentElement.style.display=\"none\";'>&times;</span>
                Please enter the valid email which you provided during form submission 
                </div>";
			}
        }
    ?>

            <br><br><br><br><br><br>
            
            </div>

</body>
</html>
