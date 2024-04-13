<?php require_once "dbconfig.php"; ?>
<?php include 'header.php'; ?>
<?php include 'header-main.php'; ?>

<section class="section-conten padding-y" style="min-height:84vh">

	<div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
      <div class="card-body">
      <h4 class="card-title mb-4">Sign in</h4>
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
          <div class="form-group">
			 <input type="email" name="email" class="form-control" placeholder="Email Address" >
          </div> 
          <div class="form-group">
			<input type="password" name="password" class="form-control" placeholder="Password" >
          </div> 
          
          <div class="form-group">
          	<a href="#" class="float-right">Forgot password?</a> 
           
          </div> 
          <div class="form-group">
              <button type="submit" name="signin" class="btn btn-primary btn-block"> Login  </button>
          </div>     
      </form>
	  <?php
            if (isset($_REQUEST['signin'])) {
              extract($_REQUEST);
              $a = select("select * from register where email='$email' and password='$password'");
              $ab = mysqli_num_rows($a);
              if ($ab == 1) {
                while ($t = mysqli_fetch_array($a)) {
                  $_SESSION['userlogin'] = $t[0];
                  $_SESSION['username'] = $t[1];
                  echo "<script>window.location='index.php';</script>";
                }
              } else {
                echo "<div class='alert alert-danger'>Something went wrong Please Try Again</div>";
              }
            }

            ?>
      </div>
    </div> 

     <p class="text-center mt-4">Don't have account? <a href="register.php">Sign up</a></p>
     <br><br>


</section>

<?php include 'footer.php'; ?>




</body>
</html>