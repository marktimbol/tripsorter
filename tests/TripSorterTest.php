<?php

use App\TripSorter;
use PHPUnit\Framework\TestCase;

class TripSorterTest extends TestCase {

	public function test_it_sorts_a_given_boarding_cards()
	{
		$expectedResult = [
			[
				'from'	=> 'Madrid',
				'to'	=> 'Barcelona',
			],

			[
				'from'	=> 'Barcelona',
				'to'	=> 'Gerona Airport',
			],

			[
				'from'	=> 'Gerona Airport',
				'to'	=> 'Stockholm'
			],
			[
				'from'	=> 'Stockholm',
				'to'	=> 'New York'
			],
		];

		$unsortedBoardingCards = [
			[
				'from'	=> 'Madrid',
				'to'	=> 'Barcelona',
			],
			[
				'from'	=> 'Gerona Airport',
				'to'	=> 'Stockholm'
			],
			[
				'from'	=> 'Stockholm',
				'to'	=> 'New York'
			],
			[
				'from'	=> 'Barcelona',
				'to'	=> 'Gerona Airport',
			],
		];

		$trip = new TripSorter($unsortedBoardingCards);
		$trip->sort();

		$result = $trip->getSortedTrips();

		$this->assertEquals($expectedResult, $result);
	}
}
