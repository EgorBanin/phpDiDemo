<?php declare(strict_types=1);

namespace Action;

class SayHello implements \lib\IAction
{

	private $storage;

	public function __construct(\Service\Storage $storage)
	{
		$this->storage = $storage;
	}

	public function __invoke(\lib\Input $input): \lib\Output
	{
		$name = $this->storage->read();

		return new \lib\Output(0, 'Привет, ' . $name);
	}

}