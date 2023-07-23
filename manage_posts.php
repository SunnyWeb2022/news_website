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
             <th stye="width:1%;">#</th>
             <th stye="width:10%;">News_Title</th>
             <th stye="width:10%;">Category</th>
             <th class="" style="width:13%">Sub Category</th>
             <th style="width:20%;">Post Image</th>
             <th class="" style="width:25%">Post Descrition</th>
             <th stye="width:5%;">Posting Date</th>
             <th stye="width:15%;">Actions</th>
           </tr>
         </thead>
         <tbody>
                     <?php

                          include('./db/database.php');   
                          $query=mysqli_query($con,"Select * from add_post order by posting_date desc");
                          while($row=mysqli_fetch_assoc($query))
                          {
                             $ser_no=$row['s_no'];
                             $news_title=$row['post_title'];
                             $post_category=$row['post_category'];
                             $post_sub_category=$row['post_subcategory'];
                             $post_image=$row['post_image'];
                             $post_description=$row['post_descrition'];
                             $posting_data=$row['posting_date'];

                  ?>
            <tr>
              <td>
                <?php echo $ser_no  ?>
              </td>
              <td>
                <?php echo $news_title  ?>
              </td>
              <td>
                <?php echo $post_category  ?>
              </td>
              <td>
                <?php echo $post_sub_category  ?>
              </td>
              <td>
                <img src="post_news/<?php echo $post_image  ?>" alt="photo"  class="img-fluid">
              </td>
              <td>
                <?php echo substr($post_description,0,100)  ?>
              </td>
              <td>
                <?php echo $posting_data  ?>
              </td>
              <td class="d-flex gx-2">
                  <form action="add_post.php" method="GET">
                    <input type="hidden" name="edit_addpost" value='<?php echo $ser_no  ?>'>
                    <button type="submit" class="border-0" style="background-color:none;"><i class='bx bx-edit-alt h4 text-success'></i></button>        
                  </form>
                  <form action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="post">
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

      $delete_item=" Delete from add_post where  s_no='$sl_no' " ;
      $delete_query=mysqli_query($con, $delete_item);
      if($delete_query>0)
      {
            echo "<script>alert('Successfully Deleted Date')</script>";
            echo "<script>window.location='manage_posts.php';</script>";
      }
      else{
            echo "<script>alert('Date is not deleted inserted')</script>";
            echo "<script>window.location='manage_posts.php';</script>";
      }
}


?>