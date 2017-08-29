<?php
	require "controller.php";
    class HomeController extends Controller{
		public function __construct(){
			parent::__construct
		}
        public function home(){
	
            $itemsHome = $dbItem->listenerItems();
            include("home.php");
        }
    }