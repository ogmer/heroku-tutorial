<?php
$cards = array("jk.png","01.png","02.png","03.png","04.png","05.png","06.png",
		"07.png","08.png","09.png","10.png","11.png","12.png","13.png");

$hNum = $_POST['leftCard'];
$lNum = $_POST['select'];
$num2 = mt_rand(0,13);

$lightCard = $num2;
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
    <body>
    <div align="center">
    <font size="6">High&amp;Lowゲーム</font>
	<hr>
	<?php
	echo '<img src="../cards/',$cards[$hNum],'">&nbsp;&nbsp;&nbsp;&nbsp;';
	echo '<img src="../cards/',$cards[$lightCard],'"><br>';
	echo "",$lNum,"を選択しました。<br><br>";
	   if ($hNum < $lightCard){
	   $result = "High";
	}  elseif ($hNum>$lightCard){
	   $result = "Low";
	}  else  {
	   $result = $lNum;
	}
	   if ($lNum == $result){
	   echo "You Win!<br><br>";
	}  elseif ($lNum <> $result){
           echo "You Lose...<br><br>";
	}  echo'<a href="highAndLows03.php">もう一度挑戦</a>';
	?>
	</div>
    </body>
</html>
