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
    <title>Chấm điểm</title>
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

            <!-- <div class="col-3">
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
                                        <a href="thongke.php" class="text-decoration-none">Thống kê</a>
                                    </th>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div> -->

            <!-- col-9 -->
            <div class=" text-center">
                <div class="box m-auto" style="width: 85%;">
                    <table class="table table-bordered border-primary">
                        <thead>
                            <tr>
                                <th scope="col">Mã số sinh viên</th>
                                <th scope="col">Họ tên sinh viên</th>
                                <th scope="col">Lớp</th>
                                <th scope="col">Bài làm</th>
                                <th scope="col" style="width: 150px;">Điểm</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM user , diem , fileupload  WHERE user.id_user=diem.id_user AND user.id_user = fileupload.id_user AND NOT user.username = 'admin'";
                                $sth = $pdo->prepare($query);
                                $sth->execute([]);
                                while($row = $sth->fetch()){
                                    echo "
                                        <tr>
                                            <td>{$row['mssv']}</td>
                                            <td>{$row['username']}</td>
                                            <td>{$row['lop']}</td>
                                            <td><a href=\"\" class=\"text-decoration-none\">{$row['noidung_file']}</a></td>
                                            <form action=\"../apps/resoures/view/chamdiem/Chamdiem.php?id_user={$row['id_user']}\" method=\"POST\">
                                                <td>
                                                    <input name=\"diemso\" type=\"text\" class=\"form-control\" value=\"{$row['diem']}\">
                                                </td>
                                                <td>
                                                    <button class=\"btn btn-warning\">Chấm điểm</button>
                                                </td>
                                            </form>
                                        </tr>
                                    ";                                
                                }
                            ?>
                            
                        </tbody>
                    </table>
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