<?php declare(strict_types=1);

namespace lib;

class Input
{

	private $actionName;

	private $args;

	public function __construct(string $actionName, array $args)
	{
		$this->actionName = $actionName;
		$this->args = $args;
	}

	public static function fromArgv(array $argv): self
	{
		array_shift($argv);
		$actionName = array_shift($argv)?? '';

		return new self($actionName, $argv);
	}

	public function getActionName(): string
	{
		return $this->actionName;
	}

	public function getArgs(): array
	{
		return $this->args;
	}

}