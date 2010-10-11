<ul id="gallery" class="clearfix">
<?php foreach ($projects as $project) : ?>
    <li><a href="<?php echo Route::get('project')->uri(array('action' => 'project','slug' => $project->slug)); ?>" title="<?php echo $project->name ?>">
    <img src="<?php echo Kohana::config('default.projects_path') ?><?php echo $project->logo ?>" alt="<?php echo $project->name ?>" /><br />
    <p><?php echo $project->name ?></p>
    </a>
    </li>
<?php endforeach; ?>
</ul>