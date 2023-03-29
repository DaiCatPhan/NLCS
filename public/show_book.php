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
    <?php include_once "../apps/resoures/view/partials/header.php"; ?>
    <?php include '../apps/config/connect.php'; ?>
    <!--end   HEADER -->

    <div class=" min_height ">

        <!-- Hiển thị sách và nội dung  -->
        <?php
            $query = "SELECT * FROM BOOK WHERE id_sach=?";
            $sth = $pdo->prepare($query);
            $sth->execute([
                $_GET['id']
            ]);
            while ($row = $sth->fetch()) {
                echo "
                        <div class=\"row\">
                            <div class=\"col-4 text-center \">
                                <img class=\" height_440 hover_large mt-5 max_width_315 \" src=\"{$row['link']}\"> 
                            </div>
                
                            <div class=\"col-8 mt-5\">
                                <div class=\"row\">
                                    <h2>{$row['tensach']}</h2>
                                    <p>Tác giả: {$row['actor']} </p>
                                    <p>
                                        Đã bán 1999 bản | 
                                        <img class=\"start\" src=\"https://quocvuongtravel.com/media/upload/hangsx/01121865.png\">
                                        <img class=\"start\" src=\"https://quocvuongtravel.com/media/upload/hangsx/01121865.png\">
                                        <img class=\"start\" src=\"https://quocvuongtravel.com/media/upload/hangsx/01121865.png\">
                                        <img class=\"start\" src=\"https://quocvuongtravel.com/media/upload/hangsx/01121865.png\">
                                        <img class=\"start\" src=\"https://quocvuongtravel.com/media/upload/hangsx/01121865.png\">
                                    </p>
                                </div>
                                <div class=\"row\">
                                    <p>
                                        <b>Nội dung:</b>
                                        {$row['noidung']}
                                    </p>
                                </div>
                            </div>
                        </div>
                    ";
            }

            
        ?>

        <!-- phần comment  -->

        <hr>
        <div class="row  my-2">
            <div class="col-4">
                <div class="text-center">
                    <img style="height: 325px ;" class=" w-100 mx-2" src="https://freelancervietnam.vn/wp-content/uploads/2019/04/Best-Places-To-Read-Online-670x335.jpg" alt="">
                </div>
            </div>
            <div class="col-8 ">
                <p class="text-center"><b>Comment</b></p>
                <form action="../apps/resoures/view/book/comment_book.php?id=<?php echo $_GET['id']; ?> " method="POST" name="form" class="form-inline d-flex ">
                    <textarea required name="noidung" cols="100" rows="2" placeholder="Thông báo nội dung nào đó cho lớp học" class="mr-10 hover_large border"></textarea>
                    <button style="margin-left:20px;" type="submit" class="btn btn-success  ">Đăng</button>
                </form>
                <?php
                    $query = "SELECT username , noidung  FROM user , comment  WHERE user.id=comment.id_user AND comment.id_sach=?";

                    $sth = $pdo->prepare($query);
                    $sth->execute([
                        $_GET['id']
                    ]);
                    while ($row = $sth->fetch()) {
                        echo "
                                <div class=\"border max_width_758  mt-3 rounded min_height_50 word_wrap hover_large\">
                                    <div class=\"mx-2\"><b>{$row['username']} : </b></div>   
                                    <div class=\"mx-2\"> {$row['noidung']}</div>
                                </div>
                            ";
                    }

                ?>
                <div class="mt-3"></div>
            </div>
        </div>

        <!-- List sach lien quan  -->
        <div class="row border text-center justify-content-center">
            <p><b>Giới thiệu sách liên quan</b></p>
            <div class="card p-0 mx-4 mt-3 mb-3 hover_large" style="width: 10rem;">
                <a href=""><img class="card-img-top  " src="https://salt.tikicdn.com/cache/280x280/ts/product/fd/78/e7/8183fabaebe9d3a84fa62cfbf6bbf2d5.jpg.webp"></a>
                <div class="mx-1">
                    <p class="card-title">399.000đ</p>
                    <p>Đã bán 1999 | 10 <img class="start" src="https://quocvuongtravel.com/media/upload/hangsx/01121865.png" alt=""></p>
                </div>
            </div>

            <div class="card p-0 mx-4 mt-3 mb-3 hover_large" style="width: 10rem;">
                <a href=""><img class="card-img-top  " src="https://salt.tikicdn.com/cache/280x280/ts/product/3c/4b/68/626915a57fb071da8a2677b23b2a168b.jpg.webp"></a>
                <div class="mx-1">
                    <p class="card-title">199.000đ</p>
                    <p>Đã bán 183 | 8 <img class="start" src="https://quocvuongtravel.com/media/upload/hangsx/01121865.png" alt=""></p>
                </div>
            </div>

            <div class="card p-0 mx-4 mt-3 mb-3 hover_large" style="width: 10rem;">
                <a href=""><img class="card-img-top  " src="https://salt.tikicdn.com/cache/280x280/ts/product/29/f0/ad/2d35f5288ea643e3768c8f3361cafa5a.jpg.webp"></a>
                <div class="mx-1">
                    <p class="card-title">315.000đ</p>
                    <p>Đã bán 50 | 5 <img class="start" src="https://quocvuongtravel.com/media/upload/hangsx/01121865.png" alt=""></p>
                </div>
            </div>

            <div class="card p-0 mx-4 mt-3 mb-3 hover_large" style="width: 10rem;">
                <a href=""><img class="card-img-top  " src="https://salt.tikicdn.com/cache/280x280/ts/product/d2/23/7b/97366587c96f8c045006ff0826182729.jpg.webp"></a>
                <div class="mx-1">
                    <p class="card-title">219.000đ</p>
                    <p>Đã bán 19 | 14 <img class="start" src="https://quocvuongtravel.com/media/upload/hangsx/01121865.png" alt=""></p>
                </div>
            </div>

            <div class="card p-0 mx-4 mt-3 mb-3 hover_large" style="width: 10rem;">
                <a href=""><img class="card-img-top  " src="https://salt.tikicdn.com/cache/280x280/ts/product/bc/2c/78/e262ae22a95d19e7e20a45b9065f9847.jpg.webp"></a>
                <div class="mx-1">
                    <p class="card-title">29.000đ</p>
                    <p>Đã bán 2462 | 10 <img class="start" src="https://quocvuongtravel.com/media/upload/hangsx/01121865.png" alt=""></p>
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