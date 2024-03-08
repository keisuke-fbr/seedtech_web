<?php

    class Datebase{

        //データベース接続
        function connect(){
            //データベース接続
            $dsn = 'mysql:dbname=game-results;host = localhost';
            $user = 'root';
            $password = '';
            $dbh = new PDO($dsn, $user, $password);
            $dbh->query('SET NAMES UTF8MB4');
            
            return $dbh;
        }


        //データベースに保存
        function store($input){
            $dbh = $this->connect();
            $stmt = $dbh->prepare('INSERT INTO result SET game_name=?, date=?, team1=?, team1_score = ?, team2 = ?, team2_score = ?, scorer1 = ?, scorer2 = ?, scorer3 = ?,scorer4 = ?,scorer5 = ?');
            $stmt->execute([$input["game_name"],$input["date"],$input["team1"],$input["team1_score"],$input["team2"],$input["team2_score"],$input["scorer1"],$input["scorer2"],$input["scorer3"],$input["scorer4"],$input["scorer5"]]);
        }

        //データの取得
        function all(){
            $sql = 'SELECT * FROM result';
            $dbh = $this->connect();
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $records;
        }

        //1つの記録を入手
        function find($id){
            $dbh = $this->connect();
            $stmt = $dbh->prepare("SELECT * FROM result WHERE id = ?");
            $stmt->execute([$id]);
            $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $records;
        }


        //データベースの更新
        function update($input){
            $dbh = $this->connect();
            $stmt = $dbh->prepare('UPDATE result SET game_name=?, date=?, team1=?, team1_score = ?, team2 = ?, team2_score = ?, scorer1 = ?, scorer2 = ?, scorer3 = ?,scorer4 = ?,scorer5 = ? WHERE id=?');
            $stmt->execute([$input["game_name"],$input["date"],$input["team1"],$input["team1_score"],$input["team2"],$input["team2_score"],$input["scorer1"],$input["scorer2"],$input["scorer3"],$input["scorer4"],$input["scorer5"],$input["id"]]);
        }
    }




?>