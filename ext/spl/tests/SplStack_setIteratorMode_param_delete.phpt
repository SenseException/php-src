--TEST--
Check that SplStack can be set to DELETE
--CREDITS--
Claudio Zizza
--FILE--
<?php

$splStack = new SplStack();
$splStack->setIteratorMode(SplDoublyLinkedList::IT_MODE_DELETE);

$splStack->push('C');
$splStack->push('B');
$splStack->push('A');

$result = '';
foreach ($splStack as $element) {
    $result .= $element;
}

echo $result . $splStack->count();

?>
--EXPECT--
ABC0
