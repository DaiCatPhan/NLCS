<?php
include '../apps/config/connect.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kê</title>
    <!-- link bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- {{!-- link jquery  --}} -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- {{!-- link font awesome  --}} -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- link css  -->
    <link rel="stylesheet" href="../apps/resoures/css/style.css">
</head>

<body>
    <!--begin HEADER -->
    <?php
    include "../apps/resoures/view/partials/header_admin.php ";
    ?>
    <!--end   HEADER -->

    <div class=" min_height ">
        <!-- backgournd -->
        <div class="row  pos_relative">
            <div class=" col" style="height: 200px;">
                <img src="https://anhdepfree.com/wp-content/uploads/2022/02/background-bang-hoc-tap_657228.jpg" alt="" class="w-100 position-relative" style="height: 200px;">
                <h1 class="position-relative text-center text-white" style="bottom: 130px">Niên luận cơ sở</h1>
            </div>
        </div>


        <!-- Hiển thị Lish Sach  -->
        <div class="row mt-3">

            <!-- col-3 -->

            <div class="col-3">
                <div class="box m-auto" style="width: 90%;">
                    <div class="tieude bg-warning text-success text-center">
                        <h3 class="mb-0">Danh mục</h3>
                    </div>
                    <div class="noidung">
                        <table class="table border">
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <a href="main_admin.php" class="text-decoration-none">Trang chủ</a>
                                    </th>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <a href="quanlisinhvien.php" class="text-decoration-none">Sinh viên</a>
                                    </th>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <a href="diemdanh_sinhvien.php" class="text-decoration-none">Điểm danh</a>
                                    </th>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <a href="Add_sinhvien.php" class="text-decoration-none">Thêm sinh viên</a>
                                    </th>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <a href="thongbao.php" class="text-decoration-none">Thông báo</a>
                                    </th>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <a href="" class="text-decoration-none">Thống kê</a>
                                    </th>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- col-9 -->
            <div class="col-9">
                <div class="">
                    <div class="card" style="width: 18rem;">
                        <img src="https://scontent.fsgn2-6.fna.fbcdn.net/v/t39.30808-6/301559514_3431448863839286_5788095641827175647_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=zDAKL2kMHMEAX-xCq1i&_nc_ht=scontent.fsgn2-6.fna&oh=00_AfC_aFBaHfAN9HOyXTYP2LYcB-aVxJAElBNJDdDbF9eY7w&oe=642AE7D8" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--begin FOOTER  -->
    <?php
    include_once "../apps/resoures/view/partials/footer.php";
    ?>
    <!-- end  FOOTER  -->
</body>
<!-- {{!-- link js bootstrap  --}} -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>