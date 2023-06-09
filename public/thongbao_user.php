<?php
include '../apps/config/connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông báo</title>
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
    include "../apps/resoures/view/partials/header.php ";
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
                                        <a href="" class="text-decoration-none">Trang chủ</a>
                                    </th>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <a href="nopbaitap.php" class="text-decoration-none">Nộp bài tập</a>
                                    </th>
                                </tr>

                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- col-9 -->
            <div class="col-9">
                <div class="box border bg-light" style="width: 97%;">
                    <div class="tieude border text-center - bg-warning">
                        <h3>Thông báo</h3>
                    </div>
                    <div class="noidung row">
                        <form action="../apps/resoures/view/thongbao/Add_thongbao.php" method="POST">
                            <input name="noidung" type="text" class="form-control my-2 mx-2 d-inline border border-warning" style="width: 85%; height: 60px;" placeholder="Nhập nội dung thông báo">
                            <button class="d-inline btn btn-success">Đăng</button>
                        </form>
                    </div>
                    <br>

                    <?php
                    $query = "SELECT  * FROM user , comment WHERE comment.id_user = user.id_user ORDER BY created_at desc ";
                    $sth = $pdo->prepare($query);
                    $sth->execute([]);
                    while ($row = $sth->fetch()) {
                        if($row['username']=='admin'){
                            echo "
                                    <div class=\" row\">
                                        <div type=\"text\" class=\"form-control mb-2 mx-4 d-inline\" style=\"width: 83%; height: auto;\">
                                            <div class=\"d-flex justify-content-between\">
                                                <span class='text-danger'><b>{$row['username']}</b></span> 
                                                <p>{$row['created_at']}</p>
                                            </div>
                                            <div class=\"mt-1\"><b>{$row['noidung']}</b></div>
                                        </div>
                                    </div>
                                ";
                        }else{
                            echo "
                                    <div class=\" row\">
                                        <div type=\"text\" class=\"form-control mb-2 mx-4 d-inline\" style=\"width: 83%; height: auto;\">
                                            <div class=\"d-flex justify-content-between\">
                                                <span>{$row['username']}</span> 
                                                <p>{$row['created_at']}</p>
                                            </div>
                                            <div class=\"mt-1\">{$row['noidung']}</div>
                                        </div>
                                    </div>
                                ";
                        }
                    }
                    ?>
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