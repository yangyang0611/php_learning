<?php include "navbar.php" ;

echo "<h1>我們已收到您的寄放申請</h1>";
echo "請檢查一下資訊是否正確，確認無誤后請提交表單<p><p>";

$people = $_POST["people"];
$phone = $_POST["phone"];
$addr = $_POST["addr"];
$animal = $_POST["animal"];
$type = $_POST["type"];
$color = $_POST["color"];
$age = $_POST["age"];
$sickness = $_POST["sickness"];
$food = $_POST["food"];
$other = $_POST["other"];

echo "<h3主人資訊</h3>";
echo "姓名：$people<p>";
echo "電話：$phone<p>";
echo "住址： $addr<p><p>";

echo "<h3寵物資訊</h3>";
echo "姓名：$animal<p>";
echo "品種：$type<p>";
echo "毛色： $color<p>";
echo "年齡： $age<p>";
echo "疾病： $sickness<p>";
echo "飲食習慣： $food<p>";
echo "特別交代事項： $other<p><p>";
?>

<a href="redirect.php">
    <button type="button" class="btn btn-primary">提交</button>
</a>
<p>

<a href="fosterage.html">
    <button type="button" class="btn btn-outline-secondary">回上一頁</button>
</a>
<p>

<? php include "footer.php" ; ?>
