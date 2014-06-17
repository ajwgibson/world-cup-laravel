<?php

class AdminController extends BaseController {

	/**
	 * Serves up the administration home page.
	 */
	public function index()
	{
		return View::make('admin.index');
	}


	/**
	 * Recalculates the scores for the competition entries and (optionally) sends
	 * a notification email to the contestants.
	 */
	public function score()
	{
		$msg = "Updated the scores for the competition entries";

		$entries = Entry::confirmed()->get();

		foreach ($entries as $entry) {
			$entry->calculateScore();
		}

		if (Input::has('send_notifications')) {

			$send_notifications = Input::get('send_notifications');

			if ($send_notifications) {

				$entries->sortByDesc('score');
				$top_three = $entries->take(3);
				$contestants = $entries->lists('email');

		        Mail::send(
		            'emails.score',
		            array('entries' => $top_three),
		            function($message) use($contestants) {
		                $message
		                    ->to($contestants)
		                    ->subject('2014 World Cup Competition');
                    });

		        $msg = "Updated the scores for the competition entries and sent emails to the contestants.";
		    }
		}

		return Redirect::route('admin.index')
                ->withInfo($msg);
	}

	/**
	 * Serves up the matches results page.
	 */
	public function matches()
	{
		$matches = Match::all();

		return View::make('admin.matches')
				->with('matches', $matches);
	}

	/**
	 * Updates the matches results.
	 */
	public function updateMatches()
	{
		$matches = Match::all();

		foreach($matches as $match) {
            $field = "match_$match->id";
            if (Input::has($field)) {
                $match->result = Input::get($field);
            } else {
            	$match->result = null;
        	}
            $match->save();

        }

		return Redirect::route('admin.index')
                ->withInfo('Match results saved.');
	}

}