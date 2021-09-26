

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Local CSS -->
  <link rel="stylesheet" href="/style.css">

  <script src="https://unpkg.com/feather-icons"></script>

  <!-- Bootstrap CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
    rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <title>Hellow</title>
</head>

<body>

  <!-- main manu begin -->
  <div class="main-menu">
    <ul>
      <li>
        <a href="#">
          <img src="/assets/images/title-head.png" alt="" width="85%" class="mb-4 logo">
        </a>
      </li>
    </ul>
    <ul>
      <li class="dashboard"><a class="d-flex align-items-center active" href="/"><i data-feather="home"></i><span
            class="px-3">Dashboards</span></a>
      </li>
      <li class="menu-title">USER MANAGEMENT</li>
      <li class="dashboard"><a class="d-flex align-items-center" href="/show-user"><i data-feather="user"></i><span
            class="px-3">Users</span></a>
      <li class="menu-title">TASK MANAGEMENT</li>
      <li class="dashboard"><a class="d-flex align-items-center" href="/create-task"><i data-feather="file-plus"></i><span
            class="px-3">Craete Task</span></a>
      <li class="dashboard"><a class="d-flex align-items-center" href="/show-task"><i data-feather="list"></i><span
            class="px-3">List Task</span></a>
    </ul>
  </div>
  <!-- main menu end -->

  <!-- dashboard content begin -->
  <div class="content-container">
    <div class="nav-bar shadow-sm">
      <div class="my-auto badge-text text-end">
        <h4 class="mb-0">Alwi Jein</h4>
        <p>Calon Asisten</p>
      </div>
      <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg">
    </div>
    <div class="row">
      <div class="col-3">
        <div class="medal-container shadow-sm">
          <h3>Total Pekerjaan Belum Selesai</h3>
          <img src="assets/icons/progress.svg" alt=""> <span>10</span>
        </div>
      </div>
      <div class="col-9">
        <div class="info-container shadow-sm">
          <h3>Informasi</h3>
          <div class="row">
            <div class="col-3 mb-2 mb-xl-0 px-1">
              <div class="d-flex flex-row">
                <div class="badge-pills bg-light-blue">
                  <i data-feather="user"></i>
                </div>
                <div class="my-auto badge-text">
                  <h4 class="mb-0">43</h4>
                  <p>Users</p>
                </div>
              </div>
            </div>
            <div class="col-3 mb-2 mb-xl-0 px-0">
              <div class="d-flex">
                <div class="badge-pills bg-light-green">
                  <i data-feather="user-check"></i>
                </div>
                <div class="my-auto badge-text">
                  <h4 class="mb-0">43</h4>
                  <p>Asisten</p>
                </div>
              </div>
            </div>
            <div class="col-3 mb-2 mb-xl-0 px-0">
              <div class="d-flex flex-row">
                <div class="badge-pills bg-light-red">
                  <i data-feather="user-minus"></i>
                </div>
                <div class="my-auto badge-text">
                  <h4 class="mb-0">43</h4>
                  <p>Calon Asisten</p>
                </div>
              </div>
            </div>
            <div class="col-3 mb-2 mb-xl-0 px-0">
              <div class="d-flex flex-row">
                <div class="badge-pills bg-light-yellow">
                  <i data-feather="list"></i>
                </div>
                <div class="my-auto badge-text">
                  <h4 class="mb-0">43</h4>
                  <p>Daftar Pekerjaan</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>


  <script>
    feather.replace()
  </script>

</body>

</html>