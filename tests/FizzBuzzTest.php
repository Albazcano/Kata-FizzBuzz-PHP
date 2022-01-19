<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\FizzBuzz;


class FizzBuzzTest extends TestCase {
    public function test_fizz_if_divisible_by_3()
    {
        //Given
        $number=3;
        $fizzBuzz = new FizzBuzz;
        // When
        $result = $fizzBuzz->getFizzBuzz($number);
        //Then
        $this->assertEquals('Fizz', $result);

    }

   public function test_fizz_if_divisible_by_5()
    {
        //Given
        $number=5;
        $fizzBuzz = new FizzBuzz;
        // When
        $result = $fizzBuzz->getFizzBuzz($number);
        //Then
        $this->assertEquals('Buzz', $result);

    }

    public function test_fizz_if_divisible_by_3_and_5()
    {
        //Given
        $number=15;
        $fizzBuzz = new FizzBuzz;
        // When
        $result = $fizzBuzz->getFizzBuzz($number);
        //Then
        $this->assertEquals('FizzBuzz', $result);

    }

    public function test_fizz_if_none_of_the_above()
    {
        //Given
        $number=1;
        $fizzBuzz = new FizzBuzz;
        // When
        $result = $fizzBuzz->getFizzBuzz($number);
        //Then
        $this->assertEquals(1, $result);

    }
}

?>