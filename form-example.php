#use

```php
<?php
use SebastianBergmann\CodeCoverage\CodeCoverage;

$coverage = new CodeCoverage;

$coverage->filter()->addDirectoryToWhitelist('/path/to/src');

$coverage->start('<name of test>');

// ...
