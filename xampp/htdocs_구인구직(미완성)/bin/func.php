<?php
	function val(&$name,$df=''){
		return isset($name) ? $name : $df;
	}
	
	function img($img,$id,$str = false){
		echo '<img src="'.$img.'" title="'.$id.'" alt="'.$id.'" {$str}>';
	}

	function label($str,$id){
		echo '<label title="'.$id.'" for="'.$id.'">'.$str.'</label>';
	}
?>