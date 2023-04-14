<?php
session_start();
?>
<nav class="navbar navbar-expand-lg navbar-light  bg-primary   navbar-dark  ">
  <div class="container">

    <div class="">
      <a href="index.php"><img class="bg-white" style="width: 200px; height: 50px; margin-right: 5px" src="https://www.ctu.edu.vn/images/upload/logomobile.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>



    <ul class="navbar-nav" style="margin-right: 25px;">
      <button class="btn btn-light rounded-pill">
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle active text-dark " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php
            if (isset($_SESSION['username'])) {
              echo "
                <span class=\"text\"><b>{$_SESSION['username']}</b></span>
              ";
            }
            ?>
          </a>
          <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
            <!-- <li><a class="dropdown-item" href="register.php"><b>Register</b></a></li> -->
            <li><a class="dropdown-item" href="login.php"><b>Sing in</b></a></li>
            <li><a class="dropdown-item" href="../apps/resoures/view/authentication/submit_logout.php"><b>Log out</b></a></li>
          </ul>
        </li>
      </button>
    </ul>

  </div>
</nav>