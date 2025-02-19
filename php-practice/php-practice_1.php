<?php
// Q1 変数と文字列
$name = '「藤沢」';
echo '私の名前は'.$name.'です。';

// Q2 四則演算
$x = 5;
$y = 4;

$num = $x * $y;
$Num = $num / 2 ;
echo $num."\n".$Num;

// Q3 日付操作
echo '現在時刻は、'.date('Y年m月d日 H時i分s秒').'です。';

// Q4 条件分岐-1 if文
$device = 'Windows';

if($device == 'Windows') {
    echo '使用OSは、Windowsです。';
    goto end;
}
if($device == 'mac') {
        echo '使用OSは、macです。';
}else {
    echo 'どちらでもありません';
}
end:

// Q5 条件分岐-2 三項演算子
$age = 21;

$message = ($age < 18) ? '未成年です。':'成人です。';

echo $message;

// Q6 配列
$prefectures_list = [
  '東京都',
  '埼玉県',
  '神奈川県',
  '栃木県',
  '千葉県',
  '群馬県',
  '茨城県'
];

echo ''.$prefectures_list[3].'と'.$prefectures_list[4].'は関東地方の都道府県です。';

// Q7 連想配列-1
$prefectures_list = [
  '東京都'=>'新宿区',
  '神奈川県'=>'横浜市',
  '千葉県'=>'千葉市',
  '埼玉県'=>'さいたま市',
  '栃木県'=>'宇都宮市',
  '群馬県'=>'前橋市',
  '茨城県'=>'水戸市'
];

foreach ($prefectures_list as $x) {
  echo $x."\n";
}

// Q8 連想配列-2
$prefecture = '埼玉県';

foreach ($prefectures_list as $x=>$y) {
    if($x == $prefecture) {
       echo $prefecture.'の県庁所在地は、'.$prefectures_list[$prefecture].'です。';
    }
}

// Q9 連想配列-3
$prefectures_list['愛知県'] = '名古屋市';
$prefectures_list['大阪府'] = '大阪市';
    
foreach ($prefectures_list as $x=>$y) {
    if(in_array($x, ['愛知県', '大阪府'])) {
        echo $x . 'は関東地方ではありません。' . "\n";
    }else{
    echo $x.'の県庁所在地は、'.$y.'です。'."\n";
    }
}

// Q10 関数-1
function hello($name) {
    echo $name.'さん、こんにちは。'."\n";
}

hello('金谷');
hello('安藤');

// Q11 関数-2
function calcTaxInPrice($price) {
  $taxInPrice = $price * 1.1;
  return  $price.'円の商品の税込価格は'.$taxInPrice.'円です。';
}

echo calcTaxInPrice(1000);

// Q12 関数とif文
function distinguishNum($num) {
    if($num / 2 === 1) {
        echo $num.'は奇数です。'."\n";
    }else {
        echo $num.'は偶数です。'."\n";
    }
}

distinguishNum(9);
distinguishNum(20);

// Q13 関数とswitch文
function evaluateGrade($grades) {
    switch($grades) {
        case 'A':
        case 'B':
            echo '合格です。'."\n";
            break;
        case 'C':
            echo '合格ですが追加課題があります。'."\n";
            break;
        case 'D':
            echo '不合格です。'."\n";
            break;
        default:
            echo '判定不明です。講師に問い合わせてください。'."\n";
            break;
            
    }
}

evaluateGrade('B');
evaluateGrade('F');

?>