<?php
// vim: set expandtab tabstop=4 shiftwidth=4 autoindent smartindent:
// CAPTAIN  SLOG
//
//  FILE:       forms.php 
//  SYSTEM:     RAAMC Association new web site 
//  AUTHOR:     Mark Addinall
//  DATE:       27/12/2013
//  SYNOPSIS:
//
//    This page in all of the manifistations is RESPONSIVE and FLUID.
//    It will work on a PC, Fondleslab or telephone.  Perhaps not a
//    Rotary Telephone.


$form_one = <<<EOH
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
EOH;


   // first time in
    // set up the registration form for the customer.
    // looks plain here but the CSS3 makes it pretty.
    //
    // I turned of autofill on this form because GOOGLE
    // and Chrome ignore my CSS and draw their own God
    // awful shitty yeller colour....bastards....

$contact_form = <<<EOF
    <form id="contact_form" name="contact_form" autocomplete="off" action="" method="post">
    
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

$end_form = <<<EOE
       <input type="submit" value="Register" id="register" name="register" style="display:none;" />
     </form>    
EOE;

function do_form() {


    print $contact_form;

    // Use the AYAH object to get the HTML code needed to
    // load and run PlayThru. We must place this code
    // directly before your 'Submit' button.

    echo $ayah->getPublisherHTML();

    print $end_form;


}



?>

