<?php
session_start();

include('class/database.php');
class signInUp extends database
{
    protected $link;
    public function signUpFunction()
    {

        //addslashes take different ascii value and trim will remove start and last white space
        $tsa = addslashes(trim($_POST['tsa']));
        $global = addslashes(trim($_POST['global']));

        $airline = addslashes(trim($_POST['airline']));
        $number = addslashes(trim($_POST['number']));
        $food = addslashes(trim($_POST['food']));

        $username = $_SESSION['username'];

        $seat = trim(addslashes($_POST['seat']));
        $email = trim(addslashes($_POST['email']));

        $sql = "UPDATE user_tbl SET tsa = '$tsa', `global` = '$global',  airline = '$airline', `number` = '$number', `food` = '$food', `seat` = '$seat' where email = '$email' ";
        $res = mysqli_query($this->link, $sql);
        if ($res) {
            return 1;
        } else {
            return 2;
        }




        # code...
    }
}
$obj = new signInUp;
echo $obj->signUpFunction();