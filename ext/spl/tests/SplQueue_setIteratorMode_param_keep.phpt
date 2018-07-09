--TEST--
Check that SplQueue can be set to KEEP
--CREDITS--
Claudio Zizza
--FILE--
<?php

$splQueue = new SplQueue();
$splQueue->setIteratorMode(SplDoublyLinkedList::IT_MODE_KEEP);

$splQueue->push('A');
$splQueue->push('B');
$splQueue->push('C');

$result = '';
foreach ($splQueue as $element) {
    $result .= $element;
}

echo $result . $splQueue->count();

?>
--EXPECT--
ABC3
