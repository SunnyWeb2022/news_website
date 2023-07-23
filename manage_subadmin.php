<?php 
    session_start();
    if(!isset($_SESSION['username']))
    {
      header('location:./index.php'); 
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
            <h1>Manage Subadmin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
               <li class="breadcrumb-item "><a href="#" class="">Subadmin</a></li>
               <li class="breadcrumb-item "><a href="#" class="text-secondary">Manage Sub-admin</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


<div class="content-wrapper">
    <div class="container d-flex justify-content-center   w-100  my-2 py-2 " id="form" style="flex-direction:column;">
       
        <form class="w-50">
        <a href="addsubadmin.php" class="btn bg-success w-25 mb-5" style='height:40px;'>Add</a>
        </form>
        <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
          <tr>
            <th>#</th>
            <th>User_Name</th>
            <th>Email</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
   
              <?php

                      include('./db/database.php');   
                      $query=mysqli_query($con,"Select * from account");
                      while($row=mysqli_fetch_assoc($query))
                      {
                        $sl_no=$row['s_no'];
                         $username=$row['user_id'];
                         $email=$row['email'];
                         // echo "<h1 class='text-center'>$username</h1>";
              ?>
        <tr>
           <td>
            <?php echo $sl_no  ?>
          </td>
          <td>
            <?php echo $username  ?>
          </td>
          <td>
            <?php echo $email  ?>
          </td>
          <td>
             <a href="#"><i class='bx bx-edit-alt h4 mx-1 text-success'></i></a>
             <a href="#"><i class='bx bx-message-square-x h4 text-danger'></i></a>
          </td>

        </tr>
    <?php } ?>     
    
  </tbody>
</table>
          
       
    </div>
</div>



<?php
    

      include('includes/footer1.php');
?>