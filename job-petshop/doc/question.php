<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>index</title>
</head>

<body>
    

<?php
    include "navbar.php";
    $q = isset($_GET['q'])? htmlspecialchars($_GET['q']) : '';
    if($q) {
        if($q =='購買寵物') {
            echo "<h1>購買寵物</h1>";
        
            echo "<h2>Q1: 我住在外縣市，請問要怎麽購買寵物呢？ </h2>";
            echo "可藉由FB或LINE等線上通訊軟體，使用照片、影片、視訊的方式，線上挑選  狗狗，然後使用9人座小客車寄到您住的縣市的空軍一號客運站，再去帶狗狗喔。";
        
            echo "<h2>Q2: 我是第一次養狗，不知道該怎麽辦？</h2>"; 
            echo "第一次飼養狗狗的人也不用擔心喔！來到店內的時候都會有專人為你詳細解說每隻狗狗的個性、餵食方式、其他需要注意的事項，帶回家後有任何不懂也可以隨時用LINE或FB詢問喔。";
            
            echo "<h2>Q3: 請問購買狗狗有什麽保障呢？</h2>"; 
            echo "都會簽訂寵物買賣定型化契約，先天疾病最高180天保障。<p>"; 
            
            function build_table($array){
                // start table
                $html = '<table>';
                // header row
                $html .= '<tr>';
                foreach($array[0] as $key=>$value){
                        $html .= '<th> ' . htmlspecialchars($key) . '</th>';
                }
                $html .= '</tr>';
        
                // data rows
                foreach( $array as $key=>$value){
                    $html .= '<tr> ';
                    foreach($value as $key2=>$value2){
                        $html .= '<td>' . htmlspecialchars($value2) .'</td>';
                    }
                    $html .= '</tr>';
                }
        
                // finish table and return it
                $html .= '</table>';
                return $html;
            }

            $array = array(
                array('期間'=>'交付後48小時：', '寵物疾病'=>'發高燒、肺炎'),
                array('期間'=>'交付之日起5日内：', '寵物疾病'=>'狂犬病、出血型胃炎'),
                array('期間'=>'交付之日起180日内：', '寵物疾病'=>'先天性或遺傳性癲癇疾病'),
                array('期間'=>'交付之日起180日内：', '寵物疾病'=>'後天性或遺傳性心臟疾病')
            );
            
            echo build_table($array);
        } 
        else if($q =='飼養寵物') {
            echo "<h1>飼養寵物</h1>";
            
            echo "<h2>Q1: 狗狗不能吃什麽？</h2>";
            echo "1. 巧克力<p><p>";
            echo "2. 葡萄<p>";
            echo "3. 洋葱<p>";
            echo "4. 生肉<p>";
            echo "5. 貓糧（不建議)<p>";
            
            echo "<h2>Q2: 預防針相關知識</h2>";
            echo "1. 如果狗狗在進行第二次免疫的時候，找不到第一次免疫時使用的品牌的疫苗，可以用其他品牌的疫苗代替。照顧愛犬疫苗注射不能免。<p>";
            echo "2. 無論狗狗大小，每次免疫都只注射1針的劑量，疫苗的劑量與體重無關。<p>";
            
        }
        else if($q =='寵物疾病保健') {
            echo "<h1>公狗結紥的好處於壞處</h1>";
            
            echo "<h2>好處</h2>"; 
            echo "1. 減小狗狗死於睾丸癌的機率<p>";
            echo "2. 減小肛周瘺的機率<p>";
            
            echo "<h2>壞處</h2>"; 
            echo "1. 患心血管瘤的概率增加1.6倍<p>";
            echo "2. 肥胖問題增加3倍，以及與之相關的健康問題<p>";
        }
    } 
    else {
        echo "<h1>Q&A 常見問題</h1>";
        echo "請選擇您想瞭解的項目：<p><p>";

?>

    <form action="" method="get"> 
        <select name="q">
            <option value="">項目:</option>
            <option value="購買寵物">購買寵物</option>
            <option value="飼養寵物">飼養寵物</option>
            <option value="寵物疾病保健">寵物疾病保健</option>
        </select>
        <input type="submit" value="提交" class="btn btn-primary">
        </form>
    <?php
    }
    ?>

</body>
</html>