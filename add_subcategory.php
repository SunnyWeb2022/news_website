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
            <h1>Add SubCategory</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" class="">Admin</a></li>
               <li class="breadcrumb-item "><a href="#" class="">Sub Category</a></li>
               <li class="breadcrumb-item "><a href="#" class="text-secondary">Add SubCategory</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


<div class="content-wrapper">
    <div class="container d-flex justify-content-center   w-100  my-2 p-2 " id="form" style="flex-direction:column;">
        <h4 class="my-3">Add SubCategory</h4>
        <hr/>
      <?php
        if(isset($_GET['edit_subcategory']))
        {
                $edit_subcategory=$_GET['edit_subcategory'];
                include('./db/database.php');
                $select="Select * from sub_category where s_no='$edit_subcategory'";
                $select_query=mysqli_query($con, $select);
                if($row=mysqli_fetch_assoc($select_query))
                {
                    $sl_no=$row['s_no'];
                    $category_name=$row['category1'];
                    $subcategory_name=$row['sub_category1'];
                    $description_name=$row['description1'];
        ?>

      <form class="w-50" method='POST' action="<?php echo ($_SERVER['PHP_SELF']); ?>">

          <input type="hidden" name="edit_slno" value="<?php echo $sl_no  ?>">
                   
          <div class="form-outline mb-12 mb-md-4">
            <label class="visually-hidden" for="inlineFormSelectPref">Cetegory</label>
            <?php
              include('./db/database.php');
               $sql="select * from add_category";
                $query=mysqli_query($con,$sql);
                   if(mysqli_num_rows($query)>0)
                   {
                     echo "<select class='select p-2 form-control' name=edit_cate  style='width:100%;'>
                     <option value='$category_name' selected hidden>$category_name</option>";

                     while($row=mysqli_fetch_assoc($query))
                     {

                     echo " <option value='{$row['category']}'>{$row['category']}</option>";
                     };  
                   
                    echo "</select>";
                   }; 
            ?> 
         </div>

        
         <div class="form-outline mb-4">
            <label class="form-label" for="form4Example1">Sub Category</label>
            <input type="text" id="form4Example1" class="form-control" name="edit_subcategory"  value='<?php echo $subcategory_name  ?>' required/>
          </div>

          <!-- Message input -->
          <div class="form-outline mb-4">
              <label class="form-label" for="form2Example2">Category Description</label>
              <textarea class="form-control" id="form4Example2" rows="8" name="edit_description" required><?php echo  $description_name    ?></textarea>
          </div>
          <!-- Submit button -->
          <button type="submit" name="update" class="btn btn-warning btn-block mb-4 mx-auto w-25" >Update</button>
        </form>


      <?php  
              }
            }
      
          else{
      ?>


        <form class="w-50" method='POST' action="<?php echo ($_SERVER['PHP_SELF']); ?>">
          <div class="form-outline mb-12 mb-md-4">
            <label class="visually-hidden" for="inlineFormSelectPref">Cetegory</label>
            <?php
              include('./db/database.php');
               $sql="select * from add_category";
                $query=mysqli_query($con,$sql);
                   if(mysqli_num_rows($query)>0)
                   {
                     echo "<select class='select p-2 form-control' name=cate  style='width:100%;'>
                     <option value='' selected hidden>Selected Cetegory</option>";

                     while($row=mysqli_fetch_assoc($query))
                     {

                     echo " <option value='{$row['category']}'>{$row['category']}</option>";
                     };  
                   
                    echo "</select>";
                   }; 
            ?> 
         </div>

         <div class="form-outline mb-4">
            <label class="form-label" for="form4Example1">Sub Category</label>
            <input type="text" id="form4Example1" class="form-control" name="sub_category"  placeholder="Sub Category" required/>
          </div>

          <!-- Message input -->
          <div class="form-outline mb-4">
              <label class="form-label" for="form2Example2">Category Description</label>
              <textarea class="form-control" id="form4Example2" rows="8" name="description" required></textarea>
          </div>
          <!-- Submit button -->
          <button type="submit" name="submit" class="btn btn-primary btn-block mb-4 mx-auto w-25" >Submit</button>
        </form>
         <?php   }  ?>          

    </div>
</div>



<?php
    include('includes/footer1.php');
 ?>
<?php 
  if(isset($_POST['submit']))
  {
    $cate=$_POST['cate'];
    $sub_category=$_POST['sub_category'];
    $description=$_POST['description']; 

    // echo $cate;

    include('./db/database.php');

      $sql1="insert into sub_category(category1,sub_category1,description1) values ('$cate','$sub_category','$description')";
      $query1=mysqli_query($con, $sql1);
      if($query1 > 0)
      {
        echo "<script>alert('Successfully inserted sub_category date')</script>";
     }
     else{ 
       echo "<script>alert('did not sub_category inserted data')</script>";
     }

  }    

  if(isset($_POST['update']))
  {
          $seri_no=$_POST['edit_slno'];
          $update_cate=$_POST['edit_cate'];
          $subcate=$_POST['edit_subcategory'];
          $desc=$_POST['edit_description'];

          include('./db/database.php');

          $update="update sub_category set category1='$update_cate',sub_category1='$subcate',description1='$desc' where s_no='$seri_no'";
          $query1=mysqli_query($con, $update);
          if($query1 > 0)
          {
            echo "<script>alert('Successfully update date')</script>";
         }
         else{ 
           echo "<script>alert('Did not updated data')</script>";
         }

  }



?>
