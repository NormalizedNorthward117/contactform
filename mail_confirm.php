<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>お問い合わせフォーム：ご確認</title>
        <link rel="stylesheet" type="text/css" href="style2.css">                           <!--style2.cssを使用-->
    </head>

<body>

    <h1>お問い合わせ内容確認</h1>                                                             <!--見出し-->

    <div class="confirm">                                                                   <!--入力内容確認-->
        <p>
            お問い合わせ内容はこちらで宜しいでしょうか？
            <br>よろしければ「送信する」ボタンを押してください。
        </p>

        <p>                                                                                 <!--入力した名前の表示-->
            名前<br>
            <?php
                echo $_POST['name'];
            ?>
        </p>

        <p>                                                                                 <!--入力したメルアドの表示-->
            メールアドレス<br><?php echo $_POST['mail']; ?>
        </p>

        <p>                                                                                 <!--選択した年齢の表示-->
            ご年齢<br><?php echo $_POST['age']."歳"; ?>
        </p>

        <p>                                                                                 <!--記入したコメントの表示-->
            コメント<br><?php echo $_POST['comments']; ?>
        </p>

        <form action="index.html">                                                          <!--入力フォームに戻るボタン-->
            <input type="submit" class="button1" value="戻って修正する" />                    <!--valueはボタンに表示される文-->
        </form>

        <form action="insert.php" method="post">                                            <!--入力情報をinsert.phpに送るボタン-->
            <input type="submit" class="button2" value="登録する" />
            <input type="hidden" value=                                                     
                 <?php
                     echo $_POST['name'];
                 ?>
            name="name" />
            <input type="hidden" value=<?php echo $_POST['mail']; ?> name="mail" />
            <input type="hidden" value=<?php echo $_POST['age']; ?> name="age" />
            <input type="hidden" value=<?php echo $_POST['comments']; ?> name="comments" />
        </form>

    </div>
</body>
</html>