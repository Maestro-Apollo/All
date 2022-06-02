<?php
session_start();

include('class/database.php');
class signInUp extends database
{
    protected $link;
    public function signUpFunction()
    {

        //addslashes take different ascii value and trim will remove start and last white space
        $fname = addslashes(trim($_POST['fname']));
        $lname = addslashes(trim($_POST['lname']));
        $username = addslashes(trim($_POST['username']));

        $email = addslashes(trim($_POST['email']));
        $phone = addslashes(trim($_POST['phone']));
        $refer = addslashes(trim($_POST['refer']));




        $pass = trim(addslashes($_POST['password']));

        //This will hash the password
        $password = password_hash($pass, PASSWORD_DEFAULT);

        $sqlFind = "SELECT * from user_tbl where username = '$username' OR email = '$email' ";
        $resFind = mysqli_query($this->link, $sqlFind);
        if (mysqli_num_rows($resFind) > 0) {

            $sqlFind2 = "SELECT * from user_tbl where (username = '$username' OR email = '$email') AND flag = 'No' ";
            $resFind2 = mysqli_query($this->link, $sqlFind2);
            if (mysqli_num_rows($resFind2) > 0) {
                return 4;
            }

            return 1;
        } else {
            $sql = "INSERT INTO `user_tbl` (`user_id`, `username`, `fname`, `lname`, `phone`, `email`, `password`, `flight`,`refer`, `flag`, `created_at`) VALUES (NULL, '$username', '$fname', '$lname', '$phone', '$email', '$password', '','$refer', 'No', CURRENT_TIMESTAMP)";
            $res = mysqli_query($this->link, $sql);
            if ($res) {

                $email2 = 'mo@corporatebusinessclass.com';

                $subject = "Corporate Business Class: New Registration!";
                $message = 'New Registration! ';
                $message .= "Please approve this user<br>";
                $message .= "Click this link: <br><br>";
                $message .= '<a style="padding:10px 60px;background-color: #F3CC3C;color:#000;font-weight:600;text-decoration:none" href="https://corporatebusinessclass.com/admin/index.php">Admin Panel</a>';
                $headers = "From: bookings@corporatebusinessclass.com \r\n";
                $headers .= "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type: text/html;charset=UTF-8" . "\r\n";
                if (mail($email2, $subject, $message, $headers)) {
                    return 2;
                }
            } else {
                return 3;
            }
        }


        # code...
    }
}
$obj = new signInUp;
echo $obj->signUpFunction();