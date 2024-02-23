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

//セクション1-15演算子(四則演算子、比較演算子、論理演算子)
//%は割り算のあまり
$test_1 = 5;
$test_2 = 3;
$test_3 = $test_1 % $test_2;
echo $test_3;

echo('<br>');

/*if (条件){
    条件が真なら実行
}
条件⇒青信号なら｛前に進む｝*/
$height = 90;
//if ($height == 90){
//    echo '身長は' . $height . 'cmです';
//}

//== 一致すれば
//=== 型も一致
/*$height = '90'; //''を付けると文字になる
if ($height === 90){ //条件は数字
    echo '身長は' . $height . 'cmです';
}
//phpは文字だと計算ができなくなる
//できれば===を使う
*/
/*if(条件){
    条件が真なら実行
} else{
    条件が偽なら実行
}*/
if ($height === 91){
    echo '身長は' . $height . 'cmです';
}else{
    echo '身長は' . $height . 'cmではありません';
}

$signal = 'blue';
if ($signal=== 'blue'){
    echo 'とまれ';
} else if($signal === 'yellow'){
    echo '一旦停止';
} else {
    echo '進む';
}
echo '<br>';
$speed = 80;
if ($signal === 'blue'){
    if ($speed >= 80){
        echo 'スピード違反';
    }
}
/*ifの中にifはネストと言う
ifの中にifやelseを入れると読みづらくなるので
できるだけif文単体で書くようにする
*/

$age = '18';
if ($age >= '18'){
    echo 'あなたは成人です。';
    }

if ($age <= '18'){
        echo 'あなたは未成年です。';
    }

    
echo ('<br>'); 


// ---------------------------------------------pull requestの練習---------------------------------

// --------------foreach セクション1ｰ19--------------------------------
// foreach セクション1ｰ19 複数の値を展開したり表示したりする
// 変数を書くときは複数形と単数形で書くとわかりやすい

$members = [
    'name' => '本田',
    'height' => '170',
    'hobby' => 'サッカー'
];

// バリューのみの表示
foreach ($members as $member) {
    echo $member;
}
echo ('<br>');
// キーとバリューそれぞれの配置
foreach ($members as $key => $value){
    echo $key . 'は' . $value. 'です';
}
echo ('<br>');


// --------------------------------------

//多段階の配列を展開する場合foreachの中にforeachを使う
$members_2 = [
    '本田' => [
    'height' => 170,
    'nobby' => 'サッカー'
    ],
    '香川' => [
        'height' => 165,
        'nobby' => 'サッカー'
    ]
];
foreach ($members_2 as $member_1) {
    foreach ($member_1 as $member => $value) {
        echo $member . 'は' . $value . 'です。';
    }
}

// -----------foreach セクション1ｰ20--------------------

// for1繰り返す数が決まっていれば
// while繰り返す数が決まっていなかったら
echo ('<br>');

for ($i = 0; $i < 10; $i++ ){
    if ($i === 5){
       // break;
    continue;
    }
    echo $i;
}
echo ('<br>');
$j = 0;
while ($j < 5) {
    echo $j;
    $j++;
}

do {echo $j;}
while ($j <5);

echo ('<br>');

$data = 1;

switch ($data) {
    case 1:
        echo '1です';
        break;
    case 2:
        echo '2です';
        break;
    case 3:
        echo '3です';
        break;
    default:
        echo '1-3ではありません';
}
echo ('<br>');
//------------------------------------------------------

//セクション1-22 定数関数その1
//関数 function

//function test (引数インプット) {
 //処理
    //return 戻り値;
//}

//---引数なし、アウトプットなし

function test () {
    echo 'テスト';
}

test ();

//----------引数あり、アウトプットなし
function getComment ($string) {
    echo $string;
}

getComment('コメント');


$comment = 'コメント2';

//-------インプット引数なし
//-------アウトプット戻り値あり
function getNumberOfComment () {
    return 5;
}

$commentNumber = getNumberOfComment();
echo getNumberOfComment();
echo $commentNumber;

//引数2つ
//戻り値あり

function sumPrice ($int1, $int2) {
    $int3 = $int1 + $int2;
    return $int3;
}

$total = sumPrice(3,5);
echo $total;
echo ('<br>');
//-----------------------------------------------------
//セクション1ｰ25　文字列関数
//文字列の長さ
$text = 'abc';
echo strlen ($text);

$text = 'あいうえお';
//echo strlen ($text);

echo mb_strlen($text);

//文字列の置換

$str = '文字列を置換します';
echo str_replace ('置換','ちかん',$str);

//指定文字列で分割,引数は2つ
$str_2 = '指定文字列で、分割します';
explode ('、' , $str_2);

//implode
//正規表現⇒文字かどうか、数字かどうか
// 郵便番号、メアド test@gmail.com の@や.があるかどうかの確認
$str_3 = '特定の文字列が含まれるか確認する';
echo preg_match ('/文字列/',$str_3);

echo ('<br>');

// 指定文字列から文字列を取得する

echo substr ('abcde', 2);
echo mb_substr ('かきくけこ', 2);


//配列に配列を追加する
$array = ['リンゴ','みかん'];
array_push ($array,'ブドウ','梨'); 
echo ('<br>');

$postalCode = '123-4567';

function checkPostalCode ($str) {
    $replaced = str_replace ('-','','$str');
    $length = strlen ($replaced);

    var_dump ($length);
    if ($length === 7) {
        return false;
    }
    return false;
}

var_dump (checkPostalCode($postalCode));


//camelCase
//checkPostalCode()

//snakeCase
//check_postal_code()

$globalVariable = 'グローバル変数です';

function checkScope ($str){
    $localVariable = 'ローカル変数です';
    //global $globalVariable;
    echo $str;
}

echo $globalVariable;
echo $localVariable;

checkScope ($globalVariable);


require __DIR__ . '/common/common.php';

echo $commonVariable;

echo __FILE__;

commonTest();

?>


