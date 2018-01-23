<!DOCTYPE html>
<html>
<head>
  <title>Registration Form Verification</title>

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

    <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
  input[type=submit]{ background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px;}

    #block{
    align-content: center;
    text-align: center;
    width: 65%;
    border: 3px solid black;
    padding: 3%;
    margin: 2% 5% 0% 17.5%;}

    #ff{
    font-family: verdana;
    font-size: 0.9em;}

    p{
     font-family: verdana;
     font-size: 0.9em;
     text-align: justify;}
</style>


</head>

  <body style="background: url(Akgim_Building.jpg) no-repeat fixed left top;background-size:100%;">
        <div class="container">
           <div style="margin-left:10%;margin-right: 10%;padding: 0;background: white;box-shadow: 0px 0px 15px #000000;">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12" id="header">
                <img src="header1.jpg" width="100%">
                </div>
           </div><br>
  <h4 style="text-align:center;text-decoration: underline;">MBA Registration Form Email Verification</h4>




<?php
include('dbconnect.php');
if($_GET['key']){

  $email=$_GET['key'];
  
  $select=mysqli_query($con,"SELECT email,name,verified from studentdetails where md5(email)='".$email."'");
  if(mysqli_num_rows($select)>=1)
  {
    ?>


    <div id="block">
    <form method="POST" action="updatestatus.php">
    <input type="hidden" name="email" value="<?php echo $email;?>">
	
	    <?php
      while($r=mysqli_fetch_array($select))
      {
        echo "<h4>Dear Student, ".'<strong><u>'.$r['name'].'</u></strong></h4>';
      }
      
       ?>
    <p><b>Declaration </b>: I confirm that the information provided by me in the application form is accurate and correct. I understand that in the event of my admission, if any information provided by me is found incorrect, my candidature to admission could be cancelled without notice.</p>
    <p>I further declare that I have never been debarred from any examination or rusticated by any Institution/University. I also declare that I have not been convicted by any Court of Law in India or abroad at any time for any criminal offence and sentenced to imprisonment as well as no proceedings are pending against me.</p>
    <p>I further confirm and undertake to abide by the Rules and Regulations as framed from time to time by  Dr. APJ Abdul Kalam Technical University, LUCKNOW (U.P.) as well as by the college.</p>
    <p>I am aware that as per honourable Supreme Court order Ragging is totally prohibited.</p><br>

       <input type="submit" value="I Agree" name="submit_confirm"><br>
    </form>
    </div>
    <br><br>
  </div>
  <br><br>
  </div>

   <?php
}
else{
  ?>

  <?php
  echo "Link expired";}
}
?>

</body>
</html>



