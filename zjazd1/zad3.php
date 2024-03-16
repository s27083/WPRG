<?php

function fibonacci($n) {
    $fib = array(0, 1);
    for ($i = 2; $i <= $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}

$N = 10; 

$fibonacciSeries = fibonacci($N);

$oddFibonacciNumbers = array_filter($fibonacciSeries, function($number) {
    return $number % 2 != 0;
});

echo "Nieparzyste elementy dla ciagu fibonaciego do ". $N . " \n";
foreach ($oddFibonacciNumbers as $index => $number) {
    echo ($index + 1) . ". " . $number . "\n";
}

?>
