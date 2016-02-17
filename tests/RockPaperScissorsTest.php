<?php

    require_once "src/RockPaperScissors.php";
    require_once "src/TwoPlayerRPS.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {


        function test_computer_randomnum()
        {
            //Arrange
            $user_input = "Rock";
            $test_RockPaperScissors = new RockPaperScissors($user_input);

            //Array
            $result = $test_RockPaperScissors->getComputerInput();

            //Assert
            $this->assertTrue(is_string($result));
        }

        function test_computer_as_rock()
        {
            //Arrange
            $user_input = "Rock";
            $test_RockPaperScissors = new RockPaperScissors($user_input);


            //Array
            $result = $test_RockPaperScissors->computerPlay($user_input);

            //Assert
            $this->assertEquals("User Wins!", $result);
        }

    }

    class TwoPlayerRPSTest extends PHPUnit_Framework_TestCase
    {
        function test_equal_inputs()
        {
            //Arrange
            $test_RockPaperScissors = new TwoPlayerRPS;
            $first_input = "rock";
            $second_input = "rock";


            //Array
            $result = $test_TwoPlayerRPS->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Tie Game!", $result);
        }

        function test_rock_vs_scissors()
        {
            //Arrange
            $test_TwoPlayerRPS = new TwoPlayerRPS;
            $first_input = "Rock";
            $second_input = "Scissors";


            //Array
            $result = $test_TwoPlayerRPS->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1 Wins!", $result);
        }

        function test_rock_vs_paper()
        {
            //Arrange
            $test_TwoPlayerRPS = new TwoPlayerRPS;
            $first_input = "Paper";
            $second_input = "Rock";


            //Array
            $result = $test_TwoPlayerRPS->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1 Wins!", $result);
        }

        function test_paper_vs_scissors()
        {
            //Arrange
            $test_TwoPlayerRPS = new TwoPlayerRPS;
            $first_input = "Scissors";
            $second_input = "Paper";


            //Array
            $result = $test_TwoPlayerRPS->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1 Wins!", $result);
        }

        function test_paper_playertwo_wins()
        {
            //Arrange
            $test_TwoPlayerRPS = new TwoPlayerRPS;
            $first_input = "Scissors";
            $second_input = "Rock";


            //Array
            $result = $test_TwoPlayerRPS->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2 Wins!", $result);
        }
    }


?>
