function foo($a, $b) {
  if ($a === $b) {
    return true; 
  } else {
    return false;
  }
}

//This function will return false when it should return true because of type juggling
$result = foo(0, '0');
var_dump($result); // bool(false)

function bar($a, $b) {
  if ($a == $b) {
    return true; 
  } else {
    return false;
  }
}
//This function uses loose comparison so it will work as expected
$result = bar(0, '0');
var_dump($result); // bool(true)