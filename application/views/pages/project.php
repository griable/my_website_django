<div id="project">
    <a id="back-link" href="<?php echo Route::get('projects')->uri(); ?>" title="Retour à la liste">Retour à la liste</a>
    
    <?php if (!empty($previous_project->id)) : ?>
    <a id="previous-link"  href="<?php echo Route::get('project')->uri(array('action' => 'project','slug' => $previous_project->slug)); ?>" title="Voir le projet <?php echo $previous_project->name ?>"><</a>
    <?php endif; ?>
    
    <?php if (!empty($next_project->slug)) : ?>
    <a id="next-link" href="<?php echo Route::get('project')->uri(array('action' => 'project','slug' => $next_project->slug)); ?>" title="Voir le projet <?php echo $next_project->name ?>">></a>
    <?php endif; ?>
    
    <img src="<?php echo Kohana::config('default.projects_path') . $project->slideshow_image ?>" alt="<?php echo $project->name ?>" /><br />
    <h2><?php echo $project->name ?></h2>
    
    <p><?php echo ucfirst(date::formatDate($project->date)) ?></p>
    
    <div><?php echo $project->shortdesc ?></div>
    
    <p><?php echo $project->client ?><br />
    <a href="<?php echo $project->url ?>" title="Voir le site" target="blank">Voir le site</a></p>
</div>