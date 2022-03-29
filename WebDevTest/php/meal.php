<?php
	
	class Meal
	{
		private $meal;
		function __construct()
        {
        	include 'meals.php';
            $this->meal = $meals;
        }
        function getAllMeals(){
        	$output = '';
        	foreach ($this->meal as $key => $value) {
        	
        	$output.= '<div class="card">
	          <div class="card-img card-img-seating" style="background: url(projectImages/'.$value["image"].') no-repeat center center / cover;">
	            <a href="detail.php?id='.$value["id"].'">
	            </a>
	          </div>

	          <div class="card-content">
	            <div class="con1"><a href="detail.php?id='.$value["id"].'">
	                <p>⭐'.$value["rating"].' rating</p>
	                <p>'.$value["title"].'</p>
	                <p class="description">'.$value["description"].'</p>
	              </a>
	            </div>
	            <button class="btn" id="'.$value["id"].'" onclick="card(this.id)"><a>add to cart</button>
	            <p class="price">'.$value["price"].' SAR</p>
	          </div>
	        </div>';
        	}
        	return $output;
        }
        function getMealById($id){
        foreach ($this->meal as $key => $value) {
        if ($value["id"]==$id) {
        return $value;
        }	
        }	
        } 

	} 


?>