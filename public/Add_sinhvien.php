<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lí Sinh Viên</title>
    <!-- link css  -->
    <link rel="stylesheet" href="../apps/resoures/css/style.css">
    <!-- link bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- {{!-- link jquery  --}} -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- {{!-- link font awesome  --}} -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
    <!--begin HEADER -->
    <?php include_once "../apps/resoures/view/partials/header_admin.php"; ?>
    <?php include '../apps/config/connect.php'; ?>
    <!--end   HEADER -->

    <body>
        <!-- begin MAIN  -->
        <div class="container-fuild">
            <a href="http://localhost/NLCS/public/main_admin.php" class="">
                <i class="fa-solid fa-backward-fast fa-beat fa-xl" style=" position: absolute;left: 70px; margin-top: 30px;"></i>
            </a>
            <section class="" style="background-color: #eee;">
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-lg-12 col-xl-11">
                            <div class="card text-black" style="border-radius: 25px;">
                                <div class="card-body p-md-5" style="background-color: #def9f8;">
                                    <div class="row justify-content-center">
                                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 text-center">Thêm Sinh Viên</p>
                                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                            <form class="mx-1 mx-md-4 " method="POST" action="../apps/resoures/view/sinhvien/Add_sinhvien.php">
                                                <!-- error  -->
                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <div class="form-outline flex-fill mb-0">
                                                        <label class="mx-5 text-danger" for="">
                                                            <b>
                                                                <?php
                                                                if (isset($_GET['err'])) {
                                                                    echo "Tài khoản đã được tạo !!! ";
                                                                }
                                                                ?>
                                                            </b>
                                                        </label>
                                                    </div>
                                                </div>
                                                <!-- {{!-- Email  --}} -->
                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <!-- <i class="fas fa-envelope fa-lg me-3 fa-fw mb-4"></i> -->
                                                    <i class="fa-solid fa-envelope  fa-xl  me-3  mt-3" style="color: #2def06;"></i>
                                                    <div class="form-outline flex-fill">
                                                        <label class="form-label" for="email"><b>Your Email : </b></label>
                                                        <input type="email" id="email" class="form-control" name="email" required />
                                                    </div>
                                                </div>

                                                <!-- username  -->
                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fa-solid fa-user fa-xl me-3  mt-3" style="color: #0858e2;"></i>
                                                    <div class="form-outline flex-fill ">
                                                        <label class="form-label" for="username"><b>User name</b> </label>
                                                        <input type="" id="username" class="form-control" name="username" required />
                                                    </div>
                                                </div>



                                                <!-- MSSV  -->
                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fa-solid fa-face-smile fa-xl me-3  mt-3" style="color: #ffea00;"></i>
                                                    <div class="form-outline flex-fill">
                                                        <label class="form-label" for="mssv"><b>MSSV</b></label>
                                                        <input type="" id="mssv" class="form-control" name="mssv" required />
                                                    </div>
                                                </div>

                                                <!-- Lớp  -->
                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fa-solid fa-school fa-xl me-2 mt-3" style="color: #1fffda;"></i>
                                                    <div class="form-outline flex-fill">
                                                        <label class="form-label" for="lop"><b>Lớp</b></label>
                                                        <input type="" id="lop" class="form-control" name="lop" required />
                                                    </div>
                                                </div>

                                                <!-- Password  -->
                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fa-solid fa-lock  fa-xl me-3 mt-3" style="color: #e70d0d;"></i>
                                                    <div class="form-outline flex-fill ">
                                                        <label class="form-label" for="pass"><b>password</b></label>
                                                        <input type="password" id="pass" class="form-control" name="pass" required />
                                                    </div>
                                                </div>

                                                <!-- detai  -->
                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fa-solid fa-pen-to-square fa-xl me-3 mt-3" style="color: #00ff62;"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <label class="form-label" for="detai"><b>Đề tài </b></label>
                                                        <input type="" id="detai" class="form-control" name="detai" required />
                                                    </div>
                                                </div>



                                                <div class="d-flex justify-content-center mb-3 mb-lg-4">
                                                    <button type="submit" class="btn btn-primary btn-lg">Thêm sinh viên</button>
                                                </div>

                                            </form>

                                        </div>
                                        <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                            <img src="../apps/resoures/css/img/ocean-3605547_960_720.jpg" class="img-fluid" alt="" style="height: 600px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- end MAIN  -->

        <!--begin FOOTER  -->
        <?php include_once "../apps/resoures/view/partials/footer.php"; ?>
        <!-- end  FOOTER  -->
    </body>


    <!--begin FOOTER  -->
    <?php include_once "../apps/resoures/view/partials/footer.php"; ?>
    <!-- end  FOOTER  -->
</body>
<!-- {{!-- link js bootstrap  --}} -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>