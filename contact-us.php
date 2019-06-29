<?php 
 include('contactus.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="bootstrap.min.css">   -->
    <link rel="stylesheet" href="sign-up.css">  
    <!-- <link rel="stylesheet" href="top off website.css"> -->
    <link rel="stylesheet" href="navbar.css">

</head>
<body>

<?php include('navbar.php'); ?>

<form action="contact-us.php"  enctype="multipart/form-data" method="POST" class="modal_content" id="contact-us-form">
            <div class="container">
                <h1 class="headings">Contact us</h1>

                <hr>

                <div class="text">
                    <input type="text" placeholder="Enter Your Full Name" name="contact_name" required> 
                </div>
                <span id="span"><?php echo $nameerr; ?></span>

                <div class="text">
                <input type="text" placeholder="Enter Your Email" name="contact_email" required>
                </div>
                <span id="span"><?php echo $emailerr; ?></span>

                <div class="text">
                    <input type="text" placeholder="Enter Your mobile Number" name="contact_phone" required>
                </div>
                <span id="span"><?php echo $pherr; ?></span>

                <div class="text">
                    <select class="careers-select-options" name="contact_type" required="">
                        <option value="">Type</option>
                        <option value="Restaurant or Food Experience">Restaurant or Food Experience</option>
                        <option value="Website or Mobile Experience">Website or Mobile Experience</option>
                        <option value="Refund">Refund</option>
                        <option value="Late Delivery"> Late Delivery </option>
                        <option value="General Inquiry or Comment"> General Inquiry or Comment </option>
                    </select>
                </div>
                <span id="span"><?php echo $typeerr; ?></span>

                <div class="text">
                    <select name="contact_city" class="careers-select-options" title="Select City" required="">
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
                </div>
                <span id="span"><?php echo $cityerr; ?></span>

                <div class="text">
                    <textarea required class="form-control-textarea" rows="5" placeholder="Message" name="contact_msg"></textarea>
                </div>
                <span id="span"><?php echo $msgerr; ?></span>


                         <div class="btnsub">
                            <input type="submit" name="contact" value="contact">
                        </div>
            </div>
        </form>

</body>
</html>