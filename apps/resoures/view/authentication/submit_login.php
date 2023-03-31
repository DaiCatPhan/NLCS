
<?php
    include_once "../../../config/connect.php";
    session_start();
    

    if($_SERVER['REQUEST_METHOD']== 'POST'){
        if(!empty($_POST['email']) && !empty($_POST['pass'])){
            // lay du lieu tu form login.php
            $email = $_POST['email'];
            $pass = $_POST['pass'];


            // lay du lieu tu sql
            // $query = "SELECT email , pass FROM user";
            $query = "SELECT * FROM user WHERE email =? AND pass =?";
            $sth = $pdo->prepare($query);
            $sth->execute([
                $email,
                $pass
            ]);
            
            while($row = $sth->fetch()){
                if($row){
                    $_SESSION['username']= $row['username'];
                    $_SESSION['id_user']= $row['id_user'];
                    
                    if($row['email']=='admin@gmail.com'){  
                        header("Location:http://localhost/NLCS/public/main_admin.php ");
                        return;
                    }else{
                        header("Location: http://localhost/NLCS/public/thongbao_user.php");
                        return;
                    }
                }
            }
            header("Location: http://localhost/NLCS/public/login.php?er=Tài khoản không đúng !!!");

        }
    }

?>