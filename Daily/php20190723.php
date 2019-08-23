<?php
class A {
	public static function aaa() {
		// self::test();
		static::test();
	}

	protected static function test() {
		echo 'nihao A<br>';
	}
}

class B extends A {
	public static function test() {
		echo 'nihao B<br>';
	}
}

B::aaa();

