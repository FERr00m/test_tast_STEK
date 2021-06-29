<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php

  /* 1. 
   * Вывести все простые числа из последовательности от 0 до 100. 
   * (Простое число делится только на себя и единицу).
   */ 

  echo '<h2>Вывести все простые числа из последовательности от 0 до 100</h2>';
  for ($i = 0; $i < 100; $i++) {
    $counter = 0;
    for ($j = 1; $j <= $i; $j++) {
      if ($i % $j == 0) {
        $counter ++;
        if ($counter > 2) {
          break;
        }
      }
    }
    if ($counter == 2) {
      echo "Простое число: $i" . '<br>';
    }
  }

  /* 2. Написать функцию которая возвращает самое больше число в массиве.
 * Пример входных данных:
 * Получает: [0, 2, 5, 7, 1];
 * Возвращает: 7;
 */

  echo '<h2>Функцию которая возвращает самое больше число в массиве</h2>';

  $arr = [0, 2, 5, 7];

  function bigestNumber($arr) {
    return max($arr);
  }

  echo bigestNumber($arr);


  /* 3. Написать функцию получающую на вход строку длинной не более 100 символов
  * и заменяющую в этой строке символ пробела на "%20", 
  * а все Прописные буквы на строчные.
  */

  echo '<h2>Функцию которая заменяет в строке символ пробела на "%20", а все Прописные буквы на строчные</h2>';

  $str = "HelLo, wOrLD!";

  function foo($str) {
    if (strlen($str) > 100) {
      return 'Строка больше 100 символов';
    }

    return str_replace(' ', '%20', strtolower($str));

  }

  echo foo($str);
?>
</body>
</html>

