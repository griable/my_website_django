<?php echo Request::factory('module/slideshow')->execute() ?>

<div class="clearfix">
    <blockquote id="edito">
        <p>Je m'appelle <strong>Gabriel Slama</strong>, je suis un jeune <strong>développeur freelance</strong> de 25 ans basé à <strong>Paris</strong>.</p>
        
        <p>Je pratique régulièrement le <strong>HTML5<strong>, CSS3, Javascript (jQuery), le PHP (Symfony, CodeIgniter et Kohana)</strong> et dans une moindre mesure l'<strong>AS3</strong>.</p>
        
        <p>Je tends désormais à me spécialiser dans le développement d'<strong>application iPhone</strong> et <strong>iPad</strong> en <strong>Objective-C.</strong></p>
        
        <p>Ce site a pour but que de vous faire découvrir les <a href="<?php echo Route::get('projects')->uri() ?>" title="Consulter la galerie de projet">divers projets</a> que j'ai réalisé et auquels j'ai pu contribuer ainsi que mon <a href="<?php echo Route::get('studies')->uri() ?>" title="Consulter mon parcours scolaire">parcours scolaire</a> et <a href="<?php echo Route::get('experiences')->uri() ?>" title="Consulter mes experiences">quelques références</a>.</p>
    </blockquote>

    <?php echo Request::factory('module/twitter_feed')->execute() ?>
</div>