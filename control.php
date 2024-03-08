
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理者画面</title>
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/control.css">
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
        <h1>試合記録入力</h1>
        <form method="POST" action="./confirm.php">
            <div class="container">
                <div>
                    <h1>大会名</h1>
                    <select name="game_name" id="game_select">
                        <option value="">試合を選択</option>
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

                <div>
                    <h1>日付</h1>
                    <input type="date" name="date" value="">
                </div>

                <div>
                    <h1>ホームチーム</h1>
                    <input type="text" name="team1" value="青理">
                </div>

                <div>
                    <h1>ホームチーム得点</h1>
                    <input type="number" name="team1_score" value="">
                </div>

                <div>
                    <h1>アウェイチーム</h1>
                    <input type="text" name="team2" value="">
                </div>

                <div>
                    <h1>アウェイチーム得点</h1>
                    <input type="number" name="team2_score" value="">
                </div>

                <div>
                    <h1>得点者1</h1>
                    <input type="text" name="scorer1" value="">
                </div>

                <div>
                    <h1>得点者2</h1>
                    <input type="text" name="scorer2" value="">
                </div>

                <div>
                    <h1>得点者3</h1>
                    <input type="text" name="scorer3" value="">
                </div>

                <div>
                    <h1>得点者4</h1>
                    <input type="text" name="scorer4" value="">
                </div>

                <div>
                    <h1>得点者5</h1>
                    <input type="text" name="scorer5" value="">
                </div>

                <input type="submit" value="送信">
            </div>
        </form>


        <a href="./edit.php" class="edit_btn">試合を編集する</a>
    </main>

    <footer>
        <small>Copyright &copy; Aori</small>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./assets/js/script2.js"></script>
</body>
</html>