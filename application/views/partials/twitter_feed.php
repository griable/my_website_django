<ul id="twitter-feed">
<?php foreach ($tweets as $tweet) : ?>
    <li><?php echo date::formatDate($tweet->created_at) ?><br />
    <?php echo Text::auto_link_urls($tweet->text) ?></li>
<?php endforeach ?>
</ul>
<a href="http://twitter.com/griable" title="Consulter à ma page Twitter" target="blank">Consulter à ma page Twitter</a>