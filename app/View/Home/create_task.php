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


  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="/script.js"></script>

  <title>Hello, world!</title>
</head>

<body>

  <!-- main manu begin -->
  <div class="main-menu">
    <ul>
      <li>
        <a href="#">
          <img src="assets/images/title-head.png" alt="" width="85%" class="mb-4 logo">
        </a>
      </li>
    </ul>
    <ul>
      <li class="dashboard"><a class="d-flex align-items-center" href="/"><i data-feather="home"></i><span
            class="px-3">Dashboards</span></a>
      </li>
      <li class="menu-title">USER MANAGEMENT</li>
      <li class="dashboard"><a class="d-flex align-items-center " href="/show-user"><i data-feather="user"></i><span
            class="px-3">Users</span></a>
      <li class="menu-title">TASK MANAGEMENT</li>
      <li class="dashboard"><a class="d-flex align-items-center active" href="/create-task"><i data-feather="file-plus"></i><span
            class="px-3">Craete Task</span></a>
      <li class="dashboard"><a class="d-flex align-items-center" href="/show-task"><i data-feather="list"></i><span
            class="px-3">List Task</span></a>
    </ul>
  </div>
  <!-- main menu end -->

  <!-- dashboard content begin -->
  <div class="content-container mb-5">
    <div class="nav-bar shadow-sm">
      <div class="my-auto badge-text text-end">
        <h4 class="mb-0">Alwi Jein</h4>
        <p>Calon Asisten</p>
      </div>
      <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg">
    </div>
    <img src="assets/images/banner-works.svg" class="img-fluid w-100 py-4" alt="...">
    <form action="/storeCreateTask" method="post">
      <div class="row">
        <div class="col-5">
          <div class="form-task shadow-sm">
            <legend>Buat Pekerjaan</legend>
            <div class="form-group mt-3">
              <label for="title">Nama pekerjaan</label>
              <input type="text" name="title" class="form-control mt-2" id="title" placeholder="Lab Industri">
            </div>
            <div class="form-group mt-3">
              <label for="description">Deskripsi</label>
              <textarea name="description" class="form-control mt-2" id="description" rows="3"
                placeholder="Untuk Persiapan Pratikum"></textarea>
            </div>
            <div class="form-group mt-3">
              <label for="deadline">Deadline</label>
              <input type="date" name="deadline" class="form-control mt-2" id="deadline" placeholder="name@example.com">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
            <button type="reset" class="btn btn-secondary mt-3">Reset</button>
          </div>
        </div>
        <div class="col-7">
          <div class="form-task shadow-sm">
            <table id="myTable" class=" table order-list">
              <label for="inputtugas" class="mb-2">Masukkan Tugas</label>
              <input type="text" name="namatugas" class="form-control" />
            </table>
            <input type="button" class="btn btn-primary mt-" id="addrow" value="+ Tambah" />
          </div>
        </div>
      </div>
    </form>
  </div>



  <script>
    feather.replace()
  </script>


</body>

</html>