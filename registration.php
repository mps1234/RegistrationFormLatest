<?php
include('dbconnect.php');
	
	
		/* declaration of variables */
	$see_rollno = $gen_rank = $category_rank = $cat_mat_cmat = $percentile = $other_exam_name = $other_exam_percentile = "";
    $date="";
	$name = $email = $fname = $dob = $nationality = $category = $gender = $state_of_domicile =$parentno=$candidateno= "";

	$permanent_add=$pincode_perm=$telno_perm=$correspondence_add=$pincode_corr=$telno_corr=$local_add=$pincode_loc=$telno_loc="";

	$school_name_10 = $board_10 = $passingyear_10 = $percentage_10 = "";
	$school_name_12 = $board_12 = $passingyear_12 = $percentage_12 = "";
	$diploma_college = $diploma_university = $diploma_passingyear = $diploma_percentage = "";
	$graduation_college = $graduation_university = $graduation_passingyear = $graduation_percentage = "";
	$other_college = $other_university = $other_passingyear = $other_percentage = "";
	$experience_duration = $exp_organisation_name = $hostel_req = "";


if(isset($_POST['submit']))
		{
            date_default_timezone_set("Asia/Calcutta");
            $date=date("Y/m/d h:i:sa");

			$see_rollno = mysqli_real_escape_string($con,$_POST['rollno']);
			$gen_rank = mysqli_real_escape_string($con,$_POST['genrank']);
			$category_rank = mysqli_real_escape_string($con,$_POST['catrank']);
			$cat_mat_cmat = mysqli_real_escape_string($con,$_POST['cat_mat_cmat']);
			$percentile = mysqli_real_escape_string($con,$_POST['percentile']);
			$other_exam_name = mysqli_real_escape_string($con,$_POST['examname']);
			$other_exam_percentile = mysqli_real_escape_string($con,$_POST['rank']);

			$name = mysqli_real_escape_string($con,$_POST['name']);
			$email = mysqli_real_escape_string($con,$_POST['email']);
			$fname = mysqli_real_escape_string($con,$_POST['fname']);
			$dob = mysqli_real_escape_string($con,$_POST['dob']);
			$nationality = mysqli_real_escape_string($con,$_POST['nation']);
			$category = mysqli_real_escape_string($con,$_POST['cat']);
			$gender = mysqli_real_escape_string($con,$_POST['gender']);
			$state_of_domicile = mysqli_real_escape_string($con,$_POST['state']);
			$parentno=mysqli_real_escape_string($con,$_POST['parentno']);
			$candidateno=mysqli_real_escape_string($con,$_POST['candidateNo']);

			$permanent_add = mysqli_real_escape_string($con,$_POST['permanentadd']);
			$pincode_perm = mysqli_real_escape_string($con,$_POST['pincodeperm']);
			$correspondence_add = mysqli_real_escape_string($con,$_POST['correspondenceadd']);
			$pincode_corr = mysqli_real_escape_string($con,$_POST['pincodecorr']);
			$local_add = mysqli_real_escape_string($con,$_POST['localadd']);
			$pincode_loc = mysqli_real_escape_string($con,$_POST['pincodeloc']);

			$school_name_10 = mysqli_real_escape_string($con,$_POST['schoolname10']);
			$board_10 = mysqli_real_escape_string($con,$_POST['board10']);
			$passingyear_10 = mysqli_real_escape_string($con,$_POST['passingyear10']);
			$percentage_10 = mysqli_real_escape_string($con,$_POST['percentage10']);

			$school_name_12 = mysqli_real_escape_string($con,$_POST['schoolname12']);
			$board_12 = mysqli_real_escape_string($con,$_POST['board12']);
			$passingyear_12 = mysqli_real_escape_string($con,$_POST['passingyear12']);
			$percentage_12 = mysqli_real_escape_string($con,$_POST['percentage12']);

			$graduation_college = mysqli_real_escape_string($con,$_POST['graduationcollege']);
			$graduation_university = mysqli_real_escape_string($con,$_POST['graduationuniversity']);
			$graduation_passingyear = mysqli_real_escape_string($con,$_POST['graduationpassingyear']);
			$graduation_percentage = mysqli_real_escape_string($con,$_POST['graduationpercentage']);

			$other_college = mysqli_real_escape_string($con,$_POST['othercollege']);
			$other_university = mysqli_real_escape_string($con,$_POST['otheruniversity']);
			$other_passingyear = mysqli_real_escape_string($con,$_POST['otherpassingyear']);
			$other_percentage = mysqli_real_escape_string($con,$_POST['otherpercentage']);

			$experience_duration = mysqli_real_escape_string($con,$_POST['duration']);
			$exp_organisation_name = mysqli_real_escape_string($con,$_POST['org']);
			$hostel_req = mysqli_real_escape_string($con,$_POST['hostelreq']);

		}




	$sql = "INSERT INTO studentdetails(Date,see_rollno,gen_rank,category_rank,cat_mat_cmat,percentile,other_exam_name,other_exam_percentile,name,email,fname,dob,nationality,category,gender,state_of_domicile,parentNo,candidateNo,permanent_add,pincode_perm,correspondence_add,pincode_corr,local_add,pincode_loc,10_school_name,10_board,10_passingyear,10_percentage,12_school_name,12_board,12_passingyear,12_percentage,graduation_college,graduation_university,graduation_passingyear,graduation_percentage,other_college,other_university,other_passingyear,other_percentage,experience_duration,exp_organisation_name,hostel_req) 

	VALUES('$date','$see_rollno','$gen_rank','$category_rank','$cat_mat_cmat','$percentile','$other_exam_name','$other_exam_percentile','$name','$email','$fname','$dob','$nationality','$category','$gender','$state_of_domicile','$parentno','$candidateno','$permanent_add','$pincode_perm','$correspondence_add','$pincode_corr','$local_add','$pincode_loc','$school_name_10','$board_10','$passingyear_10','$percentage_10','$school_name_12','$board_12','$passingyear_12','$percentage_12','$graduation_college','$graduation_university','$graduation_passingyear','$graduation_percentage','$other_college','$other_university','$other_passingyear','$other_percentage','$experience_duration','$exp_organisation_name','$hostel_req')";

					$result = mysqli_query($con,$sql);


						if($result)
							{	
								$message = "Form submitted, kindly confirm your email on which verification link will be sent";
//								echo "<script type='text/javascript'>alert('$message');</script>";

								session_start();
								$_SESSION['email12'] = $email;
								header('Refresh:0;url=confirmsubmit.php');
								/*echo "Form Submitted<br>";
								echo "Kindly confirm your email on which verification link has been sent";
								*/
							}
						else
							{
								echo "Failure! Unable to submit form ";
								echo "Email Id Already Exist";
							}


							
