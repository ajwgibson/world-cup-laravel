<?php

class HomeController extends BaseController {

	public function index()
	{
		$entries = Entry::confirmed()
					->orderBy('score', 'desc')
					->orderBy('first_name')
					->orderBy('last_name')
					->get();

		return View::make('home')
				->with('entries', $entries);
	}

	public function instructions()
	{
		return View::make('instructions');
	}

	public function results()
	{
		$matches = Match::all();

		return View::make('results')
				->with('matches', $matches);
	}

}
