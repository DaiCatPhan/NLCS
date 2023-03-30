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

            <div class="row">
                <div class="col-3">
                    <div class="box mt-3 m-auto" style="width: 90%;">
                        <div class="tieude bg-warning text-success text-center">
                            <h3 class="mb-0">Danh mục</h3>
                        </div>
                        <div class="noidung">

                        </div>
                    </div>
                </div>

                <!-- PHP -->
                <?php
                    $query = "SELECT * FROM user WHERE id_user = ?";
                    $sth = $pdo->prepare($query);
                    $sth->execute([
                        $_GET['id_user']
                    ]);
                    $row = $sth->fetch();
                ?>

                <div class="col-9 m-auto">
                    <form action="../apps/resoures/view/sinhvien/Edit_sinhvien.php?id_user=<?php echo $row['id_user'];?>" method="POST">
                        <div class="box mt-3" style="width: 98%;">
                            <div class="tieude bg-warning text-success text-center">
                                <h3 class="mb-0">Sinh Viên</h3>
                            </div>
                            <div class="noidung">
                                <table class="table table-bordered border-warning table-light">
                                    <tbody>
                                        <tr>
                                            <th class="w-25" scope="col">Tên sinh viên </th>
                                            <td scope="col">
                                                <input name="username" type="text" value="<?php echo $row['username']; ?>" class="w-100 form-control" style="height: 50px;">
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">MSSV </th>
                                            <td scope="col">
                                                <input name="mssv" type="text" value="<?php echo $row['mssv']; ?>" class="w-100 form-control" style="height: 50px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Email </th>
                                            <td scope="col">
                                                <input name="email" type="text" value="<?php echo $row['email']; ?>" class="w-100 form-control" style="height: 50px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Lớp</th>
                                            <td scope="col">
                                                <input name="lop" type="text" value="<?php echo $row['lop']; ?>" class="w-100 form-control" style="height: 50px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Đề tài </th>
                                            <td scope="col">
                                                <input name="detai" type="text" value="<?php echo $row['detai']; ?>" class="w-100 form-control" style="height: 50px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th colspan="2" class="text-center">
                                                <button class="btn btn-success">Hoàn tất chỉnh sửa</button>
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