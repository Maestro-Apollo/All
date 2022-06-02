<?php
$database = include('config.php');
// $nameErr = $emailErr = $companyErr = $roleErr = $tripErr = $travelErr = "";
// $nameform = $emailform = $company = $role = $trip = $travel = "";
// $newsletter = "";
// $newsletter = "";
// $DestinationErr = "";
// $Destination = $email = $company = $role = $trip = $travel = "";
// define variables and set to empty values

// if(isset($_POST["corporateForm"]))
// {
//     if ($_SERVER["REQUEST_METHOD"] == "POST") {
//         if (empty($_POST["FullName"])) {
//             $nameErr = "Name is required";
//         } else {
            $nameform = $_POST['fullName'];
//         }
        
//         if (empty($_POST["Email"])) {
//             $emailErr = "Email is required";
//         } else {
            $emailform = $_POST['workEmail'];
//         }

//         if (empty($_POST["CompanyName"])) {
//             $companyErr = "Company Name is required";
//         } else {
            $company = $_POST['companyName'];
//         }

//         if (empty($_POST["role"])) {
//             $roleErr = "Role is required";
//         } else {
            $role = $_POST['roleCompany'];
//         }

//         if (empty($_POST["totalTrips"])) {
//             $tripErr = "Total trips required";
//         } else {
            $trip = $_POST['travelTrips'];
//         }

//         if (empty($_POST["TravelType"])) {
//             $travelErr = "Travel type is required";
//         } else {
            $travel = $_POST['travelType'];
//         }


//         if($nameform != "" && $emailform != "" && $company != "" && $role != "" && $trip != "" && $travel != "")
//         {
            $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $name = "Corporate Business Class";
            $headers .= "From:" . $database['EmailFrom'];
            $email = $database['EmailTo'];
            $message = '<html><body><table>';
            $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Full Name </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$nameform.'</td></tr>';
            $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Email </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$emailform.'</td></tr>';
            $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Company Name </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$company.'</td></tr>';
            $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Role at the company </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$role.'</td></tr>';
            $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Total trips per month </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$trip.'</td></tr>';
            $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Type of travel </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$travel.'</td></tr>';
            $message .= '</table></body></html>';
            
            $to = $database['EmailTo'];
            $subject = 'Query from : ' . $nameform;
            
                if (mail ($to, $subject, $message, $headers)) {
                    // echo '<p>Your message has been sent!</p>';
                    // echo "<script>alert('Your email has been sent!');</script>";
                } else {
                    // echo '<p>Something went wrong, go back and try again!</p>';
                    // echo "<script>alert('Something went wrong, go back and try again!');</script>";
                }
//         }
//     }
// }
// else if(isset($_POST["personalForm"]))
// {
//     if ($_SERVER["REQUEST_METHOD"] == "POST") {
//         if (empty($_POST["Destination"])) {
//             $DestinationErr = "Destination is required";
//         } else {
//             $Destination = $_POST['Destination'];
//         }
//         $Adults = $_POST['Adults'];
//         $Children = $_POST['Children'];
//         $Infants = $_POST['Infants'];
//         $Pets = $_POST['Pets'];
//         $SeatClass = $_POST['SeatClass'];
//         $MilesPoints = $_POST['MilesPoints'];
//         $workTravel = $_POST['workTravel'];
//         $Currency = $_POST['Currency'];
//         $CurrencyValue = $_POST['CurrencyValue'];
//         $Website = $_POST['Website'];
//         $NoofStop = $_POST['NoofStop'];
//         $StopDuration = $_POST['StopDuration'];
//         $Details = $_POST['Details'];
//         $YourName = $_POST['YourName'];
//         $YourEmail = $_POST['YourEmail'];
        
//         if($Adults != "" && $Destination != "" && $Children != "" && $Infants != "" && $Pets != "" && $SeatClass != "" && $MilesPoints != "" && $workTravel != "" && $Currency != "" && $CurrencyValue != "" && $Website != "" && $NoofStop != "" && $StopDuration != "" && $Details != "" && $YourName != "" && $YourEmail != "")
//         {
//             $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//             $name = "Corporate Business Class";
//             $headers .= "From:" . $database['EmailFrom'];
//             $email = $database['EmailTo'];
//             $message = '<html><body><table>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Number of Destinations </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$Destination.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Adults </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$Adults.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Children </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$Children.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Infants </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$Infants.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Pets </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$Pets.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Seat Class </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$SeatClass.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Miles/Points </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$MilesPoints.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Are you traveling for work </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$workTravel.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Your best valid price for this trip </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$Currency.' - '.$CurrencyValue.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Link or Website </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$Website.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Max. Number of Stops </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$NoofStop.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Max. Duration of Stops </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$StopDuration.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Extra Information </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$Details.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Name </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$YourName.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Email </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$YourEmail.'</td></tr>';
//             $message .= '</table></body></html>';
            
//             $to = $database['EmailTo'];
//             $subject = 'Query from : ' . $YourName;
            
//                 if (mail ($to, $subject, $message, $headers)) {
//                     // echo '<p>Your message has been sent!</p>';
//                     echo "<script>alert('Your email has been sent!');</script>";
//                 } else {
//                     // echo '<p>Something went wrong, go back and try again!</p>';
//                     echo "<script>alert('Something went wrong, go back and try again!');</script>";
//                 }
//         }
//     }
// }
?>