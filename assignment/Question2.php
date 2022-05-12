<?php
class Student
{
    private $php=0;
    private $java=0;
    private $linux=0;

    public function examResults($php, $java, $linux)
    {
        $this->php = $php ;
        $this->java = $java;
        $this->linux = $linux;
        $marks = array($this->php, $this->java, $this->linux);
        $flag=null;
        $temp=0;
        if($marks[0]==0)
        {
         $temp = $marks[2];
         $marks[2] = $marks[0];
          $marks[0] =$temp;   
        }
        for ($i=0; $i < count($marks); $i++) 
        { 
            if($marks[$i]>=35 && $marks[$i]<=100)
            {
                $flag = TRUE;
            }
            else
            {
                $flag = FALSE;
            }
        }

        if($flag)
        {
            echo "You Have Been Promoted With Grade: A";
        }
        else
        {
            echo "Failed";
        }
    }
}

$student = new Student();
$student->examResults(0,60,40);
?>