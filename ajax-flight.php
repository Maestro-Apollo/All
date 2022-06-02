<?php
session_start();

include('class/database.php');
class signInUp extends database
{
    protected $link;
    public function signUpFunction()
    {

        //addslashes take different ascii value and trim will remove start and last white space

        $name = addslashes(trim($_POST['name']));
        $email = addslashes(trim($_POST['email']));
        $phone = addslashes(trim($_POST['phone']));
        $comment = addslashes(trim($_POST['comment']));
        $f_type = addslashes(trim($_POST['f_type']));
        $children = addslashes(trim($_POST['children']));
        $adult = addslashes(trim($_POST['adult']));
        $text_me = '';
        $time2 = date('Y-m-d h:i:s a', time());

        $id = $_POST['id'];

        for ($i = 0; $i < count($_POST['from_city']); $i++) {
            $from_city = addslashes(trim($_POST['from_city'][$i]));
            $to_city = addslashes(trim($_POST['to_city'][$i]));

            $dep_date = addslashes(trim($_POST['dep_date'][$i]));
            $re_date = addslashes(trim($_POST['re_date'][$i]));

            if ($re_date == '') {
                $type = 'One Way';
            } else if (count($_POST['from_city']) > 1) {
                $type = "Multi City";
            } else {
                $type = "Round Trip";
            }

            $minutes_to_add = 5 + $i;

            $time = new DateTime($time2);
            $time->add(new DateInterval('PT' . $minutes_to_add . 'M'));

            $stamp = $time->format('Y-m-d H:i:s a');

            $sql = "INSERT INTO `flight` (`flight_id`, `from_city`, `to_city`, `dep_date`, `re_date`, `name`, `email`, `phone`, `text`, `class`, `comment`, `adult`, `children`, `flight_created_at`, `user_id`,`flight_type`) VALUES (NULL, '$from_city', '$to_city', '$dep_date', '$re_date', '$name', '$email', '$phone', '$text_me', '$f_type', '$comment', '$adult', '$children', '$stamp', '$id','$type')";

            $res = mysqli_query($this->link, $sql);
        }




        if ($res) {

            $email2 = 'mo@corporatebusinessclass.com';

            $subject = "Corporate Business Class: New Flight!";

            $message = "Please check the details<br>";
            $message .= "Click this link: <br><br>";
            $message .= '<a style="padding:10px 60px;background-color: #F3CC3C;color:#000;font-weight:600;text-decoration:none" href="https://corporatebusinessclass.com/admin/index.php">Admin Panel</a>';
            $headers = "From: mo@corporatebusinessclass.com \r\n";
            $headers .= "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type: text/html;charset=UTF-8" . "\r\n";
            mail($email2, $subject, $message, $headers);
            return 1;
        } else {
            return 2;
        }




        # code...
    }
}
$obj = new signInUp;
echo $obj->signUpFunction();