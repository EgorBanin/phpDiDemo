<?php declare(strict_types=1);

namespace Action;

class SayHello implements \lib\IAction
{

	public function __invoke(\lib\Input $input): \lib\Output
	{
		$name = file_get_contents(__DIR__ . '/../../data/db');

		return new \lib\Output(0, 'Привет, ' . $name);
	}

}