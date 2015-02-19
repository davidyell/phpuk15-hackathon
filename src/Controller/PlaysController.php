<?php

namespace App\Controller;

/**
 * Description of PlaysController
 *
 * @author David Yell <neon1024@gmail.com>
 */
class PlaysController extends AppController {
	
	public function initialize() {
		parent::initialize();
		$this->loadModel('Cards');
	}

	
	public function start()
	{
		
	}
	
	public function draw()
	{
		$cards = $this->Cards->find()
			->limit('2')
			->order(['RAND()'])
			->toArray();
		
		$this->set('cards', $cards);
	}
}
