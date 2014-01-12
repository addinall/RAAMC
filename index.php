<!DOCTYPE html>
<html lang="en">
<head>
<!--
 vim: set expandtab tabstop=4 shiftwidth=4 autoindent smartindent:
// CAPTAIN  SLOG
//
//  FILE:       index.php 
//  SYSTEM:     RAAMC Accociation new web pages 
//  AUTHOR:     Mark Addinall
//  DATE:       10/01/2014
//  SYNOPSIS:

    This page in all of it's manifistations is RESPONSIVE and FLUID.
    It will work on a PC, Fondleslab or telephone.  Perhaps not a
    Rotary Telephone.
    
    At first I wrote a membership for to bolt onto the RAAMC existing
    site, but as it turned out the existing site was pretty old and sad,
    and constructed in some bizarre CMS system from Denmark!  So I said
    I would give them a new web site out the the goodness of my heart!

    Everything in this site is built responsive from the ground up,
    the slider, the forms, image containers, movie containers.

    Again, I looked at some WordPress themes thinking I could save
    some effort, but as usual they were fucking awful, fat and hard to
    use.  Fair dinkum, the CMS ststems on offer are very poor quality.
    As soon as this site is done I am going to tie a copy of Chameleon
    to it to manage the content.


-->

  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>RAAMC Association National</title>
<meta name="description" content="A web site created for the members of the Royal Australian Army Medical Corps Association." />
<meta name="author" content="Mark Addinall.  Brisbane. Australia"  />

<link rel="stylesheet" type="text/css" href="css/style.css">


<!-- I am going to include a LEETLE bit of Javascript
     to stick some extra verification on a couple of input fields.  I THOUGHT
     I  might have been able to do it with HTML5 native verifications, but they
     are not yet really implemented and are all over the place.  I am not
     going to import libraries or framworks.  Using native Javascript it
     should only take 1-2KB to get what I require.  I want to guard against
     potential mail address injection attacks.  -->

<?php

// global debug variable to turn on and off testing code
// you might want to leave this alone

if ($debug) {
    error_reporting(-1);
}

?>


</head>

<body>

    <div id="container">
        <div id="header">
            <h1>Here in the Header</h1>
            <h2>Starting Construction.  Coming SOON!!!</h2>
        </div>

        <div id="column_one">
            <p class="p1">
                Here we are in the left float...
            </p>
        </div>

        <div id="column_two">
            <p class ="p2">
                Here we are in the right float..."
            </p>
        </div>

        <div id="footer">
            <p class="p3">
                Here in the footer!
            </p>
        </div>
    </div>
</body>
</html>


