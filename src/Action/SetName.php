<?php declare(strict_types=1);

namespace Action;

class SetName implements \lib\IAction
{

	private $storage;

	public function __construct(\Service\Storage $storage)
	{
		$this->storage = $storage;
	}

	public function __invoke(\lib\Input $input): \lib\Output
	{
		$args = $input->getArgs();
		$name = array_shift($args);
		$this->storage->write($name);

		return new \lib\Output(0, 'Имя установлено');
	}

}