<?php echo Html::style('css/slideshow.css') ?>
<?php echo Html::script('http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js') ?>
<?php echo Html::script('js/slideshow.js') ?>

<div id="caroussel">
	<div id="caroussel-container">
        <?php foreach ($projects as $project) : ?>
		<div class="caroussel-element">
	        <a href="<?php echo Route::get('project')->uri(array('action' => 'project','slug' => $project->slug)); ?>" title="<?php echo $project->name ?>">
		        <img src="<?php echo Kohana::config('default.projects_path') . $project->slideshow_image ?>" alt="<?php echo $project->name ?>" />
		    </a>
			<div class="details">
				<dl>
					<dt>Employeur / Client</dt>
					<dd><?php echo $project->client ?></dd>
				
					<dt>Date de réalisation</dt>
					<dd><?php echo date('n-Y', strtotime($project->date)) ?></dd>
				
					<dt>Développement réalisé</dt>
					<dd>maintenance et évolution </dd>
				
					<dt>Lien</dt>
					<dd><a href="<?php echo $project->url ?>" title="<?php echo $project->client ?>"><?php echo $project->url ?></a></dd>
				</dl>
			</div>
		</div>
	    <?php endforeach; ?>
    </div>
</div>
<a href="<?php echo Route::get('projects')->uri() ?>" title="Formation">Voir tous mes projets</a>