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
            <h1>Trash posts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item "><a href="#" class="">Admin</a></li>
               <li class="breadcrumb-item "><a href="#" class="">Posts</a></li>
               <li class="breadcrumb-item "><a href="#" class="text-secondary">Trash Posts</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


<div class="content-wrapper">
    <div class="container d-flex justify-content-center   w-100  my-2 p-2 " id="form" style="flex-direction:column;">
       
        <table class="table align-middle mt-5 mb-0 bg-white">
         <thead class="bg-dark">
           <tr>
             <th>Title</th>
             <th>Category</th>
             <th>Sub Category</th>
             <th>Actions</th>
           </tr>
         </thead>
         <tbody>
            <tr>
             <!-- <td><p class="text-danger">No record found</p></td> -->
            </tr>
          
         </tbody>
        </table>
    </div>
</div>



<?php
      include('includes/footer1.php');
?>