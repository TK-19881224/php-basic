<!DOCTYPE html>
<html lang="ja">

<haed>
  <meta charsert="UTF-8">
  <title>PHP基礎編</title>
</haed>

<body>
  <p>
    <?php
     $user_name = '侍花子';
      function show_user_name(){
        $user_name = '侍太郎';
        echo $user_name.'<br>';
      }
      show_user_name();
      
      echo $user_name;
    ?>
  </p>
</body>

</html>