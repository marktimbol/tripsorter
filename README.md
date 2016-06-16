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

1. From the project directory, do a `composer install` to install PHPUnit.
2. type `vendor/bin/phpunit` then pres `enter`;
