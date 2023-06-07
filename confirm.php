<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Matter = $_POST["matter"];
        $Name = $_POST["name"];
        $PhoneNumber = $_POST["phone-number"];
        $MailAddress = $_POST["mail-address"];
        $Inquery = $_POST["inquery"];
    }

    if (isset($_POST["submit"]))
    header("Location: ./mailto.php");
?>

<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせ内容の確認</title>
<link rel="stylesheet" href="./css/confirm.css">
</head>

<body>
<header></header>
<div>
    <form action="confirm.php" method="post">
        <input type="hidden" name="matter" value="<?php echo $Matter; ?>">
        <input type="hidden" name="name" value="<?php echo $Name; ?>">
        <input type="hidden" name="phone-number" value="<?php echo $PhoneNumber; ?>">
        <input type="hidden" name="mail-address" value="<?php echo $MailAddress; ?>">
        <input type="hidden" name="inquery" value="<?php echo $Inquery; ?>">
        <p class="contact-title">お問い合わせ 内容確認</p>
        <p class="message">お問い合わせ内容はこちらでよろしいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>
        <div>
            <div>
                <p class= "confirm">要件<?php echo $Matter; ?></p>
            </div>
            <div>
                <p class= "confirm">お名前<?php echo $Name; ?></p>
            </div>
            <div>
                <p class= "confirm">電話番号<?php echo $PhoneNumber; ?></p>
            </div>
            <div>
                <p class= "confirm">メールアドレス<?php echo $MailAddress; ?></p>
            </div>
            <div>
                <p class= "confirm">お問い合わせ内容<?php echo nl2br($Inquery); ?></p>
            </div>
        </div>
        <div class="buttons">
            <input class="modify-btn" type="button" value="修正する" onclick="history.back(-1)">
            <button class="submit-btn" type="submit" name="submit">送信する</button>
        </div>
    </form>
</div>
<footer></footer>
</body>
</html>