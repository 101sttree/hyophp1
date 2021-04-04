<?php
    phpinfo();
    //080 filter_Var() 함수로 이메일 유효성 검사하기
    /* function checkEmail($email)
    {
        $emailCheck = filter_Var($email,FILTER_VALIDATE_EMAIL);
        
        $returnInfo = false;
        if($emailCheck)
        {
            $returnInfo = ture;
        }
        
        return $returnInfo;
    }
    
    $email = "mybookfoweb@gmail.com";
    
    if(checkEmail($email))
    {
        echo "{$email}는 올바른 이메일 주소입니다.";
    }
    else
    {
        echo "{$email}는 올바른 이메일 주소입니다.";
    }
    echo "<br>"; */
    
?>
<?php 
    //081 filter_Var() 함수로 URL 유효성 검사하기
    /* function checkUrl($url) 
    {
        $urlCheck = filter_var($url,FILTER_VALIDATE_URL);
        
        $returnInfo = false;
        if($urlCheck)
        {
            $returnInfo = ture;
        }
        
        return $returnInfo;
        
    }
    
    $url = "http://www.tomodevel.jp";
    if(checkUrl($url))
    {
        echo "{$url}는 올바른 URL 입니다.";
    }
    else
    {
        echo "{$url}는 잘못된 URL 입니다.";
    }
    echo "<br>";
    
    $url = "www.everdevel.com";
    if(checkUrl($url))
    {
        echo "{$url}는 올바른 URL 입니다.";
    }
    else
    {
        echo "{$url}는 잘못된 URL 입니다.";
    }
    echo "<br>"; */
?>
<?php
    //082 filter_Var() 함수로 IP 주소 유효성 검사하기
    /* $ip = "192.168.0.1";
    $ipCheck = filter_Var($ip, FILTER_VALIDATE_IP);
    
    if($ipCheck)
    {
        echo "{$ip}는 올바른 ip 입니다.";
    }
    else
    {
        echo "{$ip}는 잘못된 ip 입니다.";
    }
    echo "<br>";
    
    $ip = "192";
    $ipCheck = filter_Var($ip, FILTER_VALIDATE_IP);
    
    if($ipCheck)
    {
        echo "{$ip}는 올바른 ip 입니다.";
    }
    else
    {
        echo "{$ip}는 잘못된 ip 입니다.";
    }
    echo "<br>"; */
?>
<?php 
    //083 filter_Var() 함수로 정수 유효성 검사하기
    /* function checkInt($int)
    {
        $intCheck = filter_var($int,FILTER_VALIDATE_INT);
        if($intCheck)
        {
            echo "{$int}는 정수입니다.";
        }
        else
        {
            echo "{$int}는 정수가 아닙니다.";
        }
        echo "<br>";
    }
    checkInt(694);
    checkInt(1.25);
    checkInt('hello'); */
?>
<?php 
    //084 filter_Var() 함수로 실수 유효성 검사하기
    /* $float = 192.12;
    $floatCheck = filter_var($float,FILTER_VALIDATE_FLOAT);
    if($floatCheck)
    {
        echo "{$float}는 실수입니다.";
    }
    else
    {
        echo "{$float}는 실수가 아닙니다.";
    }
    echo "<br>"; */
?>
<?php 
    //085 폴더 만들기
    /* $folderName = 'hello';
    $makeDir = mkdir($folderName,);
    if($makeDir)
    {
        echo "{$folderName} 폴더 생성 완료";
    }
    else
    {
        echo "{$folderName} 폴더 생성 실패";
    }
    echo "<br>"; */
?>
<?php 
    //086 폴더 존재 유무 확인하기
    /* $folderName = 'hello';
    $isDir = is_dir($folderName);
    
    if($isDir)
    {
        echo "{$folderName} 폴더가 존재합니다.";
    }
    else
    {
        echo "{$folderName} 폴더가 존재하지 않습니다.";
    }
    
    echo "<br>";
    
    $folderName = 'world';
    $isDir = is_dir($folderName);
    
    if($isDir)
    {
        echo "{$folderName} 폴더가 존재합니다.";
    }
    else
    {
        echo "{$folderName} 폴더가 존재하지 않습니다.";
    }  */
?>
<?php 
    //087 폴더 열기
    /* $folderName = 'hello';
    $opendir = opendir($folderName);
    echo $opendir;
    echo "<br>";
    
    if($opendir)
    {
        echo "{$folderName} 폴더를 열었습니다.";
    }
    else
    {
        echo "{$folderName} 폴더를 여는데 실패했습니다.";
    }
    echo "<br>";
    $folderName = 'world';
    $opendir = opendir($folderName);
    if($opendir)
    {
        echo "{$folderName} 폴더를 열었습니다.";
    }
    else
    {
        echo "{$folderName} 폴더를 여는데 실패했습니다.";
    } */
?>
<?php 
    //088 폴더 읽기
    /* $folderName = '../hyophp1/';
    if(is_dir($folderName))
    {
        echo "폴더가 존재합니다.<br>";
        $opendir = opendir($folderName);
        if($opendir)
        {
            echo "폴더를 열었습니다.<br>";
            while($readir = readdir($opendir))
            {
                echo $readir."<br>";
            }
        }
        else
        {
            echo "폴더를 열지 못했습니다";
        }
    }
    else
    {
        echo "폴더가 존재하지 않습니다.";
    } */
?>
<?php 
    //089 폴더 닫기
    /* $folderName = '../hyophp1/';
    if(is_dir($folderName))
    {
        echo "폴더가 존재합니다.<br>";
        $opendir = opendir($folderName);
        if($opendir)
        {
            echo "폴더를 열었습니다.<br>";
            while($readir = readdir($opendir))
            {
                echo $readir."<br>";
            }
            closedir($opendir);
        }
        else
        {
            echo "폴더를 열지 못했습니다";
        }
    }
    else
    {
        echo "폴더가 존재하지 않습니다.";
    } */

?>	









