<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>課題_011</title>
</head>

  <body>
  <p>
    <?php
    $vesitable_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

    // 連想配列$vesitable_dataのキーと値を１つずつ順番に出力する
       foreach ($vesitable_data as $key => $value) {
       echo "{$key} : {$value} <br>"; 
    }
    ?>
   </p> 

  </body>

</html>