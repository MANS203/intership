<?php
	  
	  
	  class Calculator
	  {
			 
			 public $num1;
			 public $num2;
			 public $res;
			 public function plus()
			 {
					$this->res = "this is sum ". $this->num1 ." + ".$this->num2."  =  " . ($this->num1 + $this->num2). "<br>";
					return $this;
			 }
			 
			 public function muns()
			 {
					$this->res ="this is muns ". $this->num1 ." - ".$this->num2."  = " . ($this->num1 - $this->num2) . "<br>";
					return $this;
			 }
			 
			 public function mult()
			 {
					$this->res ="this is mult ". $this->num1 ." * ".$this->num2."  = " . ($this->num1 * $this->num2). "<br>";
					return $this;
			 }
			 
			 public function vitn()
			 {
					$this->res ="this is vint ". $this->num1 ." / ".$this->num2."  = " . ($this->num1 / $this->num2). "<br>";
					return $this;
			 }
			 
			 public  function print()
			 {
					echo $this->res;
			 }
	  }
	  
	  $action1 = new Calculator;
	  
	  $action1->num1 = $_POST['num1'];
	  $action1->num2 = $_POST['num2'];
	  $action1->plus()->print();
	  $action1->mult()->print();
	  $action1->muns()->print();
	  $action1->vitn()->print();
	  
	  