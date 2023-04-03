
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
    <!--end   HEADER -->

    <div class=" min_height">
        <!-- backgournd -->
        <div class="row pos_relative">
            <div class="col" style="height: 200px;">
                <img src="https://anhdepfree.com/wp-content/uploads/2022/02/background-bang-hoc-tap_657228.jpg" alt="" class="w-100 position-relative" style="height: 200px;">
                <h1 class="position-relative text-center text-white" style="bottom: 130px">Niên luận cơ sở</h1>
            </div>
        </div>



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
                                        <a href="" class="text-decoration-none">Thống kê</a>
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

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- col-9 -->
            <div class="col-9 text-center">
                <table class="table table-bordered  border-3" style="width: 98%;">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Mã sinh viên</th>
                            <th scope="col">Tên sinh viên</th>
                            <th scope="col">Lớp</th>
                            <th scope="col">Khoa</th>
                            <th scope="col">Đề tài </th>
                            <th colspan="2">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM user WHERE NOT email = 'admin@gmail.com'";
                        $sth = $pdo->prepare($query);
                        $sth->execute([]);
                        while ($row = $sth->fetch()) {
                            echo "
                                    <tr>
                                        <th scope=\"row\">{$row['id_user']}</th>
                                        <td>{$row['mssv']}</td>
                                        <td>{$row['username']}</td>
                                        <td>{$row['lop']}</td>
                                        <td>CNTT</td>
                                        <td>{$row['detai']}</td>

                                        <td>
                                            <a href=\"Edit_sinhvien.php?id_user={$row['id_user']}\">
                                                <i class=\"fa-solid fa-pen-to-square fa-beat fa-xl\" style=\"color: #00fa6c;\"></i>
                                            </a>
                                        </td>

                                        <td>
                                            <a href=\"\" data-bs-toggle=\"modal\" data-bs-target=\"#delete_novel\"  data-id=\"{$row['id_user']}\">
                                                <i class=\"fa-solid fa-trash fa-bounce fa-xl\" style=\"color: #ff0000;\"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <div class=\"modal fade\" id=\"delete_novel\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title text-danger\" id=\"exampleModalLabel\" >Xóa tài khoản  ?</h5>
                                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                            </div>
                                            <div class=\"modal-body\">
                                                <p><b>Bạn chắc chắn muốn xóa tài khoản sinh viên này ?</b></p>
                                            </div>
                                            <di class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Hủy</button>
                                                <button type=\"button\" class=\"btn btn-danger\" id=\"btn-delete-cart\" >Xóa</button>
                                            </div>
                                        </div>
                                    </div>
                                ";
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Xu li delete -->
    <form name="delete-form" method="POST"></form>    
    <!-- Bootstrap JavaScript Libraries -->
    <script>
        var delete_novel = document.getElementById('delete_novel')
        var id_novel
        var deleteForm = document.forms['delete-form'];
        var btnDeleteCart = document.getElementById('btn-delete-cart');
        delete_novel.addEventListener('show.bs.modal', event => {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-bs-* attributes
            id_novel = button.getAttribute('data-id')
        })
        btnDeleteCart.onclick = function() {
            deleteForm.action = '../apps/resoures/view/sinhvien/Delete_sinhvien.php?id_user=' + id_novel;
            deleteForm.submit();
        }
    </script>

    <!--begin FOOTER  -->
    <?php include_once "../apps/resoures/view/partials/footer.php"; ?>
    <!-- end  FOOTER  -->
</body>
<!-- {{!-- link js bootstrap  --}} -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>

