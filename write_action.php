<?php

    $connect = mysqli_connect('localhost', 'root', 'jhs1741jhs@@','phpboard');
    if ( mysqli_connect_errno() )
    {
        echo "DB 연결에 실패했습니다 " . mysqli_connect_error();
    }
    
    $id      = $_GET[name];
    $pw      = $_GET[pw];
    $title   = $_GET[title];
    $content = $_GET[content];
    $date    = date('Y-m-d H:i:s');
    
    $URL = 'list.php';
    
    $query = "insert into board 
    (
        title, 
        content, 
        date, 
        hit, 
        id, 
        password
    ) values
    (
        '$title', 
        '$content', 
        '$date', 
        0, 
        '$id', 
        '$pw'
    )";
    
    $result = $connect -> query($query);
    
    if ($result) 
    {
?>		<script>
            alert("<?php echo "글이 등록되었습니다."?>");
            location.replace("<?php echo $URL?>");
        </script>
<?php

    }
    else 
    {
        echo mysqli_errno($connect);
        echo mysqli_error_list($connect);
        if ( !mysqli_query ($connect, $query))
        {
            echo("쿼리오류 발생: " . mysqli_error($connect));
        }
        
        
        
    }
    
    mysqli_close($connect);

?>