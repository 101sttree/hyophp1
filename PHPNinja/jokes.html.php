<?php foreach ($jokes as $joke):?>
<blockquote>
    <p>
        <?=htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8')?>
        (작성자 : <a href="mailto:<?php
            echo htmlspecialchars($joke['email'], ENT_QUOTES,'UTF-8');?>">
        <?php
            echo htmlspecialchars($joke['email'], ENT_QUOTES,'UTF-8');?>
        </a>)

        <form action="deletejoke.php" method="post">
            <input type="hidden" name="id" value="<?=$joke['id']?>">
            <input type="submit" value="삭제">
        </form>
    </p>
</blockquote>
<?php endforeach; ?>
