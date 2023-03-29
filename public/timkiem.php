

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

    <div class=" min_height">
        <!-- backgournd -->
        <div class="row">
            <div class="">
                <img  class="backgound_showboook w-100" src="https://vdoc.edu.vn/wp-content/uploads/2022/07/nghi-luan-ve-vai-tro-cua-sach-doi-voi-doi-song-nhan-loai.jpg" alt="">
            </div>
        </div>


        <!-- Hiển thị Lish Sach  -->
        <div class="row mt-3">
            <div class="col-3 text-center mt-3">
                <img  class="width_235" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCm8Ja5QzHZriu4imgJnsbLW_Io4w1Z7ZLLQ&usqp=CAU&reload=on" alt="">
                <ul class="list-group list-group-flush mt-5 text-center ">
                    <li><b>Thể loại</b></li>
                    <li class="list-group-item hover_large     "><a href="./book_kinhte.php" class="text-decoration-none color_black">Kinh Tế</a></li>
                    <li class="list-group-item hover_large mt-2"><a href="./book_tutuong.php" class="text-decoration-none color_black">Tư tưởng</a></li>
                    <li class="list-group-item hover_large mt-2"><a href="./book_dao.php" class="text-decoration-none color_black">Đạo</a></li>
                </ul>
            </div>
            <div class="col-9">
                <div class="row">
                    <?php 
                        if(!empty($_POST['timkiem'])){
                            $timkiem = $_POST['timkiem'];   
                            $query = "SELECT * FROM book WHERE tensach like '%$timkiem%'";
                            $sth = $pdo->prepare($query);
                            $sth->execute([
                                $timkiem
                            ]);
                            while($row = $sth->fetch()){
                                echo "
                                    <div class=\"card p-0 mx-4 mt-3 mb-3 hover_large\" style=\"width: 13rem;\">
                                        <a href=\"show_book.php?id={$row['id_sach']}\"><img class=\"card-img-top img_book \" src=\"{$row['link']}\"></a>
                                        <div class=\"card-body  border border-warning text-center bg_f5f2f2\">
                                            <h5 class=\"card-title  \">{$row['tensach']}</h5>
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
    <?php include_once "../apps/resoures/view/partials/footer.php"; ?>
    <!-- end  FOOTER  -->
</body>
<!-- {{!-- link js bootstrap  --}} -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>
