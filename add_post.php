<?php 
    session_start();
    if(!isset($_SESSION['username']))
    {
      header('location:index.php'); 
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
            <h1>Add POST</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Post</a></li>
               <li class="breadcrumb-item active">Add Post</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


<div class="content-wrapper">
    <div class="container d-flex justify-content-center  w-100  mb-5 py-2 " id="form" style="flex-direction:column;">
    <?php
      if(isset($_GET['edit_addpost']))
      {
        $seral_no=$_GET['edit_addpost'];
        include('./db/database.php');
       
        $select_query="Select * from add_post where s_no='$seral_no'";
        $select_item=mysqli_query($con,$select_query);
        if($item=mysqli_fetch_assoc($select_item))
        {
                $sl_no=$item['s_no'];
                $news_title=$item['post_title'];
                $news_category=$item['post_category'];
                $news_subcategory=$item['post_subcategory'];
                $news_image=$item['post_image'];
                $news_description=$item['post_descrition'];
       
      ?>


    <form class="mt-5" method='POST' action="<?php echo ($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">

          <input type="hidden" name="edit_slno" value="<?php echo $sl_no  ?>">
         <!-- Name title -->
         <div class="form-outline mb-12 mb-md-4" >
            <label class="form-label" for="form4Example1">Post Title</label>
            <input type="text" id="form4Example1" class="form-control" name="edit_news_title" value='<?php echo $news_title   ?>'  />
          </div>
        <!-- category box  -->
    <div class="form-outline mb-12 mb-md-4">
      <label class="visually-hidden" for="inlineFormSelectPref">Cetegory</label>
      
        <?php 
              include('./db/database.php');
             $sql="select * from add_category";
             $query1=mysqli_query($con,$sql);
                if(mysqli_num_rows($query1)>0)
                {
                  echo "<select class='select p-2 form-control' name=edit_category  style='width:100%;' required>
                  <option value='$news_category' selected>$news_category</option>";

                  while($row=mysqli_fetch_assoc($query1))
                  {

                  echo " <option value='{$row['category']}'>{$row['category']}</option>";
                  };  
                
                 echo "</select>";
                }; 
          ?>
     
    </div>

    <!-- subcategory box -->
    <div class="form-outline mb-12 mb-md-4">
      <label class="visually-hidden" for="inlineFormSelectPref">Sub Cetegory</label>
           <?php  
            
                $sql2="select * from sub_category";
                $query2=mysqli_query($con,$sql2);
                if(mysqli_num_rows($query2))
                {
                  echo "<select class='select p-2 form-control' name=edit_subcategory  style='width:100%;' required>
                  <option value='$news_subcategory' selected >$news_subcategory</option>";
                  while($row1=mysqli_fetch_assoc($query2))
                  {
                    echo " <option value='{$row1['sub_category1']}'>{$row1['sub_category1']}</option>";
                  }
                  echo "</select>";
                }
           


           ?>
    </div>
          <!-- news image  -->
          <div class="form-outline mb-12 mb-md-4">
          <label class="form-label" for="customFile">Chose Image </label>
          <input type="file" class="form-control" id="customFile" name="edit_Choose_image" value="<?php echo $news_image  ?>"/>
              <img src="<?php echo $news_image  ?>" alt="" class="img-fluid my-2 w-25 h-25">
          </div>

          <!-- Message input -->
          <div class="form-outline mb-12 mb-md-4">
            <label class="form-label" for="form4Example3">News Description</label>
            <textarea class="form-control" id="form4Example3" rows="15" name="edit_news_description" ><?php echo  $news_description  ?></textarea>
          </div>
        
          <!-- Submit button -->
          <div class="d-flex justify-content-start w-lg-50 ">
               <button type="submit" name='update' class="btn btn-warning  mx-1  w-lg-25" >Update Post</button>
               <button type="reset" class="btn btn-danger w-lg-25">Discard</button>
          </div>
        </form>

       <?php   
             }
           }
      
         else{

       ?>         

  <!-- add psot insertion      -->
        <form class="mt-5" method='POST' action="<?php echo ($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">

         <!-- Name title -->
         <div class="form-outline mb-12 mb-md-4" >
            <label class="form-label" for="form4Example1">Post Title</label>
            <input type="text" id="form4Example1" class="form-control" name="news_title" placeholder="Enter title" required />
          </div>
        <!-- category box  -->
    <div class="form-outline mb-12 mb-md-4">
      <label class="visually-hidden" for="inlineFormSelectPref">Cetegory</label>
        <?php 
              include('./db/database.php');
             $sql="select * from add_category";
             $query1=mysqli_query($con,$sql);
                if(mysqli_num_rows($query1)>0)
                {
                  echo "<select class='select p-2 form-control' name=category  style='width:100%;' required>
                  <option value='' selected hidden>Selected Cetegory</option>";

                  while($row=mysqli_fetch_assoc($query1))
                  {

                  echo " <option value='{$row['category']}'>{$row['category']}</option>";
                  };  
                
                 echo "</select>";
                }; 
          ?>
     
    </div>

    <!-- subcategory box -->
    <div class="form-outline mb-12 mb-md-4">
      <label class="visually-hidden" for="inlineFormSelectPref">Sub Cetegory</label>
           <?php  
            
                $sql2="select * from sub_category";
                $query2=mysqli_query($con,$sql2);
                if(mysqli_num_rows($query2))
                {
                  echo "<select class='select p-2 form-control' name=subcategory  style='width:100%;' required>
                  <option value='' selected hidden>Selected Sub_Cetegory</option>";
                  while($row1=mysqli_fetch_assoc($query2))
                  {
                    echo " <option value='{$row1['sub_category1']}'>{$row1['sub_category1']}</option>";
                  }
                  echo "</select>";
                }
           


           ?>
    </div>
          <!-- news image  -->
          <div class="form-outline mb-12 mb-md-4">
          <label class="form-label" for="customFile">Chose Image </label>
          <input type="file" class="form-control" id="customFile" name="Choose_image"  required/>
          </div>

          <!-- Message input -->
          <div class="form-outline mb-12 mb-md-4">
            <label class="form-label" for="form4Example3">News Description</label>
            <textarea class="form-control" id="form4Example3" rows="15" name="news_description" required></textarea>
          </div>
        
          <!-- Submit button -->
          <div class="d-flex justify-content-start w-lg-50 ">
               <button type="submit" name='submit' class="btn btn-primary  mx-1  w-lg-25" >Save and Post</button>
               <button type="reset" class="btn btn-danger mx-1  w-lg-25" >Discard</button>
          </div>
        </form>
    </div>
</div>
<?php  }  ?>

<?php
      include('includes/footer1.php');
?>
<?php
if(isset($_POST['submit']))
{

       $title=$_POST['news_title'];
       $category=$_POST['category'];
       $subcategory=$_POST['subcategory'];

       $directory='post_news/';
       $fileName=$_FILES['Choose_image']['name'];
       $temName=$_FILES['Choose_image']['tmp_name'];
       $fileSize=$_FILES['Choose_image']['size'];
       $filetype=$_FILES['Choose_image']['type'];

       $post_image = $directory.$fileName;
       $result2 = move_uploaded_file($temName, $post_image);
       if (!$result2)
        {
           echo "";
           exit;
       }
       
      //  if(!get_magic_quotes_gpc()) 
      //  { 
      //     $fileName = addslashes($fileName);
      //     $post_image = addslashes($post_image); 
      //  }

      //  echo "<script>alert('$post_image')</script>";

       $descrition=$_POST['news_description'];

       $query_insetpost=mysqli_query($con,"Insert into add_post (post_title,post_category,post_subcategory,post_image,post_descrition) values ('$title','$category','$subcategory','$post_image','$descrition')");
       if($query_insetpost>0)
       {
        echo "<script>alert('Successfully inserted Add_Post date')</script>";
       }
       else{
        echo "<script>alert('Did not Add_Post inserted data')</script>";
       }
}

if(isset($_POST['update']))
{
      $eidt_slno=$_POST['edit_slno'];
      $edit_title=$_POST['edit_news_title'];
       $edit_category=$_POST['edit_category'];
       $edit_subcategory=$_POST['edit_subcategory'];

       $directory='post_news/';
       $fileName=$_FILES['edit_Choose_image']['name'];
       $temName=$_FILES['edit_Choose_image']['tmp_name'];
       $fileSize=$_FILES['edit_Choose_image']['size'];
       $filetype=$_FILES['edit_Choose_image']['type'];

       $edit_post_image = $directory.$fileName;
       $result2 = move_uploaded_file($temName, $edit_post_image);
       if (!$result2)
        {
           echo "";
           exit;
       }
       
       $edit_descrition=$_POST['edit_news_description'];

       $update_query=mysqli_query($con,"Update add_post set post_title='$edit_title',post_category='$edit_category',post_subcategory='$edit_subcategory',post_image='$edit_post_image',post_descrition='$edit_descrition' where s_no='$eidt_slno'");
       if($update_query>0)
       {
        echo "<script>alert('Successfully Updated  date')</script>";
       }
       else{
        echo "<script>alert('Did not updated data')</script>";
       }
}



?>