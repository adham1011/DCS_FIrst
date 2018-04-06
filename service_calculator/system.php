<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');

include './Calc.php';
class System{

  public function handleRequest(){
    $method = $_SERVER['REQUEST_METHOD'];
    if($method=='PUT') parse_str(file_get_contents("php://input"),$_REQUEST);
      $calc = new Calculator((int)$_REQUEST['num1'],(int)$_REQUEST['num2'],(int)$_REQUEST['num3']);
      $calc->setFunc($_REQUEST['func']);
        if($calc->validInput()){
              $a=['retVal'=> $calc->calculate()];
        }else{
          $a=['retVal'=>"Wrong input"];
        }
     $this->setJsonHeader();
    return json_encode($a);
}

public function setJsonHeader(){
  header('Content-Type: application/json');
}
}

$app = new System;
echo $app->handleRequest();
