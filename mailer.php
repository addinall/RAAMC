<?php
// vim: set expandtab tabstop=4 shiftwidth=4 autoindent smartindent:
// CAPTAIN  SLOG
//
//  FILE:       mailer.php 
//  SYSTEM:     RAAMC New web site 
//  AUTHOR:     Mark Addinall
//  DATE:       27/12/2013
//  SYNOPSIS:


    $from = $_REQUEST['email'];
    
        $today    = date("D-d-M-Y-H:i T O");

        $headers  = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=utf-8" . "\r\n";
        $headers .=  'From: ' . $from . "\r\n";

        $message  = "<html>\n";
        $message .= "<head>\n";
        $message .= '<meta http-equiv="content-type" content="text/html; charset=UTF-8" />' . "\n";
        $message .= "<title>HTML Mail for RAAMC Response</title> \n";
        $message .= "</head> \n";
        $message .= "<body> \n";
        $message .= '<table border="1" cellpadding="3" cellspacing="0">' . "\n";
        $message .= '<tbody align="center" style="font-family:veranda; color:black;background-color:green">' 
                        . "\n";
        $message .= "<tr><td colspan='2'>RAAMC MEMBERSHIP APPLICATION</td></tr>\n"; 
        $message .= "</tbody>\n";
        $message .= '<tbody align="left" style="font-family:veranda; color:DarkGreen;background-color:LightGreen">' . "\n"; 
        $message .= "<tr><td>Submitted at</td><td>" . $today . "</td></tr>\n";

        $message .= "<tr><td>From</td><td>"             . $_REQUEST['username'] . "</td></tr>\n";
        $message .= "<tr><td>Address line 1</td><td>"   . $_REQUEST['address1'] . "</td></tr>\n";
        $message .= "<tr><td>Address line 2</td><td>"   . $_REQUEST['address2'] . "</td></tr>\n";
        $message .= "<tr><td>Telephone</td><td>"        . $_REQUEST['phone'] . "</td></tr>\n";
        $message .= "<tr><td>Email</td><td>"            . $_REQUEST['email'] . "</td></tr>\n";
        $message .= "<tr><td>State</td><td>"            . $_REQUEST['state'] . "</td></tr>\n";
        $message .= "<tr><td>Service</td><td>"          . $_REQUEST['service'] . "</td></tr>\n";
        $message .= "<tr><td>Membership</td><td>"       . $_REQUEST['membership'] . "</td></tr>\n";
        $message .= "<tr><td>Privacy</td><td>"          . $_REQUEST['privacy'] . "</td></tr>\n";
        $message .= "<tr><td>Postcode</td><td>"         . $_REQUEST['postcode'] . "</td></tr>\n";
        $message .= "<tr><td>Service No</td><td>"       . $_REQUEST['serviceno'] . "</td></tr>\n";
        $message .= "<tr><td>DOB</td><td>"              . $_REQUEST['dob'] . "</td></tr>\n";
        $message .= "<tr><td>Discharge</td><td>"        . $_REQUEST['discharge'] . "</td></tr>\n";

        $message .- "</tbody>\n";
        $message .= "</table>\n";
        $message .= "\n\n<br><br>A confirmation of receipt email has been sent to <em>" 
                        .  $_REQUEST['email'] . "</em>\n";
        $message .= "\n\n</body>\n";
        $message .= "\n</html>\n";


        if (mail($to, $subject, $message, $headers)) {
            // happy
            // get some action to the screen
            // the mailer might make us wait


            // send a copy of the mail to the applicant

            $subject = "RAAMC Membership - Customer confirmation.";


            $headers  = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=utf-8" . "\r\n";
            $headers .=  'From: raamc@raamc.org'  . "\r\n" ;

            mail($from, $subject, $message, $headers);

        } else {
        }

?>


