<?php
session_start();
include 'config.php';

$request = 1;
if (isset($_POST['request'])) {
    $request = $_POST['request'];
}

// DataTable data
if ($request == 1) {
    ## Read value
    $draw = $_POST['draw'];
    $row = $_POST['start'];
    $rowperpage = $_POST['length']; // Rows display per page
    $columnIndex = $_POST['order'][0]['column']; // Column index
    $columnName = $_POST['columns'][$columnIndex]['data']; // Column name
    $columnSortOrder = $_POST['order'][0]['dir']; // asc or desc

    $searchValue = mysqli_escape_string($con, $_POST['search']['value']); // Search value
    $flight_id = $_POST['flight_id'];

    ## Search 
    $searchQuery = " ";
    if ($searchValue != '') {
        $searchQuery = " and (from_city like '%" . $searchValue . "%' or 
        to_city like '%" . $searchValue . "%' or 
        dep_date like'%" . $searchValue . "%' or 
        re_date like'%" . $searchValue . "%' or 
        name like'%" . $searchValue . "%' or 
        email like'%" . $searchValue . "%' or 
        phone like'%" . $searchValue . "%' or 
        text like'%" . $searchValue . "%' or 
        class like'%" . $searchValue . "%' or 
        comment like'%" . $searchValue . "%' or 
        adult like'%" . $searchValue . "%' or 
        children like'%" . $searchValue . "%' or 
        flight_created_at like'%" . $searchValue . "%' or 
        flight_type like'%" . $searchValue . "%')  ";
    }

    ## Total number of records without filtering
    $sel = mysqli_query($con, "select count(*) as allcount from flight where user_id =" . $flight_id);
    $records = mysqli_fetch_assoc($sel);
    $totalRecords = $records['allcount'];

    ## Total number of records with filtering
    $sel = mysqli_query($con, "select count(*) as allcount from flight WHERE user_id=" . $flight_id  . $searchQuery);
    $records = mysqli_fetch_assoc($sel);
    $totalRecordwithFilter = $records['allcount'];

    ## Fetch records
    $empQuery = "select * from flight WHERE user_id=" . $flight_id . $searchQuery . " order by " . $columnName . " " . $columnSortOrder . " limit " . $row . "," . $rowperpage;
    $empRecords = mysqli_query($con, $empQuery);
    $data = array();

    while ($row = mysqli_fetch_assoc($empRecords)) {

        // Update Button
        $updateButton = "<button class='btn btn-sm btn-block btn-info updateUser' data-id='" . $row['flight_id'] . "' data-toggle='modal' data-target='#updateModal' >Update</button>";

        //Delete Button
        $deleteButton = "<button class='btn btn-sm btn-block btn-danger deleteUser' data-id='" . $row['flight_id'] . "'>Delete</button>";

        $action = $updateButton . " " . $deleteButton;

        $data[] = array(
            "from_city" => $row['from_city'],
            "to_city" => $row['to_city'],

            "dep_date" => $row['dep_date'],
            "re_date" => $row['re_date'],
            "name" => $row['name'],
            "email" => $row['email'],
            "phone" => $row['phone'],
            "text" => $row['text'],
            "class" => $row['class'],
            "comment" => $row['comment'],
            "adult" => $row['adult'],
            "children" => $row['children'],
            "flight_created_at" => $row['flight_created_at'],
            "flight_type" => $row['flight_type'],


            "action" => $action
        );
    }

    ## Response
    $response = array(
        "draw" => intval($draw),
        "iTotalRecords" => $totalRecords,
        "iTotalDisplayRecords" => $totalRecordwithFilter,
        "aaData" => $data
    );

    echo json_encode($response);
    exit;
}

//Fetch user details
if ($request == 2) {
    $id = 0;

    if (isset($_POST['id'])) {
        $id = mysqli_escape_string($con, $_POST['id']);
    }

    $record = mysqli_query($con, "SELECT * FROM user_tbl WHERE `user_id`=" . $id);

    $response = array();

    if (mysqli_num_rows($record) > 0) {
        $row = mysqli_fetch_assoc($record);
        $response = array(

            "flag" => $row['flag'],
            "tsa" => $row['tsa'],
            "global" => $row['global'],
            "airline" => $row['airline'],
            "number" => $row['number'],
            "food" => $row['food'],
            "seat" => $row['seat'],

        );

        echo json_encode(array("status" => 1, "data" => $response));
        exit;
    } else {
        echo json_encode(array("status" => 0));
        exit;
    }
}

// Update user
if ($request == 3) {
    $id = 0;

    if (isset($_POST['id'])) {
        $id = mysqli_escape_string($con, $_POST['id']);
    }

    // Check id
    $record = mysqli_query($con, "SELECT * FROM user_tbl WHERE user_id=" . $id);
    if (mysqli_num_rows($record) > 0) {

        $row = mysqli_fetch_assoc($record);
        $email = $row['email'];
        $send = $row['send'];

        //add mail

        $flag = mysqli_escape_string($con, trim($_POST['flag']));
        $tsa = mysqli_escape_string($con, trim($_POST['tsa']));
        $global = mysqli_escape_string($con, trim($_POST['global']));
        $airline = mysqli_escape_string($con, trim($_POST['airline']));
        $number = mysqli_escape_string($con, trim($_POST['number']));
        $food = mysqli_escape_string($con, trim($_POST['food']));
        $seat = mysqli_escape_string($con, trim($_POST['seat']));



        if ($flag != '') {



            mysqli_query($con, "UPDATE user_tbl SET flag='" . $flag . "', tsa='" . $tsa . "', global='" . $global . "', airline='" . $airline . "', number='" . $number . "', food='" . $food . "', seat='" . $seat . "' WHERE user_id=" . $id);

            echo json_encode(array("status" => 1, "message" => "Record updated."));

            if ($flag == 'Yes' && $send == 0) {
                $email2 = $email;

                $subject = "Congratulations! Your account has been activated!";
                $message = 'Login and Check your profile!<br><br>';
                // $message .= "Please approve this user<br>";
                // $message .= "Click this link: <br><br>";
                $message .= '<a style="padding:10px 60px;background-color: #F3CC3C;color:#000;font-weight:600;text-decoration:none" href="https://corporatebusinessclass.com/profile.php">User Profile</a>';
                $headers = "From: mo@corporatebusinessclass.com \r\n";
                $headers .= "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type: text/html;charset=UTF-8" . "\r\n";
                mail($email2, $subject, $message, $headers);
                $send = 1;
                mysqli_query($con, "UPDATE user_tbl SET `send`='" . $send . "' WHERE user_id=" . $id);
            }
            if ($flag == 'No' && $send == 1) {
                $email2 = $email;

                $subject = "Account Alert! Your account has been deactivated!";
                $message = 'Please contact with admin<br><br>';
                // $message .= "Please approve this user<br>";
                // $message .= "Click this link: <br><br>";
                $message .= '<a style="padding:10px 60px;background-color: #F3CC3C;color:#000;font-weight:600;text-decoration:none" href="http://68.178.247.112/profile.php">User Profile</a>';
                $headers = "From: mo@corporatebusinessclass.com \r\n";
                $headers .= "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type: text/html;charset=UTF-8" . "\r\n";
                mail($email2, $subject, $message, $headers);
                $send = 0;
                mysqli_query($con, "UPDATE user_tbl SET `send`='" . $send . "' WHERE user_id=" . $id);
            }
            exit;
        } else {
            echo json_encode(array("status" => 0, "message" => "Please fill all fields."));
            exit;
        }
    } else {
        echo json_encode(array("status" => 0, "message" => "Invalid ID."));
        exit;
    }
}
if ($request == 4) {
    $id = 0;

    if (isset($_POST['id'])) {
        $id = mysqli_escape_string($con, $_POST['id']);
    }

    // Check id
    $record = mysqli_query($con, "SELECT user_id FROM user_tbl WHERE user_id=" . $id);
    if (mysqli_num_rows($record) > 0) {

        mysqli_query($con, "DELETE FROM user_tbl WHERE user_id=" . $id);

        echo 1;
        exit;
    } else {
        echo 0;
        exit;
    }
}