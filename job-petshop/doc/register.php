<html>
<head>
<meta charset="utf-8">

<script>
    var timer=3;
    var second=Math.floor((distance % (1000 * 60)) / 1000);
</script>

<body>
    
<?php
    include "navbar.php";
    header( "refresh:3;url=index.php" );

    echo "<h1>您的個人訊息如下：</h1>";
    echo "欢迎".$_POST['name']."<p>";
    echo "您的郵箱是".$_POST['email']."<p>";
    echo "您的聯絡號碼是". $_POST['phone']."<p><p>";

   
    echo "倒數3秒后將爲您導回主頁...<p><p>";
?>

</head>


</body>
</html>