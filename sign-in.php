<!-- Header -->
<?php 
    $dir= "./";
    $data1= "Sign In | Fikti Space 2022";
    require $dir."partials/header.php";
?>

<div class="container-fluid">
  <div class="row pages-snsu">
      <div class="col-lg-4 col-md-4 text-center pages-img-snsu">
      
      </div>

      <div class="col-lg-8 col-md-8 col-12">
          <form action="" method="post" class="mx-auto form-snsu">
            <br><br><br>
            <div class="text-center">
              <h1>Sign In</h1>
            </div>
            <br><br><br>

            <div class="mx-auto form-input-snsu">
              <h5>Username</h5>
              <input type="text" class="form-control" placeholder="Username">
              <br>
              <h5>Password</h5>
              <input type="password" class="form-control" placeholder="Password">
              <br><br>
              <button type="submit" class="btn btn-large btn-primary" style="width: 100%;" >Sign In</button>
              <br><br>
              <p>Don't have account? <a href="">Sign Up</a></p><br>
            </div>

          </form>
      </div>
  </div>
</div>


    
<!-- Footer -->
<?php 
    require $dir."partials/footer.php";
?>