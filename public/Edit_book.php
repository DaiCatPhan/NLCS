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
    <!--end   HEADER -->

    <div class=" min_height mt-5">
        <?php
            $query = "SELECT * FROM BOOK WHERE id_sach = ? ";
            $sth = $pdo->prepare($query);
            $sth->execute([
                $_GET['id']
            ]);
            while($row = $sth->fetch()){
                if(!empty($row)){
                    echo "
                        <div class=\"row\">
                            <div class=\"col-3 text-center\"> 
                                <img class=\"img_update_book\" src=\"{$row['link']}\">
                            </div>

                            <div class=\"col-9 \">
                                <form action=\"../apps/resoures/view/book/update_book.php?id={$row['id_sach']}\" method=\"POST\">
                                    <div class=\"mb-3\">
                                        <label for=\"id\" class=\"form-label\"><b>ID sách :</b></label>
                                        <input type=\"\" class=\"form-control\" id=\"id\" name=\"id_sach\" value=\"{$row['id_sach']} \">
                                    </div>

                                    <div class=\"mb-3\">
                                        <label for=\"tensach\" class=\"form-label\"><b>Tên sách :</b></label>
                                        <input type=\"\" class=\"form-control\" id=\"tensach\" name=\"tensach\" value=\"{$row['tensach']} \">
                                    </div>
                        
                                    <div class=\"mb-3\">
                                        <label for=\"theloai\" class=\"form-label\"><b>Thể loại :</b> </label>
                                        <input type=\"\" class=\"form-control\" id=\"theloai\" name=\"theloai\" value=\"{$row['theloai']} \">
                                    </div>

                                    <div class=\"mb-3\">
                                        <label for=\"link\" class=\"form-label\"><b>Link ảnh :</b> </label>
                                        <input type=\"\" class=\"form-control\" id=\"link\" name=\"link\" value=\"{$row['link']} \">
                                    </div>
                        
                                    <div class=\"mb-3\">
                                        <label for=\"noidung\" class=\"form-label\"><b>Nội dung :</b></label>
                                        <textarea class=\"form-control\" id=\"noidung\" rows=\"20\" name = \"noidung\"> {$row['noidung']} </textarea>
                                    </div>  
                        
                                    <div class=\"mb-3\">
                                        <label for=\"actor\" class=\"form-label\"><b>Tác giả :</b> </label>
                                        <input type=\"\" class=\"form-control\" id=\"actor\" name=\"actor\" value=\"{$row['actor']} \" >
                                    </div>
                        
                                    <div class=\"mb-3 text-center\">
                                        <button class=\"btn btn-success w-25\">Edit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    ";
                }
            }
        ?>
    </div>
    <!--begin FOOTER  -->
    <?php include_once "../apps/resoures/view/partials/footer.php"; ?>    
    <!-- end  FOOTER  -->
</body>
<!-- {{!-- link js bootstrap  --}} -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>

