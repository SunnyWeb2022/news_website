 <!-- footer section  -->

 <section class="">
  <!-- Footer -->
  <footer class="text-center text-white mt-3 fixed-md-bottom fixed-none" style="background-color: #0a4275;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->
      <section class="">
        <p class="d-flex justify-content-center align-items-center">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-outline-light btn-rounded" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop">
            Admin login !
          </button>
        </p>
      </section>
      <!-- Section: CTA -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-white" href="#">SunnykrWeb</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
    </section>



    <!-- Modal -->
<div
  class="modal fade"
  id="staticBackdrop"
  data-mdb-backdrop="static"
  data-mdb-keyboard="false"
  tabindex="-1"
  aria-labelledby="staticBackdropLabel"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Login Form</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="loginfrom.php" method="post">
          <div class="input-group form-outline mb-3">
           <span class="input-group-text" id="inputGroupPrepend2"><i class="fa-solid fa-user"></i></span>
           <input type="text" class="form-control" id="Username" name="username" aria-describedby="inputGroupPrepend2" required />
           <label for="Username" class="form-label">Username</label>
          </div>
          <div class="input-group form-outline">
           <span class="input-group-text" id="inputGroupPrepend2"><i class="fa-solid fa-lock"></i></span>
           <input type="text" class="form-control" id="password" name="password" aria-describedby="inputGroupPrepend2" required />
           <label for="password" class="form-label">Password</label>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Login</button>
      </div>

      </form>

    </div>
  </div>
</div>



    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"></script>