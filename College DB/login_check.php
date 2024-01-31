<?php
error_reporting(0);
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
   

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name = $_POST['name'];
        
        $email = $_POST['email'];
        
        $id = $_POST['id'];

        $pass = $_POST['password'];

        $sql="select * from user where name='".$name."' AND email='".$email."' AND id='".$id."' AND password='".$pass."'";

        $result=mysqli_query($data,$sql);

        $row=mysqli_fetch_array($result);


        if($row["usertype"]=="student")
        {
            
            $_SESSION['name']=$name;
            $_SESSION['usertype']="student";

            header("location:studenthome.php");
        }

        elseif($row["usertype"]=="admin")
        {
            $_SESSION['name']=$name;
            $_SESSION['usertype']="admin";
            header("location:adminhome.php");
        }

        else
        {
            echo "name,email,id or password don't match";
        }
    }
?>