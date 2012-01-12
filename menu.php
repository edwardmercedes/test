<?php 
$titulo = basename($_SERVER['SCRIPT_NAME'],".php");
$titulo = substr($titulo,0, 3);
switch($titulo){
case 'abo':
echo '

<a href="about.php" id="activo">About</a><a href="our_program.php">Our Programs</a><a href="helping_hands_who_we_serve.php">Helping Hands</a><a href="events_news_upcoming.php">Events & News</a><a href="photo_gallery.php">Photo & Video</a><a href="contact_us.php">Contact Us</a><a href="newsletter.php">Newsletter </a>

';
break;
case 'our':
echo '

<a href="about.php">About</a><a href="our_program.php" id="activo">Our Programs</a><a href="helping_hands_who_we_serve.php">Helping Hands</a><a href="events_news_upcoming.php">Events & News</a><a href="photo_gallery.php">Photo & Video</a><a href="contact_us.php">Contact Us</a><a href="newsletter.php">Newsletter </a>

';
break;

case 'hel':
echo '

<a href="about.php">About</a><a href="our_program.php">Our Programs</a><a href="helping_hands_who_we_serve.php" id="activo">Helping Hands</a><a href="events_news_upcoming.php">Events & News</a><a href="photo_gallery.php">Photo & Video</a><a href="contact_us.php">Contact Us</a><a href="newsletter.php">Newsletter </a>

';
break;

case 'eve':
echo '

<a href="about.php">About</a><a href="our_program.php">Our Programs</a><a href="helping_hands_who_we_serve.php">Helping Hands</a><a href="events_news_upcoming.php" id="activo">Events & News</a><a href="photo_gallery.php">Photo & Video</a><a href="contact_us.php">Contact Us</a><a href="newsletter.php">Newsletter </a>

';
break;

case 'pho':
echo '

<a href="about.php">About</a><a href="our_program.php">Our Programs</a><a href="helping_hands_who_we_serve.php">Helping Hands</a><a href="events_news_upcoming.php">Events & News</a><a href="photo_gallery.php" id="activo">Photo & Video</a><a href="contact_us.php">Contact Us</a><a href="newsletter.php">Newsletter </a>

';
break;

case 'con':
echo '

<a href="about.php">About</a><a href="our_program.php">Our Programs</a><a href="helping_hands_who_we_serve.php">Helping Hands</a><a href="events_news_upcoming.php">Events & News</a><a href="photo_gallery.php">Photo & Video</a><a href="contact_us.php" id="activo">Contact Us</a><a href="newsletter.php">Newsletter </a>

';
break;

case 'new':
echo '

<a href="about.php">About</a><a href="our_program.php">Our Programs</a><a href="helping_hands_who_we_serve.php">Helping Hands</a><a href="events_news_upcoming.php">Events & News</a><a href="photo_gallery.php">Photo & Video</a><a href="contact_us.php" >Contact Us</a><a href="newsletter.php" id="activo">Newsletter </a>

';
break;

case 'sit':
echo '

<a href="about.php">About</a><a href="our_program.php">Our Programs</a><a href="helping_hands_who_we_serve.php">Helping Hands</a><a href="events_news_upcoming.php">Events & News</a><a href="photo_gallery.php">Photo & Video</a><a href="contact_us.php" >Contact Us</a><a href="newsletter.php">Newsletter </a>
';
break;

default:
echo '

<a href="about.php">About</a><a href="our_program.php">Our Programs</a><a href="helping_hands_who_we_serve.php">Helping Hands</a><a href="events_news_upcoming.php">Events & News</a><a href="photo_gallery.php">Photo & Video</a><a href="contact_us.php">Contact Us</a><a href="newsletter.php">Newsletter </a>

';

}

?>