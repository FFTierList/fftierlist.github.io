<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Future Fight Flair Selector</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:title" content="/r/future_fight Flair Selector!" />
<meta property="og:type" content="website" />
<meta property="og:description" content="Flair Selector for /r/future_fight" />
<meta property="og:url" content="https://futurefightflair.github.io/" />
<meta property="og:image" content="https://futurefightflair.github.io/icons/snoo.png" />
<!-- Stylesheets -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans:300italic,400italic,600italic,700italic,400,300,600,700"
        type="text/css" media="all">
<link href="https://fonts.googleapis.com/css?family=Exo:400,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
<link rel="stylesheet" href="c_style.css" type="text/css" media="all">
<link rel="stylesheet" href="c_flair.css" type="text/css" media="all">
<!-- JavaScript -->
<link rel="icon" type="image/png" href="icons/snoo.png" />
<script>var flair = {};</script>
<script src="https://futurefightflair.github.io/jquery.min.js"></script>
<script type="text/javascript" src="j_flair.js"></script>
<script type="text/javascript" src="j_scripts.js"></script>
</head>

<body onload="defaultfilter()">
<noscript>
JavaScript is required to run this page.
</noscript>
<center>
  <br>
  <a href="https://www.reddit.com/r/future_fight/"> <img src="https://b.thumbs.redditmedia.com/iDXiTkdkzFQUhPtouoSnNmLzS_xqiDnlyc13wOdbqbk.png" alt="Future Fight" width="100px;"> </a>
</center>
<div class="wrapper no-style no-margin" style="overflow:auto;">
  <button style="float:right;" onclick="n.toggleClass('#help-bubble', 'hide');return false">SUPPORT</button>
</div>
<div id="help-bubble" class="wrapper no-margin hide">
  <h3>INSTRUCTIONS</h3>
  <p> <b>How to Use:</b> Below is a list of flair images that can be selected to be used. Click on one, and a preview
    image will jump to the top as well as showing that icon's corresponding character name and uniform name. </p>
  <p>If you wish to have additional and optional text next to your flair icon, enter that in the "Insert flair text here"
    box provided. If not, you can leave that field empty.</p>
  <p>Once you have selected your flair and optional text, click the "SEND FLAIR REQUEST" button. This will open a reddit
    private message form to our flair bot account, <a href="https://www.reddit.com/u/FutureFightFlairs">/u/FutureFightFlairs</a>. Please do not change anything in the message title or body, leave it as it is and send
    the message.</p>
  <p>Our script is set to check for new messages every minute, so within a minute, assuming everything is going
    correctly, you should receive a message from <a href="https://www.reddit.com/u/FutureFightFlairs">/u/FutureFightFlairs</a> confirming your flair request has succeeded. The next time you visit <a href="https://www.reddit.com/r/future_fight">/r/future_fight</a>, your flair should be applied. <b>Please make sure you wait 10 minutes before sending another request, unnecessarily sending duplicate messages only slows things down.</b> </p>
  <p>You may change your flair as many times as you want and the flair selector will be updated as new character portraits
    are added to the game.</p>
  <p> <b>BUGS AND ISSUES</b> <br/>
    If, after a minute, your flair has not updated, we ask that you try again. If there is still nothing, please <a href="https://www.reddit.com/message/compose?to=%2Fr%2Ffuture_fight">message the moderators of /r/future_fight</a>, or if you need additional help or have found a different problem/bug.</p>
  <h3>FILTERS AND TAGS</h3>
  <p>You can filter heroes you want to see or alternatively use this as a utility to search for characters. You can either
    simply start typing their names (or the name of a uniform) into the filter box, or filter heroes by their <b>attributes</b>.</p>
  <p>Simply put your text in between hashtags for attribute system to work properly.</p>
  <p> <i>Example:</i> <b>#Time Freezing Immunity#</b> </p>
  <p> <i>Attribute List:</i> </p>
  <ul>
    <li> <i>Abilities: </i> Agent, Agility, Chaos Magic, Chill, Cold Blooded, Command, Durability, Energy Projection, Fantastic Four Fast Movement, Flame, Healing,
      Heightened Senses, Leadership, Machine, Magic, Mind, Mind Resist, Phoenix Force, Poison, Pure Evil, Shock, Spider-Sense,
      Strong, Symbiote, Time Freezing Immunity, Weapons Master</li>
    <li> <i>Gender: </i>Genderless, Female, Male</li>
    <li> <i>Race: </i>Alien, Creature, Human, Inhuman, Mutant, Other</li>
    <li> <i>Side: </i>Hero, Neutral, Villain</li>
    <li> <i>Team: </i>Avengers, Black Order, Defenders, Guardians, Shield, Sinister Six, Spidey, X-Men</li>
    <li> <i>Type: </i>Blast, Combat, Speed, Universal</li>
    <li> <i>Utilities: </i>MCU, New, NPC, Tier3, Potential, Support</li>
  </ul>
</div>
<div class="wrapper" style="background:#0e1320; display:none;">
  <div id="flair-selection" class="left">
    <div class="cf">
      <div class="gb-100" style="margin-right:8px">
        <div id="flair-selection-flair" class="flair1"></div>
      </div>
		<div class="gb-300" style="margin-right:8px">
<p style="font-size: 10px; line-height:5px;"><strong>Abilities:</strong><text id="flair-selection-abilities"></text></p>
<p style="font-size: 10px; line-height:5px;"><strong>Gender:</strong><text id="flair-selection-gender"></text></p>
<p style="font-size: 10px; line-height:5px;"><strong>Race:</strong><text id="flair-selection-race"></text></p>
<p style="font-size: 10px; line-height:5px;"><strong>Side:</strong><text id="flair-selection-side"></text></p>
<p style="font-size: 10px; line-height:5px;"><strong>Team:</strong><text id="flair-selection-team"></text></p>
<p style="font-size: 10px; line-height:5px;"><strong>Type:</strong><text id="flair-selection-type"></text></p>
<p style="font-size: 10px; line-height:5px;"><strong>Utilities:</strong><text id="flair-selection-utilities"></text></p>
		</div>
    </div>
  </div>
</div>
<div class="wrapper" style="background:#0e1320">
 <center>
	  <div id="filter-selection-name" style="color:white;">Filter</div>
	 		<div class="ButtonClass" id="ButtonClass">
    <button class="btn1 active" id="all" style="margin-bottom: 5px; padding:1px; line-height: 9px; height:25px; width:25px;" onclick="filterSelection2('all')" title="All Abilities">All</button>
    <button class="btn1" style="margin-bottom: 5px; padding:1px; line-height: 9px;" onclick="filterSelection2('#Buff')" title="Buff"><img style="height:20px; width:20px;" src="https://fftierlist.github.io/icons/buff.png"></button>
    <button class="btn1" style="margin-bottom: 5px; padding:1px; line-height: 9px;" onclick="filterSelection2('#Support')" title="Team Support"><img style="height:20px; width:20px;" src="https://fftierlist.github.io/icons/support.png"></button>
    <button class="btn1" style="margin-bottom: 5px; padding:1px; line-height: 9px;" onclick="filterSelection2('#Leader')" title="Leadership"><img style="height:20px; width:20px;" src="https://fftierlist.github.io/icons/leadership.png"></button>
</div>
  </center>
</div>
<div class="wrapper" style="background:#0e1320">
  <div id="flair-filter" class="center" style="-webkit-justify-content:space-between; justify-content:space-between; padding:6px; background: linear-gradient(to bottom,#213452,#192029);">
    <div style="display: inherit">
<div class="dropdown1" id="ButtonClass" style="left: -4px;">
  <button class="btn4" value="combat">COMBAT</button>
  <div class="dropdown1-content">
  <button class="btn2" value="combat" onclick="filterSelection1('Combat')">COMBAT</button><br>
  <button class="btn2" value="blast" onclick="filterSelection1('Blast')">BLAST</button>
  <button class="btn2" value="speed" onclick="filterSelection1('Speed')">SPEED</button>
  <button class="btn2" value="universal" onclick="filterSelection1('Universal')">UNIVERSAL</button>
  </div>
</div> 
<div class="dropdown">
<button class="btn3" value="tierlist">TIER 3</button>
  <div class="dropdown-content">
  <button class="btn2" value="tierlist" onclick="filterSelection('-t2')">TIER 3</button><br>
  <button class="btn2" value="tier2list" onclick="filterSelection('-t3')">TIER 2 ONLY</button>
  </div>
</div>      
    </div>
  </div>
  <center>

    <div id="flair-choice" style="background-image: url('https://fftierlist.github.io/icons/tablebackground.png');   background-repeat: no-repeat;
  background-size: 330px 961px!important;">
		
		       <div >
        <div id="flair-selection-name" style="color:white; top:9px; position: relative;">Hero Name</div>
		  <div id="flair-selection-uniname" style="color:#9F9F9F; font-size: 13px;top:9px; position: relative;">Uniform Name</div>
        </div>
    
		
		
<div class="row" id="Combat"> 
<div class="column" id="S+">
	<!---Captain America T3---><div class="flair flair-choice flair-captainamerica-t3 flair-tierlist flair-captainamerica-t3 Captain America [Infinity War] #Combat show attributes type" data-name="Captain America [Infinity War] #Combat " data-id="captainamerica-t3" onclick="flair.selectChoice(&quot;captainamerica-t3&quot;,&quot;captainamerica-t3 tierlist captainamerica-t3&quot;)"></div>
	<!---Mister Fantastic T3---><div class="flair flair-choice flair-misterfantastic-t3 flair-tierlist flair-misterfantastic-t3 Mister Fantastic [] #Combat #Leader show attributes type" data-name="Mister Fantastic [] #Combat #Leader " data-id="misterfantastic-t3" onclick="flair.selectChoice(&quot;misterfantastic-t3&quot;,&quot;misterfantastic-t3 tierlist misterfantastic-t3&quot;)"></div>
	<!---Black Panther T3---><div class="flair flair-choice flair-blackpanther-t3 flair-tierlist flair-blackpanther-t3 Black Panther [Black Panther] #Combat show attributes type" data-name="Black Panther [Black Panther] #Combat " data-id="blackpanther-t3" onclick="flair.selectChoice(&quot;blackpanther-t3&quot;,&quot;blackpanther-t3 tierlist blackpanther-t3&quot;)"></div>
</div>
<div class="column" id="S">	  		  		  
    <!---Minn-Erva---><div class="flair flair-choice flair-minnerva flair-tierlist flair-minnerva Minn-Erva [Captain Marvel] #Combat show attributes type" data-name="Minn-Erva [Captain Marvel] #Combat " data-id="minnerva" onclick="flair.selectChoice(&quot;minnerva&quot;,&quot;minnerva tierlist minnerva&quot;)"></div>	
	<!---Wolverine---><div class="flair flair-choice flair-wolverine flair-tierlist flair-wolverine Wolverine [Age of Apocalypse] #Combat show attributes type" data-name="Wolverine [Age of Apocalypse] #Combat " data-id="wolverine" onclick="flair.selectChoice(&quot;wolverine&quot;,&quot;wolverine tierlist wolverine&quot;)"></div>	{wolverine}
</div>	
<div class="column" id="S-">	  	  
    <!---Hulk---><div class="flair flair-choice flair-hulk flair-tierlist flair-hulk Hulk [Ragnarok] #Combat show attributes type" data-name="Hulk [Ragnarok] #Combat " data-id="hulk" onclick="flair.selectChoice(&quot;hulk&quot;,&quot;hulk tierlist hulk&quot;)"></div>
	<!---Agent Venom---><div class="flair flair-choice flair-agentvenom flair-tierlist flair-agentvenom Agent Venom [Agent Anti-Venom] #Combat show attributes type" data-name="Agent Venom [Agent Anti-Venom] #Combat " data-id="agentvenom" onclick="flair.selectChoice(&quot;agentvenom&quot;,&quot;agentvenom tierlist agentvenom&quot;)"></div>	
</div>	
<div class="column" id="A+">	  
	<!---Colossus--->
	<!---Hulkbuster 2.0--->
	<!---Apocalypse--->
	<!---Erik Killmonger--->
	<!---Thing--->
 </div>
<div class="column" id="A">	  
	<!---Crescent--->
	<!---She-Hulk--->
	<!---Punisher--->
	<!---Carnage--->
	<!---Valkyrie--->
 </div>	
<div class="column" id="A-">	  
	<!---Beast--->
	<!---Titania--->
	<!---Iron Fist--->
	<!---Venom--->
	<!---Skurge--->
</div>	
<div class="column" id="B+">	  
	<!---Goliath--->
	<!---Red Hulk--->
	<!---Sandman--->
</div>	
<div class="column" id="B">	  		  
	<!---Groot--->
	<!---America Chavez--->
	<!---Moon Knight--->
	<!---Rhino--->
</div>	
<div class="column" id="B-">	  
	<!---Warwolf--->
	<!---Amadeus Cho--->
	<!---White Tiger--->
	<!---Sif--->
	<!---Luke Cage--->
</div>	
<div class="column" id="C+">	  
	<!---Doctor Octopus--->
	<!---Crossbones--->
	<!---Lizard--->
	<!---Volstagg--->
</div>	
<div class="column" id="C">	  
	<!---Ulik--->
	<!---Kingpin--->
</div>	
<div class="column" id="C-">	  
	<!---Gorgon--->
	<!---Jessica Jones--->
	<!---Nebula--->
</div>	
<div class="column" id="D+">	  
	<!---Absorbing Man--->
	<!---Bullseye--->
	<!---Shang Chi--->
</div>	
<div class="column" id="D">	  
	<!---Hogun--->
	<!---Blade--->
	<!---Drax--->
		<BR><BR><BR>
 </div>	
 </div>	
				  <div class="row" id="Blast"> 
 <div class="column" id="S+">
	 <div class="flair flair-choice flair-ancientone flair-tierlist flair-ancientone Ancient One [Doctor Strange] #Blast #Support #Leader show attributes type" data-name="Ancient One [Doctor Strange] #Blast #Support #Leader " data-id="ancientone" onclick="flair.selectChoice(&quot;ancientone&quot;,&quot;ancientone tierlist ancientone&quot;)"></div>
 </div>
 <div class="column" id="S">	  
			  
			  
    <div class="flair flair-choice flair-ancientone flair-tierlist flair-ancientone Ancient One [Doctor Strange] #Blast #Support #Leader show attributes type" data-name="Ancient One [Doctor Strange] #Blast #Support #Leader " data-id="ancientone" onclick="flair.selectChoice(&quot;ancientone&quot;,&quot;ancientone tierlist ancientone&quot;)"></div>
		
		
 </div>	
<div class="column" id="S-">	  
			  
			  
    <div class="flair flair-choice flair-ancientone flair-tierlist flair-ancientone Ancient One [Doctor Strange] #Blast #Support #Leader show attributes type" data-name="Ancient One [Doctor Strange] #Blast #Support #Leader " data-id="ancientone" onclick="flair.selectChoice(&quot;ancientone&quot;,&quot;ancientone tierlist ancientone&quot;)"></div>	
		
		
 </div>	
<div class="column" id="A+">	  
			  
			  
    <div class="flair flair-choice flair-ancientone flair-tierlist flair-ancientone Ancient One [Doctor Strange] #Blast #Support #Leader show attributes type" data-name="Ancient One [Doctor Strange] #Blast #Support #Leader " data-id="ancientone" onclick="flair.selectChoice(&quot;ancientone&quot;,&quot;ancientone tierlist ancientone&quot;)"></div>
		
		
 </div>						  		
 </div>
	
		
		
		
		
	 </div>
  </center>
</div>
<div class="wrapper no-style no-margin "> <br>
  <center>
    <p style="font-size:9pt; color: #495672 "> Inspired by works of <a style="color: #586788" id="css-link" href="https://www.reddit.com/r/pokemon/ "> /r/pokemon </a> </p>
    <p style="font-size:9pt; color: #495672 "> Flair assign script courtesy of <a style="color: #586788" id="css-link1" href="https://github.com/gavin19/reddit-flair-bot"> /u/gavin19 </a> </p>
  </center>
</div>
</body>
</html>

<?php
echo "<html>\n";
echo "<head></head>\n";
echo "<body>\n";
echo "This is HTML code\n";
echo "</body>\n";
// some PHP code here …
echo "</html>\n";
echo "\n";
?>
	
<script>
// Get the container element
var btnContainer = document.getElementById("ButtonClass");
// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("btn1");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

<script>
// Get the container element
var btnContainer = document.getElementById("ButtonClass");
// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("btn1");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
var current = document.getElementsByClassName("active");
document.getElementById('filter-selection-name').innerHTML = "Filtered by: " + current[0].title;
  });
}
</script>
	

