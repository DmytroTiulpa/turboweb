<?php

require __DIR__ . '/vendor/autoload.php'; // Подключение автозагрузчика Composer

use DogNamespace\Mops;
use DogNamespace\Taxa;
use DogNamespace\PlushLabrador;
use DogNamespace\RubberTaxa;

echo "\n";
echo "-----------------------------------------------------------------\n";
echo "for test run in console this command: vendor/bin/phpunit test.php\n";
echo "-----------------------------------------------------------------\n";
echo "Dogs: mops | taxa | plush labrador | rubber taxa\n";
echo "Commands: sound | hunt\n";
echo "-----------------------------------------------------------------\n";
echo "Example: rubber taxa hunt\n";
echo "-----------------------------------------------------------------\n";
echo "\n";
echo "\x07"; // Вывод символа звонка
//usleep(500000); // Подождать полсекунды (500000 микросекунд = 0.5 секунды)
//echo "\x07"; // Вывод символа звонка

// Бесконечный цикл для прослушивания команд
while (true) {
    echo "Введите команду: ";
    $command = trim(fgets(STDIN)); // Чтение ввода из консоли

    if ($command === 'exit') {
        echo "Выход из программы.\n";
        break; // Выход из цикла при вводе команды 'exit'
    }

    if ($command === 'mops sound') {
        $mops = new Mops("Mops");
        echo $mops->makeSound();
        echo "\n";
    } elseif ($command === 'mops hunt') {
        $mops = new Mops("Mops");
        echo $mops->hunt();
        echo "\n";
    } elseif ($command === 'taxa sound') {
        $taxa = new Taxa("Taxa");
        echo $taxa->makeSound();
        echo "\n";
    } elseif ($command === 'taxa hunt') {
        $taxa = new Taxa("Taxa");
        echo $taxa->hunt();
        echo "\n";
    } elseif ($command === 'plush labrador sound') {
        $plushLabrador = new PlushLabrador("PlushLabrador");
        echo $plushLabrador->makeSound();
        echo "\n";
    } elseif ($command === 'plush labrador hunt') {
        $plushLabrador = new PlushLabrador("PlushLabrador");
        echo $plushLabrador->hunt();
        echo "\n";
    } elseif ($command === 'rubber taxa sound') {
        $rubberTaxa = new RubberTaxa("RubberTaxa");
        echo $rubberTaxa->makeSound();
        echo "\n";
    } elseif ($command === 'rubber taxa hunt') {
        $rubberTaxa = new RubberTaxa("RubberTaxa");
        echo $rubberTaxa->hunt();
        echo "\n";
    } else {
        echo "Неизвестная команда.\n";
    }
}