<?php
    if(isset($_POST['submit'])){
        $to = 'wesleymahler@gmail.com';
        $firstname = $_POST["name"];
        $laststname = $_POST["lname"];
        $email= $_POST["email"];
        $text= $_POST["message"];
        $sub= $_POST["subject"];
        $phone= $_POST["phone"];
        


        //$headers = 'MIME-Version: 1.0' . "\r\n";
        //$headers .= "From: " . $email . "\r\n"; // Sender's E-mail
        //$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        
        $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
        $headers = "From:" . $email;
        
        mail($to,$subject,$message,$headers);
        mail($to,$subject,$message,$headers);

        //$message ='<table style="width:100%">
          //  <tr>
           //     <td>'.$firstname.'  '.$laststname.'</td>
           // </tr>
           // <tr><td>Email: '.$email.'</td></tr>
           // <tr><td>phone: '.$phone.'</td></tr>
            //<tr><td>Text: '.$text.'</td></tr>
            
        //</table>';

        if (@mail($to, $email, $message, $headers))
        {
            echo 'The message has been sent.';
        }else{
            echo 'failed';
        }
    }
?>
