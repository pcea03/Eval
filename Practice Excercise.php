<?php 

function sumEven($x)
{
    $sum=0;
    while($x<=10)
    {
        if($x%2==0)
        {
            $sum = $sum + $x;
        };
        $x++;
    }
    echo $sum;
}
    $x = 1; 
    sumEven($x); 

    echo "<br>";

function displayOdd($x)
{

    do 
    {
        if($x%2==1)
        {
            echo $x.",";
        }
        $x++;
    } while($x<=10);
}
$x=0;
displayOdd($x);

    echo "<br>";

function fibo($r)
{
$y=1;
$sum=0;
$x=0;
    for($i=$r;$i<=10;$i++)
    {
        echo $x.",";
        $sum = $x + $y;
        $x = $y;
        $y = $sum;
    }
}

$r=0;
fibo($r);

echo "<br> Array <br>";

$name = array("Marvin","Marco","Marvin","Marco","Marco","Marvin","Christian");
$rem  = array_unique($name);
$new = array();
$count = sizeof($rem);
    for($i=0;$i<=$count;$i++)
    {
        $new[$i]
    }
// $count = sizeof($name);
//     for($i=0;$i<=$count;$i++)
//     {


//     }
09054318611
?>