<?php

namespace CakeOpauth\Controller;

use CakeOpauth\Controller\AppController;
use Cake\Routing\Router;
use Opauth;
use Cake\Core\Configure;

/**
 * Auth Controller
 *
 * @property \Comvert\Model\Table\MainTable $Main
 */
class AuthController extends AppController {

	public function auth() {

		$config = Configure::read('opauth');

		$config['path'] = Router::url($config['path']);
		$config['callback_url'] = Router::url($config['callback_url']);
		$config['redirect_uri'] = $config['callback_url'];

		$this->Opauth = new Opauth($config);

		$this->set('data', $config);
		$this->render("/Common/debug");
	}

	public function callback() {
		$this->set('data', $this->request->session()->read( 'opauth'));;
		$this->render("/Common/debug");
	}

}
