<?php

class Student
{
	
	public $Advanced_Java;
	public $Advanced_Php;
	public $IoT;

	function examResult($Advanced_Java, $Advanced_Php, $IoT)
	{
		$this->Advanced_Java=$Advanced_Java;
		$this->Advanced_Php=$Advanced_Php;
		$this->IoT=$IoT;
		if($this->Advanced_Java>=25)
		{

			echo"pass Advanced_Java exam"."<br>";
		}
		else{
			echo"fail Advanced_Java exam"."<br>";
		}
		if($this->Advanced_Php>=25)
		{

			echo"pass Advanced_Php exam "."<br>";
		}
		else{
			echo"fail Advanced_Php exam "."<br>";
		}

		if($this->IoT>=25)
		{

			echo"pass IoT exam "."<br>";
		}
		else{
			echo"fail IoT exam "."<br>";
		}
		
		

	}


	function catResult($Advanced_Java, $Advanced_Php, $IoT)
	{
		
		$this->Advanced_Java=$Advanced_Java;
		$this->Advanced_Php=$Advanced_Php;
		$this->IoT=$IoT;
		if($this->Advanced_Java>=35)
		{

			echo"pass Advanced_Java cat"."<br>";
		}
		else{
			echo"fail Advanced_Java cat"."<br>";
		}
		if($this->Advanced_Php>=35)
		{

			echo"pass Advanced_Php cat "."<br>";
		}
		else{
			echo"fail Advanced_Php cat "."<br>";
		}

		if($this->IoT>=35)
		{

			echo"pass IoT cat "."<br>";
		}
		else{
			echo"fail IoT cat "."<br>";
		}
		
		

	}
}
    $Student1 = new Student();
    $Student1->catResult(20,30,25);
	$Student1->examResult(40,10,20);
	
	?>