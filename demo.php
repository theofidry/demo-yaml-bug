<?php

require __DIR__.'/vendor/autoload.php';

$files = [
    'file1.yml',
    'file2.yml',
    'file3.yml',
    'file4.yml',
    'file5.yml',
    'file6.yml',
    'file7.yml',
];

foreach ($files as $file) {
    $content = \Symfony\Component\Yaml\Yaml::parse(file_get_contents($file));
    echo $file.PHP_EOL;
    dump($content);
}

