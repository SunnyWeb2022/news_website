<?php 
    session_start();
    if(!isset($_SESSION['username']))
    {
      header('location:../index.php'); 
    }

        include('includes/header1.php');
        // include('includes/footer1.php');
        // echo "" $_SESSION['username'];
?>

    <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header " style="background-color:#fff;">
      <div class="container-fluid ">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active"><a href="logout.php">logout</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php
        // include 'db/connection.php';
        
        // $queryyy="select * from Custome_Master";
        // $resulttt=mysqli_query($conn,$queryyy);

    ?>
    
    
    
   
       
    
    <!-- Main content -->
    <div class="container d-flex justify-content-center  w-100 mt-4 mb-5 py-2 " id="form" style="flex-direction:column;">
      <div class="container">
        <div class="row">
          <div class="col-md-3 mx-auto border shadow border p-3 ">
              <h3>Subscride</h3>
              <div class="box d-flex justify-content-between mt-2">
                <h2>10k</h2>
                <h2><i class='bx bxs-group text-danger'></i></h2>
              </div>
               
          </div>
          <div class="col-md-3 mx-auto border border shadow p-3 ">
              <h3>VIEWS</h3>
              <div class="box d-flex justify-content-between mt-2">
                <h2>10k</h2>
                <h2><i class='bx bxs-user text-danger'></i></i></h2>
              </div>
               
          </div>
          <div class="col-md-3 mx-auto border border shadow p-3">
              <h3>CATEGORY</h3>
              <div class="box d-flex justify-content-between mt-2">
                <h2>10</h2>
                <h2><i class='bx bx-align-left text-danger'></i></h2>
              </div>
               
          </div>
        </div>
      </div>  



    </div>
    
    
    
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  
  
   
    
    
        
        
        

    
    
    
    
    
        
        
      <?php
      include('includes/footer1.php');
      ?>