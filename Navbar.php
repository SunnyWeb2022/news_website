<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-lg-none sticky-top">
  <div class="container ">
    <a class="navbar-brand" href="#">Hello News</a>
    <button
      class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse justify-content-end " id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <!-- <a class="nav-link" href="#">Latest News</a> -->
        <a class="nav-link" href="india.php">India</a>
        <a class="nav-link" href="bihar.php">Bihar</a>
        <a class="nav-link "href="politics.php">Politics</a>
        <a class="nav-link "href="business.php">Business</a>
        <a class="nav-link "href="cricket.php">Cricket</a>
        <a class="nav-link "href="movies.php">Movies</a>
        <a class="nav-link "href="world.php">World</a>
      </div>
      <form class="d-flex input-group justify-content-end w-auto mx-4" method="POST" action="<?php echo ($_SERVER['PHP_SELF']); ?>">
      <input
        type="search"
        class="form-control rounded"
        placeholder="Search"
        aria-label="Search"
        aria-describedby="search-addon"
        name="search"
        
      />
      <span class="input-group-text border-0" id="search-addon">
        <i class="fas fa-search"></i>
      </span>
    </form>
    </div>
    
  </div>
</nav>

<!-- <div class="container ">
    <div class="row mt-5">
    <div class="col-md-2 col-0  "></div> -->
    <?php
      // if(isset($_POST['search']))
      // {
      //       include('./db/database.php');
      //         $search_item=$_POST['search'];
      
      //         $select_item="select * from add_post where post_title like '%{$search_item}%' or post_category like '%{$search_item}%' or post_subcategory like '%{$search_item}%' or post_descrition like '%{$search_item}%'";
      //         $query=mysqli_query($con,$select_item);
      //         if($row=mysqli_fetch_assoc($query))
      //         {
      //           $new_title=$row['post_title'];
      //           $post_description=$row['post_descrition'];
      //           $post_image=$row['post_image'];
              
    ?>
      <!-- <div class="col-md-8 col-12 my-md-0 my-1">
                <div class="card my-3" style="width:100%;height:90%;">
                  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light" style="width:100%;height:330px;">
                    <img src='<?php echo $post_image; ?>'  alt='photo' class="img-fluid w-100 h-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                  </div>
                  
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $new_title;  ?></h5>
                        <p class="card-text"><?php echo $post_description;  ?></p>
                           <form action="posted_news.php" method="GET">
                             <input type="hidden" name="serial_no" value='<?php echo $sl_no  ?>'>
                             <button type="submit" class="btn btn-primary" >Read more</button>        
                          </form>
                      </div>
                </div>
            </div> -->


    <?php   
        //  }
       
        // }
      
    ?>
<!-- 
<div class="col-md-2 col-0  "></div>
    </div>
  </div> -->