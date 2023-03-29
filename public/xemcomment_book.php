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
        <table class="table table-bordered mt-5 ">
            <thead class="bg-success text-white">
                <tr>
                    <th style="width: 50px;" scope="col">#</th>
                    <th style="width: 350px ;" scope="col">Sách </th>
                    <th scope="col">Comment</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    $query = "SELECT * FROM book WHERE id_sach =?";
                    $sth = $pdo->prepare($query);
                    $sth->execute([
                        $_GET['id']
                    ]);
                    while ($row = $sth->fetch()) {
                        echo "
                                <td><b>{$row['id_sach']}</b></td>
                                <td>
                                    <img class=\"img_xemcomment_book\"  src=\"{$row['link']}\" style=\"height: 438px; width: 285px; \">
                                </td>
                            ";
                    }
                ?>

                <td>
                    <?php
                    $query = "SELECT username , noidung , id_comment   FROM user , comment   WHERE  user.id=comment.id_user AND comment.id_sach=?";

                    $sth = $pdo->prepare($query);
                    $sth->execute([
                        $_GET['id']
                    ]);
                    while ($row = $sth->fetch()) {
                        echo "  
                                <div class=\"border max_width_758  mt-3 rounded min_height_50 word_wrap hover_large position-relative\">
                                    <div class=\"mx-2\"><b>{$row['username']} {$row['id_comment']}: </b></div>   
                                    <div class=\"mx-2\"> {$row['noidung']} </div> 
                                    <a id=\"\" data-id=\"{$row['id_comment']}\" data-bs-toggle=\"modal\" data-bs-target=\"#delete_comment\" style=\"right: 0px\" href=\"\" class=\"position-absolute end-0 text-decoration-none text-danger top-0 \">
                                        <i class=\"fa-solid fa-trash fa-bounce\" style=\"color: #f40101;\"></i>
                                    </a> 
                                </div>

                                <div class=\"modal fade\" id=\"delete_comment\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Xóa comment ?</h5>
                                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                            </div>
                                            <div class=\"modal-body\">
                                                <p>Bạn chắc chắn muốn xóa comment này ?</p>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Hủy</button>
                                                <button type=\"button\" class=\"btn btn-danger\" id=\"btn-delete-cart\">Xóa</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
                    }

                    ?>
                </td>
            </tbody>
        </table>

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
                deleteForm.action = '../apps/resoures/view/book/delete_comment.php?id_comment=' + id_novel;
                deleteForm.submit();
            }
        </script>
    </div>

    <!--begin FOOTER  -->
    <?php include_once "../apps/resoures/view/partials/footer.php"; ?>
    <!-- end  FOOTER  -->
</body>
<!-- {{!-- link js bootstrap  --}} -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>