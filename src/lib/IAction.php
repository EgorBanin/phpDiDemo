<?php declare(strict_types=1);

namespace lab;

interface IAction
{
	public function __invoke(Input $input): Output;
}