<?php 
    session_start();
    if(!isset($_SESSION['username']))
    {
      header('location:../index.php'); 
    }

        include('includes/header1.php');
        // include('includes/footer1.php');
?>

       <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-2"></div>
          <div class="col-sm-4 float-sm-right">
            <h1>Add Subadmin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" class="">Admin</a></li>
               <li class="breadcrumb-item "><a href="#" class="">Subadmin</a></li>
               <li class="breadcrumb-item "><a href="#" class="text-secondary">Add Subadmin</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


<div class="content-wrapper">
    <div class="container d-flex justify-content-center   w-100  my-2 p-2 " id="form" style="flex-direction:column;">
        <h4 class="my-3">Add Subadmin</h4>
        <hr/>
        <form class="w-50" method="Post" action="<?php echo ($_SERVER['PHP_SELF']); ?>">
          <!-- Username input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form4Example1">Username (used for login) </label>
            <input type="text" id="form4Example1" class="form-control" name="username"  placeholder="Enter Sub-Admin Username" patter=[A-Za-z0-9]{3,} required/>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form4Example2">Email address</label>
            <input type="email" id="form4Example2" class="form-control" name="email" placeholder="Enter Email" required />
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
              <label class="form-label" for="form2Example2">Password</label>
              <input type="password" id="form2Example2" class="form-control" name="password" placeholder="Enter Password" required/>
          </div>

          

          <!-- Submit button -->
          <button type="submit" name="submit" class="btn btn-primary btn-block mb-4 mx-auto w-25" style="height:40px;">Submit</button>

        </form>
    </div>
</div>



<?php
  include('includes/footer1.php');

  ?>

<?php

  if(isset($_POST['submit'])) 
  {
       $username=$_POST['username'];
       $email=$_POST['email'];
       $password=$_POST['password'];
      
       include('./db/database.php');
       $query=mysqli_query($con,"Insert into account (user_id,email,password) values ('$username','$email','$password')");
       if($query>0)
       {
        //   echo "successfully inserted";
          echo "<script>alert('Successfully insert data')</script>";
         
       }
       else{
        //    / echo "error inserted";
            echo "<script>alert('error insert data')</script>";
           
       }
  }

?>  
