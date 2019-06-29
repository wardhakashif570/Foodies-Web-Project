<?php 

        $nameerr = $emailerr = $pherr = $typeerr = $cityerr = $msgerr = "";
        $contact_name = $contact_email = $contact_phone = $contact_type = $contact_city = $contact_msg = "";
        $vcname = $vcemail = $vcphno = $vctype = $vccity = $vcmsg = false;

        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            function validate_input($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            if(empty($_POST['contact_name']))
                    {
                        $nameerr="Name is required";
                    }else{
                        $contact_name = validate_input($_POST['contact_name']);
                        $vcname = true;
                    }
            

            if(empty($_POST['contact_email'])){
                        $ceerr="E-mail required";
                    }elseif(!filter_var($_POST['contact_email'],FILTER_VALIDATE_EMAIL)){
                        $emailerr = "Invalid Email";
                    }else{
                        $contact_email = validate_input($_POST['contact_email']);
                        $vcemail=true;
                    }
            
            if(empty($_POST['contact_phone'])){
                        $pherr="mobile number required";
                    }if(!preg_match('/^((\+92)|(0092))-{0,1}\d{3}-{0,1}\d{7}$|^\d{11}$|^\d{4}-\d{7}$/', $_POST['contact_phone']))
                    {
                        $pherr = "Invalid mobile number";
                    }else{
                        $contact_phone = validate_input($_POST['contact_phone']);
                        $vcphno=true;
                    }

            if(empty($_POST['contact_type']))
                    {
                        $typeerr="type is required";
                    }else{
                        $contact_type = $_POST['contact_name'];
                        $vctype = true;
                    }
            

            if(empty($_POST['contact_city']))
                    {
                        $cityerr="city is required";
                    }else{
                        $contact_city = $_POST['contact_name'];
                        $vccity = true;
                    }
            

            if(empty($_POST['contact_msg']))
                    {
                        $msgerr="city is required";
                    }else{
                        $contact_msg = validate_input($_POST['contact_msg']);
                        $vcmsg = true;
                    }
            

        }

        
        require_once 'connection.php'; 

        if(isset($_POST['contact']) && $vcname && $vcemail && $vcphno && $vctype && $vccity && $vcmsg )
                {
                
                    
                        $sql =  "INSERT INTO contact (contact_name,contact_email,contact_phone,contact_type,contact_city,contact_msg) VALUES ('$contact_name','$contact_email','$contact_phone','$contact_type','$contact_city','$contact_msg')";
                        $query = mysqli_query($GLOBALS['conn'],$sql);
                        
                        if($query){
                            echo "<script>
                                alert ('Request sent Sucessfully ');
                            </script>";
                        }

                }
 ?>