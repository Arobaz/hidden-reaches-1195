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
params.host                         = "irc.discut-tchat.fr";
params.port                         = 6667;
params.password                     = "laissemoimeconnecterstp";
params.policyPort                   = 843;
params.accessKey                    = "O6068-7D5EE-Y9B39-J8776-707CC";

/* Language for the user interface. Currently available translations: ar, bd, bg, br, cz, da, de, el, en, es, et, fi, fr, hu, hr, id, it, ja, lv, nl, no, pl, pt, ro, ru, sk, sl, sq, sr_cyr, sr_lat, sv, th, tr, uk */
params.language                     = "fr";
params.languagePath                 = "language/";
params.charset                      = "utf-8";
/* Personnalisation
*/

/* Nick to be used. A % character will be replaced by a random number */
params.nickAlternate                = "Anonymous%"
params.ident                        = "Applet"
params.rememberNickname             = true;
params.showUserListInformationPopup = true;
params.userListInformationPopupItems = "realname";
params.performContinousWhoRequests   = true;
showNickChangeButton = false;
params.nick          = "Pseudo%";
params.nickidentifypopup = true;
params.identifyMessage              = "NickServ:Ce pseudo est enregistré";
params.showJoinPartMessages        = false;


/* Relative or absolute URL to a lightIRC CSS file.
 * The use of styles only works when you upload lightIRC to your webspace.
 * Example: css/lightblue.css
 */
params.styleURL                     = "css/blue.css";

params.realname                     = "http://www.arobaz.eu";
/* Channel to be joined after connecting. Multiple channels can be added like this: #lightIRC,#test,#help */
params.autojoin                     = "#@";
/* Commands to be executed after connecting. E.g.: /mode %nick% +x */
params.perform                      = "";

/* Whether the server window (and button) should be shown */
params.showServerWindow             = true;

/* Show a popup to enter a nickname */
params.showNickSelection            = false;
/* Adds a password field to the nick selection box */
params.showIdentifySelection        = false;
params.identifyMessage              = "NickServ:Ce pseudo est enregistré";
params.identifyCommand              = "/msg NickServ identify %pass%"
params.userListCustomFormatting = "realname=(^|\\W)([0-9]+\\s)?[mMHh](\\s|$):userListMan,realname=(^|\\W)([0-9]+\\s)?[fFWw](\\s|$):userListWoman,mode=v:channelListVoice,mode=h:channelListModo,mode=o:channelListOp,mode=a:channelListAdmin,mode=q:channelListOwner";

/* Show button to register a nickname */
params.showRegisterNicknameButton   = true;
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
