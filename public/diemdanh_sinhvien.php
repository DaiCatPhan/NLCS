<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Sinh Viên</title>
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

    <!-- begin MAIN  -->
    <div class="min_height">
        <!-- backgournd -->
        <div class="row  pos_relative">
            <div class=" col" style="height: 200px;">
                <img src="https://anhdepfree.com/wp-content/uploads/2022/02/background-bang-hoc-tap_657228.jpg" alt="" class="w-100 position-relative" style="height: 200px;">
                <h1 class="position-relative text-center text-white" style="bottom: 130px">Niên luận cơ sở</h1>
            </div>
        </div>
        <a href="http://localhost/NLCS/public/main_admin.php" class="">
            <i class="fa-solid fa-backward-fast fa-beat fa-xl" style="margin: 20px 0 0 20px;"></i>
        </a>

        <div class="row">
            <div class="col-4">
                <div class="box  m-auto" style="width: 95%;">
                    <div class="tieude">
                        <h3 class="text-center">Thống kê vắng</h3>
                    </div>
                    <div class="noidung">
                        <table class="table table-bordered">
                            <tr>
                                <th>Họ và tên </th>
                                <th>Vắng</th>
                            </tr>
                            
                            <!--  Hiển thị tên sinh viên và số buổi vắng -->
                            <?php
                            $query = "  SELECT username , vang 
                                        FROM diemdanh , user 
                                        WHERE user.id_user = diemdanh.id_user 
                                    ";
                            $sth = $pdo->prepare($query);
                            $sth->execute([]);
                            while ($row = $sth->fetch()) {
                                echo "
                                        <tr>
                                            <td>{$row['username']}</td>
                                            <td>{$row['vang']}</td>
                                        </tr>
                                    ";
                            }

                            
                            ?>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Tạo form lấy dữ liệu id_user và số ngày vắng để xử lí php bên trang điemanh_sinhviên.php -->
            <div class="col-8 m-auto">
                <form action="../apps/resoures/view/sinhvien/Diemdanh_sinhvien.php" method="POST">
                    <div class="box mt-3" style="width: 98%;">

                        <div class="noidung">
                            <table class="table table-bordered border-warning table-light">
                                <tbody>
                                    <tr>
                                        <td colspan="2">
                                            <h3 class="mb-0">Thêm mới thông tin điểm danh</h3>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th class="w-25" scope="col">Tên sinh viên </th>
                                        <td scope="col">
                                            <select name="username" id="username" class="w-100" style="height: 50px;" required>
                                                <option value="">Chọn tên sinh viên</option>
                                                <?php
                                                    $query = "SELECT * FROM user WHERE NOT username = 'admin'";
                                                    $sth = $pdo ->prepare($query);
                                                    $sth ->execute([

                                                    ])  ;
                                                    while($row = $sth->fetch()){
                                                        echo "
                                                        <option value\"{$row['username']}\">{$row['username']}</option>
                            
                                                        ";
                                                    }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Môn </th>
                                        <td scope="col">
                                            <p class="w-100 form-control d-flex align-items-center" style="height: 50px;">Niên luận cơ sở</p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Số buổi vắng </th>
                                        <td scope="col">
                                            <input name="vang" type="number" class="w-100 form-control" style="height: 50px; " required>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th colspan="2" class="text-center">
                                            <button type="submit" class="btn btn-success">Hoàn tất thông tin</button>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<!-- end MAIN  -->

<!--begin FOOTER  -->
<?php include_once "../apps/resoures/view/partials/footer.php"; ?>
<!-- end  FOOTER  -->

<!-- {{!-- link js bootstrap  --}} -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>