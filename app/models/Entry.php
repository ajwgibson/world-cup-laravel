<?php

class Entry extends Eloquent {

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
    	$cutoff = strtotime('12-06-2014 20:00:00'); // GMT rather than local time (BST)
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

}