<?php
$age = ''.$_POST['age'].'';
$err = array();

if (empty($_POST['pseudo'])) {
	$err['pseudo'] = true;
	$pseudo = 'Anonyme_%';
} else {
	$pseudo = htmlspecialchars($_POST['pseudo'], ENT_QUOTES);
}

if (empty($_POST['age'])) {
	$err['age'] = true;
}

if (empty($_POST['gender'])) {
	$err['gender'] = true;
	$gender = "Fantôme";
} else {
	switch ($_POST['gender']) {
		case 'male':
			$gender = "H";
			break;
		case 'women':
			$gender = "F";
			break;
		default:
			$gender = "Fantôme";
			break;
	}
}

if (empty($_POST['city'])) {
	$err['city'] = true;
} else {
	$city = htmlspecialchars($_POST['city'], ENT_QUOTES);
}

$channels = "#@";
if (empty($_POST['channels'])) {
	$err['channels'] = true;
} else if (preg_match('#^(\#([A-Za-z0-9@_-])+)(,(\#([A-Za-z0-9@_-])+))*$#', $channels)) {
	$channels = htmlspecialchars($_POST['channels'], ENT_QUOTES);
}

?><!DOCTYPE html>
<html>
	<head>
		<title>Arobaz Network t'chat!</title>
		<meta charset="utf-8">

		<style>
			html { height: 100%; overflow: hidden; }
			body { height:100%;	margin:0;	padding:0; background-color:#999;	}
		</style>
	</head>
	<body>

<div id="lightIRC" style="height:100%; text-align:center;">
	<p>
		<a href="http://www.adobe.com/go/getflashplayer">
			<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
		</a>
	</p>
</div>

<!-- Scripts -->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
<script type="text/javascript" src="config.js"></script>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
?>
<script language="JavaScript" type="text/javascript">
	(function () {
		params.showNickSelection = false;
		params.nick = <?php echo "\"$pseudo\""; ?>;
		params.realname = <?php echo "\"$age $gender $city\""; ?>;
		params.autojoin = <?php echo "\"$channels\""; ?>;
		params.rememberNickname = false;
		swfobject.embedSWF("lightIRC.swf", "lightIRC", "100%", "100%", "10.0.0", "expressInstall.swf", params);
	})();
</script>
<?php
} else {
?>
<script type="text/javascript">
// Code snipper for someone.
(function () {
        if (window.location.search.substr(0, 7) == "?radio=") {
                var ampIndex = window.location.search.indexOf("&", 7),
                    radioName = "";

                if (ampIndex != -1) {
                        radioName = window.location.search.substring(7, ampIndex);
                } else {
                        radioName = window.location.search.substring(7);
                }

                params.showNickSelection = true;
                params.autojoin = "#@,#" + radioName;
                params.nick = radioName + "%25";
                params.styleCSS = "css/blue.css";
        }

        swfobject.embedSWF("lightIRC.swf", "lightIRC", "100%", "100%", "10.0.0", "expressInstall.swf", params);
})();
</script>
<?php
}
?>

	</body>
</html> 
