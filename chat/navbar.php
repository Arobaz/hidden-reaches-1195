<div class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Arobaz Network</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li <?php class_active('index'); ?>><a href="index.php">Home</a></li>
        <li <?php class_active('news'); ?>><a href="news.php">News</a></li>
        <li <?php dropdown_class_active(); ?> class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Outils <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li <?php class_active('outils'); ?>><a href="outils.php">Outils</a></li>
            <li <?php class_active('ressources'); ?>><a href="ressources.php">Ressources</a></li>
          </ul>
        </li>
        <li <?php class_active('faq'); ?>><a href="faq.php">FAQ</a></li>
        <li <?php class_active('credits'); ?>><a href="credits.php">Credits</a></li>
		<li <?php class_active('contact'); ?>><a href="contact.php">Contact</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>