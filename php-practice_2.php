<?php
// Q1 tic-tac問題
// 1から100までの数字について以下の条件に沿って表示してください。
// 条件
// 1から100までの数字について処理を実行する。
// 4の倍数のときは tic を出力。
// 5の倍数のときは tac を出力。
// 4の倍数かつ5の倍数のときは tic-tac を出力。
// 上記以外の数のときはそのままその数字を出力する。
// 出力結果が以下の通り縦に並ぶようにしてください。

for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 === 0 && $i % 5 === 0) {
        echo "tic-tac\n";
    } elseif ($i % 4 === 0) {
        echo "tic\n";
    } elseif ($i % 5 === 0) {
        echo "tac\n";
    } else {
        echo $i . "\n";
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

// Bさんの電話番号は08033334444です。と表示
echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';


// 1番目のAさんのメールアドレスはaaa@mail.comで、電話番号は09011112222です。
// 2番目のBさんのメールアドレスはbbb@mail.comで、電話番号は08033334444です。
// 3番目のCさんのメールアドレスはccc@mail.comで、電話番号は09055556666です。
foreach ($personalInfos as $order => $Infos) {
    echo ($order + 1).'番目の' .$Infos['name'] . 'のメールアドレスは' . $Infos['mail'] . 'で、電話番号は'. $Infos['tel'].'です。' . "\n";
}

// $ageListを使用して、$personalinfosに age というKeyに対して$ageListのそれぞれの年齢をValueとして追加してください。
// その際は、foreachを使用してください。
// 追加ができたらvar_dumpを使用して配列の中身を確認してください。

$ageList = [25, 30, 18];

foreach ($personalInfos as $order => $infos) {
    $personalInfos[$order]['age'] = $ageList[$order];
}
var_dump($personalInfos);

// Q3 オブジェクト-1
// 条件
// studentIdプロパティは正の整数を設定してください。
// nameプロパティは任意の値を設定してください。

// 出力例
// 学籍番号120番の生徒は山田です。

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

     public function introduce()
    {
        echo '学籍番号'.($this->studentId).'番の生徒は'.($this->studentName).'です。'. "\n";
    }
}

$student = new Student(120, '山田');
$student->introduce();

// Q4 オブジェクト-2
// 出力例
// 山田はPHPの授業に参加しました。学籍番号：120
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
        echo ($this->studentName).'は'.($subject).'の授業に参加しました。学籍番号：'.($this->studentId)."\n";
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
// DateTimeという定義済みのクラスを使用して、以下の問題通りの処理を書きましょう。
// 問題:1ヶ月前の日付を表すDateTimeインスタンスを作成し、出力結果と同じフォーマットで出力しましょう。
// 出力結果(2021年3月2日の場合)
// 2021-03-02
$date = new DateTime('2025-06-10');
echo $date->format('Y年m月d日');

// 問題2
// 今日の日付と1992年4月25日との日付の差を計算して、総日数を出力しましょう。
// 出力結果(2021年3月2日の場合)
// あの日から10538日経過しました。

$start = new DateTime('1992-04-25');
$end = new DateTime('2025-07-10');
$diff = $start->diff($end);

echo 'あの日から'. $diff->days . '日経過しました。'. "\n";

?>