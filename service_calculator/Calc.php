<?php
include './Model.php';
class Calculator extends Model{


  /*Sum*/
  public function Sum(){
    return $this->num1 + $this->num2 + $this->num3;
  }

  /*Mult*/
  public function Mult(){
    return $this->num1 * $this->num2 * $this->num3;
  }

  /*Sum*/
  public function Avg(){

    return $this->Sum()/3;
  }

  public function calculate(){

    switch ($this->func) {
      case 'sum':
        return $this->Sum();
      case 'mult':
          return $this->Mult();
      case 'avg':
          return $this->Avg();
    }
  }

}
