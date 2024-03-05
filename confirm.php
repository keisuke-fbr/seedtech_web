<?php

// 関数の定義
//入力された値の確認
function confirm($post){
    if($post === ""){
        return "入力無し";
    }
    else{
        return $post;
    }
}

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

//入力された値の確認
$game_name_result = confirm($game_name);
$date_result = confirm($date);
$team1_result = confirm($team1);
$team1_score_result = confirm($team1_score);
$team2_result = confirm($team2);
$team2_score_result = confirm($team2_score);
$scorer1_result = confirm($scorer1);
$scorer2_result = confirm($scorer2);
$scorer3_result = confirm($scorer3);
$scorer4_result = confirm($scorer4);
$scorer5_result = confirm($scorer5);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力確認</title>
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/confirm.css">
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
                <li><a href="./control.php">管理者ページ</a></li>
            </ul>

            <div class="burger"></div>

            <div class="menu">
                <ul class="contents">
                    <li><a href="./index.html">トップページ</a></li>
                    <li><a href="./introduce.html">活動紹介</a></li>
                    <li><a href="./result.html">結果</a></li>
                    <li><a href="./info.html">新歓情報</a></li>
                    <li><a href="./control.html">管理者ページ</a></li>
                </ul>
            </div>
        </nav>


    </header>

    <main>
        <h1>入力内容確認</h1>
        <p>大会名：<?php echo $game_name_result;?></p>
        <p>日付：<?php echo $date_result;?></p>
        <p>ホームチーム：<?php echo $team1_result;?></p>
        <p>ホームチーム得点：<?php echo $team1_score_result;?></p>
        <p>アウェイチーム：<?php echo $team2_result;?></p>
        <p>アウェイチーム得点：<?php echo $team2_score_result;?></p>
        <p>得点者１：<?php echo $scorer1_result;?></p>
        <p>得点者２：<?php echo $scorer2_result;?></p>
        <p>得点者３：<?php echo $scorer3_result;?></p>
        <p>得点者４：<?php echo $scorer4_result;?></p>
        <p>得点者５：<?php echo $scorer5_result;?></p>
    
        <form method="POST" action="./complete.php">
            <input type="hidden" name="game_name" value="<?php echo $game_name;?>">
            <input type="hidden" name="date" value="<?php echo $date;?>">
            <input type="hidden" name="team1" value="<?php echo $team1;?>">
            <input type="hidden" name="team1_score" value="<?php echo $team1_score;?>">
            <input type="hidden" name="team2" value="<?php echo $team2;?>">
            <input type="hidden" name="team2_score" value="<?php echo $team2_score;?>">
            <input type="hidden" name="scorer1" value="<?php echo $scorer1;?>">
            <input type="hidden" name="scorer2" value="<?php echo $scorer2;?>">
            <input type="hidden" name="scorer3" value="<?php echo $scorer3;?>">
            <input type="hidden" name="scorer4" value="<?php echo $scorer4;?>">
            <input type="hidden" name="scorer5" value="<?php echo $scorer5;?>">

            <button type="button" onclick="history.back()">戻る</button>

            <?php if($team1!=="" && $team1_score!=="" && $team2!=="" && $team2_score!==""):?>
                <input type="submit" value="送信">
            <?php endif ?>    
        </form>
    
    </main>

    <footer>
        <small>Copyright &copy; Aori</small>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./assets/js/script2.js"></script>
</body>
</html>