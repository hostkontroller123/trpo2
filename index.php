<?php




class A {
    protected $x;

    
    public function __construct() {
    }

}
   

class B extends A {
    protected $a;
    private $x2;

    public function __construct($a) {
        $this->a = $a;
    }
    

}

class C extends B {
    protected $b;

    public function __construct($b3, $b4) {
        $this->a = $b3;
        $this->b = $b4;
    }
}



$a1 = new A();
$b2 = new B($a1);
$b3 = new B($a1);
$b4 = new B($b2);
$c5 = new C($b3, $b4);


?>


