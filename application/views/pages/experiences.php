<?php foreach ($experiences as $experience) : ?>
<div class="experience <?php empty($experience->logo) and print('freelance') ?> clearfix">
    <?php if (!empty($experience->logo)) : ?>
    <a title="<?php echo $experience->company ?>" class="logo" target="_blank" href="<?php echo $experience->url ?>">
        <img src="<?php echo Kohana::config('default.logos_path') ?><?php echo $experience->logo ?>" alt="<?php echo $experience->company ?>">
    </a>
    <?php endif; ?>
    
    <h3><?php echo $experience->name ?></h3>
    <h4>
    <?php if (!empty($experience->logo)) : ?>
        <a title="<?php echo $experience->company ?>" target="_blank" href="<?php echo $experience->url ?>">
        <?php echo $experience->company ?>
        </a>
    <?php else : ?>
        <?php echo $experience->company ?>
    <?php endif; ?>
    </h4>
    
    <p><?php echo date::formatDate($experience->start_date) ?> - 
    <?php if (empty($experience->end_date)) : ?>
        aujourd'hui
    <?php else : ?>
         <?php echo date::formatDate($experience->end_date) ?>
    <?php endif; ?></p>
    
    <?php if ($experience->skills->count_all() > 0) : ?>
        <?php echo View::factory('template/skills_list')->set('skills', $experience->skills->find_all()) ?>
    <?php endif; ?>
</div>
<?php endforeach; ?>


