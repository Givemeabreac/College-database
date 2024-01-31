<?php

session_start();

    if(!isset($_SESSION['name']))
    {
        header("location:login.html");
    }

    elseif($_SESSION['usertype']=='student')
    {
        header("location:login.html");
    }
?>

<!DOCTYPE html>
<html>
<head>
   <meta charsert="utf-8">
   <title>Admin Dashboard</title>
   <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
    <header class="header">

        <a href="">Admin Dashbaord</a>
        <div class="logout">

            <a href="logout.php" class="button">Logout</a>

        </div>

    </header>

    <aside>

       <ul>
           
           <li>
              <a href="admission.php">Admission</a>
           </li>

           <li>
              <a href="">Add Student</a>
           </li>

           <li>
              <a href="">Add Teacher</a>
           </li>

           <li>
              <a href="">View Teacher</a>
           </li>

           <li>
              <a href="">Add Courses</a>
           </li>

           <li>
              <a href="">View Courses</a>
           </li>

       </ul>
    </aside>

    <div class="content">
        <h1> ADMIN Dashboard</h1>
    </div>

</body>
</html>