<?php 
   $roll = rand(1, 6);
   echo '주사위를 굴려서 나온 숫자 : '.$roll;
   echo '<br>';
   if($roll == 6)
   {
       echo '이겼다!';
   }
   else 
   {
       echo '아쉽지만 \'꽝\'이네요 다음기회를 노려보세요';
   }
   echo '<br>';
   echo '게임에 참가해 주셔서 감사합니다.';
   echo '<br>';
   echo '<br>';
?>
<?php 
   for ($i = 0; $i <= 10; $i= $i + 3) 
   {
       echo $i.' ';
   }
?>