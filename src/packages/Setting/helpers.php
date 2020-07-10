<?php
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

if(!function_exists('auth_user')){
	function auth_user(){
		return Sentinel::check();
	}
}

if(!function_exists('save_button')){
	function save_button(){
		return '<button class="btn btn-success">Save</button>';
	}
}

if(!function_exists('update_button')){
	function update_button(){
		return '<button class="btn btn-success" style="width:20%;">Update</button>';
	}
}

if(!function_exists('draft_button')){
	function draft_button(){
		return '<button value="save" name="action" class="btn btn-success" > Save to Draft</button>';
	}
}

if(!function_exists('order_button')){
	function order_button(){
		return '<button value="submit" name="action" class="btn btn-primary" >Complete for order</button>';
	}
}

if(! function_exists('button'))
{
	function button($class = "btn-success", $href = "#", string $icon = null, string $name = "Save", $attr = null)
	{

		if(! is_null($icon)) {
			$name = "<i class='".$icon."'></i>";
		}

		return "<a class='btn ".$class."' href='".$href."' style='width:100px;' ".$attr.">".ucfirst($name)."</a>";
	}
}