<?php declare(strict_types=1);

namespace lib;

require __DIR__ . '/vendor/autoload.php';

$input = Input::fromArgv($argv);
$app = new App('\\Action');
$output = $app->run($input);
$code = $output->print(STDOUT, STDERR);
exit($code);