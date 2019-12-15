<?php declare(strict_types=1);

namespace lib;

class Output
{

	const CODE_OK = 0;

	private $code;

	private $message;

	public function __construct(int $code, string $message)
	{
		$this->code = $code;
		$this->message = $message;
	}

	public function print($out, $err): int
	{
		$stream = ($this->code === self::CODE_OK)? $out : $err;
		fwrite($stream, $this->message . "\n");

		return $this->code;
	}

}