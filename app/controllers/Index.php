<?php

/**
 * Index Controller
 *
 * @author cvgellhorn
 */
class Index extends App_Controller
{
	public function indexAction()
	{
		//$this->redirect('moep/index');
		$db = App_Database::getInstance();
		$result = $db->fetchAssoc('SELECT * FROM `data` WHERE `test` = \'blub\'', 'sdsdh');
		App_Debug::dump($result);

		$db->insert(array(
			'moep' => 'teeest',
			'blub' => 'sdsdhsdh',
			'teeeeet' => 'sdhsdsdh'
		), 'user');
	}
}