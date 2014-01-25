<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!--
// vim: set expandtab tabstop=4 shiftwidth=4 autoindent smartindent:
// CAPTAIN  SLOG
//
//  FILE:       membership.php 
//  SYSTEM:     RAAMC Home pages 
//  AUTHOR:     Mark Addinall
//  DATE:       21/12/2013
//  SYNOPSIS:

    A membership form cobbled up for the RAAMC members association.

    I had a look at several "off the shelf" open source based 
    solutions, most of which had a fee accompanying the code, and as 
    usual, all of them were hard to use ugly rubbish.  So I wrote 
    my own as per normal.

    I thought people might want to chuck this onto Faceslap,
    so I left it as a traditional POST form.  Since it is going
    onto a web page, I will AJAX the transaction instead.

    I decided not to AJAXify it.  I implemented the code but could
    see no added value in doing so and it aadded complexity that
    meant we would have different versions for different platforms.
    Not the addinall way of Zen - KISS.  So AJAX was chucked.

    This is a form that collects information, bundles it up, and shoves
    it onto a mailer program for distribution.  No mention of a 
    database requirement just yet.  We will see.

    This page in all of its manifistations is RESPONSIVE and FLUID.

    OK.  The RAAMC wants me to do a whole web site, so this prototype
    makes it into to the Web application.

    Start.
    Tues January 14th 2014
    (14114) Neat!
-->

  
<title>Membership Form RAAMC Association</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta name="keywords"  content="Australian, Army, MEDIC, medical, corps, RAAMC, Health, Ambulance, Hospital">
<meta name="description" content="A  contact/request for membership for fot the RAAMC Association in Australia." />
<meta name="author" content="Mark Addinall.  Brisbane. Australia"  />

<link href='http://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">

<style type="text/css">

    form {
        border: 1px solid #003300;
        width: 350px;
        -moz-border-radius: 20px;
        -webkit-border-radius: 20px;
        border-radius: 20px;

        background: rgba(209,201,209,1);
        background: -moz-linear-gradient(top, rgba(209,201,209,1) 0%, rgba(209,201,209,1) 2%, rgba(209,201,209,1) 2%, rgba(68,65,68,1) 100%);
        background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(209,201,209,1)), color-stop(2%, rgba(209,201,209,1)), color-stop(2%, rgba(209,201,209,1)), color-stop(100%, rgba(68,65,68,1)));
        background: -webkit-linear-gradient(top, rgba(209,201,209,1) 0%, rgba(209,201,209,1) 2%, rgba(209,201,209,1) 2%, rgba(68,65,68,1) 100%);
        background: -o-linear-gradient(top, rgba(209,201,209,1) 0%, rgba(209,201,209,1) 2%, rgba(209,201,209,1) 2%, rgba(68,65,68,1) 100%);
        background: -ms-linear-gradient(top, rgba(209,201,209,1) 0%, rgba(209,201,209,1) 2%, rgba(209,201,209,1) 2%, rgba(68,65,68,1) 100%);
        background: linear-gradient(to bottom, rgba(209,201,209,1) 0%, rgba(209,201,209,1) 2%, rgba(209,201,209,1) 2%, rgba(68,65,68,1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d1c9d1', endColorstr='#444144', GradientType=0 );

        margin: 10px;
        padding: 20px;
        -moz-box-shadow:0px -5px 300px #000000;
        -webkit-box-shadow:0px -5px 300px #000000;
        box-shadow:0px -5px 300px #000000;
    }

    .form_helper {
        border: 1px solid #003300;
        width: 120px;
        height: 60px;
        -moz-border-radius: 15px;
        -webkit-border-radius: 15px;
        border-radius: 15px;
        background: rgba(148,145,148,1);
        background: -moz-linear-gradient(top, rgba(148,145,148,1) 0%, rgba(115,120,115,1) 14%, rgba(26,25,26,1) 100%);
        background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(148,145,148,1)), color-stop(14%, rgba(115,120,115,1)), color-stop(100%, rgba(26,25,26,1)));
        background: -webkit-linear-gradient(top, rgba(148,145,148,1) 0%, rgba(115,120,115,1) 14%, rgba(26,25,26,1) 100%);
        background: -o-linear-gradient(top, rgba(148,145,148,1) 0%, rgba(115,120,115,1) 14%, rgba(26,25,26,1) 100%);
        background: -ms-linear-gradient(top, rgba(148,145,148,1) 0%, rgba(115,120,115,1) 14%, rgba(26,25,26,1) 100%);
        background: linear-gradient(to bottom, rgba(148,145,148,1) 0%, rgba(115,120,115,1) 14%, rgba(26,25,26,1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#949194', endColorstr='#1a191a', GradientType=0 );
         margin:1px auto;
        -moz-box-shadow:0px -5px 300px #000000;
        -webkit-box-shadow:0px -5px 300px #000000;
        box-shadow:0px -5px 300px #000000;
    }

    label {
        font-size: 12px;
        font-family: arial, sans-serif;
        list-style-type: none;
        color: #fff;
        text-shadow: #000 1px 1px;
        margin-bottom: 10px;
        font-weight: bold;
        letter-spacing: 1px;
        text-transform: uppercase;
        display: block;
    }
    
    input {
      -webkit-transition-property: -webkit-box-shadow, background;
      -webkit-transition-duration: 0.25s;
        padding: 6px;
        border-bottom: 0px;
        border-left: 0px;
        border-right: 0px;
        border-top: 1px solid #003300;
        -moz-box-shadow: 0px 0px 2px #000;
        -webkit-box-shadow: 0px 0px 2px #000;
        margin-bottom: 10px;
        background: #33AD33;
        width: 300px;
    }

    .small_input {
      -webkit-transition-property: -webkit-box-shadow, background;
      -webkit-transition-duration: 0.25s;
        padding: 6px;
        border-bottom: 0px;
        border-left: 0px;
        border-right: 0px;
        border-top: 1px solid #003300;
        -moz-box-shadow: 0px 0px 2px #000;
        -webkit-box-shadow: 0px 0px 2px #000;
        margin-bottom: 10px;
        background: #33AD33;
        width: 100px;
    }

    select {
      -webkit-transition-property: -webkit-box-shadow, background;
      -webkit-transition-duration: 0.25s;
        padding: 6px;
        border-bottom: 0px;
        border-left: 0px;
        border-right: 0px;
        border-top: 1px solid #003300;
        -moz-box-shadow: 0px 0px 2px #000;
        -webkit-box-shadow: 0px 0px 2px #000;
        margin-bottom: 10px;
        background: #33AD33;
        width: 100px;
    }

    input.submit {
      -webkit-transition-property: -webkit-box-shadow, background;
      -webkit-transition-duration: 0.25s;
        width: 100px;
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#99CC00), to(#4C6600));   
        background:  -moz-linear-gradient(19% 75% 90deg,#4C6600, #99CC00);
        color: #fff;
        text-transform: uppercase;
        text-shadow: #000 1px 1px;
        border-top: 1px solid #003300;
        margin-top: 10px;
    }

    input.submit:hover {
        -webkit-box-shadow: 0px 0px 2px #000;
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#CCFF33), to(#526614));
        background:  -moz-linear-gradient(19% 75% 90deg,#526614, #CCFF33);
    } 

    input.submit:active {
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#781bb9), to(#963AD6));
        background:  -moz-linear-gradient(19% 75% 90deg,#963AD6, #781bb9);
    }

    input:hover {
        -webkit-box-shadow: 0px 0px 4px #000;
        background: #80CC80;
    }
                      
   select:hover {
        -webkit-box-shadow: 0px 0px 4px #000;
        background: #80CC80;
    }                              

/* these next two bits of Martian represent our GOOG-BAD icons
 * in the input fields.  This is how to do icons in CSS3 whilst not
 * slinging graphics  files around the web */




 input:required:invalid, input:focus:invalid {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAeVJREFUeNqkU01oE1EQ/mazSTdRmqSxLVSJVKU9RYoHD8WfHr16kh5EFA8eSy6hXrwUPBSKZ6E9V1CU4tGf0DZWDEQrGkhprRDbCvlpavan3ezu+LLSUnADLZnHwHvzmJlvvpkhZkY7IqFNaTuAfPhhP/8Uo87SGSaDsP27hgYM/lUpy6lHdqsAtM+BPfvqKp3ufYKwcgmWCug6oKmrrG3PoaqngWjdd/922hOBs5C/jJA6x7AiUt8VYVUAVQXXShfIqCYRMZO8/N1N+B8H1sOUwivpSUSVCJ2MAjtVwBAIdv+AQkHQqbOgc+fBvorjyQENDcch16/BtkQdAlC4E6jrYHGgGU18Io3gmhzJuwub6/fQJYNi/YBpCifhbDaAPXFvCBVxXbvfbNGFeN8DkjogWAd8DljV3KRutcEAeHMN/HXZ4p9bhncJHCyhNx52R0Kv/XNuQvYBnM+CP7xddXL5KaJw0TMAF8qjnMvegeK/SLHubhpKDKIrJDlvXoMX3y9xcSMZyBQ+tpyk5hzsa2Ns7LGdfWdbL6fZvHn92d7dgROH/730YBLtiZmEdGPkFnhX4kxmjVe2xgPfCtrRd6GHRtEh9zsL8xVe+pwSzj+OtwvletZZ/wLeKD71L+ZeHHWZ/gowABkp7AwwnEjFAAAAAElFTkSuQmCC);
    background-position: right top;
    background-repeat: no-repeat;
    -moz-box-shadow: none;
  }
  input:required:valid {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAepJREFUeNrEk79PFEEUx9/uDDd7v/AAQQnEQokmJCRGwc7/QeM/YGVxsZJQYI/EhCChICYmUJigNBSGzobQaI5SaYRw6imne0d2D/bYmZ3dGd+YQKEHYiyc5GUyb3Y+77vfeWNpreFfhvXfAWAAJtbKi7dff1rWK9vPHx3mThP2Iaipk5EzTg8Qmru38H7izmkFHAF4WH1R52654PR0Oamzj2dKxYt/Bbg1OPZuY3d9aU82VGem/5LtnJscLxWzfzRxaWNqWJP0XUadIbSzu5DuvUJpzq7sfYBKsP1GJeLB+PWpt8cCXm4+2+zLXx4guKiLXWA2Nc5ChOuacMEPv20FkT+dIawyenVi5VcAbcigWzXLeNiDRCdwId0LFm5IUMBIBgrp8wOEsFlfeCGm23/zoBZWn9a4C314A1nCoM1OAVccuGyCkPs/P+pIdVIOkG9pIh6YlyqCrwhRKD3GygK9PUBImIQQxRi4b2O+JcCLg8+e8NZiLVEygwCrWpYF0jQJziYU/ho2TUuCPTn8hHcQNuZy1/94sAMOzQHDeqaij7Cd8Dt8CatGhX3iWxgtFW/m29pnUjR7TSQcRCIAVW1FSr6KAVYdi+5Pj8yunviYHq7f72po3Y9dbi7CxzDO1+duzCXH9cEPAQYAhJELY/AqBtwAAAAASUVORK5CYII=);
    background-position: right top;
    background-repeat: no-repeat;
  }

input::-webkit-input-placeholder, textarea::-webkit-input-placeholder { 
    color:    white;
}
input:-moz-placeholder, textarea:-moz-placeholder { 
    color:    white;
}
input::-moz-placeholder, textarea::-moz-placeholder { 
    color:    white;
}
input:-ms-input-placeholder, textarea:-ms-input-placeholder { 
    color:    white;
}


/* now a custom button for some form validation trickery */

.go_button {
   border-top: 1px solid #aff2be;
   background: #054f04;
   background: -webkit-gradient(linear, left top, left bottom, from(#6ce68d), to(#054f04));
   background: -webkit-linear-gradient(top, #6ce68d, #054f04);
   background: -moz-linear-gradient(top, #6ce68d, #054f04);
   background: -ms-linear-gradient(top, #6ce68d, #054f04);
   background: -o-linear-gradient(top, #6ce68d, #054f04);
   padding: 9.5px 19px;
   margin: 10px;
   -webkit-border-radius: 15px;
   -moz-border-radius: 15px;
   border-radius: 15px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: white;
   font-size: 15px;
   font-family: 'Lucida Grande', Helvetica, Arial, Sans-Serif;
   text-decoration: none;
   vertical-align: middle;
   }

.go_button:hover {
   border-top-color: #03992b;
   background: #03992b;
   color: #ccc;
   }

.go_button:active {
   border-top-color: #297502;
   background: #297502;
   }

</style>


<script type="text/javascript"> 

var debug = false;


//-------------------------
function checkAndSubmit() { 

    //  OK, since the HTML5 validation is only fleetingly
    //  implemented, we still need to write a BIT of Javascript
    //  to look at some basic client side validation.  I was trying
    //  to avoid ALL javascript, but still, we aren't loading
    //  any libraries or external frameworks, we are using the
    //  Javascript that comes with the browser.

    if (debug) {
        alert('in check and submit');
    }

    if (isValidForm()) {

        var butt = document.getElementById("register");
        if (debug) {
            alert('in butt click');
        }

        butt.click();
    }
}


//--------------------------
function validPostcode(code) {

      var postcodeRE = new RegExp(/^[0-9]{4}$/);
    
      return postcodeRE.test(code);
}

//--------------------------
function validEmail(email) {

    // this will sort out email injection security attacks.

      // var emailRE = new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/);
      var emailRE = new RegExp(/^[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+\.[a-zA-Z]{2,4}$/);
    
      return emailRE.test(email);
}

//-----------------------
function isValidForm()  {

        
        if (!document.raamcform.username.value)  { 
            alert('Please enter your name.'); 
            document.raamcform.username.focus(); 
            return false; 
        }

        if (!document.raamcform.address1.value)  { 
            alert('Please enter your address.'); 
            document.raamcform.address1.focus(); 
            return false; 
        }

        if (!document.raamcform.email.value)  { 
            alert('Please enter your email address.'); 
            document.raamcform.email.focus(); 
            return false; 
        }

        if (validEmail(document.raamcform.email.value) == false) {
            alert('Please enter a VALID email address.'); 
            document.raamcform.email.focus(); 
            return false; 
        }

        if (!document.raamcform.postcode.value)  { 
            alert('Please enter your postcode.'); 
            document.raamcform.postcode.focus(); 
            return false; 
        }


        if (validPostcode(document.raamcform.postcode.value) == false) {
            alert('Please enter a VALID postcode.'); 
            document.raamcform.postcode.focus(); 
            return false; 
        }

    if (debug) {
        alert('about to return true');
    }

    return true; 
}

</script> 

</head>


<body>

    <div id="container">
        <div id="header">
            <div id="logo">
                <h1>RAAMC Association</h1>
            </div>
            <div id="head_right">
                <img src="images/army9.jpg">
            </div>

            <!-- Left hand side of the header is where we ALWAYS keep the menu. 
                 Again, PURE CSS3, FLUID and RESPONSIVE.  NO Javascript. -->

            <div id="head_left">
                <?php require("menu.php");  ?>
            </div>
        </div>


        <div id="content">
            <div id="column_one">
<?php

// global debug variable to turn on and off testing code
// you might want to leave this alone

$debug = false; 

if ($debug) {
    error_reporting(-1);
}


// global variable that tells this module where it is going to run.
// - Stand alone Web Pages
// - Facebook
// - WordPress
// That is all I am going to bother with.  Can't be fucked
// dicking around with JOOMLA! or any of the other monster CMS systems.

$platform = "WEBPAGE";
// $platform = "FACEBOOK";
// $platform = "WORDPRESS";


// The following mail file contains the To:  From: CC: Subject:
// information that the customer can modify without calling me.
// Doing an include of course is not possible on FaceSlap, so...

if ($platform == "FACEBOOK") {
    $to = 'mark_addinall@yahoo.com.au';

    // I suggest you not change this one.  PHP mail is
    // quirky and if you are one character over some
    // 'secret' undocumented number, the whole thing
    // stops.  No errors, just stops.
    
    $subject = 'Membership Request - Facebook';
} else {

    include("conf/config.php");
}

// Instantiate the AYAH object. You need to instantiate the AYAH object
// on each page that is using PlayThru.   AYAH (Are You A Human) is the
// graphical replacement for CAPTCHA.  CAPTCHA is getting fucking hard to read,
// even for screen addicts like myself.  The target audience for this
// for is mostly men 50+ that have spent a significant few years
// squinting into the sun or down a rifle barrel!  ex Army.  Blind as
// Coots!  Just like me!  I really can  not see the world any longer!

    if ($platform == "WEBPAGE") {
        require_once("tools/ayah.php");

        $ayah = new AYAH();
    }


    // Check to see if the user has submitted the form.

    if (array_key_exists('register', $_POST)) {

    // Use the AYAH object to see if the user passed or failed the game.
    // but only if we are on a stand alone web application.  This CAPTCHA
    // tool has o't been integrated by me on the Faceslap or Wordpress models
    // as yet.  So those platforms get no CAPTCHA security at the moment.

    if ($platform == "WEBPAGE") {
        $score = $ayah->scoreResult();
    } else {
        $score = true;
    }

    // now we set up what is going to be common amongst these
    // subsequent information pages in all state.  Worked,
    // mailer fuck up, we think a BOT is playing with us.
    // Everyone gets the left float information page displayed.

    $page = <<<EOH
    <form autocomplete="off" action="index.php" method="post">
       <label>Full name:</label>
            <input type="text" name="username" value="{$_REQUEST['username']}" disabled />
       <label>Address 1:</label>
            <input type="text" name="address1" value="{$_REQUEST['address1']}" disabled />
       <label>Address 2:</label>
            <input type="text" name="address2" value="{$_REQUEST['address2']}" disabled />
       <label>Telephone:</label>
            <input type="tel" name="phone" value="{$_REQUEST['phone']}" disabled />
       <label>eMail:</label>
            <input type="email" name="email" value="{$_REQUEST['email']}" disabled  />
       <label>State:</label>
            <input type="text" name="state2" class="small_input" value="{$_REQUEST['state']}" disabled />
       <label>Service:</label>
            <input type="text" name="service2" class="small_input" value="{$_REQUEST['service']}" disabled />
       <label>Membership:</label>
            <input type="text" name="membership2" class="small_input" value="{$_REQUEST['membership']}" disabled />
       <label>Privacy:</label>
            <input type="text" name="privacy2" class="small_input" value="{$_REQUEST['privacy']}" disabled />
       <label>Postcode:</label>
            <input type="text" name="postcode" class="small_input" value="{$_REQUEST['postcode']}" disabled />
       <label>Service No:</label>
            <input type="text" name="serviceno" value="{$_REQUEST['serviceno']}" disabled />
       <label>DoB:</label>
            <input type="text" name="dob2" class="small_input" value="{$_REQUEST['dob']}" disabled />
       <label>Discharge:</label>
            <input type="text" name="discharge2" class="small_input" value="{$_REQUEST['discharge']}" disabled />
       <br>
       <input type="submit" value="Go Home" name="bye" class="submit" />
     </form>     
    </div>      <!-- end of div column_one -->
EOH;

    // OK, dope the customers email address from the form.

    $from = $_REQUEST['email'];
    
    if ($score) {

        // This happens if the user passes the game. In this case,
        // send the details to the RAAMC boss of the road.

        $today    = date("D-d-M-Y-H:i T O");

        $headers  = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=utf-8" . "\r\n";
        $headers .=  'From: ' . $from . "\r\n";

        $postscript= "\n\n<br><br>A confirmation of receipt email has been sent to <em>" 
            .  $_REQUEST['email'] . "</em>\n";

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
        $message .= $postscript; 
        $message .= "\n\n</body>\n";
        $message .= "\n</html>\n";


        if ($debug) {
            print "To:       $to <br>";
            print "Subject:  $subject <br>";
            print "From:     $from <br>";
            print "Message:  $message <br>";
            print "Headers:  $headers <br>";

        }


        if (mail($to, $subject, $message, $headers)) {
            // happy
            // get some action to the screen
            // the mailer might make us wait


            print $page;

            $page_two =  <<<EOP2
    <div id="column_two">
    <h1>Membership Application</h1>
    <h2>Congratulations!  It worked!</h2>
      <p class="p1">
      The R.A.A.M.C. Association has been sent mail containg the information displayed on the left in our data tablet. You blokes that own the site get to say whatever you want in here... Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
      </p>
      <p class="p2">
        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
      </p>
    </div>
EOP2;
            print $page_two;

            // send a copy of the mail to the applicant

            $subject = "RAAMC Membership - Customer confirmation.";


            $headers  = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=utf-8" . "\r\n";
            $headers .=  'From: raamc@raamc.org'  . "\r\n" ;

            // modify the message to suit the customer and shut
            // the fuck up out of Bernd Felsche!  ;-)

            $message = str_replace($postscript,
                        "\n\n<br><br>Your request has been sent to <em>RAAMC Association HQ.</em>\n",
                            $message);

                
            mail($from, $subject, $message, $headers);

        } else {

            print $page;

            $page_three = <<<EOP3
    <div id="column_two">
    <h1>Membership Application</h1>
    <h2>Bummer!  The mailer broke!</h2>
      <p class="p1">
      The R.A.A.M.C. Association seems to have a broken mailer at the moment.  Your application could not be forwarded.  The very BEST thing to do now is give one of our team a quick telephone call. ... Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
      </p>
      <p class="p2">
        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
      </p>
    </div>
EOP3;
            print $page_three;

        }

    } else {
        // This happens if the user does not pass the game.
        // Having had two or three re-tries.  It is a shame that the
        // widget does not terminate after n tries or I seconds.


            print $page;

            $page_four = <<<EOP4
    <div id="coltwo">
    <h1>Membership Application</h1>
    <h2>Bummer!  Security failure</h2>
      <p class="p1">
      The R.A.A.M.C. Association robot seems to think you might be a BOT trying to use us as a SPAM remailer.  This is due to input failing the security game.  Your application could not be forwarded.  We will however re-direct you to our home page and you can have another go if you REALLY ARE HUMAN!If you are a human, and this message keeps pestering you, then WE have broken something.  The very BEST thing to do now is give one of our team a quick telephone call. ... Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
      </p>
      <p class="p2">
        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
      </p>
    </div>
EOP4;
            print $page_four;

    }
} else {

    // first time in
    // set up the registration form for the customer.
    // looks plain here but the CSS3 makes it pretty.
    //
    // I turned of autofill on this form because GOOGLE
    // and Chrome ignore my CSS and draw their own God
    // awful shitty yeller colour....bastards....

$form = <<<EOF
    <form id="raamcform" name="raamcform" autocomplete="off" action="" method="post">
    
        <label>Full name:</label>
            <input type="text" name="username" required placeholder="Full Name with preferred title. "/>
        <label>Address 1:</label>
            <input type="text" name="address1"  required placeholder="First line of street address. "/>
        <label>Address 2:</label>
            <input type="text" name="address2"  placeholder="Second line (optional). "/>
        <label>Telephone:</label>
            <input type="tel" name="phone"  placeholder="Telephone number (optional)." />
        <label>eMail:</label>
            <input type="email" name="email"  required placeholder="MUST supply a valid email address." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
                
        <label>State:</label>

        <select name="state">
          <option value="QLD">QLD</option>
          <option value="NSW">NSW</option>
          <option value="Vic">Vic</option>
          <option value="TAS">TAS</option>
          <option value="SA">SA</option>
          <option value="WA">WA</option>
          <option value="NT">NT</option>
          <option value="OTHER">Other</option>
       </select>

        <label>Service:</label>

        <select name="service">
          <option value="ARMY">Army</option>
          <option value="NAVY">Navy</option>
          <option value="RAAF">Air Force</option>
          <option value="COPS">Police</option>
          <option value="SPOOKS">Other</option>
       </select>


        <label>Membership:</label>

        <select name="membership">
          <option value="regular">Regular</option>
          <option value="special">Special</option>
          <option value="Allied`">Allied</option>
          <option value="Allied`">None</option>
       </select>

        <label>Privacy of Details:</label>

        <select name="privacy">
          <option value="private">Private</option>
          <option value="public">Public</option>
          <option value="custom">Custom</option>
       </select>

       <label>Postcode:</label>
       <input type="text" name="postcode" class="small_input" required pattern="^[0-9]{4}$" />
       <label>Service No:</label>
       <input type="text" name="serviceno" placeholder="Service number (optional)."  />
       <label>DoB:</label>
       <input type="date" name="dob"  />
       <label>Discharge:</label>
       <input type="date" name="discharge"  />
EOF;

   print $form;

// Use the AYAH object to get the HTML code needed to
// load and run PlayThru. We must place this code
// directly before your 'Submit' button.

    echo $ayah->getPublisherHTML();

$part_two = <<<EOE
       <input type="submit" value="Register" id="register" name="register" style="display:none;" />
     </form>    

    <div class="form_helper">
        <button class="go_button" onclick="checkAndSubmit()"> Register </button>
    </div> 
    </div>  <!-- should be the end of column_one div -->
    
    <div id="column_two">
      <h1>Membership Application</h1>
      <p class="p1">
      Welcome to the he R.A.A.M.C. Association Membership page.  You can fill in the form on the left and do everything automatically, or if you prefere, you can download a form to be printed <a href="doc/membership_form.pdf">HERE</a>.  You may them mail the form to us or scan it and send it by fax... Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
      </p>
      <p class="p2">
        I undestand that membership of the RAAMC Association is free, however, if you would like to make a donation to assist in administrative costs, please click <a href="">HERE</a> to make a secure transaction through our PayPal Gateway.  Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
      </p>
      <p class="p1">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <p class="p2">
      At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
      </p>
      <p class="p1">
      In applying to join the RAAMC Association I hereby confirm that I will abide by the Constitution of the RAAMC Association and continue to hold the values I have served under whilst a member of the Australian Defence Force and the Royal Australian Army Medical Corps. 
      </p>
EOE;

    print $part_two;
}

?>

            </div> <!-- column_two -->
        </div> <!-- content -->
        <div id="footer">
            <?php require("footer.php");  ?>
        </div>
    </div>   <!-- container -->
</body>
</html>

