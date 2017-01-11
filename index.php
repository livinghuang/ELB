<<<<<<< HEAD
<html>
<html>
<head>
<title>Encode Software</title>
<link rel="stylesheet" href="encryptor.css">
</head>
<body>
<div class="menu">
<a href="<?php echo $_SERVER['PHP_SELF']; ?>">Home</a> -
<a href="<?php echo $_SERVER['PHP_SELF'].'?op=record'; ?>">Record</a> -
<a href="<?php echo $_SERVER['PHP_SELF'].'?op=about'; ?>"About</a>
</div>
<div class="main">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<input type="text" name="input" size="67"><br / >
<input type="submit" value="New" name="op">
<input type="submit" value="Load" name="op">
<input type="submit" value="Encode" name="op">
<input type="submit" value="Decode" name="op">
<input type="submit" value="Clean" name="op">
</form>
</div>
<div class="display">
<?php
include "encryptdemo5.php";
?>
</div>
</body>
</html>
=======
<?php 
date_default_timezone_set("Asia/Taipei");  //設定時區 
echo date("Y年m月j日 G時i分s秒");  //第1個參數是時間格式；第2個參數是引數，沒有引數時，默認為現在時間。 
//date("Y-n-j G:i:s",1393224543);  //逗點之後的數值為引數。 
?>
>>>>>>> 616feee4ce08c589d7342bc4d90cedc19841747d
