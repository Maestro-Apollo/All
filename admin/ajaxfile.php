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

    ## Search 
    $searchQuery = " ";
    if ($searchValue != '') {
        $searchQuery = " and (user_tbl.username like '%" . $searchValue . "%' or 
        user_tbl.fname like '%" . $searchValue . "%' or 
        user_tbl.lname like'%" . $searchValue . "%' or 
        user_tbl.email like'%" . $searchValue . "%' or 
        user_tbl.flight like'%" . $searchValue . "%' or 
        user_tbl.phone like'%" . $searchValue . "%' or 
        user_tbl.created_at like'%" . $searchValue . "%' or 
        user_tbl.flag like'%" . $searchValue . "%' or 
        user_tbl.refer like'%" . $searchValue . "%' or 
        user_tbl.tsa like'%" . $searchValue . "%' or 
        user_tbl.global like'%" . $searchValue . "%' or 
        user_tbl.airline like'%" . $searchValue . "%' or 
        user_tbl.number like'%" . $searchValue . "%' or 
        user_tbl.food like'%" . $searchValue . "%' or 
        user_tbl.seat like'%" . $searchValue . "%')  ";
    }

    ## Total number of records without filtering
    $sel = mysqli_query($con, "SELECT count(*) as allcount
    FROM user_tbl LEFT JOIN flight ON user_tbl.user_id = flight.user_id
    WHERE flight.flight_created_at IS NULL
        OR flight.flight_created_at = (
            SELECT MAX(flight.flight_created_at)
            FROM flight
            WHERE flight.user_id = user_tbl.user_id
        )");
    $records = mysqli_fetch_assoc($sel);
    $totalRecords = $records['allcount'];

    ## Total number of records with filtering
    $sel = mysqli_query($con, "SELECT count(*) as allcount
    FROM user_tbl LEFT JOIN flight ON user_tbl.user_id = flight.user_id
    WHERE (flight.flight_created_at IS NULL
        OR flight.flight_created_at = (
            SELECT MAX(flight.flight_created_at)
            FROM flight
            WHERE flight.user_id = user_tbl.user_id
        ))"  . $searchQuery);
    $records = mysqli_fetch_assoc($sel);
    $totalRecordwithFilter = $records['allcount'];

    ## Fetch records
    $empQuery = "SELECT user_tbl.*, flight.flight_created_at
    FROM user_tbl LEFT JOIN flight ON user_tbl.user_id = flight.user_id
    WHERE (flight.flight_created_at IS NULL
        OR flight.flight_created_at = (
            SELECT MAX(flight.flight_created_at)
            FROM flight
            WHERE flight.user_id = user_tbl.user_id
        ))" . $searchQuery . " order by " . $columnName . " " . $columnSortOrder . " limit " . $row . "," . $rowperpage;
    $empRecords = mysqli_query($con, $empQuery);
    $data = array();

    while ($row = mysqli_fetch_assoc($empRecords)) {

        // Update Button
        $updateButton = "<button class='btn btn-sm btn-block btn-info updateUser' data-id='" . $row['user_id'] . "' data-toggle='modal' data-target='#updateModal' >Update</button>";

        //Delete Button
        $deleteButton = "<button class='btn btn-sm btn-block btn-danger deleteUser' data-id='" . $row['user_id'] . "'>Delete</button>";

        $user_id = $row['user_id'];
        $sql2 = "SELECT * from flight where user_id = $user_id ";
        $res2 = mysqli_query($con, $sql2);
        if (mysqli_num_rows($res2) > 0) {
            $link = "<a class='btn btn-sm btn-block btn-success' href='flight-details.php?id=" . $row['user_id'] . "'>Details</a>";
        } else {
            $link = '';
        }



        $action = $link . ' ' . $updateButton . " " . $deleteButton;

        $data[] = array(
            "username" => $row['username'],
            "fname" => $row['fname'],

            "lname" => $row['lname'],
            "email" => $row['email'],
            "flight" => $row['flight'],
            "flag" => $row['flag'],
            "refer" => $row['refer'],
            "phone" => $row['phone'],
            "created_at" => $row['created_at'],
            "tsa" => $row['tsa'],
            "global" => $row['global'],
            "airline" => $row['airline'],
            "number" => $row['number'],
            "food" => $row['food'],
            "seat" => $row['seat'],
            "flight_created_at" => $row['flight_created_at'],

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