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
        foreach($pdo->query("SELECT * FROM $table")as $row){
            echo "SN  is: ".$row['sn']." and their information are: ".$row['std_fname']." ".$row['std_lastname']." year: ".$row['std_year_of_study']." ".$row['std_regno']."<br>";
        }
    }
    catch(PDOException $e){
        throw new PDOException($e->getMessage(). (int)$e->getCode());
    }
