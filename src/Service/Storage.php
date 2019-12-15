<?php declare(strict_types=1);

namespace Service;

class Storage
{

	private $pathToFile;

	public function __construct(string $pathToFile)
	{
		$this->pathToFile = $pathToFile;

	}

	public function write(string $name)
	{
		if ( ! is_writable($this->pathToFile)) {
			throw new \Exception('Файл ' . $this->pathToFile . ' не доспупен для записи');
		}
		
		file_put_contents($this->pathToFile, $name);
	}

	public function read(): string
	{
		if ( ! is_readable($this->pathToFile)) {
			throw new \Exception('Файл ' . $this->pathToFile . ' не доспупен для чтения');
		}

		return file_get_contents($this->pathToFile);
	}

}