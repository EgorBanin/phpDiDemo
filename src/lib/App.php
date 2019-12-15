<?php declare(strict_types=1);

namespace lib;

class App {

	private $actionsNs;

	public function __construct(string $actionsNs)
	{
		$this->actionsNs = $actionsNs;
	}

	public function run(Input $input): Output
	{
		$actionName = $input->getActionName();
		if (empty($actionName)) {
			return self::error(1, 'Не указано действие');
		}
		$actionClassName = $this->actionsNs . '\\' . ucfirst($actionName);
		if ( ! class_exists($actionClassName)) {
			return self::error(2, 'Не найден класс ' . $actionClassName);
		}
		$action = new $actionClassName();
		if ( ! ($action instanceof IAction)) {
			return self::error(3, 'Класс ' . $actionClassName . ' не реализует ' . IAction::class);
		}
		$output = $action($input);

		return $output;
	}

	private static function error($code, $message) {
		return new Output($code, sprintf("Ошибка [%d]\n%s", $code, $message));
	}

}