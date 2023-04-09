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
    <title>Niên Luận Cơ Sở</title>
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
        <div class="row">

            <!-- col-3 -->

            <div class="col-3 mt-3 ">
                <div class="box m-auto" style="width: 90%;">
                    <div class="tieude bg-warning text-success text-center">
                        <h3 class="mb-0">Danh mục</h3>
                    </div>
                    <div class="noidung">
                        <table class="table border border-warning">
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <a href="main_admin.php" class="text-decoration-none">Trang chủ</a>
                                    </th>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <a href="quanlisinhvien.php" class="text-decoration-none">Quản lí sinh viên</a>
                                    </th>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <a href="diemdanh_sinhvien.php" class="text-decoration-none">Điểm danh</a>
                                    </th>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <a href="chamdiem.php" class="text-decoration-none">Chấm điểm</a>
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
                                        <a href="tongket.php" class="text-decoration-none">Tổng kết</a>
                                    </th>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <a href="thongke.php" class="text-decoration-none">Thống kê</a>
                                    </th>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- col-9 -->
            <div class="col-9 text-center " style="margin-top: 60px;">
                <table class=" table table-bordered border-success border-3 m-auto" style="width: 80%;">
                    <thead>
                        <tr class="bg-success text-white">
                            <th colspan="2" scope="col">Niện Luận</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Tên trường: </th>
                            <td>Công Nghệ Thông Tin Và Truyền Thông</td>
                        </tr>
                        <tr>
                            <th scope="row">Mã học phần: </th>
                            <td>CT271</td>
                        </tr>
                        <tr>
                            <th scope="row">Tên học phần: </th>
                            <td>Niên Luận Cơ Sở - CNTT</td>
                        </tr>
                        <tr>
                            <th scope="row">Số sinh viên : </th>
                            <td>10</td>
                        </tr>
                    </tbody>
                </table>
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