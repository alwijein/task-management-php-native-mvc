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
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
    rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="/script.js"></script>

  <title><?= $data['title'] ?></title>
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
      <li class="dashboard"><a class="d-flex align-items-center " href="/"><i data-feather="home"></i><span
            class="px-3">Dashboards</span></a>
      </li>
      <li class="menu-title">USER MANAGEMENT</li>
      <li class="dashboard"><a class="d-flex align-items-center active" href="/show-user"><i data-feather="user"></i><span
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
  <div class="content-container mb-5">
    <div class="nav-bar shadow-sm">
      <div class="my-auto badge-text text-end">
        <h4 class="mb-0">Alwi Jein</h4>
        <p>Calon Asisten</p>
      </div>
      <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg">
    </div>
    <div class="container mt-5">
      <table class="table table-borderless table-responsive card-1 p-4">
        <thead>
          <tr class="border-bottom">
            <th> <span class="ml-2">Nomor</span> </th>
            <th> <span class="ml-2">Users</span> </th>
            <th> <span class="ml-2">Angkatan</span> </th>
            <th> <span class="ml-2">Action</span> </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($data['users'] as $user) : ?>

          <tr class="border-bottom">
            <td>
              <div class="p-2"> <span class="d-block font-weight-bold"><?=$user['id_user']?></span></div>
            </td>
            <td>
              <div class="p-2 d-flex flex-row align-items-center mb-2"> <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg"
                  width="40" class="rounded-circle">
                <div class="d-flex flex-column"> <span class="d-block font-weight-bold"><?= $user['username'] ?></span> <small
                    class="text-muted"><?= $user['tingkatan'] ?></small> </div>
              </div>
            </td>
            <td>
              <div class="p-2"> <span class="font-weight-bold"><?= $user['angkatan'] ?></span> </div>
            </td>
            <td>
              <div class="p-2 icons"> <i data-feather="edit" class="text-success trash"></i><i data-feather="trash" class="text-danger"></i></div>
            </td>
          </tr>
          <?php endforeach ?>

        </tbody>
      </table>
    </div>
  </div>


  
  <script>
    feather.replace()
  </script>


</body>

</html>