<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>sell</title>

    <!--local css-->
    <link rel="stylesheet" type="text/css" href="../static/css/style.css">
</head>

<?php
    
$q = isset($_POST['q'])? $_POST['q'] : '';
if(is_array($q)) {
    $sites = array(
            '藏獒' => '藏獒: (最高7000美元)',
            '薩摩耶犬' => '薩摩耶犬: ($4,000-$ 10 000)',
            '法老王獵犬' => '法老王獵犬: (高達6500美元)',
            '波斯貓' => '波斯貓 (約5.4萬~16.5萬之間)',
            '俄羅斯藍貓' => '俄羅斯藍貓 (約1.2萬~9萬之間)',
            '英國短毛貓' => '英國短毛貓 (約4.5萬~6萬台幣之間)',
    );
    
    echo "<h3>根據您的回復，本店給與的參考價格如下：</h3><p>";
    
    foreach($q as $val) {    
        echo $sites[$val] . "<p>";
    }
   
    
      
} else {
?>

<body>
    <?php include "navbar.php" ?>
    
    <h1>這是汪星人出售專區</h1>
    您想購買什麽寵物呢？

    <form action="" method="post"> 
        <h2>汪星人專區</h2>
        
        <input type="checkbox" name="q[]" value="藏獒"> 藏獒<br> 
        <input type="checkbox" name="q[]" value="薩摩耶犬"> 薩摩耶犬<br> 
        <input type="checkbox" name="q[]" value="法老王獵犬"> 法老王獵犬<br>
        <p>

        <h2>貓星人專區</h2>
        
        <input type="checkbox" name="q[]" value="波斯貓"> 波斯貓<br> 
        <input type="checkbox" name="q[]" value="俄羅斯藍貓"> 俄羅斯藍貓<br> 
        <input type="checkbox" name="q[]" value="英國短毛貓"> 英國短毛貓<br>
        <p><p>
        
        <input type="submit" value="提交" class="btn btn-primary">
    </form>

    
</body>

<?php
}
?>
<p>

</html>