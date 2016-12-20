<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Registration Page</title>
    
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <link href="style.css" type="text/css" rel="stylesheet" />


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>


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
    <script type="text/javascript">
        function checkemail() {

            var email = document.getElementById("email").value;

            $.ajax({
                type: 'GET',

                url: 'checkemail.php',
                data: {
                    email: email
                },
                success: function(response) {

                    if (response == "OK") {
                        document.getElementById("emailstatus").innerHTML = "";
                        document.getElementById("submit").disabled = false;
                        return true;
                    } else {
                        document.getElementById("emailstatus").innerHTML = "Email Already Exist";
                        document.getElementById("submit").disabled = true;
                        return false;
                    }
                }

            });

        }

    </script>
</head>

<body style="background: url(Akgim_Building.jpg) no-repeat fixed left top;background-size:100%;">
    <div style="margin-left:10%;margin-right: 10%;padding: 0;background: white;box-shadow: 0px 0px 15px #000000;" class="row center">
        <div class="row">
            <div class="col s12 m12 l12" id="header">
                <img src="header1.jpg" width="101.11%"><br>
            </div>
            <h4>MBA REGISTRATION FORM</h4>
        </div>
        <div class="col s12 m12 grey-text text-darken-1">
            <p>For admission to the MBA degree programmes in AKGIM, recognised by A.I.C.T.E. and affiliated to Dr. A.P.J. Abdul Kalam Technical University, Lucknow (U.P.)</p>
        </div>
        <div class="progress">
            <div class="determinate blue" style="width: 100%"></div>
        </div>
        <div class="col m12 s12 blue-text">
            <h5>MBA Entrance Test</h5>
        </div>
        <div class="col s12 m12 red-text left-align">
            Field marked with an asterisk (*) are mandatory.
        </div>
        <div class="col s12 m12 left-align">If you have appeared for any of the following exams,please enter the details</div>
        <form method="POST" action="registration.php" name="registration" onsubmit="return confirm('Do you really want to submit the form?');">
            <div class="row">
                <div class="col s1 m1"></div>
                <div class="col s2 m2">
                    <br>
                    <h5>UPSEE- 2017</h5>
                </div>
                <div class="col s8 m8 row">
                    <div class="col m4">
                        <div class="input-field">
                            <input type="text" id="rollno" name="rollno" data-validation="custom" data-validation-regexp='^$|^[0-9]{0,15}$'>


                            <label for="rollno">Roll No.</label>
                        </div>
                    </div>
                    <div class="col m4">
                        <div class="input-field">
                            <input type="text" id="genrank" name="genrank" data-validation="custom" data-validation-regexp='^$|^[0-9]{0,7}$'>
                            <label for="genrank" class="center">General Rank</label>
                        </div>
                    </div>
                    <div class="col m4">
                        <div class="input-field">
                            <input type="text" id="catrank" name="catrank" data-validation="custom" data-validation-regexp='^$|^[0-9]{0,7}$'>
                            <label for="catrank">Category Rank</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row valign-wrapper center-align">
                <div class="col s3 m3"></div>
                <h5>Select Exam CAT/MAT/CMAT</h5>
                <div class="col s2 m2 valign" style="padding-top:1.2333%;">

                    <select class="browser-default" name="cat_mat_cmat">
                   <!-- <option value="">CAT/MAT/CMAT</option> -->
                    <option value="CAT">CAT</option>
                    <option value="MAT">MAT</option>
                    <option value="CMAT">CMAT</option>
                </select>
                </div>
                <div class="col s3 m3 valign"><br>
                    <div class="input-field">
                        <input type="text" id="percentile" name="percentile" data-validation="custom" data-validation-regexp="^$|^([0-9]{1,2}([\.][0-9]{1,2})?$|100([\.][0]{1,})?)$">
                        <label for="percentile">Percentile</label>
                    </div>
                </div>
                <div class="col s4 m4"></div>
            </div>
            <div class="row">
                <div class="col s1 m1"></div>
                <div class="col s2 m2">
                    <br>
                    <h5>Any Other Exam</h5>
                </div>
                <div class="col s4 m4">
                    <div class="input-field">
                        <input type="text" id="examname" name="examname">
                        <label for="examname">Exam Name</label>
                    </div>
                </div>
                <div class="col s4 m4">
                    <div class="input-field">
                        <input type="text" id="rank" name="rank" data-validation="custom" data-validation-regexp='^$|^\d{0,6}(\.\d{0,2})?$'>
                        <label for="rank">Rank/Percentile</label>
                    </div>
                </div>
            </div>
            <div class="progress">
                <div class="determinate blue" style="width: 100%"></div>
            </div>
            <div class="row">
                <div class="col s1 m1"></div>
                <div class="col s2 m2">
                    <br>
                    <h5>Name<span class="error"> *</span></h5>
                </div>
                <div class="col s2 m2">
                    <div class="input-field">
                        <input type="text" id="name" name="name" data-validation="required custom" data-validation-regexp="^([a-zA-Z ]*)$">
                        <label for="name">Full Name</label>
                    </div>
                </div>
                <div class="col s2 m2">
                    <br>
                    <h5>Email<span class="error"> *</span></h5>
                </div>
                <div class="col s2 m2">
                    <div class="input-field">
                        <input type="email" id="email" name="email" data-validation="required email" onchange="checkemail();">
                        <label for="email">Email</label><span id="emailstatus"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s1 m1"></div>
                <div class="col s2 m2">
                    <br>
                    <h5>Father's Name<span class="error"> *</span></h5>
                </div>
                <div class="col s2 m2">
                    <div class="input-field">
                        <input type="text" id="fname" name="fname" data-validation="required custom" data-validation-regexp="^([a-zA-Z ]*)$">
                        <label for="fname">Father's Name</label>
                    </div>
                </div>
                <div class="col s2 m2">
                    <br>
                    <h5>Date of Birth<span class="error"> *</span></h5>
                </div>
                <div class="col s4 m4">
                    <div class="input-field">
                        <input type="text" id="dob" name="dob" placeholder="Date of Birth" class="datepicker" data-validation="required">

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s1 m1"></div>
                <div class="col s2 m2">
                    <br>
                    <h5>Nationality<span class="error"> *</span></h5>
                </div>
                <div class="col s2 m2">
                    <div class="input-field">
                        <select class="browser-default" type="text" id="nation" name="nation" data-validation="required custom" data-validation-regexp="^([a-zA-Z ]*)$">
                        <option value="Indian">Indian</option>
                        <option value="Others">Others</option>
                        </select>
                    </div>
                </div>
                <div class="col s2 m2">
                    <br>
                    <h5>Category<span class="error"> *</span></h5>
                </div>
                <div class="col s4 m4">
                    <div class="input-field">
                        <select class="browser-default" name="cat" data-validation="required">
                      <!--<option value="">Select</option>-->
                      <option value="general">General</option>
                      <option value="SC">SC</option>
                      <option value="ST">ST</option>
                      <option value="OBC">OBC</option>
                    </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s1 m1"></div>
                <div class="col s2 m2">
                    <br>
                    <h5>Gender<span class="error"> *</span></h5>
                </div>
                <div class="col s2 m2">
                    <div class="input-field">
                        <select class="browser-default" name="gender" data-validation="required">
                      <!--<option value="">Gender</option> -->
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                    </div>
                </div>
                <div class="col s2 m2">
                    <br>
                    <h5>State of Domicile<span class="error"> *</span></h5>
                </div>
                <div class="col s4 m4">
                    <div class="input-field">
                        <input type="text" id="state" name="state" data-validation="required custom" data-validation-regexp="^([a-zA-Z ]*)$">
                        <label for="state">State of Domicile</label>
                    </div>
                </div>
                <div class="col s1 m1"></div>
            </div>
            <div class="row">
                <div class="col s1 m1"></div>
                <div class="col s2 m2">
                    <br>
                    <h5>Parent Contact Number<span class="error"> *</span></h5>
                </div>
                <div class="col s2 m2">
                    <div class="input-field">
                        <input type="text" id="parentno" name="parentno" data-validation="required custom" data-validation-regexp="^[7-9][0-9]{9}$">
                        <label for="name">Contact Number</label>
                    </div>
                </div>
                <div class="col s2 m2">
                    <br>
                    <h5>Candidate Contact Number<span class="error"> *</span></h5>
                </div>
                <div class="col s2 m2">
                    <div class="input-field">
                        <input type="text" id="candidateNo" name="candidateNo" data-validation="required custom" data-validation-regexp="^(([7-9][0-9]{1,9})*)$">
                        <label for="candidateNo">Contact Number</label>
                    </div>
                </div>
                <div class="col s3 m3"></div>
            </div>

            <div class="progress">
                <div class="determinate blue" style="width: 100%"></div>
            </div>
            <div class="border">
                <table class="centered" style="border: 0px;">
                    <thead>
                        <th>PERMANENT ADDRESS<span class="error"> *</span></th>
                        <th>CORRESPONDENCE ADDRESS<span class="error"> *</span></th>
                        <th>LOCAL GUARDIAN ADDRESS</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="input-field">
                                    <input type="text" id="permanentadd" name="permanentadd" placeholder="Permanent Address" data-validation="required">
                                </div>
                            </td>
                            <td>
                                <div class="input-field">
                                    <input type="text" name="correspondenceadd" placeholder="Correspondence Address" data-validation="required">
                                </div>
                            </td>
                            <td>
                                <div class="input-field">
                                    <input type="text" name="localadd" placeholder="Local Guardian Address">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="row">
                                <div class="col s1"></div>
                                <div class="input-field col s9">
                                    <input type="text" name="pincodeperm" placeholder="PIN Code" data-validation="required custom" data-validation-regexp="^[1-9][0-9]{5}$">
                                </div>
                            </td>
                            <td class="row">
                                <div class="col s1"></div>
                                <div class="input-field col s9">
                                    <input type="text" name="pincodecorr" placeholder="PIN Code" data-validation="custom" data-validation-regexp="^[1-9][0-9]{5}$">
                                </div>
                            </td>
                            <td class="row">
                                <div class="col s1"></div>
                                <div class="input-field col s9">
                                    <input type="text" name="pincodeloc" placeholder="PIN Code" data-validation="custom" data-validation-regexp="^$|^[1-9][0-9]{5}$">
                                </div>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="progress">
                <div class="determinate blue" style="width: 100%"></div>
            </div>
            <div class="s12 m12 center">
                <br>
                <h5 style="text-decoration:underline;">ACADEMIC QUALIFICATION<span class="error"> *</span></h5>
            </div>
            <div class="border">
                <table class="striped centered">
                    <thead>
                        <th>EXAMINATION PASSED</th>
                        <th>SCHOOL/COLLEGE</th>
                        <th>BOARD/UNIVERSITY</th>
                        <th>YEAR OF PASSING</th>
                        <th>OVERALL PERCENTAGE (%)</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h5>10<sup>th</sup> <span class="error"> *</span></h5>
                            </td>
                            <td>
                                <div class="input-field"><input type="text" name="schoolname10" data-validation="required"></div>
                            </td>
                            <td>
                                <div class="input-field"><input type="text" name="board10" data-validation="required"></div>
                            </td>
                            <td>
                                <div class="input-field"><input type="text" name="passingyear10" data-validation="required custom" data-validation-regexp="^[1-9][0-9]{3}$"></div>
                            </td>
                            <td>
                                <div class="input-field"><input type="text" name="percentage10" data-validation="required custom" data-validation-regexp="^([0-9]{1,2}([\.][0-9]{1,2})?$|100([\.][0]{1,})?)$"></div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h5>12<sup>th</sup><span class="error"> *</span></h5>
                            </td>
                            <td>
                                <div class="input-field"><input type="text" name="schoolname12" data-validation="required"></div>
                            </td>
                            <td>
                                <div class="input-field"><input type="text" name="board12" data-validation="required"></div>
                            </td>
                            <td>
                                <div class="input-field"><input type="text" name="passingyear12" data-validation="required custom" data-validation-regexp="^[1-9][0-9]{3}$"></div>
                            </td>
                            <td>
                                <div class="input-field"><input type="text" name="percentage12" data-validation=" required custom" data-validation-regexp="^([0-9]{1,2}([\.][0-9]{1,2})?$|100([\.][0]{1,})?)$"></div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h5>Graduation<span class="error"> *</span></h5>
                            </td>
                            <td>
                                <div class="input-field"><input type="text" name="graduationcollege" data-validation="required"></div>
                            </td>
                            <td>
                                <div class="input-field"><input type="text" name="graduationuniversity" data-validation="required"></div>
                            </td>
                            <td>
                                <div class="input-field"><input type="text" name="graduationpassingyear" data-validation="required custom" data-validation-regexp="^[1-9][0-9]{3}$"></div>
                            </td>
                            <td>
                                <div class="input-field"><input type="text" name="graduationpercentage" data-validation="required custom" data-validation-regexp="^([0-9]{1,2}([\.][0-9]{1,2})?$|100([\.][0]{1,})?)$"></div>
                            </td>

                        </tr>

                        <tr>
                            <td>
                                <h5>Any Other</h5>
                            </td>
                            <td>
                                <div class="input-field"><input type="text" name="othercollege"></div>
                            </td>
                            <td>
                                <div class="input-field"><input type="text" name="otheruniversity"></div>
                            </td>
                            <td>
                                <div class="input-field"><input type="text" name="otherpassingyear" data-validation="custom" data-validation-regexp="^$|^[1-9][0-9]{3}$"></div>
                            </td>
                            <td>
                                <div class="input-field"><input type="text" name="otherpercentage" data-validation="custom" data-validation-regexp="^([0-9]{1,2}([\.][0-9]{1,2})?$|100([\.][0]{1,})?|)$"></div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <div class="row">
                <div class="col s3 m3">
                    <br>
                    <h5>Work Experience, if any:</h5>
                </div>
                <div class="col s4 m4">
                    <div class="input-field">
                        <input type="text" id="duration" name="duration">
                        <label for="duration">Duration(in months)</label>
                    </div>
                </div>
                <div class="col s4 m4">
                    <div class="input-field">
                        <input type="text" id="org" name="org">
                        <label for="org">Organisation Name</label>
                    </div>
                </div>
                <div class="col s1 m1"></div>
            </div>
            <div class="row">
                <div class="col s4 m4 offset-m3">
                    <h5>Do you require hostel accomodation<span class="error">* </span>:</h5>
                </div>
                <div class="col s2 m2">
                    <select class="browser-default" name="hostelreq" id="hostlereq" data-validation="required">
                     <!-- <option value="" selected disabled>Select</option> -->
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>

                </div>
            </div>
            <div class="row">
                <input type="submit" id="submit" class="btn green" name="submit" value="Submit" onsubmit="checkemail();">
            </div>
            <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js">


            </script>

            <script>
                $(document).ready(function() {
                    $('select').material_select();
                    $('.datepicker').pickadate({
                        selectMonths: true,
                        selectYears: 31,
                        max: [2005, 7, 14],
                        closeOnSelect: true,
                        closeOnClear: false,
                    });
                });

            </script>

        </form>

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
        <script>
            $.validate({
                
                lang: 'en'
            });

            $("form").validate({
                errorClass: "error-class",
            });

        </script>
    </div>
</body>

</html>
