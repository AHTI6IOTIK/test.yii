<?php
namespace app\components;

class TestService extends \yii\base\Component {
	public $var = 'var = var';

	public function getVar (){
		return $this->var;
	}

}


?>