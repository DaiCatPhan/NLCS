<?php
  session_start();
?>
<nav class="navbar navbar-expand-lg navbar-light  bg-dark navbar-dark  ">
  <div class="container">

    <div class="">
      <a href="../public/thongbao_user.php"><img class="bg-white" style="width: 200px; height: 50px; margin-right: 5px" src="https://www.ctu.edu.vn/images/upload/logomobile.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <div class="navbar-nav">
      <a class="nav-link active" aria-current="page" href="">
        <button class="btn btn-secondary rounded-pill " style="height: 50px; min-width: 90px;">
          Xem thông báo
        </button>
      </a>
    </div>

    <div class="navbar-nav">
      <a class="nav-link active" aria-current="page" href="">
        <button class="btn btn-secondary rounded-pill " style="height: 50px; min-width: 90px;">
          Tư tưởng
        </button>
      </a>
    </div>

    <div class="navbar-nav">
      <a class="nav-link active" aria-current="page" href="">
        <button class="btn btn-secondary rounded-pill " style="height: 50px; min-width: 90px;">
          Nộp bài tập
        </button>
      </a>
    </div>

    <div class="navbar-nav">
      <form method="POST" action="../public/timkiem.php" style="margin-top: 12px;">
        <div class="input-group mb-3">
          <input type="text" name="timkiem" class="form-control">
          <span class="input-group-text">
            <button>
              <i class="fa-solid fa-magnifying-glass fa-flip"></i>
            </button>
          </span>
        </div>
      </form>
    </div>

    <ul class="navbar-nav" style="margin-right: 25px;">
      <button class="btn btn-secondary rounded-pill">
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <?php
          if (isset($_SESSION['username'])) {
            echo $_SESSION['username'];
          }
        ?>
        </a>
        <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="">Register</a></li>
          <li><a class="dropdown-item" href="login.php">Sing in</a></li>
          <li><a class="dropdown-item" href="../apps/resoures/view/authentication/submit_logout.php">Log out</a></li>
        </ul>
      </li>
      </button>
    </ul>

  </div>
</nav>