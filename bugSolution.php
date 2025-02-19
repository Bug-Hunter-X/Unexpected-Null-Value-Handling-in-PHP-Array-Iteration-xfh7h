function foo(array $arr) {
  foreach ($arr as $value) {
    if ($value === null) {
      //Handle null values appropriately, for example:
      echo "Null value encountered.\n";
      continue; //Skip null values
      //Or you might want to replace it with a default value
      //$value = 0; 
    } else {
      // Process non-null values
      echo $value . "\n";
    }
  }
}
$arr = [1, 2, null, 4, 5];
foo($arr); 