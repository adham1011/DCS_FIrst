<?php
 class Model{
   protected $num1;
   protected $num2;
   protected $num3;
   protected $func;

   /*Construct*/
   public function __construct($n_num1=0,$n_num2=0,$n_num3=0){
     $this->num1 = $n_num1;
     $this->num2 = $n_num2;
     $this->num3 = $n_num3;

   }

   public function setFunc($new_func){
     $new_func = strtolower($new_func);
     $this->func = $new_func;
   }

   public function validInput(){
     if(is_numeric($this->num1) && is_numeric($this->num2) && is_numeric($this->num3)){return true;}
      return false;
   }

 }
