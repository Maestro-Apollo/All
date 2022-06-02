<?php
session_start();

include('class/database.php');
class signInUp extends database
{
    protected $link;
    public function signUpFunction()
    {

        //addslashes take different ascii value and trim will remove start and last white space

        $username = addslashes(trim($_POST['username']));




        $pass = trim(addslashes($_POST['password']));



        $sqlFind = "SELECT * from user_tbl where (username = '$username' OR email = '$username') AND flag = 'Yes'";
        $resFind = mysqli_query($this->link, $sqlFind);
        if (mysqli_num_rows($resFind) > 0) {
            $row = mysqli_fetch_assoc($resFind);
            $password = $row['password'];
            $cookie_username = "cookie_username";
            $cookie_password = "cookie_password";

            if (password_verify($pass, $password) == true) {
                $_SESSION['username'] = $username;
                if (!empty($_POST['remember'])) {
                    setcookie($cookie_username, $username, time() + 315360000);
                    setcookie($cookie_password, $pass, time() + 315360000);
                } else {
                    if (isset($_COOKIE[$cookie_username])) {
                        setcookie($cookie_username, '');
                    }
                    if (isset($_COOKIE[$cookie_password])) {
                        setcookie($cookie_password, '');
                    }
                }
                return 4;
            } else {
                return 1;
            }
        } else {
            $sqlFind2 = "SELECT * from user_tbl where (username = '$username' or email = '$username') AND flag = 'No'";
            $resFind2 = mysqli_query($this->link, $sqlFind2);
            if (mysqli_num_rows($resFind2) > 0) {
                return 2;
            }
            return 3;
        }


        # code...
    }
}
$obj = new signInUp;
echo $obj->signUpFunction();