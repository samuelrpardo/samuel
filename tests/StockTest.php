<?php

// require_once('../database/Database.php');
// require_once('../interface/iStock.php');
//require_once('../class/Stock.php');

include "repository/StockRepository.php";


//use PHPUnit\Framework\TestCase;

class StockTest extends PHPUnit_Framework_TestCase
{
	protected static $pdo;

    public static function setUpBeforeClass() {
       try 
       {
            $host = 'mysql:host=localhost;dbname=inventario';
            self::$pdo = new PDO($host, 'root', '');
       }
       catch (\Exception $e) {
            $this->markTestSkipped('MySQL conection is not working.');
       }
    }
    public function setUp() {   	
       	$this->stockRepository = new StockRepository(self::$pdo);
    }
    
    public function testStockList() {
    	$list=$this->stockRepository->all_stockList(10);
    	$this->assertEquals(count($list),1);
    }
    public function testGetUserById(){
    	$user=$this->stockRepository->getUserById('admin');   	
        $this->assertCount(1,$user);
    	
    }
    public function testRemoveUser(){
    	$Stock=$this->stockRepository->removeStock(2);
    	
    	
    }
}
?>