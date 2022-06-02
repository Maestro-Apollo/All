<?php
session_start();

include('class/database.php');
class loginPage extends database
{

    protected $link;

    public function loginFunction()
    {

        $email = trim($_POST['email']);


        $seed = str_split('0123456789'); // and any other characters
        shuffle($seed); // probably optional since array_is randomized; this may be redundant
        $rand = '';
        foreach (array_rand($seed, 6) as $k) $rand .= $seed[$k];

        $code = $rand;
        $text = $email . $code . time();
        $hash = md5($text);

        $sqlP = "SELECT * from user_tbl where email = '$email' ";
        $resP = mysqli_query($this->link, $sqlP);




        if (mysqli_num_rows($resP) > 0) {
            $sql = "UPDATE `user_tbl` SET `hash`= '$hash',`code`= '$code' WHERE email = '$email'";
        } else {
            echo '3';
        }


        $res = mysqli_query($this->link, $sql);
        if ($res) {
            $email2 = $email;

            $subject = "Verification Code";
            $message = 'This is one time 6 digits code!<br><br>';
            // $message .= "Please approve this user<br>";
            // $message .= "Click this link: <br><br>";
            $message .= 'Your code is: ';
            $message .= "<h3><b>$code</b></h3><br>";

            $headers = "From: bookings@corporatebusinessclass.com \r\n";
            $headers .= "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type: text/html;charset=UTF-8" . "\r\n";
            if (mail($email2, $subject, $message, $headers)) {

                header('location:recovery-code.php?hash=' . $hash);
            } else {
                echo '2';
            }
        }

        # code...
    }
}
$obj = new loginPage;
$obj->loginFunction();