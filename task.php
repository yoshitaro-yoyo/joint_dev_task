<?php

# 課題の回答は このファイル をご利用下さい。
# 回答の出力を確認される際は，「php task.php」をターミナルから実行して下さい。

/*
 *print("#####q1#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

  # 以下に回答を記載
  array_push($names,"斎藤");
    print_r($names);

echo PHP_EOL;

print("#####q2#####".PHP_EOL);
$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

  # 以下に回答を記載
  $array = array_merge($array1,$array2);
    print_r($array);

echo PHP_EOL;

print("#####q3#####".PHP_EOL);
# 以下に回答を記載

//２つとも悩んで同時並行で出来たので
//プログラムを２つ回答しています。宜しくお願いします

$counted = [];
$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9];

 foreach($numbers as $duplicate) {
    if($duplicate === 3) {
      $counted[] = 1;
    }
    $quantity = count($counted);
   
  }
  print($quantity);

  echo PHP_EOL;

$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9];
$duplicate = 0;
  foreach($numbers as $number) {
    if ($number === 3) {
      $duplicate++;
    }
  }
  print($duplicate);

  echo PHP_EOL;



print("#####q4#####".PHP_EOL);
$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];

  # 以下に回答を記載
$sports_del_null = array_filter($sports);
$new_sports = array_values($sports_del_null);
  print_r($new_sports);

//以下のプログラムの挙動が理解できません。67-68はコピペしたものを改変しました
//array_search()で値を見つけて、unset()で元の配列から削除はわかるのですが
//while・厳密判定、など意味がわかりません。質問スレッドに投稿したほうがよろしいでしょうか？


while( ($index = array_search( null, $sports, true )) !== false ) {
	unset( $sports[$index] ) ;
	}
$new_sports = array_values($sports);
  print_r($new_sports);
  
echo PHP_EOL;
*/

print("#####q5#####".PHP_EOL);
$array1 = [];
$array2 = [1, 5, 8, 10];

  # 以下に回答を記載
  if (empty($array1)) {
    print("true" . "\n");
  } 
  if (!empty($array2)) {
    print("false");
  }  
echo PHP_EOL;


print("#####q6#####".PHP_EOL);
$numbers1 = [1, 2, 3, 4, 5];
# 以下に回答を記載

$numbers2 = [];
  foreach($numbers1 as $numbers) {
   if($numbers1 >= 1) {
    $numbers2[] = $numbers * 10;
   }
  }
  print_r($numbers2);

echo PHP_EOL;

print("#####q7#####".PHP_EOL);
$array = ["1", "2", "3", "4", "5"];

    # 以下に回答を記載
  //参照渡しを行う ＆ を変数の前に付ける
  foreach($array as &$integer) {
    $integer = intval($integer);
  }
    print_r($array);
  //配列の最後の要素の参照を消す
    unset($array);
  //print_rでは空の要素は返ってこないので確認はvar_dumpでNull
  
  echo PHP_EOL;


print("#####q8#####".PHP_EOL);
$programming_languages = ["php","ruby","python","javascript"];

  # 以下に回答を記載
  $programming_languages = array_map('ucfirst',$programming_languages);
  $upper_case_programming_languages = array_map('strtoupper',$programming_languages);
  
  # 以下は変更しないで下さい
  print_r($programming_languages);
  print_r($upper_case_programming_languages);

echo PHP_EOL;

//array_map() 各要素に callback を適用した後、 適用後の要素を含む array を返す。

echo PHP_EOL;

print("#####q9#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

  # 以下に回答を記載
 $names2 = [];
  foreach($names as $key => $name) {
   $number = $key + 1;
   $name2 = "会員No." .$number." ". $name;
   array_push($names2,$name2);
 }
print_r($names2);

echo PHP_EOL;

print("#####q10#####".PHP_EOL);
$foods = ["いか","たこ","うに","しゃけ","うにぎり","うに軍艦","うに丼"];

  # 以下に回答を記載
  foreach($foods as $food) {
      //正規表現にてマッチング 弟二パラメータは文字列
   if(preg_match('/うに/', $food)) {
     print("好物です"."\n");
   } else {
     print("まぁまぁ好きです". "\n");
   }
  }
echo PHP_EOL;

print("#####q11#####".PHP_EOL);
$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];

  # 以下に回答を記載
  $sports_primary = [];
  foreach($sports as $key => $sport) {
    
    if(is_array($sport)) {
        //is_array 変数が配列かどうかを検査する
      $sports_primary = array_merge($sports_primary, $sport);
        //配列があれば$sports_primaryにmerge
    } else {
      array_push($sports_primary,$sport);
        //なければ$sports_primaryに文字列として配列の最後に追加
    }
  }
  $sports_primary = array_unique($sports_primary);
  $sports_primary = array_values($sports_primary);

  $sports_primary_val = [];
  foreach($sports_primary as $key => $sport_primary) {
    $number = $key + 1;
    $name = ("No". $number. " ". $sport_primary);
    array_push($sports_primary_val, $name); 
  }
  
  print("ユーザーの趣味一覧". "\n");
  foreach($sports_primary_val as $sport_primary_val) {
    print($sport_primary_val. "\n");
  }

echo PHP_EOL;

print("#####q12#####".PHP_EOL);
$data = [ "user" => [ "name" => "satou", "age" => 33 ] ];

  # 以下に回答を記載
  print_r($data["user"]["name"]);

echo PHP_EOL;

print("#####q13#####".PHP_EOL);
$user_data = [ "name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = [ "age" => 32, "address" => "沖縄" ];

  # 以下に回答を記載
$merge_data = [];
$merge_data = array_merge($user_data, $update_data);

print_r($merge_data);

echo PHP_EOL;

print("#####q14#####".PHP_EOL);
$data = [ "name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com" ];

  # 以下に回答を記載
$arrays_key = array_values($data);
print_r($arrays_key);

echo PHP_EOL;

print("#####q15#####".PHP_EOL);
$data1 = [ "name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin" ];
$data2 = [ "name" => "yamada", "hobby" => "baseball", "role" => "normal" ];

  # 以下に回答を記載
  var_export(array_key_exists('age', $data1));
  print("\n");
  var_export(array_key_exists('age', $data2));

  echo PHP_EOL;

print("#####q16#####".PHP_EOL);
$users = [
  [ "name" => "satou", "age" => 22 ],
  [ "name" => "yamada", "age" => 12 ],
  [ "name" => "takahashi", "age" => 32 ],
  [ "name" => "nakamura", "age" => 41 ]
];

  # 以下に回答を記載
  foreach($users as $user) {
    print_r("私の名前は". $user["name"]. "です。年齢は". $user["age"]. "歳です。". "\n");
  }
echo PHP_EOL;
/*
print("#####q17#####".PHP_EOL);
class User
{

  # コードを追加

}

$user1 = new User("神里",32,"男");
$user2 = new User("あじー",32,"男");

$user1->info();
print("-------------".PHP_EOL);
$user2->info();

echo PHP_EOL;

print("#####q18#####".PHP_EOL);

  # コードを追加

$man1 = new Man("あじー",32);
$man2 = new Man("ゆたぼん",10);

$man1->introduce();
$man2->introduce();

echo PHP_EOL;

print("#####q19#####".PHP_EOL);
class Item{
  # 以下を修正して下さい

  protected $name;

  function __construct($book_name){
    $this->name = $book_name;
  }
}
  # 以下は変更しないで下さい

$book = new Item("ゼロ秒思考");
print($book->name.PHP_EOL);

echo PHP_EOL;

print("#####q20#####".PHP_EOL);
class Human
{

  # コードを追加

}

class Zoo
{
    
  # コードを追加
    
}

$zoo = new Zoo("旭山動物園",[ "infant" => 0, "children" => 400, "adult" => 800, "senior" => 500]);

$human1 = new Human("たま",3);
$human2 = new Human("ゆたぼん",10);
$human3 = new Human("あじー",32);
$human4 = new Human("ぎん",108);

$humans = [ $human1, $human2, $human3, $human4 ];

foreach($humans as $human){
  $zoo->info_entry_fee($human);
}

echo PHP_EOL; */
?>