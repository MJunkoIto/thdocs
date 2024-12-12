<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    // クラスを定義する
    class Food
    {
      // プロパティを定義する
      private $name;
      private $price;

      // コンストラクタを定義する
      public function __construct(string $name, int $price)
      {
        $this->name = $name;
        $this->price = $price;
      }
      
      // メソッドを定義する
      public function show_price(){
        echo $this->price . '<br>';
      }

      // 名前を表示するメソッドを追加
      public function show_name(){
        echo $this->name . '<br>';
      }
    }

    // インスタンス化する
    $food = new Food('potato', 250);

    // メソッドにアクセスしメソッドを実行
    $food->show_name();  // 名前を表示
    $food->show_price(); // 価格を表示

    // クラスを定義する
    class Animal
    {
      private $name;
      private $weight;
      private $height;

      // コンストラクタを定義する
      public function __construct(string $name, int $weight, float $height)
      {
        $this->name = $name;
        $this->weight = $weight;
        $this->height = $height;
      }
      
      // メソッドを定義する
      public function show_height(){
        echo $this->height . '<br>';
      }

      // 名前を表示するメソッドを追加
      public function show_name(){
        echo $this->name . '<br>';
      }
    }

    // インスタンス化する
    $animal = new Animal('dog', 60, 50.0);

    // メソッドにアクセスしメソッドを実行
    $animal->show_name();  // 名前を表示
    $animal->show_height(); // 高さを表示
    ?>
  </p>
</body>
</html>
