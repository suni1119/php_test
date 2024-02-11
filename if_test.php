<?php

$age = '17';
if ($age >= '18'){
    echo 'あなたは成人です。';
    }

if ($age <= '18'){
        echo 'あなたは未成年です。';
    }

    // 90以上なら"A"、80以上90未満なら"B"、70以上80未満なら"C"、
    // 60以上70未満なら"D"、60未満なら"F"

$point = '62';
if ($point >= '90'){
    echo 'A';
    } else if($point >= '80'){
        echo 'B';
    } else if ($point >= '70'){
        echo 'C';
    } else if($point >= '60'){
        echo 'D';
    } else if($point <=60){
        echo 'F';
    }
    
// 映画館に入るには、年齢が13歳以上であり、かつお金が1000円以上必要です。
// この条件を満たす場合は「映画を見ることができます。」と表示し、
// そうでない場合は「映画を見ることができません。」

// &&はどちらも条件を満たしていないとダメ
// ||はどちらかが条件を見たいしていればok

$age = 12;
$money = 1000;
if ($age >= 13 && $money >= 1000) {
    echo '映画を見ることができます。';
    } else {
        echo '映画をも見ることができません。';
    }

// ユーザー名が"admin"で、パスワードが"password123"の場合のみ、「ログイン成功！」
// ユーザー名かパスワードのどちらが間違っているかに応じて、
// 「ユーザー名が間違っています。」または「パスワードが間違っています。」

$user = 'admin1';
$password = 'password12';
if ($user === 'admin' || $password === 'password123') {
    if ($user === 'admin' && $password === 'password123') {
        echo 'ログイン成功！';
    }
    
    if ($user !== 'admin') {
        echo 'ユーザー名が違います。';
    }

    if ($password !== 'password123') {
        echo 'パスワードが間違っています。';
    }
    if ($user !== 'admin' && $password !== 'password123'){
        echo 'ユーザー名とパスワードが間違っています。';
    }
} 



$admin = "admin1";
$password = "a1";

if ($admin === "admin" || $password === "a") {
    if ($admin !== "admin") {
        echo "ユーザーが違います";
    }

    if ($password !== "a") {
        echo "パスが違います";
    }

    if ($admin === "admin" && $password === "a") {
        echo "ログイン成功";
    }
} 

if ($admin !== "admin" || $password !== "a") {
    if ($admin !== "admin") {
        echo "ユーザーが違います";
    }

    if ($password !== "a") {
        echo "パスが違います";
    }
}



