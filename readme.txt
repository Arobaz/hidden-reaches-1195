Welcome to lightIRC 1.2.2! 
 _ _       _     _   _____ _____   _____     __    ____    ____  
| (_)     | |   | | |_   _|  __ \ / ____|   /_ |  |__  |  |__  | 
| |_  __ _| |__ | |_  | | | |__) | |         | |   __| |   __| |
| | |/ _` | '_ \| __| | | |  _  /| |         | |  |  __|  |  __|
| | | (_| | | | | |_ _| |_| | \ \| |____     | |_ | |__   | |__
|_|_|\__, |_| |_|\__|_____|_|  \_\\_____|    |_(_)|____(_)|____|
      __/ |
     |___/

lightIRC has been developed by Valentin Manthei (contact@valentin-manthei.de)
www.lightIRC.com



Important information for upgrades from lightIRC 1.1 or earlier:
- Replace all old language files in the language folder and make sure that you upload the new lib folder!
- lightIRC 1.2 has a new way of handling licenses. That means you have to obtain a new access key (For free), which will provide more possibilities and security for you. If you purchased lightIRC, please write a mail to contact@valentin-manthei.de
- The webcam module does not need Red5 anymore. All the streaming data flows directly between the users and some parameters changed. For more information, read www.lightirc.com/webcam.html


Changes in lightIRC 1.2.2 (09. December 2011):
- Changes in default CSS files to configure the webcam popup
- Fix: Application didn't load properly when using different languages
- Fix: Text area crashed when receiving long messages
- Fix: webcamChannelBlacklist/webcamChannelWhitelist bug

Changes in lightIRC 1.2.1 (29. November 2011):
- Flex 4 runtime shared libraries included in package
- Show ban removals in channel when channel central is open
- Fix: webcamPrivateOnly/webcamPublicOnly bug

Changes in lightIRC 1.2 (27. November 2011):
- Added Finnish, Croatian, Indonesian and Portuguese translations
- %prefix% in userListCustomIcons will be replaced by q/a/o/h/v or an empty string.
- setTextInputContent JavaScript method
- Rejoin button in kick poup
- Removed Red5 webcam module, added peer to peer webcam streaming
- Parameters to control webcam behavior: webcamShowOnStartup, webcamPrivateOnly, webcamPublicOnly, webcamVideoOnly, webcamAudioOnly, webcamChannelBlacklist, webcamChannelWhitelist
- Webcam icon appears on top of the query button if the user is broadcasting
- To open a channel from the channel list, a double click is needed instead of a single click
- Removed translation feature because Google does not offer the translation API for free anymore
- Startup improved, flickering when loading styles removed
- Fix: Socket read method optimized
- Fix: Set focus to text input after selecting an emoticon
- Fix: Message history optimized (up and down cursor buttons in the text input)
- Fix: IRCX messages partially supported
- Fix: Button overflow (channels, queries) fixed

Changes in lightIRC 1.1 (12. March 2011):
- Added Hungarian, Czech, Polish and Slovenian translations
- Server password is not being displayed in plain text anymore
- Parameter charset makes you able to define a custom encoding (default: utf-8)
- Parameter iconPath allows to use custom user list icons instead of having @+ prefixes
- Parameter userListCustomIcons allows you to include own icons for nicknames
- Parameter contextMenuExternalEvent is now able to take more than one item
- Various predefined ban masks are now available in the ban popup
- Away messages are displayed in the active chat window
- Added /back alias to unset an away state
- /clear command added
- Emoticons are not shown in the server window anymore
- Channel header supports channel and URL links
- Background image support for CSS stylesheets
- Ignores are being remembered
- A click on a nick in the chat area calls a JavaScript method
- Identify message default value changed to "NickServ:This nickname is registered"
- Support for mIRC background colors
- Scrolling for the emoticon popup when having many emoticons
- The parameters nickPrefix and nickPostfix define what should be shown around a nick in the chat area. Default: <nick>
- The parameter showNickPrefixes indicates whether a nick in the chat area is displayed like this: @nick or +nick (default: yes) 
- Last used nick is being stored when using rememberNickname
- Menu, translation, emoticons are small popus now
- Server input can be sent to JavaScript with parameter loopServerCommands
- Specific commands can be blocked from being entered from the user with parameter blockedCommands
- Fix: notices in query windows were not shown
- Fix: fontWeight CSS setting for links didn't work
- Fix: parameter nickAlternate didn't work properly
- Fix: ftp:// links were not supported
- Fix: the chat area scrollbar stopped scrolling down in some cases
- Fix: +vv mode change did only apply for the first nick
- Fix: < and > in emoticon codes were not supported 
- Fix: emoticons were shown horizontally flipped due to a bug in Flex 4.1
- Fix: Removed control key for nick completion as it caused problems when hitting CTRL+V in a query
- Fix: /memoserv or other commands starting with /me were interpreted as actions

This package contains the following files:
- css/ (Contains various CSS styles that can be used to change lightIRCs style. Parameter to change the style: styleURL)
- emoticons/ (Contains emoticons to be used within lightIRC. Parameters to change emoticons: emoticonPath, emoticonList)
- icons/ (Contains icons which are being displayed in the user list if you use useUserListIcons = true)
- language/ (Contains translations for the user interface)
- lib/ (Runtime shared libraries for the Adobe Flex 4 SDK)
- lightIRC.swf (The lightIRC application itself)
- index.html (The home page to start lightIRC)
- config.js (lightIRC configuration parameters)
- expressInstall.swf (Used to install Flash Player automatically if a user does not have the plugin installed)
- readme.txt (This file)

Setup:
- Open config.js with a text editor and change/add parameters if necessary. Read https://redmine.lightirc.com/projects/lightirc/wiki/Customization_parameters for a list of all parameters.
- Upload all files and folders to your webspace
- Navigate your browser to index.html

Important notice:
If you should encounter a "security error" when starting lightIRC, please read https://redmine.lightirc.com/projects/lightirc/wiki/Flash_Policy_setup_instructions

More information: https://wiki.lightirc.com or irc.lightirc.com (#lightIRC)
Please use the bug tracker to submit feature requests or bugs: https://redmine.lightirc.com/projects/lightirc

Best regards,
Valentin