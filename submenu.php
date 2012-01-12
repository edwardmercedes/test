<?php
$control = basename($_SERVER['SCRIPT_NAME'],".php");
$menu = substr($control, 0, 3);

switch ($menu){
case 'abo':	
	switch($control){
	
	case'about':
		$submenu = '
			<div id="carajito_tres">
	        <div id="submenu">
    	    <a href="about.php" id="subactivo">About Us</a>
			<a href="about_mission_vision_values.php">Our Mission, Vision and Values</a>
        	<a href="about_mission_outcomes2008.php">Our Mission Outcomes 2009</a>
	        <a href="about_board_directors.php">Our Board of Directors</a>
    	    </div>
   		 </div>';
	break;	

	
		case'about_mission_vision_values':
		$submenu = '
			<div id="carajito_tres">
	        <div id="submenu">
			<a href="about.php">About Us</a>
    	    <a href="about_mission_vision_values.php" id="subactivo">Our Mission, Vision and Values</a>
        	<a href="about_mission_outcomes2008.php">Our Mission Outcomes 2009</a>
	        <a href="about_board_directors.php">Our Board of Directors</a>
    	    </div>
   		 </div>';
		break;	
		
		case'about_mission_outcomes2008':
		$submenu = '
			<div id="carajito_tres">
	        <div id="submenu">
			<a href="about.php">About Us</a>
    	    <a href="about_mission_vision_values.php">Our Mission, Vision and Values</a>
        	<a href="about_mission_outcomes2008.php" id="subactivo">Our Mission Outcomes 2009</a>
	        <a href="about_board_directors.php">Our Board of Directors</a>
    	    </div>
   		 </div>';
		break;	
		
		case'about_board_directors':
		$submenu = '
			<div id="carajito_tres">
	        <div id="submenu">
			<a href="about.php">About Us</a>
    	    <a href="about_mission_vision_values.php">Our Mission, Vision and Values</a>
        	<a href="about_mission_outcomes2008.php">Our Mission Outcomes 2009</a>
	        <a href="about_board_directors.php" id="subactivo">Our Board of Directors</a>
    	    </div>
   		 </div>';
		break;	
	
	default:
	$submenu = '
	<div id="carajito_tres">
        <div id="submenu">
		<a href="about.php">About Us</a>
        <a href="about_mission_vision_values.php">Our Mission, Vision and Values</a>
        <a href="about_mission_outcomes2008.php">Our Mission Outcomes 2009</a>
        <a href="about_board_directors.php">Our Board of Directors</a>
        </div>
    </div>';
	}	
break;



//our programas
case 'our':
	switch($control){
	case 'our_programs_childrens':
		$submenu = '
			<div id="carajito_cuantro">
				<div id="submenu">
				<a href="our_program.php">Our Programs</a>
				<a href="our_programs_childrens.php" id="subactivo">Children&acute;s Programs</a>
				<a href="our_programs_summer_at_nhc.php">Summer 2008 @ New Hope Charities</a>
				<a href="our_programs_adult_community.php">Adult & Community Programs</a>
				</div>
    		</div>';	
	break;
	case 'our_programs_summer_at_nhc':
		$submenu = '
			<div id="carajito_cuantro">
				<div id="submenu">
				<a href="our_program.php">Our Programs</a>
				<a href="our_programs_childrens.php">Children&acute;s Programs</a>
				<a href="our_programs_summer_at_nhc.php" id="subactivo">Summer 2008 @ New Hope Charities</a>
				<a href="our_programs_adult_community.php">Adult & Community Programs</a>
				</div>
    		</div>';	
	break;
	
	case 'our_programs_adult_community':
		$submenu = '
			<div id="carajito_cuantro">
				<div id="submenu">
				<a href="our_program.php">Our Programs</a>
				<a href="our_programs_childrens.php">Children&acute;s Programs</a>
				<a href="our_programs_summer_at_nhc.php">Summer 2008 @ New Hope Charities</a>
				<a href="our_programs_adult_community.php" id="subactivo">Adult & Community Programs</a>
				</div>
    		</div>';	
	break;	
	
	case 'our_program':
		$submenu = '
			<div id="carajito_cuantro">
				<div id="submenu">
				<a href="our_program.php" id="subactivo">Our Programs</a>
				<a href="our_programs_childrens.php">Children&acute;s Programs</a>
				<a href="our_programs_summer_at_nhc.php">Summer 2008 @ New Hope Charities</a>
				<a href="our_programs_adult_community.php">Adult & Community Programs</a>
				</div>
    		</div>';	
	break;	
	

	
	default:
		$submenu = '
		<div id="carajito_cuantro">
			<div id="submenu"> 
			<a href="our_programs_childrens.php">Children&acute;s Programs</a>
			<a href="our_programs_summer_at_nhc.php">Summer 2008 @ New Hope Charities</a>
			<a href="our_programs_adult_community.php">Adult & Community Programs</a>
			</div>
    	</div>';	
	}
 
break;

//HELPING HANDS
case 'hel':
	switch($control){
	case 'helping_hands_who_we_serve':
		$submenu = '
		<div id="carajito_dos">
			<div id="submenu">
			<a href="helping_hands_who_we_serve.php"  id="subactivo">Who&nbsp; we&nbsp; serve&nbsp;&nbsp;</a>
			<a href="helping_hands_programs.php">&nbsp;Programs&nbsp; and&nbsp; Services&nbsp; We&nbsp; Offer&nbsp;&nbsp;</a>
			<a href="helping_hands_milestones.php">&nbsp;Milestones&nbsp;</a>
			<a href="helping_hands_acknowledgements.php">&nbsp;Acknowledgement & Thanks</a>
			<a href="helping_hands_volunteers.php">&nbsp;Volunteer Information</a>
			</div>
	    </div>';
	break;
	case 'helping_hands_programs':
		$submenu = '
		<div id="carajito_dos">
			<div id="submenu">
			<a href="helping_hands_who_we_serve.php">Who&nbsp; we&nbsp; serve</a>
			<a href="helping_hands_programs.php" id="subactivo">Programs&nbsp; and&nbsp; Services&nbsp; We&nbsp; Offer</a>
			<a href="helping_hands_milestones.php">Milestones</a>
			<a href="helping_hands_acknowledgements.php">Acknowledgement & Thanks</a>
			<a href="helping_hands_volunteers.php">Volunteer Information</a>
			</div>
	    </div>';
	break;
	case 'helping_hands_acknowledgements':
		$submenu = '
		<div id="carajito_dos">
			<div id="submenu">
			<a href="helping_hands_who_we_serve.php">Who&nbsp; we&nbsp; serve</a>
			<a href="helping_hands_programs.php">Programs&nbsp; and&nbsp; Services&nbsp; We&nbsp; Offer</a>
			<a href="helping_hands_milestones.php">Milestones</a>
			<a href="helping_hands_acknowledgements.php" id="subactivo">Acknowledgement & Thanks</a>
			<a href="helping_hands_volunteers.php">Volunteer Information</a>
			</div>
	    </div>';
	break;
	
	case 'helping_hands_volunteers':
		$submenu = '
		<div id="carajito_dos">
			<div id="submenu">
			<a href="helping_hands_who_we_serve.php">Who&nbsp; we&nbsp; serve</a>
			<a href="helping_hands_programs.php">Programs&nbsp; and&nbsp; Services&nbsp; We&nbsp; Offer</a>
			<a href="helping_hands_milestones.php">Milestones</a>
			<a href="helping_hands_acknowledgements.php">Acknowledgement & Thanks</a>
			<a href="helping_hands_volunteers.php" id="subactivo">Volunteer Information</a>
			</div>
	    </div>';
	break;
	
	case 'helping_hands_milestones':
		$submenu = '
		<div id="carajito_dos">
			<div id="submenu">
			<a href="helping_hands_who_we_serve.php">Who&nbsp; we&nbsp; serve</a>
			<a href="helping_hands_programs.php">Programs&nbsp; and&nbsp; Services&nbsp; We&nbsp; Offer</a>
			<a href="helping_hands_milestones.php" id="subactivo">Milestones</a>
			<a href="helping_hands_acknowledgements.php">Acknowledgement & Thanks</a>
			<a href="helping_hands_volunteers.php">Volunteer Information</a>
			</div>
	    </div>';
	break;
	
	default:
		$submenu = '
		<div id="carajito_dos">
			<div id="submenu">
			<a href="helping_hands_who_we_serve.php">Who&nbsp; we&nbsp; serve</a>
			<a href="helping_hands_programs.php">Programs&nbsp; and&nbsp; Services&nbsp; We&nbsp; Offer</a>
			<a href="helping_hands_milestones.php">Milestones</a>
			<a href="helping_hands_acknowledgements.php">Acknowledgement & Thanks</a>
			<a href="helping_hands_volunteers.php">Volunteer Information</a>
			</div>
	    </div>';	
	}
break;

//NOTICIAS Y EVENTOS
case 'eve':
	switch($control){
	case'events_news_upcoming':
	$submenu = '
		<div id="carajito_siete">
			<div id="submenu">
			<a href="events_news_upcoming.php" id="subactivo">Upcoming Events</a>
			<a href="events_news_recent.php">Past Events</a>
			<a href="events_news.php">News</a>
			</div>
		</div>';
	break;
	
	case'events_news_recent':
	$submenu = '
		<div id="carajito_siete">
			<div id="submenu">
			<a href="events_news_upcoming.php">Upcoming Events</a>
			<a href="events_news_recent.php" id="subactivo">Past Events</a>
			<a href="events_news.php">News</a>
			</div>
		</div>';
	break;

	case'events_news':
	$submenu = '
		<div id="carajito_siete">
			<div id="submenu">
			<a href="events_news_upcoming.php">Upcoming Events</a>
			<a href="events_news_recent.php">Past Events</a>
			<a href="events_news.php" id="subactivo">News</a>
			</div>
		</div>';
	break;
	
	default:
	$submenu = '
	<div id="carajito_siete"> 
        <div id="submenu">
		<a href="events_news_upcoming.php" id="subactivo">Upcoming Events</a>
        <a href="events_news_recent.php">Past Events</a>
		<a href="events_news.php">News</a>
        </div>
    </div>';
	
	}	
break;
//galeria de fotos
case 'pho':
switch($control){
	case'photo_gallery':
	$submenu = '
	<div id="carajito_cinco">
       <div id="submenu">
        <a href="photo_gallery.php" id="subactivo">Photo Gallery</a>
        <a href="photo_gallery_video.php">Video Gallery</a>
        </div>
    </div>
	';	
	break;
	case'photo_gallery_video':
	$submenu = '
	<div id="carajito_cinco">
       <div id="submenu">
        <a href="photo_gallery.php">Photo Gallery</a>
        <a href="photo_gallery_video.php" id="subactivo">Video Gallery</a>
        </div>
    </div>
	';	
	break;
	}
break;

//contactenos
case 'con':
	$submenu = '
	<div id="carajito">
	<!--
        <div id="submenu">
        <a href="#">Mission Outcomes 2007</a>
        <a href="#">Our Mission and Story</a>
        <a href="#">Our Board of Directors</a>
        </div>
	-->
    </div>
	';	
break;
case 'new': 
	switch($control){
	case 'newsletter_monthl_sign-up':
		$submenu = '
		<div id="carajito_seis">
			<div id="submenu">
			<a href="newsletter.php">Newsletter</a>
			<a href="newsletter_monthl_sign-up.php" id="subactivo">Newsletter Sign-up</a>
			<a href="newsletter_archive.php">Newsletter Archive</a>
			</div>
		</div>
		';	
	break;

	default:
		$submenu = '
		<div id="carajito_seis">
			<div id="submenu">
			<a href="newsletter.php" id="subactivo">Newsletter</a>
			<a href="newsletter_monthl_sign-up.php">Newsletter Sign-up</a>
			<a href="newsletter_archive.php">Newsletter Archive</a>
			</div>
		</div>';	
	}
break;


//site map
case 'sit':
	$submenu = '
	<div id="carajito">
	<!--
        <div id="submenu">
        <a href="#">Mission Outcomes 2007</a>
        <a href="#">Our Mission and Story</a>
        <a href="#">Our Board of Directors</a>
        </div>
	-->
    </div>
	';	
break;



//Collaborations and Partnerships
case 'col':
	$submenu = '
	<div id="carajito">
	<!--
        <div id="submenu">
        <a href="#">Mission Outcomes 2007</a>
        <a href="#">Our Mission and Story</a>
        <a href="#">Our Board of Directors</a>
        </div>
	-->
    </div>
	';	
break;


case 'don':
	$submenu = '
	<div id="carajito">
	<!--
        <div id="submenu">
        <a href="#">Mission Outcomes 2007</a>
        <a href="#">Our Mission and Story</a>
        <a href="#">Our Board of Directors</a>
        </div>
	-->
    </div>
	';	
break;

}
if (!empty($submenu)){
	echo $submenu;
}
?>

