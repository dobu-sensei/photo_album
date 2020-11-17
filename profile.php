<?php
$name = 'ドブ子さん';
$introduction = 'こんにちは！プログラミング学習中のOLです！よろしくお願いします！';

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?php echo $name;?>のプロフィール</title>
</head>
<body>
    <header>
        <h1>PHOTO ALBUM</h1>
        <nav id="menu">
            <ul>
                <li><a href="#">新規投稿</a></li>
                <li><a href="#">マイページ</a></li>
                <li><a href="#">ログアウト</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h1><?php echo $name;?>のプロフィール</h1>
            <dl>
                <dt>名前：</dt>
                <dd><?php echo $name;?></dd>
                <dt>プロフィール：</dt>
                <dd><?php echo $introduction;?></dd>
            </dl>
        </section>
    </main>
</body>
</html>