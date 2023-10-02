<?php

$navBar = '';
include 'int.php';
include $tmp . 'header.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $UserName = $_POST['username'];
    $password = $_POST['password'];
    $hashingPassword = sha1($password);
    // echo $hashing;
    $stat =  $connect->prepare("SELECT `name` , `password` FROM `admins` WHERE `User_Name` = ? AND `password` = ?");

    $stat->execute(array($UserName, $hashingPassword));
    // echo $stat->fetchAll(0);
    $conn = $stat->rowCount();
    echo $conn;
}
?>

<form class="login" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <h4 class="text-center">Admin Login</h4>
    <input class="form-control input-lg" type="text" name="username" placeholder="Enter the User name" outocomplete="off" />
    <input class="form-control input-lg" type="password" name="password" placeholder="Enter the User Password" outocomplete="off" />
    <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="LOGIN" />
</form>
<?php

// echo lang('MASSEGE') . ' ' . lang('ADMIN');

?>