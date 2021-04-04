<?php
if ($_POST['user'])
{
    print "hello, ";
    print $_POST['user'];
    print "!";
}
else
{
print <<<_HTML_
<html>
<form method="post" action="$_SERVER[PHP_SELF]">
이름 : <input type="text"  name="user">
<br>
<button type="submit">인사</button>
</form>
</html>
_HTML_;
}

print number_format(10000000);
?>
