<?php
echo "Hello world!" . "<br />";
$myName = "Norbi";
$myAge = "22";
echo $myName . " " . $myAge . "<br />";

class Cat {
	public $legNumber;
	public $isAlive = true;
	public $purrness;
	
	public function __constr($legNumber, $purrness) {
		$this->legnumber = $legNumber;
		$this->purrness = $purrness;
	}
	
	public function greatness() {
		if($this->purrness = "very"){
		return "That's great!";
		}
	else {
		return "That's not great!";
		}
	}
}
$newCat = new Cat(4, "very");
echo $newCat->greatness() . "<br />";

class uglyCat extends Cat {
}
$new_uglyCat = new uglyCat(4, "not at all");
echo $new_uglyCat->greatness("not at all");
?>