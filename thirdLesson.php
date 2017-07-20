<?php
    $keysAfrika = ['Afrika'];
    $animals = [
        "Afrika" => ['firstWord secondWord','firstWord secondWord','word'],         /* создание многомерного массива  и заполнение его значениями */
        "America" => ['word','firstWord secondWord']
    ];
foreach($animals as $k=>$v){
    $a[$k] = preg_grep("~\s{1}~",$v);         /*Сортировка элементов массива(элемент должен состоять из 2 слов)*/
}
    echo "<pre>";
    print_r($a);

    $string = implode(" ",$a["Afrika"]);            /*Преобразование массоива в строку*/
    $string2 = implode(" ",$a["America"]);

    echo "$string<br>";
    echo "$string2";

    $example = (explode(" ", $string));          /*Преобразование строк в массив содержащий в каждом элементе отдельное слово*/
    $example2 = (explode(" ", $string2));

    echo "<pre>";
    print_r($example);
    print_r($example2);

    $example3 = array_merge($example,$example2);        /*создание общего массива */

    echo "<pre>";
    print_r($example3);

    $ex2;
    shuffle($example3);
    foreach ($example3 as $ex) {                        /*перемешивание слов в массиве*/
        echo"$ex ";
    }
    print_r($example3);

    $string3 = implode(" ",$example3);            /*Преобразование массоива в строку*/ё

    echo "$string3";

    $example4 = preg_split("/[a-zA-Z]+\s+[a-zA-Z]+/",$string3);  /* Попытка разделить строку по 2 слова  преобразовать ее в массив*/

    echo "<pre>";
    print_r($example4);








?>
