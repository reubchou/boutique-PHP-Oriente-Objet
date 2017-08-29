<?php
require "Controller.php";
class ApiController extends Controller{
	
	public function(){
		require "php/Model/ItemsModel.php";
		$picturesItem=$this->itemsModel->listenerPicturesItem($id);
		$reviewsItem=$this->itemsModel->listenerReviewsItem($id);
		echo json_encode(array("pictures"=>$picturesItem,"reviews"=>$reviewsItem));
		
	}
	
}