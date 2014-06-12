<?php

class MatchSeeder extends Seeder {

	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{
		DB::table('matches')->delete();

		Match::create(array('team_a' => 'Brazil', 'team_b' => 'Croatia', 'group' => 'A', 'match_date' => new DateTime('2014-06-12')));
		Match::create(array('team_a' => 'Mexico', 'team_b' => 'Cameroon', 'group' => 'A', 'match_date' => new DateTime('2014-06-13')));
		Match::create(array('team_a' => 'Chile', 'team_b' => 'Australia', 'group' => 'B', 'match_date' => new DateTime('2014-06-13')));
		Match::create(array('team_a' => 'Spain', 'team_b' => 'Netherlands', 'group' => 'B', 'match_date' => new DateTime('2014-06-13')));
		Match::create(array('team_a' => 'Colombia', 'team_b' => 'Greece', 'group' => 'C', 'match_date' => new DateTime('2014-06-14')));
		Match::create(array('team_a' => 'England', 'team_b' => 'Italy', 'group' => 'D', 'match_date' => new DateTime('2014-06-14')));
		Match::create(array('team_a' => 'Uruguay', 'team_b' => 'Costa Rica', 'group' => 'D', 'match_date' => new DateTime('2014-06-14')));
		Match::create(array('team_a' => 'Ivory Coast', 'team_b' => 'Japan', 'group' => 'C', 'match_date' => new DateTime('2014-06-14')));
		Match::create(array('team_a' => 'France', 'team_b' => 'Honduras', 'group' => 'E', 'match_date' => new DateTime('2014-06-15')));
		Match::create(array('team_a' => 'Switzerland', 'team_b' => 'Ecuador', 'group' => 'E', 'match_date' => new DateTime('2014-06-15')));
		Match::create(array('team_a' => 'Argentina', 'team_b' => 'Bosnia and Herzegovina', 'group' => 'F', 'match_date' => new DateTime('2014-06-15')));
		Match::create(array('team_a' => 'Iran', 'team_b' => 'Nigeria', 'group' => 'F', 'match_date' => new DateTime('2014-06-16')));
		Match::create(array('team_a' => 'Germany', 'team_b' => 'Portugal', 'group' => 'G', 'match_date' => new DateTime('2014-06-16')));
		Match::create(array('team_a' => 'Ghana', 'team_b' => 'USA', 'group' => 'G', 'match_date' => new DateTime('2014-06-16')));
		Match::create(array('team_a' => 'Brazil', 'team_b' => 'Mexico', 'group' => 'A', 'match_date' => new DateTime('2014-06-17')));
		Match::create(array('team_a' => 'Belgium', 'team_b' => 'Algeria', 'group' => 'H', 'match_date' => new DateTime('2014-06-17')));
		Match::create(array('team_a' => 'Russia', 'team_b' => 'Korea Republic', 'group' => 'H', 'match_date' => new DateTime('2014-06-17')));
		Match::create(array('team_a' => 'Cameroon', 'team_b' => 'Croatia', 'group' => 'A', 'match_date' => new DateTime('2014-06-18')));
		Match::create(array('team_a' => 'Australia', 'team_b' => 'Netherlands', 'group' => 'B', 'match_date' => new DateTime('2014-06-18')));
		Match::create(array('team_a' => 'Spain', 'team_b' => 'Chile', 'group' => 'B', 'match_date' => new DateTime('2014-06-18')));
		Match::create(array('team_a' => 'Colombia', 'team_b' => 'Ivory Coast', 'group' => 'C', 'match_date' => new DateTime('2014-06-19')));
		Match::create(array('team_a' => 'Japan', 'team_b' => 'Greece', 'group' => 'C', 'match_date' => new DateTime('2014-06-19')));
		Match::create(array('team_a' => 'Uruguay', 'team_b' => 'England', 'group' => 'D', 'match_date' => new DateTime('2014-06-19')));
		Match::create(array('team_a' => 'Italy', 'team_b' => 'Costa Rica', 'group' => 'D', 'match_date' => new DateTime('2014-06-20')));
		Match::create(array('team_a' => 'Honduras', 'team_b' => 'Ecuador', 'group' => 'E', 'match_date' => new DateTime('2014-06-20')));
		Match::create(array('team_a' => 'Switzerland', 'team_b' => 'France', 'group' => 'E', 'match_date' => new DateTime('2014-06-20')));
		Match::create(array('team_a' => 'Argentina', 'team_b' => 'Iran', 'group' => 'F', 'match_date' => new DateTime('2014-06-21')));
		Match::create(array('team_a' => 'Nigeria', 'team_b' => 'Bosnia and Herzegovina', 'group' => 'F', 'match_date' => new DateTime('2014-06-21')));
		Match::create(array('team_a' => 'Germany', 'team_b' => 'Ghana', 'group' => 'G', 'match_date' => new DateTime('2014-06-21')));
		Match::create(array('team_a' => 'USA', 'team_b' => 'Portugal', 'group' => 'G', 'match_date' => new DateTime('2014-06-22')));
		Match::create(array('team_a' => 'Belgium', 'team_b' => 'Russia', 'group' => 'H', 'match_date' => new DateTime('2014-06-22')));
		Match::create(array('team_a' => 'Korea Republic', 'team_b' => 'Algeria', 'group' => 'H', 'match_date' => new DateTime('2014-06-22')));
		Match::create(array('team_a' => 'Cameroon', 'team_b' => 'Brazil', 'group' => 'A', 'match_date' => new DateTime('2014-06-23')));
		Match::create(array('team_a' => 'Croatia', 'team_b' => 'Mexico', 'group' => 'A', 'match_date' => new DateTime('2014-06-23')));
		Match::create(array('team_a' => 'Australia', 'team_b' => 'Spain', 'group' => 'B', 'match_date' => new DateTime('2014-06-23')));
		Match::create(array('team_a' => 'Netherlands', 'team_b' => 'Chile', 'group' => 'B', 'match_date' => new DateTime('2014-06-23')));
		Match::create(array('team_a' => 'Greece', 'team_b' => 'Ivory Coast', 'group' => 'C', 'match_date' => new DateTime('2014-06-24')));
		Match::create(array('team_a' => 'Japan', 'team_b' => 'Colombia', 'group' => 'C', 'match_date' => new DateTime('2014-06-24')));
		Match::create(array('team_a' => 'Costa Rica', 'team_b' => 'England', 'group' => 'D', 'match_date' => new DateTime('2014-06-24')));
		Match::create(array('team_a' => 'Italy', 'team_b' => 'Uruguay', 'group' => 'D', 'match_date' => new DateTime('2014-06-24')));
		Match::create(array('team_a' => 'Ecuador', 'team_b' => 'France', 'group' => 'E', 'match_date' => new DateTime('2014-06-25')));
		Match::create(array('team_a' => 'Honduras', 'team_b' => 'Switzerland', 'group' => 'E', 'match_date' => new DateTime('2014-06-25')));
		Match::create(array('team_a' => 'Bosnia and Herzegovina', 'team_b' => 'Iran', 'group' => 'F', 'match_date' => new DateTime('2014-06-25')));
		Match::create(array('team_a' => 'Nigeria', 'team_b' => 'Argentina', 'group' => 'F', 'match_date' => new DateTime('2014-06-25')));
		Match::create(array('team_a' => 'Portugal', 'team_b' => 'Ghana', 'group' => 'G', 'match_date' => new DateTime('2014-06-26')));
		Match::create(array('team_a' => 'USA', 'team_b' => 'Germany', 'group' => 'G', 'match_date' => new DateTime('2014-06-26')));
		Match::create(array('team_a' => 'Algeria', 'team_b' => 'Russia', 'group' => 'H', 'match_date' => new DateTime('2014-06-26')));
		Match::create(array('team_a' => 'Korea Republic', 'team_b' => 'Belgium', 'group' => 'H', 'match_date' => new DateTime('2014-06-26')));

	}

}
