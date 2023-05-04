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
                        <table class="table border border-warning">
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <a href="main_admin.php" class="text-decoration-none">Trang chủ</a>
                                    </th>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <a href="Add_sinhvien.php" class="text-decoration-none">Thêm sinh viên</a>
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
            <div class="col-9">
                <div class="box border bg-light" style="width: 97%;">
                    <div class="tieude border text-center bg-warning">
                        <h3>Thông báo</h3>
                    </div>
                    <div class="noidung row">
                        <!-- them thong bao -->
                        <form action="../apps/resoures/view/thongbao/Add_thongbao.php" method="POST">
                            <input name="noidung" type="text" class="form-control my-2 mx-2 d-inline border border-warning" style="width: 85%; height: 60px;" placeholder="Nhập nội dung thông báo ...">
                            <button class="d-inline btn btn-success">Đăng</button>
                        </form>
                    </div>

                    <hr>

                    <?php
                    $query = "SELECT  * FROM user , comment WHERE comment.id_user = user.id_user ORDER BY created_at DESC ";
                    $sth = $pdo->prepare($query);
                    $sth->execute([]);
                    while ($row = $sth->fetch()) {
                        echo "
                                <div class=\" row\">
                                    <div type=\"text\" class=\"form-control mb-2 mx-4 d-inline \" style=\"width: 83%; height: auto;\">
                                        <div class=\"d-flex justify-content-between\">
                                            <span><b>{$row['username']} : </b></span> 
                                            <p>{$row['created_at']}</p>
                                        </div>
                                        <div class=\"mt-1\">{$row['noidung']}</div>
                                        <div class=\"d-flex justify-content-end\" style=\"\">
                                            <a href=\"update_thongbao.php?id_user={$row['id_user']}&id_comment={$row['id_comment']}\" style=\"margin-right: 10px;\" >
                                                <i class=\"fa-solid fa-pen fa-sm\" style=\"color: #09c6ec;\"></i>
                                            </a>
                                            <a href=\"\" data-id=\"{$row['id_comment']}\" data-bs-toggle=\"modal\" data-bs-target=\"#delete_comment\">
                                                <i class=\"fa-solid fa-trash fa-sm\" style=\"color: #df1111;\"></i>
                                            </a>
                                         </div>
                                    </div>
                                </div>
                            ";
                    }
                    ?>
                </div>
            </div>

            <!-- form delete -->
            <div class="modal fade" id="delete_comment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Xóa comment ?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Bạn chắc chắn muốn xóa comment này ?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                            <button type="button" class="btn btn-danger" id="btn-delete-cart">Xóa</button>
                        </div>
                    </div>
                </div>
            </div>
            <form name="delete-form" method="POST"></form>
            <!-- Bootstrap JavaScript Libraries -->
            <script>
                var delete_novel = document.getElementById('delete_comment')
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
                    deleteForm.action = '../apps/resoures/view/thongbao/Delete_thongbao.php?id_comment=' + id_novel;
                    deleteForm.submit();
                }
            </script>
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