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


  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="/script.js"></script>

  <title>Hellow</title>
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
      <li class="dashboard"><a class="d-flex align-items-center " href="/"><i data-feather="home"></i><span class="px-3">Dashboards</span></a>
      </li>
      <li class="menu-title">USER MANAGEMENT</li>
      <li class="dashboard"><a class="d-flex align-items-center " href="/show-user"><i data-feather="user"></i><span class="px-3">Users</span></a>
      <li class="menu-title">TASK MANAGEMENT</li>
      <li class="dashboard"><a class="d-flex align-items-center" href="/create-task"><i data-feather="file-plus"></i><span class="px-3">Craete Task</span></a>
      <li class="dashboard"><a class="d-flex align-items-center active" href="/show-task"><i data-feather="list"></i><span class="px-3">List Task</span></a>
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
    <div class="row mt-3">

      <?php foreach ($data['post'] as $post) : ?>

        <div class="col-4">
          <div class="task-container shadow-sm">
            <div class="task-head">
              <img src="assets/images/pana.svg" alt="">
            </div>
            <div class="task-body">
              <a href="index.html">
                <h4><?= $post['title'] ?></h4>
              </a>
              <p><?= $post['description'] ?></p>
              <div class="d-flex flex-row">
                <div class="badge-pills bg-light-blue">
                  <i data-feather="calendar"></i>
                </div>
                <div class="my-auto badge-text">
                  <h4 class="mb-0">Deadline</h4>
                  <p><?= $post['deadline'] ?></p>
                </div>
              </div>
              <div class="d-flex flex-row mt-2">
                <div class="badge-pills bg-light-green">
                  <i data-feather="check-square"></i>
                </div>
                <div class="my-auto badge-text">
                  <h4 class="mb-0">Status</h4>
                  <p><?= $post['status'] ?></p>
                </div>
              </div>
              <div class="d-flex flex-row mb-3">
                <img class="rounded-circle profile-img" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg">
                <div class="badge-text mt-3">
                  <h4 class="mb-0">Yudah Islami</h4>
                  <p>Asisten</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php endforeach ?>

    </div>
  </div>



  <script>
    feather.replace()
  </script>


</body>

</html>