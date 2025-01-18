```php
<?php
function modifyArraySafe(array $arr) {
  $arrCopy = $arr; // Create a copy
  $arrCopy[] = 4;
  return $arrCopy; // Return the modified copy
}

$myArray = [1, 2, 3];
$myArray = modifyArraySafe($myArray); // Assign the modified copy back
print_r($myArray); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )

//Another solution:
function modifyArraySafe2(array $arr) {
  $newArr = array_merge($arr, [4]);
  return $newArr;
}

$myArray = [1, 2, 3];
$myArray = modifyArraySafe2($myArray);
print_r($myArray); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )
?>
```