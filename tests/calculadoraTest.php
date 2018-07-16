<?php
/*use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;
*/

class calculadoraTest extends PHPUnit_Framework_TestCase
{
	
 function testSuma()
//  use TestCaseTrait;
 
  {
  	include "class/calculadora.php";
  //	require_once('../class/Database.php');
 	 	$calculadora=new Calculadora();
 	 	$s=$calculadora->suma(5,7);
 	 	$this->assertEquals($s,12);
 }
}
?>