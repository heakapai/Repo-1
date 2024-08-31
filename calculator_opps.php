<!-- class Add{
    public $num1;
    public $num2;
    public function _construct($num1,$num2){
        $this->num1=$num1;
        $this->num2=$num2;
    }
 public function calculate(){
    return $this->num1+$this->num2;
 }
}
class Multiply{
    public $num1;
    public $num2;
    public function _construct($num1,$num2){
        $this->num1=$num1;
        $this->num2=$num2;
    }
 public function calculate(){
    return $this->num1*$this->num2;
 }
}
if(!empty($_POST)){
 $add= new Add($_POST['num1'],$_POST['num2']);
 $sum=$add->calculate();
 $multiply= new Multiply($_POST['num1'],$_POST['num2']);
 $product=$multiply->calculate();

}

 include 'templates/calculator.view.php';
 ?> -->
<!-- $add= new Add(10,20);
echo $add->calculate(); -->

<?php
class Add{
    public $num1;
    public $num2;

    public function __construct($num1,$num2){
        $this->num1=$num1;
        $this->num2=$num2;  
}
public function calculate(){
    return $this->num1 + $this->num2;
}
}
class Multiply{
    public $num1;
    public $num2;

    public function __construct($num1,$num2){
        $this->num1=$num1;
        $this->num2=$num2;  
    }
        public function calculate(){
            return $this->num1 * $this->num2;
        }
 }

    if(!empty($_POST)){
        $Add=new Add($_POST['num1'] ,$_POST['num2']);
    $sum=$Add->calculate();
    $multiply=new Multiply($_POST['num1'] ,$_POST['num2']);
    $product=$multiply->calculate();
     }
    include 'templates/calculator.view.php';
?>