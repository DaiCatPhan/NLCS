<?php
include '../../../config/connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dataPost = $_POST['data'];

    // su li mang updata len database
    $query = "UPDATE diem  SET diem = ? WHERE id_user = ?";
            $sth = $pdo->prepare($query);
            foreach($dataPost as $data ){
                
                $sth->execute([
                    $data['diem'],
                    $data['userId']
                ]);
            }

    header('Content-Type: application/json');
    $jsonData = json_encode([
        'code' => 0,
        'message' => "ok",
        'data' => $dataPost
    ]);
    echo $jsonData;
    exit();
}
