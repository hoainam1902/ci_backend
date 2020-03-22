<?php
function asset($localtion = '')
{
	return (base_url() . 'public/' . $localtion);
}


/**
     * Generate the URL from the name of Controller.
     *
     * @param  string  $controller expamle home.index 
     * @param  string  $parameters example sort = date, category = shoe
     * @return string
*/
function route($controller = '', $param = array())
{
	$url = base_url();
	$url = rtrim($url, "/");
	if(!empty($controller)) {
		$arrayController = explode('.', $controller);
		foreach ($arrayController as $controller) {
			$url .= '/' . $controller;
		}
	}

	//remove all space in string $param
	// $param = preg_replace('/\s+/', '', $param);
	// $paramArray =  explode('=', $param);
	// $keyP = array();
	// $valueP = array();
	// foreach ($paramArray as $key => $value) {
	// 	if($key % 2 == 1) {
	// 		array_push($keyP, $value);
	// 	} else if($key % 2 == 0) {
	// 		array_push($valueP, $value);
	// 	}
	// }
	// $param = array_combine($keyP, $valueP);

	// $param = array($param);
	if(is_array($param )) {
		$count = 0;
		foreach ($param as $keyP => $valueP) {
			if($count === 0) {
				$url .= '?' . $keyP . '=' . $valueP; 
			} else {
				$url .= '&' . $keyP . '=' . $valueP; 
			}
			$count++;
		}
	} elseif(is_string($param)) {
		$url .= '/' . $param;
	}
	return $url;
}

function isCurrentURLMathWith($controller)
{
	$requestArray = explode('/', $_SERVER["REQUEST_URI"]);
	$total = (count($requestArray) - 1);
	$segmentArray = explode('.', $controller);
	if($total >= count($segmentArray)) {
		for ($i = 1; $i >= 0 ; $i--) { 
			if($segmentArray[$i] != $requestArray[$total]) {
				return false;
			}
			$total -= 1;
		}
		return true;
	}
	return false;
}