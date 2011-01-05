<?php

class GetArrayCommand extends CConsoleCommand
{

	public function run($args)
	{
		/*
		$models = (array) User::model()->findAll(array('select'=>array('id','display_name')));	
		var_dump($models);
		foreach ($models as $model) {
			echo $model->id."\n";
		}*/

		$model = User::model();
		$users = $model->getCommandBuilder()->createFindCommand($model->tableSchema, $model->dbCriteria)->queryAll();
		var_export($users);

	}

}
