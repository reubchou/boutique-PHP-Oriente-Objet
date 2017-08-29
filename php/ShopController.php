<?php
	require "controller.php";
    class ShopController{
		public function __construct(){
			
			parent::__construct();
		}
        public function single($id)
        {
          $itemHome=$this->itemsModel->listenerItem($id);
		  if(sizeof($itemHome)!=1)
		  {
			  
		  }
    }