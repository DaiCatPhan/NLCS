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
    <title>Chấm điểm</title>
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
    include "../apps/resoures/view/partials/header_admin.php ";
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

        <!-- <a href="http://localhost/NLCS/public/main_admin.php" class="">
            <i class="fa-solid fa-backward-fast fa-beat fa-xl" style=" position: absolute;left: 20px; margin-top: 20px;"></i>
        </a> -->

        <!-- Hiển thị Lish Sach  -->
        <div class="row mt-3">



            <div class=" box ">
                <table class="table table-bordered border-primary m-auto mb-5 text-center" style="width: 80%;">
                    <thead>
                        <tr>
                            <th scope="col">

                                Mã số sinh viên
                            </th>
                            <th scope="col">Họ tên sinh viên</th>
                            <th scope="col">Lớp</th>
                            <th scope="col">Bài làm</th>
                            <th scope="col" style="width: 150px;">Điểm</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "   SELECT * FROM user 
                                    INNER JOIN fileupload
                                    on user.id_user = fileupload.id_user
                                    INNER JOIN diem
                                    on user.id_user = diem.id_user
                                    WHERE NOT user.username = 'admin' ";
                        $sth = $pdo->prepare($query);
                        $sth->execute([]);
                        while ($row = $sth->fetch()) {
                            $ar_iduser[] = $row['id_user'];
                            $ar_diem[] = $row['diem'];


                            echo "
                                    <tr>
                                        <td>
                                         <input type='checkbox' data-user-id='{$row['id_user']}'  name='check-sv'>
                                        {$row['mssv']}</td>
                                        <td>{$row['username']}</td>
                                        <td>{$row['lop']}</td>
                                        ";
                            // khuc giua            
                            if (!empty($row['noidung_file'])) {
                                echo "
                                        <td><a href=\"\" class=\"text-decoration-none\">{$row['noidung_file']}</a></td>
                                    ";
                            } else {
                                echo "
                                        <td>
                                            <a href=\"\" class=\"text-decoration-none\">Chưa nộp</a>
                                        </td>
                                    ";
                            }
                            // khuc duoi

                            echo "
                                        <form action=\"../apps/resoures/view/chamdiem/Chamdiem.php?id_user={$row['id_user']}\" method=\"POST\">
                                            <td>
                                                <input name=\"diemso\" data-user-id='{$row['id_user']}' class='input-diem' type=\"text\" class=\"form-control\" value=\"{$row['diem']}\" required placeholder=\"\">
                                            </td>
                                            <td>
                                                <button class=\"btn btn-warning\">Chấm điểm</button>
                                            </td>

                                        </form>
                                    </tr>  
                            ";
                        }
                        ?>

                    </tbody>
                </table>
                <div>
                    <div class="action">
                        <label for="check-all">Chon Tat ca</label>
                        <input id='check-all' type='checkbox' name='check-sv-all'>

                    </div>
                    <div>

                        <button id='diem-all'>Cham diem tat ca</button>
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
<script>
    const checkButtons = document.querySelectorAll("input[name='check-sv']");
    const inputDiem = document.querySelectorAll('.input-diem');
    const checkButtonAll = document.querySelector("input[name='check-sv-all']");
    const diemAll = document.querySelector("#diem-all");

    checkButtonAll.onclick = (e) => {
        let isCheckAll = e.target.checked
        const checkButtons = document.querySelectorAll("input[name='check-sv']");
        checkButtons.forEach((input, index) => {
            input.checked = isCheckAll
        })
    }



    diemAll.onclick = () => {
        let elementChecked = []

        for (let i = 0; i < checkButtons.length; i++) {
            if (checkButtons[i].checked) {
                elementChecked.push((checkButtons[i].getAttribute('data-user-id')))
            }
        }



        let dataLast = []

        inputDiem.forEach((input) => {
            if (elementChecked.includes(input.getAttribute('data-user-id'))) {
                dataLast.push({
                    userId: input.getAttribute('data-user-id'),
                    diem: input.value
                })
            }

        })


        POST_data(dataLast)

    }

    function POST_data(data) {
        $.post({
            url: "../apps/resoures/view/chamdiem/ChamdiemAll.php",
            data: {
                data: data,

            },
            dataType: 'json',
            success: function(data, status) {
                console.log(data);
                console.log(status)
                // chuyen huosng php
                var url = "http://localhost/NLCS/public/chamdiem.php";
                $(location).attr('href', url);
            }
        })
    }
</script>

</html>