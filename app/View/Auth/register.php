<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Local CSS -->
  <link rel="stylesheet" href="style.css">

  <script src="https://unpkg.com/feather-icons"></script>

  <!-- Bootstrap CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>


  <div class="row w-100">
    <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
      <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/pages/login-v2.svg" alt="Login V2" /></div>
    </div>
    <div class="d-lg-flex col-lg-4 align-items-center p-5 bg-white">
      <div class="col-12 mx-auto">
        <h2 class="card-title mb-4">Welcome to ICWorks 👋</h2>
        <p class="card-text mb-2">Please sign-in to your account and start the your work</p>
        <form class="mt-5" action="/storeRegister" method="POST">
          <input type="hidden" name="type" value="register">
          <div class="mb-1">
            <label class="form-label" for="username">Username</label>
            <input class="form-control" id="username" type="text" name="username" autofocus="" tabindex="1" />
          </div>
          <div class="mb-1">
            <div class="d-flex justify-content-between">
              <label class="form-label" for="tingkatan">Tingkatan</label>
            </div>
            <div class="input-group input-group-merge form-tingkatan-toggle">
              <input class="form-control form-control-merge" id="tingkatan" type="tingkatan" name="tingkatan" tabindex="2" />
            </div>
          </div>
          <div class="mb-1">
            <div class="d-flex justify-content-between">
              <label class="form-label" for="angkatan">Angkatan</label>
            </div>
            <div class="input-group input-group-merge form-angkatan-toggle">
              <input class="form-control form-control-merge" id="angkatan" type="angkatan" name="angkatan" tabindex="2" />
            </div>
          </div>
          <div class="mb-1">
            <div class="d-flex justify-content-between">
              <label class="form-label" for="userPwd">Password</label>
            </div>
            <div class="input-group input-group-merge form-userPwd-toggle">
              <input class="form-control form-control-merge" id="userPwd" type="userPwd" name="userPwd" placeholder="············" tabindex="2" />
            </div>
          </div>
          <button class="btn btn-primary w-100 mt-4" tabindex="4">Sign in</button>
        </form>
        <!-- <p class="text-center mt-2"><span>New on our platform?</span><a href="page-auth-register-v2.html"><span>&nbsp;Create an account</span></a></p> -->
      </div>
    </div>
  </div>




  <script>
    feather.replace()
  </script>

</body>

</html>