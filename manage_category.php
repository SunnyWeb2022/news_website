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
            <h1>Add Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
               <li class="breadcrumb-item "><a href="#" class="">Category</a></li>
               <li class="breadcrumb-item "><a href="#" class="text-secondary">Manage Category</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


<div class="content-wrapper">
    <div class="container d-flex justify-content-center   w-100  my-2 p-2 " id="form" style="flex-direction:column;">
       
        <form class="w-50">
         <a href="add_category.php" class="btn bg-success w-lg-25 mb-5">Add</a>
        </form>
  <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
          <tr>
            <th>#</th>
            <th>Category</th>
            <th>Description</th>
            <th>Posting_Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
   
              <?php
              
                      include('./db/database.php');   
                      $query=mysqli_query($con,"Select * from add_category order by posting_data desc");
                      while($row=mysqli_fetch_assoc($query))
                      {
                         $ser_no=$row['s_no'];
                         $category=$row['category'];
                         $description=$row['description'];
                         $posting_data=$row['posting_data'];
                         // echo "<h1 class='text-center'>$username</h1>";
              ?>
        <tr>
          <td>
            <?php echo $ser_no  ?>
          </td>
          <td>
            <?php echo $category  ?>
          </td>
          <td>
            <?php echo substr($description,0,100)  ?>
          </td>
          <td>
            <?php echo $posting_data  ?>
          </td>
          <td class="d-flex gx-2">
             <form action="add_category.php" method="GET">
                <input type="hidden" name="edit_category" value="<?php echo $ser_no ?>">
                <button type="submit" class="border-0" style="background-color:none;"><i class='bx bx-edit-alt h4 text-success'></i></button>
             </form>
             <form action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="POST">
                    <input type="hidden" name="delete_addpost" value='<?php echo $ser_no  ?>'>
                    <button type="submit" name="delete" class="border-0" style="background-color:none;"><i class='bx bx-message-square-x h4 text-danger'></i></button>        
              </form>
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
<?php

if(isset($_POST['delete']))
{
      $sl_no=$_POST['delete_addpost'];

      include('./db/database.php');

      $delete_item=" Delete from add_category where  s_no='$sl_no' " ;
      $delete_query=mysqli_query($con, $delete_item);
      if($delete_query>0)
      {
            echo "<script>alert('Successfully Deleted Date')</script>";
            echo "<script>window.location='manage_category.php';</script>";
      }
      else{
            echo "<script>alert('Date is not deleted inserted')</script>";
            echo "<script>window.location='manage_category.php';</script>";
      }
}



?>