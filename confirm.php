<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>お問い合わせ｜ReStart78</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" type="text/css" href="./assets/css/sp.css" media="all and (max-width: 768px)" />
<link rel="stylesheet" type="text/css" href="./assets/css/pc.css" media="all and (min-width: 769px)" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <?php
  mb_language("Japanese");
  mb_internal_encoding("UTF-8");
$means = htmlentities(filter_input(INPUT_POST, 'means', FILTER_SANITIZE_SPECIAL_CHARS),ENT_QUOTES, "UTF-8");
$content = htmlentities(filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS),ENT_QUOTES, "UTF-8");
$name = htmlentities(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS),ENT_QUOTES, "UTF-8");
$mail = htmlentities(filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_SPECIAL_CHARS),ENT_QUOTES, "UTF-8");
$tel = htmlentities(filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_SPECIAL_CHARS),ENT_QUOTES, "UTF-8");
$prefacture = htmlentities(filter_input(INPUT_POST, 'prefacture', FILTER_SANITIZE_SPECIAL_CHARS),ENT_QUOTES, "UTF-8");
$age = htmlentities(filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS),ENT_QUOTES, "UTF-8");
$amount = htmlentities(filter_input(INPUT_POST, 'amount', FILTER_SANITIZE_SPECIAL_CHARS),ENT_QUOTES, "UTF-8");
$memo = htmlspecialchars_decode(htmlentities(filter_input(INPUT_POST, 'memo', FILTER_SANITIZE_SPECIAL_CHARS),ENT_QUOTES, "UTF-8"));
$privacy = htmlentities(filter_input(INPUT_POST, 'privacy', FILTER_SANITIZE_SPECIAL_CHARS),ENT_QUOTES, "UTF-8");
?>
<div class="entry">
<div class="container02">
  <h2>お問い合わせ・ご相談</h2>
    <p>お問い合わせいただいた内容は、個人情報保護方針に沿って管理し、<br class="pcv">同意なく第三者に開示・提供することはございません。</p>


	<form name="" action="register.php" method="post">

<table class="kakunin">

	<tr><th>お名前：</th><td><?php echo $name?></td></tr>
	<tr><th>メールアドレス：</th><td><?php echo $mail?></td></tr>
	<tr><th>電話番号：</th><td><?php echo $tel?></td></tr>
	<tr><th>出資予定額：</th><td><?php echo $amount?></td></tr>
  <tr><th>年代層：</th><td><?php echo $age?></td></tr>
	<tr><th>ご相談内容：</th><td><?php echo $memo?></td></tr>
  <tr><th>個人情報保護方針：</th><td><?php echo $privacy?></td></tr>

</table>
<input type="hidden" name="content" id="content" value=<?php echo$content  ?>>
<input type="hidden" name="name" id="name" value=<?php echo$name  ?>>
<input type="hidden" name="mail" id="mail" value=<?php echo$mail  ?>>
<input type="hidden" name="tel" id="tel" value=<?php echo$tel  ?>>
<input type="hidden" name="amount" id="amount" value=<?php echo$amount  ?>>
<input type="hidden" name="age" id="age" value=<?php echo$age  ?>>
<input type="hidden" name="memo" id="memo" value=<?php echo$memo  ?>>
<input type="hidden" name="privacy" id="privacy" value=<?php echo$privacy ?>>



<div class="cta01"><input class="image-btn01" type="submit" value="送信する"></div>

</form>
    </div>
</div>
<footer>
  <div class="footer">
    <p>Copyright &copy; RESTART All Rights Reserved.</p>
  </div>
</footer>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="js/jquery.smoothScroll.js"></script>
<script type="text/javascript" src="js/opacity-rollover2.1.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript">$(function() { $('.over').opOver(1.0,0.7,200,200);}); </script>
</body>
</html>
