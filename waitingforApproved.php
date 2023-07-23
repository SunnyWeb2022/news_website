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
            <h1>Manage posts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item "><a href="#" class="">Admin</a></li>
               <li class="breadcrumb-item "><a href="#" class="">Posts</a></li>
               <li class="breadcrumb-item "><a href="#" class="text-secondary">Manage Posts</a></li>
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
             <th>S_no</th>
             <th>Name</th>
             <th>Email ID</th>
             <th>Comments</th>
             <th>Status</th>
             <th>Post/News</th>
             <th>Posting Date</th>
             <th>Action</th>
           </tr>
         </thead>
         <tbody>
           <tr>
            <td>1</td>
            <td>Mohan kumar</td>
            <td>mohankumardbg123@gmail.com</td>
            <td>
                <p> Hello India</p>
            </td>
             <td>
               <p class="fw-normal mb-1">Software engineer</p>
               <p class="text-muted mb-0">IT department</p>
             </td>
             <td>
               <span class="badge badge-success rounded-pill d-inline">Active</span>
             </td>
             <td>Senior</td>
             <td>
               <button type="button" class="btn btn-link btn-sm btn-rounded">
                 Edit
               </button>
             </td>
           </tr>
          
         </tbody>
        </table>
    </div>
</div>



<?php
      include('includes/footer1.php');
?>