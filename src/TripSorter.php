<?php
namespace App;

class TripSorter
{
	protected $boardingCards;
	protected $sortedBoardingCards;

	public function __construct($boardingCards)
	{
		$this->boardingCards = $boardingCards;
	}

	public function sort()
	{		
		$this->sortedBoardingCards = [array_pop($this->boardingCards)];

		for( $i = $this->ticketCount(); $i--; )
		{		
			foreach( $this->boardingCards as $boardingCard )
			{
				if( $this->isMyNextDestination($boardingCard) ) {
					$this->appendBoardingCard($boardingCard);
				} elseif( $this->isMyPreviousDestination($boardingCard) ) {
					$this->prependBoardingCard($boardingCard);
				}
			}
		}
		return $this->sortedBoardingCards;
	}

	protected function ticketCount()
	{
		return count($this->boardingCards);
	}

	protected function isMyNextDestination($boardingCard)
	{
		return end($this->sortedBoardingCards)['to'] === $boardingCard['from'];
	}

	protected function isMyPreviousDestination($boardingCard)
	{
		return reset($this->sortedBoardingCards)['from'] === $boardingCard['to'];
	}

	protected function appendBoardingCard($boardingCard)
	{
		return array_push($this->sortedBoardingCards, $boardingCard);
	}

	protected function prependBoardingCard($boardingCard)
	{
		return array_unshift($this->sortedBoardingCards, $boardingCard);
	}

	public function getSortedTrips()
	{
		return $this->sortedBoardingCards;
	}
}