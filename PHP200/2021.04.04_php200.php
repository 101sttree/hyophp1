<?php
    //090﻿readdir() 목록을 처음으로 되돌리기
    /* $folderName = '../PHP200/';
    $opendir = opendir($folderName);
    if($opendir)
    {
        echo readdir($opendir).'<br>';
        echo readdir($opendir).'<br>';
        echo readdir($opendir).'<br>';
        
        rewinddir($opendir);
        echo '<br>rewinddir() 함수 실행<br>';
        
        echo readdir($opendir).'<br>';
        echo readdir($opendir).'<br>';
        echo readdir($opendir).'<br>';
    } */
?>
<?php
    //091 폴더 삭제하기
   /*  rmdir('hello');
    
    if(is_dir('hello'))
    {
        echo 'hello 폴더가 존재합니다.';
    }
    else
    {
        echo 'hello 폴더가 존재하지 않습니다.';
    } */
?>
<?php
    //092 파일 열기
    /* $fopen = fopen('helloworld.txt','r+');
    if($fopen)
    {
        echo '파일을 열었습니다.';
    }
    else 
    {
        echo '파일을 여는데 실패했습니다.';
    } */
?>
<?php 
    //093 파일 닫기
    /* $fopen = fopen('helloworld.txt','r+');
    fclose($fopen); */
?>
<?php 
    /* //094 파일 쓰기
    //파일에 쓸 내용
    $content = 'Hello World';
    //내용을 저장할 파일명 
    $fileName = 'helloworld.txt';
    //파일 열기
    $fp = fopen('helloworld.txt', 'w');
    //파일 쓰기
    $fw = fwrite($fp,$content);
    //파일 쓰기 성공 여부 확인
    if($fw == false)
    {
        echo '파일 쓰기에 실패했습니다.';
    }
    else
    {
        echo '파일 쓰기 성공.';
    }
    
    fclose($fileName); */
?>
<?php 
    /* $content = '이 내용은 앞의 내용의 뒤에 붙어 저장됩니다.';
    $fileName = 'helloworld.txt';
    $fp = fopen('./'.$fileName,'a');
    $fw = fwrite($fp,$content);
    
    if($fw == false)
    {
        echo '파일 쓰기에 실패했습니다.';
    }
    else
    {
        echo '파일 쓰기 성공.';
    }
    
    fclose($fileName);
     */
?>
<?php 
    //95 파일의 내용 읽기
    /* $filename = 'helloworld.txt';
    //파일의 존재 여부 확인
    if(file_exists($filename))
    {
        //파일 열기
        $fopen = fopen($filename, 'r');
        if($fopen)
        {
            //파일 읽기
            $fread = fread($fopen, filesize($filename));
            if($fread)
            {
                echo $fread; //내용 출력
                fclose($fopen); //파일 닫기
            }
            else
            {
                echo '파일 읽기에 실패했습니다.';
            }
        }
        else
        {
            echo '파일 열기에 실패했습니다.';
        }
    }
    else
    {
        echo '파일이 존재하지 않습니다.';
    } */
?>
<?php
    //96 파일의 내용을 한 라인씩 읽기
    /* $filename = 'helloworld.txt';
    if(file_exists($filename))
    {
        $fopen = fopen($filename,'r');
        
        $readByte = 512;
        if($fopen)
        {
            while ($fgets = fgets($fopen, $readByte)) 
            {
                echo $fgets.'<br>';
            }
        }
    } */
?>
<?php 
    //97 쿠키와 쿠키 생성하기
    /* setcookie('myCookie','hello',time()+86400); */
?>
<?php 
    //098 쿠키의 값 확인하기
    /* if(isset($_COOKIE['myCookie']))
    {
        echo "쿠기 myCookie의 값은 ".$_COOKIE['myCookie'];
    }
    else
    {
        echo "쿠기 myCookie가 존재하지 않습니다.";
    } */
?>
<?php 
    //099 쿠키의 적용 범위 확인하기
    setcookie('check','only php foder',time()+3600,'/hyophp1/');
    if(isset($_COOKIE['check']))
    {
        echo '쿠키 check의 값은 '. $_COOKIE['check'];
    }
    else
    {
        echo '쿠키 check가 존재하지 않습니다.';
    }
?>


























