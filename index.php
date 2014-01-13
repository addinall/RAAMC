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

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta name="description" content="A web site created for the members of the Royal Australian Army Medical Corps Association.">
<meta name="keywords"  content="Australian, Army, MEDIC, medical, corps, RAAMC, Health, Ambulance, Hospital">
<meta name="author" content="Mark Addinall.  Brisbane. Australia"  />

<link href='http://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/slider.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">

<title>RAAMC Association National</title>

<!-- I am going to include a LEETLE bit of Javascript
     to stick some extra verification on a couple of input fields.  I THOUGHT
     I  might have been able to do it with HTML5 native verifications, but they
     are not yet really implemented and are all over the place.  I am not
     going to import libraries or framworks.  Using native Javascript it
     should only take 1-2KB to get what I require.  I want to guard against
     potential mail address injection attacks.  
     ALL of the animation, transformations, sliders, tricky DOM bits
     are being done in CSS3.  The Javascript is limited to client
     side authentication on the content form.  Full stop.   -->

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
            <div id="logo">
                <h1>RAAMC Association</h1>
            </div>
            <div id="head_right">
                <div id="slider">
                    <figure>
                        <img src="images/army1.jpg" alt="">
                        <img src="images/army2.jpg" alt="">
                        <img src="images/army3.jpg" alt="">
                        <img src="images/army4.jpg" alt="">
                        <img src="images/army5.jpg" alt="">
                        <img src="images/army6.jpg" alt="">
                        <img src="images/army9.jpg" alt="">
                        <img src="images/navy1.jpg" alt="">
                        <img src="images/navy2.jpg" alt="">
                        <img src="images/army1.jpg" alt="">
                    </figure>
                </div>
            </div>
            <div id="head_left">
                <ul class="bmenu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">ORB</a></li>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Links</a></li>
                </ul>
            </div>
        </div>


        <div id="content">
            <div id="column_one">
                <h1 class="white">Welcome!</h1>
                <p class="p1">
                Here we are in the left float...
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <h1 class="black">And Also...</h1>
                <p class="p2">
Mauris bibendum gravida aliquam. Donec non sodales enim. Proin convallis, urna id hendrerit porttitor, eros nibh porttitor magna, vel varius augue nisl accumsan metus. Nam libero neque, fringilla nec eleifend at, fringilla elementum nisi. Integer condimentum dolor vitae ullamcorper suscipit. Praesent nec mauris eu diam suscipit mattis. Nulla ultrices arcu mi, egestas aliquet diam auctor eget. Sed faucibus leo non massa cursus tempus. Sed porta placerat blandit. Morbi in neque ultricies, tempor magna eget, fringilla augue. Nunc quis cursus justo.
                </p>
            </div>

            <div id="column_two">
                <h1 class="black">Latest News</h1>
                <p class ="p2">
            Here we are in the right float..."
Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                </p>
                <h1 class="white">Last Month</h1>
                <p class="p1">
Fusce convallis congue eros, nec semper nunc. Nam scelerisque elit vitae est tincidunt rutrum. Donec ac mauris faucibus, luctus ipsum vitae, posuere dolor. Maecenas adipiscing sapien nec erat dignissim, id facilisis nisl sollicitudin. Proin rhoncus sollicitudin quam sit amet venenatis. Duis pulvinar, nunc sit amet tempus molestie, quam orci bibendum erat, vitae placerat eros tellus sit amet urna. Aliquam a eros id nisi cursus aliquet. Aenean in dolor dictum, pretium nisi vel, ultricies neque. Aenean vel adipiscing lorem. Etiam at enim quis dui lacinia laoreet sed id risus. Fusce quis blandit metus. Praesent nec odio nisl.
                </p>
            </div>
        </div>
        <div id="footer">
              (C) RAAMC Association Australia 2014 - Design and Programming by <a href="mailto:addinall@addinall.net">Mark Addinall</a>. 
        </div>
    </div>
</body>
</html>


