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
		if ($this->request->session()->check('rounds.played')) {
			$this->request->session()->delete('rounds.played');
		}
	}
	
	public function draw()
	{
		if (!$this->request->session()->check('rounds.played')) {
			$rounds = 0;
		} else {
			$rounds = $this->request->session()->read('rounds.played');
		}
		$rounds++;
		
		$this->request->session()->write('rounds.played', $rounds);
		
		$cards = $this->Cards->find()
			->limit('2')
			->order(['RAND()']);
			
		if ($rounds < 5) {
			$cards->where(['rarity < 3']);
		}
		
		$this->set('cards', $cards->toArray());
	}
}
