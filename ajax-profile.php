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

        $email = addslashes(trim($_POST['email']));
        $phone = addslashes(trim($_POST['phone']));
        $flight = addslashes(trim($_POST['flight']));

        $username = $_SESSION['username'];

        $created = trim(addslashes($_POST['created_at']));


        $tsa = addslashes(trim($_POST['tsa']));
        $global = addslashes(trim($_POST['global']));

        $airline = addslashes(trim($_POST['airline']));
        $number = addslashes(trim($_POST['number']));
        $food = addslashes(trim($_POST['food']));


        $seat = trim(addslashes($_POST['seat']));


        $sql = "UPDATE user_tbl SET fname = '$fname', lname = '$lname', email = '$email', phone = '$phone', flight = '$flight',tsa = '$tsa', `global` = '$global',  airline = '$airline', `number` = '$number', `food` = '$food', `seat` = '$seat' where email = '$email' ";
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