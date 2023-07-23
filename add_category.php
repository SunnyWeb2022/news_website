<?php 
     session_start();
     if(!isset($_SESSION['username']))
     {
       header('location:./index.php'); 
          // echo "<script>window.location='index.php';</script>";
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
              <li class="breadcrumb-item"><a href="#" class="">Admin</a></li>
               <li class="breadcrumb-item "><a href="#" class="">Category</a></li>
               <li class="breadcrumb-item "><a href="#" class="text-secondary">Add Category</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


<div class="content-wrapper">
    <div class="container d-flex justify-content-center   w-100  my-2 p-2 " id="form" style="flex-direction:column;">
        <h4 class="my-3">Add Category</h4>
        <hr/>
      <?php  
         if(isset($_GET['edit_category']))
         {
             $edit_category=$_GET['edit_category'];
             include('./db/database.php');

             $select="Select * from add_category where s_no='$edit_category'";
             $select_query=mysqli_query($con,$select);
             if($row=mysqli_fetch_assoc($select_query))
             {
                   $serial_no=$row['s_no']; 
                   $edit_category_name=$row['category'];
                   $edit_category_description=$row['description'];
            
        ?>
             <form class="w-50" action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="Post">
          <!-- Category input -->
                <input type="hidden" name="serial_no" value="<?php echo $serial_no  ?>">

          <div class="form-outline mb-4">
            <label class="form-label" for="form4Example1">Category</label>
            <input type="text" id="form4Example1" class="form-control" name="edit_category"  placeholder="Category" value="<?php echo $edit_category_name  ?>"  required/>
          </div>
          <!-- Message input -->
          <div class="form-outline mb-4">
              <label class="form-label" for="form2Example2">Category Description</label>
              <textarea class="form-control" id="form4Example2" rows="8" name='edit_description' required><?php echo $edit_category_description  ?></textarea>
          </div>
          <!-- Submit button -->
          <button type="submit" name="update" class="btn btn-warning btn-block mb-4 mx-auto w-25" style="height:40px;">Update</button>
        </form>
 



        <?php 
               }  
           }
           else{

           
          ?>


        <form class="w-50" action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="Post">
          <!-- Category input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form4Example1">Category</label>
            <input type="text" id="form4Example1" class="form-control" name="category"  placeholder="Category"  required/>
          </div>
          <!-- Message input -->
          <div class="form-outline mb-4">
              <label class="form-label" for="form2Example2">Category Description</label>
              <textarea class="form-control" id="form4Example2" rows="12" name='description' required></textarea>
          </div>
          <!-- Submit button -->
          <button type="submit" name="submit" class="btn btn-primary btn-block mb-2 mx-auto w-25" style="height:40px;">Submit</button>
        </form>

         <?php   }     ?>
    </div>
</div>



<?php
      include('includes/footer1.php');
?>
<?php
 if(isset($_POST['submit']))
 {
    $category=$_POST['category'];
    $description=$_POST['description'];

    include('./db/database.php');

      $query=mysqli_query($con,"Insert into add_category (category,description) values ('$category','$description')");
      if($query>0)
      {
         echo "<script>alert('Successfully inserted')</script>";
      }
      else{
        echo "<script>alert('did not inserted data')</script>";
      }

 }
   
 if(isset($_POST['update']))
 {
        $sl_no=$_POST['serial_no'];
        $edit_cate=$_POST['edit_category'];
        $edit_desc=$_POST['edit_description'];

        include('./db/database.php');

        $edit_insert=mysqli_query($con,"Update add_category set category='$edit_cate',description='$edit_desc' WHERE s_no='$sl_no' ");
        if($edit_insert>0)
         {
            echo "<script>alert('Successfully Updated')</script>";
         }
         else{
           echo "<script>alert('did not updated data')</script>";
         }
 }




?>