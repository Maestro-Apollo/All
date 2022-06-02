<?php
$newsletterErr = "";
$newsletter = "";
$newsletterErr1 = "";
$newsletter1 = "";
// define variables and set to empty values
if(isset($_POST["newsletterIndex"]))
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["newsletter1"])) {
            $newsletterErr = "Email is required";
        } else {
            $newsletter = $_POST['newsletter1'];
        }
    
        if($newsletter != "")
        {
            $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $name = "Travel Eagle";
            $email = "himaninagpal20@gmail.com";
            $message = '<html><body><table>';
            $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Email </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$newsletter.'</td></tr>';
            // $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Email </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$email.'</td></tr>';
            // $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Company Name </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$company.'</td></tr>';
            // $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Role at the company </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$role.'</td></tr>';
            // $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Total trips per month </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$trip.'</td></tr>';
            // $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Type of travel </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$travel.'</td></tr>';
            $message .= '</table></body></html>';
            
            $to = 'himaninagpal20@gmail.com';
            $subject = 'Newsletter query';
            
                if (mail ($to, $subject, $message, $headers)) {
                    //echo '<p>Your message has been sent!</p>';
                    header("location:index.html");
                } else {
                    //echo '<p>Something went wrong, go back and try again!</p>';
                    header("location:index.html");
                }
        }
    }
}
else if(isset($_POST["newsletterAgent"]))
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["newsletter3"])) {
            $newsletter1Err = "Email is required";
        } else {
            $newsletter1 = $_POST['newsletter3'];
        }
    
        if($newsletter1 != "")
        {
            $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $name = "Travel Eagle";
            $email = "himaninagpal20@gmail.com";
            $message = '<html><body><table>';
            $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Email </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$newsletter1.'</td></tr>';
            // $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Email </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$email.'</td></tr>';
            // $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Company Name </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$company.'</td></tr>';
            // $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Role at the company </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$role.'</td></tr>';
            // $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Total trips per month </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$trip.'</td></tr>';
            // $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Type of travel </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$travel.'</td></tr>';
            $message .= '</table></body></html>';
            
            $to = 'himaninagpal20@gmail.com';
            $subject = 'Newsletter query';
            
                if (mail ($to, $subject, $message, $headers)) {
                    //echo '<p>Your message has been sent!</p>';
                    header("location:index.html");
                } else {
                    //echo '<p>Something went wrong, go back and try again!</p>';
                    header("location:index.html");
                }
        }
    }
}
?>
