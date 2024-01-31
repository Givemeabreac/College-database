<?php

session_start();

    if(!isset($_SESSION['name']))
    {
        header("location:login.html");
    }

    elseif($_SESSION['usertype']=='admin')
    {
        header("location:login.html");
    }
?>

<!DOCTYPE html>
<html>
<head>
   <meta charsert="utf-8">
   <title>Student Dashboard</title>
   <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
    <header class="header">

        <a href="">Student Dashbaord</a>
        <div class="logout">

            <a href="logout.php" class="button">Logout</a>

        </div>

    </header>

    <aside>

       <ul>

           <li>
              <a href="">My Courses</a>
           </li>

           <li>
              <a href="">My Result</a>
           </li>

       </ul>
    </aside>

    <div class="content">
        <h1>Dashboard</h1>
        <p>This the dashboard only for the students.
            No on other than the student is allowed.
        </p>
    </div>

</body>
</html>