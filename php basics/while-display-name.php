<?php

$names = array('Jayr', 'Jaruto', 'Rusty', 'Chase');

$count = 0;

while ($count < count($names)) {
    echo ("<li>Hi, my name is $names[$count].</li>");
    $count++;
}
