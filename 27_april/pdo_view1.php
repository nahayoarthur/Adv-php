<?php
$host = '127.0.0.1';
$db = 'school2022';
$user ='root';
$pass = '';
$charset = 'utf8mb4';
$table = 'student';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [//optional
    PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES =>false,];
    try{
        $pdo= new PDO($dsn,$user,$pass,$options);
        //print_r($pdo);
        
        $stmt= $pdo->prepare('SELECT * FROM student WHERE sn=?');
        $stmt->execute([4]);
        $stud = $stmt->fetch();
        print_r($stud);

    }
    catch(PDOException $e){
        throw new PDOException($e->getMessage(). (int)$e->getCode());
    }
