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


   $host="localhost";
   $user="root";
   $password="";
   $db="collegedatabase";

   $data=mysqli_connect($host,$user,$password,$db);

   $sql="SELECT * from admission";

   $result=mysqli_query($data,$sql);


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
        <center>
        <h1> Applied For ADMISSION</h1>
        <br><br>
        <table border="1px">
            <tr>
                <th style="padding: 20px; font-size: 15px;">Name</th>
                <th style="padding: 20px; font-size: 15px;">Email</th>
                <th style="padding: 20px; font-size: 15px;">Id</th>
                <th style="padding: 20px; font-size: 15px;">Phone</th>
                <th style="padding: 20px; font-size: 15px;">Gender</th>
                <th style="padding: 20px; font-size: 15px;">Language</th>
                <th style="padding: 20px; font-size: 15px;">Password</th>
            </tr>


            <?php

            while($info=$result->fetch_assoc())
            {
            ?>
            <tr>
                <td style="padding: 20px;">
                     <?php echo "{$info['Name']}";?>
                </td>
                <td style="padding: 20px;">
                     <?php echo "{$info['Email']}";?>
                </td>
                <td style="padding: 20px;">
                     <?php echo "{$info['Id']}";?>
                </td>
                <td style="padding: 20px;">
                     <?php echo "{$info['Phone']}";?>  
                </td>
                <td style="padding: 20px;">
                     <?php echo "{$info['Gender']}";?>
                </td>
                <td style="padding: 20px;">
                     <?php echo "{$info['Language']}";?>
                </td>
                <td style="padding: 20px;">
                     <?php echo "{$info['Password']}";?>
                </td>

            </tr>
            <?php
            }
            ?>
        </table>

        </center>
    </div>

</body>
</html>