<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.mi
n.css" rel="stylesheet" integrity="sha384-
+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body>
    <section class="vh-100" style="background-color:green;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
          <hr class="my-4">
            <form action="press_login.php" method="post">
            <h3 class="mb-5">Lelang Online (<span style="color:green;">Admin Mode</span>)</h3>

            <div class="form-outline mb-4">
              <input type="text" name="username" class="form-control form-control-lg" />
              <label class="form-label" >Username</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" name="password" class="form-control form-control-lg" />
              <label class="form-label" >Password</label>
            </div>
            <input class="btn btn-dark btn-lg btn-block" type="submit" value="LOGIN" name="login">
            </form>
            <!-- <p>Dont have account? <a href="signup.php" type="button" value="SIGNUP" name="signup" class="btn btn-primary">Sign up</a></p> -->
            
            <hr class="my-4">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bun
dle.min.js" integrity="sha384-
gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>
</html>
