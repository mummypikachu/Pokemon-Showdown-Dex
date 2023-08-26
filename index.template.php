﻿<!DOCTYPE html>
<!--
           .............
       ,...................
     ,..................========
    ....~=##############=======+
   ...##################=======.
  ..=######+...,    +##=======,..
  ..=###### ., .....  +=====+,....
     ###########~,..  ======
  .....##############~=====+....., pokemonshowdown.com
  ..........###########====......
    ............#######,==......
  =###.,........+#####+ .......
  ####################~......,
  #################+======,
     ++++++++++++ =======+

Viewing source? We're open source! Check us out on GitHub!
https://github.com/Zarel/Pokemon-Showdown
https://github.com/Zarel/Pokemon-Showdown-Client (you are here)

Also visit us in the Dev chatroom:
https://psim.us/dev

-->
<meta charset="UTF-8" />
<meta id="viewport" name="viewport" content="width=device-width" />
<title>Showdown!</title>
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<link rel="shortcut icon" href="//play.pokemonshowdown.com/favicon.ico" id="dynamic-favicon" />
<link rel="icon" sizes="128x128" href="//play.pokemonshowdown.com/favicon-128.png" />
<link rel="stylesheet" href="//play.pokemonshowdown.com/style/battle.css?" />
<link rel="stylesheet" href="//play.pokemonshowdown.com/style/client.css?" />
<link rel="stylesheet" href="//play.pokemonshowdown.com/style/sim-types.css?" />
<link rel="stylesheet" href="//play.pokemonshowdown.com/style/utilichart.css?" />
<link rel="stylesheet" href="//play.pokemonshowdown.com/style/font-awesome.css?" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<link rel="manifest" href="/manifest.json" />
<!--[if lte IE 8]><script>document.location.replace('http://pokemonshowdown.com/autodownload/win');</script><![endif]-->

<!-- head custom -->

<div id="header" class="header">
	<img class="logo" src="//play.pokemonshowdown.com/pokemonshowdownbeta.png" srcset="//play.pokemonshowdown.com/pokemonshowdownbeta@2x.png 2x" alt="Pok&eacute;mon Showdown! (beta)" width="146" height="44" /><div class="maintabbarbottom"></div>
</div>
<div class="ps-room scrollable" id="mainmenu"><div class="mainmenuwrapper">
	<div class="leftmenu">
		<div class="activitymenu">
			<div class="pmbox">
				<div class="pm-window news-embed" data-newsid="<!-- newsid -->">
					<h3><button class="closebutton" tabindex="-1"><i class="fa fa-times-circle"></i></button><button class="minimizebutton" tabindex="-1"><i class="fa fa-minus-circle"></i></button>News</h3>
					<div class="pm-log" style="max-height:none">
						<!-- news -->
					</div>
				</div>
			</div>
		</div>
		<div class="mainmenu">
			<div id="loading-message" class="mainmessage">Initializing... <noscript>FAILED<br /><br />Pok&eacute;mon Showdown requires JavaScript.</noscript></div>
		</div>
	</div>
	<div class="rightmenu">
	</div>
	<div class="mainmenufooter">
		<div class="bgcredit"></div>
		<small><a href="//dex.pokemonshowdown.com/" target="_blank">Pok&eacute;dex</a> | <a href="//replay.pokemonshowdown.com/" target="_blank">Replays</a> | <a href="//pokemonshowdown.com/rules" target="_blank">Rules</a> | <a href="//pokemonshowdown.com/credits" target="_blank">Credits</a> | <a href="http://smogon.com/forums/" target="_blank">Forum</a></small>
	</div>
</div></div>
<script>
	var LM = document.getElementById('loading-message');
	LM.innerHTML += ' DONE<br />Loading libraries...';
</script>
<script nomodule src="//play.pokemonshowdown.com/js/lib/ps-polyfill.js"></script>
<script src="//play.pokemonshowdown.com/config/config.js?"></script>
<script src="//play.pokemonshowdown.com/js/lib/jquery-2.1.4.min.js"></script>
<script src="//play.pokemonshowdown.com/js/lib/jquery-cookie.js"></script>
<script src="//play.pokemonshowdown.com/js/lib/autoresize.jquery.min.js?"></script>
<script src="//play.pokemonshowdown.com/js/battle-sound.js?"></script>
<script src="//play.pokemonshowdown.com/js/lib/html-css-sanitizer-minified.js?"></script>
<script src="//play.pokemonshowdown.com/js/lib/lodash.core.js?"></script>
<script src="//play.pokemonshowdown.com/js/lib/backbone.js?"></script>
<script src="//play.pokemonshowdown.com/js/lib/d3.v3.min.js"></script>

<script>
	LM.innerHTML += ' DONE<br />Loading data...';
</script>

<script src="//play.pokemonshowdown.com/js/battledata.js?"></script>
<script src="//play.pokemonshowdown.com/js/storage.js?"></script>
<script src="//play.pokemonshowdown.com/data/pokedex-mini.js?"></script>
<script src="//play.pokemonshowdown.com/data/typechart.js?"></script>
<script src="//play.pokemonshowdown.com/js/battle.js?"></script>
<script src="//play.pokemonshowdown.com/js/lib/sockjs-1.4.0-nwjsfix.min.js"></script>
<script src="//play.pokemonshowdown.com/js/lib/color-thief.min.js"></script>

<script>
	LM.innerHTML += ' DONE<br />Loading client...';
</script>

<script src="//play.pokemonshowdown.com/js/client.js?"></script>
<script src="//play.pokemonshowdown.com/js/client-topbar.js?"></script>
<script src="//play.pokemonshowdown.com/js/client-mainmenu.js?"></script>
<script src="//play.pokemonshowdown.com/js/client-teambuilder.js?"></script>
<script src="//play.pokemonshowdown.com/js/client-ladder.js?"></script>
<script src="//play.pokemonshowdown.com/js/client-chat.js?"></script>
<script src="//play.pokemonshowdown.com/js/client-chat-tournament.js?"></script>
<script src="//play.pokemonshowdown.com/js/battle-tooltips.js?"></script>
<script src="//play.pokemonshowdown.com/js/client-battle.js?"></script>
<script src="//play.pokemonshowdown.com/js/client-rooms.js?"></script>
<script src="//play.pokemonshowdown.com/data/graphics.js?"></script>

<script>
	var app = new App();
</script>

<script src="//play.pokemonshowdown.com/data/pokedex.js?"></script>
<script src="//play.pokemonshowdown.com/data/moves.js?"></script>
<script src="//play.pokemonshowdown.com/data/items.js?"></script>
<script src="//play.pokemonshowdown.com/data/abilities.js?"></script>

<script src="//play.pokemonshowdown.com/data/search-index.js?"></script>
<script src="//play.pokemonshowdown.com/data/teambuilder-tables.js?"></script>
<script src="//play.pokemonshowdown.com/js/battle-dex-search.js?"></script>
<script src="//play.pokemonshowdown.com/js/search.js?"></script>

<script src="//play.pokemonshowdown.com/data/aliases.js?" async="async"></script>
