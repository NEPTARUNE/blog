<?php
$fp = fopen('data.csv', 'a+b');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    fputcsv($fp, [$_POST['name'], $_POST['comment']]);
    rewind($fp);
}
while ($row = fgetcsv($fp)) {
    $rows[] = $row;
}
fclose($fp);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
 <link href="keijiban.css" rel="stylesheet" type="text/css" media="all">
<title>NEPTARUNE Blog - 掲示板</title>
</head>
<body background="https://shotby.zpw.jp/upload/files/scJkqnQGva.webp">
<img src="https://shotby.zpw.jp/upload/files/H8MwvQdUa2.webp">
<h1>NEPTARUNE Blog - 掲示板</h1>
<a href="index.html">Blogトップ</a>
<section>
    <h2>新規投稿</h2>
    <form action="" method="post">
        <div class="name"><span class="label">名前: <input type="text" name="name" value=""><br>
        <div class="honbun"><span class="label">本文:<textarea name="comment" cols="30" rows="3" maxlength="80" wrap="hard" placeholder="80字以内で入力してください。"></textarea>
        <input type="submit" value="投稿">
    </form>
</section>
<section>
    <h2>投稿一覧</h2>
    <p>投稿はまだありません</p>
</section>
</body>
</html>
