<?php
    $INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/php/";
 include($INC_DIR. "head.php");
 include($INC_DIR. "analyticstracking.php");
 include($INC_DIR. "menu_light.php"); ?>

<div id="intro" class="section intro">
        
<div class="heading">
    <h2>Eagles Landing Pet Hospital, PLLC</h2>
    <!--[if gt IE 9]><!-->
        <img class="intro-logo" src="http://eagleslandingpethospital.com/resources/ELPH_logo.png" width="635" height="292"/>
    <!--<![endif]-->
</div>

<div class="content">
    <h2 style="padding: 1em 0">404 - Page not found</h2>

<div class="column">
        <img src="http://eagleslandingpethospital.com/resources/404.jpg" width="383" height="306">
    <br class="w1024 w640">  </div>

    <div class="column">
<p><strong>
<?php
$input = array("Maybe I used it as a scratching post?",
 "I think I saw it in the litter box....",
 "I'm pretty sure I traded that one for a dead parrot.");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
?>
</strong></p><p>Try visiting our <a  style="color: #2741c1" href="http://eagleslandingpethospital.com">main page</a> and going from there.</p>
</div>
</div>
</div>


 <?php  
   include($INC_DIR. "contact.php");
   include($INC_DIR. "footer.php"); ?>
<script src="http://eagleslandingpethospital.com/js/combo.js"></script>

</body>
