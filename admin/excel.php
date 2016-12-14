<?php
$connect = mysqli_connect("localhost","root","","akgim-registration");
$output = "";
if(isset($_POST['export_excel']))
{
	$sql = "SELECT * from studentdetails";
	$result = mysqli_query($connect, $sql);
	if(mysqli_num_rows($result)>0)
		{
			$output.= '
			<table border="1">
			<caption style="text-align:center;">Student Details</caption>
				<tr>
					<th rowspan="2">Date </th>
		 			  		<th rowspan="2">SEE AKTU Roll No </th> 
		 			  		<th rowspan="2">General Rank </th> 
		 			  		<th rowspan="2">Category Rank </th> 
		  			  	<th rowspan="2">Exam (CAT/MAT/CMAT)</th> 
		            <th rowspan="2">Exam Percentile</th>
		 			  		<th rowspan="2">Any Other Exam(Name) </th>
		 		  	  	<th rowspan="2">Percentile </th>

		 		  	  		<th rowspan="2">Student Name</th>
		 		  	  		<th rowspan="2">Email Id</th>
		 		  	  		<th rowspan="2">Father Name</th>
		 		  	  		<th rowspan="2">Date of Birth</th>
		 		  	  		<th rowspan="2">Nationality</th>
		 		  	  		<th rowspan="2">Category</th>
		 		  	  		<th rowspan="2">Gender</th>
		 		  	  		<th rowspan="2">State of Domicile</th>

		 		  	  		<th rowspan="2">Parent Contact Number</th>
                  <th rowspan="2">Candidate Contact Number</th>

		 		  	  		<th rowspan="2">Permanent Address</th>
		 		  	  		<th rowspan="2">Pincode</th>
		 		  	  		
		 		  	  		<th rowspan="2">Correspondence Address</th>
		 		  	  		<th rowspan="2">Pincode</th>
		 		  	  		
		 		  	  		<th rowspan="2">Local Address</th>
		 		  	  		<th rowspan="2">Pincode</th>
		 		  	  		


                  <th colspan="4" style="text-align: center;">10<sup>th</sup> Result</th>

                  <th colspan="4" style="text-align: center;">12<sup>th</sup> Result</th>

                  

                  <th colspan="4" style="text-align: center;">Graduation</th>

                  <th colspan="4" style="text-align: center;">Any Other</th>


		 		  	  		<th rowspan="2">Experience Duration</th>
		 		  	  		<th rowspan="2">Organisation Name</th>

		 		  	  		<th rowspan="2">Hostel Required</th>
		 		  	  		<th rowspan="2">Email Verified</th>

		 		  	  	</tr>
		 		  	    <tr>
                  <th>School Name</th>
                  <th>Board</th>
                  <th>Passing Year</th>
                  <th>Percentage</th>

                  <th>School Name</th>
                  <th>Board</th>
                  <th>Passing Year</th>
                  <th>Percentage</th>


                  

                  <th>College Name</th>
                  <th>University</th>
                  <th>Passing Year</th>
                  <th>Percentage</th>

                  <th>College Name</th>
                  <th>University</th>
                  <th>Passing Year</th>
                  <th>Percentage</th>
				</tr>';

			while($row = mysqli_fetch_array($result))
			{
				$output.= '
				<tr>
					<td>'.$row["Date"].'</td>
					<td>'.$row["see_rollno"].'</td>
					<td>'.$row["gen_rank"].'</td>	
					<td>'.$row["category_rank"].'</td>
					<td>'.$row["cat_mat_cmat"].'</td>
					<td>'.$row["percentile"].'</td>
					<td>'.$row["other_exam_name"].'</td>
					<td>'.$row["other_exam_percentile"].'</td>
					<td>'.$row["name"].'</td>
					<td>'.$row["email"].'</td>

					<td>'.$row["fname"].'</td>
					<td>'.$row["dob"].'</td>
					<td>'.$row["nationality"].'</td>
					<td>'.$row["category"].'</td>
					<td>'.$row["Gender"].'</td>
					<td>'.$row["state_of_domicile"].'</td>

					<td>'.$row["parentNo"].'</td>
					<td>'.$row["candidateNo"].'</td>


					<td>'.$row["permanent_add"].'</td>
					<td>'.$row["pincode_perm"].'</td>
					
					<td>'.$row["correspondence_add"].'</td>
					<td>'.$row["pincode_corr"].'</td>
					
					<td>'.$row["local_add"].'</td>
					<td>'.$row["pincode_loc"].'</td>
					
					
					<td>'.$row["10_school_name"].'</td>
					<td>'.$row["10_board"].'</td>
					<td>'.$row["10_passingyear"].'</td>
					<td>'.$row["10_percentage"].'</td>

					<td>'.$row["12_school_name"].'</td>
					<td>'.$row["12_board"].'</td>
					<td>'.$row["12_passingyear"].'</td>
					<td>'.$row["12_percentage"].'</td>

							

							<td>'.$row['graduation_college'].'</td>
							<td>'.$row['graduation_university'].'</td>
							<td>'.$row['graduation_passingyear'].'</td>
							<td>'.$row['graduation_percentage'].'</td>

							<td>'.$row['other_college'].'</td>
							<td>'.$row['other_university'].'</td>
							<td>'.$row['other_passingyear'].'</td>
							<td>'.$row['other_percentage'].'</td>

							<td>'.$row['experience_duration'].'</td>
							<td>'.$row['exp_organisation_name'].'</td>
							<td>'.$row['hostel_req'].'</td>
							<td>'.$row['verified'].'</td>
								
                               


                                

				</tr>
				';

			}
			$output.='</table>';
			header("Content-Type:application/vnd.ms-excel; charset=utf-8");
			header("Content-Disposition:attachment; filename=MBAregform.xls");
			echo $output;


		}
}