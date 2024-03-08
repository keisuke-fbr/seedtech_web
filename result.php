<?php


//データベース接続
$dsn = 'mysql:dbname=game-results;host = localhost';
$user = 'root';
$password = '';
$dbh = new PDO($dsn, $user, $password);
$dbh->query('SET NAMES UTF8MB4');

//データの取得
$sql = 'SELECT * FROM result';
$stmt = $dbh->prepare($sql);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/result.css">
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

                <?php foreach(array_reverse($records,TRUE) as $record): ?>
                <div class="match">
                    
                    <div class="competition">
                        <div class="league">
                            <h1>大会名</h1>
                            <h1>:</h1>
                            <h1><?php echo $record["game_name"]?></h1>
                        </div>
                        <div class="date">
                            <h1>日付</h1>
                            <h1>:</h1>
                            <h1><?php echo $record["date"]?></h1>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="score">
                            <h1><?php echo $record["team1"]?></h1>
                            <ul class="point">
                                <li><?php echo $record["team1_score"]?></li>
                                <li>-</li>
                                <li><?php echo $record["team2_score"]?></li>
                            </ul>
                            <h1><?php echo $record["team2"]?></h1>
                        </div>
                        <div class="who">
                            <h1>得点者</h1>
                            <ul>
                                <li><?php echo $record["scorer1"]?></li>
                                <li><?php echo $record["scorer2"]?></li>
                                <li><?php echo $record["scorer3"]?></li>
                                <li><?php echo $record["scorer4"]?></li>
                                <li><?php echo $record["scorer5"]?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endforeach?>



                <!-- <div class="match">
                    <div class="competition">
                        <div class="league">
                            <h1>大会名</h1>
                            <h1>:</h1>
                            <h1>理工リーグ</h1>
                        </div>
                        <div class="date">
                            <h1>日付</h1>
                            <h1>:</h1>
                            <h1>2/22</h1>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="score">
                            <h1>法政高体連</h1>
                            <ul class="point">
                                <li>1</li>
                                <li>-</li>
                                <li>2</li>
                            </ul>
                            <h1>青理</h1>
                        </div>
                        <div class="who">
                            <h1>得点者</h1>
                            <ul>
                                <li>小林</li>
                                <li>遠藤</li>
                            </ul>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="match">

                    <div class="competition">
                        <div class="league">
                            <h1>大会名</h1>
                            <h1>:</h1>
                            <h1>理工リーグ</h1>
                        </div>
                        <div class="date">
                            <h1>日付</h1>
                            <h1>:</h1>
                            <h1>2/22</h1>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="score">
                            <h1>法政高体連</h1>
                            <ul class="point">
                                <li>1</li>
                                <li>-</li>
                                <li>2</li>
                            </ul>
                            <h1>青理</h1>
                        </div>
                        <div class="who">
                            <h1>得点者</h1>
                            <ul>
                                <li>小林</li>
                                <li>遠藤</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="match">
                    <div class="competition">
                        <div class="league">
                            <h1>大会名</h1>
                            <h1>:</h1>
                            <h1>理工リーグ</h1>
                        </div>
                        <div class="date">
                            <h1>日付</h1>
                            <h1>:</h1>
                            <h1>2/22</h1>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="score">
                            <h1>法政高体連</h1>
                            <ul class="point">
                                <li>1</li>
                                <li>-</li>
                                <li>2</li>
                            </ul>
                            <h1>青理</h1>
                        </div>
                        <div class="who">
                            <h1>得点者</h1>
                            <ul>
                                <li>小林</li>
                                <li>遠藤</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="match">
                    <div class="competition">
                        <div class="league">
                            <h1>大会名</h1>
                            <h1>:</h1>
                            <h1>理工リーグ</h1>
                        </div>
                        <div class="date">
                            <h1>日付</h1>
                            <h1>:</h1>
                            <h1>2/22</h1>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="score">
                            <h1>法政高体連</h1>
                            <ul class="point">
                                <li>1</li>
                                <li>-</li>
                                <li>2</li>
                            </ul>
                            <h1>青理</h1>
                        </div>
                        <div class="who">
                            <h1>得点者</h1>
                            <ul>
                                <li>小林</li>
                                <li>遠藤</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="match">
                    <div class="competition">
                        <div class="league">
                            <h1>大会名</h1>
                            <h1>:</h1>
                            <h1>理工リーグ</h1>
                        </div>
                        <div class="date">
                            <h1>日付</h1>
                            <h1>:</h1>
                            <h1>2/22</h1>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="score">
                            <h1>法政高体連</h1>
                            <ul class="point">
                                <li>1</li>
                                <li>-</li>
                                <li>2</li>
                            </ul>
                            <h1>青理</h1>
                        </div>
                        <div class="who">
                            <h1>得点者</h1>
                            <ul>
                                <li>小林</li>
                                <li>遠藤</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="match">
                    <div class="competition">
                        <div class="league">
                            <h1>大会名</h1>
                            <h1>:</h1>
                            <h1>理工リーグ</h1>
                        </div>
                        <div class="date">
                            <h1>日付</h1>
                            <h1>:</h1>
                            <h1>2/22</h1>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="score">
                            <h1>法政高体連</h1>
                            <ul class="point">
                                <li>1</li>
                                <li>-</li>
                                <li>2</li>
                            </ul>
                            <h1>青理</h1>
                        </div>
                        <div class="who">
                            <h1>得点者</h1>
                            <ul>
                                <li>小林</li>
                                <li>遠藤</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="match">
                    <div class="competition">
                        <div class="league">
                            <h1>大会名</h1>
                            <h1>:</h1>
                            <h1>理工リーグ</h1>
                        </div>
                        <div class="date">
                            <h1>日付</h1>
                            <h1>:</h1>
                            <h1>2/22</h1>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="score">
                            <h1>法政高体連</h1>
                            <ul class="point">
                                <li>1</li>
                                <li>-</li>
                                <li>2</li>
                            </ul>
                            <h1>青理</h1>
                        </div>
                        <div class="who">
                            <h1>得点者</h1>
                            <ul>
                                <li>小林</li>
                                <li>遠藤</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="match">
                    <div class="competition">
                        <div class="league">
                            <h1>大会名</h1>
                            <h1>:</h1>
                            <h1>理工リーグ</h1>
                        </div>
                        <div class="date">
                            <h1>日付</h1>
                            <h1>:</h1>
                            <h1>2/22</h1>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="score">
                            <h1>法政高体連</h1>
                            <ul class="point">
                                <li>1</li>
                                <li>-</li>
                                <li>2</li>
                            </ul>
                            <h1>青理</h1>
                        </div>
                        <div class="who">
                            <h1>得点者</h1>
                            <ul>
                                <li>小林</li>
                                <li>遠藤</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="match">
                    <div class="competition">
                        <div class="league">
                            <h1>大会名</h1>
                            <h1>:</h1>
                            <h1>理工リーグ</h1>
                        </div>
                        <div class="date">
                            <h1>日付</h1>
                            <h1>:</h1>
                            <h1>2/22</h1>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="score">
                            <h1>法政高体連</h1>
                            <ul class="point">
                                <li>1</li>
                                <li>-</li>
                                <li>2</li>
                            </ul>
                            <h1>青理</h1>
                        </div>
                        <div class="who">
                            <h1>得点者</h1>
                            <ul>
                                <li>小林</li>
                                <li>遠藤</li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                

                

                
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