<?php
session_start();


include('class/database.php');
class loginPage extends database
{

    protected $link;

    public function loginFunction()
    {

        $pass = addslashes(trim($_POST['password']));
        $password = password_hash($pass, PASSWORD_DEFAULT);
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
        }
        if (isset($_SESSION['email'])) {
            $username = $_SESSION['email'];
        }
        $sql = "SELECT * from user_tbl where (username = '$username' or email = '$username') AND flag = 'Yes' ";
        $res = mysqli_query($this->link, $sql);
        if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
            $email = $row['email'];

            $sql2 = "UPDATE user_tbl SET password = '$password' where email = '$email' ";
            $res2 = mysqli_query($this->link, $sql2);
            if ($res2) {
                return '1';
            } else {
                return '2';
            }
        }

        # code...
    }
}
$obj = new loginPage;
echo $obj->loginFunction();