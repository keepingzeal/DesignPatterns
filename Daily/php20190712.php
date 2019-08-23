<?php
//var_dump(get_headers('http://lala.kzeal.cn', 1));

// function getCurl($url) {
//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
//     curl_setopt($ch, CURLOPT_URL, $url);
//     curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate');
//     curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
//     curl_setopt($ch, CURLOPT_HEADER, false);
//     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//     $res['content'] = curl_exec($ch);
//     $res['header']  = curl_getinfo($ch);
//     curl_close($ch);
//     return $res;
// }
// var_dump(getCurl('http://lala.kzeal.cn'));


// class Test {
//     private static $instance;
//     public static $data;

//     public function __constract($data) {
//         $this->data = 999999999;
//     }

//     static function getInstance($data) {
//         self::$instance = new Test($data);
//         return self::$instance;
//     }

//     public function getData() {
//         return $this->data;
//     }
// }

// $res = Test::getInstance('123');
// var_dump($res->getData());

class DemoModel {

    public  $demoName;
    private static $instance;

    private function __construct($data){
        $this->demoName = $data;
    }

    public static function getInstance($data){
         self::$instance = new self($data);
         return self::$instance;
    }
   
    public function getDomainName(){
        return $this->demoName;
    }
        
}
$res = DemoModel::getInstance('123123')->getDomainName();
var_dump($res);




// class Singleton
// {
//     // 保存类实例在此属性中
//     private static $instance;
    
//        // 构造方法声明为private，防止直接创建对象
//     private function __construct() 
//     {
//         echo 'I am constructed';
//     }

//     // singleton 方法
//     public static function singleton() 
//     {
//         if (!isset(self::$instance)) {
//             $c = __CLASS__;
//             self::$instance = new $c;
//         }

//         return self::$instance;
//     }
    
//     // Example类中的普通方法
//     public function bark()
//     {
//         echo 'Woof!';
//     }

//     // 阻止用户复制对象实例
//     public function __clone()
//     {
//         trigger_error('Clone is not allowed.', E_USER_ERROR);
//     }

// }


// // 这个写法会出错，因为构造方法被声明为private
// // $test = new Singleton();

// // 下面将得到Example类的单例对象
// $test = Singleton::singleton();
// $test->bark();

// 复制对象将导致一个E_USER_ERROR.
// $test_clone = clone $test;
// $res = DemoModel::getInstance('123123')->getDomainName();
// var_dump($res);
