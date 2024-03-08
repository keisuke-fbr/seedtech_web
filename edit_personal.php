<?php

    require_once("./assets/datebase.php");

    if(!empty($_POST)){

        //inputにidの追加

        // if(empty($_POST["team1"])){
        //     exit("ホームチームを入力してください");
        // }

        // if(empty($_POST["team1_score"])){
        //     exit("ホームチームの得点を入力してください");
        // }

        // if(empty($_POST["team1"])){
        //     exit("アウェイチームを入力してください");
        // }

        // if(empty($_POST["team2_score"])){
        //     exit("アウェイチームの得点を入力してください");
        // }


        $datebase2 = new Datebase();
        $datebase2->update($_POST);

        header("Location: ./control.html");
        exit;
    }


    $datebase = new Datebase();
    $record = $datebase->find((int)$_GET["id"]);

    //サニタイジング

    $game_name = htmlspecialchars($record[0]["game_name"],ENT_QUOTES,"UTF-8");
    $date = htmlspecialchars($record[0]["date"],ENT_QUOTES,"UTF-8");
    $team1 = htmlspecialchars($record[0]["team1"],ENT_QUOTES,"UTF-8");
    $team1_score = htmlspecialchars($record[0]["team1_score"],ENT_QUOTES,"UTF-8");
    $team2 = htmlspecialchars($record[0]["team2"],ENT_QUOTES,"UTF-8");
    $team2_score = htmlspecialchars($record[0]["team2_score"],ENT_QUOTES,"UTF-8");
    $scorer1 = htmlspecialchars($record[0]["scorer1"],ENT_QUOTES,"UTF-8");
    $scorer2 = htmlspecialchars($record[0]["scorer2"],ENT_QUOTES,"UTF-8");
    $scorer3 = htmlspecialchars($record[0]["scorer3"],ENT_QUOTES,"UTF-8");
    $scorer4 = htmlspecialchars($record[0]["scorer4"],ENT_QUOTES,"UTF-8");
    $scorer5 = htmlspecialchars($record[0]["scorer5"],ENT_QUOTES,"UTF-8");
    $id = htmlspecialchars($record[0]["id"],ENT_QUOTES,"UTF-8");

    

    // else{
    //     header("Location: ./control.html");
    //     exit;
    // }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/edit_personal.css">
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
        <div class="result">
            <h1>直近10試合の試合結果</h1>
            <div class="container">
                <form method="POST" action="./edit_personal.php">
                    <div class="match">
                        
                        <div class="competition">
                            <div class="league">
                                <h1>大会名</h1>
                                <h1>:</h1>
                                <select name="game_name" id="game_select">
                                    <option value="<?php echo $game_name;?>"><?php echo $game_name;?></option>
                                    <option value="マガジン杯">マガジン杯</option>
                                    <option value="学年大会">学年大会</option>
                                    <option value="ゲキサカ杯">ゲキサカ杯</option>
                                    <option value="稲穂フェスタ">稲穂フェスタ</option>
                                    <option value="新関東カップ">新関東カップ</option>
                                    <option value="新歓合宿">新歓合宿</option>
                                    <option value="理工カップ">理工カップ</option>
                                    <option value="理工リーグ">理工リーグ</option>
                                    <option value="青杯">青杯</option>
                                    <option value="athome杯">athome</option>
                                    <option value="プレミア杯">プレミア杯</option>
                                    <option value="新関東リーグ">新関東リーグ</option>
                                    <option value="その他">その他</option>

                                </select>
                            </div>
                            <div class="date">
                                <h1>日付</h1>
                                <h1>:</h1>
                                <input type="date" name="date" value="<?php echo $date;?>">
                            </div>
                        </div>
                        <div class="detail">
                            <div class="score">
                                <input type="text" name="team1" value="<?php echo $team1;?>">
                                <ul class="point">
                                    <li><input type="number" name="team1_score" value="<?php echo $team1_score;?>"></li>
                                    <li>-</li>
                                    <li><input type="number" name="team2_score" value="<?php echo $team2_score;?>"></li>
                                </ul>
                                <input type="text" name="team2" value="<?php echo $team2;?>">
                            </div>
                            <div class="who">
                                <h1>得点者</h1>
                                <ul>
                                    <li><input type="text" name="scorer1" value="<?php echo $scorer1;?>"></li>
                                    <li><input type="text" name="scorer2" value="<?php echo $scorer2;?>"></li>
                                    <li><input type="text" name="scorer3" value="<?php echo $scorer3;?>"></li>
                                    <li><input type="text" name="scorer4" value="<?php echo $scorer4;?>"></li>
                                    <li><input type="text" name="scorer5" value="<?php echo $scorer5;?>"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <input type="text" name="id" class="id" value="<?php echo $id;?>">

                    <button type="submit" class="btn">変更する</button>
                </form>
            </div>
        </div>
    </main>

    <footer>
        <small>Copyright &copy; Aori</small>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./assets/js/script2.js"></script>
</body>
</html>