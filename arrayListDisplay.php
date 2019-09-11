<?php
include 'ArrayList.php';

$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);


echo $listInteger->remove(1);
echo $listInteger->size();