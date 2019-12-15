<?php declare(strict_types=1);

namespace lib;

interface IAction
{
	public function __invoke(Input $input): Output;
}