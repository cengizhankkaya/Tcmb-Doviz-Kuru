<?php 
$doviz = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');
    

// dolar starts //  
$dolar_alis = $doviz->Currency[0]->BanknoteBuying;
$dolar_satis = $doviz->Currency[0]->BanknoteSelling;
//dolar ends //

 
//euro starts // 
$euro_alis = $doviz->Currency[3]->BanknoteBuying;
$euro_satis = $doviz->Currency[3]->BanknoteSelling;
//euro ends // 

//pound starts //
$pound_alis = $doviz->Currency[4]->BanknoteBuying;
$pound_satis = $doviz->Currency[4]->BanknoteSelling;
//pound ends //
?>
<!DOCTYPE html>
<html lang="tr" >

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title>TCMB Güncel Efektif Döviz Kuru</title>
  
  
<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <!-- symbol defs-->

<div class="title">
	<h2>TCMB Güncel Efektif Döviz Kurları</h2>
</div>
<ul class="dash-list">
    <li id="dash-item--1" class="dash-item dash-item--dollar">
        <div class="dash-item__header">
            <h3 class="dash-item__title"><a href="#" style="color:#B81E20;">ABD DOLARI</a></h3>
        </div>
        <div class="dash-item__content">
            
                        <ul class="quiz-results">
                <li class="quiz-results__item quiz-results__item--views">
                    <img src="https://c4.wallpaperflare.com/wallpaper/393/817/283/money-the-bucks-dolar-wallpaper-preview.jpg" style="width:60px;height:60px;">
                </li>
                <li class="quiz-results__item quiz-results__item--finishes">
                    <span class="quiz-results__number quiz-results__number--average-score2"><?php echo "$dolar_alis"; ?></span>
                    <div class="quiz-results__label">Alış</div>
                </li>
                <li class="quiz-results__item quiz-results__item--average-score">
                    <span class="quiz-results__number quiz-results__number--average-score"><?php echo "$dolar_satis"; ?></span>
                    <div class="quiz-results__label2">Satış</div>
                </li>
            </ul>
        </div>
    </li>
    <li id="dash-item--2" class="dash-item dash-item--euro">
        <div class="dash-item__header">
            <h3 class="dash-item__title"><a href="#" style="color:#00309A;">EURO</a></h3>
        </div>
        <div class="dash-item__content">
            
            <ul class="quiz-results">
                <li class="quiz-results__item quiz-results__item--views">
                     <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwoDtJxB5ezYQ9r1TSox0zvrjiNpGJ3X9XLmuh9azqmg&s" style="width:60px;height:60px;">
                </li>
                <li class="quiz-results__item quiz-results__item--finishes">
                    <span class="quiz-results__number quiz-results__number--average-score2"><?php echo "$euro_alis"; ?></span>
                    <div class="quiz-results__label">Alış</div>
                </li>
                <li class="quiz-results__item quiz-results__item--average-score">
                    <span class="quiz-results__number quiz-results__number--average-score"><?php echo "$euro_satis"; ?></span>
                    <div class="quiz-results__label2">Satış</div>
                </li>
            </ul>
            
            
         </div>
    </li>
    <li id="dash-item--3" class="dash-item dash-item--pound">
        <div class="dash-item__header">
            <h3 class="dash-item__title"><a href="#" style="color:#F10002;">İNGİLİZ STERLİNİ</a></h3>
            

        </div>
        <div class="dash-item__content">
            
            
                        <ul class="quiz-results">
                <li class="quiz-results__item quiz-results__item--views">
                    <img src="https://e1.pxfuel.com/desktop-wallpaper/946/727/desktop-wallpaper-pound-sterling-man-made-hq-pound-sterling-pound.jpg" style="width:60px;height:60px;">
                </li>
                <li class="quiz-results__item quiz-results__item--finishes">
                    <span class="quiz-results__number quiz-results__number--average-score2"><?php echo "$pound_alis"; ?></span>
                    <div class="quiz-results__label">Alış</div>
                </li>
                <li class="quiz-results__item quiz-results__item--average-score">
                    <span class="quiz-results__number quiz-results__number--average-score"><?php echo "$pound_satis"; ?></span>
                    <div class="quiz-results__label2">Satış</div>
                </li>
            </ul>
            
            
            
        </div>
    </li>
</ul>

<h2>Cengizhan Kaya 20260810023</h2>

</body>

</html>
