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
        <div class="mt-3">
            <div class=" ">
                <a href="http://localhost/NLCS/public/main_admin.php" class="">
                    <i class="fa-solid fa-backward-fast fa-beat fa-xl" style=" position: absolute;left: 30px; margin-top: 10px;"></i>
                </a>
                <h1 class="text-center text-primary"></h1>
                <form action="timkiem_sinhvien.php" method="POST" class="text-center">
                    <input type="text" class="form-control w-25 d-inline border border-warning" name="mssv_timkiem">
                    <span class="d-inline">
                        <button class="btn">
                            <i class="fa-solid fa-magnifying-glass fa-beat fa-2xl" style="color: #4dff00;"></i>
                        </button>
                    </span>
                </form>
                <div class="box m-auto" style="width: 90%;">
                    <div class="d-flex justify-content-between mb-1">
                        <div class="">
                            <button class="btn btn-warning" style="width: 105px;"><b>In file</b></button>
                            <button class="btn btn-success" style="width: 105px;"><b>Xuất PDF</b></button>
                        </div>
                        <a href="thongke.php">
                            <button class="btn btn-secondary">Hiển thị tất cả</button>
                        </a>
                    </div>
                    <table class="table table-bordered border-primary text-center">
                        <thead>
                            <tr style="background-color: #ffc7c7bf;">
                                <th scope="col">STT</th>
                                <th scope="col">Mã số sinh viên</th>
                                <th scope="col">Họ tên sinh viên</th>
                                <th scope="col">MSSV</th>
                                <th scope="col">Lớp</th>
                                <th scope="col">Mã môn học</th>
                                <th scope="col">Bài làm</th>
                                <th scope="col">Điểm</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query =   "SELECT * FROM user , diem , fileupload  
                                        WHERE user.id_user=diem.id_user AND user.id_user = fileupload.id_user 
                                        AND NOT user.username = 'admin'";
                            $sth = $pdo->prepare($query);
                            $sth->execute([]);
                            $i=0;
                            while ($row = $sth->fetch()) {
                                $i++;
                                // khuc dau
                                echo "
                                        <tr>
                                            <td>$i</td>
                                            <td>{$row['mssv']}</td>
                                            <td>{$row['username']}</td>
                                            <td>{$row['mssv']}</td>
                                            <td>{$row['lop']}</td>
                                            <td>CT271</td>
                                    ";
                                    // khuc giua

                                    if (!empty($row['noidung_file'])) {
                                        echo "
                                                <td><a href=\"\" class=\"text-decoration-none\">{$row['noidung_file']}</a></td>
                                            ";
                                    } else {
                                        echo "
                                                <td>
                                                    <a href=\"\" class=\"text-decoration-none\">Chưa nộp</a>
                                                </td>
                                            ";
                                    }
                                    // khuc cuoi
                                    
                                    echo "        
                                            <td>{$row['diem']}</td>
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