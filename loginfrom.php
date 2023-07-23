<?php
   session_start();

    include('db/database.php');

    $username=$_POST['username'];
    $password=$_POST['password'];

    $uu='';
    $pp='';

    $query=mysqli_query($con,"SELECT * from account where user_id='$username'");
    while($row=mysqli_fetch_array($query))
    {
        $uu=$row[1];
        $pp=$row[2];
    }
    if($uu==$username && $pp=$password)
    {
        // print "<h1>Successfully login</h1>";
        $_SESSION['username']=$username;
         echo "<script>window.location='admin.php';</script>";

    }
    else
    {
        print "<script>alert('invalid userid and password')</script>";
        echo "<script>window.location='index.php';</script>";
    }


?>