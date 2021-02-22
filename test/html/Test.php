<?php
class Test extends \PHPUnit\Framework\TestCase
{
    function testArea()
    {
        include_once("index.php");
        $run=new run();
        $width = array ( "1" , "2" , "3" , "4" , "5" , "6" , "7" , "8" , "9" , "10" );
        $length = array ( "1" , "2" , "3" , "4" , "5" , "6" ,  "7" , "8" , "9" , "10" );
        $area = array ( "1" , "4" , "9" , "16" , "25" , "36" , "49" , "64" , "81" , "100");
        for ( $i = 0 ; $i < 10 ; $i ++ ){
            $this -> assertEquals ( $run -> area_test( $width [$i] , $length [$i] ) , $area [$i] );
            echo "This is " . ($i+1) . " test -Success";
        }
        
    }
}
?>
