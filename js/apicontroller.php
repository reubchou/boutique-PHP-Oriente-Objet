<?php

class ApiController{
	
	public function(){
		require "php/Model/ItemsModel.php";
		$dbItem=new ItemsModel();
		$picutreItem=$dbItem->listenerPictureItem($id);
		echo json_encode($pictureItem);
		
	}
	
}