<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/mailto.css">
    </head>
    <body>
    <header></header>
    <?php
        mb_language("Japanese");
	      mb_internal_encoding("UTF-8");

        $Matter= "要件:".$_POST["matter"];
        $Name= "お名前:".$_POST["name"];
        $PhoneNumber= "電話番号:".$_POST["phone-number"];
        $MailAddress= "メールアドレス:".$_POST["mail-address"];
        $Inquery= "お問い合わせ内容:".$_POST["inquery"];
        $Message_mail = $Matter."\r\n".$Name."\r\n".$PhoneNumber."\r\n".$MailAddress."\r\n".$Inquery;

        if(mb_send_mail("sekine.canvas@gmail.com,", "お問い合わせありがとうございます。", $Message_mail)){
        
        echo "<div class=passed>";
        echo "メールを送信しました。"."<br>"."お問い合わせありがとうございました。"."<br>"."<br>";
        echo "<div class=form-box>";
        echo "以下のボタンを押下すると、TOPページへ遷移します。"."<br>";
            } else {
        echo "<div class=failure>"; 
        echo "メールの送信に失敗しました。"."<br>"."フィールドに必須事項を入力し、もう一度お試しください。"."<br>";
        };
    ?>
    
    <script type="text/javascript">
        function funcAdd() {
            document.getElementById( "gohome" ).innerHTML =
            window.location.href = 'https://canvas-sapporo.com/';;
            }
    </script>

    <div id="gohome"></div>
    <div>
        <button class="button" onclick="funcAdd()">TOPページへ戻る</button>
    </div>
    <footer></footer>
    </body>
</html>