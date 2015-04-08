<?php 
if(!defined('BASEPATH')){
	exit('No direct script access allowed');
}

class csv_reader{
	public $fields;
	public $separator=';';
	public $enclosure=' ';
	public $max_row_size=4096;

	function parse_file($p_Filepath, $p_NameFields=true){
		$content=false;
		$file=fopen($p_Filepath,'r');
	
		if(isset($p_NamedFields)){
			$this->fields=fgetcsv($file,$this->max_row_size,
			$this->separator,$this->enclosure);
		}
		while(($row=fgetcsv($file,$this->max_row_size,$this->separator,$this->enclosure))!=false){
			if($row[0]!=null){
			//skip empty lines
			if(!$content){
				$content=array();
				}
			if(isset($p_NamedFields)){
				$items=array();
				foreach($this->fields as $id=>$field){
					if(isset($row[$id])){
					 $items[$field]=$row[$id];
					}
				}
			$content[]=$items;
			}
			else{
				$content[]=$row;
			}
			}
			
		}
			fclose($file);
			return $content;
	}
}