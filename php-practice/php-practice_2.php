<?php
// Q1 tic-tac問題
echo '1から100までのカウントを開始します。'."\n"."\n";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 == 0 and $i % 5 == 0) {
        echo 'tic-tac'."\n";
    } elseif ($i % 4 == 0) {
        echo 'tic'."\n";
    } elseif ($i % 5 == 0) {
        echo 'tac'."\n";
    } else {
        echo $i."\n";
    }
}

// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];
//問題1
echo $personalInfos[1]['name'].'さんの電話番号は'.$personalInfos[1]['tel'].'です。';
//問題2
foreach ($personalInfos as $x=>$y) {
  echo ($x+1).'番目の'.$y['name'].'のメールアドレスは'.$y['mail'].'で、電話番号は'.$y['tel'].'です。'."\n";
}
//問題3
$ageList = [25, 30, 18];

foreach ($personalInfos as $key=> &$val) {
   $val['age'] = $ageList[$key];
}

var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
        echo '学籍番号'.$id.'番の生徒は'.$name.'です。';
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$student = new Student('31','藤沢');

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($subject)
    {
        echo $this->studentName.'は'.$subject.'の授業に出席しました。'.'学籍番号'.$this->studentId;
    }
}
$yamada = new Student(120, '山田');
$yamada->attend('PHP');


// Q5 定義済みクラス

$DateTime = new DateTime;
$DateTime->modify('-1 years');
echo $DateTime->format('Y-m-d H:i:s');

$datetime1 = new DateTime('2025-2-19');
$datetime2 = new DateTime('1992-4-25');

$interval = $datetime1->diff($datetime2);
echo 'あの日から'.($interval->format('%a日')).'経過しました。';
?>