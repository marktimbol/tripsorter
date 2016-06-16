Trip Sorter

```php
use App\TripSorter;

$boardingCards = [
  [
    'from'  => 'Madrid',
    'to'  => 'Barcelona',
  ],
  [
    'from'  => 'Gerona Airport',
    'to'  => 'Stockholm'
  ],
  [
    'from'  => 'Stockholm',
    'to'  => 'New York'
  ],
  [
    'from'  => 'Barcelona',
    'to'  => 'Gerona Airport',
  ],
];

$trip = new TripSorter($boardingCards);
var_dump($trip->sort());

```

Tests

1. `composer install`
2. From your terminal, navigate to the project directory and type `vendor/bin/phpunit`