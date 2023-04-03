<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niên Luận Cơ Sở</title>
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
    <?php include_once "../apps/resoures/view/partials/header_index.php"; ?>
    <?php include '../apps/config/connect.php'; ?>
    <!--end   HEADER -->

    <div class="row min_height">
        <!-- backgournd -->
        <div class="col-9">
            <div class=" mt-5 pos_relative m-auto " style="width: 90%;">
                <div class="col">
                    <img src="https://anhdepfree.com/wp-content/uploads/2022/02/background-bang-hoc-tap_657228.jpg" alt="" class="w-100 position-relative" style="height: 200px;">
                    <h1 class="position-relative text-center text-white" style="bottom: 130px">Niên luận cơ sở</h1>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="box border mt-5" style="width: 95%;">
                <div class="tieude text-center bg-warning " style="height: 35px;">
                    <p><b >Điều hướng</b></p>
                </div>
                <div class="noidung">
                    <ul>
                        <li>
                            <a href="" class="text-decoration-none">Trang cá nhân</a>
                        </li>
                        <li>
                            <a href="" class="text-decoration-none">Welcome to CTU-Niên Luận Cơ Sở</a>
                        </li>
                        <li>
                            <a href="" class="text-decoration-none">Các khóa học của tôi</a>
                        </li>
                        <li>
                            <a href="" class="text-decoration-none">Thông tin khóa học</a>
                        </li>
                        <li>
                            <a href="" class="text-decoration-none">Lớp học</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--begin FOOTER  -->
    <?php include_once "../apps/resoures/view/partials/footer.php"; ?>
    <!-- end  FOOTER  -->
</body>
<!-- {{!-- link js bootstrap  --}} -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>