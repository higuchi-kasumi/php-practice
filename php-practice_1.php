<?php
// Q1 変数と文字列

$name = '樋口';

echo '私の名前は「' . $name . '」です。';

// Q2 四則演算

$num = 5 * 4;

echo $num . "\n";

$num = $num / 2;

echo $num;

// Q3 日付操作
echo '現在時刻は、' . date('Y年m月d日 H時i分s秒') . 'です。';

// Q4 条件分岐-1 if文
$device = 'mac';

if ($device === 'windows' || $device === 'mac' ){
    echo '使用OSは、' . $device . 'です。';
}else{
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 25;

$message = ($age < 18) ? '未成年です。' : '成人です。';

echo $message;

// Q6 配列
$place = ['新潟県','石川県','栃木県','兵庫県','熊本県','千葉県','北海道'];

echo $place[2] . 'と' . $place[5] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$place = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
];

foreach ($place as $x => $y){
    echo $y . "\n";
}

// Q8 連想配列-2
$place = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
];

foreach ($place as $x => $y) {
    if ($x === '埼玉県') {
        echo $x . 'の県庁所在地は、' . $y . 'です。';
    }
}

// Q9 連想配列-3
$place = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市',
    '大阪府' => '大阪市',
    '愛知県' => '名古屋市'
];
foreach ($place as $x => $y){
    if ($x === '愛知県' || $x === '大阪府') {
        echo $x . 'は関東地方ではありません。' . "\n";
    }else{
        echo $x . 'の県庁所在地は、' . $place[$x] . 'です。' . "\n";
    }
}

// Q10 関数-1
function hello($name)
{
    echo $name.'さん、こんにちは。' . "\n";
}

hello('濱宮');
hello('宮島');

// Q11 関数-2
$price = 1000;

function calcTaxInPrice($price)
{
    echo $price . '円の商品の税込価格は' . $price * 1.1 . '円です。';
}

calcTaxInPrice($price);

// Q12 関数とif文
function distinguishNum($num)
{
    if($num % 2 === 0){
        echo $num . 'は偶数です。' . "\n";
    }else{
        echo $num . 'は奇数です。' . "\n";
    }
}

distinguishNum(11);
distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($result)
{
    switch($result){
        case 'A':
        case 'B':
            return '合格です。';
        
        case 'C':
            return '合格ですが追加課題があります。';
        
        case 'D':
            return '不合格です。';
        
        default:
            return '判定不明です。講師に問い合わせてください。';
    }
}

$message = evaluateGrade('A');
echo $message;

$message = evaluateGrade('D');
echo $message;
