<?php
    $celsius = 32;

    function celsiusToFahrenheit($celsius) {
        $fahrenheit = ($celsius * 9/5) + 32;
        return $fahrenheit;
    }

    // Convert Celsius to Fahrenheit
    $fahrenheit = celsiusToFahrenheit($celsius);

    // Display the result
    printf("{$celsius} degrees Celsius is equal to {$fahrenheit} degrees Fahrenheit."); 

?>
