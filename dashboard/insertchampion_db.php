<?php 

session_start();
require_once "connection.php";

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $nickname = $_POST['nickname'];
    $fos = $_POST['fos'];
    $position = $_POST['position'];
    $img = $_FILES['img'];

        $allow = array('jpg', 'jpeg', 'png');
        $extension = explode('.', $img['name']);
        $fileActExt = strtolower(end($extension));
        $fileNew = rand() . "." . $fileActExt;  // rand function create the rand number 
        $filePath = 'uploads/'.$fileNew;

        if (in_array($fileActExt, $allow)) {
            if ($img['size'] > 0 && $img['error'] == 0) {
                if (move_uploaded_file($img['tmp_name'], $filePath)) {
                    $sql = $conn->prepare("INSERT INTO champion(firstname, lastname, nickname, fos, position, img) 
                    VALUES(:firstname, :lastname, :nickname, :fos, :position, :img)");
                    $sql->bindParam(":firstname", $firstname);
                    $sql->bindParam(":lastname", $lastname);
                    $sql->bindParam(":nickname", $nickname);
                    $sql->bindParam(":fos", $fos);
                    $sql->bindParam(":position", $position);
                    $sql->bindParam(":img", $fileNew);
                    $sql->execute();

                    if ($sql) {
                        $_SESSION['success'] = "Data has been inserted successfully";
                        header("location: admin_index.php");
                    } else {
                        $_SESSION['error'] = "Data has not been inserted successfully";
                        header("location: admin_index.php");
                    }
                }
            }
        }
}


?>