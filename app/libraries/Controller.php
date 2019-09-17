<?php
	/*
	 * Base controller
	 * Loads the models and views
	 */

	class Controller {
		// Load model
		public function model($model)
		{
			require_once '../models/' . $model . '.php';

			return new $model();
		}

		// Load view
		public function view($view, $data = [])
		{
			// Check for view file
			if (file_exists('../app/views/' . $view . '.php')) {
				require_once '../app/views/' . $view . '.php';
			} else {
				// View dose not exist
				die('View dose not exist');
			}
		}
	}