<?php

class Entry extends Eloquent {

    const GROUP_MATCH_SCORE         = 1;
    const GROUP_PLACE_SCORE         = 1;
    const GROUP_PLACE_PERFECT_SCORE = 2;
    const FINAL_SIXTEEN_SCORE       = 1;
    const FINAL_EIGHT_SCORE         = 2;
    const FINAL_FOUR_SCORE          = 4;
    const FINAL_TWO_SCORE           = 6;
    const WINNER_SCORE              = 8;


	// Mass Assignment
    protected $fillable = array(

		'ga_1', 'ga_2', 'ga_3', 'ga_4',
		'gb_1', 'gb_2', 'gb_3', 'gb_4',
		'gc_1', 'gc_2', 'gc_3', 'gc_4',
		'gd_1', 'gd_2', 'gd_3', 'gd_4',
		'ge_1', 'ge_2', 'ge_3', 'ge_4',
		'gf_1', 'gf_2', 'gf_3', 'gf_4',
		'gg_1', 'gg_2', 'gg_3', 'gg_4',
		'gh_1', 'gh_2', 'gh_3', 'gh_4',

		'f16_1', 'f16_2', 'f16_3', 'f16_4', 'f16_5', 'f16_6', 'f16_7', 'f16_8', 'f16_9', 'f16_10', 'f16_11', 'f16_12', 'f16_13', 'f16_14', 'f16_15', 'f16_16',

		'f8_1', 'f8_2', 'f8_3', 'f8_4', 'f8_5', 'f8_6', 'f8_7', 'f8_8',

		'f4_1', 'f4_2', 'f4_3', 'f4_4',

		'f2_1', 'f2_2',

		'winner'
    );


    // Validation

    public static $entry_rules = array(
        'email'      => 'required|email|max:100|unique:entries,email',
        'first_name' => 'required|max:100',
        'last_name'  => 'required|max:100',
        'secret'     => 'required|confirmed|min:6'
    );

    public static $prediction_rules = array(
        'ga_1' => 'required', 'ga_2' => 'required', 'ga_3' => 'required', 'ga_4' => 'required',
        'gb_1' => 'required', 'gb_2' => 'required', 'gb_3' => 'required', 'gb_4' => 'required',
        'gc_1' => 'required', 'gc_2' => 'required', 'gc_3' => 'required', 'gc_4' => 'required',
        'gd_1' => 'required', 'gd_2' => 'required', 'gd_3' => 'required', 'gd_4' => 'required',
        'ge_1' => 'required', 'ge_2' => 'required', 'ge_3' => 'required', 'ge_4' => 'required',
        'gf_1' => 'required', 'gf_2' => 'required', 'gf_3' => 'required', 'gf_4' => 'required',
        'gg_1' => 'required', 'gg_2' => 'required', 'gg_3' => 'required', 'gg_4' => 'required',
        'gh_1' => 'required', 'gh_2' => 'required', 'gh_3' => 'required', 'gh_4' => 'required',

        'f16_1'  => 'required', 'f16_2'  => 'required', 'f16_3'  => 'required', 'f16_4'  => 'required',
        'f16_5'  => 'required', 'f16_6'  => 'required', 'f16_7'  => 'required', 'f16_8'  => 'required',
        'f16_9'  => 'required', 'f16_10' => 'required', 'f16_11' => 'required', 'f16_12' => 'required',
        'f16_13' => 'required', 'f16_14' => 'required', 'f16_15' => 'required', 'f16_16' => 'required',

        'f8_1' => 'required', 'f8_2' => 'required', 'f8_3' => 'required', 'f8_4' => 'required',
        'f8_5' => 'required', 'f8_6' => 'required', 'f8_7' => 'required', 'f8_8' => 'required',

        'f4_1' => 'required', 'f4_2' => 'required', 'f4_3' => 'required', 'f4_4' => 'required',

        'f2_1' => 'required', 'f2_2' => 'required',

        'winner'  => 'required'
    );

    public static $prediction_rules_messages = array(
        'ga_1.required' => 'The Group A, Position 1 prediction is required', 
        'ga_2.required' => 'The Group A, Position 2 prediction is required', 
        'ga_3.required' => 'The Group A, Position 3 prediction is required', 
        'ga_4.required' => 'The Group A, Position 4 prediction is required',
        'gb_1.required' => 'The Group B, Position 1 prediction is required', 
        'gb_2.required' => 'The Group B, Position 2 prediction is required', 
        'gb_3.required' => 'The Group B, Position 3 prediction is required', 
        'gb_4.required' => 'The Group B, Position 4 prediction is required',
        'gc_1.required' => 'The Group C, Position 1 prediction is required', 
        'gc_2.required' => 'The Group C, Position 2 prediction is required', 
        'gc_3.required' => 'The Group C, Position 3 prediction is required', 
        'gc_4.required' => 'The Group C, Position 4 prediction is required',
        'gd_1.required' => 'The Group D, Position 1 prediction is required', 
        'gd_2.required' => 'The Group D, Position 2 prediction is required', 
        'gd_3.required' => 'The Group D, Position 3 prediction is required', 
        'gd_4.required' => 'The Group D, Position 4 prediction is required',
        'ge_1.required' => 'The Group E, Position 1 prediction is required', 
        'ge_2.required' => 'The Group E, Position 2 prediction is required', 
        'ge_3.required' => 'The Group E, Position 3 prediction is required', 
        'ge_4.required' => 'The Group E, Position 4 prediction is required',
        'gf_1.required' => 'The Group F, Position 1 prediction is required', 
        'gf_2.required' => 'The Group F, Position 2 prediction is required', 
        'gf_3.required' => 'The Group F, Position 3 prediction is required', 
        'gf_4.required' => 'The Group F, Position 4 prediction is required',
        'gg_1.required' => 'The Group G, Position 1 prediction is required', 
        'gg_2.required' => 'The Group G, Position 2 prediction is required', 
        'gg_3.required' => 'The Group G, Position 3 prediction is required', 
        'gg_4.required' => 'The Group G, Position 4 prediction is required',
        'gh_1.required' => 'The Group H, Position 1 prediction is required', 
        'gh_2.required' => 'The Group H, Position 2 prediction is required', 
        'gh_3.required' => 'The Group H, Position 3 prediction is required', 
        'gh_4.required' => 'The Group H, Position 4 prediction is required',

        'f16_1.required'  => 'The final 16, team 1 prediction is required', 
        'f16_2.required'  => 'The final 16, team 2 prediction is required', 
        'f16_3.required'  => 'The final 16, team 3 prediction is required', 
        'f16_4.required'  => 'The final 16, team 4 prediction is required', 
        'f16_5.required'  => 'The final 16, team 5 prediction is required', 
        'f16_6.required'  => 'The final 16, team 6 prediction is required', 
        'f16_7.required'  => 'The final 16, team 7 prediction is required', 
        'f16_8.required'  => 'The final 16, team 8 prediction is required', 
        'f16_9.required'  => 'The final 16, team 9 prediction is required', 
        'f16_10.required' => 'The final 16, team 10 prediction is required', 
        'f16_11.required' => 'The final 16, team 11 prediction is required', 
        'f16_12.required' => 'The final 16, team 12 prediction is required', 
        'f16_13.required' => 'The final 16, team 13 prediction is required', 
        'f16_14.required' => 'The final 16, team 14 prediction is required', 
        'f16_15.required' => 'The final 16, team 15 prediction is required', 
        'f16_16.required' => 'The final 16, team 16 prediction is required',

        'f8_1.required' => 'The final 8, team 1 prediction is required', 
        'f8_2.required' => 'The final 8, team 2 prediction is required', 
        'f8_3.required' => 'The final 8, team 3 prediction is required', 
        'f8_4.required' => 'The final 8, team 4 prediction is required', 
        'f8_5.required' => 'The final 8, team 5 prediction is required', 
        'f8_6.required' => 'The final 8, team 6 prediction is required', 
        'f8_7.required' => 'The final 8, team 7 prediction is required', 
        'f8_8.required' => 'The final 8, team 8 prediction is required',

        'f4_1.required' => 'The final 4, team 1 prediction is required', 
        'f4_2.required' => 'The final 4, team 2 prediction is required', 
        'f4_3.required' => 'The final 4, team 3 prediction is required', 
        'f4_4.required' => 'The final 4, team 4 prediction is required',

        'f2_1.required' => 'The final 2, team 1 prediction is required', 
        'f2_2.required' => 'The final 2, team 2 prediction is required',

        'winner.required'  => 'The winner prediction is required'
    );


    // The teams in the various groups
    public static $group_a_teams = array(
    	'Brazil'   => 'Brazil', 
    	'Croatia'  => 'Croatia', 
    	'Mexico'   => 'Mexico', 
    	'Cameroon' => 'Cameroon'
	);
    public static $group_b_teams = array(
    	'Spain'       => 'Spain', 
    	'Netherlands' => 'Netherlands', 
    	'Chile'       => 'Chile', 
    	'Australia'   => 'Australia'
	);
	public static $group_c_teams = array(
    	'Colombia'       => 'Colombia', 
    	'Greece'         => 'Greece', 
    	'Ivory Coast'    => 'Ivory Coast', 
    	'Japan'          => 'Japan'
	);
	public static $group_d_teams = array(
    	'Uruguay'    => 'Uruguay', 
    	'Costa Rica' => 'Costa Rica', 
    	'England'    => 'England', 
    	'Italy'      => 'Italy'
	);
	public static $group_e_teams = array(
    	'Switzerland' => 'Switzerland', 
    	'Ecuador'     => 'Ecuador', 
    	'France'      => 'France', 
    	'Honduras'    => 'Honduras'
	);
	public static $group_f_teams = array(
    	'Argentina'              => 'Argentina', 
    	'Bosnia and Herzegovina' => 'Bosnia and Herzegovina', 
    	'Iran'                   => 'Iran', 
    	'Nigeria'                => 'Nigeria'
	);
	public static $group_g_teams = array(
    	'Germany'  => 'Germany', 
    	'Portugal' => 'Portugal', 
    	'Ghana'    => 'Ghana', 
    	'USA'      => 'USA'
	);
	public static $group_h_teams = array(
    	'Belgium'        => 'Belgium', 
    	'Algeria'        => 'Algeria', 
    	'Russia'         => 'Russia', 
    	'Korea Republic' => 'Korea Republic'
	);


    /**
     * Relationship to many match predictions.
     */
    public function matchPredictions()
    {
        return $this->hasMany('MatchPrediction');
    }

	/**
	 * Returns all the teams in the competition sorted naturaly.
	 */
	public static function getAllTeams() 
    {

        $all_teams = 
			self::$group_a_teams
			+ self::$group_b_teams
			+ self::$group_c_teams
			+ self::$group_d_teams
			+ self::$group_e_teams
			+ self::$group_f_teams
			+ self::$group_g_teams
			+ self::$group_h_teams;

        natsort($all_teams);

        return $all_teams;
	}

    /**
     * Returns a true or false value to indicate if this
     * entry can be edited or not.
     *
     * This is based on a cut-off date that is, in turn, based
     * on the date and time of the first group match of the 2014 World Cup.
     */
    public static function canCreateOrEdit() 
    {
    	$cutoff = strtotime('13-06-2014 16:00:00'); // GMT rather than local time (BST)
    	$now = time();

    	if ($now < $cutoff) return true;
    	return false;
    }

    /**
     * Returns the entrant's full name as a single string.
     */
    public function fullName()
    {
        return "$this->first_name $this->last_name";
    }

    /**
     * Returns the entrant's full name and email (in brackets) as a single string.
     */
    public function fullNameAndEmailAddress()
    {
        $full_name = $this->fullName();
        return "$full_name ($this->email)";
    }

    /**
     * A query scope to return confirmed entries only.
     */
    public function scopeConfirmed($query)
    {
        return $query->whereNull('confirmation');
    }

    /**
     * Calculates the score for this entry.
     */
    public function calculateScore()
    {
        // Start with the group matches
        $score = $this->calculateMatchPredictionsScore();

        $admin_entry = Entry::where('email', 'admin')->first();
        if ($admin_entry) {
            $score = $score + $this->calculateGroupPredictionsScore($admin_entry);
            $score = $score + $this->calculateFinalSixteenScore($admin_entry);
            $score = $score + $this->calculateFinalEightScore($admin_entry);
            $score = $score + $this->calculateFinalFourScore($admin_entry);
            $score = $score + $this->calculateFinalTwoScore($admin_entry);
            $score = $score + $this->calculateWinnerScore($admin_entry);
        }

        $this->score = $score;
        $this->save();
    }

    /**
     * Calculates the score for this entry's match predictions.
     */
    private function calculateMatchPredictionsScore()
    {
        $score = 0;

        foreach ($this->matchPredictions as $match_prediction) {

            $match = Match::where('team_a', $match_prediction->team_a)
                                ->where('team_b', $match_prediction->team_b)
                                ->first();

            if ($match && $match->result && $match->result == $match_prediction->result) $score = $score + self::GROUP_MATCH_SCORE;
        }

        return $score;
    }

    /**
     * Calculates the score for this entry's group ranking predictions.
     */
    private function calculateGroupPredictionsScore($admin_entry)
    {
        $ga_score = 0;
        if ($this->ga_1 && $this->ga_1 == $admin_entry->ga_1) $ga_score = $ga_score + self::GROUP_PLACE_SCORE;
        if ($this->ga_2 && $this->ga_2 == $admin_entry->ga_2) $ga_score = $ga_score + self::GROUP_PLACE_SCORE;
        if ($this->ga_3 && $this->ga_3 == $admin_entry->ga_3) $ga_score = $ga_score + self::GROUP_PLACE_SCORE;
        if ($this->ga_4 && $this->ga_4 == $admin_entry->ga_4) $ga_score = $ga_score + self::GROUP_PLACE_SCORE;

        if ($ga_score == (4 * self::GROUP_PLACE_SCORE)) $ga_score = $ga_score + self::GROUP_PLACE_PERFECT_SCORE;

        $gb_score = 0;
        if ($this->gb_1 && $this->gb_1 == $admin_entry->gb_1) $gb_score = $gb_score + self::GROUP_PLACE_SCORE;
        if ($this->gb_2 && $this->gb_2 == $admin_entry->gb_2) $gb_score = $gb_score + self::GROUP_PLACE_SCORE;
        if ($this->gb_3 && $this->gb_3 == $admin_entry->gb_3) $gb_score = $gb_score + self::GROUP_PLACE_SCORE;
        if ($this->gb_4 && $this->gb_4 == $admin_entry->gb_4) $gb_score = $gb_score + self::GROUP_PLACE_SCORE;

        if ($gb_score == (4 * self::GROUP_PLACE_SCORE)) $gb_score = $gb_score + self::GROUP_PLACE_PERFECT_SCORE;

        $gc_score = 0;
        if ($this->gc_1 && $this->gc_1 == $admin_entry->gc_1) $gc_score = $gc_score + self::GROUP_PLACE_SCORE;
        if ($this->gc_2 && $this->gc_2 == $admin_entry->gc_2) $gc_score = $gc_score + self::GROUP_PLACE_SCORE;
        if ($this->gc_3 && $this->gc_3 == $admin_entry->gc_3) $gc_score = $gc_score + self::GROUP_PLACE_SCORE;
        if ($this->gc_4 && $this->gc_4 == $admin_entry->gc_4) $gc_score = $gc_score + self::GROUP_PLACE_SCORE;

        if ($gc_score == (4 * self::GROUP_PLACE_SCORE)) $gc_score = $gc_score + self::GROUP_PLACE_PERFECT_SCORE;

        $gd_score = 0;
        if ($this->gd_1 && $this->gd_1 == $admin_entry->gd_1) $gd_score = $gd_score + self::GROUP_PLACE_SCORE;
        if ($this->gd_2 && $this->gd_2 == $admin_entry->gd_2) $gd_score = $gd_score + self::GROUP_PLACE_SCORE;
        if ($this->gd_3 && $this->gd_3 == $admin_entry->gd_3) $gd_score = $gd_score + self::GROUP_PLACE_SCORE;
        if ($this->gd_4 && $this->gd_4 == $admin_entry->gd_4) $gd_score = $gd_score + self::GROUP_PLACE_SCORE;

        if ($gd_score == (4 * self::GROUP_PLACE_SCORE)) $gd_score = $gd_score + self::GROUP_PLACE_PERFECT_SCORE;

        $ge_score = 0;
        if ($this->ge_1 && $this->ge_1 == $admin_entry->ge_1) $ge_score = $ge_score + self::GROUP_PLACE_SCORE;
        if ($this->ge_2 && $this->ge_2 == $admin_entry->ge_2) $ge_score = $ge_score + self::GROUP_PLACE_SCORE;
        if ($this->ge_3 && $this->ge_3 == $admin_entry->ge_3) $ge_score = $ge_score + self::GROUP_PLACE_SCORE;
        if ($this->ge_4 && $this->ge_4 == $admin_entry->ge_4) $ge_score = $ge_score + self::GROUP_PLACE_SCORE;

        if ($ge_score == (4 * self::GROUP_PLACE_SCORE)) $ge_score = $ge_score + self::GROUP_PLACE_PERFECT_SCORE;

        $gf_score = 0;
        if ($this->gf_1 && $this->gf_1 == $admin_entry->gf_1) $gf_score = $gf_score + self::GROUP_PLACE_SCORE;
        if ($this->gf_2 && $this->gf_2 == $admin_entry->gf_2) $gf_score = $gf_score + self::GROUP_PLACE_SCORE;
        if ($this->gf_3 && $this->gf_3 == $admin_entry->gf_3) $gf_score = $gf_score + self::GROUP_PLACE_SCORE;
        if ($this->gf_4 && $this->gf_4 == $admin_entry->gf_4) $gf_score = $gf_score + self::GROUP_PLACE_SCORE;

        if ($gf_score == (4 * self::GROUP_PLACE_SCORE)) $gf_score = $gf_score + self::GROUP_PLACE_PERFECT_SCORE;

        $gg_score = 0;
        if ($this->gg_1 && $this->gg_1 == $admin_entry->gg_1) $gg_score = $gg_score + self::GROUP_PLACE_SCORE;
        if ($this->gg_2 && $this->gg_2 == $admin_entry->gg_2) $gg_score = $gg_score + self::GROUP_PLACE_SCORE;
        if ($this->gg_3 && $this->gg_3 == $admin_entry->gg_3) $gg_score = $gg_score + self::GROUP_PLACE_SCORE;
        if ($this->gg_4 && $this->gg_4 == $admin_entry->gg_4) $gg_score = $gg_score + self::GROUP_PLACE_SCORE;

        if ($gg_score == (4 * self::GROUP_PLACE_SCORE)) $gg_score = $gg_score + self::GROUP_PLACE_PERFECT_SCORE;

        $gh_score = 0;
        if ($this->gh_1 && $this->gh_1 == $admin_entry->gh_1) $gh_score = $gh_score + self::GROUP_PLACE_SCORE;
        if ($this->gh_2 && $this->gh_2 == $admin_entry->gh_2) $gh_score = $gh_score + self::GROUP_PLACE_SCORE;
        if ($this->gh_3 && $this->gh_3 == $admin_entry->gh_3) $gh_score = $gh_score + self::GROUP_PLACE_SCORE;
        if ($this->gh_4 && $this->gh_4 == $admin_entry->gh_4) $gh_score = $gh_score + self::GROUP_PLACE_SCORE;

        if ($gh_score == (4 * self::GROUP_PLACE_SCORE)) $gh_score = $gh_score + self::GROUP_PLACE_PERFECT_SCORE;

        return $ga_score + $gb_score + $gc_score + $gd_score + $ge_score + $gf_score + $gg_score + $gh_score;
    }

    /**
     * Calculates the score for this entry's final 16 predictions.
     */
    private function calculateFinalSixteenScore($admin_entry)
    {
        $entry_sixteen = array_filter(
            array(
                $this->f16_1, 
                $this->f16_2, 
                $this->f16_3, 
                $this->f16_4,
                $this->f16_5, 
                $this->f16_6, 
                $this->f16_7, 
                $this->f16_8,
                $this->f16_9, 
                $this->f16_10, 
                $this->f16_11, 
                $this->f16_12,
                $this->f16_13, 
                $this->f16_14, 
                $this->f16_15, 
                $this->f16_16));

        $admin_entry_sixteen = array_filter(
            array(
                $admin_entry->f16_1, 
                $admin_entry->f16_2, 
                $admin_entry->f16_3, 
                $admin_entry->f16_4,
                $admin_entry->f16_5, 
                $admin_entry->f16_6, 
                $admin_entry->f16_7, 
                $admin_entry->f16_8,
                $admin_entry->f16_9, 
                $admin_entry->f16_10, 
                $admin_entry->f16_11, 
                $admin_entry->f16_12,
                $admin_entry->f16_13, 
                $admin_entry->f16_14, 
                $admin_entry->f16_15, 
                $admin_entry->f16_16));

        $correct_predictions = array_intersect($admin_entry_sixteen, $entry_sixteen);

        return count($correct_predictions) * self::FINAL_SIXTEEN_SCORE;
    }

    /**
     * Calculates the score for this entry's final 8 predictions.
     */
    private function calculateFinalEightScore($admin_entry)
    {
        $entry_eight = array_filter(
            array(
                $this->f8_1, 
                $this->f8_2, 
                $this->f8_3, 
                $this->f8_4,
                $this->f8_5, 
                $this->f8_6, 
                $this->f8_7, 
                $this->f8_8));

        $admin_entry_eight = array_filter( 
            array(
                $admin_entry->f8_1, 
                $admin_entry->f8_2, 
                $admin_entry->f8_3, 
                $admin_entry->f8_4,
                $admin_entry->f8_5, 
                $admin_entry->f8_6, 
                $admin_entry->f8_7, 
                $admin_entry->f8_8));

        $correct_predictions = array_intersect($admin_entry_eight, $entry_eight);

        return count($correct_predictions) * self::FINAL_EIGHT_SCORE;
    }

    /**
     * Calculates the score for this entry's final 4 predictions.
     */
    private function calculateFinalFourScore($admin_entry)
    {
        $entry_four = array_filter(
            array(
                $this->f4_1, 
                $this->f4_2, 
                $this->f4_3, 
                $this->f4_4));

        $admin_entry_four = array_filter(
            array(
                $admin_entry->f4_1, 
                $admin_entry->f4_2, 
                $admin_entry->f4_3, 
                $admin_entry->f4_4));

        $correct_predictions = array_intersect($admin_entry_four, $entry_four);

        return count($correct_predictions) * self::FINAL_FOUR_SCORE;
    }

    /**
     * Calculates the score for this entry's final 2 predictions.
     */
    private function calculateFinalTwoScore($admin_entry)
    {
        $entry_two = array_filter(
            array(
                $this->f2_1, 
                $this->f4_2));

        $admin_entry_two = array_filter(
            array(
                $admin_entry->f2_1, 
                $admin_entry->f2_2));

        $correct_predictions = array_intersect($admin_entry_two, $entry_two);

        return count($correct_predictions) * self::FINAL_TWO_SCORE;
    }

    /**
     * Calculates the score for this entry's winner prediction.
     */
    private function calculateWinnerScore($admin_entry)
    {
        if ($admin_entry->winner && ($admin_entry->winner == $this->winner)) return self::WINNER_SCORE;
        return 0;
    }

}