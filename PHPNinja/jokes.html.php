<?php foreach ($jokes as $joke):?>
    <p>
        <?=htmlspecialchars($joke, ENT_QUOTES, 'UTF-8')?>
    </p>
<?php endforeach; ?>
