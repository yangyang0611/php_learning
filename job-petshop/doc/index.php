<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>home</title>
</head>

<body>
    <?php include "navbar.php";

        echo "<h1>這裏是汪汪寵物店</h1>";
        echo "<h3>您可以透過以上資訊欄瞭解我們提供的服務</h3><br>";    
    ?>

<div id="myCarousel" class="carousel slide">
	<!-- 轮播（Carousel）指标 -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>   
	<!-- 轮播（Carousel）项目 -->
	<div class="carousel-inner">
		<div class="item active">
			<img src="../static/image/dog/0.jpg" alt="First slide">
			<div class="carousel-caption caption">薩摩耶犬Samoyed</div>
		</div>
		<div class="item">
			<img src="../static/image/dog/1.jpg" alt="Second slide">
			<div class="carousel-caption caption">捷克狼犬Czechoslovakian Vlcak</div>
		</div>
		<div class="item">
			<img src="../static/image/dog/3.jpg" alt="Third slide">
			<div class="carousel-caption caption">秘魯印加蘭花犬Peruvian Inca Orchid</div>
		</div><div class="item">
			<img src="../static/image/cat/0.jpg" alt="forth slide">
			<div class="carousel-caption caption">波斯貓Persian cat</div>
		</div>
		<div class="item">
			<img src="../static/image/cat/1.jpg" alt="fifth slide">
			<div class="carousel-caption caption">防敏感貓Allerca hypoallergenic cat</div>
		</div>
		<div class="item">
			<img src="../static/image/cat/2.jpg" alt="fifth slide">
			<div class="carousel-caption caption">阿什拉Ashera</div>
		</div>
	<!-- 轮播（Carousel）导航 -->
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	</a>
</div> 

</body>

</html>