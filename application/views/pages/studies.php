<?php foreach ($studies as $study) : ?>
<div class="experience clearfix">
    <a title="<?php echo $study->place ?>" class="logo" target="_blank" href="<?php echo $study->url ?>"><img src="<?php echo Kohana::config('default.logos_path') ?><?php echo $study->logo ?>" alt="<?php echo $study->place ?>"></a>
    <h3><?php echo $study->name ?></h3>
    <h4><a title="<?php echo $study->place ?>" target="_blank" href="<?php echo $study->url ?>"><?php echo $study->place ?></a></h4>
    
    <p><?php echo $study->year ?></p>
    
    <?php if ($study->skills->count_all() > 0) : ?>
        <?php echo View::factory('template/skills_list')->set('skills', $study->skills->find_all()) ?>
    <?php endif; ?>    
</div>
<?php endforeach; ?>