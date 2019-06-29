<?php
    include('careers-code.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
    <link rel="stylesheet" href="top off website.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
</head>


<body>
<form action="careers.php" method="POST" class="modal_content" id="careers-form">
    <div class="container">

        <h1 class="headings">Careers at foodies</h1>

        <p class="formText">Submit your application.</p>

        <hr>

        <input type="text" placeholder="Enter Your Full Name" name="applicant_name" required>


        <input type="text" placeholder="Enter Your Email" name="applicant_email" required>

        <select name="applicant_degree" class="careers-select-options" title="Degree Level" required="">
            <option value="" selected=""> Select Highest Degree </option>
            <option value="10"> Matric </option>
            <option value="12">Inter</option>
            <option value="14">Graduate</option>
            <option value="16"> Master </option>
            <option value="18">MPhil</option>
            <option value="20">PhD</option>
        </select>

        <select name="applicant_position" class="careers-select-options" title="Select Department" required="">
            <option value="" selected=""> Do you have Work Experience? </option>
            <option value="0"> Fresh </option>
            <option value="2"> 1 - 3 Years </option>
            <option value="4"> 3 - 5 Years </option>
            <option value="6"> 5 - 7 Years </option>
            <option value="8"> 7 - 9 Years </option>
            <option value="10"> 10 or More Years </option>
        </select>

        <select name="applicant_position" type="text" class="careers-select-options" id="tags" placeholder="Area">
            <option value="" selected=""> Position you are applying for </option>
            <option value="1">HR and Training</option>
            <option value="2">Restaurant Operation</option>
            <option value="3">Marketing</option>
            <option value="4">MIS/IT</option>
            <option value="5">Supply Chain &amp; warehouse</option>
            <option value="6">Administration</option>
            <option value="7">Law &amp; Communicationn</option>
            <option value="8">Audit</option>
            <option value="9">Business Development</option>
            <option value="10">Project &amp; Site Development</option>
            <option value="12">Call Center</option>
            <option value="13">Maintenance</option>
            <option value="14">Food Quality Assurance</option>

        </select>

        <select name="applicant_city" class="careers-select-options" title="Select City" required="">
            <option value="" selected=""> Select Your City </option>
            <option value="1"> Karachi </option>
            <option value="2"> Abbottabad </option>
            <option value="3"> Lahore </option>
            <option value="4"> Hyderabad </option>
            <option value="5"> Islamabad </option>
            <option value="6"> Peshawar </option>
            <option value="7"> Multan </option>
            <option value="9"> Faisalabad </option>
            <option value="10"> Rawalpindi </option>
            <option value="11"> Sialkot </option>
            <option value="12"> Gujranwala </option>
            <option value="13"> Mangla </option>
            <option value="14"> Muree </option>
            <option value="15"> Quetta </option>
            <option value="16"> Sargodha </option>
            <option value="18"> Mardan </option>
            <option value="19"> Bahawalpur </option>
            <option value="20"> Sahiwal </option>
            <option value="21"> WahCantt </option>
            <option value="22"> Kharian </option>
            <option value="23"> Thokar Niaz Baig </option>
            <option value="24"> Jhelum </option>
            <option value="25"> Kala Shah Kaku </option>
            <option value="26"> Kamoke </option>
            <option value="27"> Gujrat </option>
            <option value="28"> Rahwali </option>
            <option value="29"> Kings Mall Gujranwala </option>
        </select>

        <textarea class="form-control-textarea" name="coverletter" id="msg" title="Cover Letter" placeholder="Cover Letter"></textarea>
        <input type="file" id="cv" name="cv" title="Upload your cv, (only Ms. Word and PDF files are supported)"
            required="">

        <div class="clearfix">
            <button type="submit" class="submitbtn">Submit</button>
            <button type="button" onclick="window.document.getElementById('careers').style.display='none'"
                class="cancelbtn">Cancel</button>
        </div>
    </div>
</form>

<?php include('footer.php'); ?>
</body>

</html>