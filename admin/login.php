<?php
session_start();

include('../class/database.php');
class signInUp extends database
{
    protected $link;
    public function signUpFunction()
    {

        //addslashes take different ascii value and trim will remove start and last white space
        if (isset($_POST['signIn'])) {
            $username = addslashes(trim($_POST['username']));
            $pass = trim(addslashes($_POST['password']));

            $sql = "SELECT * from `admin` where username = '$username' ";
            $res = mysqli_query($this->link, $sql);
            if (mysqli_num_rows($res) > 0) {
                $row = mysqli_fetch_assoc($res);
                $password = $row['password'];

                if (password_verify($pass, $password) == true) {
                    $_SESSION['admin'] = $username;
                    header('location:index.php');
                } else {
                    return ' <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Wrong password!</strong>
                  </div>';
                }
            } else {
                return ' <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Invalid Information</strong>
              </div>';
            }
        }
    }
}
$obj = new signInUp;
$objSign = $obj->signUpFunction();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../assets/css/parsley.css">

    <style>
    body {
        font-family: 'Raleway', sans-serif;
    }

    .navbar-brand {
        width: 7%;
    }

    .bg_color {
        background-color: #fff !important;
    }
    </style>

</head>

<body class="">

    <section>
        <div class="container pr-4 pl-4  log_section pb-5">

            <div class="row">
                <div class="col-md-6 offset-lg-3 ">

                    <form action="" method="post" data-parsley-validate>

                        <div class="text-center">

                            <!-- <button id="msg-btn" class="btn btn-success">Please check it</button> -->
                            <h4 class="font-weight-bold pt-5 pb-4">LOGIN</h4>
                            <?php if ($objSign) {
                                echo $objSign;
                            } ?>


                        </div>
                        <input type="text" name="username" class="form-control p-4  border-0 bg-light"
                            placeholder="Enter your admin username" required>
                        <input type="password" class="form-control mt-4 p-4 border-0 bg-light" name="password"
                            placeholder="Enter your password" required>


                        <button type="submit" name="signIn"
                            class="btn btn-block font-weight-bold log_btn btn-lg mt-4">LOGIN</button>



                    </form>
                </div>

                <!-- <form action="" method="post"> -->

                <!-- </form> -->
            </div>

        </div>

    </section>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
    <script src="../assets/js/parsley.min.js"></script>

</body>

</html>