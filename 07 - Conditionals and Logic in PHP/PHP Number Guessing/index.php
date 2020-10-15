<?php
class NumberGuessing {
    private static $play_count = 0;
    private static $correct_guesses = 0;
    private static $guess_high = 0;
    private static $guess_low = 0;

    public static function play() {
        echo "I'm going to think of numbers between 1 and 10 (inclusive). Do you think you can guess correctly?"."\n";
        self::guessNumber();
    }

    private static function guessNumber() {
        self::$play_count ++;
        $random_number = rand(1, 10);
        echo "\nMake your guess (or enter 0 to quit the game)...\n";
        $guess = self::getInput();
        if ($guess) {
            echo "Round ".self::$play_count."\n"."My Number: $random_number"."\n"."Your guess: $guess";
            if ($guess == $random_number) { self::$correct_guesses ++; }
            else {
                $guess > $random_number && self::$guess_high ++;
                $guess < $random_number && self::$guess_low ++;
            }
            self::getGameInformations();
            self::guessNumber();
        }
        else {
            echo "Thanks for playing! See you soon!";
        }
    }

    private static function getGameInformations() {
        $win_percentage =  self::$correct_guesses / self::$play_count * 100;
        echo "\n"."After ".self::$play_count." rounds, here are some facts about your guessing:"."\n"."You guessed the number correctly $win_percentage% of the time."."\n";
        if (self::$guess_high != self::$guess_low) {
            echo "When you guessed wrong, you tended to guess ".(self::$guess_high > self::$guess_low ? "high" : "low")."."."\n";
        }
    }

    private static function getInput() {
        try {
            $input = intval(readline(">> "));
            if ($input > 10 || $input < 0) {
                throw new Exception();
            }
            return $input;
        } catch (Exception $exception) {
            echo "Please, enter a valid number (between 0 and 10):"."\n";
            return self::getInput();
        }
    }
}

NumberGuessing::play();
