<?php

'こんにちは';
"こんにちは";

echo(123);
echo('<br>');
echo('こんにちは');
echo('<br>');
echo('こんば""んは');
echo('<br>');
//brは改行←文字として扱われる
echo('はじめまして');
echo('<br>');
echo(456);
//コメントアウト(1行)
#コメントアウト
/*複数行のコメントアウトは
スラコメコメスラでかこむ
*/
?>

<?php

//セクション1ｰ8
//変数　文字は''が必要
//intは数字、stringは文字
$test = 123;
//$test = 456;
//echo('<br');
$test = 'テスト';
var_dump($test);
/*どういうデータ型が入っているのか
わからなくなった時確認に便利なコード*/
//phpの変数は先頭は必ず英文字orアンダーバー、数字はng
?>

<?php
$test_1 = 123;
$test_2 = 456;

$test_3 = $test_1 . $test_2;
/*変数を2つくっつける場合は文字として認識される
変数を書くときは意味の分かりやすい名詞(英語)でか書く

*/
?>

<?php
//セクション1ｰ10
//定数 大文字で書くことが多い
//文字の場合は''を付ける
const MAX = 10;
echo MAX;
echo('<br>');


//セクション1-11 配列,数字も文字も可能⇒数字と値がセット
//プログラミングは0から始まる
//↓1行の場合
$array = ['あ',2,3];

$array_2 = [
    ['赤','青','黄'],
    ['緑','紫','黒']
];

echo $array[1];
//↓まとめて配列の中身が見たいときvar_dump
//配列を縦にしたいときpreではさむ
echo '<pre>';
var_dump($array_2);
echo '</pre>';

echo $array_2[1][1];

/*連想配列はキーと値がセット
キー⇒値
key⇒value
キーは文字になるから''で囲む
値はコンマで1つずつ区切る
*/

$array_member = [
    'name' => '本田',
    'height' => 170,
    'hobby'=> 'サッカー'
];
echo $array_member['hobby'];

$array_member_2 = [
    '本田' => [
        'height' => 170,
        'hobby' => 'サッカー'
    ],
    '香川' => [
        'height' => 165,
        'hobby' => 'サッカー'
    ]
];

echo $array_member_2['香川']['height'];
echo '<pre>';
var_dump($array_member_2);
echo '</pre>';

$array_member_3 = [
    '1kumi' => [
        '本田' =>[
            'height' => 170,
            'hobby' => 'サッカー'
        ],
        '香川' => [
            'height' => 165,
            'hobby' => 'サッカー'
        ]
    ],
    '2kumi' => [
        '長友' => [
            'height' => 160,
            'hobby' => 'サッカー'
        ],
        '乾' => [
            'height' => 168,
            'hobby' => 'サッカー'
        ]
    ]
    
];
echo $array_member_3['2kumi']['長友']['height'];

echo '<pre>';
var_dump($array_member_3);
echo '</pre>';

//階層を深めていくことになれる

?>

