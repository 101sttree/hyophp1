<?php 
    if('POST' == $_SERVER['REQUEST_METHOD'])
    {
        if(validate_form())
        {
            process_form();
        }
        else 
        {
            show_form();
        }
    }
    else
    {
        show_form();
    }
    
    function process_form() 
    {
        print $_POST['my_name']."님 안녕하세요";;
    }
    function show_form()
    {
print
<<<_HTML_
<form  method="post" action="$_SERVER[PHP_SELF]">
<input type="text" name="my_name">
<br>
<input type="submit" value="인사">
</form>
_HTML_;
    }
    function validate_form()
    {
        if(strlen($_POST['my_name']) < 3)
        {
            return false;
        }
        if(strlen($_POST['my_name']) >= 3)
        {
            return true;
        }
    }
?>

<!-- <html>
	<body>
		<form action="2021.03.28_php_Running.php" method="post">
		<input type="text" name="product_id">
		<select name="category">
		<option value="ov">냄비받침</option>
		<option value="fr">프라이펜</option>
		<option value="to">주방토치</option>
		</select>
		<input type="submit" value="제출">
		</form>
		product_id:<?php print $_POST['product_id'] ?? '' ?>
		<br>
		category:<?php print $_POST['category'] ?? '' ?>
	</body>
</html> -->
<!--<html>
	<body>
		<form action="2021.03.28_php_Running.php" method="post">
		<!-- <input type="text" name="product_id"> 
		<select name="lunch[]" multiple>
		<option value="바베큐 돼지고기">바베큐 돼지고기 번</option>
		<option value="닭고기">닭고기 번</option>
		<option value="연꽃씨">연꽃씨 번</option>
		<option value="단팥">단팥 번</option>
		<option value="제비집">제비집 번</option>
		</select>
		<input type="submit" value="제출">
		</form>
		원하시는 번을 선택하세요
	</body>
</html>
<br/>-->
<?php 
    /* if(isset($_POST['lunch']))
    {
        foreach ($_POST['lunch'] as $choice)
        {
            print "$choice 번을 골랐습니다. <br/>";
        }
    }
$_POST['lunch'][] ='단팥';
$_POST['lunch'][] ='제비집'; */
?>

   











