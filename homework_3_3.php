<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 23.04.2018
 * Time: 18:20
 */
/*Распишите свое понимание пространства имен. (Представьте, что вас спрашивают на собеседовании).
Распишите свое понимание исключений (Exception) и зачем они нужны. (Представьте, что вас спрашивают на собеседовании).
Сделайте класс Товар из прошлого ДЗ абстрактным суперклассом для всех остальных классов.
Придумайте свое пространство имен (для всех классов), распределите все классы и интерфейсы по директориям и напишите свой autoloader.
Опишите класс Корзина, в который можно передавать любой товар. Опишите у корзины нужные свойства и методы. Например, метод получения суммы заказа, удаление товара из корзины и т.д.
Опишите класс Заказ, который создается на основе Корзины и имеет методы для оформления и печати (вывода на экран) информации о заказе.
*/
spl_autoload_register(
    function ($className) {
        include './classes/' . $className . '.php';
    }
);

spl_autoload_register(
    function ($interfaceName) {
        include './interfaces/' . $interfaceName . '.php';
    }
);

$HondaCivic = new Car('Honda Civic Type R', 2017, 6500, 'gas', 'hatchback', 'red');
$TeslaModelS = new Car('Tesla Model S P100D', 2016, 568, 'electric ', 'hatchback', 'black');

$beryozka215 = new TV('Beryozka-215', 1976, 'kinescope', false, 24, 2, true, false, false, 8);
$samsungUE55MU7000U = new TV('Samsung UE55MU7000U', 2017, 'LCD', true, 55, 107000000, true, true, true, 200);

$parkerPen = new BallPen('gold', 13, true, 'black');
$erichKrausePen = new BallPen('white', 15, false, 'blue');

$billy = new Duck ('Billy', 2, 'small', 'brown', 2);
$willy = new Duck ('Willy', 1, 'small', 'yellow', 3);