<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Application Communication - Arobaz-Network!</title>
	<!-- Metas -->
	<meta name="description" content="Communication chat gratuit webcam " />
	<meta name="keywords" content="chat gratuit, tchat webcam sans inscription" />
	<meta name="robots" content="index,follow">
	<meta name="Revisit-After" content="1 Days">
	<meta name="author" content="arobaz.eu">
	<meta content="noarchive" name="robots">
	<meta http-equiv="content-language" content="all">
<style>

body{
	background: #fff;
	background-repeat: repeat-x, repeat;
	font-family: calibri;
	width: 520px;
	margin: auto;
	font-size: 12px;
}

a {
	color: #fff;
}
/* FIN PROPRIETES DE BASE */




.connexionZone{
	background-color: #3b5998;
	margin-top: 40px;
	padding: 20px;
	border-radius: 10px;
	margin-bottom: 20px;
	line-height: 10px;
}

input[type=text], input[type=password]{
	border: 1px solid #394358;
	height: 20px;
	line-height: 20px;
	padding: 5px;
	width: 250px;
	border-radius: 3px;
	display: block;
}

input[type=submit].submit{
	background: #95a4c1; /* Old browsers */
	background: -moz-linear-gradient(top,  #95a4c1 0%, #637bad 6%, #5872a7 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#95a4c1), color-stop(6%,#637bad), color-stop(100%,#5872a7)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #95a4c1 0%,#637bad 6%,#5872a7 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #95a4c1 0%,#637bad 6%,#5872a7 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #95a4c1 0%,#637bad 6%,#5872a7 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #95a4c1 0%,#637bad 6%,#5872a7 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#95a4c1', endColorstr='#5872a7',GradientType=0 ); /* IE6-9 */
	border-radius: 3px;
	width: 250px;
	height: 30px;
	line-height: 10px;
	text-align: center;
	font-weight: bold;
	text-shadow: 0px -1px #1a356e;
	color: #fff;
	border: 1px solid #1a356e;
	cursor: pointer;
	font-size: 14px;
}

input[type=button]{
	background: rgb(255,255,255); /* Old browsers */
	background: -moz-linear-gradient(top,  rgba(255,255,255,1) 0%, rgba(249,249,249,1) 5%, rgba(234,234,234,1) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,1)), color-stop(5%,rgba(249,249,249,1)), color-stop(100%,rgba(234,234,234,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(249,249,249,1) 5%,rgba(234,234,234,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(249,249,249,1) 5%,rgba(234,234,234,1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(249,249,249,1) 5%,rgba(234,234,234,1) 100%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(255,255,255,1) 0%,rgba(249,249,249,1) 5%,rgba(234,234,234,1) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#eaeaea',GradientType=0 ); /* IE6-9 */
	border: 1px solid #c9c9c9;
	border-radius: 3px;
	width: 250px;
	height: 30px;
	line-height: 10px;
	text-align: center;
	font-weight: bold;
	text-shadow: 0px -1px #fff;
	color: #000;
	cursor: pointer;
	font-size: 14px;
}
.label_salon{
font-weight: bold;
font-size: 16px;
color: #fff;
}
.form-group{
margin-top: 20px;
color:#fff;
}
</style>
	<!-- Importation des fichiers CSS 
	<link rel="stylesheet" type="text/css" href="css/styleappfb.css" media="screen">-->
</head>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1&appId=1401813666699328";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script src="https://connect.facebook.net/en_US/all.js"></script>
<script type="text/javascript">
  FB.init({
    appId  : '1401813666699328
',
    status : true,
    cookie : true,
    oauth: true
  });
 
  function sendRequestViaMultiFriendSelector() {
    FB.ui({method: 'apprequests',
      message: 'Invitation à nous rejoindre'
    }, requestCallback);
  }
 
  function requestCallback(response) {
    // Ici vous pouvez déclencher des actions en
    // fonction de la réponse
  }
</script>
<body>
	
  <div class="connexionZone">
	<form action="https://hidden-reaches-1195.herokuapp.com/chat" method="POST" align="center">
		<center>
		<p><input type="text" name="pseudo" placeholder="Entrez un pseudo"></p>	
		<!--p><input type="password" name="pass" placeholder="Mot de passe*"></p-->
		<div class="form-group">
		<div class="radio-inline">
		  <label>
		    <input type="radio" name="gender" id="optionsRadios1" value="male" checked>
		    Homme
		  </label>
		  <label>
		    <input type="radio" name="gender" id="optionsRadios1" value="women" >
		    Femme
		  </label>
		  <label>
		    <input type="radio" name="gender" id="optionsRadios1" value="none" >
		    Fantôme
		  </label>
		</div>
	  </div>

	  <div class="form-group">
	    <label for="ville" class="label_salon col-lg-2 control-label">Ville</label>
		<div style="height:20px;width:1px"></div>
	    <div class="col-lg-8">
	      <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville">
	    </div>
	  </div>	
	  <div class="form-group">
<label for="ville" class="label_salon  col-lg-2 control-label">#Salon</label>
<div style="height:20px;width:1px"></div>	  
		<input type="text" name="salon" placeholder="Ton salon" value="#@">
		</div>	
		<p><input type="submit" class="submit" name="submit" value="Go!"></p>
  </center>
	</form>
<div class="fb-like" style="text-align:center;color: #222;" data-href="https://www.facebook.com/ArobazNetwork?fref=ts" data-send="false" data-width="450" data-show-faces="true" data-colorscheme="dark"></div>
</div>
<script src='https://connect.facebook.net/fr_FR/all.js'></script>
    <p align="center">

    <input type="submit" class="submit" onclick="sendRequestViaMultiFriendSelector(); return false;" value="Invitez vos amis" />
    <input type="submit" class="submit" onclick='postToFeed(); return false;' value="Partager" />
    <br><br>
	<input type="submit" class="submit" onclick="window.open('https://arobaz.eu/faq.php');" value="Lire la FAQ" />
    <input type="submit" class="submit" onclick="window.open('https://www.facebook.com/dialog/pagetab?app_id=1401813666699328
&next=https://apps.facebook.com/arobaznetwork');" value="Installer sur sa page" />
    </p>
    <p id='msg'></p>

    <script> 
      FB.init({appId: "1401813666699328", status: true, cookie: true});

      function postToFeed() {

        // calling the API ...
        var obj = {
          method: 'feed',
          link: 'https://www.facebook.com/arobaznetwork/app_1401813666699328',
          picture: 'https://arobaz.eu/application/fbapp/images/arobase.jpg',
          name: 'Application arobaznetwork',
          caption: 'Application de discussions instantannées + webcam et micro',
          description: 'La première application de discussions instantannées avec webcam disponible directement sur facebook sans inscription !'
        };

        function callback(response) {
          document.getElementById('msg').innerHTML = "Post ID: " + response['post_id'];
        }

        FB.ui(obj, callback);
      }
    
    </script>

	<div class="clear"></div>
	
</body>
</html>