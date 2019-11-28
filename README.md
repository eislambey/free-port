# Free Port
Get a random and free TCP port that is ready to use.

## Installation
    composer require eislambey/free-port

## Usage

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Islambey\FreePort;

var_dump(FreePort\get());
```

## Tests
    composer test
