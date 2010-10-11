<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Gabriel Slama - Développeur web &amp; iPhone - <?php echo $title?></title>
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.2.0/build/cssreset/reset-min.css">
<link href="/css/style.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="image/png" href="css/favicon.png" />
</head>

<body>
<div id="container">
    <div id="header">
        <a href="/" title="Retour à l'accueil">
        <h1>Gabriel Slama</h1>
        <p id="baseline">developpeur web &amp; iPhone</p>
        </a>
    </div>
    
    <div class="clearfix">
        <ul id="menu">
            <li><a href="/" title="Accueil">Accueil</a></li>
            <li><a href="<?php echo Route::get('projects')->uri() ?>" title="Formation">Projets</a></li>
            <li><a href="<?php echo Route::get('studies')->uri() ?>" title="Formation">Formation</a></li>
            <li><a href="<?php echo Route::get('experiences')->uri() ?>" title="Experiences">Experiences</a></li>
        </ul>

        <div id="content">
            <?php echo $content ?>
        </div>
    </div>
</div>
</body>
</html>