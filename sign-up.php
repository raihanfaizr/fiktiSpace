<!-- Header -->
<?php 
    $dir= "./";
    $data1= "Sign Up | Fikti Space 2022";
    require "partials/header.php";
?>
<div class="entry-content">
  <div class="container-fluid">
    <div class="row pages-snsu">
        <div class="col-lg-4 col-md-4 text-center pages-img-snsu">
        
        </div>

        <div class="col-lg-8 col-md-8 col-12">
            <form action="" method="post" class="mx-auto form-snsu">
              <br><br>
              <div class="text-center">
                <h1>Sign Up</h1>
              </div>
              <br><br>

              <div class="mx-auto form-input-snsu">

                <h5>Username</h5>
                <input type="text" class="form-control" placeholder="Username">
                <br>

                <h5>Password</h5>
                <input type="password" class="form-control" placeholder="Password">
                <br>

                <h5>Re-type password</h5>
                <input type="password" class="form-control" placeholder="Password">
                <br>

                <h5>Select account type</h5>
                <div class="form-check">
                  <input class="form-check-input" id="inlineRadio1" type="radio" name="jenis" value="mfg">
                  <label class="form-check-label" for="inlineRadio1">Mahasiswa FIKTI Gunadarma</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" id="inlineRadio2" type="radio" name="jenis" value="mg">
                  <label class="form-check-label" for="inlineRadio2">Mahasiswa Gunadarma</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" id="inlineRadio3" type="radio" name="jenis" value="u">
                  <label class="form-check-label" for="inlineRadio3">Umum</label>
                </div>

                <br>
                <button type="submit" class="btn btn-large btn-primary" style="width: 100%;" >Sign up</button>
                <br><br>
                <p>Don't have account? <a href="">Sign Up</a></p><br>

              </div>

            </form>
        </div>
    </div>
  </div>
</div>

    
<!-- Footer -->
<?php 
    require "partials/footer.php";
?>