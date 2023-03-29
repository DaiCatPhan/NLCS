<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK</title>
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
    <?php include_once "../apps/resoures/view/partials/header_admin.php"; ?>
    <?php include '../apps/config/connect.php'; ?>
    <!--end   HEADER  -->

    <!-- MAIN  -->
    <!-- <div class="container min_height text-center ">
        <div class="border">
            <h1>Thêm sách</h1>
            <form class="mt-5 form_addbook " method="POST" action="../apps/resoures/view/book/xuli_add_book.php">
                <div class="mb-3 row">
                    <label for="tensach" class="col-sm-2 col-form-label">Tên sách</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tensach" name="tensach" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="theloai" class="col-sm-2 col-form-label ">Thể loại</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control " autocomplete="off" id="theloai" name="theloai" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="link" class="col-sm-2 col-form-label">Link sách</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="link" name="link" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="noidung" class="col-sm-2 col-form-label">Nội dung</label>
                    <div class="col-sm-10">
                        <textarea name="noidung" id="" cols="60" rows="10" required></textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="actor" class="col-sm-2 col-form-label">Tác giả  </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword" name="actor" required>
                    </div>
                </div>

                <div class="mb-3  d-flex justify-content-center ml_100">
                    <button type="submit" class="btn btn-primary mb-3  w-25 " id="submit_from_addbook">Thêm sách</button>
                </div>
            </form>
        </div>
    </div> -->
    <!-- MAIN  -->

    <div class="container  ">
        <section class="" style="background-color: #eee; ">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-12 col-xl-11">
                        <div class="card text-black" style="border-radius: 25px;">
                            <div class="card-body p-md-5">
                                <div class="row justify-content-center">
                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 text-success">Thêm sách mới</p>
                                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                        <form class="mx-1 mx-md-4 " method="POST" action="../apps/resoures/view/book/xuli_add_book.php">
                                            <!-- {{!-- Tên sách  --}} -->
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="tensach">Tên sách </label>
                                                    <input autocomplete="off" type="text" id="tensach" class="form-control hover_large border" name="tensach" required />
                                                </div>
                                            </div>

                                            <!-- Thể loại  -->
                                            <br>
                                            <div class="d-flex flex-row align-items-center mb-4 ">
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="theloai">Thể loại </label>
                                                    <input autocomplete="off" type="text" id="theloai" class="form-control hover_large border" name="theloai" required />
                                                </div>
                                            </div>



                                            <!-- {{!-- Link sách  --}} -->
                                            <br>
                                            <div class="d-flex flex-row align-items-center mb-4 ">
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="link">Link sách </label>
                                                    <input autocomplete="off" type="text" id="link" class="form-control hover_large border" name="link" required />
                                                </div>
                                            </div>

                                            <!-- {{!-- Tác giả  --}} -->
                                            <br>
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="actor">Tác giả </label>
                                                    <input autocomplete="off" type="text" id="actor" class="form-control hover_large border" name="actor" required />
                                                </div>
                                            </div>

                                            <br>
                                            <br>
                                            <!-- {{!-- Nội dung  --}} -->
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="noidung">Nội dung sách </label>
                                                    <textarea name="noidung" id="noidung" cols="100" rows="10" class="hover_large border"></textarea>
                                                </div>
                                            </div>

                                            <div class=" mb-3 mb-lg-4">
                                                <button type="submit" class="btn btn-primary btn-lg ">Thêm</button>
                                            </div>

                                        </form>

                                    </div>
                                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                        <img src="https://img.lovepik.com/element/40144/5869.png_860.png" class="img-fluid margin_bottom_290" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!--begin FOOTER  -->
    <?php include_once "../apps/resoures/view/partials/footer.php"; ?>
    <!-- end  FOOTER  -->
</body>
<!-- {{!-- link js bootstrap  --}} -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>