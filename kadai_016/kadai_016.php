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
    }

    // インスタンス化する
    $food = new Food('potato', 250);
    //メソッドにアクセスしメソッドを実行
    $food->show_price();

    print_r($food);
    echo '<br>';

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
        echo $this->height.'<br>';
      }
    }
    // インスタンス化する
    $animal = new Animal('dog', 5000, 60);
    //メソッドにアクセスしメソッドを実行
    $animal->show_height();

    print_r($animal);
    echo '<br>';

    ?>
  </p>
  </body>

</html>