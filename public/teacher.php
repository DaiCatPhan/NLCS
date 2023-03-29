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
        <table class="table table-bordered mt-5 text-center">
            <thead>
                <tr class="bg-success text-white">
                    <th scope="col">#</th>
                    <th scope="col">Tên sách</th>
                    <th scope="col">Thể loại</th>
                    <th scope="col">Tác giả</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
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
                                <th class=\"bg-dark text-white\">{$row['id_sach']}</th>
                                <td>{$row['tensach']}</td>
                                <td>{$row['theloai']}</td>
                                <td>{$row['actor']}</td>
                                <td><a class=\"text-decoration-none text-success\" href=\"Edit_book.php?id={$row['id_sach']}\">
                                    <i class=\"fa-solid fa-pen-to-square fa-beat\" style=\"color: #161dd4;\"></i>
                                </td>
                                <td><a href=\"\" data-id=\"{$row['id_sach']}\" data-bs-toggle=\"modal\" data-bs-target=\"#delete_novel\" class=\"text-decoration-none text-danger\">
                                    <i class=\"fa-solid fa-trash fa-bounce\" style=\"color: #f40101;\"></i>
                                </a></td>
                            </tr>

                            <div class=\"modal fade\" id=\"delete_novel\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Xóa sách ?</h5>
                                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                    </div>
                                    <div class=\"modal-body\">
                                        <p>Bạn chắc chắn muốn xóa khóa học này ?</p>
                                    </div>
                                    <di class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Hủy</button>
                                        <button type=\"button\" class=\"btn btn-danger\" id=\"btn-delete-cart\" >Xóa</button>
                                    </div>
                                </div>
                            </div>
                        ";
                    }
                ?>     
            </tbody>
        </table>
    </div>
    

    <!-- Modal -->


    <form name="delete-form" method="POST"></form>    
    <!-- Bootstrap JavaScript Libraries -->
    <script>
        var delete_novel = document.getElementById('delete_novel')
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
            deleteForm.action = '../apps/resoures/view/book/delete_book.php?id=' + id_novel;
            deleteForm.submit();
        }
    </script>
    
    

    <!--begin FOOTER  -->
    <?php include_once "../apps/resoures/view/partials/footer.php"; ?>    
    <!-- end  FOOTER  -->
</body>
<!-- {{!-- link js bootstrap  --}} -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>