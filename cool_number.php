<?php
	
	$s = 'abcdcfc';
	$arr = [];
	$cool_count = 0;
	$is_unique = false;
	
	do {
		$tmpStr = substr($s, 0, 4);
		array_push($arr, $tmpStr);
		$s = substr($s, 1, strlen($s));
		
	} while(strlen($s) >= 4);
	
	for($i = 0; $i < sizeOf($arr); $i++) {
		$is_unique = true;
	
		$arr_c = unpack('C*', $arr[$i]);
		$str_length = sizeOf($arr_c);
		
		for($j=1; $j<=$str_length; $j++) {
			for($k = ($j + 1); $k <= $str_length; $k++) {
				if($arr_c[$j] == $arr_c[$k]) {
					$is_unique = false;
					break;
				}
			}
			
			if($is_unique == false) {
				break;
			}
		}
		
		if($is_unique) {
			$cool_count += 1;
		}
	}
	
	echo($cool_count);
	
?>
