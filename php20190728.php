<?php
class showProduct {
	public $name;
	public $age;

	public function __construct($name, $age) {
		$this->name = $name;
		$this->age  = $age;
	}

	public function getProduct() {
		return 'My name is  '.$this->name.', I am '.$this->age;
	}

}

class showProductWrite {
	public function writes( $shopProduct ) {
		echo '输出'.$shopProduct->getProduct();
	}
}

// $showProduct = new showProduct('kzeal', 21);
// print $showProduct->getProduct();


// $write = new showProductWrite();
// $write->writes($showProduct);

echo 5 & 1;







// $str = 'false';


// $a = 'abc';

// if (0 == $a) {
// 	echo '进入到判断里面了1111';
// }

// var_dump(0 == "imageUrl", 0 == false, false == "imageUrl", intval("imageUrl"), boolval("imageUrl"));
