<?php

session_start();

 $host="localhost";

 $user="root";

 $password="";

 $db="collegedatabase";

 $data=mysqli_connect($host,$user,$password,$db);

 if($data===false)
 {
    die("connection error");
 }

 if(isset($_POST['apply']))
 {
    $data_name=$_POST['name'];
    $data_email=$_POST['email'];
    $data_id=$_POST['id'];
    $data_phone=$_POST['phone'];
    $data_gender=$_POST['gender'];
    $data_language=$_POST['language'];
    $data_password=$_POST['password'];

    $sql="INSERT INTO admission(name,email,id,phone,gender,language,password) VALUES('$data_name','$data_email','$data_id','$data_phone','$data_gender','$data_language','$data_password')";

    $result=mysqli_query($data,$sql);

    if($result)
    {
        echo "Registration Successful";
    }

    else
    {
        echo "Registraiton Failed";
    }

 }

?>

<!DOCTYPE html>
<html>
<head>
   <meta charsert="utf-8">
</head>
<body>
    <header class="header">

        <div class="home">

            <a href="homepage.html" class="button">HOME</a>

        </div>

    </header>

    

</body>
</html>