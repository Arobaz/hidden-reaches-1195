<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
 <meta name="language" content="de" />
 <meta name="author" content="Arobaz team" />
 <title>Arobaz-Network - Réseau de discussions instannées</title>
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
 <!-- jquery n'est pas a jour -->
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
 <script src="playerbar/slider/fd-slider.js" type="text/javascript"></script>
 <link href="playerbar/slider/fd-slider.css" rel="stylesheet" type="text/css" />
 <style type="text/css">
	html { height: 100%; overflow: hidden; }
	body { height:100%;	margin:0;	padding:0; background-color:#999;	}
 </style>
</head>
<body>

 <div id="lightIRC" style="height:100%; text-align:center;">
  <p><a href="https://www.adobe.com/go/getflashplayer"><img src="https://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
 </div>

<body>
 <div id="lightIRC" style="height:100%; text-align:center;">
  <p><a href="https://www.adobe.com/go/getflashplayer"><img src="https://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
 </div>
  <script type="text/javascript">
var params = {};
params.host                         = "irc.arobaz.eu";
params.port                         = 6667;
params.password                     = "laissemoimeconnecterstp";
params.accessKey                    = "O6068-7D5EE-Y9B39-J8776-707CC";
params.policyPort                   = 843;
params.language                     = "fr";
params.styleURL                     = "css/styleappfb.css";
params.charset                   = "UTF-8";

/* Nick to be used. A % character will be replaced by a random number */
params.nick               = "<?php echo htmlspecialchars($_POST['pseudo']); ?>"; //je suis pas certain que  htmlspecialchars soit la binne fonction et addslashes sert a rien avec
params.realname               = "Facebook utilisateur";
params.ident               = "Fbapp";
/* Channel to be joined after connecting. Multiple channels can be added like this: #lightIRC,#test,#help */
params.autojoin                     = "#@,<?php echo $salon ?>";
/* Commands to be executed after connecting. E.g.: /mode %nick% +x */
params.perform                      = "/ns identify <?php echo $pass ?>";

/* Whether the server window (and button) should be shown */
params.showServerWindow             = false;

/* Show a popup to enter a nickname */
params.showNickSelection            = true; // Pour l'instant mon formulaire ne fonctionne pas en https ca passe pas sur fb
/* Adds a password field to the nick selection box */
params.showIdentifySelection        = true;

params.showJoinPartMessages = false;
params.useUserListIcons = true;

/* Show button to register a nickname */
params.showRegisterNicknameButton   = true;
/* Show button to register a channel */
params.showRegisterChannelButton    = true;

/* Opens new queries in background when set to true */
params.showNewQueriesInBackground   = false;

/* Position of the navigation container (where channel and query buttons appear). Valid values: left, right, top, bottom */
params.navigationPosition           = "bottom";
params.webcam			    = true;
params.rtmp                 = "92.222.172.249";
params.quitMessage                  = "Bon t'chat sur Arobaz Network!";
/* See more parameters at https://redmine.lightirc.com/projects/lightirc/wiki/Customization_parameters */




/* Use this method to send a command to lightIRC with JavaScript */
function sendCommand(command) {
  swfobject.getObjectById('lightIRC').sendCommand(command);
}

/* This method gets called if you click on a nick in the chat area */
function onChatAreaClick(nick) {
  //alert("onChatAreaClick: "+nick);
}

/* This method gets called if you use the parameter contextMenuExternalEvent */
function onContextMenuSelect(type, nick) {
  alert("onContextMenuSelect: "+nick+" for type "+type);
}

/* This method gets called if you use the parameter loopServerCommands */
function onServerCommand(command) {
  return command;
}

/* This loop escapes % signs in parameters. You should not change it */
for(var key in params) {
  params[key] = params[key].toString().replace(/%/g, "%25");
}

	swfobject.embedSWF("lightIRC.swf", "lightIRC", "100%", "100%", "10.0.0", "expressInstall.swf", params);
 </script>
</body>
</html>