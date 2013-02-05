<?php

class KeepItCleanBehavior extends ModelBehavior {

	public $badWords = array(
		'fuck',
		'shit',
	);

	public function isClean(Model $model, $input) {
		//$input is array('field name' => 'value to be tested for cleanliness')
		$input = array_values($input);
		$input = strtolower($input[0]);
		foreach ($this->badWords as $b) {
			$b = strtolower($b);
			if (strpos($input, $b) !== false) {
				return false; //found a bad word
			}
		}
		return true;
	}
}