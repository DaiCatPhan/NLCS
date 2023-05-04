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
    <title>Niên Luận Cơ Sở</title>
    <!-- link bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- {{!-- link jquery  --}} -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- {{!-- link font awesome  --}} -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- link css  -->
    <link rel="stylesheet" href="../apps/resoures/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <!--begin HEADER -->
    <?php
    include "../apps/resoures/view/partials/header_admin.php ";
    ?>
    <!--end   HEADER -->

    <div class=" min_height ">
        <a href="http://localhost/NLCS/public/main_admin.php" class="">
            <i class="fa-solid fa-backward-fast fa-beat fa-xl" style=" position: absolute;left: 30px; margin-top: 20px;"></i>
        </a>


        <?php
        $query = "SELECT * FROM user , diem WHERE user.id_user = diem.id_user AND  NOT username='admin' ORDER BY diem DESC";
        $sth = $pdo->query($query);
        $sth->execute([]);
        while ($row = $sth->fetch()) {
            $ten[] = $row['username'];
            $diem[] = $row['diem'];
        }

        $query1 = "SELECT AVG(diem) FROM diem";
        $sth1 = $pdo->query($query1);
        $sth1->execute([]);
        $row1 = $sth1->fetch();

        ?>



        <?php
        $query2 = "SELECT COUNT(diem) FROM diem WHERE diem >= 50";
        $sth2 = $pdo->prepare($query2);
        $sth2->execute();
        $row2 = $sth2->fetch();

        $query3 = "SELECT COUNT(id_user) FROM diem";
        $sth3 = $pdo->prepare($query3);
        $sth3->execute();
        $row3 = $sth3->fetch();

        $soluong_sinhvien = $row3[0];
        $sinhvien_dau =  $row2[0];
        $sinhvien_rot =  $soluong_sinhvien - $sinhvien_dau;

        $tile_sinhvien_dau = ($sinhvien_dau / $soluong_sinhvien) * 100;
        $tile_sinhvien_rot = 100 - (int)$tile_sinhvien_dau;
        ?>


        <div class="row">
            <div class="col-8 ">
                <div class="mt-5" style="width: 97%; height: 500px; margin-left: 10px;">
                    <div class="" style="margin-left: 35px; position: absolute;">
                        <p><b>Điểm trung bình môn : <?php echo (int) $row1['0'] ?> </b></p>
                    </div>
                    <canvas id="myChart"></canvas>
                    <p class="text-center mt-3"><b>Biểu đồ 1 : Thể hiện điểm số của từng sinh viên trên thang 100đ</b></p>
                </div>

            </div>

            <div class="col-4">
                <div class="mt-5" style="width: 90%; height: 420px;">
                    <canvas id="myChart1"></canvas>
                    <div class="d-flex mx-3">
                        <span class="text-success"><b>Đậu: <?php echo (int)$tile_sinhvien_dau ?>%</b></span>
                        <span class="text-danger mx-3"><b>Rớt : <?php echo $tile_sinhvien_rot ?>%</b></span>
                    </div>
                    <p class="text-center mt-3"><b>Biểu đồ 2 : Thể hiện tỉ lệ đậu và rớt môn của các sinh viên</b></p>
                </div>
            </div>


        </div>




        <!--Biểu đồ thể hiện điếm số của từng sinh viên -->
        <script>
            const data = {
                labels: <?php echo json_encode($ten) ?>,
                datasets: [{
                    label: 'Điểm  của sinh viên',
                    data: <?php echo json_encode($diem) ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(201, 203, 207, 0.2)'
                    ],
                    borderColor: [
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)',
                        'rgb(54, 162, 235)',
                        'rgb(153, 102, 255)',
                        'rgb(201, 203, 207)'
                    ],
                    borderWidth: 1
                }]
            };

            //==================
            const config = {
                type: 'bar',
                data: data,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                },
            };

            //=================
            var myChart = new Chart(
                document.getElementById('myChart'),
                config
            );
        </script>

        <!-- Biểu đồ tỉ lệ đậu rớt của lớp học -->
        <script>
            const data1 = {
                labels: ['Đậu', 'Rớt'],
                datasets: [{
                    label: 'Tỉ lệ ',
                    data: [<?php echo $sinhvien_dau ?>, <?php echo $sinhvien_rot ?>],
                    backgroundColor: [
                        'rgb(39, 247, 36,1)',
                        'rgb(247, 10, 31 ,1)'
                    ],
                    hoverOffset: 4
                }]
            };
            //==================
            const config1 = {
                type: 'doughnut',
                data: data1,
            };

            //=================
            var myChart = new Chart(
                document.getElementById('myChart1'),
                config1
            );
        </script>




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