<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
 <meta name="language" content="de" />
 <meta name="author" content="Valentin Manthei - lightIRC.com" />
 <title>Oleoo.com :: tChat</title>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
 <?php
 function clean($string) {
   $string = str_replace('', '-', $string); // Replaces all spaces with hyphens.
   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}
 if (empty($_GET['pseudo'])) $pseudo = 'Pseudo_%';
 else {
	$pseudo = clean($_GET['pseudo']);
$connected = "1";
}

?>
 <script type="text/javascript">
/*
 * lightIRC configuration
 * www.lightIRC.com
 *
 * You can add or change these parameters to customize lightIRC.
 * Please see the full parameters list at http://redmine.lightirc.com/projects/lightirc/wiki/Customization_parameters
 *
 */

var params = {};

/* Change these parameters */
params.host                         = "irc.arobaz.eu";
params.accessKey                    = "O6068-7D5EE-Y9B39-J8776-707CC";
params.port                         = 6667;
params.policyPort                   = 843;

/* Language for the user interface. Currently available translations: ar, bd, bg, br, cz, da, de, el, en, es, et, fi, fr, hu, hr, id, it, ja, lv, nl, no, pl, pt, ro, ru, sk, sl, sq, sr_cyr, sr_lat, sv, th, tr, uk */
params.language                     = "fr";
params.languagePath                 = "language/";
params.charset                      = "utf-8";
/* Personnalisation
*/

/* Nick to be used. A % character will be replaced by a random number */
params.nick          = '<?php echo $pseudo; ?>';
params.ident                        = "Applet";
params.rememberNickname             = false;
params.showUserListInformationPopup = true;
params.userListInformationPopupItems = "realname";
params.performContinousWhoRequests   = true;
<?php
if ($connected == 1)	
echo "params.showNickChangeButton = false;";
else
echo "params.showNickChangeButton = true;";
?>
params.nickidentifypopup = true;
params.identifyMessage              = "NickServ:Ce pseudo est enregistr�";


/* Relative or absolute URL to a lightIRC CSS file.
 * The use of styles only works when you upload lightIRC to your webspace.
 * Example: css/lightblue.css
 */
params.styleURL                     = "css/darkorange.css";

params.realname                     = "http://www.arobaz.eu";
/* Channel to be joined after connecting. Multiple channels can be added like this: #lightIRC,#test,#help */
params.autojoin                     = "#@,#oleoo";
/* Commands to be executed after connecting. E.g.: /mode %nick% +x */
params.perform                      = "";

/* Whether the server window (and button) should be shown */
params.showServerWindow             = false;

/* Show a popup to enter a nickname */
params.showNickSelection            = false;
/* Adds a password field to the nick selection box */
params.showIdentifySelection        = true;
params.identifyMessage              = "NickServ:Ce pseudo est enregistr�";
params.identifyCommand              = "/msg NickServ identify %pass%"
params.userListCustomFormatting = "realname=(^|\\W)([0-9]+\\s)?[mMHh](\\s|$):userListMan,realname=(^|\\W)([0-9]+\\s)?[fFWw](\\s|$):userListWoman,mode=v:channelListVoice,mode=h:channelListModo,mode=o:channelListOp,mode=a:channelListAdmin,mode=q:channelListOwner";
/*params.userListWidth = 80;
params.useUserListIcons = true;

params.userListCustomIcons = "http://www.oleoo.com/get_image.php?pseudo=%nick%";*/


/* Show button to register a nickname */
params.showRegisterNicknameButton   = true;
params.showJoinPartMessages        = false;
/* Show button to register a channel */
params.showRegisterChannelButton    = true;

/* Opens new queries in background when set to true */
params.showNewQueriesInBackground   = true;

/* Position of the navigation container (where channel and query buttons appear). Valid values: left, right, top, bottom */
params.navigationPosition           = "bottom";


/* See more parameters at http://redmine.lightirc.com/projects/lightirc/wiki/Customization_parameters */
params.useUserListIcons             = true;
params.webcam                       = true;
params.webcamPreviewBox             = true;
params.rtmp                         = "5.135.218.220";
params.quitMessage                  = "Bon t'chat sur Arobaz Network!";

/* Use this method to send a command to lightIRC with JavaScript */
function sendCommand(command) {
  swfobject.getObjectById('lightIRC').sendCommand(command);
}

/* Use this method to send a message to the active chatwindow */
function sendMessageToActiveWindow(message) {
  swfobject.getObjectById('lightIRC').sendMessageToActiveWindow(message);
}

/* Use this method to set a random text input content in the active window */
function setTextInputContent(content) {
  swfobject.getObjectById('lightIRC').setTextInputContent(content);
}

/* This method gets called if you click on a nick in the chat area */
function onChatAreaClick(nick, ident, realname, channel, host) {
  //alert("onChatAreaClick: "+nick);
}

/* This method gets called if you use the parameter contextMenuExternalEvent */
function onContextMenuSelect(type, nick, ident, realname, channel, host) {
  alert("onContextMenuSelect: "+nick+" for type "+type);
}

/* This method gets called if you use the parameter loopServerCommands */
function onServerCommand(command) {
  return command;
}

/* This method gets called if you use the parameter loopClientCommands */
function onClientCommand(command) {
  return command;
}

/* This event ensures that lightIRC sends the default quit message when the user closes the browser window */
window.onbeforeunload = function() {
  swfobject.getObjectById('lightIRC').sendQuit();
}

/* This loop escapes % signs in parameters. You should not change it */
for(var key in params) {
  params[key] = params[key].toString().replace(/%/g, "%25");
}


 </script>
 <style type="text/css">
	html { height: 100%; overflow: hidden; }
	body { height:100%;	margin:0;	padding:0; background-color:#999;	}
 </style>
</head>

<body>
 <div id="lightIRC" style="height:100%; text-align:center;">
  <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
 </div>
 
 <script type="text/javascript">
	swfobject.embedSWF("lightIRC.swf", "lightIRC", "100%", "100%", "10.0.0", "expressInstall.swf", params);
 </script>
</body>
</html>