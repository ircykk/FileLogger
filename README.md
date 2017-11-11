# FileLogger
Simple PHP file logger

# Usage

```php
require_once 'src/FileLogger.php';

use Ircykk\FileLogger;

$log = new FileLogger('logs/', FileLogger:: ERROR, array('extension' => 'txt'));

$log->clear();

$log->info('App works just fine!');
$log->warning('Oops there is a warning...');
$log->error('Error!', array('foo' => 'bar'));
$log->debug('Write to log in debug mode only.');
```