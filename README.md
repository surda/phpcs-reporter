# PHP CodeSniffer PhpStorm reporter

Prints additional PhpStorm editor url in PHPCS cli output.

## Installation
```bash
composer require --dev surda/phpcs-reporter
```

### Command line usage:
specify this report on the command line:

```bash
php vendor/bin/phpcs --report='Surda\PHPCSReport\PhpStormReport'
```

### PHPCS xml configuration
```xml
<?xml version="1.0" encoding="UTF-8"?>
<ruleset>
    <arg name="report" value="Surda\PHPCSReport\PhpStormReport" />
    ...
```