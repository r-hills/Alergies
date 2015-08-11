<?php

	require_once "src/allergyGenerator.php";

	class AllergyGeneratorTest extends PHPUnit_Framework_TestCase
	{

		function test_makeAllergy_checkInputs()
		{
				$test_AllergyGenerator = new AllergyGenerator;
				$input = null;

				//Act
				$result = $test_AllergyGenerator->makeAllergy($input);

				//Assert
				$this->assertEquals(array(), $result);

		}

		// function test_makeAllergy_checkInputs()
		// {
		// 		$test_AllergyGenerator = new AllergyGenerator;
		// 		$input = 129;
		//
		// 		//Act
		// 		$result = $test_AllergyGenerator->makeAllergy($input);
		//
		// 		//Assert
		// 		$this->assertEquals(array(1=>1,2=>0,3=>0,4=>0,5=>0,6=>0,7=>0,8=>1), $result);
		//
		// }
		// function test_makeAnagram_noStringToCheck()
		// {
		// 		$test_AnagramGenerator = new AnagramGenerator;
		// 		$input_word = "bread";
		// 		$possibilities = array("beard");
		//
		// 		//Act
		// 		$result = $test_AnagramGenerator->makeAnagram($input_word, $possibilities);
		//
		// 		//Assert
		// 		$this->assertEquals(array('beard' => 3), $result);
		//
		// }


	}

?>
