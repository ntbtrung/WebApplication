<?php
function isPrime($number) {
    if ($number <= 1) {
        return false; // 1 and any negative number are not prime
    }
    
    if ($number <= 3) {
        return true; // 2 and 3 are prime
    }

    if ($number % 2 == 0 || $number % 3 == 0) {
        return false; // Numbers divisible by 2 or 3 are not prime
    }

    for ($i = 5; $i * $i <= $number; $i += 6) {
        if ($number % $i == 0 || $number % ($i + 2) == 0) {
            return false; // Numbers divisible by other primes are not prime
        }
    }

    return true; // If no divisors are found, it's prime
}

$number = 13; // The checking number
if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
?>