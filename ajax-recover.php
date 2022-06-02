<?php
session_start();


include('class/database.php');
class loginPage extends database
{

    protected $link;

    public function loginFunction()
    {

        $hash = $_POST['hash'];
        $code = trim($_POST['code']);
        $email = $_SESSION['username'];

        $sqlP = "SELECT * from user_tbl where email = '$email' ";
        $resP = mysqli_query($this->link, $sqlP);

        $x = 0;
        $seed = str_split('abcdefghijklmnopqrstuvwxyz'
            . 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
            . '0123456789'); // and any other characters
        shuffle($seed); // probably optional since array_is randomized; this may be redundant
        $rand = '';
        foreach (array_rand($seed, 6) as $k) $rand .= $seed[$k];

        $codeUpdate = $rand;


        if (mysqli_num_rows($resP) > 0) {
            $row = mysqli_fetch_assoc($resP);
            $rowHash = $row['hash'];
            $rowCode = $row['code'];

            if (strcmp($rowHash, $hash) == 0 and strcmp($rowCode, $code) == 0) {
                $sql = "UPDATE `user_tbl` SET `code`= '$codeUpdate' WHERE email = '$email'";
                $res = mysqli_query($this->link, $sql);
                if ($res) {
                    return '1';
                }
            } else {
                return '2';
            }
        }

        # code...
    }
}
$obj = new loginPage;
echo $obj->loginFunction();