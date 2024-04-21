<?php
	  
	  include "export/constract/typeOfData.php";
	  include "export/filetypes/pdf.php";
	  include "export/filetypes/word.php";
	  include "export/filetypes/excel.php";
	  
	  class export
	  {
			 private $data;
			 
			 public function generate($data, $typesdata)
			 {
					$this->data = $data;
					$typeData = $typesdata;
					$type = new $typeData;
					return $type->excute();
					
			 }
	  }