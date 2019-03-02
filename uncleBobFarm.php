<?php

class UncleBobFarm
{
    public $cows = 10;  //КОЛИЧЕСТВО КОРОВ ПО УМОЛЧАНИЮ
    public $chickens = 20;  //КОЛИЧЕСТВО КУРИЦ ПО УМОЛЧАНИЮ

    function milkingCows ($number_new_cows)
    {
        $number_cows = $this->cows + $number_new_cows; //ДОБАВЛЯЕМ КОЛИЧЕСТВО НОВЫХ КОРОВ

        $milk = 1;
        $statisticsCows = array(); //СОЗДАДИМ МАССИВ ДЛЯ ПОСЛЕДУЮЩИХ ОПЕРАЦИЙ
        while ($milk <= $number_cows) //В ЦИКЛЕ ПРОВЕРИМ КАЖДУЮ КОРОВКУ В СТОЙЛЕ
        {
            $id_cows = uniqid(); //ПРИСВОИМ УНИКАЛЬНЫЙ ID
            $liters = rand(8, 12); //ВИЛКА НАДОЯ МОЛОКА С ОДНОЙ КОРОВКИ
            $milk++;
            $statisticsCows[$id_cows] = $liters; //ЗАПИШЕМ ДАННЫЕ В МАССИВ
        }
        return $statisticsCows; //ВЕРНЕМ МАССИВ НА ИСПОЛНЕНИЕ ОПЕРАЦИЙ
    }

    function collectEdds ($number_new_chicken)
    {
        $number_chicken = $this->chickens + $number_new_chicken;

        $egg = 1;
        $statisticsChiken = array();
        while ($egg <= $number_chicken)
        {
            $id_chicken = uniqid();
            $eggs = rand(0, 1);
            $egg++;
            $statisticsChiken[$id_chicken] = $eggs;
        }
        return $statisticsChiken;
    }

}