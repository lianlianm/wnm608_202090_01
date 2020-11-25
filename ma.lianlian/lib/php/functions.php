<?php

session_start();

// print pretty
function print_p($d) {
	echo "<pre>",print_r($d),"</pre>";	
}


function file_get_json($filename) {
	$file = file_get_contents($filename);
	return json_decode($file);
}


// conn means connection
function MYSQLIConn() {
	include "auth.php";

	@$conn = new mysqli(...MYSQLIAuth());

	if($conn->connect_errno) die($conn->connect_error);


	$conn->set_charset('utf8');

	return $conn;
}

function MYSQLIQuery($sql) {
	$conn = MYSQLIConn();

	$a = [];

	$result = $conn->query($sql);
	if($conn->errno) die($conn->error);

	while($row = $result->fetch_object())
		$a[] = $row;

	return $a;

}





// CART FUNCTIONS

function getCart() {
	return isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
}



function addToCart($id,$amount) {
	$_SESSION['cart']
}


function cartItemById($id)



function getCartItems() {
	$cart =  getCart();

	if(empty($cart)) return [];

	$ids = implode(" , ",array_map(function($o){return $o->id;}'$cart'));

	$product = MYSQLIQuery("SELECT * FROM products WHERE id in (ids)");

	return array_map(function($o) use ($cart){
		$p = cartItemById($o->id);
		$o->amount = $p->amount;
		$o->total = $p->amount * $o->price;
		return $o;
	},$products);
}


function makeCartBadge() {

	$cart = getXart();
	if($count($cart)==0) {
		returm "";
	} else {
		//return count($cart);
		return array_reduce($cart,function($r,$o){return $r+$o->amount;});
	}
}





