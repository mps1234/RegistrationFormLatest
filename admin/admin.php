<?php 
session_start();

if(!isset($_SESSION["sess_user_a"])){
  header("Location:http://admission.akgim.edu.in/admin/index.php");
}
else{

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="tablestyle.css">
  <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="manifest" href="../favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Favicon Ends -->
</head>
<style>
		#myInput {
  width: 80%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
button{
  background-color:   #0000FF;
    border: none;
    color: white;
    padding: 1% 1%;
    text-decoration: none;
    margin: 2% 3%;
    cursor: pointer;
    border-radius: 4px;
    float:right;
}

th{
  text-align: center;
}

</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
<script type="text/javascript">
       function ajaxFunction(ele)
        {
           var ajaxRequest;  
           var deleteit = ele.attr('value')
           
           var queryString = "?id=" + deleteit;
          

           try {
            
              ajaxRequest = new XMLHttpRequest();
           }catch (e) {
              
              try {
                 ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
              }catch (e) {
                 try{
                    ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                 }catch (e){
                   
                    
                    return false;
                 }
              }
           }
                     
           ajaxRequest.open("GET", "delete.php" + queryString, true);
           ajaxRequest.send(null);

           ajaxRequest.onreadystatechange = function(){
              if(ajaxRequest.readyState == 4){
                 location.reload();
              }
           }
           
       }
 $(document).ready(function()
{ 
  $('.deleteit').click(function ()
    {   
      ajaxFunction($(this));
    });
});
</script>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[8];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<script>
window.onload=scroll;
  function scroll(){
  var m=document.getElementById('myTable');
  m.style.overflowX="scroll";
}
</script>
  <div class="container-fluid">
 
		<div id="header">
					<h2 style="text-align: center">Ajay Kumar Garg Institute of Management</h2><hr size="2">
					          

			<h4 style="text-align: center;text-decoration: underline;">MBA Registration Form</h4>
			<h5 style="text-align: center;">Student Details</h5>
      <button style="margin-right:10%;" class='btn btn-primary' onclick="window.location.href='http://admission.akgim.edu.in/admin/logout.php'">Logout</button>

		</div>
		

<?php
include('../dbconnect.php');
		 
 		$data = mysqli_query($con,"SELECT * FROM studentdetails"); 
?>

 		<div style="margin-left: 1%;margin-right: 1%;">
 		<?php
 		echo "<input type='text' id='myInput' onkeyup='myFunction()' placeholder='Search by Student name..'>"; ?>
 		<div style="width: 100%" id="maintable">
        <table id='myTable' class='table table-striped' border='1' style="display: block;overflow-x: scroll;" > 
   			
   				<caption style="text-align: center;">Student Details</caption>
 			  		
 			  			<tr>
                            <th style="text-align:center;" rowspan="2">Date </th>
		 			  		<th rowspan="2">UPSEE Roll No </th> 
		 			  		<th rowspan="2">General Rank </th> 
		 			  		<th rowspan="2">Category Rank </th> 
		  			  	<th rowspan="2">Exam (CAT/MAT/CMAT)</th> 
		            <th rowspan="2">Exam Percentile</th>
		 			  		<th rowspan="2">Any Other Exam(Name) </th>
		 		  	  	<th rowspan="2">Percentile </th>

		 		  	  		<th rowspan="2">Student Name</th>
		 		  	  		<th rowspan="2" style="text-align: center;">Email Id</th>
		 		  	  		<th rowspan="2">Father's Name</th>
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

                  <th colspan="5" style="text-align: center;">Graduation</th>
                  <th colspan="5" style="text-align: center;">Post Graduation</th>

                  <th colspan="5" style="text-align: center;">Any Other</th>


		 		  	  		<th rowspan="2">Experience Duration</th>
		 		  	  		<th rowspan="2">Organisation Name</th>

		 		  	  		<th rowspan="2">Hostel Required</th>
		 		  	  		<th rowspan="2">Email Verified</th>
                  <th rowspan="2">Delete</th>

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

                  <th>Course Name</th>
                  <th>College Name</th>
                  <th>University</th>
                  <th>Passing Year</th>
                  <th>Percentage</th>

                  <th>Course Name</th>
                  <th>College Name</th>
                  <th>University</th>
                  <th>Passing Year</th>
                  <th>Percentage</th>

                  <th>Course Name</th>
                  <th>College Name</th>
                  <th>University</th>
                  <th>Passing Year</th>
                  <th>Percentage</th>
                  
                  </tr>


		 		  	 
		 		  	 <?php
		 		  	 while($r=mysqli_fetch_array($data))
		 		  	 	{ 
		 		  	 		?>
                      
                        <tr>
                                <td><?php echo $r['Date']; ?></td>
                                <td><?php echo $r['see_rollno']; ?></td>
                                <td><?php echo $r['gen_rank']; ?></td>
                                <td><?php echo $r['category_rank']; ?></td>
                               	<td><?php echo $r['cat_mat_cmat']; ?></td>
                               	<td><?php echo $r['percentile']; ?></td>
                               	<td><?php echo $r['other_exam_name']; ?></td>
                               	<td><?php echo $r['other_exam_percentile']; ?></td>

                               	<td><?php echo $r['name']; ?></td>
                               	<td><?php echo $r['email']; ?></td>
                               	<td><?php echo $r['fname']; ?></td>
                               	<td><?php echo $r['dob']; ?></td>
                               	<td><?php echo $r['nationality']; ?></td>
                               	<td><?php echo $r['category']; ?></td>
                               	<td><?php echo $r['Gender']; ?></td>
                               	<td><?php echo $r['state_of_domicile']; ?></td>
                                <td><?php echo $r['parentNo']; ?></td>
                                <td><?php echo $r['candidateNo']; ?></td>

                               	<td><?php echo $r['permanent_add']; ?></td>
                               	<td><?php echo $r['pincode_perm']; ?></td>
                               	
                               	<td><?php echo $r['correspondence_add']; ?></td>
                               	<td><?php echo $r['pincode_corr']; ?></td>
                               	
                               	<td><?php echo $r['local_add']; ?></td>
                               	<td><?php echo $r['pincode_loc']; ?></td>
                               	
                               	<td><?php echo $r['10_school_name']; ?></td>	
                               	<td><?php echo $r['10_board']; ?></td>
                               	<td><?php echo $r['10_passingyear']; ?></td>
                               	<td><?php echo $r['10_percentage']; ?></td>

                               	<td><?php echo $r['12_school_name']; ?></td>
                               	<td><?php echo $r['12_board']; ?></td>
                               	<td><?php echo $r['12_passingyear']; ?></td>
                               	<td><?php echo $r['12_percentage']; ?></td>

                                <td><?php echo $r['graduation_course']; ?></td>
                               	<td><?php echo $r['graduation_college']; ?></td>
                               	<td><?php echo $r['graduation_university']; ?></td>
                               	<td><?php echo $r['graduation_passingyear']; ?></td>
                               	<td><?php echo $r['graduation_percentage']; ?></td>

                                <td><?php echo $r['postgraduation_course']; ?></td>
                                <td><?php echo $r['postgraduation_college']; ?></td>
                                <td><?php echo $r['postgraduation_university']; ?></td>
                                <td><?php echo $r['postgraduation_passingyear']; ?></td>
                                <td><?php echo $r['postgraduation_percentage']; ?></td>

                                <td><?php echo $r['other_course']; ?></td>
                               	<td><?php echo $r['other_college']; ?></td>
                               	<td><?php echo $r['other_university']; ?></td>
                               	<td><?php echo $r['other_passingyear']; ?></td>
                               	<td><?php echo $r['other_percentage']; ?></td>

                               	<td><?php echo $r['experience_duration']; ?></td>
                               	<td><?php echo $r['exp_organisation_name']; ?></td>
                                <td><?php echo $r['hostel_req']; ?></td>
                               	
                               	<td><?php if($r['verified']==1)
                                  echo 'Yes';
                                  else
                                  echo 'No'; ?></td>

                                <?php echo '<td><div class="deleteit" value=" '.$r['id'].'"><a style="background:none;cursor:pointer;background-color:red;color:white; padding-right:11%;border-radius:5px;padding-left:11%;">Delete</a></div><td>'?>
                                
 		  	  			</tr>
 		  	  		
 		  	  	</div>
 		  	  			<?php
 		  	  		}
 		  	  		?>

 		  	  		</div>
              <div class="show"></div>
              <div>
              <div class="row">
                <form action="http://admission.akgim.edu.in/admin/excel.php" method="post">
                <div class="col-md-6">
                  <input type="submit" name="export_excel" class="btn btn-primary" value="Export to excel"></form></div>
                </div>
              </div>
        </div>
</body>
</html>
<?php
}
?>