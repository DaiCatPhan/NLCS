<nav class="navbar navbar-expand-lg navbar-light bg-dark navbar-dark  ">
  <div class="container">

    <div class="">
      <a href="../public/main_admin.php"><img class="img_logo" src="https://img.pikbest.com/png-images/book-logo-vector-graphic-element_2433299.png!w700wp" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <div class="navbar-nav">
      <a class="nav-link active" aria-current="page" href="">
        <button class="btn btn-secondary rounded-pill " style="height: 50px; min-width: 90px;">
          Thêm sách mới
        </button>
      </a>
    </div>

    <div class="navbar-nav">
      <a class="nav-link active" aria-current="page" href="">
        <button class="btn btn-secondary rounded-pill " style="height: 50px; min-width: 90px;">
          Quản lí sách
        </button>
      </a>
    </div>

    <div class="navbar-nav">
      <a class="nav-link active" aria-current="page" href="">
        <button class="btn btn-secondary rounded-pill " style="height: 50px; min-width: 90px;">
          Quản lí comment
        </button>
      </a>
    </div>
    
    <ul class="navbar-nav">
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
          <li><a class="dropdown-item" href="register.php">Register</a></li>
          <li><a class="dropdown-item" href="login.php">Sing in</a></li>
          <li><a class="dropdown-item" href="../apps/resoures/view/authentication/submit_logout.php">Log out</a></li>
        </ul>
      </li>
      </button>
    </ul>

  </div>
</nav>