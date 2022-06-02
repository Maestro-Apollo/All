<?php
session_start();

include('class/database.php');
class signInUp extends database
{
    protected $link;
    public function signUpFunction()
    {

        //addslashes take different ascii value and trim will remove start and last white space
        $info = $_SESSION['username'];
        $email = addslashes(trim($_POST['email']));

        $email2 = 'dev@corporatebusinessclass.com';

        $subject = "New Refer!";
        $message = $info . ' referred a friend: ' . $email;
        // $message .= "Please approve this user<br>";
        // $message .= "Click this link: <br><br>";
        // $message .= '<a style="padding:10px 60px;background-color: #F3CC3C;color:#000;font-weight:600;text-decoration:none" href="http://68.178.247.112/profile.php">User Profile</a>';
        $headers = "From: bookings@corporatebusinessclass.com \r\n";
        $headers .= "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type: text/html;charset=UTF-8" . "\r\n";;



        if (mail($email2, $subject, $message, $headers)) {
            return 1;
        } else {
            return 2;
        }




        # code...
    }
}
$obj = new signInUp;
echo $obj->signUpFunction();