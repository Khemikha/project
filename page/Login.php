<!-- Section: Design Block -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container py-5 h-100">
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-xl-10">
      <div class="card rounded-3 text-black">
        <div class="row g-0">
          <div class="col-lg-6">
            <div class="card-body p-md-5 mx-md-4">

              <div class="text-center">
                <img src="./assets/images/Logo.png.png" style="width: 250px;" alt="logo">
                <h4 class="mt-1 mb-5 pb-1">Passara Wellness And Spa</h4>
              </div>
              <?php include('./controller/Login.php') ?>
              <form method="POST" >
                <p>Please login to your account</p>

                <div class="form-outline mb-4">
                  <input type="text" id="form2Example11" class="form-control" name="username" value="" required placeholder="Username" />
                  <label class="form-label" for="form2Example11"></label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form2Example22" class="form-control" name="password" value="" required placeholder="Password" />
                  <label class="form-label" for="form2Example22"></label>
                </div>

                <div class="text-center pt-1 mb-5 pb-1">
                  <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" name="login">Log
                    in</button>
                  <a class="text-muted" href="#!">Forgot password?</a>
                </div>

                <div class="d-flex align-items-center justify-content-center pb-4">
                  <p class="mb-0 me-2">Don't have an account?</p>
                  <button type="button" class="btn btn-outline-danger">Create new</button>
                </div>

              </form>

            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-center bg-danger">
            <img src="./assets/images/Login.png" style="  height: 100%; width: 100%;" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- </section> -->