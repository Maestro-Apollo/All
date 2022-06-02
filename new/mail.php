<?php

$database = include('config.php');
// $newsletterErr = "";
// $newsletter = "";


  
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    //     if (empty($_POST["newsletter1"])) {
    //         $newsletterErr = "Email is required";
    //     } else {
    //         $newsletter = $_POST['newsletter1'];
    //     }
    //     echo "news". $newsletter;
    //     if($newsletter != "")
    //     {
         
            $newsletter = $_POST['email'];
        
            $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $name = "Corporate Business Class";
            $headers .= "From:" . $database['EmailFrom'];
            $email = $database['EmailTo'];
            $message = '<html><body><table>';
            $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Email </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$newsletter.'</td></tr>';
            // $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Email </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$email.'</td></tr>';
            // $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Company Name </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$company.'</td></tr>';
            // $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Role at the company </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$role.'</td></tr>';
            // $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Total trips per month </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$trip.'</td></tr>';
            // $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Type of travel </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$travel.'</td></tr>';
            $message .= '</table></body></html>';
            
            $to = $database['EmailTo'];
            $subject = 'Newsletter query';
            
                if (mail ($to, $subject, $message, $headers)) {
                    // echo '<p>Your message has been sent!</p>';
                   // echo "<script>alert('Your email has been sent!');</script>";
                    //header("location:index.html");
                } else {
                    // echo '<p>Something went wrong, go back and try again!</p>';
                    echo "<script>alert('Something went wrong, go back and try again!');</script>";
                    //header("location:index.html");
                }
    //     }
    // }

?>