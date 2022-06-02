<?php
$hostname = "localhost:3325";
$username = "root";
$password = "";
$dbname = "corporate";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if ($conn) {

    $user = trim($_POST['airport']);

    if (isset($user)) {
        $output = '';
        $sql = "SELECT * from airports where cityName like '$user%' or code = '$user'";
        $res = mysqli_query($conn, $sql);
        $output = '<ul class="list-group">';
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $output .= '<li class="list-group-item list-group-item-action list-group-item-white" style="cursor: pointer">' . $row['cityName'] . ' ,' . $row['countryName'] . ', ' . $row['name'] . '(' . $row['code'] . ')</li>';
            }
        } else {
            $output .= '<li class="list-group-item bg-danger text-white disabled">No Airport found</li>';
        }
        $output .= '</ul>';
        echo $output;
    }
}