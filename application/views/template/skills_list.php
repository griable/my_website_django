<ul class="skills">
<?php foreach ($skills as $skill) : ?>
    <li><?php echo (!empty($skill->longname)) ? '<accronym title="' . $skill->longname . '">' . $skill->name . '</accronym>' : $skill->name; ?></li>
<?php endforeach; ?>
</ul>