<?php if(isset($error)):?>
    <?= $error ?>
<?php else:?>
    <blockquote>

            <?php foreach ($board as $v ):?>
                <form action="practice_delete.php" method="post">
                    <input type="hidden" name="id" value="<?=$v['id']?>" >
                    <?= htmlspecialchars($v['content'],ENT_QUOTES,'UTF-8')?>
                    <input type="submit" value="삭제"><br>
                </form>
            <?php endforeach;?>

    </blockquote>
<?php endif;?>
