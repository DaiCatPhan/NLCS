<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit_Book</title>
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
    <!--end   HEADER -->

    <div class=" container min_height">
        <table class="table table-bordered mt-3 text-center">
            <thead class="bg-success text-white">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên sách</th>
                    <th scope="col">Comment</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM BOOK";
                    $sth = $pdo -> prepare($query);
                    $sth->execute([]);
                    while($row =$sth -> fetch()){
                        echo "
                            <tr>
                                <th>{$row['id_sach']}</th>
                                <td>{$row['tensach']}</td>
                                <td><a href=\"./xemcomment_book.php?id={$row['id_sach']}\" class=\"text-decoration-none \">Xem</a></td>
                            </tr>

                        ";
                    }
                ?>     
            </tbody>
        </table>
    </div>
    
    <!--begin FOOTER  -->
    <?php include_once "../apps/resoures/view/partials/footer.php"; ?>    
    <!-- end  FOOTER  -->
</body>
<!-- {{!-- link js bootstrap  --}} -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>