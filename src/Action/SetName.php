<?php declare(strict_types=1);

namespace Action;

class SetName implements \lib\IAction
{

	public function __invoke(\lib\Input $input): \lib\Output
	{
		$args = $input->getArgs();
		$name = array_shift($args);
		file_put_contents(__DIR__ . '/../../data/db', $name);

		return new \lib\Output(0, 'Имя установлено');
	}

}