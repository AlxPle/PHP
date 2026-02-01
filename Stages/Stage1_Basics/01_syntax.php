<?php
# PHP tags
// This is the standard way to open a PHP block

echo "Hello, world!";
// Short tag (not recommended, but sometimes used):
?>
<?php
# Comments
// Single-line comment
/* Multi-line comment
   continues here */
/** Doc comment
 * used for documentation generation
 */

?>
<?php
# Output data

print "This is a print statement.\n";
var_dump(["apple", "banana", "cherry"]);
print_r(["name" => "John", "age" => 30]);
?>
<?php
# Strict typing
//declare(strict_types=1);

function add(int $a, int $b): int {
    return $a + $b;
}
echo add(2, 3); // 5
?>