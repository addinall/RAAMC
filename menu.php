
<?php
// vim: set expandtab tabstop=4 shiftwidth=4 autoindent smartindent:
//---------------------------------------------------------
// CAPTAIN  SLOG
//---------------------------------------------------------
//
//	FILE:       menu.php 
//	SYSTEM:     RAAMC new home pages 
//	AUTHOR:     Mark Addinall
//	DATE:       14/01/2014
//	SYNOPSIS:   Just the menu choices. Nothing fancy
//
//------------+-------------------------------+------------
// DATE       |    CHANGE                     |    WHO
//------------+-------------------------------+------------
//
//

$menu =<<<EOMENU
                <ul class="bmenu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="membership.php">Membership</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">ORB</a></li>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Links</a></li>
                </ul>
EOMENU;

print $menu;

?>
