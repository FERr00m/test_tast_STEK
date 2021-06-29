'use strict';


/* 1. 
 * Вывести все простые числа из последовательности от 0 до 100. 
 * (Простое число делится только на себя и единицу).
 */ 


for (let i = 0; i < 100; i++) {
  let counter = 0;
  for (let j = 1; j <= i; j++) {
    if (i % j === 0) {
      counter++;
      if (counter > 2) {
        break;
      }
    }
  }
  if (counter === 2) {
    console.log(`Простое число: ${i}`);
  }
}

/* 2. Написать функцию которая возвращает самое больше число в массиве.
 * Пример входных данных:
 * Получает: [0, 2, 5, 7, 1];
 * Возвращает: 7;
 */

const arr = [0, 2, 5, 7]

function bigestNumber(arr) {
  return Math.max(...arr);
}

console.log(`Наибольшее число в массиве [${arr}]:`, bigestNumber(arr));

/* 3. Написать функцию получающую на вход строку длинной не более 100 символов
 * и заменяющую в этой строке символ пробела на "%20", 
 * а все Прописные буквы на строчные.
 */

const str = "HelLo, wOrLD!";

function foo(str) {
  if (str.length > 100) {
    return console.error(`Строка больше 100 символов`);
  }
  
  return str.toLowerCase().replace(' ', '%20');

}

console.log(foo(str));