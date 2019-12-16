<?php

$files = array_merge(glob('*.gif'), glob('*.jpg'), glob('*.png'));
sort($files);

echo "array(\n";
foreach ($files as $f) 
	echo "\tarray('label' => '$f', 'value' => '$f'),\n";
echo ");";
