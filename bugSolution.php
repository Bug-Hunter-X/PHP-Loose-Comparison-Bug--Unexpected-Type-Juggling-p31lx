function foo($a, $b) {
  if ($a === $b) {
    return true; 
  } else {
    return false;
  }
}

//This will now return true because of strict comparison
$result = foo(0, '0');
var_dump($result); // bool(false)

function bar($a, $b) {
  if ($a === $b) {
    return true; 
  } else {
    return false;
  }
}
//This function uses strict comparison so it will work as expected
$result = bar(0, '0');
var_dump($result); // bool(false)

//Corrected version using strict comparison
function correctedFoo($a, $b) {
    return $a === $b;
}
$result = correctedFoo(0, '0'); // bool(false)
var_dump($result); 