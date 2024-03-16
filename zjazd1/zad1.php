<?php
$fruits = ["banan", "jablko", "pomarancz"];

$arraySize = sizeof($fruits);

foreach ($fruits as $fruit) {
    $reversedWord = '';
    $wordLength = strlen($fruit);
    for ($j = $wordLength - 1; $j >= 0; $j--) {
        $reversedWord .= $fruit[$j];
    }
    echo $reversedWord . "\n";
    
    if ($fruit[0] === 'p') {
        echo "Słowo zaczyna się na literę 'p': " . $fruit . "\n";
    }
}
?>
