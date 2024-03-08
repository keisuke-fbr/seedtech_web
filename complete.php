<?php


//サニタイジング
$game_name = htmlspecialchars($_POST["game_name"],ENT_QUOTES,"UTF-8");
$date = htmlspecialchars($_POST["date"],ENT_QUOTES,"UTF-8");
$team1 = htmlspecialchars($_POST["team1"],ENT_QUOTES,"UTF-8");
$team1_score = htmlspecialchars($_POST["team1_score"],ENT_QUOTES,"UTF-8");
$team2 = htmlspecialchars($_POST["team2"],ENT_QUOTES,"UTF-8");
$team2_score = htmlspecialchars($_POST["team2_score"],ENT_QUOTES,"UTF-8");
$scorer1 = htmlspecialchars($_POST["scorer1"],ENT_QUOTES,"UTF-8");
$scorer2 = htmlspecialchars($_POST["scorer2"],ENT_QUOTES,"UTF-8");
$scorer3 = htmlspecialchars($_POST["scorer3"],ENT_QUOTES,"UTF-8");
$scorer4 = htmlspecialchars($_POST["scorer4"],ENT_QUOTES,"UTF-8");
$scorer5 = htmlspecialchars($_POST["scorer5"],ENT_QUOTES,"UTF-8");



//データベース接続
$dsn = 'mysql:dbname=game-results;host = localhost';
$user = 'root';
$password = '';

//インスタンスの生成
$dbh = new PDO($dsn, $user, $password);
$dbh->query('SET NAMES UTF8MB4');

$sql = $dbh->prepare("SELECT COUNT(*) FROM result");
$sql->execute();
$count = $sql->fetchColumn();

if($count >= 10){
    $delete = $dbh->prepare('DELETE FROM result WHERE id=(SELECT MIN(id) FROM result)');
    $delete->execute([]);
}

$stmt = $dbh->prepare('INSERT INTO result SET game_name=?, date=?, team1=?, team1_score = ?, team2 = ?, team2_score = ?, scorer1 = ?, scorer2 = ?, scorer3 = ?,scorer4 = ?,scorer5 = ?');
$stmt->execute([$game_name,$date,$team1,$team1_score,$team2,$team2_score,$scorer1,$scorer2,$scorer3,$scorer4,$scorer5]);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力完了</title>
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/complete.css">
</head>
<body>
    <header>
        <div class="header-left">
            <ul class="nav-left">
                <li><a href="./index.html"><img src="./assets/img/aogaku-logo3.png" alt="" class="logo"></a></li>
                <li><h2>Aori</h2></li>
            </ul>
            
        </div>

        <nav>
            <ul class="list_nav_header">
                <li><a href="./index.html">トップページ</a></li>
                <li><a href="./introduce.html">活動紹介</a></li>
                <li><a href="./result.php">結果</a></li>
                <li><a href="./info.html">新歓情報</a></li>
                <li><a href="./control.html">管理者ページ</a></li>
            </ul>

            <div class="burger"></div>

            <div class="menu">
                <ul class="contents">
                    <li><a href="./index.html">トップページ</a></li>
                    <li><a href="./introduce.html">活動紹介</a></li>
                    <li><a href="./result.php">結果</a></li>
                    <li><a href="./info.html">新歓情報</a></li>
                    <li><a href="./control.html">管理者ページ</a></li>
                </ul>
            </div>
        </nav>


    </header>

    <main>
        <div class="container">
            <h1>登録完了</h1>

            <a href="./control.php">入力画面に戻る</a>

        </div>
        
    </main>

    <footer>
        <small>Copyright &copy; Aori</small>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./assets/js/script2.js"></script>
</body>
</html>