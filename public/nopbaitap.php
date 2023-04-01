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
                                        <a href="" class="text-decoration-none">Trang chủ</a>
                                    </th>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <a href="" class="text-decoration-none">Sinh viên</a>
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
            </div> -->

            <!-- col-9 -->
            <div class="col-8">
                <!-- Gioi thieu -->
                <div class="box border m-auto" style="width: 97%;">
                    <div class="row">
                        <div class="d-flex ml-2 justify-content-between">
                            <div class="left" style="margin-left: 60px;">
                                <div class="d-flex">
                                    <span class="mt-3"><i class="fa-solid fa-calendar-days fa-xl"></i></span>
                                    <h3 class=" mt-2" style="margin-left: 14px;">Niên Luận Cơ Sở </h3>
                                </div>
                                <p class="mt-3">Thầy Tân</p>
                                <p>100 điểm</p>
                            </div>
                            <div class="right">
                                <p class="mx-2 my-2"><b>Đến hạn  23:19 1th5</b></p>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="box  m-auto" style="width: 97%;">
                    <div class="text" style="margin-left: 60px;">
                        <h5 style="text-decoration: underline;">Tôi gửi các bạn: </h5>
                        <p>- Code bài làm lưu trên GitHup đã nhận</p>
                        <p>- Link nhận repo bài thực hành (dùng đúng tài khoản GitHub bạn đã sử dụng )</p>
                        <br>
                        <h5 style="text-decoration: underline;">Lưu ý: </h5>
                        <p>- Nộp một file báo cáo chứa đầy đủ các buổi thực hành 1-2-3-4. Nếu file báo cáo chỉ chứa bài thực hành 4 thì chỉ chấm bài thực hành 4.</p>
                        <p>- Định dạng báo cáo cho ngay ngắn, tạo mục lục đến các buổi thực hành trong báo cáo và nhớ lưu các đường link đến repo GitHub code của các bài thực hành vào trong file báo cáo.</p>

                    </div>
                </div>
                <br>
                <div class="row m-auto" style="width: 97%;">
                    <div class="text" style="margin-left: 60px;">
                        <div class="d-flex">
                            <p><i class="fa-solid fa-user-group fa-xl" style="color: #511f46;"></i></p>
                            <p class="mx-2"> Nhận xét của lớp học</p>
                        </div>
                        <br>
                        <div class="mb-5">
                            <form>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">
                                        Nhận xét : 
                                    </label>
                                    <div class="col-sm-10 d-flex">
                                        <input type="password" class="form-control" id="inputPassword" style="width: 90%;">
                                        <span><i class="fa-regular fa-share-from-square fa-xl" style="color: #11ff00;  margin: 20px 0 0 10px ; "></i></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- col - 3 -->
            <div class="col-4">
                <div class="box border" style="width: 97%; box-shadow: 1px 1px 1px 2px #AAA;">
                    <div class="text m-auto" style="width: 90%;">
                        <div class="d-flex justify-content-around">
                            <h2 class="text-center ">Bài tập của bạn </h2>
                            <?php
                                if(isset($_GET['nopfile'])){
                                    echo "
                                        <h3 class=\"text-danger\">Đã nộp</h3>
                                    ";
                                }
                            ?>
                        </div>
                        <br>
                        <form method="POST" enctype="multipart/form-data" action="../apps/resoures/view/upload_file/upload.php"> 
                            <p class="border text-center" style="height: 50px;">
                                <input type="file" class="" style="margin-top: 7px;" name="fileupload">
                            </p>
                            <button class="btn btn-primary w-100">Đánh dấu là đã hoàn thành</button>
                        </form>
                        <br>
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