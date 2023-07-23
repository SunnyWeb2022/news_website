<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>news_portal</title>
    <link
       href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
       rel="stylesheet"
     />
     <!-- Google Fonts -->
     <link
       href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
       rel="stylesheet"
     />
     <!-- MDB -->
     <link
       href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css"
       rel="stylesheet"
     />
</head>
<body>
    <?php
        include('Navbar.php');

    ?>




<div class="container ">
    <div class="row mt-5">
    <div class="col-md-2 col-0  "></div>

      <?php
     include('db/database.php');
       
     $sl_no=$_GET['serial_no'];
     $select="Select * from  add_post where s_no='$sl_no'";
     $select_query=mysqli_query($con,$select);
     if($row=mysqli_fetch_assoc($select_query))
     {
        $new_title=$row['post_title'];
        $post_description=$row['post_descrition'];
        $post_image=$row['post_image'];

        // echo "<img src='news_photo/$post_image'/>";
        
    ?>
          <div class="col-md-8 col-12 my-md-0 my-1">
                <div class="card my-3" style="width:100%;height:90%;">
                  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light" style="width:100%;height:330px;">
                    <img src='<?php echo $post_image; ?>'  alt='photo' class="img-fluid w-100 h-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                  </div>
                  <form action="<?php echo($_SERVER['PHP_SELF']) ?>" method="POST">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $new_title;  ?></h5>
                        <p class="card-text"><?php echo $post_description;  ?></p>
                            <div class="d-flex">
                              <input type="text" class="form-control border border-primary rounded-pill" name="comments" placeholder="...Enter  your comments " />
                               <button type="Submit" name="submit" class="btn btn-primary rounded-pill shadow-0 ms-2">POST</button>
                              </div>
                      </div>
                  </form>
                </div>
            </div>

      <?php        
         }
        ?>
    <div class="col-md-2 col-0  "></div>
     <!-- </form>    -->
    </div>
  </div>
  
  <?php   
      include('footer.php');
  ?>

</body>
</html>

<?php
  if(isset($_POST['submit']))
  {
        
  }



?>