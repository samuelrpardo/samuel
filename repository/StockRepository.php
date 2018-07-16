<?php

class StockRepository {
	
	protected $db;
	
	public function __construct(PDO $db)
	{
		$this->db = $db;
	}
	
	
	
	public function all_stockList($stock_qty)
	{
		
			
			$sql = 'SELECT * FROM item, stock,  item_type where item_type.item_type_id=item.item_type_id and item.item_id=stock.item_id and stock.stock_qty = :stock_qty';
			$stm = $this->db->prepare($sql);
			$stm->execute(array(':stock_qty' => $stock_qty));
			$stm->setFetchMode(PDO::FETCH_CLASS, 'stock');
			$stocks = $stm->fetchAll();			
			return $stocks;
		
	}//end all_stockList
	public  function getUserById($user_account){		
		$sql = "SELECT * FROM user where user_account= :user_account";
		$stm = $this->db->prepare($sql);
		$stm->execute(array(':user_account' => $user_account));		
		$stm->setFetchMode(PDO::FETCH_CLASS, 'user');
		$user = $stm->fetchAll();
		
		return $user;
	}
	
	

	public function removeStock($stock_id)
	{
				
		$sql = 'DELETE FROM stock where stock_id=:stock_id';
		$stm = $this->db->prepare($sql);
		$stm->execute(Array(':stock_id' => $stock_id));
	
		
	}

	

	

}