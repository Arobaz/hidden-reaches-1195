<?php
$age = ''.$_POST['age'].'';
$err = array();

if (empty($_POST['pseudo'])) {
	$err['pseudo'] = true;
	$warn = 1;
} else {//il est pas censer lire le fichier index2.php normalement si ? je me demande si c'est pas une copie de l'index.php
	$pseudo = htmlspecialchars($_POST['pseudo'], ENT_QUOTES);
}

}
$channels = "#@";
if (empty($_POST['salon'])) {
	$err['salon'] = true;
} else if (preg_match('#^(\#([A-Za-z0-9@_-])+)(,(\#([A-Za-z0-9@_-])+))*$#', $channels)) {
	$channels = htmlspecialchars($_POST['salon'], ENT_QUOTES);
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
		<a href="https://www.adobe.com/go/getflashplayer">
			<img src="https://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
		</a>
	</p>
</div>

<!-- Scripts -->

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
<script type="text/javascript" src="config.js"></script>
<!-- si le fichier index2.php est utiliser app.js n'est pas utiliser -->
<?php
echo 'teeeeeeeest2';
if ($_POST['submit']) {
echo 'teeeeeeeest1';
?>
<script language="JavaScript" type="text/javascript">
	(function () {
		params.showNickSelection = false;
		<?php
		if (isset($warn)) {
		echo 'params.nick = "Anonyme_%";';
		} else {
		echo 'params.nick = "'.$pseudo.'";';
		}
		params.autojoin = <?php echo "\"$channels\""; ?>;
		params.rememberNickname = false;
		swfobject.embedSWF("lightIRC.swf", "lightIRC", "100%", "100%", "10.0.0", "expressInstall.swf", params);// "params"?
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
